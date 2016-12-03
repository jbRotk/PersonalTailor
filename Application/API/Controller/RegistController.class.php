<?php
namespace API\Controller;
use Think\Controller;

/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/26
 * Time: 15:20
 */
class RegistController extends Controller
{
    public function PostForm()
    {
        if(Is_Post)
        {
            $manufactor = D('Manufactor');
            $result = $manufactor->where($manufactor->create())->select();
            if( $result == null)
            {
                $result = $manufactor->add($manufactor->create());

                session('manufactor',$result);
                $this->redirect('ManufactorAdmin/Index/index');
            }
            else
            {
                echo "创建失败，存在相同用户";
            }
        }

    }
}
