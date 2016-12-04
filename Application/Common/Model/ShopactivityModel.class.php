<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/12/2
 * Time: 15:50
 */
namespace Common\Model;
use Think\Model\RelationModel;

class ShopactivityModel extends RelationModel
{
    protected $_link = array(
        'Activitytitleimg'=>array(
            'mapping_type'      => self::HAS_MANY,
            'foreign_key'   => 'activity_id',
            'mapping_fields	' =>'img_path',
            'mapping_limit'=>'1',
        ),
    );
    protected $_auto = array(
        array('create_date','getCurrenTime',1,'function'),
        array('state','1',1),
    );
    public function addActivity($activity_msg)
    {
        $activity_title_img = new ActivitytitleimgModel();

        $return_id = $this->add($activity_msg);
        //获取注册好的活动id
        if($return_id)
        {
            $activity_img = new ActivityimgModel();
            $new_content = $activity_img->deal_content_msg($return_id,$activity_msg['content']);
            if(!is_null($new_content))
            {
                //如果活动详情的图片处理完之后，获得处理后的content(修改了图片路径) 重新存入
                $map['content'] = $new_content;
                $this->where('id='.$return_id)->save($map);
                if($activity_title_img->Upload($return_id))
                {
                    return true;
                }
            }
        }
        return false;
    }
    public function listActivities($shop_id,$state)
    {
        $map['shop_id'] = $shop_id;
        $map['state'] = $state;
        $map['_logic'] = 'And';
        $result = $this->relation(true)->where($map)->select();
        return $result;
    }
    public function up_down_activity($activity_id,$state)
    {
        $map['state'] = $state;
        if($this->where('id='.$activity_id)->save($map))
        {
            return true;
        }
        return false;
    }
    public function delActivities($activities_id)
    {
        $result = '';
        $activityimg = new ActivityimgModel();
        $activitytitleimg = new ActivitytitleimgModel();
        $tag = 0;
        foreach ($activities_id as $activity_id)
        {
            if($this->where('id='.$activity_id)->delete())
            {
                if($activitytitleimg->del_activity_title_img($activity_id))
                {
                    if($activityimg->del_activity_img($activity_id))
                    {
                        $tag++;
                    }
                }
            }
        }
        if($tag == sizeof($activities_id))
        {
            $result = array(
                'response'=>1,
                'data'=>'全部删除成功',
            );
        }
        else if($tag == 0)
        {
            $result = array(
                'response'=>0,
                'data'=>'删除失败',
            );
        }
        else
        {
            $result = array(
                'response'=>1,
                'data'=>'部分删除成功',
            );
        }
        return $result;
    }
}