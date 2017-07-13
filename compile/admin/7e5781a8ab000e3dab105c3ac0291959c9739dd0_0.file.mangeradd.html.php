<?php
/* Smarty version 3.1.30, created on 2017-07-13 03:42:44
  from "D:\html\wamp\www\eatapp\template\admin\mangeradd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966d0146007c7_35130681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5781a8ab000e3dab105c3ac0291959c9739dd0' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\mangeradd.html',
      1 => 1499876851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966d0146007c7_35130681 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    form > div{
        margin:20px 0;
    }
    label{
        margin-right: 20px;
        text-align: left;
    }

</style>
<body>
<h4>添加管理员信息</h4>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=manger&a=addCon">
        <label class="col-sm-2 control-label" style="text-align: left">账号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id">
        </div>
        <label class="col-sm-2 control-label" style="text-align: left">账号</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="pass">
        </div>
        <label class="col-sm-2 control-label" style="text-align: left">角色</label>
        <select class="form-control col-sm-10" style="width:85%;"  name="rid" >
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
        <div class="col-xs-6" style="text-align: center">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
</form>
</body>
</html><?php }
}
