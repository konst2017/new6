<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use backend\assets\ltAppAsset;

use yii\bootstrap4\Modal;
//use kartikForm\ActiveForm;
use kartik\datecontrol\DateControl;
// use yii\jui\DatePicker;
use kartik\date\DatePicker;
AppAsset::register($this);
ltAppAsset::register($this);$this->title = 'My Yii Application';
/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="form-group field-product-category_id has-success">
        <label class="control-label" for="product-category_id">Родительская категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]">
            <?= \backend\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $model])?>
        </select>
    </div>



<div class="col-xs-4">
      
	
        </div>
	<?= ''// yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>	
		
	<?= $form->field($model, 'addtime')->widget(DatePicker::className(), [
    'type' => DatePicker::TYPE_COMPONENT_APPEND,
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'autoclose' => true,
    ],
    'options' => [
        'class'=>'col-xs-3'
    ]
]) ?>	
	

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    ?>
    <?php
    echo $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
    ]);
    ?>

    <?= $form->field($model, 'corcon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
