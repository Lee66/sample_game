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

//        $user = M::load("User@game");
//        $params['user_message'] = $user->getUserMessageById(['user_id' => 100]);
//
//        print_r($params);
        $this->getView()->assign($params);
    }
    public function loginAction()
    {

    }
}