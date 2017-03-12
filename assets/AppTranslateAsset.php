<?php

namespace hamedshahien\yii\modules\i18n\assets;

class AppTranslateAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hamedshahien/yii/modules/i18n/web';
    public $css = [
        'css/translate.css',
    ];
    public $js = [
        'js/translate.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'hamedshahien\yii\assets\jQueryEssential\JqueryEssentialAsset',
        'hamedshahien\yii\modules\i18n\assets\AppAjaxButtonsAsset',
        'hamedshahien\yii\widgets\chosen\ChosenSelectAsset',
    ];
}
