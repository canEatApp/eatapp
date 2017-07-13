<?php
/* Smarty version 3.1.30, created on 2017-07-10 03:54:14
  from "D:\html\wamp\www\eatapp\template\index\xx-person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962de461228d4_71677884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf9a54bf0df498265f92cdfd18bc494ab24c1186' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\index\\xx-person.html',
      1 => 1499651652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962de461228d4_71677884 (Smarty_Internal_Template $_smarty_tpl) {
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
/xx-person.css"/>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<body>
		<header>
			<a onclick="history.go(-1)"></a>
			<h2>Enjoy the food</h2>
			<h4>享受美食</h4>
		</header>
		<section>
			<div class="card">
				<p>个人名片</p>
				<h3>修改你的个人名片信息</h3>
			</div>
			<a href=""></a>
		</section>
		<section>
			<div class="card">
				<p>收货地址</p>
				<h3>填写你的收获地址</h3>
			</div>
			<a href=""></a>
		</section>
		<section>
			<div class="card">
				<p>通用</p>
				<h3>设置你的通用信息</h3>
			</div>
			<a href=""></a>
		</section>
		<a href="javascript:;" class="footer">
			<p>退出登录</p>
			<h5>Exitloginaccount</h5>
		</a>
	<div class="display"></div>
	</body>
</html>
<?php echo '<script'; ?>
>
    $(".footer").on('touchstart',function(){
        $.ajax({
            url:"index.php?m=index&f=qperson&a=logoutCon",
            success:function(e){
                console.log(e)
                if(e=="ok"){
                    $(".display").html('退出成功').css("display", "block");
                    setTimeout(function () {
                        $(".display").css("display", "none");
                        location.href="index.php";
                    }, 1500)
                }
            }
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
