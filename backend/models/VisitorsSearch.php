<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visitors;

/**
 * VisitorsSearch represents the model behind the search form about `backend\models\Visitors`.
 */
class VisitorsSearch extends Visitors
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'login_fail_count', 'status'], 'integer'],
            [['fullname', 'username', 'password', 'email', 'birthday', 'phone_number', 'picture', 'token', 'register_date', 'access_ip', 'block_time', 'last_visit_date', 'created_time'], 'safe'],
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
        $query = Visitors::find();

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
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'register_date' => $this->register_date,
            'login_fail_count' => $this->login_fail_count,
            'last_visit_date' => $this->last_visit_date,
            'created_time' => $this->created_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'token', $this->token])
            ->andFilterWhere(['like', 'access_ip', $this->access_ip])
            ->andFilterWhere(['like', 'block_time', $this->block_time]);

        return $dataProvider;
    }
}
