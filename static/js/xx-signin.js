$(function(){
//	alert(1);
	$("input:first-of-type").blur(function(){
//		console.log($("label").css("displiay"))	
		window.setTimeout(function(){	
			console.log($("label").css("display"))
			if($("label").css("display")=="none"){
				if($("input:first-of-type").val()!==""){
					$(".user").html("")
				}			
			}else{
			}
		}
		,100)		
		if($("input:nth-of-type(1)").val()!==''&&$("input:nth-of-type(2)").val()!==''&&$("input:nth-of-type(3)").val()!==''&&$("input:nth-of-type(4)").val()!==''&&$("input:nth-of-type(5)").val()!==''){
	 		$(".submit").addClass("add")
	 		$(".submit p").css("color","#FFFFFF")
	 		$(".submit > h4").css("color","#FFFFFF")
	 }
	})
	$(".phone").click(function(){
		window.setTimeout(function(){	
			console.log($("label").css("display"))
			if($("label").css("display")=="none"){
				
				$(".phone").html("")
			}else{
			}
		}
		,100)	
		if($("input:nth-of-type(1)").val()!==''&&$("input:nth-of-type(2)").val()!==''&&$("input:nth-of-type(3)").val()!==''&&$("input:nth-of-type(4)").val()!==''&&$("input:nth-of-type(5)").val()!==''){
	 		$(".submit").addClass("add")
	 		$(".submit p").css("color","#FFFFFF")
	 		$(".submit > h4").css("color","#FFFFFF")
	 }
	})
	$("input:nth-of-type(3)").blur(function(){
		window.setTimeout(function(){	
			console.log($("label").css("display"))
			if($("label").css("display")=="none"){
				if($("input:nth-of-type(3)").val()!==""){
					$(".verfi").html("")	
				}				
			}else{
			}
		}
		,100)	
		if($("input:nth-of-type(1)").val()!==''&&$("input:nth-of-type(2)").val()!==''&&$("input:nth-of-type(3)").val()!==''&&$("input:nth-of-type(4)").val()!==''&&$("input:nth-of-type(5)").val()!==''){
	 		$(".submit").addClass("add")
	 		$(".submit p").css("color","#FFFFFF")
	 		$(".submit > h4").css("color","#FFFFFF")
	 }
	})
	$("input:nth-of-type(4)").focus(function(){
		$(".err").css("display","none")
		if($("input:nth-of-type(1)").val()!==''&&$("input:nth-of-type(2)").val()!==''&&$("input:nth-of-type(3)").val()!==''&&$("input:nth-of-type(4)").val()!==''&&$("input:nth-of-type(5)").val()!==''){
	 		$(".submit").addClass("add")
	 		$(".submit p").css("color","#FFFFFF")
	 		$(".submit > h4").css("color","#FFFFFF")
	 }
	})
	$("input:nth-of-type(4)").blur(function(){
		window.setTimeout(function(){	
			console.log($("label").css("display"))
			if($("label").css("display")=="none"){
				if($("input:nth-of-type(4)").val()!==""){
					$(".pass").html("")
				}
			}else{
			}
		}
		,100)	
		if($("input:nth-of-type(1)").val()!==''&&$("input:nth-of-type(2)").val()!==''&&$("input:nth-of-type(3)").val()!==''&&$("input:nth-of-type(4)").val()!==''&&$("input:nth-of-type(5)").val()!==''){
	 		let sub=$(".submit");
			$(".submit").addClass("add")
	 		$(".submit p").css("color","#FFFFFF")
	 		$(".submit > h4").css("color","#FFFFFF")


	 }
//		if($("input:nth-of-type(4)").val()==$("input:nth-of-type(5)").val()){
//			
//		}else{
//			$(".err").css("display","block")
//		}
	})
	$("input:nth-of-type(5)").blur(function(){
		window.setTimeout(function(){	
			console.log($("label").css("display"))
			if($("label").css("display")=="none"){
				if($("input:nth-of-type(5)").val()!==""){
					$(".again").html("")
				}				
			}else{
			}
		}
		,100)	
		if($("input:nth-of-type(4)").val()==$("input:nth-of-type(5)").val()){
			
		}else{
			$(".err").css("display","block")
		}
		if($("input:nth-of-type(1)").val()!==''&&$("input:nth-of-type(2)").val()!==''&&$("input:nth-of-type(3)").val()!==''&&$("input:nth-of-type(4)").val()!==''&&$("input:nth-of-type(5)").val()!==''){
	 		$(".submit").addClass("add")
	 		$(".submit p").css("color","#FFFFFF")
	 		$(".submit > h4").css("color","#FFFFFF")
	 }
	})
//	$("form div").html("")


	$('#infos').validate({
		 debug:false, //false表示验证通过后不要自动提交表单
		 onkeyup:false, //表示关闭按键松开时候监听验证
		 rules:{ //验证规则
			 username:{
				 required:true, //必填字段
				 rangelength:[6,15], //长度在6-10之间
				 digits:true
			 },
			 nums:{
				 required:true,
				 digits:true,
				 rangelength:[11,11],
			 },
			 ver:{
			 	required:true,
			 	rangelength:[4,4],
			 },
			 pass:{
			 	rangelength:[8,16],
			 }
		 },
		 messages:{ //自定义错误信息，默认为英文，除了在这里配置以为，还可以通过配置文件进行配置
			 username:{
				 required:"用户名必填",
				 rangelength:"用户名长度必须为6-10位",
				 email:"输入正确的邮箱账号"
				 
			 },
			 nums:{
				 required:"工作号必填",
				 digits:"输入正确的手机号",
				 rangelength:"输入正确手机号"
			 },
			 ver:{
			 	rangelength:"输入4位验证码",
			 },
			 pass:{
			 	 rangelength:"密码长度必须为8-18位",
			 }
		},
			 //验证通过可以在这里做你想做的事情
		submitHandler:function(form){
			 	alert("验证通过");
			}
	})	
//	window.setInterval(function(){
//		console.log($("input:nth-of-type(5)").val())	
//	},500)
})
