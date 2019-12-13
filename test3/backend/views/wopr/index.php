<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Woprs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wopr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wopr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'num',
            'naim',
            'perot',
            'wtorot',
            'tretot',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
