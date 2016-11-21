<?php

/**
 * 数据库函数库
 */

/**
 * 列表查询
 * @param string $table：数据表
 * @param int $curpage：当前页
 * @param int $limit：每页条数
 * @return array 列表数组
 */
function getList($table,$curpage,$limit){
	//1、组装查询sql语句
    $result = array();
    $offset = ($curpage - 1)*$limit;
    $sql = 'select * from '.$table.' order by id desc limit '.$offset.','.$limit;
    $query = mysql_query($sql);
    while($row = mysql_fetch_assoc($query)){
		$result[] = $row;
    }
	//2、返回列表数组
    return $result;
}

/**
 * 单条查询
 * @param string $table：数据表
 * @param array $condition：条件数组
 */
function getOne($table,$condition){
	//1、组装查询sql语句
	//1.1、组装条件语句
	$con_str = '';
	foreach($condition as $k=>$v){
		$con_str .= $k.' = "'.$v.'" and ';
	}
	$con_str = substr($con_str,0,-4);
	//1.2、组装语句
    $sql = 'select * from '.$table.' where '.$con_str;
    $query = mysql_query($sql);
	//2、返回列表数组
    return mysql_fetch_assoc($query);
}

/**
 * 获取一条数据 
 * @param string $table：数据表
 * @param int $id：主键id
 * @return array 单行结果数组
 */
function getById($table,$id){
    //1、组装查询sql语句
	$sql = 'select * from '.$table.' where id = "'.$id.'"';
    $query = mysql_query($sql);
	//2、返回单行结果数组
    return mysql_fetch_assoc($query);
}
/**
 * 添加数据
 * @param string $table
 * @param array $param  数据字段数组 array('字段'=>'值')
 * @return bool 执行状态
 */
function insert($table,$data){
	//1、组装插入sql语句
	//1.1、组装插入语句的字段及其对应值
    $key_str = '';
    $value_str = '';
    foreach($data as $key=>$value){
        $key_str .= $key.',';// $key_str = $key_str.$key.','
        $value_str .= '"'.$value.'",';
    }
    $key_str = substr($key_str,0,-1);//如果是负数，表示从末尾算起，截取到倒数第1位
    $value_str = substr($value_str,0,-1);
	//1.2、拼接插入sql语句
    $sql = 'insert into '.$table.'('.$key_str.') values('.$value_str.')';
    //2、执行并返回执行结果状态
    return mysql_query($sql);
}
/**
 * 删除
 * @param string $table：数据表
 * @param int $id：主键id
 * @return bool 执行状态
 */
function delete($table,$id){
	//1、组装删除sql语句
    $sql = 'delete from '.$table.' where id = "'.$id.'"';
	//2、执行并返回执行结果
    return mysql_query($sql);
}
/**
 * 修改
 * @param string $table：数据表
 * @param array $data：修改参数
 * @return bool 执行状态
 */
function update($table,$data){
	//1、组装修改sql语句
	//1.1、组装修改语句的字段及其对应值
    $update_str = '';
    foreach($data as $key=>$value){
        $update_str .= $key .'="'.$value.'",';
    }
    $update_str = substr($update_str,0,-1);
	//1.2、拼接修改sql语句
    $sql = 'update '.$table.' set '.$update_str.' where id="'.$data['id'].'"';
	//2、执行并返回执行结果状态
    return mysql_query($sql);
}