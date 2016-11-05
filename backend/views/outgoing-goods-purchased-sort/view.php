<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OutgoingGoodsPurchasedSort */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outgoing Goods Purchased Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outgoing-goods-purchased-sort-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'quantity',
            'created_at',
            'updated_at',
            'user_id',
            'selling_our_goods_sort_id',
            'goods_purchased_id',
            'goods_purchased_sort_id',
            'volume_info_id',
            'departament_id',
        ],
    ]) ?>

</div>
