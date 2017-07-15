<?php
/* Smarty version 3.1.30, created on 2017-07-14 03:12:49
  from "D:\YEK\tool\wamp\www\eatapp\template\index\xx-login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59681a911486c4_26575076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bb8fb2394d70e6fa38e886eff1f1e6f35667d3f' => 
    array (
      0 => 'D:\\YEK\\tool\\wamp\\www\\eatapp\\template\\index\\xx-login.html',
      1 => 1499854141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59681a911486c4_26575076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="x5-orientation" content="portrait | landscape" />
	<meta name="screen-orientation" content="portrait">
	<meta name="x5-fullscreen" content="true" />
	<meta name="full-screen" content="yes">
	<meta name="format-detection" content="telephone=no, email=no" />
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/common.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/xx-login.css"/>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xx-login.js"><?php echo '</script'; ?>
>
	<body>
		<header>
			<div class="begin">
				<a href=""></a>
				<a href="index.php?m=index&f=signin&a=sign"></a>
			</div>
			<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login04.png"/>
			<p>Jim.Green</p>
			<h3>this better  be beautiful</h3>
			<h4>美 x 食 x 汇</h4>
			<div class="logn">
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login05.png"/>
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login06.png" alt="" />
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login10.png"/>
			</div>
			<form class="number" id="infos">
				<p>Username</p>
				<input type="text" class="user" placeholder="您可以输入邮箱，手机号码作为登录名" />
				<input type="password" class="pass" placeholder="请输入密码" />
			</form>
		</header>
		<section class="find">
			<div></div>
			<p>find passwold</p>
			<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login11.png"/>
		</section>
		<section class="login loginone">
			<p>立即登陆</p>
			<p>login immediately</p>
		</section>
		<section class="login logintwo">
			<p>立即登陆</p>
			<p>login immediately</p>
		</section>
		<section class="outside">
			<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login07.png"/>
			<img src="<?php echo IMG_PATH;?>
/xx-img/xx-login09.png"/>
		</section>
	</body>
</html>
<?php echo '<script'; ?>
>
	$(".login").on("touchend",function () {
		let aa=$(".user").val()
		let bb=$(".pass").val()
		$.ajax({
			url:"index.php?m=index&f=login&a=logch",
			data:{
			    aa:aa,bb:bb
			},
			success:function (e) {
				if (e=="ok"){
				    location.href=""
				}
            }
		})
    })
<?php echo '</script'; ?>
><?php }
}
