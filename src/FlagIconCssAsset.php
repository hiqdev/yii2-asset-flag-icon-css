<?php
/**
 * @link      http://hiqdev.com/yii2-asset-flag-icon-css
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\assets\flagiconcss;

class FlagIconCssAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/flag-icon-css';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/flag-icon.min.css',
    ];

}
