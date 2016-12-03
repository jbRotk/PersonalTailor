<?php
namespace Common\Controller;

use Think\Auth;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");

class AuthController extends Controller
{
    protected function _initialize()
    {
        $ssession_auth = session('manufactor');
        if(!$ssession_auth)
        {
            $this->error("请先登录。。。",U('ManufactorAdmin/login/login'));
        }
        else
        {
            return true;
        }
        $auth = new Auth();
        if(!$auth->check())
        {
            //$this->error('无权限');
            //$this->success('欢迎访问',U('index/index'));
        }
    }
}