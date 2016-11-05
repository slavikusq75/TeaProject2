<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GoodsPurchased */

$this->title = Yii::t('app', 'Create Goods Purchased');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Purchaseds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-purchased-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
