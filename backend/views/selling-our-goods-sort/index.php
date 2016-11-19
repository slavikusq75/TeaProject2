<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SellingOurGoodsSortSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Selling Our Goods Sorts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selling-our-goods-sort-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Selling Our Goods Sort'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'qauntity',
            'sum',
            'user_id',
            'our_goods_id',
            // 'our_goods_sort_id',
            // 'departament_id',
            // 'price_our_goods_sort_id',
            // 'discount_id',
            // 'created_at',
            // 'updated_at',
            // 'cash_transaction_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
