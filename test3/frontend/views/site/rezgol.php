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

<h2>Результаты голосования</h2>

<?php if(!empty($hitsc) ): ?>
<table>
  <tbody>
    <tr>
      <th>Вопрос</th>
      <th>Ответ</th>
      <th>Количество</th>
    </tr>
	<?php $i=0; ?>
<?php foreach($hitsc as $hitc): ?>
<?php $i=$i+1;
if($i>1)
{
 ?>

    <tr>
      <td><?=$hitc->naim ?></td>
      <td><?=$hitc->otw ?></td>
      <td><?=$hitc->cnt ?></td>
    </tr>
<?php } ?>
 

<?php endforeach;?>
 </tbody>
</table>
<?php endif; ?>





