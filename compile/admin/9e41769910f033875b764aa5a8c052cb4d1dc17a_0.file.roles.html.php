<?php
/* Smarty version 3.1.30, created on 2017-06-29 05:58:22
  from "/Applications/MAMP/htdocs/mvc/template/admin/roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59547adecb8b10_39692037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e41769910f033875b764aa5a8c052cb4d1dc17a' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc/template/admin/roles.html',
      1 => 1498695227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59547adecb8b10_39692037 (Smarty_Internal_Template $_smarty_tpl) {
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
<form method="post" action="index.php?m=admin&f=addRole&a=addAdmin">
    <select class="form-control" name="rid">
        <option value="1">---选择角色---</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input name="adname" type="text" class="form-control" id="exampleInputEmail1" placeholder="User">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input name="adpass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-default">创建</button>
</form>

</body>
</html><?php }
}
