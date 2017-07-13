<?php
class manger extends main{
    function mode(){
        $db=new db();
        $result=$db->select("admin");
        $this->smarty->assign("arr",$result);
        $this->smarty->display("manger.html");
    }
    //修改信息
    function change(){
        $aid=$_GET['aid'];
        $db=new db2("admin");
        $db1=new db2("role");
        $result=$db->where("aid=$aid")->select();
        $result1=$db1->select();
        $this->smarty->assign("arr",$result1);
        $this->smarty->assign("result",$result);
        $this->smarty->display("mangerchange.html");
    }
    //修改信息内容
    function changeCon(){
        $id=$_GET['id'];
        $rid=$_GET['rid'];
        $db=new db2("admin");
        if($db->where("aid=$id")->update("arole='$rid'")){
            $this->jump("修改成功","m=admin&f=manger&a=change&aid='$id'");
        }else{
            $this->jump("修改失败","m=admin&f=manger&a=change&aid='$id'");
        }
    }
    //删除信息
    function del(){
        $db=new db2("admin");
        $aid=$_GET['aid'];
        if($db->where("aid=$aid")->del()>0){
            $this->jump("删除成功","m=admin&f=manger");
        }else{
            $this->jump("删除失败","m=admin&f=manger");
        }


    }
    //添加信息
    function add(){
        $db=new db();
        $result=$db->select("role");
        $this->smarty->assign("arr",$result);
        $this->smarty->display("mangeradd.html");
    }
    //添加信息内容
    function addCon(){
        $id=$_POST['id'];
        $pass=md5($_POST['id']);
        $rid=$_POST['rid'];
        $db=new db2("admin");
        if($db->insert("aname='$id',apass='$pass',arole=$rid")>0){
            $this->jump("添加成功","m=admin&f=manger");
        }else{
            $this->jump("添加失败","m=admin&f=manger");
        }
    }
}

?>