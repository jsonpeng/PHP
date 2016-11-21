$(function(){
	/*
	一、前端触发ajax
	1、触发事件
	2、return false
	3、打开手册，复制ajax代码
	4、调配参数
	5、验证前面步骤的正确性
	二、后台处理
	1、把后台功能完成
	2、区分ajax的访问
	3、验证后台的输出是否正确
	三、回调函数处理
	1、加入dataType
	2、处理回调函数
	*/
	//form表单提交的触发应该form本身的提交事件
	$('#loginForm').submit(function(){
		var url = $(this).attr('action');//form的地址就是action
		//获取参数：form表单获取的参数，本身form提交些什么，就要获取些什么
		var username = $('#username').attr('value');
		var password = $('#password').attr('value');
		//var remember = $('#remember').attr('value');//获取多选框的值，本身与多选框是否选中是没关系
		//判断多选框是否选中，由判断来赋值
		var remember = 0;
		if($('#remember').is(':checked')){
			//is：判断属性/组件是否存在，如果是属性的话，需要在属性前加上:
			remember = 1;
		}
		else{
			remember = 0;
		}
		$.ajax({
			type: "POST",
			url: url,
			//data: "username="+username+"&password="+password,//健=值&健=值
			data:{
				'username':username,
				'password':password,
				'remember':remember
			},
			dataType:'json',
			success: function(json){
				var l ='';
				l+='<span>欢迎您，'+json.username+'</span>|';
				l+='<a href="index.php?c=user&a=logout">退出</a>';
				$('#loginDiv').html(l);
			},
			error:function(XMLHttpRequest, textStatus, errorThrown){
				//error更多的情况并非是报错，其实在开发也很少用。更多时候是用于安抚用户
				//error只要在ajax本身过程有错误的情况下才会调用。像登录失败，对于整个流程是正确的，是不会跳到error
				alert('网络繁忙');
			}
		});
		return false;
	});
	
	$.ajax({
		type: "get",
		url: "index.php?c=user&a=autologin",
		dataType:'json',
		success: function(json){
			if(json != 0){
				var l ='';
				l+='<span>欢迎您，'+json.member+'</span>|';
				l+='<a href="index.php?c=user&a=logout">退出</a>';
				$('#loginDiv').html(l);
			}
		}
	});
});
/*
ajax注意点：
1、不能同时触发多个，同一时间只能触发一个
因为ajax本身也损耗网络资源，如果网速不给力，则最严重是相互卡死
2、不要在一个ajax没有完成的前提下去触发另外一个ajax，因为在一个ajax没有完成的前提下，无法保证执行的顺序。一般来讲，触发了一个ajax后，必须要生成一个类似遮罩层（一个透明的div，而且覆盖整个网页）的东西
3、不要在回调函数中再次调用ajax，极不稳定

*/