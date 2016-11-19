<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OurGoodsSort */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Our Goods Sort',
    ]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Goods Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="our-goods-sort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
