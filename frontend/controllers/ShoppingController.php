<?php

namespace frontend\controllers;
use frontend\models\Product;
use frontend\common\cart;
use Yii;
use yii\web\Session;

class ShoppingController extends \yii\web\Controller
{
//    public function actionIndex()
//    {
//        return $this->render('index');
//    }

    public function actionAddcart($id)
    {
        $productInfo = new Product();
        $productInfo = $productInfo->getProductById($id);

        $cart = new cart();
        $cart->addCart($id, $productInfo);

        $session = Yii::$app->session;
        $infoCart = $session['cart'];

        $totalAmount = $total = 0;
        foreach ($infoCart as $key => $value) {
            $totalAmount += $value['amount'];
            $total += $value['product_price']*$value['amount'];
        }

         return $this->renderAjax('cart',['cartInfo'=>$totalAmount."-".$total]);
    }

}
