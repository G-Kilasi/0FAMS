<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Worker;

/**
 * Workers represents the model behind the search form of `backend\models\Worker`.
 */
class Workers extends Worker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Workerid', 'applicantID'], 'integer'],
            [['department'], 'safe'],
            [['salary'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Worker::find();

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
            'Workerid' => $this->Workerid,
            'applicantID' => $this->applicantID,
            'salary' => $this->salary,
        ]);

        $query->andFilterWhere(['like', 'department', $this->department]);

        return $dataProvider;
    }
}
