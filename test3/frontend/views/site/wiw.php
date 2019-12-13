<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use frontend\models\Golosow;
use frontend\models\Wopr;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;


?>

<h1>Главная</h1>
<p>
 Актуальность качественных автомобильных шин

В поиске шин и дисков для своего автомобиля вы найдёте огромное количество предложений, но как получить богатый ассортимент, привлекательные цены и качественный сервис? Ответ – обратиться во всероссийскую сеть «ШИНСЕРВИС»!
Мы присутствуем на рынке уже долгое время, нашими услугами можно воспользоваться в большинстве городов РФ, у нас налажено сотрудничество с десятками ведущих брендов со всего мира. Среди нашего ассортимента вы наверняка найдёте именно то, что вам нужно!

Вы всегда сможете получить консультацию специалистов «ШИНСЕРВИС», позвонив на бесплатный номер 8 800 333-83-88 и +7 495 988-83-88.

Обратите внимание, что на существенную часть товаров действует расширенная гарантия, акции и скидки!

Жители Москвы и Московской области могут не только заказать зимние шины, летнюю резину или автомобильные диски на сайте, но и купить их в ближайшем магазине «ШИНСЕРВИС». Вы сможете забрать товар самовывозом, либо оформить на сайте бесплатную доставку в пределах Москвы и МО.

Диски и автопокрышки, приобретённые в «ШИНСЕРВИС», могут быть сразу установлены на ваш автомобиль в любом из наших шинных центров в Москве и Подмосковье.

От физических лиц мы принимаем оплату наличными или банковской картой при самовывозе, либо наличными курьеру при доставке. Юридическим лицам после бронирования товара нужно оплатить выставленный счёт.

Спасибо, что обратились к нам! 
</p>
<h2>Голосование</h2>



<?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

<?php

?>
   
<?php if( !empty($hits) ): ?>
<?php foreach($hits as $hit): ?>
<?php $search = ActiveForm::begin([
            'action' => ['site/dob'],
            'options' => [
                'id' => 'search-form',
                'method' => 'post',
            ]
        ]);
        ?>
<input type="text" value="<?=$hit->naim ?>" name="name2" class="inp1" size="40"> </p>

 <p><input type="radio" name="name1" size="40" class="inp1" value="<?=$hit->perot ?>"><?=$hit->perot ?> </p>
  <p><input type="radio" name="name1" size="40" class="inp1"  value="<?=$hit->wtorot ?>"><?=$hit->wtorot ?> </p>
 <p><input type="radio" name="name1" size="40" class="inp1" value="<?=$hit->tretot ?> "><?=$hit->tretot ?> </p>

 <p><input type="submit" value="Выбрать"></p>



<?php ActiveForm::end(); ?>
  
 <?php endforeach;?>
<?php endif; ?>


