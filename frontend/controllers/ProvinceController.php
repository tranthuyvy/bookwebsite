<?php

namespace frontend\controllers;

use frontend\models\Province;
use frontend\models\ProvinceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProvinceController implements the CRUD actions for Province model.
 */
class ProvinceController extends Controller
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
     * Lists all Province models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProvinceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Province model.
     * @param int $province_id Province ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($province_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($province_id),
        ]);
    }

    /**
     * Creates a new Province model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Province();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'province_id' => $model->province_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Province model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $province_id Province ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($province_id)
    {
        $model = $this->findModel($province_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'province_id' => $model->province_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Province model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $province_id Province ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($province_id)
    {
        $this->findModel($province_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Province model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $province_id Province ID
     * @return Province the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($province_id)
    {
        if (($model = Province::findOne(['province_id' => $province_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
