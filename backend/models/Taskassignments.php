<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Taskassignment;

/**
 * Taskassignments represents the model behind the search form of `backend\models\Taskassignment`.
 */
class Taskassignments extends Taskassignment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AssignmentID', 'taskID', 'workerID', 'equipmentID'], 'integer'],
            [['dateAssigned', 'dateCompleted', 'Notes'], 'safe'],
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
        $query = Taskassignment::find();

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
            'AssignmentID' => $this->AssignmentID,
            'taskID' => $this->taskID,
            'workerID' => $this->workerID,
            'equipmentID' => $this->equipmentID,
            'dateAssigned' => $this->dateAssigned,
            'dateCompleted' => $this->dateCompleted,
        ]);

        $query->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
