<?php

namespace frontend\widgets;

use frontend\models\Product;

use yii\base\Widget;
use yii\helpers\Html;

class bestSellerProductWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $product = new Product();
        $dataBestSeller = $product->getBestSellerProduct();

        return $this->render('bestSellerProductWidget', [
            'dataBestSeller' => $dataBestSeller,
        ]);
    }
}
?>