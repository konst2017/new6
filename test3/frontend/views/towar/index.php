<?php

/* @var $this yii\web\View */

use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use yii\widgets\ActiveForm;
use app\models\Logo;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use app\controllers\CategoryController;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;

$this->title = 'My Yii Application';

?>


 			
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
		<?php if( !empty($hits) ): ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Хиты продаж</h2>
    <?php foreach($hits as $hit): ?>
    <?php $mainImg = $hit->getImage();?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
		

                <div class="productinfo text-center">
                    <?= Html::img($mainImg->getUrl('268x249'), ['alt' => $hit->name])?>
                    <h2>$<?= $hit->price?></h2>
                    <p><a href="<?= \yii\helpers\Url::to(['towar/view', 'id' => $hit->id]) ?>"><?= $hit->name?></a></p>
                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?= $hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Корзина</a>
                </div>
              
            </div>
            
        </div>
    </div>
    <?php endforeach;?>
</div><!--features_items-->
<?php endif; ?>
 </section>
	