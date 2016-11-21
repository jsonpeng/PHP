<?php
/*
管理员登陆页
1、需要一个表单，把数据提交到后台
form表单提交（通过submit按钮）
http://localhost/cms/login.php?username=sky&password=123
http://localhost/cms/login.php->访问页面的地址（url）
?username=sky&password=123->写在url的参数 username=sky username->form表单中的组件名字 sky->该组件内的值
?：url参数开始的标志
&：多个参数之间用&分隔
在提交的表单中，组件不能出现重名的情况
$_GET：php的超级数组，获取url上的参数
$_POST：php的超级数组，获取post的参数，用法与$_GET一样

传输参数方式 method="post|get"
get方式：通过url传递参数，比较容易，安全性较差，一般只适用传输安全性要求不高的参数
post方式：把参数隐藏在页面的头信息中，在url无法查看，所以保密性较强
*/
//empty:判断一个值是否为空（未声明，null，0，false，array()），若值为空，返回true，否则返回false
/*
if(!empty($_GET)){
	//如果$_GET不为空，打印值，否则输出页面
	//print_r($_GET);
	//echo $_GET['username'];
	$username = $_GET['username'];//获取参数值
	$password = $_GET['password'];
	exit;//程序终止
	//die;//程序退出
}

2、获取参数，向数据库查询用户的记录，以作验证
3、登录成功后页面跳转
*/

//1、判断POST为空
if(!empty($_POST)){
	//3、通过POST获取用户名及密码
	$username = $_POST['username'];//获取参数值
	$password = $_POST['password'];

	//4、登录查询语句及执行
	$sql = 'select * from admin where username="'.$username.'" and password="'.$password.'"';
	$query = mysql_query($sql);//如果查询执行不正确则返回 FALSE 不是指没有结果，因为没有结果也是正确的结果，不正确是指语句不正确
	$result = mysql_fetch_assoc($query);
	//5、判断登录成功与失败
	if(!empty($result)){
		//6、登录成功则跳转至首页
		//2种方式都需要讲述
		session_start();
		$_SESSION['username'] = $result['username'];//用session保存用户名
		//方式1
		header('location:http://localhost/cms/index.php?c=admin&a=index&admin=1');//更改网页头部信息，地址跳转，绝对地址：把路径写全
		//方式2
		//echo '<script>alert("登录成功");window.location.href="http://localhost/1216/1216_cms/index.php";</script>';//前台为了效果多用js，后台为了安全和效率，使用header
	}
	else{
		//7、登录失败
		echo '失败';
	}
	
	//8、程序终止
	exit;
}

//2、加载登录视图
include(TEMPLATE_PATH.'admin/admin/login.php');