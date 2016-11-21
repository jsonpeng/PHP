<?php
//1、获取输入
$id = !empty($_GET['id'])?$_GET['id']:0;
if(!empty($_POST)){
	//2、修改
	update('news',$_POST);
	//3、跳转
	header('location:'.BASE_URL.'index.php?c=news&a=index&admin=1');
}
//4、获取该行详细信息
$result = getOne('news','id = '.$id);
//5、加载视图
view('news/update',array(
	'result'=>$result,
),'admin');
