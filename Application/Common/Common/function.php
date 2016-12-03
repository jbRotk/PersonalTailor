<?php
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