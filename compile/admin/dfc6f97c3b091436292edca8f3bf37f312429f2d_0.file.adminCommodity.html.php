<?php
/* Smarty version 3.1.30, created on 2017-07-06 10:30:13
  from "D:\html\wamp\www\eatapp\template\admin\adminCommodity.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595df5157ab350_45600433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfc6f97c3b091436292edca8f3bf37f312429f2d' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\admin\\adminCommodity.html',
      1 => 1499321465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595df5157ab350_45600433 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

<?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</body>
</html<?php }
}
