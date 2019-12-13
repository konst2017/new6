<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section>

<div class="col-sm-7">
<div class="product-details"><!--product-details-->
    <div class="col">
        <div class="view-product">
           
            <h3>Награды</h3>
        </div>
        
    <div class="col-sm-7">
        <div class="product"><!--/product-information-->
          
            <h2><?= $product->name?></h2>
          

            
            <p><b>Brand:</b> <a href="<?= \yii\helpers\Url::to(['nagrad/view', 'id' => $product->category->id]) ?>"><?= $product->category->name?></a></p>
            
            <?= $product->content?>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->

</div>
</div>
</div>
</section>