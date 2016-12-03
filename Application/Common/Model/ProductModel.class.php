<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/26
 * Time: 20:04
 */
namespace Common\Model;

use Common\Model\BaseModel;
use Think\Model\RelationModel;

class ProductModel extends RelationModel
{
    protected $_link = array(
        'Productimg'=>array(
            'mapping_type'      => self::HAS_MANY,
            'foreign_key'   => 'product_id',
            'mapping_fields	' =>'img_path',
            'mapping_limit'=>'1',
        ),
    );
    protected $_validate = array();
    protected $_auto = array(
        array('status','1',1),
        array('createtime','getCurrenTime',1,'function'),
    );

    public function update_product($product_msg)
    {
        $id = $product_msg['id'];
        if($this->where(array('id'=>$id))->save($product_msg))
        {
            return true;
        }
        return false;
    }

    public function msgData($product_id)
    {
        $result = $this->relation(true)->where('id='.$product_id)->select();
        return $result;
    }

    public function addData($product_msg)
    {
        if($product_msg == null){return -1;}
        else
        {
            $manufactor_id = session('manufactor');
            $shop = new \Common\Model\ShopModel();
            $shop_id = $shop->getShopID($manufactor_id);
            $product_msg['shop_id'] = $shop_id;
            $result = $this->add($product_msg);
            return $result;
        }
    }

    public function delData($products_id)
    {
        $result = '';
        $tag = 0;
        $product_img = new ProductimgModel();
        foreach ($products_id as $product_id)
        {
            echo 1;
            $product_img->del_img($product_id);
            if($this->where('id='.$product_id)->delete())
            {
                if($product_img->del_img($product_id))
                {
                    $tag+=1;
                }
            }
        }
        if($tag==sizeof($products_id))
        {
            $result = array(
                'response'=>1,
                'data'=>'全部删除成功',
            );
        }
        else if($tag==0)
        {
            $result = array(
                'response'=>0,
                'data'=>'删除失败',
            );
        }
        else
        {
            $result = array(
                'response'=>0,
                'data'=>'部分删除成功',
            );
        }
        return $result;
    }

    public function listData($manufactor_id,$status)
    {
        $shop = new \Common\Model\ShopModel();
        $shop_id = $shop->getShopID($manufactor_id);
        $map['shop_id'] = $shop_id;
        $map['status'] = $status;
        $map['_logic'] = 'And';
        $list_products = $this->relation(true)->where($map)->select();
        return $list_products;
    }

}