<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:28
 */

namespace frontend\models;
use yii\db\ActiveRecord;


class Wakans extends ActiveRecord{

   public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    } 
    public static function tableName(){
        return 'wakans';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

} 