<?php

namespace hamedshahien\yii\modules\i18n\assets;

class AppAjaxButtonsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hamedshahien/yii/modules/i18n/web';
    public $js = [
        'js/app-ajax-buttons.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'uran1980\yii\widgets\igrowl\IgrowlAsset',
        'uran1980\yii\bootstrapConfirmation\BootstrapConfirmationAsset',
    ];
}
