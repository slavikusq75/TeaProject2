<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ReceivingGoodsPurchasedSort */

$this->title = Yii::t('app', 'Create Receiving Goods Purchased Sort');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Receiving Goods Purchased Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-goods-purchased-sort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
