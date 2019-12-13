<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace frontend\controllers;
use frontend\models\Category;
use frontend\models\nagrad;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\pozel;

class NagradController extends AppController{

    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = nagrad::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');
//        $nagrad = nagrad::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = nagrad::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $nagrad->name, $nagrad->keywords, $nagrad->description);
        return $this->render('view', compact('product', 'hits'));
 
    }

  public function actionDob($name2){
        $name2 = Yii::$app->request->get('name2');
        
//        
       $posts = Yii::$app->db->createCommand("INSERT INTO pozel(naim) values('{$name2}')")
            ->execute();
$dataProvider = new ActiveDataProvider([
            'query' => pozel::find(),
        ]);
        return $this->render('dob', compact('nagrad', 'hits'), [
            'dataProvider' => $dataProvider,
 ]);
 
    }

public function actionindex($id){
        $id = Yii::$app->request->get('id');
        $nagrad = nagrad::findOne($id);
  if(empty($nagrad))
            throw new \yii\web\HttpException(404, 'Такого товара нет');
//        $nagrad = nagrad::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = nagrad::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $nagrad->name, $nagrad->keywords, $nagrad->description);
        return $this->render('view', compact('nagrad', 'hits'));
 
    }
 


} 