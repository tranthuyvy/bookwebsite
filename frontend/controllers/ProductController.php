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

    public function  actionListproductbysupplier($id){
        $data_supplier = new Product();
        $data_supplier = $data_supplier->getProductBySupplierId($id);

        return $this->render('listProductBySupplier', [
           "data_supplier" => $data_supplier,
        ]);
    }

    public function actionDetail($id)
    {
//        $data_detail = Product::getProductById($id);
        $data_detail = new Product();
        $data_detail = $data_detail->getProductById($id);

        $author_name = Product::getAuthorName($data_detail['author_id']);

        return $this->render('detail', [
            'data_detail' => $data_detail,
            'author_name' => $author_name,
        ]);
    }
}
