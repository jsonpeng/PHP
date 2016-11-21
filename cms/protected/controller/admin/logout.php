<?php
//1、退出登录
session_destroy();//销毁session
//2、跳转回登录页
header('location:'.BASE_URL.'index.php?c=admin&a=login&admin=1');