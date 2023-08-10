<?php
    /**
     *
     */
    namespace frontend\common;
    use Yii;
    use yii\web\Session;
    class cart
    {
        public function addCart($id, $arrData)
        {
            $session = Yii::$app->session;
            if (!isset($session['cart'])) {
                $cart[$id] = [
                    "product_name" => $arrData["product_name"],
                    'product_price' => $arrData['product_price'],
                    "product_image" => $arrData["product_image"],
                    'amount' => 1
                ];
            } else {
                $cart = $session['cart'];
                if (array_key_exists($id, $cart)) {
                    $cart[$id] = [
                        "product_name" => $arrData["product_name"],
                        'product_price' => $arrData['product_price'],
                        "product_image" => $arrData["product_image"],
                        'amount' => $cart[$id]["amount"] + 1
                    ];
                } else {
                    $cart[$id] = [
                        "product_name" => $arrData["product_name"],
                        'product_price' => $arrData['product_price'],
                        "product_image" => $arrData["product_image"],
                        'amount' => 1
                    ];
                }
            }
            $session['cart'] = $cart;
        }

        public function deleteItemCart($id)
        {
            $session = Yii::$app->session;
            if (isset($session['cart'])) {
                $cart = $session['cart'];
                unset($cart[$id]);
                $session['cart'] = $cart;
            }
        }

        public function updateItem($id, $amount)
        {
            $session = Yii::$app->session;
            $cart = $session['cart'];
            if (array_key_exists($id, $cart)) {
                if ($amount) {
                    $cart[$id] = [
                        "product_name" => $cart[$id]["product_name"],
                        'product_price' => $cart[$id]['product_price'],
                        "product_image" => $cart[$id]["product_image"],
                        'amount' => $amount
                    ];
                }else{
                    unset($cart[$id]);
                }
                $session['cart'] = $cart;
            }
        }
    }
?>