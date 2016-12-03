<?php
namespace ManufactorAdmin\Controller;
use Common\Controller\AuthController;
use Think\Controller;


/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/23
 * Time: 21:16
 */
class RegistController extends Controller
{
    public function regist()
    {
        $this->display();
    }
    public function user_feedback()
    {
        if(Is_Post)
        {
            $manufactor = D('Manufactor');
            $result = $manufactor->where($manufactor->create())->select();
            if( $result == null)
            {
                $result = $manufactor->add($manufactor->create());
                $shop = D('shop');
                $shop_msg['name']="未命名";
                $shop_msg['introduce']="未命名";
                $shop_msg['address']="未命名";
                $shop_msg['type']="未命名";
                $shop_msg['manufactor_id']=(int)$result;
                $shop->add($shop_msg);
                session('manufactor',$result);
                $this->redirect('ManufactorAdmin/Index/index');
            }
            else
            {
                $this->redirect('ManufactorAdmin/Regist/regist');
            }
        }

    }
    public function shop_feedback()
    {
        if(Is_Post)
        {

            $shop = D('Shop');

        }

    }
}