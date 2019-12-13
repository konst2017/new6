		
		<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>	
		<!-- START PAGE-CONTENT -->
		
        <div class="banner">
		<a href="#"><img src="/nowost/images/12.jpg" alt="Product Banner"></a>
		</div>
		
		<div class="features_items"><!--features_items-->
        <h2 class="title text-center">Награды</h2>

        <?php if(!empty($products)): ?>
        <?php $i = 0; foreach($products as $product): ?>
		
        <?php $mainImg = $product->getImage();?>

        <div class="col-sm-4">
        <div class="product-image-wrapper">
        <div class="single-products">
         <div class="productinfo text-center">
              
         <a class="btn" href="<?= \yii\helpers\Url::to(['nagrad/view', 'id' => $product->id]) ?>"> <?= Html::img($mainImg->getUrl(), ['alt' => $product->name])?></a></p> 
         <br><br><br>
         <p><a class="btn" href="<?= \yii\helpers\Url::to(['nagrad/view', 'id' => $product->id]) ?>"><?= $product->name?></a></p>
         <textarea name="comment" class="inp1" size="40"><?= $product->corcon ?></textarea>
			  
         </div>
        </div>
        </div>
        </div>
            <?php $i++?>
            <?php if($i % 3 == 0): ?>
                <div class="clearfix"></div>
            <?php endif;?>
            <?php endforeach;?>
        <div class="clearfix"></div>
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
        <?php else :?>
        <h2>Здесь статей пока нет......</h2>
    <?php endif;?>

</div><!--features_items-->


	

	
 
