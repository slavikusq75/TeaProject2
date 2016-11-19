<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OurGoodsSort */

$this->title = Yii::t('app', 'Create Our Goods Sort');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Goods Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-goods-sort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
