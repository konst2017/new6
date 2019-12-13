<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace frontend\controllers;
use frontend\models\Category;
use frontend\models\Wakans;
use frontend\models\Anketa;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\pozel;

class WakanController extends AppController{

    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Wakans::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Wakans::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
 
    }



public function actionindex($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
 
    }
 
public function actionDob(){
     
				$model = new Anketa();
 
		
                $name2 = Yii::$app->request->post('name2');
				  $name1 = Yii::$app->request->post('name1');
				  
				 $name3 = Yii::$app->request->post('name3');
				  $name4 = Yii::$app->request->post('name4');
        $comment = Yii::$app->request->post('comment');
      
      $posts = Yii::$app->db->createCommand("INSERT INTO anketa(wakan,im,fam,oth,dop) values('{$name1}','{$name2}','{$name3}','{$name4}','{$comment}')")
           ->execute();
		
          

        return $this->render('dob',['name2'=>$name2,'model'=>$model]);
 
    
}
} 