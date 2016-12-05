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
        ),
        'Activityimg'=>array(
            'mapping_type'      => self::HAS_MANY,
            'foreign_key'   => 'activity_id',
            'mapping_fields	' =>'img_path',
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
            //将内容图片缓存 删除 移动到正式内容的图片文件夹内，以及存入数据库
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
    public function search_activity_msg($activity_id)
    {
        $result = $this->relation(true)->where('id='.$activity_id)->select();
        return $result;
    }
    public function update_activity($activity_id,$activity_msg)
    {
        //更新活动主题图片没完成
        $old_activity_msg = $this->where('id='.$activity_id)->select();
        $old_content = $old_activity_msg[0]['content'];
        if(!is_null($old_content))
        {
            $new_content = $activity_msg['content'];
            if($new_content == $old_content)
            {}
            //新旧的消息不相等的时候，则将旧内容的图片全删除，上传新内容的图片上去。
            else
            {
                $activity_img = new ActivityimgModel();
                if( $activity_img->del_activity_img($activity_id))
                {
                    //处理新内容的部分，上传内容的图片上去
                    $dealed_new_content = $activity_img->deal_content_msg($activity_id,$new_content);
                    if(!is_null($dealed_new_content))
                    {
                        //处理好了活动内容的部分
                        $activity_msg['content'] = $dealed_new_content;
                        $this->where('id='.$activity_id)->save($activity_msg);
                        return true;
                    }
                }

            }
        }
        return false;
    }
}