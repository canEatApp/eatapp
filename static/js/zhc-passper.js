$().ready(function(){
	var aa=$("input[type='password']");
	var number=0;
	var arr=[];
	for(var i = 0; i<aa.length;i++){
		 var t = aa[i];
         t.index = i;
         t.setAttribute("readonly", true);
         t.onkeyup=function(){
     		$('.line div').addClass('color');
  			$('.line div').each(function(index,val){
  				if(aa[index].value.length==0){
  					$('.line div').eq(index).removeClass('color');		
  				}
  			})
  			if($('.color').length==6){
        			location.href='zhc-success.html';
			}
            this.value=this.value.replace(/^(.).*$/,'$1');
            var next = this.index + 1;
            if(next > aa.length - 1) return;
            aa[next].removeAttribute("readonly");
            aa[next].focus();
        }
	}
	aa[0].removeAttribute("readonly");

})
