<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wakans".
 *
 * @property string $id
 * @property string $category_id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $addtime
 */
class Wakans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wakans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name'], 'required'],
            [['category_id'], 'integer'],
            [['content', 'hit', 'new', 'sale'], 'string'],
            [['price'], 'number'],
            [['addtime'], 'safe'],
            [['name', 'keywords', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'content' => 'Content',
            'price' => 'Price',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
            'addtime' => 'Addtime',
        ];
    }
}
