<?php
/**
 * 框架入口文件
 *
 * @author wangjm
 * @date 2016-12-12 11:00
 * @version $Id$
 */
ini_set('display_errors',1);
error_reporting(0);

define('APPLICATION_PATH', __DIR__);
define('LIB_PATH', realpath(APPLICATION_PATH . '/../library'));
define('WEB_HTTP',  "http://{$_SERVER['HTTP_HOST']}/");
define('WEB_ROOT',  '/');



$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->run();
