<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Measure */

$this->title = Yii::t('app', 'Create Measure');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Measures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="measure-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
