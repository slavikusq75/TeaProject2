<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PriceOurGoodsSortSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-our-goods-sort-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'our_goods_id') ?>

    <?php // echo $form->field($model, 'our_goods_sort_id') ?>

    <?php // echo $form->field($model, 'our_goods_sort_volume_info_id') ?>

    <?php // echo $form->field($model, 'departament_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
