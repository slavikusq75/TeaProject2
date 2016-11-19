<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OutgoingGoodsPurchasedSortSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outgoing-goods-purchased-sort-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'selling_our_goods_sort_id') ?>

    <?php // echo $form->field($model, 'goods_purchased_id') ?>

    <?php // echo $form->field($model, 'goods_purchased_sort_id') ?>

    <?php // echo $form->field($model, 'volume_info_id') ?>

    <?php // echo $form->field($model, 'departament_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>