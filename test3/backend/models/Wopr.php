<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wopr".
 *
 * @property int $num
 * @property string $naim
 * @property string $perot
 * @property string $wtorot
 * @property string $tretot
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
            'perot' => 'Perot',
            'wtorot' => 'Wtorot',
            'tretot' => 'Tretot',
        ];
    }
}
