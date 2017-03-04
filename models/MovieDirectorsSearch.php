<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MovieDirectors;

/**
 * MovieDirectorsSearch represents the model behind the search form about `app\models\MovieDirectors`.
 */
class MovieDirectorsSearch extends MovieDirectors
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Movies_id', 'Directors_id'], 'integer'],
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
        $query = MovieDirectors::find();

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
            'Movies_id' => $this->Movies_id,
            'Directors_id' => $this->Directors_id,
        ]);

        return $dataProvider;
    }
}
