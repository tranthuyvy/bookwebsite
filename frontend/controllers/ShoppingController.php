<?php

namespace frontend\controllers;

class ShoppingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAddcart(){
         return $this->renderAjax('cart');
    }

}
