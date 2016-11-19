<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Discount */

$this->title = Yii::t('app', 'Create Discount');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Discounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>