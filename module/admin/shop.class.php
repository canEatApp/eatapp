<?php
class shop extends main{
    //店铺展示
    function showShop(){
        $db1=new db2('shop');
        if(isset($_GET["status"])){
            $num=$db1->where($_GET['status'])->select("select count(sid) as sid from shop ");
        }else{
            $num=$db1->select("select count(sid) as sid from shop ");
        }
//        $num=$db1->where($_GET['status'])->select("select count(sid) as sid from shop ");
        $page=new page();
        $page->pageNum=5;
        $page->total=count($num);
        $str=$page->show();
        $limit=$page->limit;
        $this->smarty->assign("pages",$str);
        $array=$db1->order("sid desc ".$limit)->select();
        $this->smarty->assign("arr",$array);
        $this->smarty->display("showShop.html");
    }
    //审核商铺通过
    function shopsrec(){
        $id=$_GET["sid"];
        $this->db=new db2('shop');
        $result=$this->db->where("sid='$id'")->select();
        if($this->db->where("sid=$id")->update("srec={$result[0]['status']}")>0){
            $this->jump("审核通过","m=admin&f=shop&a=showShop");
        }else{
            $this->jump("审核未成功","m=admin&f=shop&a=showShop");
        }
    }
    //商品展示
    function showCom(){
        $id=$_GET["sid"];
        $db=new db2('shop');
        $db1=new db2('commodity');
        $result=$db->where("sid={$id}")->select();
        $this->smarty->assign("result",$result);
        $result1=$db1->where("sid={$id}")->select();
        $this->smarty->assign("result1",$result1);
        $this->smarty->display("showcom.html");
    }
    //商品通过
    function copass(){
        $id=$_GET["coid"];
        $sid=$_GET["sid"];
        $this->db=new db2('commodity');
        $result=$this->db->where("coid='$id'")->select();
        if($this->db->where("coid=$id")->update("srec={$result[0]['status']}")>0){
            $this->jump("审核通过","m=admin&f=shop&a=showCom&sid=$sid");
        }else{
            $this->jump("审核未成功","m=admin&f=shop&a=showCom&sid=$sid");
        }
    }
    //商铺拉黑
    function shopstate(){
        $id=$_GET["sid"];
        $this->db=new db2('shop');
        $result=$this->db->where("sid='$id'")->select();
        if($this->db->where("sid=$id")->update("state=0,srec=0")>0){
            $this->jump("拉黑成功","m=admin&f=shop&a=showShop");
        }else{
            $this->jump("拉黑未成功","m=admin&f=shop&a=showShop");
        }
    }
}