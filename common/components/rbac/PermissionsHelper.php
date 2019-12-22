<?php namespace common\components\rbac;

use Yii;

class PermissionsHelper
{
    const ADMIN = 'admin';

    /**
     * @param string $controller
     *
     * @return string
     */
    public static function getPermissionByController($module, $controller = '', $action = '')
    {
        return $module . "_" . $controller . "_" . $action . '_controller';
    }

    /**
     * @param string $function
     *
     * @return string
     */
    public static function getPermissionByFunction($function)
    {
        return $function . '_function';
    }

    /**
     * @param array $url
     * @param string $module
     *
     * @return bool
     * @throws \Exception
     */
    public static function checkUrl($url, $module = self::ADMIN)
    {
        if (is_array($url) && isset($url[0])) {
            $url = $url[0];
        }

        if (is_string($url)) {
            $url = explode('/', $url);

            $controller = $url[0];

            return Yii::$app->user->can(self::getPermissionByController($module, $controller));
        } else {
            throw new \Exception("Wrong url format");
        }
    }
}
