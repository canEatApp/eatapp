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
        session_start();
        $_SESSION['id']=$_POST['id'];
        $_SESSION['num']=$_POST['num'];
//        echo $_SESSION['id'];
            echo "ok";

    }
    function info(){
        session_start();
//        echo $_SESSION['id'];
        $db=new db2("commodity");
        $result=$db->where("coid={$_SESSION['id']}")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->assign("num",$_SESSION['num']);
        $this->smarty->display("zhc-buy.html");
    }
}