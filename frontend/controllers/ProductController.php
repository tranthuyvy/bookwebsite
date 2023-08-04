<?php

namespace frontend\controllers;

use frontend\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionListproduct($id){
        $data = new Product();
        $data = $data->getProductByGroupId($id);
        return $this->render('listProduct', ["data"=>$data]);
    }
}
