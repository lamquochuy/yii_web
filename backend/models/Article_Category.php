<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_category".
 *
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property string $metakey
 * @property string $metadesc
 * @property integer $parent_id
 * @property integer $level
 * @property integer $ordering
 * @property integer $hits
 * @property integer $created_by
 * @property string $created_time
 * @property integer $modified_by
 * @property string $modified_time
 * @property integer $disable
 */
class Article_Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ordering', 'hits', 'disable'], 'required'],
            [['parent_id', 'level', 'ordering', 'hits', 'created_by', 'modified_by', 'disable'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 50],
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
            'title' => 'Title',
            'alias' => 'Alias',
            'metakey' => 'Metakey',
            'metadesc' => 'Metadesc',
            'parent_id' => 'Parent ID',
            'level' => 'Level',
            'ordering' => 'Ordering',
            'hits' => 'Hits',
            'created_by' => 'Created By',
            'created_time' => 'Created Time',
            'modified_by' => 'Modified By',
            'modified_time' => 'Modified Time',
            'disable' => 'Disable',
        ];
    }
    
    public function beforeSave($insert) {
        
        if($this->isNewRecord)
        {           
            $this->created_by = 1;
            $this->created_time = date('Y-m-d H:i:s') ;
            $this->modified_time = date('Y-m-d H:i:s');
        }else{
             $this->modified_time = date('Y-m-d H:i:s');
        }
        return TRUE;
    }
}
