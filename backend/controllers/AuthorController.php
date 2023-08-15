<?php

namespace backend\controllers;

use backend\models\Author;
use backend\models\AuthorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuthorController implements the CRUD actions for Author model.
 */
class AuthorController extends Controller
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
     * Lists all Author models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AuthorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Author model.
     * @param int $author_id Author ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($author_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($author_id),
        ]);
    }

    /**
     * Creates a new Author model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Author();
        $time = time();
        $model->created_at = $time;
        $model->updated_at = $time;

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                // Kiểm tra trùng lặp
                $existingAuthor = Author::findOne(['author_name' => $model->author_name]);
                if ($existingAuthor !== null) {
                    // Hiển thị thông báo lỗi và không lưu dữ liệu
                    $model->addError('author_name', 'Tác giả đã tồn tại');
                } elseif ($model->save()) {
                    return $this->redirect(['view', 'author_id' => $model->author_id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Author model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $author_id Author ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($author_id)
    {
        $model = $this->findModel($author_id);
        $model->updated_at = time();

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'author_id' => $model->author_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Author model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $author_id Author ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($author_id)
    {
        $author = $this->findModel($author_id);

        $author->status = 0;
        $author->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Author model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $author_id Author ID
     * @return Author the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($author_id)
    {
        if (($model = Author::findOne(['author_id' => $author_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
