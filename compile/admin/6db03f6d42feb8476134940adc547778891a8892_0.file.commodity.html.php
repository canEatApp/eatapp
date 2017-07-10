<?php
/* Smarty version 3.1.30, created on 2017-07-06 10:30:13
  from "D:\html\wamp\www\eatapp\template\admin\commodity.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595df5152c4b59_90324656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db03f6d42feb8476134940adc547778891a8892' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\commodity.html',
      1 => 1499310735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595df5152c4b59_90324656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<style>
    #add{
        margin-top:10px;
        margin-left:10px;
    }
     .img{
         width:100px;
     }
    #shopName{
        width:20%;
        display: inline-block;
    }
    .width{
        width:40%;
    }
</style>
<body>
<form action="index.php?m=admin&f=commodity&a=lists" id="add" method="post">
    <select name="" id="">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
" name="lid">--<?php echo $_smarty_tpl->tpl_vars['v']->value['lname'];?>
--</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <input type="text" name="lname" placeholder="添加分类">
    <input type="submit" value="添加">
</form>
分类／价格／图片／购买量／属于哪个店铺／简介／收藏／
<br>表commodity cid cname cprice cimg sid cnotes clike cbuy(购买量) ccid(分类) crec(推荐) keywords

<form action="index.php?m=admin&f=commodity&a=add" method="post">
    <select name="ccid" >
        <label for="disabledTextInput">所属分类</label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
" name="ccid">--<?php echo $_smarty_tpl->tpl_vars['v']->value['lname'];?>
--</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <div class="form-group">
        <label for="disabledTextInput">商品名</label>
        <input type="text" id="cname" class="form-control" name="cname"  value="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">价格</label>
        <input type="text" class="form-control width" value="" name="cprice">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">简介</label>
        <input type="text" class="form-control width" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['snotes'];?>
" name="cnotes">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">关键词</label>
        <input type="text" class="form-control width" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['snotes'];?>
" name="keywords">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">推荐</label>
        <input type="radio" name="crec"  value="1" checked>
        推荐
        <input type="radio" name="crec" value="0" checked>
        不推荐
    </div>
    <div class="form-group" id="change">
        <input type="hidden" class="inputImg" name="cimg" value="1">
        <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
    </div>
    <button type="submit" class="btn btn-default">添加</button>
</form>
<label for="exampleInputPassword1">添加缩略图</label>
</body>
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
