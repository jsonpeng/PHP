<?php
/*
新闻列表
*/
//1、验证登录
checkLogin();
//2、定义每页分页数
$perpage = 2;
//3、通过参数p获取当前页
$curpage = !empty($_GET['p'])?$_GET['p']:1;
//4、获取管理员列表
$result = getList('news',$curpage,$perpage);
//5、获取分页
$page = getPage('news','index.php?c=news&a=index&admin=1',$curpage,$perpage);//获取分页代码
//6、设置传输参数
$data = array(
	'result'=>$result,
	'page'=>$page,
);
//7、判断ajax访问
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
	//7.1、输出json
	echo json_encode($data);
}
else{
	//7.2、加载视图
	view('admin/news/index',$data);//函数的参数：告诉函数，某些参数是什么值，让函数根据不同的参数作出不同的相应
}

