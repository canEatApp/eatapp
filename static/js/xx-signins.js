/**
 * Created by xiaoxiong on 2017/7/8.
 */
window.onload=function () {
    "use strict"
    $(".phone").on("touchend",function () {
        let phonenum=$("input:nth-of-type(2)").val();
        console.log(phonenum)
        $.ajax({
            url:"index.php?m=index&f=signin&a=check",
            data:{phonenum:phonenum},
            success:function (e) {
                console.log(e)
            }
        })
    })


    let sub=$(".submit");
    console.log(sub)
    sub.on("touchend",function () {
        let user=$("input:nth-of-type(1)").val();
        let phone=$("input:nth-of-type(2)").val();
        let yan=$("input:nth-of-type(3)").val();
        let pass=$("input:nth-of-type(4)").val()
        console.log(user,phone,yan,pass)
        $.ajax({
            url:"index.php?m=index&f=signin&a=signch",
            data:{
                user:user,phone:phone,pass:pass,yan:yan
            },
            type:"post",
            success:function (e) {
                console.log(e)
                    // if (e=="ok"){
                    //     location.href="index.php?m=index&f=login&a=log"
                    // }
            }
        })
    })
}

