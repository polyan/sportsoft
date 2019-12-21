<?php namespace backend\controllers;

use backend\assets\LoginAsset;
use common\components\rbac\PermissionsHelper;
use common\models\LoginForm;
use common\models\User;
use Yii;
use yii\helpers\Url;
use yii\web\TooManyRequestsHttpException;

class LoginController extends BackendController
{
    const CONTROLLER_NAME = 'login';
    const LOGIN_URL = '/admin/login';
    const LOGOUT_URL = '/admin/login/logout';

    public function actions()
    {
        return [
            'request-password-reset' => [
                'class' => 'common\components\login\RequestPasswordReset',
                'assets' => LoginAsset::class,
                'url' => '/login/password-reset',
                'needRoles' => User::BACKEND_ROLES
            ],
            'password-reset' => [
                'class' => 'common\components\login\PasswordReset',
                'assets' => LoginAsset::class
            ],
        ];
    }

    public function actionIndex($referer = null)
    {
        if (!Yii::$app->user->isGuest && Yii::$app->user->can(PermissionsHelper::getPermissionByController
            (PermissionsHelper::ADMIN))) {
            return Yii::$app->user->identity->redirectToDefault();
        }
        $post = Yii::$app->request->post();
        $model = new LoginForm();
        if ($post) {
            $model->load($post);
            if ($model->login()) {
                if (isset($referer)) {
                    $referer = urldecode($referer);
                    $refererForCheck = explode('/', $referer);
                    if (isset($refererForCheck[2]) && PermissionsHelper::checkUrl($refererForCheck[2])) {
                        return Yii::$app->getResponse()->redirect($referer)->send();
                    }
                }

                return Yii::$app->user->identity->redirectToDefault();
            }
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        Yii::$app->getResponse()->redirect(Url::to(LoginController::LOGIN_URL));
    }

    /**
     * @return string
     */
    public function actionError()
    {
        $exception = Yii::$app->getErrorHandler()->exception;
        $name = 'Произошла внутренняя ошибка сервера.';
        $message = 'Произошла внутренняя ошибка сервера.';
        if ($exception instanceof TooManyRequestsHttpException) {
            $name = 'Превышен лимит запросов';
            $message = 'Проверьте введенные Вами данные и попробуйте позже.';
        }

        return $this->render('error', [
            'name' => $name,
            'message' => $message,
        ]);
    }
}
