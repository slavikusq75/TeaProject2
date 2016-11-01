<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BusinessDay */

$this->title = Yii::t('app', 'Create Business Day');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Business Days'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-day-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
