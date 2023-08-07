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

    public function actionDeletecart($id){
        $cart = new cart();
        $cart->deleteItemCart($id);
        $session = Yii::$app->session;
        $infoCart = $session['cart'];

        $totalAmount = $total = 0;
        foreach ($infoCart as $key => $value) {
            $totalAmount += $value['amount'];
            $total += $value['product_price']*$value['amount'];
        }
        return $this->renderAjax('cart',['cartInfo'=>$totalAmount."-".$total]);
    }

    public function actionUpdatecart($id){
        $session = Yii::$app->session;
        $amount = Yii::$app->getRequest()->getQueryParam('amount');
        $cart = new cart();
        $cart = $cart->updateItem($id, $amount);
        $infoCart = $session['cart'];
        $totalAmount = $total = 0;
        foreach ($infoCart as $key => $value) {
            $totalAmount += $value['amount'];
            $total += $value['product_price']*$value['amount'];
        }
        return $this->renderAjax('cart',['cartInfo'=>$totalAmount."-".$total]);

    }

    public function actionViewcart(){
        $this->layout='cartlayout';
        $session = Yii::$app->session;
        return $this->render('viewCart', ['cart'=>$session['cart']]);
    }
}
