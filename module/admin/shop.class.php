<?php
class shop extends main{
    private $rid;
    private $sid;
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
        $time=date();
        $result=$db->insert("sname='{$sname}',spass='{$spass}',snotes='{$snotes}',saddress='{$saddress}',srecommed=0,simg='{$simg}',saudit=0,state=0,stime='{$time}'","shop");
        if($result>0){
            $this->sid=mysqli_insert_id();
            $this->jump("创建成功","m=admin&f=shop&a=adminShop");
        }
    }
    function adminShop(){
//        echo $this->session->get("uid");
        $db=new db();
        $upid=$this->session->get("uid");
        $result=$db->where("upid={$upid}")->select("shop");
        $this->smarty->assign("info",$result[0]);
//        $this->smarty->assign("rid","{$this->rid}");
        $this->smarty->display("adminShop.html");
    }
    function update(){
        $snotes=$_POST["snotes"];
        $saddress=$_POST["saddress"];
        $simg=$_POST["simg"];
        $upid=$this->session->get("uid");
        $db=new db();
        $time=date();
        if ($simg==1) {
            $result=$db->where("upid='{$upid}'")->update("snotes='{$snotes}',saddress='{$saddress}',stime='{$time}'","shop");
        }else{
            $result=$db->where("upid='{$upid}'")->update("snotes='{$snotes}',saddress='{$saddress}',stime='{$time}',simg='{$simg}'","shop");
        }
        if ($result>0){
            $this->jump("修改成功","m=admin&f=shop&a=adminShop");
        }else{
            $this->jump("修改失败/未做修改","m=admin&f=shop&a=adminShop");
        }
    }
    //店铺展示
    function showShop(){
        $db=new db();
        $result=$db->select("shop");
        $this->smarty->assign("arr",$result);
        $this->smarty->display("showShop.html");
    }
    //商品展示
    function showCom(){
        $id=$_GET["id"];
//        $db=new db();
//        $result=$db->where("sid={$id}")->select("commodity");
        $this->smarty->display("showcom.html");
    }
}