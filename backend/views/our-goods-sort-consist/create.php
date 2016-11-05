<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OurGoodsSortConsist */

$this->title = Yii::t('app', 'Create Our Goods Sort Consist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Goods Sort Consists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-goods-sort-consist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
