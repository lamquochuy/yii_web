<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property string $id
 * @property string $alias
 * @property string $title
 * @property string $metakey
 * @property string $metadesc
 * @property integer $ordering
 * @property integer $created_by
 * @property integer $modified_by
 * @property string $created_time
 * @property string $modified_time
 * @property integer $disable
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ordering', 'created_by', 'modified_by', 'disable'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['alias'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 150],
            [['metakey', 'metadesc'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'title' => 'Title',
            'metakey' => 'Metakey',
            'metadesc' => 'Metadesc',
            'ordering' => 'Ordering',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'created_time' => 'Created Time',
            'modified_time' => 'Modified Time',
            'disable' => 'Disable',
        ];
    }
}
