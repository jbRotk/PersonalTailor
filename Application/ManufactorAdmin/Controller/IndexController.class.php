<?php
namespace ManufactorAdmin\Controller;
use Common\Controller\AuthController;

class IndexController extends AuthController
{
    public function index()
    {
        $this->display();
    }
}