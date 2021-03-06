<?php
/* Smarty version 3.1.30, created on 2017-07-10 04:28:06
  from "D:\html\wamp\www\eatapp\template\index\qyh-person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962e6364ba1c5_06271310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1eaa9dddea23fe292a82673e158c75211c9ffed' => 
    array (
      0 => 'D:\\html\\wamp\\www\\eatapp\\template\\index\\qyh-person.html',
      1 => 1499653684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962e6364ba1c5_06271310 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
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
/qyh-person.css">
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
        <a href="index.php?m=index&f=qperson&a=xiuperson"><img src="<?php echo IMG_PATH;?>
/qyh-img/qg-bianji.png" alt=""></a>
        <div class="photo">
            <div class="a1"></div>
            <div class="a2"></div>
            <div class="a3">
                <a href="index.php?m=index&f=qperson&a=img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uimg'];?>
" alt="">
                </a>
                <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-huiyuan.png" alt="">
            </div>
        </div>
        <a href="index.php?m=index&f=qperson&a=logout"><img src="<?php echo IMG_PATH;?>
/qyh-img/qg-shezhi.png" alt=""></a>
    </div>
    <p class="name"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uiname'];?>
</p>
    <p class="like"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['unotes'];?>
</p>
    <div class="star">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-huangxin.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-huangxin.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-huangxin.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-banxin.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-baixin.png" alt="">
    </div>
    <div class="progress">
        <div></div>
    </div>
    <div class="honor">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-jiangbei.png" alt="">
        <span>··28,9010</span>
    </div>
    <div class="sign">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-qiandao.png" alt="">
        <span><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uisign'];?>
</span>
    </div>
</header>

<div class="content">
    <div class="header">
        <a href=""><img src="<?php echo IMG_PATH;?>
/qyh-img/qg-dizhi.png" alt=""><p>收货地址</p></a>
        <div></div>
        <a href=""><img src="<?php echo IMG_PATH;?>
/qyh-img/qg-qianbao.png" alt=""><p>零钱包</p></a>
        <div></div>
        <a href=""><img src="<?php echo IMG_PATH;?>
/qyh-img/qg-huangguan.png" alt=""><p>会员中心</p></a>
    </div>
    <div id="qyh-wrapper">
        <div id="scroller">
            <ul>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-shoucang.png" alt="">
                    <span>我的收藏</span>
                    <span>查看您的抽藏内容以及收藏管理</span>
                    <p>· 36</p>
                </li>
                <li class="foot">
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-lishi.png" alt="">
                    <span>我的足迹</span>
                    <span>查看您的浏览历史以及历史记录管理</span>
                    <p>· 116</p>
                    <div class="fenge"></div>
                    <div class="qyh-swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="q-back"></div>
                                <a href="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi.png" alt="">
                                </a>
                                <div class="dian dian1"></div>
                                <div class="dian dian2"></div>
                                <div class="q-shi">
                                    <div class="q-rgb">
                                        <p>￥58</p>
                                    </div>
                                    <div class="q-page">
                                        <p class="title">营养美食汇</p>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="" class="q-huo">
                                        <p class="etitle">NUTRITION CUISINE</p>
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

                                        <DIV class="q-name">
                                            <div class="left">
                                                <div class="q-img" style="background-image: url('<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png');"></div>
                                                <span>北京朝阳</span>
                                                <span>BEIJING ZHAOYANG</span>
                                            </div>

                                        </DIV>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-di.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="q-back"></div>
                                <a href="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi.png" alt="">
                                </a>
                                <div class="dian dian1"></div>
                                <div class="dian dian2"></div>
                                <div class="q-shi">
                                    <div class="q-rgb">
                                        <p>￥58</p>
                                    </div>
                                    <div class="q-page">
                                        <p class="title">营养美食汇</p>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="" class="q-huo">
                                        <p class="etitle">NUTRITION CUISINE</p>
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

                                        <DIV class="q-name">
                                            <div class="left">
                                                <div class="q-img" style="background-image: url('<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png');"></div>
                                                <span>北京朝阳</span>
                                                <span>BEIJING ZHAOYANG</span>
                                            </div>

                                        </DIV>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-di.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="q-back"></div>
                                <a href="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi.png" alt="">
                                </a>
                                <div class="dian dian1"></div>
                                <div class="dian dian2"></div>
                                <div class="q-shi">
                                    <div class="q-rgb">
                                        <p>￥58</p>
                                    </div>
                                    <div class="q-page">
                                        <p class="title">营养美食汇</p>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="" class="q-huo">
                                        <p class="etitle">NUTRITION CUISINE</p>
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

                                        <DIV class="q-name">
                                            <div class="left">
                                                <div class="q-img" style="background-image: url('<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png');"></div>
                                                <span>北京朝阳</span>
                                                <span>BEIJING ZHAOYANG</span>
                                            </div>

                                        </DIV>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-di.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="q-back"></div>
                                <a href="">
                                    <img src="<?php echo IMG_PATH;?>
/qyh-img/q-shi.png" alt="">
                                </a>
                                <div class="dian dian1"></div>
                                <div class="dian dian2"></div>
                                <div class="q-shi">
                                    <div class="q-rgb">
                                        <p>￥58</p>
                                    </div>
                                    <div class="q-page">
                                        <p class="title">营养美食汇</p>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-huo.png" alt="" class="q-huo">
                                        <p class="etitle">NUTRITION CUISINE</p>
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

                                        <DIV class="q-name">
                                            <div class="left">
                                                <div class="q-img" style="background-image: url('<?php echo IMG_PATH;?>
/qyh-img/q-shi1.png');"></div>
                                                <span>北京朝阳</span>
                                                <span>BEIJING ZHAOYANG</span>
                                            </div>

                                        </DIV>
                                        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-di.png" alt="">
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-geren.png" alt="">
                    <span>我的好友</span>
                    <span>查看您的好友及好友信息</span>
                    <p>· 36</p>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-xinfen.png" alt="">
                    <span>用户反馈</span>
                    <span>请将您的问题反馈给我们</span>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-jiantou.png" alt="">
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-money.png" alt="">
                    <span>消费记录</span>
                    <span>查看以往您的消费历史</span>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-jiantou.png" alt="">
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-jiameng.png" alt="">
                    <span>加盟合作</span>
                    <span>了解和加盟合作本软件</span>
                    <img src="<?php echo IMG_PATH;?>
/qyh-img/qg-jiantou.png" alt="">
                </li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <a href="index.php">
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
    <a href="">
        <img src="<?php echo IMG_PATH;?>
/qyh-img/q-geren.png" alt="">
        <p>我的</p>
    </a>
</footer>
</body>
</html><?php }
}
