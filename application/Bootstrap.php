<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 2017/1/13
 * Time: 10:22
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{

    /**
     * 初始化全局变量及对象
     */
    public function _initVariables(Yaf_Dispatcher $dispatcher)
    {
        $config = Yaf_Application::app()->getConfig();

        if ($config->debug) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL ^ E_DEPRECATED);
        }

        $db = $config->get('db');

        Yaf_Registry::set('db', new Dbh($db));

        Yaf_Registry::set('config', $config);


    }
    public function _initDefaultName(Yaf_Dispatcher $dispatcher)
    {
        $dispatcher->setDefaultController("Index")->setDefaultAction("login");
    }
}