<?php
/**
 * Created by PhpStorm.
 * User: evgeniy
 * Date: 21.12.19
 * Time: 16:35
 */

namespace frontend\controllers;

use frontend\models\SignupForm;
use Yii;
use yii\web\Controller;

class SignupController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Спасибо за регистрацию');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
