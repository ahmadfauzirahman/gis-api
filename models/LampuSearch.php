<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lampu;

/**
 * LampuSearch represents the model behind the search form of `app\models\Lampu`.
 */
class LampuSearch extends Lampu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lampu', 'rayon_id', 'lampu_id', 'nama', 'gambar', 'jenis_lmpu', 'lat', 'long'], 'safe'],
            [['watt', 'daya'], 'integer'],
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
        $query = Lampu::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'watt' => $this->watt,
            'daya' => $this->daya,
        ]);

        $query->andFilterWhere(['like', 'id_lampu', $this->id_lampu])
            ->andFilterWhere(['like', 'rayon_id', $this->rayon_id])
            ->andFilterWhere(['like', 'lampu_id', $this->lampu_id])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'jenis_lmpu', $this->jenis_lmpu])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'long', $this->long]);

        return $dataProvider;
    }
}
