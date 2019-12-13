<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anketa".
 *
 * @property string $wakan
 * @property int $num
 * @property string $im
 * @property string $fam
 * @property string $oth
 * @property string $dop
 */
class Anketa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anketa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wakan', 'im', 'fam', 'oth', 'dop'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wakan' => 'Wakan',
            'num' => 'Num',
            'im' => 'Im',
            'fam' => 'Fam',
            'oth' => 'Oth',
            'dop' => 'Dop',
        ];
    }
}
