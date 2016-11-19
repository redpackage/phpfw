<?php
/**
 * Created by snow
 * Date: 2016/11/19
 * Time: 15:19
 */
if (version_compare(PHP_VERSION, '5.3.0', '<')) die('require PHP > 5.3.0 !');
defined('APP_DEBUG') or define('APP_DEBUG', true);
defined('APP_ENV') or define('APP_ENV', 'dev');

require(__DIR__ . '/system/autoload.php');
//require(__DIR__ . '/../system/yiisoft/yii2/Yii.php');

//$config = require(__DIR__ . '/../config/web.php');
(new core\App(''))->run();