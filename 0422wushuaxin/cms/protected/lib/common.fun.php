<?php
/**
 * 验证登录
 */
function checkLogin(){
	if(empty($_SESSION['username'])){
		//验证session是否为空，不能只是session，因为session可能保存很多东西
		//如果不存在，则跳转回登录页
		header('location:'.BASE_URL.'index.php?c=admin&a=login&admin=1');
	}
}

/**
 * 视图加载
 * @param $view string 视图路径
 * @param $data array
 * array(变量名=>值)	例如传过来的数组是 array('result'=>array(),'page'=>'1')，在视图中，调用相关变量就是$result与$page
 */
function view($view,$data = array(),$admin = ''){
	//函数不能够直接使用全局（外部）定义的变量
	/*
	foreach($data as $key=>$value){
		//$key就是变量名，而$value就是相关的值
		$$key = $value;//假设$key = 'result'，那么$$key相当于$result，这一句就相当于动态声明一个变量	$result = array()
	}
	*/
	extract($data);//作用及原理等于上面的那段代码
	//加载菜单栏xml
	if($admin == 'admin'){
		$menu_xml = simplexml_load_file('protected/data/menu.xml');
	}
	//print_r($menu_xml);
	//echo $menu_xml->controller[0]->name->attributes()->en;//输出标签属性	attributes()->属性名
	//exit;
	include(VIEW_PATH.$admin.'/header.php');
	include(VIEW_PATH.$admin.'/'.$view.'.php');
	include(VIEW_PATH.$admin.'/footer.php');
}