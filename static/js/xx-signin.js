$(function(){
	$("input:first-child").blur(function(){
		$(".user").html("")
	})
	$(".phone").click(function(){
		$(".phone").html("")
	})
	$("input:nth-child(3)").blur(function(){
		$(".verfi").html("")
	})
	$("input:nth-child(4)").focus(function(){
		$(".err").css("display","none")
	})
	$("input:nth-child(4)").blur(function(){
		$(".pass").html("")
//		if($("input:nth-child(4)").val()==$("input:nth-child(5)").val()){
//			
//		}else{
//			$(".err").css("display","block")
//		}
	})
	$("input:nth-child(5)").blur(function(){
		$(".again").html("")
		if($("input:nth-child(4)").val()==$("input:nth-child(5)").val()){
			
		}else{
			$(".err").css("display","block")
		}
	})
//	$("form div").html("")
})
