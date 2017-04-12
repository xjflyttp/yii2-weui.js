<?php

namespace xj\weuijs;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class WeuiJsAsset extends AssetBundle
{

    public $sourcePath = '@npm/weui.js/dist';
    public $basePath = '@webroot/assets';
    public $js = ['weui.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
