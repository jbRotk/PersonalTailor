<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/29
 * Time: 18:50
 */
namespace API\Controller;

use Common\Model\ManufactorModel;
use Think\Controller\RestController;

class ManufactorAPIController extends RestController
{
    /*protected $allowMethod    = array('get','post','put');
    protected $allowType      = array('html','xml','json');*/

    public function ManufactorMsg()
    {
        switch ($this->_method)
        {
            case 'post':
                $manufactor_id = $_POST['manufactor_id'];
                $manufactor = new ManufactorModel();
                $result = $manufactor->get_msg($manufactor_id);
                $this->response($result,'json');
                break;
            case 'get':
                $manufactor = D('Manufactor');
                $result = $manufactor->where('id='.$_GET['manufactor_id'])->select();
                $this->response($result,'json');
                break;
        }
    }
    /*设置厂商名称*/
    public function ResetName()
    {
        switch ($this->_method)
        {
            case 'post':
                $manufactor_id = $_POST['manufactor_id'];
                $manufactor_name = $_POST['manufactor_name'];
                $manufactor = new ManufactorModel();
                if($manufactor->reset_name($manufactor_id,$manufactor_name))
                {
                    $result = array('response'=>1,'data'=>'修改完成！');
                }
                else
                {
                    $result = array('response'=>0,'data'=>'修改失败！');
                }
                $this->response($result,'json');
                break;
            /*case 'get':
                $manufactor_id = $_GET['manufactor_id'];
                $manufactor_name = $_GET['manufactor_name'];
                echo $manufactor_id.$manufactor_name;
                $manufactor = D('Manufactor');
                if($manufactor->where('id='.$manufactor_id)->setField('Name',$manufactor_name))
                {
                    $result = "{response:1}";
                }
                else
                {
                    $result = "{response:0}";
                }
                $this->response($result,'json');
                break;*/
        }
    }

    /*设置密码*/
    public function ResetPassword()
    {
        switch ($this->_method)
        {
            case 'post':
                $old_passwd = $_POST['old_passwd'];
                $new_passwd = $_POST['new_passwd'];
                $manufactor_id = $_POST['manufactor_id'];

                $manufactor = new ManufactorModel();
                $result = '';
                if(!$manufactor->check_passwd($old_passwd))
                {
                    if ($manufactor->reset_passwd($manufactor_id,$new_passwd))
                    {
                        $result = array(
                            'response'=>1,
                            'data'=>'密码修改完成！',
                        );
                        $this->response($result,'json');
                    }
                    $result = array(
                        'response'=>0,
                        'data'=>'密码错误！',
                    );
                    $this->response($result,'json');
                }
                $result = array(
                    'response'=>0,
                    'data'=>'不存在此用户！',
                );
                $this->response($result,'json');
                break;
            case 'get':
                $old_passwd = $_GET['old_passwd'];
                $new_passwd = $_GET['new_passwd'];
                $manufactor_id = $_GET['manufactor_id'];
                $manufactor = new ManufactorModel();
                $result = '';
                if(!$manufactor->check_passwd($old_passwd))
                {
                    if ($manufactor->reset_passwd($manufactor_id,$new_passwd))
                    {
                        $result = array(
                            'response'=>1,
                            'data'=>'密码修改完成！',
                        );
                        $this->response($result,'json');
                    }
                }
                $result = array(
                    'response'=>0,
                    'data'=>'不存在此用户！',
                );
                $this->response($result,'json');
                break;
        }
    }
}