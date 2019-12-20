<?php namespace frontend\controllers;

use common\models\Feedback;
use Yii;

class FeedbackController extends FrontendController
{
    public function actionIndex()
    {
        $feedbackModel = new Feedback();
        if ($feedbackModel->load(Yii::$app->request->post())) {
            if ($feedbackModel->save()) {
                Yii::$app->session->setFlash('success', "Форма отправлена");
            } else {
                Yii::$app->session->setFlash('error', "Ошибка при отправке формы");
            }
        }

        return $this->render('index', ['feedbackModel' => $feedbackModel]);
    }
}
