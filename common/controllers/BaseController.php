<?php namespace common\controllers;

use common\components\rbac\PermissionsHelper;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\HttpException;

abstract class BaseController extends Controller
{
    const BACKEND_APP = "app-backend";

    /**
     * @var string
     */
    protected $loginUrl;

    /**
     * @var string
     */
    protected $loginControllerName;

    /**
     * @var string
     */
    protected $moduleName;

    /**
     * @var string
     */
    protected $currentController;

    /**
     * @var string
     */
    protected $currentAction;

    public function beforeAction($action)
    {
        if (Yii::$app->id == self::BACKEND_APP) {
//            if (!Yii::$app->user->isGuest) {
//                if (!Yii::$app->user->can(PermissionsHelper::getPermissionByController($this->moduleName,
//                        $this->id)) && !($this->id == $this->loginControllerName)) {
//                    return Yii::$app->user->identity->redirectToDefault();
//                } else {
//                    $this->enableCsrfValidation = false;
//                }
//            } else {
//                $loginUrl = $this->loginUrl . "?referer=" . urlencode(Url::to());
//
//                return Yii::$app->getResponse()->redirect($loginUrl)->send();
//            }
        }
        $this->currentController = $action->controller->id;
        $this->currentAction = $action->id;
//
       return parent::beforeAction($action);
    }

    public function throwNotFound()
    {
        throw new HttpException(404, 'Page not found');
    }
}
