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
        return $this->render('listProduct', [
            "data" => $data,
        ]);
    }

    public function actionListproductbyauthor($id)
    {
        $data_author = new Product();
        $data_author = $data_author->getProductByAuthorId($id);

        return $this->render('listProductByAuthor', [
            "data_author" => $data_author,
        ]);
    }
}
