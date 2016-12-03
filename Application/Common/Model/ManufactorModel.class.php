<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/24
 * Time: 18:55
 */
namespace Common\Model;

class ManufactorModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ManufactorVerification($telphone,$passwd)
    {
        $Manufactor['telphone'] = $telphone;
        $Manufactor['passwd'] = $passwd;
        $Manufactor['_logic'] = 'And';
        $result = NULL;
        if($this->where($Manufactor)->select() == Null)
        {
            return false;
        }
        return true;
    }
    public function get_msg($manufactor_id)
    {
        $result="";
        if($result = $this->where('id='.$manufactor_id)->select())
        {
            $result['response'] = 1;
        }
        else
        {
            $result['response'] = 0;
        }
        return $result;
    }
    /*检查用户密码*/
    public function check_passwd($manufactor_id,$passwd)
    {
        $map['id'] = $manufactor_id;
        $map['Password'] = $passwd;
        $map['_logic'] = 'and';
        if($this->where($map)->select())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //重置名称
    public function reset_name($manufactor_id,$name)
    {
        if($this->where('id='.$manufactor_id)->setField('Name',$name))
        {
            return true;
        }
        return false;
    }
    //重置密码
    public function reset_passwd($manufactor_id,$passwd)
    {
        if($this->where('id='.$manufactor_id)->setField('Password',$passwd))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //public function
}