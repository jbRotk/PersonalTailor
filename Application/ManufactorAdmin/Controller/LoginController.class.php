<?php
namespace ManufactorAdmin\Controller;
use Think\Controller;


/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/23
 * Time: 21:16
 */
class LoginController extends Controller
{
    public function login()
    {
        $this->display();
    }
    public function feedback()
    {
        if(Is_Post)
        {
            $manufactor = D('Manufactor');
            $result = $manufactor->where($manufactor->create())->select();
            //$name = $arry[0]['name'];
            if( $result == null)
            {
                echo 'error';
            }
            else
            {
                $manufactor_id = $result[0]['id'];
                session('manufactor',$manufactor_id);
                $this->redirect('ManufactorAdmin/Index/index');
            }
        }
    }
}

