<?php
class commodity extends main{

    function mode(){
        $db=new db();
        $result=$db->select("lists");
        $this->smarty->assign("arr",$result);
        $this->smarty->assign("uid",$this->session->get("uid"));
        $this->smarty->display("commodity.html");
    }

    function admin(){

    }

    function lists(){
        $upid=$this->session->get("uid");
        $lname=$_POST["lname"];
        echo $this->session->get("uid");
//        $db=new db();
//        $sid=$db->where("upid='{$upid}'")->select("shop");
//        $result=$db->insert("lname='{$lname}',sid='{$sid[0]["sid"]}'","lists");
//        if ($result>0){
//            $this->jump("添加成功","m=admin&f=commodity");
//        }else{
//            $this->jump("添加失败","m=admin&f=commodity&a=");
//        }

    }
    function add(){

    }
}


?>