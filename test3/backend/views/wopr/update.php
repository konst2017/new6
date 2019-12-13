<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Wopr */

$this->title = 'Update Wopr: ' . $model->num;
$this->params['breadcrumbs'][] = ['label' => 'Woprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->num, 'url' => ['view', 'id' => $model->num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wopr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
