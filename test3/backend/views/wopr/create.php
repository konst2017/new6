<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Wopr */

$this->title = 'Create Wopr';
$this->params['breadcrumbs'][] = ['label' => 'Woprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wopr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
