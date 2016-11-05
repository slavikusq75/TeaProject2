<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OutgoingGoodsPurchasedSort */

$this->title = Yii::t('app', 'Create Outgoing Goods Purchased Sort');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outgoing Goods Purchased Sorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outgoing-goods-purchased-sort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
