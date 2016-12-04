<?php
namespace Common\Model;
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/12/3
 * Time: 21:15
 */

class ActivitytitleimgModel extends BaseModel
{
    public function Upload($activity_id)
    {
        $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    './Uploads/activity_title_pic/',
            'savePath'   =>    '',
            'exts'       =>    array('jpg','png', 'jpeg'),
        );
        if(Upload($config,'activity_id',$activity_id,$this))
        {
            return true;
        }
        return false;
    }

    public function del_activity_title_img($activity_id)
    {
        if(Del_img($this,'activity_id',$activity_id,'img_path'))
        {
            return true;
        }
        return false;
    }
}