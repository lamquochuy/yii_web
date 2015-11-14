<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sysconfig".
 *
 * @property string $id
 * @property string $code
 * @property string $value
 * @property integer $disable
 */
class Sysconfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sysconfig';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disable'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['value'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'value' => 'Value',
            'disable' => 'Disable',
        ];
    }
}
