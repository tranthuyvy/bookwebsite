<?php

namespace frontend\widgets;

use frontend\models\Product;

use yii\base\Widget;
use yii\helpers\Html;

class suggestionWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $product = new Product();
        $dataSuggestion = $product->getSuggestProduct();

        return $this->render('suggestionWidget', [
            'dataSuggestion' => $dataSuggestion,
        ]);
    }
}
?>