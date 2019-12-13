<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace frontend\controllers;

use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Wakans;
use frontend\models\Nagrad;
use frontend\models\Towar;
use Yii;
use yii\data\Pagination;


class TowarController extends AppController{



    public function actionIndex(){

       $hits = Towar::find()->where(['hit' => '1'])->limit(6)->all();

        $this->setMeta('E-SHOPPER');
$email = Yii::$app->request->get('email');
if ($email!="")
{
$model = new Raspis;
// заполняем поля данными

$model->email = $email;
// выполняем сохранение
$model->insert();
}
        return $this->render('index', compact('hits'));


       


}





   
	
	  
 public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Towar::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
 
    }




}

