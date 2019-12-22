<?php namespace frontend\controllers;

use common\models\feedback\Feedback;
use Yii;

class FeedbackController extends FrontendController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


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
