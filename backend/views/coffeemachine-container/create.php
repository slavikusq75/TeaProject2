<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CoffeemachineContainer */

$this->title = Yii::t('app', 'Create Coffeemachine Container');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Coffeemachine Containers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coffeemachine-container-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
