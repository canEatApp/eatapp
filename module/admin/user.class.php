<?php
class user extends main{
    function mode(){
        $db=new db();
        $result=$db->select("user");
        $result1=$db->select("userinfo");
        $this->smarty->assign("arr",$result);
        $this->smarty->assign("arr1",$result1);
        $this->smarty->display("user.html");
    }
    //拉黑
    function state(){
        $uid=$_GET['uid'];
        $db=new db();
        if($db->where("uid=$uid")->update("ustate=0","userinfo")>0){
            $this->jump("拉黑成功","m=admin&f=user");
        }else{
            $this->jump("拉黑失败","m=admin&f=user");
        }

    }
    function state1(){
        $uid=$_GET['uid'];
        $db=new db();
        if($db->where("uid=$uid")->update("ustate=1","userinfo")>0){
            $this->jump("修改成功","m=admin&f=user");
        }else{
            $this->jump("修改失败","m=admin&f=user");
        }

    }
    function del(){
        $uid=$_GET['uid'];
        $db=new db();
        $db1=new db2('user');
        if(($db->where("uid=$uid")->del("userinfo")>0)&&($db1->where("uid=$uid")->del()>0)){
            $this->jump("修改成功","m=admin&f=user");
        }else{
            $this->jump("修改失败","m=admin&f=user");
        }

    }
}

?>