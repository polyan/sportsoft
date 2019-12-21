<?php namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Login backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var array
     */
    public $css = [
        'login/css/style.css?v=1',
    ];

    /**
     * @var array
     */
    public $js = [
        'login/js/login.js',
    ];

    /**
     * @var array
     */
    public $depends = [];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__);
        parent::init();
    }
}
