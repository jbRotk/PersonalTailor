<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/26
 * Time: 20:04
 */
namespace Common\Model;

use Common\Model\BaseModel;
use Think\Controller;
use Think\Image;
use Think\Model\RelationModel;
use Think\Upload;

class ProductimgModel extends BaseModel
{

    protected $_validate = array();
    protected $_auto = array(
    );

    public function upload($product_id)
    {
        $config = array(
            'maxSize'=> 3145728,
            'rootPath'   =>   './Uploads/product_pic/',
            'exts' =>array('png','jpg','jpeg'),
        );
        if(Upload($config,'product_id',$product_id,$this))
        {
            return true;
        }
        return false;
    }

    public function del_img($product_id)
    {
        $imgs_path = $this->where('product_id='.$product_id)->field('img_path')->select();
        foreach ($imgs_path as $img_path) {
            unlink($img_path['img_path']);

        }
        if($this->where('product_id='.$product_id)->delete())
        {
            return true;
        }
        return false;
    }


}