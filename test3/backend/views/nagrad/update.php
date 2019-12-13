<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nagrad */

$this->title = 'Update Nagrad: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nagrads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nagrad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
