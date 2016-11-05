<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OurGoods */

$this->title = Yii::t('app', 'Create Our Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
