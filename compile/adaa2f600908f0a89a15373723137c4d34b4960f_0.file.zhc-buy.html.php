<?php
/* Smarty version 3.1.30, created on 2017-07-12 08:35:06
  from "D:\YEK\tool\wamp\www\eatapp\template\index\zhc-buy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965c31a36ded4_96690001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adaa2f600908f0a89a15373723137c4d34b4960f' => 
    array (
      0 => 'D:\\YEK\\tool\\wamp\\www\\eatapp\\template\\index\\zhc-buy.html',
      1 => 1499841304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965c31a36ded4_96690001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>buy</title>
	</head>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/common.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iscroll.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/common.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zhc-buy.css" />
	<body>
		<header>
			<img src="<?php echo IMG_PATH;?>
/zhc-img/images/icon_03.png" alt="" />
			<img src="<?php echo IMG_PATH;?>
/zhc-img/images/buyhead_03.png" alt="" />
			<img src="<?php echo IMG_PATH;?>
/zhc-img/images/buyhead_05.png" alt="" />
		</header>
		<main class="container">
			
		
			<section>
				<ul class="list">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<li>
					<div class="img_box">
						<img src="<?php echo IMG_PATH;?>
/zhc-img/images/food_14.png"/>
					</div>
					<div class="word_box">
						<div class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['coname'];?>
</div>
						<div class="buybox">
							<div class="buyboxs1">
								<input type="text" name="num" value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
"/>
							</div>
							<div class="buyboxs">
								<div class="tiaos"></div>
								<div class="buymoney">
									<img src="<?php echo IMG_PATH;
echo $_smarty_tpl->tpl_vars['v']->value['coimg'];?>
" alt="" />
									<span>558</span>
									<span><?php echo $_smarty_tpl->tpl_vars['v']->value['coprice'];?>
RMB</span>
								</div>
							</div>
						</div>
					</div>
					<div class="buy_money">
						<?php echo $_smarty_tpl->tpl_vars['v']->value['coprice'];?>

					</div>
				</li>
				<!--<li>-->
					<!--<div class="img_box">-->
						<!--<img src="<?php echo IMG_PATH;?>
/zhc-img/images/food_14.png"/>-->
					<!--</div>-->
					<!--<div class="word_box">-->
						<!--<div class="title">Noodleswithgravy</div>-->
						<!--<div class="buybox">-->
							<!--<div class="buyboxs1">-->
								<!--<input type="text" name="num" value="01"/>-->
							<!--</div>-->
							<!--<div class="buyboxs">-->
								<!--<div class="tiaos"></div>-->
								<!--<div class="buymoney">-->
									<!--<img src="<?php echo IMG_PATH;?>
/zhc-img/images/buy_03.png" alt="" />-->
									<!--<span>558</span>-->
									<!--<span>33.00RMB</span>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->
					<!--<div class="buy_money">-->
						<!--33.00-->
					<!--</div>-->
				<!--</li>-->
				<!--<li>-->
					<!--<div class="img_box">-->
						<!--<img src="<?php echo IMG_PATH;?>
/zhc-img/images/food_14.png"/>-->
					<!--</div>-->
					<!--<div class="word_box">-->
						<!--<div class="title">Noodleswithgravy</div>-->
						<!--<div class="buybox">-->
							<!--<div class="buyboxs1">-->
								<!--<input type="text" name="num" value="01"/>-->
							<!--</div>-->
							<!--<div class="buyboxs">-->
								<!--<div class="tiaos"></div>-->
								<!--<div class="buymoney">-->
									<!--<img src="<?php echo IMG_PATH;?>
/zhc-img/images/buy_03.png" alt="" />-->
									<!--<span>558</span>-->
									<!--<span>33.00RMB</span>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->
					<!--<div class="buy_money">-->
						<!--33.00-->
					<!--</div>-->
				<!--</li>-->
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ul>
			<section class="sum">
				<div class="buy_money">
					<div class="number">
						<span>89.00</span>
						<span>RMB</span>
					</div>
					<div class="jian">
						<p>
							<span>..</span>
							<span>35.00</span>
						</p>
						<p>系统已自动为您减价</p>
					</div>
				</div>
			</section>
			<article class="dingdanmess">
				<ul>
					<li class="dingdanhao">
						<?php echo $_smarty_tpl->tpl_vars['danhao']->value;?>

					</li>
					<li class="active">
						<div>即刻配送</div>
					</li>
					<li class="times">
						<div>15:30</div>
					</li>
					<li class="address">
						<p><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
						<img src="<?php echo IMG_PATH;?>
/zhc-img/images/more_06.png" alt="" />
					</li>
					<li class="zhifu">
						<div>货到付款</div>
					</li>
					<li class="zfbtn">
						<a href="zhc-per.html">
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/buybtn_14.png" alt="" />
						</a>
					</li>
				</ul>
			</article>
			</section>
		</main>
	</body>
</html>
<?php echo '<script'; ?>
>
	window.onload=function(){



	    var num=parseInt($(".buyboxs1 input").val())*parseInt($('.buy_money').text())-parseInt($(".jian p span").last().text());
	    $('.number span').first().html(num)
		myScroll = new IScroll('.container', {
		        mouseWheel: true,
		        scrollX:true,
		        shrinkScrollbars: 'scale',
		        fadeScrollbars: true,
		   });
		   $("header img").first().on("touchend",function(){
		   		window.history.back();
		   })
	}
<?php echo '</script'; ?>
><?php }
}
