<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/29
 * Time: 21:47
 */
namespace API\Controller;

use Common\Model\ShopModel;
use Think\Controller\RestController;

class ShopAPIController extends RestController
{
    public function regist_shop()
    {
        switch ($this->_method)
        {
            case 'post':
                $result = '';
                $manufactor_id = $_POST['manufactor_id'];
                $shop = new ShopModel();
                if($result = $shop->regist($manufactor_id,$shop->create()))
                {
                    $this->response($result,'json');
                }
                break;
        }
    }
    public function get_msg()
    {
        switch ($this->_method)
        {
            case 'post':
                $manufactor_id = $_POST['manufactor_id'];
                $shop = new ShopModel();
                $result = $shop->getShopMsg($manufactor_id);
                $this->response($result,'json');
        }
    }
}