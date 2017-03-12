<?php

namespace hamedshahien\yii\modules\i18n;

use Yii;

class Module extends \yii\base\Module
{
    public $pageSize = 25;

    public static function module()
    {
        return static::getInstance();
    }

    public static function t($message, $params = [], $language = null)
    {
        return Yii::t('hamedshahien\yii\modules\i18n', $message, $params, $language);
    }
}
