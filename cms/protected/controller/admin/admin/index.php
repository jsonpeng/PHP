<?php
/*
管理员列表
*/
//1、验证登录
checkLogin();
//2、定义每页分页数
$perpage = 2;
//3、通过参数p获取当前页
$curpage = !empty($_GET['p'])?$_GET['p']:1;
//4、获取管理员列表
$result = getList('admin',$curpage,$perpage);
//5、获取分页
$page = getPage('admin','index.php?c=admin&a=index&admin=1',$curpage,$perpage);//获取分页代码
//6、加载视图并传输参数
$data = array(
	'result'=>$result,
	'page'=>$page,
);
view('admin/admin/index',$data);
