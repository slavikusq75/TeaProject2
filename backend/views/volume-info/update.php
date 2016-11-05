<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VolumeInfo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Volume Info',
    ]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Volume Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="volume-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
