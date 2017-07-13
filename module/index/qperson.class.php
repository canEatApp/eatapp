<?php
class qperson extends indexMain {
    function __construct(){
        parent::__construct();
        $this->session=new session();
        $this->db=new db();
        $this->uid=$this->session->get("uid")?$this->session->get("uid"):1;
        header("content-type","text/html;charset=utf8");
    }

    function person(){
        if($this->session->get("login")){
            exit;
        }
        $result=$this->db->where("uid=$this->uid")->select('userinfo');
        $this->smarty->assign("result",$result);
        $this->smarty->display("qyh-person.html");
    }
    function xiuperson(){
        if($this->session->get("login")){
            exit;
        }
        $result=$this->db->where("uid=$this->uid")->select('userinfo');
        $this->smarty->assign("user",$result);
        $this->smarty->display("qyh-xiuperson.html");
    }
    function xiupersonCon(){
        $name=$_REQUEST['name'];
        $tel=$_REQUEST['tel'];
        $address=$_REQUEST['address'];
        $notes=$_REQUEST['notes'];
        $aa=$this->db->where("uid=$this->uid")->update("uiname='$name',uaddress='$address',unotes='$notes',utel=$tel",userinfo);
        if($aa>0){
            echo "ok";
        }else{
            echo "no";
        }
    }
    function img(){


        $this->smarty->display("qyh-img.html");
    }
    function imgurl(){
        $obj=new upload();
        $obj->move();
    }
    function imgCon(){
        $img=$_REQUEST['img'];
        $aa=$this->db->where("uid=$this->uid")->update("uimg='$img'",userinfo);
        if($aa>0){
            $this->session->clear('uid');
            $this->session->set('uimg',$img);
            echo "ok";
        }else{
            echo "no";
        }
    }
    function logout(){
        $this->smarty->display("xx-person.html");
    }
    function logoutCon(){
        $this->session->clear();
        echo "ok";
    }
}