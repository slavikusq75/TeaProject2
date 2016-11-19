<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SellingOurGoodsSortSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="selling-our-goods-sort-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'qauntity') ?>

    <?= $form->field($model, 'sum') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'our_goods_id') ?>

    <?php // echo $form->field($model, 'our_goods_sort_id') ?>

    <?php // echo $form->field($model, 'departament_id') ?>

    <?php // echo $form->field($model, 'price_our_goods_sort_id') ?>

    <?php // echo $form->field($model, 'discount_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'cash_transaction_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
