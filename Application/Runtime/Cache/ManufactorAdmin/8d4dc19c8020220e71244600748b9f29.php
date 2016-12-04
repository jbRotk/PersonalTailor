<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>微定制</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://www.bootcdn.cn/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://www.bootcdn.cn/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo C('ADMINLTE_PATH');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!--header-link-->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--header-script-->
    
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!--侧边栏-->
    <header class="main-header">
    <!-- 图标部分 -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>Tr</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Personal</b>Tailor</span>
    </a>
    <!--  顶部栏Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- 左上角的回收栏按钮 Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>


        <!-- 右上角的人物图标以及其他功能信息-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                        page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Create a nice theme
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Some task I need to do
                                            <small class="pull-right">60%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Make beautiful transitions
                                            <small class="pull-right">80%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <!-- Left side column. contains the logo and sidebar -->

        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- 侧滑栏用户头像部分 Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- 搜索部分search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->

                <!--侧滑栏主体部分-->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <!--active treevice 是被选择的测滑栏-->

                    <!--侧滑栏-->
                    <li>
                        <a href="<?php echo U('ManufactorAdmin/Index/index');?>">
                            <i class="glyphicon glyphicon-home"></i> <span>页面主页</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>账号管理</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo U('ManufactorAdmin/AccountManager/reset_name');?>"><i class="fa fa-circle-o"></i>修改名称</a></li>
                            <li><a href="<?php echo U('ManufactorAdmin/AccountManager/reset_passwd');?>"><i class="fa fa-circle-o"></i> 修改密码</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-university"></i> <span>店铺管理</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo U('ManufactorAdmin/Shop/shopsetting');?>"><i class="fa fa-circle-o"></i> 店铺信息管理</a></li>
                            <li><a href="index2.html"><i class="fa fa-circle-o"></i> 宣传图管理</a></li>
                        </ul>
                    </li>
                    
    <li class="active treeview">
        <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>商品管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo U('ManufactorAdmin/Product/regist_product');?>"><i class="fa fa-circle-o"></i>添加商品</a></li>
            <li class="active"><a href="<?php echo U('ManufactorAdmin/Product/list_product');?>"><i class="fa fa-circle-o"></i>商品列表</a></li>
            <li><a href="<?php echo U('ManufactorAdmin/Product/list_down_products');?>"><i class="fa fa-circle-o"></i>下架商品列表</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>展示商品管理</a></li>
        </ul>
    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-hand-peace-o"></i>
                            <span>店铺活动</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo U('ManufactorAdmin/Activity/add_activity');?>"><i class="fa fa-circle-o"></i>添加店铺活动</a></li>
                            <li><a href="<?php echo U('ManufactorAdmin/Activity/list_activities');?>"><i class="fa fa-circle-o"></i> 活动列表</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i>历史活动</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list-alt"></i>
                            <span>订单管理</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>订单列表</a></li>
                        </ul>
                    </li>

                    <!--<li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                        </a>
                    </li>-->
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                </ul>
            </section>

            <!-- /.sidebar -->
        </aside>


    <!-- Content Wrapper. Contains page content -->
    
    <div class="content-wrapper" id="contentWrapper">
        <div class="content-header">
            <h1>
                商品管理
                <small>商品列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/backend/page/index"><i class="fa fa-dashboard"></i>主页</a></li>
                <li><a href="javascript:;"><i class="fa fa-user"></i>商品管理</a></li>
                <li><a class="active">商品列表</a></li>
            </ol>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>商品列表</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-2">
                                    &nbsp;
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group pull-right">
                                        <input type="text" class="form-control" id="search" placeholder="请输入店铺名称" data-bind="value: searchString" />
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" data-bind="click: searchClick">搜索</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table no-margin">
                                <thead>
                                <tr style="background-color: #f9f9f9;">
                                    <th class="col-md-3 text-center">商品图片</th>
                                    <th class="col-md-2 text-center" name="name" data-bind="click: orderClick"><span>名称&nbsp;<i class="fa fa-sort-asc"></i><i class="fa fa-sort-desc"></i></span></th>
                                    <th class="col-md-2 text-center">简介</th>
                                    <th class="col-md-1 text-center">商品价格</th>
                                    <th class="col-md-2 text-center" name="financeid" data-bind="click: orderClick"><span>创建时间&nbsp;<i class="fa fa-sort-asc"></i><i class="fa fa-sort-desc"></i></span></th>
                                    <th class="col-md-2 text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody >
                                <?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><tr>
                                        <td class="col-md-3">
                                            <div class="col-md-2 choose">
                                                <input type="checkbox" name="checkbox" class="product-checkbox" value="<?php echo ($arr["id"]); ?>" checked="false"/>
                                            </div>
                                            <div class="col-md-10">
                                                <?php if(is_array($arr["Productimg"])): $i = 0; $__LIST__ = $arr["Productimg"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><img class="img-rounded" src="<?php echo C('ROOT_PATH'); echo ($item["img_path"]); ?>" style="width: 100%" /><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </td>
                                        <td class="col-md-2 text-center" data-bind="text: name"><?php echo ($arr["name"]); ?></td>
                                        <td class="col-md-2 text-center">
                                            <a  href="javascript:;" data-toggle="modal" data-target="#view" ><span class="introduce-action" data-introduce="<?php echo ($arr["introduce"]); ?>">查看说明</span></a>
                                        </td>
                                        <td class="col-md-1 text-center">
                                            <?php echo ($arr["price"]); ?>

                                            <!--<div>
                                                <input type="text" class="form-control text-center" data-bind="value: sort">
                                            </div>
                                            <div style="padding-top: 5px;">
                                                <a href="javascript:;" data-bind="click: $root.setSort">保存</a>
                                            </div>-->
                                        </td>
                                        <td class="col-md-2 text-center">
                                            <div>
                                                <span data-bind="text: $root.showTime(createtime)"><?php echo ($arr["createtime"]); ?></span>
                                            </div>

                                            <span data-bind="text: $root.showStatus(status())"></span>
                                            </span>
                                        </td>
                                        <td class="col-md-2 text-center">
                                            <div>
                                                <a href="javascript:;" data-toggle="modal" data-target="#down-product" data-id="<?php echo ($arr["id"]); ?>" class="down-product"><i class="ion-minus-circled"></i>&nbsp;下架产品</a>
                                                <!--<a href="javascript:;" data-bind="visible: status() == 2, click: $root.up"><i class="ion-minus-circled"></i>&nbsp;上架热门</a>-->

                                            </div>
                                            <div>
                                                <a href="javascript:;" data-toggle="modal" data-target="#product-editor" data-id="<?php echo ($arr["id"]); ?>" class="edit-product"><i class="ion-checkmark-circled"></i>&nbsp;编辑产品</a>
                                            </div>
                                            <div>
                                                <a href="javascript:;" data-toggle="modal" data-target="#del" data-id="<?php echo ($arr["id"]); ?>" class="del-product"><i class="ion-close-circled"></i>&nbsp;删除产品</a>
                                            </div>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                                <tbody style="display: none;" data-bind="visible: total() == 0">
                                <tr>
                                    <td colspan="6" class="text-center nofind">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--删除产品-->
                        <div class="modal fade" id="del"  role="modal" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">删除</h4>
                                    </div>
                                    <div class="modal-body">
                                        确认删除这个产品 <span></span>?
                                    </div>
                                    <div class="modal-footer">
                                        <button  type="button" class="btn" data-dismiss="modal">取消</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm" value="">确定</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--删除所有-->
                        <div class="modal fade" id="del-all"  role="modal" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">删除</h4>
                                    </div>
                                    <div class="modal-body">
                                        确认删除吗 <span data-bind="text: opItem().name"></span>?
                                    </div>
                                    <div class="modal-footer">
                                        <button  type="button" class="btn" data-dismiss="modal">取消</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="del-all-confirm" value="">确定</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--编辑商品-->
                        <div class="modal fade" id="product-editor" role="modal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">编辑物品</h4>
                                    </div>
                                    <div class="modal-body" style="height: auto; overflow-y: scroll">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-6">
                                                <form role="form" id="regist-form"   enctype="multipart/form-data">
                                                    <div class="form-group" data-bind="validationElement: name">
                                                        <label for="product-name">名称 <span class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="name" id="product-name" placeholder="请输入产品名称"   />
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="product-introduce">简介信息 <span class="text-red">*</span></label>
                                                        <textarea rows="2" class="form-control" name="introduce" id="product-introduce" placeholder="请输入简介信息" ></textarea>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="product-price">价格 <span class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="price" id="product-price" placeholder="请输入产品价格"  />
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="product-type">类型 <span class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="type" id="product-type" placeholder="请输入产品类型"  />
                                                    </div>
                                                    <input id="update-id" value="" hidden>
                                                    <div class="form-group" >
                                                        <label >产品图片<span class="text-red">*</span></label>

                                                        <input type="file" name="file[]" multiple="multiple" id="img1" >
                                                        <input type="file" name="file[]" multiple="multiple" id="img2">
                                                        <input type="file" name="file[]" multiple="multiple" id="img3">
                                                    </div>
                                                    <div class="box-footer">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-6 text-right">
                                                                <button type="submit" class="btn btn-primary" id="product-update">更新</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <!--下架物品-->
                        <div class="modal fade" id="down-product"  role="modal" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">下架商品</h4>
                                    </div>
                                    <div class="modal-body">
                                        确认下架吗 <span data-bind="text: opItem().name"></span>?
                                    </div>
                                    <div class="modal-footer">
                                        <button  type="button" class="btn" data-dismiss="modal">取消</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="down-confirm" value="">确定</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="view" role="modal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">简介</h4>
                                    </div>
                                    <div class="modal-body" style="height: 400px; overflow-y: scroll">
                                        <div class="row">
                                            <div class="col-md-offset-1 col-md-10">
                                                <div id="data-introduce">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--<a href="javascript:;" class="btn btn-default" id="select-all" >
                                        <i class="fa fa-check-square" ></i><i class="fa fa-square-o" data-bind="visible: opAll() == 0"></i>
                                        &nbsp;全选
                                    </a>-->
                                    <label>
                                        <button  class="btn btn-default" id="select-all" value="1">取消全选</button>
                                    </label>
                                    <label>
                                        <button data-toggle="modal" data-target="#del-all" class="btn btn-default" id="del-products">批量删除</button>
                                    </label>
                                </div>
                                <div class="col-md-6 text-right">
                                    <ul class="pagination no-margin">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content-wrapper -->
    <!--footer-->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

    <script>
        $(document).ready(function () {
            //获取简介内容
            $(".introduce-action").on('click',function () {
                var introduce_data = $(this).data('introduce');
                $("#data-introduce").text(introduce_data);
            });

            //批量删除
            $("#del-products").on('click',function () {
                var check_values = Array();
                var check_boxs = $("input[name='checkbox']:checked");
                if(check_boxs.length<=0)
                {
                    alert('请选择至少一个商品！');
                    return;
                }
                else
                {
                    $('#del-all-confirm').on('click',function () {
                        check_boxs.each(function () {
                            check_values.push($(this).val());
                        });
                        $.post("<?php echo U('API/ProductAPI/del_products');?>",
                                {
                                    'products_id':check_values,
                                },
                                function (data,status) {
                                }
                        );
                        window.location.reload();
                    });
                }
            });

            $(".product-checkbox").on('click',function () {
                if($('#select-all').val() == 1 )
                {
                    $('#select-all').val(0);
                    $('#select-all').text('全选');
                }
                /*else
                {
                    $('#select-all').val(1);
                    $('#select-all').text('取消全选');
                }*/
            });
            //全选
            $("#select-all").on('click',function () {

                //没有全选的话
                if($(this).val() == 0)
                {
                    $(this).val(1);
                    $(this).text("取消全选");
                    //$(":checkbox").attr("checked", "checked");
                    $("input[type='checkbox']").each(function() {
                        this.checked = true;
                    });
                }
                //全选的话
                else
                {
                    $(this).val(0);
                    $(this).text("全选");
                    $("input[type='checkbox']").each(function() {
                        this.checked = false;
                    });
                    /*$(":checkbox").attr("checked", "false");*/
                }
            });
            //删除单个产品
            $(".del-product").on('click',function () {
                var value = Array();
                value.push($(this).data('id'));
                $("#confirm").on('click',function () {
                    $.post("<?php echo U('API/ProductAPI/del_products');?>",
                            {
                                'products_id':value,
                            },
                            function (data,status) {
                            }
                    );
                    window.location.reload();
                });
            });

            //编辑产品
            $(".edit-product").on('click',function () {
                var product_id = $(this).parent().parent().find(".down-product").data('id');
                $('#update-id').val(product_id);
                $.post("<?php echo U('API/ProductAPI/product_msg');?>",
                        {
                            'product_id':product_id,
                        },
                        function (data,status) {
                            $('#product-name').val(data.name);
                            $('#product-introduce').text(data.introduce);
                            $('#product-price').val(data.price);
                            $('#product-type').val(data.type);
                        }
                );
            });

            //更新产品
            $("#product-update").on('click',function () {
                var id = $('#update-id').val();
                var name = $('#product-name').val();
                var introduce = $('#product-introduce').val();
                var price = $('#product-price').val();
                var type = $('#product-type').val();
                $.post("<?php echo U('API/ProductAPI/update_product');?>",
                        {
                            'id':id,
                            'name':name,
                            'introduce':introduce,
                            'type':type,
                            'price':price,
                        },
                        function (data,status) {
                            if(data.response == 1)
                            {
                                window.location.reload();
                            }
                        }
                );
            });

            //下架产品
            $(".down-product").on('click',function () {
                var id = $(this).data('id');
                $("#down-confirm").on('click',function () {
                    $.post("<?php echo U('API/ProductAPI/down_product');?>",
                            {
                                'id':id,
                                'status':0,
                            },
                            function (data,status) {
                                if(data.response == 1)
                                {
                                    window.location.reload();
                                }
                            }
                    );
                });
            });
        });
    </script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo C('ADMINLTE_PATH');?>/bootstrap/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://www.bootcdn.cn/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo C('ADMINLTE_PATH');?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo C('ADMINLTE_PATH');?>/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo C('ADMINLTE_PATH');?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo C('ADMINLTE_PATH');?>/dist/js/demo.js"></script>
<!--BootStrap Notify-->
<!--<script src="<?php echo C('PUBLIC_PATH');?>/notify-js/bootstrap-notify.js"></script>
<script src="<?php echo C('PUBLIC_PATH');?>/notify-js/bootstrap-notify.min.js"></script>-->
<!--<script src="<?php echo C('PUBLIC_PATH');?>/notify-js/Gruntfile.js"></script>
<script src="<?php echo C('PUBLIC_PATH');?>/notify-js/package.js"></script>
<script src="<?php echo C('PUBLIC_PATH');?>/notify-js/test_meteor.js"></script>-->
</body>

</html>