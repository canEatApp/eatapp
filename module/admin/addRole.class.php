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
        $arr=$this->db->select("roles");
        $this->smarty->assign('arr',$arr);
        $this->smarty->display("roles.html");
    }
    //添加角色页面
    function add(){
        $this->smarty->display("addroles.html");
    }
    //添加角色
    function addroles(){
        $rname=$_POST["rname"];
        $this->db=new db();
        if($this->db->insert("rname='{$rname}'","roles")>0){
            $this->jump("添加成功","m=admin&f=addRole&a=add");
        };
    }
    //添加管理员
    function addAdmin(){
        $rid=$_POST["rid"];
        $adname=$_POST["adname"];
        $adpass=$_POST["adpass"];
        $db=new db();
        if ($db->insert("adname='{$adname}'","adpass='{$adpass}'","rid='{$rid}'")>0){
            $this->jump("创建成功","m=admin&f=addRole");
        }else{
            $this->jump("创建失败","m=admin&f=addRole");
        }
    }
    //表单验证查询角色功能
    function checkRoles(){
        $rname=$_POST["rname"];
        
    }
    //表单验证查询管理员功能
    function checkAdmin(){

    }
    //app分类管理
    function applist(){
        $db=new db();
        $result=$db->select("applists");
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
}

