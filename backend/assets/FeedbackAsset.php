<?php namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Match-noname backend application asset bundle.
 */
class FeedbackAsset extends AssetBundle
{
    /**
     * @var array
     */
    public $css = [
        'feedback/style.css?v=0_1',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__);
        parent::init();
    }
}
