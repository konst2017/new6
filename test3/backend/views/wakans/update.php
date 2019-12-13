<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Wakans */

$this->title = 'Update Wakans: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Wakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wakans-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
