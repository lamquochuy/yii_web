<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tag;

/**
 * TagSearch represents the model behind the search form about `app\models\tag`.
 */
class TagSearch extends tag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ordering', 'created_by', 'modified_by', 'disable'], 'integer'],
            [['alias', 'title', 'metakey', 'metadesc', 'created_time', 'modified_time'], 'safe'],
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
        $query = tag::find();

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
            'ordering' => $this->ordering,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'created_time' => $this->created_time,
            'modified_time' => $this->modified_time,
            'disable' => $this->disable,
        ]);

        $query->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'metakey', $this->metakey])
            ->andFilterWhere(['like', 'metadesc', $this->metadesc]);

        return $dataProvider;
    }
}
