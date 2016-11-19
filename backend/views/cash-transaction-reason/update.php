<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CashTransactionReason */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Cash Transaction Reason',
    ]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cash Transaction Reasons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cash-transaction-reason-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
