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
        $this->session->get("uid");
        $db=new db();
        $result=$db->select("shop","sid");
        if ($result){
            $sid=$result[0]["sid"];
        }
        $this->smarty->assign("sid",$sid);
        $result=$db->where("sid=".$sid)->select("lists");
        if ($result){
            $this->smarty->assign("lists",$result);
        }

        $this->smarty->display("adminCommodity.html");

    }

    function lists(){
        $upid=$this->session->get("uid");
        $lname=$_POST["lname"];
        $db=new db();
        $sid=$db->where("upid='{$upid}'")->select("shop");
        $result=$db->insert("lname='{$lname}',sid='{$sid[0]["sid"]}'","lists");
        if ($result>0){
            $this->jump("添加成功","m=admin&f=commodity");
        }else{
            $this->jump("添加失败","m=admin&f=commodity");
        }
    }
    function add(){
        $uid=$_POST["uid"];
        $db=new db();
        $result=$db->where("upid=".$uid)->select("shop","sid");
        //获取商铺id
        if ($result){
            $sid=$result[0]["sid"];
        }
        //获取商品信息
        $ccid=$_POST["ccid"];//商品分类
        $cname=$_POST["cname"];//名称
        $cnotes=$_POST["cnotes"];//简介
        $cprice=$_POST["cprice"];//价格
        $keywords=$_POST["keywords"];//关键词
        $crec=$_POST["crec"];//推荐位
        $cimg=$_POST["cimg"];
        //添加
        $result=$db->insert("cname='{$cname}',cprice='{$cprice}',cimg='{$cimg}',sid='{$sid}',cnotes='{$cnotes}',ccid='{$ccid}',crec='{$crec}',keywords='{$keywords}'","commodity");
        if ($result>0){
            $this->jump("添加成功","m=admin&f=commodity");
        }else{
            $this->jump("添加失败","m=admin&f=commodity");
        }
    }
}
?>