<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SellingOurGoodsSort */

$this->title = Yii::t('app', 'Create Selling Our Goods Sort');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Selling Our Goods Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selling-our-goods-sort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
