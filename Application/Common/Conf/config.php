<?php
return array(
    //'配置项'=>'配置值'

    //PDO连接数据库
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'lw135246', // 密码
    'DB_PREFIX' => 'tb_', // 数据库表前缀
    'DB_DSN'    => 'mysql:host=120.24.186.88:3306;dbname=personaltailor;charset=UTF8',

    //常量配置
    'PUBLIC_PATH' => __ROOT__.'/'.'Template/Public',
    'TEMPLATE_PATH'=>__ROOT__.'/'.'Template',
    /*公共库路径*/
    'JS_PATH'=>__ROOT__.'/'.'Template/Public/js',
    'IMG_PATH'=> __ROOT__.'/'.'Template/Public/img',
    'LIB_PATH'=> __ROOT__.'/'.'Template/Public/lib',
    'ADMINLTE_PATH' => __ROOT__.'/'.'Template/Public/lib/adminLTE',
    /*基础模板路径*/
    'BASE_TPL_PATH' => __ROOT__.'/'.'Template/Public/tpl',
    'ROOT_PATH' =>__ROOT__.'/',
    'ROOT_ABS_PATH'=>'./Uploads/activity_pic',
    'KINDEDITOR_ABS_CASH_PATH'=>'./Template/Public/lib/kindeditor/attached/image',

);