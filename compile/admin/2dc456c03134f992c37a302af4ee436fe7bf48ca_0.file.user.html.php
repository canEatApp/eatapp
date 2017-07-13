<?php
/* Smarty version 3.1.30, created on 2017-07-13 04:32:32
  from "D:\html\wamp\www\eatapp\template\admin\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5966dbc0525733_44244746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc456c03134f992c37a302af4ee436fe7bf48ca' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\user.html',
      1 => 1499913149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5966dbc0525733_44244746 (Smarty_Internal_Template $_smarty_tpl) {
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
    img{
        width:40px;
    }
</style>
<body>
<table class="table table-bordered" >
    <tr style="text-align: center">
        <th>用户ID</th>
        <th>用户名</th>
        <th>用户昵称</th>
        <th>用户头像</th>
        <th>用户地址</th>
        <th>用户电话</th>
        <th>用户签名</th>
        <th>角色（1用户2卖家）</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['uid'] == $_smarty_tpl->tpl_vars['val']->value['uid']) {?>
    <tr style="text-align: center">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['uiname'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['uimg'];?>
"  alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['uaddress'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['utel'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['unotes'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uroles'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['val']->value['ustate'] == 1) {?><a href="index.php?m=admin&f=user&a=state&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><button type="button" class="btn btn-success">拉黑</button></a><?php } else { ?>
        <a href="index.php?m=admin&f=user&a=state1&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><button type="button" class="btn btn-success">正常</button></a><?php }?>
            <a href="index.php?m=admin&f=user&a=del&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><button type="button" class="btn btn-warning ">删除</button></a></td>
    </tr>
    <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
