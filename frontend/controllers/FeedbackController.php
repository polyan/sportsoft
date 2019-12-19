<?php namespace frontend\controllers;

use common\models\Feedback;

class FeedbackController extends FrontendController
{
    public function actionIndex()
    {
        $feedbackModel = new Feedback();

        return $this->render('index', ['feedbackModel' => $feedbackModel]);
    }
}
