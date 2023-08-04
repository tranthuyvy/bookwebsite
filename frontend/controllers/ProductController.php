<?php

namespace frontend\controllers;

use frontend\models\Product;
use frontend\models\Author;

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
        $data_detail = new Product();
        $data_detail = $data_detail->getProductById($id);

        // Kiểm tra nếu product có tác giả
        if (!empty($data_detail['author_id'])) {
            $author_data = new Product();
            $author_data = $author_data->getAuthor($data_detail['author_id']);

            // Kiểm tra nếu tìm thấy tác giả
            if ($author_data !== null) {
                $author_name = $author_data['author_name'];
            } else {
                $author_name = '';
            }
        } else {
            $author_name = '';
        }

        return $this->render('detail', [
            'data_detail' => $data_detail,
            'author_name' => $author_name,
        ]);
    }
}
