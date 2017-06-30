<?php
/* Smarty version 3.1.30, created on 2017-06-28 11:14:33
  from "/Applications/MAMP/htdocs/mvc/template/admin/main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59537379efa960_09865202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea0d37c245146863650fd0329305be9e68225871' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc/template/admin/main.html',
      1 => 1498641009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59537379efa960_09865202 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/admin/main.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>

<section id="title">
    <h1>后台管理系统</h1>
    <p><span><a href="index.php?m=index&f=index" style="color: #ffffff;">进入主页 </a> </span><span><?php echo '<?php ';?>echo date("Y-m-d")<?php echo '?>';?> </span> 欢迎 &nbsp;<?php echo '<?php ';?>echo $user<?php echo '?>';?><a href="index.php?m=admin&f=login&a=out">退出登录</a></p>
</section>
<section id="main">
    <ul id="box">
        <li>
            <span>角色管理</span>
            <ul >
                <li>
                    <a href="index.php?m=admin&f=addRole" target="window">管理角色</a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=addRole&a=add" target="window">添加角色</a>
                </li>
            </ul>
        </li>
        <li>
            <span>栏目管理</span>
            <ul>
                <li>
                    <a href="" target="window">添加栏目</a>
                </li>
                <li>
                    <a href="" target="window">管理栏目</a>
                </li>
            </ul>
        </li>
        <li>
            <span>内容管理</span>
            <ul>
                <li><a href="" target="window">添加内容</a></li>
            </ul>
        </li>
        <li>
            <span>用户管理</span>
            <ul>
                <li>
                    <a href="" target="window">留言管理</a>
                </li>
                <li>
                    <a href="" target="window">用户管理</a>
                </li>

            </ul>
        </li>
    </ul>

    <iframe src="welcome.html" frameborder="0" name="window">

    </iframe>
</section>
</body>
<?php echo '<script'; ?>
>
    $('#box >li >span').click(function () {
        $(this).next('ul').slideToggle('fast');
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
