<?php
/*
添加
*/
if(!empty($_POST)){
	//1、接受参数
	$_POST['mtime'] = time();
	//2、执行添加
	if(!insert('news',$_POST)){
		die('插入失败');
	}
	//3、跳转会首页
	header('location:'.BASE_URL.'index.php?c=news&a=index&admin=1');
}
//没有提交的，加载视图
view('news/add',array(),'admin');
