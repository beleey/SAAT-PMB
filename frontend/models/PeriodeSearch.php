<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Periode;

/**
 * PeriodeSearch represents the model behind the search form about `frontend\models\Periode`.
 */
class PeriodeSearch extends Periode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periode_id', 'tahun'], 'integer'],
            [['periode_name'], 'safe'],
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
        $query = Periode::find();

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
            'periode_id' => $this->periode_id,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'periode_name', $this->periode_name]);

        return $dataProvider;
    }
}
