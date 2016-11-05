<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OutgoingCoffeemachineContainer */

$this->title = Yii::t('app', 'Create Outgoing Coffeemachine Container');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outgoing Coffeemachine Containers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outgoing-coffeemachine-container-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
