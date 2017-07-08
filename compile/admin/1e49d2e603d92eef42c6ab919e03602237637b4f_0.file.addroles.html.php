<?php
/* Smarty version 3.1.30, created on 2017-07-05 13:01:50
  from "D:\html\wamp\www\eatapp\template\admin\addroles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595cc71e2a8959_42024078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e49d2e603d92eef42c6ab919e03602237637b4f' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\addroles.html',
      1 => 1498804318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595cc71e2a8959_42024078 (Smarty_Internal_Template $_smarty_tpl) {
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
/jquery.validate.js"><?php echo '</script'; ?>
>
</head>
<body>
<style>
    form{
        margin-top:20px;
        padding:10px;
        box-sizing: border-box;
    }
</style>
<form method="post" action="index.php?m=admin&f=addRole&a=addroles" id="form">
    <div class="form-group">
        <label for="exampleInputEmail1">角色名称</label>
        <input type="text" class="form-control" name="rname" id="exampleInput" placeholder="角色名称">
    </div>
    <button type="submit" class="btn btn-default">创建</button>
</form>

</body>
<?php echo '<script'; ?>
>
    $("#form").validate({
        rules:{
            rname:{
                required:true,
            },
            remote:{
                url:"index.php?m=admin&f=addRole&a=checkRoles",
                data:{
                    rname:function () {
                        return $("#exampleInput").val();
                    }
                }
            }
        },
        message:{
            rname:{
                required:"必须填写",
                remote:"已有用户名",
            },
        },

    })
<?php echo '</script'; ?>
>
</html><?php }
}
