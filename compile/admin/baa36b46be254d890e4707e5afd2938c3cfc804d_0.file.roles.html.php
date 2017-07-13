<?php
/* Smarty version 3.1.30, created on 2017-07-12 15:36:05
  from "D:\html\wamp\www\eatapp\template\admin\roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596625c5b8d4d4_66997059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa36b46be254d890e4707e5afd2938c3cfc804d' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\roles.html',
      1 => 1499866556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596625c5b8d4d4_66997059 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
    <style>
        form{
            margin-top:20px;
            padding:10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<form method="post" action="index.php?m=admin&f=addRole&a=rolechange">
    <div class="form-group">
        <label for="exampleInputEmail1">角色id</label>

        <input name="rid" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['rid'];?>
" readonly placeholder="角色id">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">角色名</label>

        <input name="rname" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['rname'];?>
" placeholder="角色名">
    </div>
    <button type="submit" class="btn btn-default">创建</button>
</form>

</body>
</html><?php }
}
