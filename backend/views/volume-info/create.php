<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VolumeInfo */

$this->title = Yii::t('app', 'Create Volume Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Volume Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volume-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
