<?php

namespace app\models;
use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property string $article_category_id
 * @property string $title
 * @property string $alias
 * @property string $summary
 * @property string $content
 * @property string $metakey
 * @property string $metadesc
 * @property string $hits
 * @property string $image
 * @property string $ordering
 * @property string $created_by
 * @property string $modified_by
 * @property string $created_time
 * @property string $modified_time
 * @property integer $disable
 */
class Article extends \yii\db\ActiveRecord
{
    
    public $image_upload;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_category_id', 'hits', 'ordering', 'created_by', 'modified_by', 'disable'], 'integer'],
            [['title', 'alias', 'article_category_id','ordering', 'disable'], 'required'],
            [['summary', 'content'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['title', 'alias', 'image'], 'string', 'max' => 255],
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
            'article_category_id' => 'Article Category ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'summary' => 'Summary',
            'content' => 'Content',
            'metakey' => 'Metakey',
            'metadesc' => 'Metadesc',
            'hits' => 'Hits',
            'image' => 'Image',
            'ordering' => 'Ordering',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'created_time' => 'Created Time',
            'modified_time' => 'Modified Time',
            'disable' => 'Disable',
        ];
    }
    
    public function beforeSave($insert) {
        if($this->image_upload) {
            $this->image = $this->image_upload->name;  
        }
        if($this->isNewRecord)
        {           
            $this->created_by = 1;
            $this->created_time = date('Y-m-d H:i:s') ;
        }else{
             $this->modified_time = date('Y-m-d H:i:s');
        }
        return TRUE;
    }
    public function upload()
    {
        if($this->image_upload) {
            $this->image_upload->saveAs('uploads/article/' . $this->image_upload->baseName . '.' . $this->image_upload->extension);
        }

    }
}
