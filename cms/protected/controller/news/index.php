<?php
//1、获取10条新闻
$curpage = !empty($_GET['p'])?$_GET['p']:1;
$result = getList('news',$curpage,10);

//2、获取分页
$page = getPage('news','index.php?c=news&a=index',1,10);
//3、加载页面
view('news/index',array(
	'result'=>$result,
	'page'=>$page,
	),'');