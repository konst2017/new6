<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Wopr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wopr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wtorot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tretot')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
