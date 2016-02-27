<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Prodi;

/**
 * ProdiSearch represents the model behind the search form about `frontend\models\Prodi`.
 */
class ProdiSearch extends Prodi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prodi_id'], 'integer'],
            [['prodi_name', 'prodi_desc'], 'safe'],
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
        $query = Prodi::find();

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
            'prodi_id' => $this->prodi_id,
        ]);

        $query->andFilterWhere(['like', 'prodi_name', $this->prodi_name])
            ->andFilterWhere(['like', 'prodi_desc', $this->prodi_desc]);

        return $dataProvider;
    }
}
