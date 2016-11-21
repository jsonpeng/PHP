<?php
//退出登录
//session_destroy();//销毁session
unset($_SESSION['member']);
setcookie('member','',0);//清空cookie
header('location:'.BASE_URL.'index.php?c=site&a=index');