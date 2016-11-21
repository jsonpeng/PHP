<?php
//退出登录
session_destroy();//销毁session

header('location:'.BASE_URL.'index.php?c=admin&a=login&admin=1');