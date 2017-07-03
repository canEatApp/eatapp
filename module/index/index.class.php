<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/22
 * Time: 下午4:54
 */
if(!COMMING){
    exit();
}
class index extends indexMain {
    function mode(){
//        $obj=new db();
//        $array=$obj->where("pass=123123")->select("friend","names");
//        var_dump($array);
//        $obj->del();
//        $smarty=new Smarty();   自己写的smarty未完成
//        $smarty->display();
//        $smarty=new Smarty_1();
//        $smarty->setCompileDir("compile");
//        $smarty->setTemplateDir("template");
//        $smarty->assign("str","str");
//        $smarty->display("index.html");
//        smarty引擎
        $this->smarty->display("index.html");


    }
    function bb(){
        echo "bb";
    }
    function load(){

    }

}