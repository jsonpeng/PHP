<?php
/*
新闻修改
*/
//1、验证登录
checkLogin();
//2、通过url获取新闻id
$id = !empty($_GET['id'])?$_GET['id']:0;
//3、判断提交数据
if(!empty($_POST)){
	//3.1、调用修改方法
	if(!update('news',$_POST)){
		die('修改失败');
	}
	//3.2、跳转回新闻列表
	header('location:'.BASE_URL.'index.php?c=news&a=index&admin=1');
}
//4、调用getById方法
$result = getById('news',$id);
//5、加载新闻修改视图
view('admin/news/update',array(
	'result'=>$result,
));
