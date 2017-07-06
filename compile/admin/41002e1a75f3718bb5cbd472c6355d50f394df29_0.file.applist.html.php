<?php
/* Smarty version 3.1.30, created on 2017-07-06 04:32:55
  from "/Applications/MAMP/htdocs/eatapp/template/admin/applist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595da1575b4c96_53878863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41002e1a75f3718bb5cbd472c6355d50f394df29' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp/template/admin/applist.html',
      1 => 1499306993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595da1575b4c96_53878863 (Smarty_Internal_Template $_smarty_tpl) {
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
/uploadimg.js"><?php echo '</script'; ?>
>
</head>
<body>
<table style="margin-top: 10px; margin-left: 10px;">
    <tr style="font-size: 18px">
        <th style="width: 80px; text-align: center">缩略图</th>
        <th>分类名</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr style="text-align: center">
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['alimg'];?>
" style="width: 80px;" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["alname"];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<form method="post" action="index.php?m=admin&f=addRole&a=addAppList" id="form">
    <div class="form-group">
        <label for="exampleInputEmail1">分类名</label>
        <input type="text" class="form-control" name="alname" id="exampleInput" placeholder="分类名称">
    </div>
    <input type="hidden" class="inputImg" name="alimg" value="1">
    <button type="submit" class="btn btn-default">创建</button>
</form>
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
