<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Departament */

$this->title = Yii::t('app', 'Create Departament');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Departaments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departament-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
