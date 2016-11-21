<?php
//print_r($_SERVER);
//exit;
include('protected/lib/page.fun.php');//不要在代码中间include，建议include一般放在代码的头部
checkLogin();
$per_page = 3;
//三元运算符 条件?为真的值:为假的值
$cur_page = !empty($_GET['p'])?$_GET['p']:1;
/*
新闻列表
1、前端的列表（视图）
2、数据库——查询数据表，得到数组
3、合并前端页
*/
$offset = ($cur_page - 1)*$per_page;//偏移量 = (当前页 - 1)*每页条数
/*
$sql = "select * from news order by id desc limit $offset,$per_page";
$query = mysql_query($sql);
$result = array();
//列表肯定是多行的
while($row = mysql_fetch_assoc($query)){
	$result[] = $row;
}
*/

$result = getList('news',$offset,$per_page);
$page = getPage('news','index.php?c=news&a=index&admin=1',$per_page,$cur_page);

//判断ajax访问
//$_SERVER:储存服务器与当前访问信息的数组
//HTTP_X_REQUESTED_WITH：ajax访问特有的
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
	//ajax访问
	echo json_encode(array('result'=>$result,'page'=>$page));
}
else{
	view('news/index',array(
		'result'=>$result,
		'page'=>$page,
	),'admin');
	//view($page,$result) $view($con,$str)
}


//整个代码都是php（不包括include的）的，可以省略结束标签，省略后效率更高

