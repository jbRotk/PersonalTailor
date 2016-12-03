<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/12/2
 * Time: 15:50
 */
namespace Common\Model;
class ShopactivityModel extends BaseModel
{
    protected $_auto = array(
        array('create_time','getCurrenTime',1,'function'),
    );
    public function addActivity($activity_msg)
    {
        $return_id = $this->add($activity_msg);
        if($return_id)
        {
            echo $return_id;
            $activity_img = new ActivityimgModel();
            if($activity_img->deal_content_msg($return_id,$activity_msg['content']))
            {
               return true;
            }
        }
        return false;
    }
}