<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property string $comment_id
 * @property string $comment_author
 * @property string $comment_text
 * @property string $parent
 * @property string $approved
 * @property string $created
 * @property int $is_admin
 * @property string $comment_email
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment_author', 'comment_text'], 'required'],
            [['comment_text', 'approved'], 'string'],
            [['parent', 'is_admin'], 'integer'],
            [['created'], 'safe'],
            [['comment_author', 'comment_email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'comment_author' => 'Comment Author',
            'comment_text' => 'Comment Text',
            'parent' => 'Parent',
            'approved' => 'Approved',
            'created' => 'Created',
            'is_admin' => 'Is Admin',
            'comment_email' => 'Comment Email',
        ];
    }
}
