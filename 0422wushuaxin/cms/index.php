<?php
define('CONTROLLER_PATH','protected/controller/');
define('VIEW_PATH','protected/template/');
define('MODEL_PATH','protected/lib/');
/*
多个如何访问
c:controller
a:action
admin:表示后台，当值为1时访问后台
*/
$c = !empty($_GET['c'])?$_GET['c']:'site';
$a = !empty($_GET['a'])?$_GET['a']:'index';
$admin = !empty($_GET['admin'])?$_GET['admin']:0;
define('CONTROLLER',$c);
define('ACTION',$a);
//localhost/1306/cms/index.php?c=news&a=a
include(MODEL_PATH.'init.php');//加载初始化文件
if($admin){
	include(CONTROLLER_PATH.'admin/'.$c.'/'.$a.'.php');
}
else{
	include(CONTROLLER_PATH.$c.'/'.$a.'.php');
}