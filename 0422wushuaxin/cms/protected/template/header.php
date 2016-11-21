<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="家具,顺德家具,木材,沙发" />
<meta name="description" content="顺德家具厂" />
<title>佛山市顺德区宝源家具实业公司</title>
<script language="javascript" src="js/jquery-1.8.3.min.js"></script>
<script language="javascript" src="js/login.js"></script>
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
				<!--
				<a onmousedown="S.Common.ns_click("homepageSet","",{stattype:"set"});S.Evt.fire("page","homepageSet",{stattype:"set"});" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://120717.1207.dodiphp.cn/index.html');_s_dhp()" href="javascript:;">设为主页</a>|<a id="setf" onClick="fa(this)" href="javascript:void(0)" onmousedown="return ns_c({'fm':'behs','tab':'favorites','pos':0})">加入收藏夹</a>
				-->
				<?php if(!empty($_SESSION['member'])):?>
					<span>欢迎您，<?php echo $_SESSION['member'];?></span>|
					<a href="index.php?c=user&a=logout">退出</a>
				<?php else:?>
					<form action="index.php?c=user&a=login" method="post" id="loginForm">
					用户名：<input name="username" type="text" id="username" />
					密码：<input name="password" type="password" id="password" />
					记住我：<input name="remember" type="checkbox" value="1" id="remember" />
					<input type="submit" value="登录" />
					</form>
				<?php endif;?>
				</div>
               <ul class="nav">
                    <li class="navLeft"></li>
                    <li class="navCenter">
                    	<a href="index.html">公司简介</a>
                        <a href="product.html">产品展示</a>
                        <a href="news.html">新闻中心</a>
                        <a href="message.html">给我留言</a>
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
/*一.前端触发
1.触发事件
2.return false
3.copy 手册中的 ajax代码
4.调配参数
5,,验证前面的步骤的正确性
//form表单的地址就是action form表单提交的触发就是form本身的提交事件

*/
	
	
	</script>
