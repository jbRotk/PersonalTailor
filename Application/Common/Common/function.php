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