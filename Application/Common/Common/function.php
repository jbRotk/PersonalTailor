<?php
use Think\Upload;

/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/26
 * Time: 20:36
 */

function getCurrenTime()
{
    return date('Y-m-d H:m:s');
}

function cropImage($img_path)
{
    $image = new \Think\Image();
    $image->open($img_path);
    if($image->thumb(250,180,3)->save($img_path))
    {
        //echo  $image->thumb(300,200,3)->save($img_path);
        return true;
    }
    return false;
}

function getFactorID()
{
    return session('manufactor');
}
function jsonReturn($data,$success_data,$faild_data)
{
    $result = '';
    if(!is_null($data))
    {
        $result = array(
            "response"=>1,
            "data"=>$success_data,
            "return"=>$data
        );
    }
    else
    {
        $result = array(
            "response"=>0,
            "data"=>$faild_data,
            "return"=>null
        );
    }
    return $result;
}

function Upload($config,$name,$name_id,$model)
{
    $upload = new Upload($config);

    $info = $upload->upload();
    if(!$info)
    {
        echo "info erro<br>";
        return false;
    }
    else
    {
        foreach ($info as $file)
        {

            $img_msg['img_path'] = $config['rootPath'].$file['savepath'].$file['savename'];
            //对图片裁剪 标准 250 * 180
            if(cropImage($img_msg['img_path']))
            {
                $img_msg[$name] = $name_id;
                $model->add($img_msg);
            }
            else
            {
                return false;
            }
        }
    }
    return true;
}
function Del_img($model,$name,$name_id,$img_path_name)
{
    $imgs_path = $model->where($name.'='.$name_id)->field($img_path_name)->select();
    foreach ($imgs_path as $img_path) {
        unlink($img_path[$img_path_name]);
    }
    if($model->where($name.'='.$name_id)->delete())
    {
        return true;
    }
    return false;
}