<?php
/*
新闻添加
*/
//1、验证登录
checkLogin();
//2、判断数据提交
if(!empty($_POST)){
	//2.1、调用insert方法
	$_POST['mtime'] = time();
	$query = mysql_query($sql);
	if(!insert('news',$_POST)){
		die('添加失败');
	}
	//2.2、跳转回新闻列表
	header('location:'.BASE_URL.'index.php?c=news&a=index&admin=1');
}
//3、加载新闻添加视图
view('admin/news/add',array());
