<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CashTransactionReason */

$this->title = Yii::t('app', 'Create Cash Transaction Reason');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cash Transaction Reasons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cash-transaction-reason-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>