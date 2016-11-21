<?php
/*
管理员添加
*/
//1、验证登录
checkLogin();
//2、验证是否有数据提交
if(!empty($_POST)){
	//2.1、使用insert方法
	$_POST['logintime'] = date('Y-m-d H:i:s',time());
	if(!insert('admin',$_POST)){
		die('添加失败');
	}
	//2.3、跳转至管理员列表
	header('location:'.BASE_URL.'index.php?c=admin&a=index&admin=1');
}
//3、加载视图
view('admin/admin/add',array());
