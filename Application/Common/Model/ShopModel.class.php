<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/26
 * Time: 20:04
 */
namespace Common\Model;

use Common\Model\BaseModel;

class ShopModel extends BaseModel
{
    protected $_validate = array();
    protected $_auto = array(
        array(''),
    );
    public function getShopID($manufactor_id)
    {
        return $this->where('manufactor_id='.$manufactor_id)->getField('id');
    }

    public function regist($manufactor_id,$regist_msg)
    {
        $id = '';
        $result = '';
        if($id = $this->where('manufactor_id='.$manufactor_id)->save($regist_msg))
        {
            $result = array(
                'id'=>$id,
                'response'=>1,
                'data'=>'设置成功！',
            );
        }
        else
        {
            $result = array(
                'id'=>'',
                'response'=>0,
                'data'=>'设置失败！',
            );
        }
        return $result;
    }

    public function getShopMsg($manufactor_id)
    {
        $result = '';
        if($result = $this->where('manufactor_id='.$manufactor_id)->select())
        {
            $result['response'] = 1;
            $result['data'] = '成功获取信息';
        }
        else
        {
            $result['response'] = 0;
            $result['data'] = '获取信息失败';
        }
        return $result;
    }

}