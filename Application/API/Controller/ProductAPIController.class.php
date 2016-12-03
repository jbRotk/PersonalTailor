<?php
/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/29
 * Time: 22:47
 */
namespace API\Controller;

use Common\Model\ProductModel;
use Think\Controller\RestController;

class ProductAPIController extends RestController
{
    public function regist_product()
    {
        switch ($this->_method)
        {
            case 'post':
                $result = '';
                $product = new ProductModel();
                $product_id = $product->addData($product->create());
                if($product_id != -1)/*-1为没有商品存在的情况*/
                {
                    $upload = new ProductimgModel();
                    if($upload->upload($product_id))
                    {
                        $result = array('response'=>1,'data'=>'图片上传成功','product_id'=>$product_id);
                    }
                    else
                    {
                        $result = array('response'=>0,'data'=>'图片上传失败','product_id'=>-1);
                    }
                }
                else
                {
                    $result = array('response'=>0,'data'=>'产品上传失败','product_id'=>-1);
                }
                return $result;
                break;
        }
    }
    public function del_products()
    {
        switch ($this->_method)
        {
            case 'post':
                $products_id = $_POST['products_id'];
                $product = new ProductModel();
                $result = $product->delData($products_id);
                $this->response($result,'json');
                break;
        }
    }
    public function search_products()
    {
        switch ($this->_method)
        {
            case 'post':
                $manufactors_id = $_POST['manufactors_id'];
                foreach ($manufactors_id as $manufactor_id)
                {

                }
                break;
            case 'get':
                /*获取所有产品*/
                break;
        }
    }
    public function product_msg()
    {
        switch ($this->_method)
        {
            case 'post':
                $product_id = $_POST['product_id'];
                $product = new ProductModel();
                $result = $product->msgData($product_id);
                if(!is_null($result))
                {
                    $result['response'] = 1;
                    $result['data'] = '查找成功';
                }
                else
                {
                    $result['response'] = 0;
                    $result['data'] = '查找失败';
                }
                $this->response($result[0],'json');
                break;
            case 'get':
                $product_id = $_GET['product_id'];
                $product = new ProductModel();
                $result = $product->msgData($product_id);
                if(!is_null($result))
                {
                    $result['response'] = 1;
                    $result['data'] = '查找成功';
                }
                else
                {
                    $result['response'] = 0;
                    $result['data'] = '查找失败';
                }
                $this->response($result[0],'json');
                break;
        }
    }
    public function update_product()
    {
        switch ($this->_method)
        {
            case 'post':
                $result = '';
                $product_msg = array(
                    'id'=>$_POST['id'],
                    'name'=>$_POST['name'],
                    'introduce'=>$_POST['introduce'],
                    'type'=>$_POST['type'],
                    'price'=>$_POST['price'],
                    'status'=>$_POST['status'],
                );
                $product = new ProductModel();
                if($product->update_product($product_msg))
                {
                    $result = array(
                        'response'=>1,
                        'data'=>'更新数据成功！',
                    );
                }
                else
                {
                    $result = array(
                        'response'=>0,
                        'data'=>'更新数据失败！',
                    );
                }
                $this->response($result,'json');
                break;
            case 'get':
                break;
        }
    }
    public function down_product()
    {
        switch ($this->_method)
        {
            case 'post':
                $result = '';
                $product_msg = array(
                    'id'=>$_POST['id'],
                    'status'=>$_POST['status'],
                );
                $product = new ProductModel();
                if($product->update_product($product_msg))
                {
                    $result = array(
                        'response'=>1,
                        'data'=>'更新数据成功！',
                    );
                }
                else
                {
                    $result = array(
                        'response'=>0,
                        'data'=>'更新数据失败！',
                    );
                }
                $this->response($result,'json');
                break;
            case 'get':
                break;
        }
    }
}