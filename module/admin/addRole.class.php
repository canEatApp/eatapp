<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/28
 * Time: 下午5:10
 */
class addRole extends main {
    //添加管理员页面
    function mode(){
        $this->db=new db();
        $arr=$this->db->select("role");
        $this->smarty->assign('result',$arr);
        $this->smarty->display("roleshow.html");
    }
    //添加角色页面
    function add(){
        $this->smarty->display("addroles.html");
    }
    //添加角色
    function addroles(){
        $rname=$_POST["rname"];
        $this->db=new db();
        if($this->db->insert("rname='{$rname}'","role")>0){
            $this->jump("添加成功","m=admin&f=addRole&a=add");
        };
    }
    //添加角色
    function roles(){
        $rid=$_GET['rid'];
        $this->db=new db();
        $arr=$this->db->where("rid='$rid'")->select("role");
        $this->smarty->assign('result',$arr);
//        var_dump($arr);
        $this->smarty->display("roles.html");
    }
    function rolechange(){
        $rid=$_POST['rid'];
        $adname=$_POST["rname"];
        $db=new db();
        if ($db->where("rid='$rid'")->update("rname='{$adname}'",'role')>0){
            $this->jump("更改成功","m=admin&f=addRole");
        }else{
            $this->jump("更改失败","m=admin&f=addRole");
        }
    }
    function roledel(){
        $rid=$_GET['rid'];
        $this->db=new db2('role');
        if ($this->db->where("rid=$rid")->del()>0){
            $this->jump("删除成功","m=admin&f=addRole");
        }else{
            $this->jump("删除失败","m=admin&f=addRole");
        }
    }
    //app分类管理
    function applist(){
        $db=new db();
        $result=$db->select("list");
        if ($result){
            $this->smarty->assign("arr",$result);
        }
        $this->smarty->display("applist.html");

    }
    function addAppList(){
        $alimg=$_POST["alimg"];
        $alname=$_POST["alname"];
        $db=new db();
        $result=$db->insert("alname='{$alname}',alimg='{$alimg}'","applists");
        if ($result>0){
            $this->jump("添加成功","m=admin&f=addRole&a=applist");
        }else{
            $this->jump("添加失败","m=admin&f=addRole&a=applist");
        }
    }
    function listCon(){
        $lid=$_GET['lid'];
        $db=new db();
        $result=$db->where("lid=$lid")->select('list');
//        var_dump($lid);
//        var_dump($result);
        $this->smarty->assign("res",$result);
        $this->smarty->display("listchange.html");
    }
    function listchange(){
        $lname=$_POST['lname'];
        $lename=$_POST['lename'];
        $limg=$_POST['img'];
        $lid=$_POST['lid'];
        $db=new db();
        $result=$db->where("lid=$lid")->update("lname='$lname',lename='$lename',limg='$limg'",'list');
        if($result>0){
            $this->jump("修改成功","m=admin&f=addRole&a=listCon&lid='$lid'");
        }else{
            $this->jump("修改失败","m=admin&f=addRole&a=listCon&lid='$lid'");
        }
    }
}

