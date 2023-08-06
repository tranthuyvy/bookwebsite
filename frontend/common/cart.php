<?php
    /**
     *
     */
    namespace frontend\common;
    use Yii;
    use yii\web\Session;
    class cart
    {
        public function addCart($id, $arrData){
            $session = Yii::$app->session;
            if (!isset($session['cart'])){
                $cart[$id] = [
                      "product_name"=>$arrData["product_name"],
                      "product_price"=>$arrData["product_price"],
                      "product_image"=>$arrData["product_image"],
                      'amount'=>1
                ];
            }else{
                $cart = $session['cart'];
                if (array_key_exists($id, $cart)){
                    $cart[$id]=[
                            "product_name"=>$arrData["product_name"],
                            "product_price"=>$arrData["product_price"],
                            "product_image"=>$arrData["product_image"],
                            'amount'=>$cart[$id]["amount"]+1
                    ];
                }else{
                    $cart[$id] = [
                        "product_name"=>$arrData["product_name"],
                        "product_price"=>$arrData["product_price"],
                        "product_image"=>$arrData["product_image"],
                        'amount'=>1
                    ];
                }
            }
            $session['cart'] = $cart;

        }
    }
?>