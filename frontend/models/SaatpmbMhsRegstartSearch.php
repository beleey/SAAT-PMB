<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SaatpmbMhsRegstart;

/**
 * SaatpmbMhsRegstartSearch represents the model behind the search form about `frontend\models\SaatpmbMhsRegstart`.
 */
class SaatpmbMhsRegstartSearch extends SaatpmbMhsRegstart
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq'], 'integer'],
            [['name', 'email', 'password', 'password_repeat', 'hash_confirm', 'input_date'], 'safe'],
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
        $query = SaatpmbMhsRegstart::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'seq' => $this->seq,
            'input_date' => $this->input_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'hash_confirm', $this->hash_confirm]);

        return $dataProvider;
    }
}
