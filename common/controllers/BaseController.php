<?php namespace common\controllers;

use common\components\rbac\PermissionsHelper;
use Yii;
use yii\web\Controller;

abstract class BaseController extends Controller
{
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
        if (!Yii::$app->user->isGuest || ($this->id == $this->loginControllerName)) {
            if (!Yii::$app->user->can(PermissionsHelper::getPermissionByController($this->moduleName,
                    $this->id)) && !($this->id == $this->loginControllerName)) {

                return Yii::$app->user->identity->redirectToDefault();
            } else {
                LayoutHelper::getTyresLayout();
                $this->enableCsrfValidation = false;
            }
        } else {
            $loginUrl = $this->loginUrl . "?referer=" . urlencode(Url::to());

            return Yii::$app->getResponse()->redirect($loginUrl)->send();
        }
        $this->currentController = $action->controller->id;
        $this->currentAction = $action->id;

        return parent::beforeAction($action);
    }

    public function throwNotFound()
    {
        throw new HttpException(404, 'Page not found');
    }
}
