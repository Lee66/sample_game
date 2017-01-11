<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 2016/12/9
 * Time: 13:53
 */
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $params = array();
        $params['title'] = "SampleGame";
        $params['descriptions'] = "it is a sample game";
        $params['keywords'] = "game";
        $params['author'] = 'WJM';
        $this->getView()->assign($params);
    }
}