<?php

    namespace frontend\widgets;

    use frontend\models\Product;

    use yii\base\Widget;
    use yii\helpers\Html;

class topProductWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $product = new Product();
        $dataProduct = $product->getRandomProduct();

        return $this->render('topProductWidget', [
            'dataProduct' => $dataProduct,
        ]);
    }
}

?>