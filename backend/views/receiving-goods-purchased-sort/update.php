<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ReceivingGoodsPurchasedSort */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Receiving Goods Purchased Sort',
    ]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Receiving Goods Purchased Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="receiving-goods-purchased-sort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
