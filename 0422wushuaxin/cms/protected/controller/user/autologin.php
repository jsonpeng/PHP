<?php

//验证登录cookie
if(!empty($_COOKIE['member'])){
	$_SESSION['member'] = $_COOKIE['member'];
	echo json_encode($_SESSION);
}
else{
	echo 0;
}