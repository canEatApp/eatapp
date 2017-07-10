<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:10:29
  from "D:\html\wamp\www\eatapp\template\index\qyh-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59619ea539e3b1_08429845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098d6b8ca8d4cd1a516ac2496ee8cac93d53cfe2' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\index\\qyh-index.html',
      1 => 1499569827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59619ea539e3b1_08429845 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
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
/qyh-index.css">
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
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            autoplay : 3000,
            coverflow: {
                rotate: 0,
                stretch: -20,
                depth: 200,
                modifier: 1,
                slideShadows : false
            }
        });
    })


<?php echo '</script'; ?>
>


<body>
<header>
    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-2_01.png" alt="" id="q-1">

    <div class="q-search">
        <input type="text" placeholder="SEARCH THE···" name="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hua.png" alt="">
    </div>
    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-er.png" alt="" id="q-2">
    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-yun.png" alt="" id="q-3">
</header>
<div id="qyh-wrapper">
    <div id="scroller">
        <nav>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&f=index&a=lists&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['limg'];?>
" alt="">
            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['lname'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['lename'];?>
</p>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <div class="q-point"></div>
            <div class="q-point"></div>
        </nav>
        <div class="q-banner">
            <div class="q-zhao"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunbo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="swiper-slide">
                        <a href="index.php?m=index&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simg'];?>
" alt="">
                        </a>
                        <div class="mess">
                            <img src="<?php echo IMG_PATH;?>
/qyh-img/q-5.png" alt="">
                            <div class="right">
                                <div class="q-p">
                                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['v']->value['sename'];?>
</span>
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="">
                                    <div class="star">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-hongxin.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huixin.png" alt="">
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huixin.png" alt="">
                                    </div>
                                </div>
                                <div class="q-time">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-time.png" alt="">
                                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['v']->value['senotes'];?>
</span>

                                </div>
                            </div>


                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
        <div class="q-like">
            <div class="img">
                <div class="q-gg"></div>
                <div class="q-dian"></div>
                <p>猜你喜欢</p>
                <p>THE CURRENY POPULAR</p>
                <div class="q-dian"></div>
                <div class="q-gg"></div>
            </div>
            <ul>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['like']->value, 'v');
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
                    <div class="q-back"></div>
                    <a href="index.php?coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">
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
                            <DIV class="q-name">
                                <div class="left">
                                    <!--<div class="q-img" style="background-image: url('<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png');"></div>-->
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

                            </DIV>
                            <img src="<?php echo IMG_PATH;?>
/qyh-img/q-di.png" alt="">
                        </div>
                    </div>
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
<footer>
    <a href="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-guan.png" alt="">
        <p>推荐</p>
    </a>
    <div></div>
    <a href="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-eye.png" alt="">
        <p>同步</p>
    </a>
    <div></div>
    <a href="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-order.png" alt="">
        <p>订单</p>
    </a>
    <div></div>
    <a href="index.php?m=index&f=qperson&a=person">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-geren.png" alt="">
        <p>我的</p>
    </a>
</footer>
</body>
</html><?php }
}
