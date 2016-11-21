
			
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
										<!--定义id-->
										<div class="pagination" id="pageDiv">
											<?php echo $page;?>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<!--定义id-->
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
					
						<form action="#" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Small form input</label>
										<input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>A small description of the field</small>
								</p>
								
								<p>
									<label>Medium form input</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
								</p>
								
								<p>
									<label>Large form input</label>
									<input class="text-input large-input" type="text" id="large-input" name="large-input" />
								</p>
								
								<p>
									<label>Checkboxes</label>
									<input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
								</p>
								
								<p>
									<label>Radio buttons</label>
									<input type="radio" name="radio1" /> This is a radio button<br />
									<input type="radio" name="radio2" /> This is another radio button
								</p>
								
								<p>
									<label>This is a drop down list</label>              
									<select name="dropdown" class="small-input">
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
										<option value="option4">Option 4</option>
									</select> 
								</p>
								
								<p>
									<label>Textarea with WYSIWYG</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
<script>
//1、绑定分页点击事件
$("#pageDiv a").live('click',function(){//只要符合条件，则永远绑定
//$("#pageDiv a").click() //只会在页面第一次加载时有绑定，如果往后的标签被更改了，则无法再次绑定
	//this：指向当前对象->谁点击谁促发谁是当前对象
	//attr：获取对象标签任何的属性
	//2、获取url
	var URL = $(this).attr('href');
	//3、ajax
	$.ajax({
		//3.1、配置参数
		type: "GET",//参数发送方式->根据原本的提交时get还是post
		url: URL,//后台地址，通常后台是不用写死的，因为本身的应用就已经会包含原本的地址，基本上有方法可以提取
		//data: "p=3&m=news&c=index&admin=1",//传输的数据，get方式传参是可以省略，因为参数都在地址那里
		dataType:"json",//规定后台返回的数据格式必须是json，否则出错，而接收到的数据，直接就是可用的json。该属性一定要放到ajax确认接收参数无误后才加上
		//3.2、回调函数，组装列表
		success: function(json){
			var base_url = $('base').attr('href');//获取base标签的href
			var l = '';
			var result = json.result;
			for(var i =0;i<result.length;i++){
				l+='<tr>';
				l+='	<td><input type="checkbox" /></td>';
				l+='	<td>'+result[i].id+'</td>';
				l+='	<td><a href="#" title="title">'+result[i].title+'</a></td>';
				l+='	<td>'+result[i].mtime+'</td>';
				l+='	<td>';
				l+='		 <a href="'+base_url+'index.php?m=news&c=update&admin=1&id='+result[i].id+'" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>';
				l+='		 <a href="'+base_url+'index.php?m=news&c=delete&admin=1&id='+result[i].id+'" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> ';
				l+='	</td>';
				l+='</tr>';
			}
			$('#contentDiv').html(l);
			$('#pageDiv').html(json.page);
			//html():获取组件中的html->html('替换的内容'):替换组件中的html
		},//当ajax成功调用（1,2正确），通过此函数获取后台的参数（msg：后台的输出），并且在此函数中处理结果
		error:function(XMLHttpRequest, textStatus, errorThrown){
			//XMLHttpRequest:后台的输出
			//textStatus:错误的信息 "timeout", "error", "notmodified" 和 "parsererror"。
			alert(XMLHttpRequest);
			alert(textStatus);
			alert(errorThrown);
		}
	});
	//4、防止跳转
	return false;//阻止页码跳转
});
</script>			
	