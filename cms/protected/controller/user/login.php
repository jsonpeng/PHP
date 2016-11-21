<?php
//1、验证数据提交
if(!empty($_POST)){
	//1.1、根据条件查找，验证登录
	$_POST['password'] = md5($_POST['password']);
	$result = getOne('user',$_POST);
	//1.2、判断登录成功
	if($result){
		//保存session
		$_SESSION['user'] = $result;
		//判断ajax访问
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
			//输出json（登录成功）
			echo json_encode(array('status'=>1));
		}
		else{
			//跳转至首页
			header('location:'.BASE_URL);
		}
	}
	else{
		//判断ajax访问
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
			//输出json（登录失败）
			echo json_encode(array('status'=>0));
		}
		else{
			//登录失败处理
			die('登录失败');
		}
	}
	//1.3、退出处理，防止执行下面代码
	exit;
}
//2、加载登录视图
view('user/login',array(),'');