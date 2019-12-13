<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wopr".
 *
 * @property int $num
 * @property string $naim
 * @property string $1
 * @property string $2
 * @property string $3
 */
class Wopr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wopr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim', 'perot', 'wtorot', 'tretot'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'naim' => 'Naim',
            'perot' => '1ot',
            'wtorot' => '2ot',
            'tretot' => '3ot',
        ];
    }
}
