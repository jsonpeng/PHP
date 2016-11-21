<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="家具,顺德家具,木材,沙发" />
<meta name="description" content="顺德家具厂" />
<title>佛山市顺德区宝源家具实业公司</title>
<script language="javascript" src="images/qq.js"></script></script>
<script language="javascript" src="js/asd.js"></script>
<script language="javascript" src="js/jquery-1.8.3.min.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
	<div class="header">
    	<div class="headTop">
        	<div class="logo">
            	<a href="index.html"><img src="images/logo.gif" alt="佛山市顺德区宝源家具实业公司" title="佛山市顺德区宝源家具实业公司" /></a>
            </div>
            <div class="headRight">
            	<div class="tool" id="loginDiv">
				<?php if(!empty($_SESSION['user'])):?>
				<span>您好，<?php echo $_SESSION['user']['username'];?> | </span>
				<a href="index.php?c=user&a=logout">退出</a>
				<?php else:?>
				<form action="index.php?c=user&a=login" method="post" id="loginForm">
                    用户名：<input type="text" class="myinput" name="username" id="username" value="" maxlength="12" />
                    密&nbsp;&nbsp;&nbsp;码：<input type="password" class="myinput" name="password" id="password" value="" />
                    <!--验证码：<input type="text" class="myinput" size="8" />-->
                   <input type="submit" value="登录" />
                </form>
				<?php endif;?>
				</div>
               <ul class="nav">
                    <li class="navLeft"></li>
                    <li class="navCenter">
                    	<a href="index.php">首页</a>
                        <a href="product.html">产品展示</a>
                        <a href="index.php?c=news&a=index">新闻中心</a>
                        <a href="links.html">友情链接</a>
                        <a href="address.html">联系我们</a>
                        <a href="login.html" class="last">会员登录</a>
                    </li>
                    <li class="navRight"></li>
                </ul><!-- 避免多DIV症 -->
            </div>
        </div>
        <div class="banner"><img src="images/banna.jpg" /></div>
    </div>
<script>
//1、绑定表单提交
$("#loginForm").submit(function(){
	//this：指向当前对象->谁点击谁促发谁是当前对象
	//attr：获取对象标签任何的属性
	//2、获取url及参数
	var URL = $(this).attr('action');
	var username = $('#username').attr('value');
	var password = $('#password').attr('value');
	//3、ajax
	$.ajax({
		//3.1、配置参数
		type: "POST",//参数发送方式->根据原本的提交时get还是post
		url: URL,//后台地址，通常后台是不用写死的，因为本身的应用就已经会包含原本的地址，基本上有方法可以提取
		//data: "p=3&m=news&c=index&admin=1",//传输的数据，方式1
		data:{
			//键:值
			'username':username,
			'password':password,
		},//方式2，json格式，推荐
		dataType:"json",//规定后台返回的数据格式必须是json，否则出错，而接收到的数据，直接就是可用的json。该属性一定要放到ajax确认接收参数无误后才加上
		//3.2、回调函数，组装列表
		success: function(json){
			//3.3、判断登录成功
			if(json.status == 1){
				//登录成功，动态更改登录状态
				var l ='';
				l+='<span>您好，'+username+' | </span>';
				l+='<a href="index.php?c=user&a=logout">退出</a>';
				$('#loginDiv').html(l);
			}
			else{
				//登录失败
				alert('登录失败');
			}
		}
	});
	//4、防止跳转
	return false;//阻止页码跳转
});
</script>	