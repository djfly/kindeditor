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
	public $language;
    public $sourcePath = '@djfly/kindeditor/assets';
    public $js = [
        'kindeditor-min.js'
    ];
    // public $css = [
    //     'themes/default/default.css','themes/simple/simple.css'
    // ];
    // public function registerAssetFiles($view)
    // {
    //     $language = $this->language ? $this->language : Yii::$app->language;
    //     $this->js[] = 'lang/' . $language . '.js';
    //     parent::registerAssetFiles($view);
    // }
}
