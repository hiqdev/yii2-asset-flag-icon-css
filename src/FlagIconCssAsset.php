<?php
/**
 * Yii2 asset for bower flag-icon-css
 *
 * @link      https://github.com/hiqdev/yii2-asset-flag-icon-css
 * @package   yii2-asset-flag-icon-css
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\flagiconcss;

class FlagIconCssAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/flag-icon-css';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/flag-icon.min.css',
    ];
}
