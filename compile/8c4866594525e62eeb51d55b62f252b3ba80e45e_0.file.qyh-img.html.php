<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:35:43
  from "D:\html\wamp\www\eatapp\template\index\qyh-img.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962e7ff1de4d7_59748894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4866594525e62eeb51d55b62f252b3ba80e45e' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\index\\qyh-img.html',
      1 => 1499654137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962e7ff1de4d7_59748894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>更换头像</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qyh-person.css">-->
</head>
<body>
<header>
    <a onclick="history.go(-1)"><img src="<?php echo IMG_PATH;?>
/qyh-img/q-back.png" alt=""></a>
    <h1 class="mui-title">上传头像</h1>
</header>
    <div style="margin-top:44px;">
        <div class="uploadbox">
            <input type="hidden" id="img" name="imgurl" value="">
        </div>
        <button type="submit" class="btn btn-default">确认修改</button>
    </div>
<div class="display">

</div>

</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        var obj = new upload();
        obj.size = 1024 * 1024 * 10;
        obj.createView({
            parent: document.querySelector(".uploadbox")
        });
        obj.up("index.php?m=index&f=qperson&a=imgurl",function(data){
            console.log(data);
            console.log($("#img"))
            $("#img").val(data);
        });
        $("button").on('click',function(){
            $.ajax({
                url:"index.php?m=index&f=qperson&a=imgCon",
                data:"img="+$("#img").val(),
                success:function(e){
                    console.log(e)
                    if(e=="no"){
                        $(".display").html('修改失败').css("display","block");
                        setTimeout(function () {
                            $(".display").css("display","none");
                        },1500)

                    }else if(e=="ok") {
                        $(".display").html('修改成功').css("display", "block");
                        setTimeout(function () {
                            $(".display").css("display", "none");
                            history.go(-1);
                        }, 1500)
                    }
                }
            })
        })

    })

<?php echo '</script'; ?>
>
<style>
    .display{
        width:200px;
        height:50px;
        position: absolute;
        top:240px;
        left:50%;
        margin-left:-100px;
        background: #00a2d4;
        border-radius: 10px;
        z-index: 100;
        text-align: center;
        line-height: 50px;
        color:#fff;
        display: none;
    }
    header{
        width:100%;
        height:1.87rem;
        background: #FC801E;
        background-size: cover;
    }
    header > a:first-child {
        display: inline-block;
        margin: 0rem 0.3rem 0;
        padding-top:0.3rem;
    }
    header > a:first-child img {
        height: 0.46rem;
        width:0.46rem;
        border: 1px solid #fff;
        border-radius:50% ;
        opacity: 0.8;
    }
    h1{
        color:#fff;
        font-size:0.3rem;
        padding-left:0.2rem;
    }
    div{
        text-align: center;
    }
</style><?php }
}
