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
    function __construct(){
        parent::__construct();
        $this->db=new db();
    }
    function mode(){
        $result=$this->db->select('list');
        $this->smarty->assign("result",$result);
        $shop=$this->db->select('shop');
        $this->smarty->assign("shop",$shop);
        $lunbo=$this->db->where('srec=3')->limit("0,3")->select('shop');
        $this->smarty->assign("lunbo",$lunbo);
        $like=$this->db->where('srec=4')->limit("0,2")->select('commodity');
        $this->smarty->assign("like",$like);
        $new=$this->db->where('srec=5')->limit("0,5")->select('commodity');
        $this->smarty->assign("new",$new);
        $this->smarty->display("qyh-index.html");
    }
    function lists(){
        $sid=$_GET['sid'];
        $result=$this->db->where("lid=$sid")->select('list');
        $this->smarty->assign("result",$result);
        $shop=$this->db->where("lid=$sid")->select('shop');
        $this->smarty->assign("shop",$shop);
        $hot=$this->db->where('srec=6')->limit("0,5")->select('commodity');
        $this->smarty->assign("hot",$hot);
        $new=$this->db->where('srec=5')->limit("0,5")->select('commodity');
        $this->smarty->assign("new",$new);
        $this->smarty->display("qyh-list.html");
    }
}