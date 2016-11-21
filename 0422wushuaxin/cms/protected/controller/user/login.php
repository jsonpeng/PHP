<?php

if(!empty($_POST))
{
	//post本身包含用户名和密码
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = getOne('user','username="'.$username.'" and password="'.$password.'"');
	if(!empty($result)){
		//记住我
		if(!empty($_POST['remember']))
		{
			setcookie('member',$result['username'],time()+60*60*24);
		}
		$_SESSION['member'] = $result['username'];
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']))
		{
			echo json_encode($result);
		}
		else
		{
			header('location:'.BASE_URL.'index.php?c=site&a=index');
		}
	}
	else
	{
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
			echo 0;
		}
		else{
			echo '密码不正确';
		}
	}
}
else
{
	echo '输入不正确';
}