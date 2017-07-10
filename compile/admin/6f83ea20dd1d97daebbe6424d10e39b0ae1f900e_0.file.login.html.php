<?php
/* Smarty version 3.1.30, created on 2017-07-06 10:12:22
  from "D:\YEK\tool\wamp\www\eatapp\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595df0e69c78d1_00403560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f83ea20dd1d97daebbe6424d10e39b0ae1f900e' => 
    array (
      0 => 'D:\\YEK\\tool\\wamp\\www\\eatapp\\template\\admin\\login.html',
      1 => 1499067746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595df0e69c78d1_00403560 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    html,body{
        width:100%;
        height:100%;
    }
    form{
        width:450px;
        height:300px;
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom: 0;
        margin:auto;
    }
    .imgbox{
        margin-top: 60px;
        margin-bottom: 10px;
    }
    img{
        margin:0 auto;
        width:200px;
    }
    .title{
        margin: 0;
        text-align: center;
    }
</style>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=login&a=load">
        <h3 class="title">欢迎登录</h3>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="user" autocomplete="off" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-12">
            <input type="password" required class="form-control" id="inputPassword3" placeholder="密码" name="pass" autocomplete="off">
        </div>
    </div>
    <div class="from-group">
        <label for="inputPassword3"  class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-12">
            <input type="text" required class="form-control" name="check" id="check" placeholder="验证码" autocomplete="off">
        </div>
    </div>
    <div class="from-group imgbox" style="text-align: center">
        <img src="index.php?m=admin&f=login&a=check" class="img-responsive" alt="验证码" onclick="this.src='index.php?m=admin&f=login&a=check&aaa='+Math.random()">
    </div>
    <div class="form-group" style="text-align: center">
        <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
        </div>
        <a href="index.php?m=admin&f=login&a=sign">注册</a>
    </div>
</form>
</body>
</html><?php }
}
