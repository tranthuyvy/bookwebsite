<?php

namespace frontend\controllers;

use frontend\models\Order;
use frontend\models\OrderDetail;
use frontend\models\OrderSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
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

    /**
     * Lists all Order models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order model.
     * @param int $order_id Order ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($order_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($order_id),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'order_id' => $model->order_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $order_id Order ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($order_id)
    {
        $model = $this->findModel($order_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_id' => $model->order_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $order_id Order ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($order_id)
    {
        $this->findModel($order_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $order_id Order ID
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($order_id)
    {
        if (($model = Order::findOne(['order_id' => $order_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionHistory()
    {
        $user_id = Yii::$app->user->identity->id;

        $orders = Order::find()
            ->asArray()
            ->where(['user_id' => $user_id])
            ->orderBy(['created_at' => SORT_DESC])
            ->all();

        $orderIds = array_column($orders, 'order_id');

        $orderDetails = OrderDetail::find()
            ->asArray()
            ->where(['order_id' => $orderIds])
            ->all();

        return $this->render('history', [
            'orders' => $orders,
            'orderDetails' => $orderDetails,
            'getProductInfo' => 'getProductInfo',
        ]);
    }

    public function actionCancel($order_id)
    {
        $order = Order::findOne($order_id);

        if (!$order) {
            Yii::$app->session->setFlash('error', 'Không tìm thấy đơn hàng.');
        } else {
            $order->status = 6;
            if ($order->save()) {
                Yii::$app->session->setFlash('success', 'Yêu Cầu Hủy Đơn Đã Được Gửi');
            } else {
                Yii::$app->session->setFlash('error', 'Đã xảy ra lỗi khi gửi yêu cầu hủy đơn hàng.');
            }
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

}
