<?php

namespace frontend\controllers;

use frontend\models\District;
use frontend\models\DistrictSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DistrictController implements the CRUD actions for District model.
 */
class DistrictController extends Controller
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
     * Lists all District models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DistrictSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    protected function findModel($district_id)
    {
        if (($model = District::findOne(['district_id' => $district_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionGetdistrict($id){
        $district = new District();
        $district = $district->getById($id);
        return $this->renderAjax("districtOption",['data'=>$district]);
    }
}
