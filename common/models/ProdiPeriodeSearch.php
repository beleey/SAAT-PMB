<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProdiPeriode;

/**
 * ProdiPeriodeSearch represents the model behind the search form about `frontend\models\ProdiPeriode`.
 */
class ProdiPeriodeSearch extends ProdiPeriode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proper_id', 'periode_id', 'prodi_id', 'user_id'], 'integer'],
            [['create_date'], 'safe'],
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
        $query = ProdiPeriode::find();

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
            'proper_id' => $this->proper_id,
            'periode_id' => $this->periode_id,
            'prodi_id' => $this->prodi_id,
            'create_date' => $this->create_date,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
