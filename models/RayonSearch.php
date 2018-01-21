<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rayon;

/**
 * RayonSearch represents the model behind the search form of `app\models\Rayon`.
 */
class RayonSearch extends Rayon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rayon'], 'integer'],
            [['nama', 'lad', 'long'], 'safe'],
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
        $query = Rayon::find();

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
            'id_rayon' => $this->id_rayon,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'lad', $this->lad])
            ->andFilterWhere(['like', 'long', $this->long]);

        return $dataProvider;
    }
}
