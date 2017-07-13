<?php
/* Smarty version 3.1.30, created on 2017-07-12 16:32:21
  from "D:\html\wamp\www\eatapp\template\admin\showcom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596632f58ed9d6_18307742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5db9f679908707b042f4d9dc86cb3088ab42df0d' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\showcom.html',
      1 => 1499869939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596632f58ed9d6_18307742 (Smarty_Internal_Template $_smarty_tpl) {
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
    img{
        width:40px;
    }
</style>
<body>
<h2>商铺详情</h2>

<table class="table table-bordered" style="text-align: center">
    <tr>
        <th>商铺名</th>
        <th>商铺英文名</th>
        <th>商铺地址</th>
        <th>商铺中文简介</th>

    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['saddress'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['snotes'];?>
</td>

    </tr>
    <tr>
        <th>商铺英文简介</th>
        <th>商铺规则</th>
        <th>商铺所属分类ID</th>
        <th>商铺用户ID</th>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['senotes'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['srules'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['lid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uid'];?>
</td>
    </tr>
</table>
<h2>商铺商品</h2>
<table class="table table-bordered" style="text-align: center">
    <tr>
        <th>商品名</th>
        <th>英文商品名</th>
        <th>商品价格</th>
        <th>商品图片</th>
        <th>商品简介</th>
        <th>商品所属分类</th>
        <th>商品当前状态</th>
        <th>商品下一状态</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['coname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['coename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['coprice'];?>
</td>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['coimg'];?>
" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['conote'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['slid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['srec'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];
if ($_smarty_tpl->tpl_vars['v']->value['srec'] != $_smarty_tpl->tpl_vars['v']->value['status']) {?><button type="button" class="btn btn-success"><a href="index.php?m=admin&f=shop&a=copass&sid=<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">审核通过</a></button><?php }?></td>
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
