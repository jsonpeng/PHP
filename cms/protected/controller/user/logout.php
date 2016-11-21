<?php
//1、退出操作
unset($_SESSION['user']);
//2、跳转至首页
header('location:'.BASE_URL);