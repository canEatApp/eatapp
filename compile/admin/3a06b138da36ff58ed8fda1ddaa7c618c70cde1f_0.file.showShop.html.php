<?php
/* Smarty version 3.1.30, created on 2017-07-14 03:32:17
  from "D:\html\wamp\www\eatapp\template\admin\showShop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59681f211478f9_82233145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a06b138da36ff58ed8fda1ddaa7c618c70cde1f' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\showShop.html',
      1 => 1499995935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59681f211478f9_82233145 (Smarty_Internal_Template $_smarty_tpl) {
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
<table class="table table-bordered" >
    <tr style="text-align: center">
        <th>店铺名</th>
        <th>店铺缩略图</th>
        <th>店铺地址</th>
        <th>当前状态</th>
        <th>下一状态</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr style="text-align: center">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sname"];?>
</td>
        <td>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simg'];?>
" style="width: 40px;" alt="">
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['saddress'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['srec'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
        <td><a href="index.php?m=admin&f=shop&a=showCom&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><button type="button" class="btn btn-success">点击查看</button></a>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['srec'] != $_smarty_tpl->tpl_vars['v']->value['status']) {?><a href="index.php?m=admin&f=shop&a=shopsrec&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><button type="button" class="btn btn-success">审核通过</button></a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['state'] != 0) {?><a href="index.php?m=admin&f=shop&a=shopstate&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><button type="button" class="btn btn-warning ">拉黑禁开</button></a><?php }?></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<a href="index.php?m=admin&f=shop&a=showShop&status=srec!=status">
    未审核
</a>
<a href="index.php?m=admin&f=shop&a=showShop&status=srec=status">
    审核通过
</a>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</body>
</html><?php }
}
