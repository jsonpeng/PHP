<?php
//初始化代码：把系统开始时必须要运作的代码写进来，这样子每个页面都先加载此代码，就可以把系统的开始流程统一



//初始化session
session_start();

//初始化
//常量
//$base_url = 'http://localhost/0422wushuaxin/cms/';
//define('常量名（大写）','值')
define('BASE_URL','http://localhost/0422wushuaxin/cms/');



//加载数据库函数
include('protected/lib/db.fun.php');

//加载常用函数
include('protected/lib/common.fun.php');

//数据库连接
connect('localhost','root','','0316_sql');











