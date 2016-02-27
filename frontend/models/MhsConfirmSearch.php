<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MhsConfirm;

/**
 * MhsConfirmSearch represents the model behind the search form about `frontend\models\MhsConfirm`.
 */
class MhsConfirmSearch extends MhsConfirm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proper_id', 'mhs_noreg'], 'integer'],
            [['mhs_nama', 'mhs_panggilan', 'mhs_gender', 'mhs_tempatlahir', 'mhs_tgllahir', 'mhs_goldarah', 'mhs_alamat', 'mhs_kota', 'mhs_kodepos', 'mhs_telp', 'mhs_hp', 'mhs_email', 'mhs_warganegara', 'mhs_password', 'mhs_hash_confirm', 'mhs_gereja', 'mhs_tglkonfirmasi'], 'safe'],
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
        $query = MhsConfirm::find();

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
            'mhs_noreg' => $this->mhs_noreg,
            'mhs_tgllahir' => $this->mhs_tgllahir,
            'mhs_tglkonfirmasi' => $this->mhs_tglkonfirmasi,
        ]);

        $query->andFilterWhere(['like', 'mhs_nama', $this->mhs_nama])
            ->andFilterWhere(['like', 'mhs_panggilan', $this->mhs_panggilan])
            ->andFilterWhere(['like', 'mhs_gender', $this->mhs_gender])
            ->andFilterWhere(['like', 'mhs_tempatlahir', $this->mhs_tempatlahir])
            ->andFilterWhere(['like', 'mhs_goldarah', $this->mhs_goldarah])
            ->andFilterWhere(['like', 'mhs_alamat', $this->mhs_alamat])
            ->andFilterWhere(['like', 'mhs_kota', $this->mhs_kota])
            ->andFilterWhere(['like', 'mhs_kodepos', $this->mhs_kodepos])
            ->andFilterWhere(['like', 'mhs_telp', $this->mhs_telp])
            ->andFilterWhere(['like', 'mhs_hp', $this->mhs_hp])
            ->andFilterWhere(['like', 'mhs_email', $this->mhs_email])
            ->andFilterWhere(['like', 'mhs_warganegara', $this->mhs_warganegara])
            ->andFilterWhere(['like', 'mhs_password', $this->mhs_password])
            ->andFilterWhere(['like', 'mhs_hash_confirm', $this->mhs_hash_confirm])
            ->andFilterWhere(['like', 'mhs_gereja', $this->mhs_gereja]);

        return $dataProvider;
    }
}
