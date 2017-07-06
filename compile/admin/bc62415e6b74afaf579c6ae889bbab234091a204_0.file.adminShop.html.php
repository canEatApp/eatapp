<?php
/* Smarty version 3.1.30, created on 2017-07-06 08:11:49
  from "D:\html\wamp\www\eatapp\template\admin\adminShop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595dd4a58735b1_79440714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc62415e6b74afaf579c6ae889bbab234091a204' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\adminShop.html',
      1 => 1499310735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595dd4a58735b1_79440714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商铺管理页面</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/uploadimg.js"><?php echo '</script'; ?>
>
</head>
<body>
商铺状态（是否开业／是否通过审核／）商铺名（不允许修改） 商铺标语 商铺密码 店铺地址（不允许修改）
店铺缩略图 商铺规则（多少钱起送，满多少减多少）
商铺评价表
<br>
店铺商品分类管理（添加分类／删除分类）／分类下的商品管理（商品缩略图／价格／名称／交易量／*收藏量*）
<form method="post" action="index.php?m=admin&f=shop&a=update">
    <div class="form-group">
        <label for="disabledTextInput">商铺名</label>
        <input type="text" id="shopName" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sname'];?>
">
        <label for="disabledTextInput">缩略图</label>
        <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['simg'];?>
" class="img" alt="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">审核状态</label>
        <input type="text" class="form-control" disabled value="<?php if (($_smarty_tpl->tpl_vars['info']->value['state'] == 0)) {?>
        未审核<?php } elseif (($_smarty_tpl->tpl_vars['info']->value['state'] == 1)) {?>审核中<?php } elseif (($_smarty_tpl->tpl_vars['info']->value['state'] == 2)) {?>通过
        <?php }?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">商铺标语</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['snotes'];?>
" name="snotes">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">商铺地址</label>
        <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['saddress'];?>
" name="saddress">
    </div>
    <div class="form-group" id="change">

        <input type="hidden" class="inputImg" name="simg" value="1">
        <input type="hidden" name="rid" value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<label for="exampleInputPassword1">修改缩略图</label>
</body>
<style>
    .img{
        width:100px;
    }
    #shopName{
        width:20%;
        display: inline-block;
    }
</style>
<?php echo '<script'; ?>
>
    window.onload=function () {
        let obj=new upload_1();
        obj.url="upload.php";
        obj.success=function (url) {
            document.querySelector(".inputImg").value=url;
        };
        obj.createView();
    }
<?php echo '</script'; ?>
>
</html><?php }
}
