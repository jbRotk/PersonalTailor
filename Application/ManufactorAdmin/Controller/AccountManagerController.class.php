<?php
namespace ManufactorAdmin\Controller;
use Common\Controller\AuthController;

/**
 * Created by PhpStorm.
 * User: BrazZ
 * Date: 2016/11/29
 * Time: 17:17
 */
class AccountManagerController extends AuthController
{
    public function reset_name()
    {
        $this->display();
    }
    public function reset_passwd()
    {
        $this->display();
    }
}