<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Applicant;

/**
 * Applicants represents the model behind the search form of `frontend\models\Applicant`.
 */
class Applicants extends Applicant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ApplicantID', 'userID'], 'integer'],
            [['name', 'email', 'phone', 'skills', 'position', 'verified', 'accepted', 'availability'], 'safe'],
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
        $query = Applicant::find();

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
            'ApplicantID' => $this->ApplicantID,
            'userID' => $this->userID,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'skills', $this->skills])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'verified', $this->verified])
            ->andFilterWhere(['like', 'accepted', $this->accepted])
            ->andFilterWhere(['like', 'availability', $this->availability]);

        return $dataProvider;
    }
}
