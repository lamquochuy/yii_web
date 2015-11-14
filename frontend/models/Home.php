<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

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
class Home extends \yii\db\ActiveRecord
{
    
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
    
    
}
