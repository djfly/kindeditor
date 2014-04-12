<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace djfly\kindeditor;
use Yii;
use yii\web\AssetBundle;

class KindEditorAsset extends AssetBundle
{
    public $sourcePath = '@djfly/kindeditor/assets';
    public $js = [
        'kindeditor-min.js'
    ];

    // kindeditor will autoload theme css and language js, if not Use the following code
    // public $css = [
    //     'themes/default/default.css','themes/simple/simple.css'
    // ];
    // public function registerAssetFiles($view)
    // {
    //     $this->js[] = 'lang/' . Yii::$app->language . '.js';
    //     parent::registerAssetFiles($view);
    // }
}
