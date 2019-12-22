<?php namespace backend\controllers;

use common\models\feedback\FeedbackSearch;
use Yii;

class FeedbackController extends BackendController
{
    const VIEW_INDEX = "index";
    const VIEW_ACTIVE = "active";

    /**
     * @param bool $activeUsers
     *
     * @return string
     */
    public function actionIndex($activeUsers = false)
    {
        $view = self::VIEW_INDEX;
        if ($activeUsers) {
            $view = self::VIEW_ACTIVE;
        }

        $searchModel = new FeedbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $activeUsers);

        return $this->render($view, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


}
