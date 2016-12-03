<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/12/2
 * Time: 20:10
 */
namespace Common\Model;

class ActivityimgModel extends BaseModel
{
    //对活动内容的图片缓存进行处理（进行文件移动）
    public function deal_content_msg($activity_id,$content)
    {
        $regex = '%<img src=\"(.*?)\"%i';
        $pic_cash_path = array();
        if(preg_match_all($regex, $content, $matches))
        {
            $pic_cash_path = $matches[1];
            //var_dump($matches);
        }
        for( $i=0;$i<sizeof($pic_cash_path);$i++)
        {
            $REGEX = '%/Template/Public/lib/kindeditor/attached/image/(.*?)/(.*?)$%i';
            $upload_abs_path = C('ROOT_ABS_PATH');
            if(preg_match_all($REGEX,$pic_cash_path[$i],$matches))
            {
                $kindeditor_cash_path = '.'.$matches[0][0];
                $dir_path = $upload_abs_path.'/'.$matches[1][0];
                $pic_path = $upload_abs_path.'/'.$matches[1][0].'/'.$matches[2][0];
                //echo $kindeditor_cash_path.'<br>'.$dir_path.'<br>'.$pic_path.'<br><br>';

                if(!is_dir($dir_path))
                {
                    mkdir($dir_path);
                }
                if(copy($kindeditor_cash_path,$pic_path))
                {
                    if(unlink($kindeditor_cash_path))
                    {
                        $activityimg_msg['activity_id'] = $activity_id;
                        $activityimg_msg['img_path'] = $pic_path;
                        $this->add($activityimg_msg);
                    }
                }
            }
        }
        return true;
    }
}