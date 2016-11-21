<?php
/*
新闻删除
*/
//1、验证登录
checkLogin();
//2、获取新闻id
$id = !empty($_GET['id'])?$_GET['id']:0;
//3、删除新闻sql语句
if(!delete('news',$id)){
	die('删除失败');
}
//4、跳转回新闻列表
header('location:'.BASE_URL.'index.php?c=news&a=index&admin=1');