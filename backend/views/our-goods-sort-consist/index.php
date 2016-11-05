<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\OurGoodsSortConsistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Our Goods Sort Consists');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-goods-sort-consist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Our Goods Sort Consist'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'updated_at',
            'volume_info_id',
            'quantity',
            // 'user_id',
            // 'our_goods_id',
            // 'our_goods_sort_id',
            // 'goods_purchased_id',
            // 'goods_purchased_sort_id',
            // 'coffeemachine_container_id',
            // 'our_goods_sort_volume_info_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
