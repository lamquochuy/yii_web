<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Article_Tag;

/**
 * Article_tagSearch represents the model behind the search form about `app\models\Article_Tag`.
 */
class Article_tagSearch extends Article_Tag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'article_id', 'tag_id', 'created_by', 'modified_by', 'disable'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Article_Tag::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'article_id' => $this->article_id,
            'tag_id' => $this->tag_id,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'created_time' => $this->created_time,
            'modified_time' => $this->modified_time,
            'disable' => $this->disable,
        ]);

        return $dataProvider;
    }
}
