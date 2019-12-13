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
use Yii;
use yii\data\Pagination;


class CategoryController extends AppController{



    public function actionIndex(){

       $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
$logs = Logo::find()->limit(6)->all();
        $this->setMeta('E-SHOPPER');
$email = Yii::$app->request->get('email');
if ($email!="")
{
$model = new Raspis;
// ��������� ���� �������

$model->email = $email;
// ��������� ����������
$model->insert();
}
        return $this->render('index', compact('hits','logs'));


       


}




 public function actionMain($id=null){

        $hitr = Category::find()->
where(['parent_id' => '0'])->
limit(6)->
all();
  $hitk = Category::find()->
where(['parent_id' => '.$id.' ])->
limit(6)->
all();
 $hits = Product::find()->
where(['hit' => '1'
,'category_id' => ''.$hits['id'].''
])->
limit(6)->
all();


$id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages2 = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
      
 return $this->render('index', compact('hitk', 'hits', 'hitr'));



}









    public function actionView(){
      
//        $products = Product::find()->where(['category_id' => $id])->all();
             $query = Product::find()->where(['category_id' => '4']);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne(4);
 if(empty($category))
            throw new \yii\web\HttpException(404, '����� ��������� ���');


        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'category'));
        
 
    }
	
	   public function actionNagrad(){
      
//        $products = Product::find()->where(['category_id' => $id])->all();
             $query = Nagrad::find()->where(['category_id' => '6']);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne(4);
 if(empty($category))
            throw new \yii\web\HttpException(404, '����� ��������� ���');


        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        return $this->render('nagrad', compact('products', 'pages', 'category'));
        
 
    }
	
	
	
	 public function actionWakan(){
      
//        $products = Product::find()->where(['category_id' => $id])->all();
             $query = Wakans::find()->where(['category_id' => '5']);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne(5);
 if(empty($category))
            throw new \yii\web\HttpException(404, '����� ��������� ���');


        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        return $this->render('wakan', compact('products', 'pages', 'category'));
        
 
    }


    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('E-SHOPPER | �����: ' . $q);
        if(!$q)
            return $this->render('search');
if(empty($q))
            throw new \yii\web\HttpException(404, '����� ��������� ���');

        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }





}

