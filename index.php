<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/22
 * Time: 下午3:41
 */

//定义进入指令
define("COMMING","OK");
$server=$_SERVER;
$http=substr($server["SERVER_PROTOCOL"],0,strpos($server["SERVER_PROTOCOL"],"/"));//获取http协议 SERVER_PROTOCOL
$server["HTTP_HOST"];//获取域名 HTTP_HOST  服务器路径
define("REQUEST_URL",substr($server["REQUEST_URI"],0,strrpos($server["REQUEST_URI"],"/")));//REQUEST_URI 项目路径
define("HOST_PATH",$http."://".$server["HTTP_HOST"].REQUEST_URL);
//根目录
define("ROOT_PATH",$server["DOCUMENT_ROOT"]);
define("APP_PATH",ROOT_PATH."/eatapp");
//模块目录
define("MODULE_PATH",APP_PATH."/module");
//引擎文件
define("LIBS_PATH",APP_PATH."/libs/");
//模版目录
define("TEM_PATH",APP_PATH."/template／");
//css／js/img路径
define("CSS_PATH",HOST_PATH."/static/css");
define("JS_PATH",HOST_PATH."/static/js");
define("IMG_PATH",HOST_PATH."/static/img");

define("SELF_PATH",$http."://".$server["HTTP_HOST"].$server["SCRIPT_NAME"]);
header("content-type:text/html,charset=utf-8");
include LIBS_PATH."function.class.php";
include_once LIBS_PATH."checkimg.php";
include LIBS_PATH."route.php";  //路由
include_once LIBS_PATH."db.php";//数据库操作
//include_once LIBS_PATH."smarty.class.php";//自己写的smarty
include_once LIBS_PATH."smarty/Smarty.class.php";//模版引擎
include_once LIBS_PATH."session.class.php";//session操作
include_once LIBS_PATH."main.class.php";//admin主类
include_once LIBS_PATH."indexmain.class.php";//index主类
include_once LIBS_PATH."upload.class.php";//前台换头像
include_once LIBS_PATH."page.class.php";//前台换头像
$obj=new route();
$obj->getInfo();