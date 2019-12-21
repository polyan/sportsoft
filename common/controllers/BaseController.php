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
        if (Yii::$app->id == self::BACKEND_APP && Yii::$app->user->isGuest) {
            if ($this->id != 'login') {
                $loginUrl = $this->loginUrl . "?referer=" . urlencode(Url::to());

                return Yii::$app->getResponse()->redirect($loginUrl)->send();
            }
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
