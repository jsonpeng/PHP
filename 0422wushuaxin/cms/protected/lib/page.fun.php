<?php

/**
 * 得到分页
 * 封装函数主要考虑的是如何传入参数
 * 1、代码正常执行——传入必须的参数，验证标准：函数正常执行
 * 2、考虑函数复用——可以被重复使用的东西（汽水机例子），可以被多人利用，能够满足多人的需求，而且函数的覆盖面越广，复用的机会就越多
 */
function getPage($table,$url,$per_page = 3,$cur_page = 1,$page_num = 5){
	$floor_page = floor($page_num/2);

	//页码总数:sql的计算得到
	$sql = "select count(*) as total from $table";
	$query = mysql_query($sql);
	$row = mysql_fetch_assoc($query);
	$total = $row['total'];//数据总条数
	$total_page = ceil($total/$per_page);

	
	//起始页与结束页
	$start_page = $cur_page - $floor_page;
	$end_page = $cur_page + $floor_page;
	if($start_page < 1){
		$start_page = 1;//起始页不能少于1
		$end_page = $page_num;//尾页等于固定页码数
	}
	if($end_page > $total_page){
		$end_page = $total_page;
		$start_page = $total_page - $page_num + 1;
	}
	if($total_page < $page_num){
		//页码不够5页时
		$start_page = 1;
		$end_page = $total_page;
	}

	//得到页码
	$page = '';
	//首页
	$page .= '<a href="'.$url.'&p=1" class="number" title="1">首页</a>';
	//上一页
	if($cur_page != 1){
		$prev_page = $cur_page - 1;
		$page .= '<a href="'.$url.'&p='.$prev_page.'" class="number" title="'.$prev_page.'">上一页</a>';
	}
	//上5页
	$prev_page_5 = $cur_page - $page_num;
	if($prev_page_5 >= 1){
		$page .= '<a href="'.$url.'&p='.$prev_page_5.'" class="number" title="'.$prev_page_5.'">...</a>';
	}
	for($i = $start_page;$i<=$end_page;$i++){
		//判断当前页
		if($i == $cur_page){
			$page .= '<a href="'.$url.'&p='.$i.'" class="number current" title="'.$i.'">'.$i.'</a>';
		}
		else{
			$page .= '<a href="'.$url.'&p='.$i.'" class="number" title="'.$i.'">'.$i.'</a>';
		}
	}
	//下5页
	$next_page_5 = $cur_page + $page_num;
	if($next_page_5 <= $total_page){
		$page .= '<a href="'.$url.'&p='.$next_page_5.'" class="number" title="'.$next_page_5.'">...</a>';
	}
	//下一页
	if($cur_page != $total_page){
		$next_page = $cur_page + 1;
		$page .= '<a href="'.$url.'&p='.$next_page.'" class="number" title="'.$next_page.'">下一页</a>';
	}
	//尾页
	$page .= '<a href="'.$url.'&p='.$total_page.'" class="number" title="'.$total_page.'">尾页</a>';
	return $page;
}