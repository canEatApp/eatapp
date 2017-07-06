<?php
/* Smarty version 3.1.30, created on 2017-07-05 12:09:31
  from "/Applications/MAMP/htdocs/eatapp/template/admin/addShop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595cbadb83f097_16449939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa9a0bff89870b5040cd45f8ebb902b46217f44' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp/template/admin/addShop.html',
      1 => 1498903806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595cbadb83f097_16449939 (Smarty_Internal_Template $_smarty_tpl) {
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
/uploadimg.js"><?php echo '</script'; ?>
>
</head>
<style>
    form{
        margin-top:20px;
        padding:10px;
        box-sizing: border-box;
    }
</style>
店铺名／店铺密码／店铺状态／店铺标语／是否通过审核／店铺地址／店铺缩略图／
加validate
<body>
<form method="post" action="index.php?m=admin&f=shop&a=add">
    <div class="form-group">
        <label for="exampleInputEmail1">店铺名</label>
        <input name="sname" type="text" required class="form-control" style="width: 40%;" id="" placeholder="店铺名">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">店铺密码</label>
        <input name="spass" type="password" required class="form-control" style="width: 40%;"  placeholder="店铺密码">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">店铺标语</label>
        <input name="snotes" type="text" class="form-control" required style="width: 40%;"  placeholder="店铺标语">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">店铺地址</label>
        <input name="saddress" type="text" class="form-control" required style="width: 40%;"  placeholder="店铺地址">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">店铺缩略图</label>
        <input type="hidden" class="inputImg" name="simg">
    </div>
    <button type="submit" class="btn btn-default">创建</button>
</form>

</body>
<?php echo '<script'; ?>
>
    window.onload=function () {
        let obj=new upload_1();
        obj.url="upload.php";
        obj.success=function (url) {
            document.querySelector(".inputImg").value=url;
        };
        obj.createView();
    }
<?php echo '</script'; ?>
>
</html><?php }
}
