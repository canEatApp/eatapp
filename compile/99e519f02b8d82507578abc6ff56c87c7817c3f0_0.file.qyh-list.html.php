<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:51:24
  from "D:\html\wamp\www\eatapp\template\index\qyh-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962ebac37a917_84199895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e519f02b8d82507578abc6ff56c87c7817c3f0' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\index\\qyh-list.html',
      1 => 1499655083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962ebac37a917_84199895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>列表页</title>
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
/swiper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iscroll.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qyh-list.css">
</head>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var myScroll = new IScroll('#qyh-wrapper', {
            bounceEasing: 'elastic',
            bounceTime: 1200 ,
            mouseWheel:true,
            scrollbars:false,
        });

        var swiper = new Swiper('.qyh-swiper-container', {
            pagination: '.swiper-pagination',
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides:false,
            slidesPerView: 'auto',
            spaceBetween : 40,
            coverflow: {
                rotate: 0,
                stretch: 20,
                depth: 0,
                modifier: 1,
                slideShadows : false
            },

        });
    })


<?php echo '</script'; ?>
>
<body>
<header>
    <a onclick="history.go(-1)"><img src="<?php echo IMG_PATH;?>
/qyh-img/q-back.png" alt=""></a>
    <div class="header">
        <p><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['lname'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['lename'];?>
</p>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <a href="index.php?f=qperson&a=person"><img src="<?php echo IMG_PATH;?>
/qyh-img/q-mess.png" alt=""></a>
</header>
<div id="qyh-wrapper">
    <div id="scroller">
        <div class="q-banner">
            <div class="img">
                <!--<img src="<?php echo IMG_PATH;?>
/qyh-img/q-xin.png" alt="">-->
                <div class="q-gg"></div>
                <div class="q-dian"></div>
                <p>当下热门</p>
                <p>THE CURRENY POPULAR</p>
                <div class="q-dian"></div>
                <div class="q-gg"></div>
            </div>
            <div class="qyh-swiper-container">
                <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['sid'] == $_smarty_tpl->tpl_vars['val']->value['sid']) {?>
                    <div class="swiper-slide">

                        <div class="q-back"></div>
                        <a href="">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['coimg'];?>
" alt="">
                        </a>
                        <div class="dian dian1"></div>
                        <div class="dian dian2"></div>
                        <div class="q-shi">
                            <div class="q-rgb">
                                <p>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['coprice'];?>
</p>
                            </div>
                            <div class="q-page">
                                <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['coname'];?>
</p>
                                <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="" class="q-huo">
                                <p class="etitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['coename'];?>
</p>
                                <div class="star">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                </div>
                                <img src="<?php echo IMG_PATH;?>
/qyh-img/q-zan.png" alt="" class="q-zan">
                                <div class="q-bianqian">
                                    <span> 会吃专送</span>
                                    <span> 新店</span>
                                </div>
                                <div class="q-name">
                                    <div class="left">
                                        <div class="q-img" style="background-image: url('<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png');"></div>
                                        <span><?php echo $_smarty_tpl->tpl_vars['val']->value['sname'];?>
</span>
                                        <span><?php echo $_smarty_tpl->tpl_vars['val']->value['sename'];?>
</span>
                                    </div>
                                    <div class="right">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png" alt="">
                                    </div>

                                </div>
                                <img src="<?php echo IMG_PATH;?>
/qyh-img/q-di.png" alt="">
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
        <div class="q-xin">
            <div class="img">
                <!--<img src="<?php echo IMG_PATH;?>
/qyh-img/q-xin.png" alt="">-->
                <div class="q-gg"></div>
                <div class="q-dian"></div>
                <p>新品推荐</p>
                <p>THE CURRENY POPULAR</p>
                <div class="q-dian"></div>
                <div class="q-gg"></div>
            </div>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['sid'] == $_smarty_tpl->tpl_vars['val']->value['sid']) {?>
                <li>
                    <a href="">
                        <div class="q-con">
                            <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hot.png" alt="">
                            <!--<div class="q-time"></div>-->
                            <div class="q-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['coimg'];?>
" alt="">

                                <div></div>
                            </div>
                            <div class="right">
                                <p class="q-title">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="">
                                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['coname'];?>
</span>
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="">
                                </p>
                                <p class="q-yu">已有126人预订</p>
                                <div class="q-star">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huixin.png" alt="">
                                </div>
                                <div class="q-con">
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['conote'];?>
…
                                </div>
                            </div>

                            <div class="q-per">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['coprice'];?>
起</div>
                        </div>
                        <div class="q-di">
                            <div>
                                <img src="<?php echo IMG_PATH;?>
/qyh-img/q-taoxin.png" alt="">
                                <span>315</span>
                            </div>
                            <div>
                                <img src="<?php echo IMG_PATH;?>
/qyh-img/q-time.png" alt="">
                                <span>18:00PM-23:00PM</span>
                            </div>
                            <div>
                                <img src="<?php echo IMG_PATH;?>
/qyh-img/q-ress.png" alt="">
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['saddress'];?>
</span>
                            </div>
                        </div>

                    </a>

                </li>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>


    </div>
</div>
</body>
</html><?php }
}
