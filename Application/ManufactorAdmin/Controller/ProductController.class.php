<?php
namespace ManufactorAdmin\Controller;
use Common\Controller\AuthController;
use Common\Model\ProductimgModel;
use Common\Model\ProductModel;

/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/26
 * Time: 19:24
 */
class ProductController extends AuthController
{
    public function regist_product()
    {
        $this->display();
    }
    public function regist_feedback()
    {
        if(Is_Post)
        {
            $product = new \Common\Model\ProductModel();
            $product_id = $product->addData($product->create());
            if (!is_null($product_id))
            {
                $upload = new ProductimgModel();
                $upload->upload($product_id);
                $this->redirect('ManufactorAdmin/Index/index');
            }
        }
    }
    public function list_product()
    {
        $manufactor_id = getFactorID();
        $product = new \Common\Model\ProductModel();
        $result = $product->listData($manufactor_id,1);
        $this->assign('products',$result);
        $this->display();
    }
    public function list_down_products()
    {
        $manufactor_id = getFactorID();
        $product = new ProductModel();
        $result = $product->listData($manufactor_id,0);
        $this->assign('products',$result);
        $this->display();
    }
}