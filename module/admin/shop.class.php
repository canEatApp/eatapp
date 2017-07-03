<?php
class shop extends main{
    function addShop(){
        $this->smarty->display("addShop.html");
    }
    function add (){
        $sname=$_POST["sname"];
        $spass=md5($_POST["spass"]);
        $snotes=$_POST["snotes"];
        $saddress=$_POST["saddress"];
        $simg=$_POST["simg"];
        $db=new db();
        $result=$db->insert("sname='{$sname}',spass='{$spass}',snotes='{$snotes}',saddress='{$saddress}',srecommed=0,simg='{$simg}',saudit=0,state=0","shop");
        if($result){
            $this->jump("创建成功","m=admin&f=shop&a=adminShop");
        }
    }
    function adminShop(){
        $this->smarty->display("adminShop.html");

    }
}