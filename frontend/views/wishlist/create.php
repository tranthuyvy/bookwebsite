<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Wishlist $model */

$this->title = 'Create Wishlist';
$this->params['breadcrumbs'][] = ['label' => 'Wishlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wishlist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
