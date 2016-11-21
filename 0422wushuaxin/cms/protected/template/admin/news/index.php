
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Forms</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>ID</th>
								   <th>标题</th>
								   <th>修改时间</th>
								   <th>操作</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination" id="pageDiv">
											<?php echo $page;?>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody id="contentDiv">

								<?php foreach($result as $key=>$value):?>
								<tr>
									<td><input type="checkbox" /></td>
									<td><?php echo $value['id'];?></td>
									<td><a href="#" title="title"><?php echo $value['title'];?></a></td>
									<td><?php echo $value['mtime'];?></td>
									<td>
										<!-- Icons -->
										 <a href="<?php echo BASE_URL;?>index.php?c=news&a=update&admin=1&id=<?php echo $value['id'];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="<?php echo BASE_URL;?>index.php?c=news&a=delete&admin=1&id=<?php echo $value['id'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
									</td>
								</tr>
								<?php endforeach; ?>			
							</tbody>				
						</table>
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->		
			</div> <!-- End .content-box -->
<script>
/*
一、前端触发
1、确定触发事件——当点击分页链接时触发
2、凡是触发ajax，组件的事件最后都要return false;
3、触发ajax——jq，直接复制jq手册的写法
4、调配相关的参数
5、验证第一步的正确性，只要回调能返回后台正确生成的信息即可。只要返回的结果与正常访问时返回的结果是一致的
二、服务端响应
1、完成后台的功能（后台功能在你完成ajax之前就必须先完成），要求先完成一个非ajax的后台功能
2、区分ajax访问，返回不同的结果，通过返回时json格式
3、确定返回数据的正确（符合预期、格式完全正确、没有多余的输出）
三、回调success
1、写入dataType这个属性
2、直接使用json完成相关的回调函数
*/
//$('#pageDiv a').click 在页面加载时绑定事件，效率比较高
$('#pageDiv a').live('click',function(){//事件委派，凡是符合条件的组件，都绑定相关事件
	//得到当前a标签的地址
	var url = $(this).attr('href');
	//alert(url);
	//return false;
	$.ajax({
		type: "get",//数据传输类型
		url: url,//请求的后台地址（把请求发送到什么地方去），如果是a标签，那么a标签链接就是请求的地址
		//data: "name=John&location=Boston",//传输的数据，get方式的话，参数已经在url里面，所以get一般不写data
		dataType:'json',//必须是确认了后台输出的是json才可以使用，否则直接报错
		success: function(json){
			//更新列表
			//alert(json.result[2].id);js中，遇到{}表示对象，用.属性，遇到[]表示数字，用[下标]
			var l = '';
			for(var i = 0;i<json.result.length;i++){
				l+='<tr>';
				l+='	<td><input type="checkbox" /></td>';
				l+='	<td>'+json.result[i].id+'</td>';
				l+='	<td><a href="#" title="title">'+json.result[i].title+'</a></td>';
				l+='	<td>'+json.result[i].mtime+'</td>';
				l+='	<td>';
				l+='		 <a href="index.php?c=news&a=update&admin=1&id='+json.result[i].id+'" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>';
				l+='		 <a href="index.php?c=news&a=delete&admin=1&id='+json.result[i].id+'" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> ';
				l+='	</td>';
				l+='</tr>';
			}
			//l本身就是列表
			$('#contentDiv').html(l);
			
			//更改页码
			$('#pageDiv').html(json.page);
			
		}//回调函数，回调函数的参数就是后台返回的一切输出
		//最后一个属性，不要加,号
	});
	return false;
})

</script>
	