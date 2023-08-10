<?php

namespace frontend\controllers;
use common\widgets\Alert;
use frontend\models\OrderDetail;
use frontend\models\Payment;
use frontend\models\Product;
use frontend\common\cart;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Session;
use frontend\models\Province;

use frontend\models\Order;
use frontend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ShoppingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

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
        echo $totalAmount."-".$total;
//         return $this->renderAjax('cart',['cartInfo'=>$totalAmount."-".$total]);
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
        echo $totalAmount."-".$total;
        //return $this->renderPartial('cart',['cartInfo'=>$totalAmount."-".$total]);
    }

    public function actionUpdatecart($id,$amount){
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
        echo $totalAmount."-".$total;
        //return $this->renderAjax('cart',['cartInfo'=>$totalAmount."-".$total]);//chỗ này có vấn đề làm load lại page

    }

    public function actionViewcart(){
        $this->layout='cartlayout';
        $session = Yii::$app->session;
        $province = new Province();
        $province = $province->getAllProvince();

        return $this->render('viewCart', ['cart'=>$session['cart'], 'province'=>$province]);
    }

    function actionCheckout()
    {
        $this->layout='login';
        $cart = Yii::$app->session['cart'];
        $model = new Order();


        if (!Yii::$app->user->isGuest){
            $model->user_name = Yii::$app->user->identity->fullname;
            $model->user_address = Yii::$app->user->identity->address;
            $model->user_mobile = Yii::$app->user->identity->mobile;
            $model->user_email = Yii::$app->user->identity->email;
            $model->user_id =  Yii::$app->user->identity->id;
        }

        $payment = new Payment();
        $payment = ArrayHelper::map($payment->getAllPayment(),'payment_id', 'payment_name');

        $totalMoney = 0;
        foreach ($cart as $key=>$value){
            $totalMoney += $value["product_price"]*$value["amount"];
        }
        $model->totalMoney = $totalMoney;
        $model->status = 1;
        $model->created_at = time();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //save order detail
            $order_id = $model->order_id;
            foreach ($cart as $key => $value){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order_id;
                $orderDetail->product_id = $key;
                $orderDetail->product_price = $value["product_price"];
                $orderDetail->product_quantity = $value["amount"];
                if (!$orderDetail->save()){
//                    echo "<pre>";
//                    print_r($orderDetail->errors);
//                    die;
                }

            }
        }
        return $this->render('checkout',[
            'cart'=>$cart,
            'model' => $model,
            'payment' => $payment
        ]);
    }
}
