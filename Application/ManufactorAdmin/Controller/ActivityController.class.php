<?php
namespace ManufactorAdmin\Controller;
use Common\Controller\AuthController;
use Common\Model\ShopactivityModel;
use Common\Model\ShopModel;

/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/12/2
 * Time: 14:18
 */

class ActivityController extends AuthController
{
    public function Add_activity()
    {
        $this->display();
    }
    public function Add_feedback()
    {
        if(Is_Post)
        {
            $activity = new ShopactivityModel();
            $shop = new ShopModel();
            $shop_id = $shop->getShopID(getFactorID());
            $activity_msg = $activity->create();
            $activity_msg['shop_id'] = $shop_id;
            $activity_msg['content'] = htmlspecialchars_decode($activity_msg['content']);
            if($activity->addActivity($activity_msg))
            {
            }
            $this->redirect('ManufactorAdmin/Activity/list_activities');
        }
    }

    public function List_activities()
    {
        $shop = new ShopModel();
        $activity = new ShopactivityModel();
        $result = '';
        $shop_id = $shop->getShopID(getFactorID());
        $state = 1;
        $result = $activity->listActivities($shop_id,$state);
        $this->assign('activities',$result);
        $this->display();
    }
}