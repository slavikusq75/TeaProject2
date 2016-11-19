<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CashTransaction */

$this->title = Yii::t('app', 'Create Cash Transaction');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cash Transactions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cash-transaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>