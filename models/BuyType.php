<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buy_type".
 *
 * @property integer $buy_type_id
 * @property string $buy_type_name
 */
class BuyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buy_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['buy_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function GetList() {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'buy_type_id', 'buy_type_name');
    }
    
    public function attributeLabels()
    {
        return [
            'buy_type_id' => 'รหัสการจัดซื้อ',
            'buy_type_name' => 'รูปแบบการจัดซื้อ',
        ];
    }
}
