<?php
/* Smarty version 3.1.30, created on 2017-07-06 05:09:03
  from "/Applications/MAMP/htdocs/eatapp/template/admin/showShop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595da9cfdd0646_14406901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e19d8bb014a68b716b856cf87eca7777708af4fa' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp/template/admin/showShop.html',
      1 => 1499310528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595da9cfdd0646_14406901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
</head>
<body>
<table>
    <tr style="text-align: center">
        <th>店铺名</th>
        <th>店铺缩略图</th>
        <th>店铺地址</th>
        <th>店铺标语</th>
        <th>是否通过审核</th>
        <th>查看商品</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['snotes'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['state'] == 0) {?>未通过<?php } else { ?>已通过<?php }?></td>
        <td><a href="index.php?m=admin&f=shop&a=showCom&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">点击查看</a></td>
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
