<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property integer $budget_id
 * @property string $budget_name
 */
class Budget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['budget_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function GetList() {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'budget_id', 'budget_name');
    }
    
    public function attributeLabels()
    {
        return [
            'budget_id' => 'ID',
            'budget_name' => 'แหล่งงบประมาณ',
        ];
    }
}
