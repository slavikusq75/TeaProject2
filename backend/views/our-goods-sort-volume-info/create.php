<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OurGoodsSortVolumeInfo */

$this->title = Yii::t('app', 'Create Our Goods Sort Volume Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Goods Sort Volume Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-goods-sort-volume-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
