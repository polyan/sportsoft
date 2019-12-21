<?php namespace common\models\feedback;

use yii\data\ActiveDataProvider;

class FeedbackSearch extends Feedback
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'surname', 'email', 'phone', 'message', 'date_created'], 'string'],
            [['user'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Feedback::find();

        $query->joinWith(['user']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => false
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'surname',
                'date_created',
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'name' => $this->name,
            'user.name' => $this->user
        ])
            ->andFilterWhere(['like', 'date_created', $this->date_created])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
