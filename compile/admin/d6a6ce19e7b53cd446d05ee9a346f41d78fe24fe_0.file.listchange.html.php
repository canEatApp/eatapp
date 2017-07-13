<?php
/* Smarty version 3.1.30, created on 2017-07-12 14:51:33
  from "D:\html\wamp\www\eatapp\template\admin\listchange.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59661b55214ad2_51285409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a6ce19e7b53cd446d05ee9a346f41d78fe24fe' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\listchange.html',
      1 => 1499863852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59661b55214ad2_51285409 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/uploadimg.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php?m=admin&f=addRole&a=listchange">
    <div class="form-group">
        <label for="exampleInputEmail1">分类名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="lname" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['lname'];?>
" placeholder="分类名">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">英文分类名</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="lename" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['lename'];?>
" placeholder="英文分类名">
    </div>
    <div class="form-group">
        <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['limg'];?>
"  alt="">
        <label>上传图片</label>
        <input type="hidden" class="inputImg" name="img" value="">
        <input type="hidden" name="lid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['lid'];?>
">
    </div>
    <button type="submit" class="btn btn-default">确认修改</button>
</form>
</body>
</html>
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
><?php }
}
