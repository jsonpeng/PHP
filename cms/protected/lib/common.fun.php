<?php
/**
 *视图加载
 * @param string $view 视图路径（不包含.php）
 * @param array $data 参数数组，视图传参
 * @param string $layout 公共视图所在文件夹
 */
function view($view,$data = array(),$layout = 'admin/'){
	//1、转换数组为变量
	//方式1
	/*
	if(!empty($data)){
		foreach($data as $key=>$value){
			$$key = $value;//$key的值作为变量名，动态声明变量
		}
	}
	*/
	//方式2
	extract($data);
	//2、加载xml
	$menu_xml = simplexml_load_file('protected/data/menu.xml');
	//3、加载视图
	include(TEMPLATE_PATH.$layout.'header.php');
	include(TEMPLATE_PATH.$view.'.php');//加载一个文件，把加载文件的代码，加入到本文件，include的代码可以看作是程序的一部分
	include(TEMPLATE_PATH.$layout.'footer.php');
}
/**
 *验证登录
 */
function checkLogin(){
	//1、判断是否已登录
	if(empty($_SESSION)){
		//2、没有session，表示没有登录，跳转回登录页
		header('location:'.BASE_URL.'index.php?c=admin&a=login&admin=1');
	}
}

/**
 *分页函数（这部分为完整代码，修改了2.4的部分）
 * @param string $table：数据表
 * @param string $url：分页链接
 * @param int $curpage：当前页
 * @param int $perpage：每页条数
 * @param int $pagenum：显示分页数
 * @return string 页码html
 */
function getPage($table,$url,$curpage = 1,$perpage = 2,$pagenum = 5){
	/*
	动态生成分页代码
	1、页码三要素：每页的条数 $perpage，页码的总数（未知），当前的页码 $curpage ->如何得到页码的总数
	2、页码的总数 = 数据的总数/每页的条数的向上取整
	3、通过页码总数，作出循环，得到动态的页码
	4、上一页与下一页：当前页-(+)1

	5、中间5（7）页->固定显示5（7）页，当前页在中间->固定页码数$pagenum
	6、确定前后的页码数->固定页码/2的向下取整->$floorpage
	7、以当前页为基准，减去$floorpage就是开始的页码，加上$floorpage就是结束的页码
	生成分页的html，然后输出到视图
	*/
	
	//2、修改为中间5页代码
	//2.1、获取数据表总行数
	$sql = 'select count(*) as total from '.$table;
	$query = mysql_query($sql);
	$row = mysql_fetch_assoc($query);

	$total = $row['total'];
	//2.2、得到总页数
	$totalpage = ceil($total/$perpage);//页码总数
	//2.3、得到上一页及下一页
	$perpage = $curpage - 1;//上一页
	$nextpage = $curpage + 1;//下一页

	//2.4、中间页前后页码数、起始页及结束页
	$floorpage = floor($pagenum/2);
	$startpage = $curpage - $floorpage;
	$endpage = $curpage + $floorpage;
	//2.5、组装页码html
	//2.5.1、当总页数少于或等于显示页数
	if($totalpage <= $pagenum){
		//本身页码不够5页时，用回最简单的分页
		$startpage = 1;
		$endpage = $totalpage;
		
	}
	else{
		//2.5.2起始页少于首页
		if($startpage < 1){
			//当开始页小于1时，由于开始页数字变小了，因此不够5页，所以endPage直接写成5
			$endpage = $pagenum;
			$startpage = 1;
		}
		//2.5.3结束页大于总页数
		if($endpage > $totalpage){
			$startpage = $totalpage - $pagenum + 1;//总页数-固定页数+1
			$endpage = $totalpage;
		}
	}
	$page = '';
	//2.5.4当前页是第一页，首页与上一页不需要
	if($curpage > 1){
		$page.='<a href="'.BASE_URL.$url.'&p=1" title="First Page">首页</a>';
		$page.='<a href="'.BASE_URL.$url.'&p='.$perpage.'" title="Previous Page">上一页</a>';
	}
	//2.5.5组装页码
	//页码:页码从1开始
	for($i=$startpage;$i<=$endpage;$i++){
		//2.5.6、判断当前页
		if($i == $curpage){
			//当前页
			$page.='<a href="'.BASE_URL.$url.'&p='.$i.'" class="number current" title="'.$i.'">'.$i.'</a>';
		}
		else{
			$page.='<a href="'.BASE_URL.$url.'&p='.$i.'" class="number" title="'.$i.'">'.$i.'</a>';
		}
	}
	//2.5.7当前页是尾页，尾页与下一页不需要
	if($curpage < $totalpage){
		$page.='<a href="'.BASE_URL.$url.'&p='.$nextpage.'" title="Next Page">下一页</a>';
		$page.='<a href="'.BASE_URL.$url.'&p='.$totalpage.'" title="Last Page">尾页</a>';//总页数就是尾页的页码
	}
	//2.6、返回页码html
	return $page;
	
}


