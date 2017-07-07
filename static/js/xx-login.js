$(function(){
	$(".logn img:nth-child(2)").click(function(){
		$(".logn img:nth-child(2)").css("display","none")
		$(".logn img:nth-child(3)").css("display","inline")
		$(".number input:nth-of-type(1)").css("display","none")
		$(".number input:nth-of-type(2)").css("display","inline")
		$(".login").css({"background-image":"url(../../static/img/xx-img/xx-login12.png)"})
		$(".login p").css({"color":"#fff"})
		$(".number p").text("Password")
	})
})
