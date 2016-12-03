<?php
namespace API\Controller;
use Common\Model\ShopactivityModel;
use Common\Model\ShopModel;
use Think\Controller\RestController;
use Think\Model\RelationModel;

/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/12/2
 * Time: 15:52
 */

class ShopActivityAPIController extends RestController
{
    public function add_activity()
    {
        switch ($this->_method)
        {
            case 'post':
                $activity = new ShopactivityModel();
                $shop = new ShopModel();
                $shop_id = $shop->getShopID(getFactorID());
                $activity_msg = $activity->create();
                $activity_msg['shop_id'] = $shop_id;
                $activity_msg['content'] = htmlspecialchars_decode($activity_msg['content']);
                $result = '';
                if($activity->addActivity($activity_msg))
                {
                    $result = array(
                        'response'=>'1',
                        'data'=>'活动添加成功！',
                    );
                }
                else
                {
                    $result = array(
                        'response'=>'0',
                        'data'=>'活动添加失败！',
                    );
                }
                $this->response($result,'json');
                break;
        }
    }
    public function search_activity_msg()
    {
        switch ($this->_method)
        {
            case 'post':
                $activity_id = $_POST['activity_id'];
                $activity = new ShopactivityModel();
                $result = $activity->where('id='.$activity_id)->select();
                $this->response($result[0],'json');
                break;
        }
    }
}