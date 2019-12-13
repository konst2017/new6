<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "golosow".
 *
 * @property int $num
 * @property string $naim
 * @property string $otw
 */
class Golosow extends \yii\db\ActiveRecord
{
	public $cnt;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golosow';
    }

    /**
     * {@inheritdoc}
     */
   
        public function rules()
    {
        return [
            [['naim'], 'string', 'max' => 255],
			
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
            'otw' => 'Otw',
        ];
    }
}
