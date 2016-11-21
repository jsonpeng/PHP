<?php
/*
单入口文件
*/
//1、加载初始化文件
include('protected/lib/init.php');
//2、获取路由参数，通过这些参数调度不同模块，路由规则必须一开始就确立
$c = !empty($_GET['c'])?$_GET['c']:'site';//代表controller，值为要访问controller的文件夹
$a = !empty($_GET['a'])?$_GET['a']:'index';//代表action，值为要访问action的文件
$admin = !empty($_GET['admin'])?1:0;//后台标识，1或其他值为后台，没有值或0表示前台

//3、定义路径常量
define('CONTROLLER',$c);
define('ACTION',$a);
/*
if(empty($_SESSION)){
	//没有session，表示没有登录，跳转回登录页
	header('location:'.BASE_URL.'index.php?m=admin&c=login&admin=1');
	exit;
}
单入口只能防止系统初始化与公共必须的逻辑，验证并非每个程序都需要，因此验证登录就不能放在单入口执行
*/

//4、判断是否进入后台
//方式1：
if(!empty($admin)){
	//访问后台
	include('protected/controller/admin/'.$c.'/'.$a.'.php');
}
else{
	include('protected/controller/'.$c.'/'.$a.'.php');
}
//方式2：
//$path = 'protected/controller/'.!empty($admin)?'admin/':''.$c.'/'.$a.'.php';
//include($path);





