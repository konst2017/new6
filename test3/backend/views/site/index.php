<?php

/* @var $this yii\web\View */

$this->title = 'Админпанель';
?>
<div class="site-index">

   <div class="mainmenu hidden-sm hidden-xs">
								
						
		 <ul id="navbar">
      <li><a href="#">Главная</a></li>
      
      <li><a href="#">Вопросы</a>
        <ul>
		
		
         <li><a href="<?=\yii\helpers\Url::to(['wopr/index']) ?>">Просмотр</a></li>
          
        </ul>
      </li>
	  
	  
      <li><a href="#">Статьи</a>
	  
	  <ul>
         <li><a href="<?=\yii\helpers\Url::to(['product/index']) ?>">Просмотр</a></li>
          
        </ul>
	  
	  
	  </li>
	  <li class="dropdown"><a href="#">Отзывы<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['posts/index']) ?>">Список отзывов</a></li>
                                         <li><a href="<?=\yii\helpers\Url::to(['comments/index']) ?>">Список отсортированных отзывов</a></li>
                                        
                                    </ul>
                                </li> 
	


 <li class="dropdown"><a href="#">Вакансии<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['wakans/index']) ?>">Просмотр вакансий и создание</a></li>
                                         <li><a href="<?=\yii\helpers\Url::to(['anketa/index']) ?>">Просмотр ответов на вакансии</a></li>
                                        
                                    </ul>
                                </li> 
    	 <li class="dropdown"><a href="#">Награды<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['nagrad/index']) ?>">Просмотр наград</a></li>
                                         
                                    </ul>
                                </li> 
								
				 <li class="dropdown"><a href="#">Товары<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['towar/index']) ?>">Просмотр товаров</a></li>
                                         
                                    </ul>
                                </li> 				
								
								
	  
    </ul>	

						
						
							</div>

    </div>
</div>
