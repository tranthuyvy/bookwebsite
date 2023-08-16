<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Wishlist;
use frontend\models\WishlistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * WishlistController implements the CRUD actions for Wishlist model.
 */
class WishlistController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionAdd($id)
    {
        $model = new Wishlist();
        $model->user_id = Yii::$app->user->id;
        $model->product_id = $id;
        $model->created_at = time();
        if ($model->save()) {
            return 'success';
        } else {
            var_dump($model->errors);
            return 'error';
        }
    }

    public function actionWishlist()
    {

        $wishlistItems = Wishlist::find()
            ->select('product_id')
            ->with('product')
            ->where(['user_id' => Yii::$app->user->id])
            ->groupBy('product_id')
            ->asArray()
            ->all();

        return $this->render('wishlist', ['wishlistItems' => $wishlistItems]);
    }

    public function actionRemove($id)
    {
        $user_id = Yii::$app->user->id;

        // Tìm và xóa sản phẩm khỏi Wishlist của người dùng
        $wishlistItem = Wishlist::findOne(['user_id' => $user_id, 'product_id' => $id]);

        if ($wishlistItem) {
            $wishlistItem->delete();
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['success' => true];
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['success' => false];
    }
}
