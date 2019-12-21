<?php namespace backend\controllers;

use common\models\feedback\FeedbackSearch;
use Yii;

class FeedbackController extends BackendController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FeedbackSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


}
