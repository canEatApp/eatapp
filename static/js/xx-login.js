$(function(){
	$('#infos').validate({
		 debug:false, //false表示验证通过后不要自动提交表单
		 onkeyup:false, //表示关闭按键松开时候监听验证
		 rules:{ //验证规则
		 username:{
			 required:true, //必填字段
			 rangelength:[6,100], //长度在6-10之间
			 email:true     
		 },
		 nums:{
			 required:true,
			 digits:true
		 },
		 notes:"required"
	 },
	 messages:{ //自定义错误信息，默认为英文，除了在这里配置以为，还可以通过配置文件进行配置
		 username:{
			 required:"用户名必填",
			 rangelength:"用户名长度必须为6-10位",
			 email:"输入正确的邮箱账号"
			 
		 },
		 nums:{
			 required:"工作号必填",
			 digits:"工作号必须为数字"
		 },
		 notes:"备注必填"
	},
		 //验证通过可以在这里做你想做的事情
	submitHandler:function(form){
		 	alert("验证通过");
		 }
	})
})
