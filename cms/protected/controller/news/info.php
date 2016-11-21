<?php
//1、根据id获取新闻
$id = !empty($_GET['id'])?$_GET['id']:1;
$result = getById('news',$id);

//2、加载页面
view('news/info',array(
	'result'=>$result,
	),'');