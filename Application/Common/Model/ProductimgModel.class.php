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
/*        $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    './Uploads/',
            'savePath'   =>    '',
            'exts'       =>    array('jpg','png', 'jpeg'),

        );*/
        $rules = C('UPLOAD_RULES');
        $upload = new Upload($rules);

        $info = $upload->upload();
        if(!$info)
        {
            return false;
        }
        else
        {
            foreach ($info as $file)
            {

                $img_msg['img_path'] = './Uploads/'.$file['savepath'].$file['savename'];
                if(cropImage($img_msg['img_path']))
                {
                    $img_msg['product_id'] = $product_id;
                    $this->add($img_msg);
                }
                else
                {
                    return false;
                }
            }
        }
        return true;
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