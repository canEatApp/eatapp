<?php
/* Smarty version 3.1.30, created on 2017-07-11 05:54:04
  from "D:\html\wamp\www\eatapp\template\admin\applist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59644bdc45c407_94823389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4efaba236e3ec85286e94a44510c1cba550ebce1' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\applist.html',
      1 => 1499745242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59644bdc45c407_94823389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
</head>
<style>
    th{
        text-align: center;
    }
</style>
<body>
<table  class="table table-striped" style="margin-top: 10px; margin-left: 10px;">
    <tr>
        <th>缩略图</th>
        <th>分类名</th>
        <th>英文分类名</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr style="text-align: center">
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['limg'];?>
" style="width: 40px;" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lename"];?>
</td>
        <td><a href="index.php?m=admin&f=addRole&a=listCon&lid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
"><button type="button" class="btn btn-warning">更改</button></a></td>
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
