<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 2016/12/9
 * Time: 13:53
 */
class IndexController extends Yaf_Controller_Abstract
{
    /**
     * 首页
     */
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

    /**
     * 登录
     */
    public function loginAction()
    {
        $params = array();
        $params['title'] = "SampleGame-登录";
        $params['descriptions'] = "it is a sample game";
        $params['keywords'] = "game";
        $params['author'] = 'WJM';
        $this->getView()->assign($params);
    }
    /**
     * 注册
     */
    public function registerAction()
    {

    }
    /**
     * 登录验证
     */
    public function loginConfirmAction()
    {
        $user_name = $this->getRequest()->getParam("user_name");
        $password =  $this->getRequest()->getparam("password");

        $user = M::load("User@game");
        $result = $user->userConfirm(['user_name'=>$user_name,'password'=>$password]);
        echo json_encode($result);
    }
    /**
     * 获取所有用户信息
     */
    public function getAllUserMessage()
    {
        $user = M::load("User@game");
        $result = $user->getUserMessageById();
        echo json_encode($result);
    }
    /**
     * 
     */



}