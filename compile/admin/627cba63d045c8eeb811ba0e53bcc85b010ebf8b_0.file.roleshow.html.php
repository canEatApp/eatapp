<?php
/* Smarty version 3.1.30, created on 2017-07-12 15:30:46
  from "D:\html\wamp\www\eatapp\template\admin\roleshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596624864d3c13_09752711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627cba63d045c8eeb811ba0e53bcc85b010ebf8b' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\roleshow.html',
      1 => 1499866244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596624864d3c13_09752711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/common.css">
</head>
<style>
    button > a{
        color:#fff;
        display: inline-block;
        width:100%;
        height:100%;
        font-size:16px;

    }
    button > a:hover{
        color:#fff;
        text-decoration: none;
    }
    th{
        text-align: center
    }
</style>
<body>

<table class="table table-bordered" style="text-align: center">
    <tr>
        <th style="text-align: center">角色ID</th>
        <th>角色名</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</td>
        <td><button type="button" class="btn btn-success"><a href="index.php?m=admin&f=addRole&a=roles&rid=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">编辑</a></button>
            <button type="button" class="btn btn-danger"><a href="index.php?m=admin&f=addRole&a=roledel&rid=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">删除</a></button></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
