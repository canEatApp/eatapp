<?php
/* Smarty version 3.1.30, created on 2017-07-14 07:42:33
  from "D:\YEK\tool\wamp\www\eatapp\template\index\zhc-shop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596859c94a1467_97914332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe9bfb93d29a532bbde90c9e4c93d798058ba9f2' => 
    array (
      0 => 'D:\\YEK\\tool\\wamp\\www\\eatapp\\template\\index\\zhc-shop.html',
      1 => 1500010950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596859c94a1467_97914332 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title></title>
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
/angular.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iscroll.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zhc-shop.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/zhc-shop.css"/>
	<body ng-app="myapp" ng-controller="ctrl">
		<header>
			<div class="top">
				<a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/zhc-img/images/icon_03.png"></a>
				<a href="javascript:;"><img src="<?php echo IMG_PATH;?>
/zhc-img/images/icon_05.png"></a>
			</div>
			<div class="bottom">
				<div class="hblt">
					<div class="back">
						<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/shophead_10.png" alt="" /></div>
					</div>
				</div>
				<div class="hbgt">
					<p><?php echo $_smarty_tpl->tpl_vars['shopname']->value;?>
</p>
					<div class="addrssbox">
						<img src="<?php echo IMG_PATH;?>
/zhc-img/images/icon_10.png" alt="" />
						<div class="words">
							<div class="tiao"></div>
							<div class="english"><?php echo $_smarty_tpl->tpl_vars['english']->value;?>
</div>
						</div>
					</div>
					<div class="where">
						<div class="km">0.3km</div>
						<div class="time">46min</div>
						<div class="money">
							<span><?php echo $_smarty_tpl->tpl_vars['srules']->value;?>
</span>
							<span>RMB</span>
						</div>
						<div class="song">起送</div>
					</div>
					<div class="starbox">
						<div class="stars">
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/star_24.png" alt="" />
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/star_24.png" alt="" />
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/star_24.png" alt="" />
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/star_24.png" alt="" />
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/star_24.png" alt="" />
						</div>
						<div class="num">5.0</div>
					</div>
					<div class="minusbox">
						<div class="minus">减</div>
						<div class="p">满44元减1；满88减3；满188减6</div>
					</div>
				</div>
			</div>
		</header>
		<section class="zhc_mess">
			<div class="p_mess"><span><?php echo $_smarty_tpl->tpl_vars['snotes']->value;?>
</span></div>
			<div class="btn_box">
				<div class="btn_boxs">
					<button type="button" class="active">订餐</button>
					<button type="button">评价</button>
				</div>
			</div>
		</section>
		<main>
			<article class="dingdan block">
				<!--这里是商品的分类-->
				<ul class="lt_list">
					<!--<li class="active"></li>-->
					<li  ng-repeat="item in shop" ng-bind="item.slname" id="{{item.slid}}" ng-class="{'active':item.slid==='1'}" ng-click="click(item.slid)"></li>
					<!--<li>新品</li>-->
					<!--<li>推荐</li>-->
					<!--<li>炒菜</li>-->
					<!--<li>凉菜</li>-->
					<!--<li>主食</li>-->
				</ul>

				<section class="shopbigbox">
					<!--这里是商品列表-->
					<section class="container conblock">
						<ul class="gt_list">
							<li ng-repeat="item in shopping">
								<div class="img_box" id="{{item.coid}}">
									<img src="<?php echo IMG_PATH;?>
{{item.coimg}}"/>
								</div>
								<div class="word_box">
									<div class="title">{{item.coname}}</div>
									<div class="stars_box">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/stats_18.png"/>
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/stats_18.png"/>
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/stats_18.png"/>
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/stats_18.png"/>
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/stats_18.png"/>
									</div>
									<div class="tiaos"></div>
									<div class="money_box">
										<span>{{item.coprice}}</span>
										<span>RMB</span>
									</div>
									<div class="num">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/dot_25.png" alt="" />
										<span>366单</span>
									</div>
								</div>
								<div class="add">
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/jian_03.png" coid="{{item.coid}}"   class="jian"/>
									<input type="text" value="0"/>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/add_21.png" coid="{{item.coid}}" class="jia"/>
								</div>
							</li>
						</ul>
					</section>

				</section>

			</article>
			
			<article class="pingjia">
				<section class="containers">
					<ul>
						<li>
							<div class="lt_head">
								<a href="">
									<div class="lt_head_imgbox">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlunhead_03.png" alt="" />
									</div>
								</a>
							</div>
							<div class="gt_word">
								<div class="gt_word_title">
									<span>ecological food</span>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/new_03.png" alt="" />
								</div>
								<div class="gt_word_p">这就是生活所以说愁眉苦脸的日子</div>
								<div class="tiaoss"></div>
								<div class="gt_btn">
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_10.png" alt="" /><span>333</span></div>
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_07.png" alt="" /><span>333</span></div>
								</div>
							</div>
						</li>
						<li>
							<div class="lt_head">
								<a href="">
									<div class="lt_head_imgbox">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlunhead_03.png" alt="" />
									</div>
								</a>
							</div>
							<div class="gt_word">
								<div class="gt_word_title">
									<span>ecological food</span>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/new_03.png" alt="" />
								</div>
								<div class="gt_word_p">这就是生活所以说愁眉苦脸的日子</div>
								<div class="tiaoss"></div>
								<div class="gt_btn">
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_10.png" alt="" /><span>333</span></div>
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_07.png" alt="" /><span>333</span></div>
								</div>
							</div>
						</li>
						<li>
							<div class="lt_head">
								<a href="">
									<div class="lt_head_imgbox">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlunhead_03.png" alt="" />
									</div>
								</a>
							</div>
							<div class="gt_word">
								<div class="gt_word_title">
									<span>ecological food</span>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/new_03.png" alt="" />
								</div>
								<div class="gt_word_p">这就是生活所以说愁眉苦脸的日子</div>
								<div class="tiaoss"></div>
								<div class="gt_btn">
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_10.png" alt="" /><span>333</span></div>
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_07.png" alt="" /><span>333</span></div>
								</div>
							</div>
						</li>
						<li>
							<div class="lt_head">
								<a href="">
									<div class="lt_head_imgbox">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlunhead_03.png" alt="" />
									</div>
								</a>
							</div>
							<div class="gt_word">
								<div class="gt_word_title">
									<span>ecological food</span>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/new_03.png" alt="" />
								</div>
								<div class="gt_word_p">这就是生活所以说愁眉苦脸的日子</div>
								<div class="tiaoss"></div>
								<div class="gt_btn">
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_10.png" alt="" /><span>333</span></div>
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_07.png" alt="" /><span>333</span></div>
								</div>
							</div>
						</li>
						<li>
							<div class="lt_head">
								<a href="">
									<div class="lt_head_imgbox">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlunhead_03.png" alt="" />
									</div>
								</a>
							</div>
							<div class="gt_word">
								<div class="gt_word_title">
									<span>ecological food</span>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/new_03.png" alt="" />
								</div>
								<div class="gt_word_p">这就是生活所以说愁眉苦脸的日子</div>
								<div class="tiaoss"></div>
								<div class="gt_btn">
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_10.png" alt="" /><span>333</span></div>
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_07.png" alt="" /><span>333</span></div>
								</div>
							</div>
						</li>
						<li>
							<div class="lt_head">
								<a href="">
									<div class="lt_head_imgbox">
										<img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlunhead_03.png" alt="" />
									</div>
								</a>
							</div>
							<div class="gt_word">
								<div class="gt_word_title">
									<span>ecological food</span>
									<img src="<?php echo IMG_PATH;?>
/zhc-img/images/new_03.png" alt="" />
								</div>
								<div class="gt_word_p">这就是生活所以说愁眉苦脸的日子</div>
								<div class="tiaoss"></div>
								<div class="gt_btn">
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_10.png" alt="" /><span>333</span></div>
									<div><img src="<?php echo IMG_PATH;?>
/zhc-img/images/pinlun_07.png" alt="" /><span>333</span></div>
								</div>
							</div>
						</li>
					</ul>
				</section>
			</article>
		</main>
		<footer>
			<img src="<?php echo IMG_PATH;?>
/zhc-img/images/shopcar_42.png" class="car"/>
			<div class="info">
				<div class="summon">
					<span id="sum">0.00</span>
					<span>RMB</span>
				</div>
				<div class="mess">另需
					<span>{{num}}圆</span>
					配送费用
				</div>
			</div>
			<div class="btn">
				<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
				<a class="sub" href="javascript:;">
					<img src="<?php echo IMG_PATH;?>
/zhc-img/images/btn_46.png" alt="" />
				</a>
				<?php } else { ?>
				<a class="subs" href="javascript:;">
					<img src="<?php echo IMG_PATH;?>
/zhc-img/images/btn_46.png" alt="" />
				</a>
				<?php }?>
			</div>
		</footer>
		<?php echo '<script'; ?>
>
            angular.module('myapp', [])
                .controller('ctrl', function($scope,$http) {

                    var shoparr=[];
                    var obj={};
                    var sum;
					first();
                    myScroll = new IScroll('.container', {
                        mouseWheel: true,
                        scrollX: true,
                        shrinkScrollbars: 'scale',
                        fadeScrollbars: true,
                        click: true
                    });
                    $scope.nub=0;
                    $scope.num="叁";
                    $(document).queue('fx',function () {
						$http({
							method:"POST",
							url:'index.php?m=index&f=shop&a=info',
						}).then(function (e) {
							$scope.shop=e.data;
							$(document).dequeue();
						})
                    })


//					页面刷新 默认出来第一页
					function first(){
                        gitid(1)
					}

// 点击左边列表         iscroll不会动  默认显示第一个
                    $scope.click=function (id) {

                        gitid(id)

                    }

                    // 点击左列表获取点击的ID 传到后台取相应的数据
                    function gitid(id) {
                        $http({
							method:"POST",
							data:"id="+id,
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            url:'index.php?m=index&f=shop&a=shopclass',
                        }).then(function successCallback(e) {
							$scope.shopping=e.data;
                            myScroll = new IScroll('.container', {
                                mouseWheel: true,
                                scrollX: true,
                                shrinkScrollbars: 'scale',
                                fadeScrollbars: true,
                                click: true
                            });
                        })
                        setTimeout(function () {
                            myScroll.refresh();
                        }, 100);

                    }
//                    点击加号



//				减
					$('.gt_list').on("touchend",".jian",function () {
						var coid=$(this).attr("coid");
						var imgid=$(this).parent().parent().children(".img_box").attr("id")
						if(coid==imgid){
						    var input=$(this).parent().children('input');
						    var num=parseInt(input.val());
						    if(input.val()<=0){
                                input.val(0)
							}else {
                                input.val(num-1)
//								$scope.nums=num-1
                            }
						}
                    })
//				加
					var sums;
                    $('.gt_list').on("touchend",".jia",function () {
                        var coid=$(this).attr("coid");
                        var imgid=$(this).parent().parent().children(".img_box").attr("id")
						var price=parseInt($(this).parent().parent().children(".word_box").children(".money_box").children().html())
						if(coid==imgid){
                            var input=$(this).parent().children('input');
                            var num=parseInt(input.val());
                            var value=parseInt(input.val(num+1).val());
                            obj.id=coid;
                            obj.price=price;
                            obj.num=value;
							shoparr.push(obj)
							for (var i=0;i<shoparr.length;i++){
							    sums=(shoparr[i].num)*shoparr[i].price
							}
                            $(".info .summon #sum").html(sums)
                        }

                    })

					$(".btn .subs").on("touchend",function () {
                        location.href="index.php?m=index&f=index&a=mode"
                    })
					$('.btn .sub').on("touchend",function () {
                        var id=shoparr[shoparr.length-1].id;
                        var num=shoparr[shoparr.length-1].num;
                        var price=shoparr[shoparr.length-1].price;
						$.ajax({
							url:"index.php?m=index&f=buy&a=data",
							data:{ id:id,num:num },
							type:"post",
							success:function (data) {
								if(data=="ok"){
								    location.href="index.php?m=index&f=buy&a=info"
								}else {
								    console.log(data)
								}
                            }
						})
                    })

                });
            window.onload=function(){

//                -----------------------------------------


				$('.lt_list').delegate("li","touchend",function () {
                    $(this).addClass("active").siblings().removeClass("active");
                })
                $(".btn_boxs button").on("touchend",function(){
                    $(this).addClass("active").siblings().removeClass('active');
                    $('main article').eq($(this).index()).addClass("block").siblings().removeClass("block")
                    yourScroll = new IScroll('.containers', {
                        mouseWheel: true,
                        scrollX:true,
                        shrinkScrollbars: 'scale',
                        fadeScrollbars: true,
                        click:true
                    });
                })

                $("header .top a").first().on("touchend",function(){
                    window.history.back();
                })
                myScroll = new IScroll('.container', {
                    mouseWheel: true,
                    scrollX: true,
                    shrinkScrollbars: 'scale',
                    fadeScrollbars: true,
                    click: true
                });

            }
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
