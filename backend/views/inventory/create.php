<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LoadingCoffeemachineContainer */

$this->title = Yii::t('app', 'Create Loading Coffeemachine Container');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Loading Coffeemachine Containers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loading-coffeemachine-container-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
