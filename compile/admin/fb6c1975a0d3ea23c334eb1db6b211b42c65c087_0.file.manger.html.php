<?php
/* Smarty version 3.1.30, created on 2017-07-12 17:40:40
  from "D:\html\wamp\www\eatapp\template\admin\manger.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596642f8db3ee9_23810350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb6c1975a0d3ea23c334eb1db6b211b42c65c087' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\manger.html',
      1 => 1499873955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596642f8db3ee9_23810350 (Smarty_Internal_Template $_smarty_tpl) {
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
    th,td{
        text-align: center;
    }
</style>
<body>
<table class="table table-bordered" >
    <tr style="text-align: center">
        <th>管理员名称</th>
        <th>角色ID</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr style="text-align: center">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['arole'];?>
</td>
        <td><a href="index.php?m=admin&f=manger&a=change&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
"><button type="button" class="btn btn-success">更改</button></a>
            <a href="index.php?m=admin&f=manger&a=del&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
"><button type="button" class="btn btn-warning ">删除</button></a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <tr><td colspan="3"><a href="index.php?m=admin&f=manger&a=add"><button type="button" class="btn btn-success ">添加管理员</button></a>
        </td></tr>
</table>
</body>
</html><?php }
}
