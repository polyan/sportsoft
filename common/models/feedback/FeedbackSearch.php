<?php namespace common\models\feedback;

use common\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

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

    public function search($params, $activeUsers)
    {
        $newArray = [];
        if ($activeUsers) {
            $sqlStr = "SELECT user_id FROM session WHERE last_write > UNIX_TIMESTAMP() - 600";
            $result = Yii::$app->db->createCommand($sqlStr)->queryAll();
            foreach ($result as $k => $v) {
                if ($v[User::SESSION_USER_ID_NAME]) {
                    $newArray[] = $v[User::SESSION_USER_ID_NAME];
                }
            }
        }
        $query = Feedback::find()
            ->joinWith(['user']);
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
            ->andFilterWhere(['like', 'feedback.email', $this->email])
            ->andFilterWhere(['in', 'user.id', $newArray]);

        return $dataProvider;
    }
}
