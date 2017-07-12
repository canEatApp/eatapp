<?php
/**
 * Created by PhpStorm.
 * User: ZHC
 * Date: 2017/7/7
 * Time: 15:06
 */
if(!COMMING){
    exit();
}
class buy extends indexMain{
    function data(){
        $_SESSION['id']=$_POST['id'];
        $_SESSION['num']=$_POST['num'];
            echo "ok";

    }
    function info(){
        $db=new db2("commodity");
        $result=$db->where("coid={$_SESSION['id']}")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->assign("num",$_SESSION['num']);
//        订单号
        $danhao=mt_rand(10,20).time();
        $this->smarty->assign("danhao",$danhao);
//        收获地址
        $this->session->set("user","张三");
        $dbs=new db2("userinfo");
        $results=$dbs->where("uiname='{$_SESSION['user']}'")->setField("uaddress")->select();

        $this->smarty->assign("address",$results[0]['uaddress']);
        $this->smarty->display("zhc-buy.html");
    }
}