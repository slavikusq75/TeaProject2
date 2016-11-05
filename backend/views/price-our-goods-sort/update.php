<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PriceOurGoodsSort */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Price Our Goods Sort',
    ]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Price Our Goods Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="price-our-goods-sort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
