<?php
/* Smarty version 3.1.30, created on 2017-07-09 18:17:39
  from "C:\wamp\www\eatapp\template\index\xx-signin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962572342fde6_91081587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f14d7244f29ae5ee45f9cc3814d389a23b88a3a3' => 
    array (
      0 => 'C:\\wamp\\www\\eatapp\\template\\index\\xx-signin.html',
      1 => 1499617057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962572342fde6_91081587 (Smarty_Internal_Template $_smarty_tpl) {
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
/xx-signin.css"/>
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
/jquery.validate.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xx-signin.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xx-signins.js"><?php echo '</script'; ?>
>
	<body>
		<header>
			<a href="index.php?m=index&f=login&a=log"></a>
			<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin01.png"/>
			<div>
				<span>美食汇</span>
				<div></div>
				<span>欢迎您的加入</span>				
			</div>
			<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin02.png"/>
			<h2>
				WELCOME TO food
			</h2>
			<h4>sometimes people have to cope with</h4>
			<h4>many mistakes</h4>
		</header>
		<form  id="infos">
			<input type="text" name="username" id="phonebtn" placeholder="设置您的用户名"/>
			<input type="text" name="nums" placeholder="填写您的手机号  后期无法修改"/>		
			<input type="text" name="ver" placeholder="填写验证码"/>				
			<input type="password" name="pass" placeholder="设置六位密码 包含英文和数字"/>
			<input type="password" name="pass" placeholder="再次输入密码"/>			
			<div class="user">
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin04.png"/>
			</div>
			<div class="phone">
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin05.png"/>
			</div>
			<div class="verfi">
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin06.png"/>
			</div>
			<div class="pass">
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin07.png"/>
			</div>
			<div class="again">
				<img src="<?php echo IMG_PATH;?>
/xx-img/xx-signin07.png"/>
			</div>
			<label class="err">两次输入的密码不一致</label>
			<div class="submit">
				<p>下一步</p>
				<h4>Thenextstep</h4>
			</div>
		</form>
	</body>

</html>
<?php }
}
