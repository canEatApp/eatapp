<?php
/* Smarty version 3.1.30, created on 2017-07-12 17:55:15
  from "D:\html\wamp\www\eatapp\template\admin\mangerchange.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59664663c3e447_05909102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a25f18d8fe10e535b7374665b242b90c9bb95a3' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\mangerchange.html',
      1 => 1499874910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59664663c3e447_05909102 (Smarty_Internal_Template $_smarty_tpl) {
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
    }
</style>
<body>
<h4>修改管理员角色信息</h4>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=manger&a=changeCon">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['aname'];?>
" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">角色</label>
        <select class="form-control" name="rid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['rid'] == $_smarty_tpl->tpl_vars['result']->value[0]['arole']) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['rid'] != $_smarty_tpl->tpl_vars['rid']->value) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</option>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2">
            <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
