<?php
/*
初始化文件：系统运行时，所有模块都需要启用或加载的东西，写在初始化文件
例如：session_start()->在每个程序中，都需要用到session，而session都需要写到session_start()，所以，可以认为，session_start()是每个程序加载时都需要用到的，类似与这种代码，就应该写在初始化文件当中
*/
//1、session启动
session_start();
/*
常量：只要在定义值的时候定义常量的值(只能定义一次)，任何时候不可修改，为了区分常量与变量，常量的名字规范统一使用大写，而且不加$
->define('常量名字','值')
变量：$baseUrl，变量是可变，如果程序是一个团队开发，难以保证相同名字的变量会被重复利用，而此时如果大家用途不同，就会出现程序的混乱，甚至出现bug
*/
//2、定义常量，定义系统常用，且基本不变的值
define('BASE_URL','http://localhost/cms/');//系统基本路径

define('TEMPLATE_PATH','protected/template/');//视图基本路径

//3、数据库连接
$link = mysql_connect('localhost','root','');
if(!$link){
	echo '连接失败';
	die(mysql_error());//中止程序
}
$db = mysql_select_db('cms');
if(!$db){
	echo '没有数据库';
	die(mysql_error());//中止程序
}
mysql_query('set names utf8');//设置utf8编码

//4、加载common.fun.php
include_once('protected/lib/common.fun.php');
//5、加载db.fun.php
include_once('protected/lib/db.fun.php');

