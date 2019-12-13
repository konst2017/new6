<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nagrad */

$this->title = 'Create Nagrad';
$this->params['breadcrumbs'][] = ['label' => 'Nagrads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nagrad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
