<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_tag".
 *
 * @property string $id
 * @property string $article_id
 * @property string $tag_id
 * @property string $created_by
 * @property string $modified_by
 * @property string $created_time
 * @property string $modified_time
 * @property integer $disable
 */
class Article_Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id', 'created_by', 'modified_by', 'disable'], 'integer'],
            [['created_time', 'modified_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'tag_id' => 'Tag ID',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'created_time' => 'Created Time',
            'modified_time' => 'Modified Time',
            'disable' => 'Disable',
        ];
    }
}
