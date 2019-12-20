<?php namespace common\widgets\phoneInput;

use yii\web\AssetBundle;

class PhoneInputAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var array
     */
    public $css = [];

    /**
     * @var array
     */
    public $js = [
        'js/jquery.maskedinput.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets/';
        parent::init();
    }
}
