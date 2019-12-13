<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Wakans */

$this->title = 'Create Wakans';
$this->params['breadcrumbs'][] = ['label' => 'Wakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wakans-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
