<?php
if(!COMMING){
    exit();
};
class login extends main{
    function mode(){
            if ($this->session->get("load")) {
                echo "<script>location.href='index.php?m=admin&f=login&a=main';</script>";
                exit();
            }
        $this->smarty->setCompileDir("compile/admin");
        $this->smarty->setTemplateDir("template/admin");
        $this->smarty->display("login.html");
    }
    function load(){
        $user=$_POST["user"];
        $password=$_POST["pass"];
        $password=md5($password);
        $check=strtolower($_POST["check"]);
        $checked=$this->session->get("check");
        if ($check==$checked){
            $db=new db2("admins");
            $arr=$db->select()[0];
            if ($user==$arr["adname"]){
                if ($password=$arr["adpass"]){
                    $this->session->set("user","{$user}");
                    $this->session->set("load","loaded");
                    $this->jump("登录成功","m=admin&f=login&a=main");
                }else{
                    $this->jump("密码错误","m=admin&f=login");
                }
            }else{
                $this->jump("账户不存在","m=admin&f=login");
            }
        }else{
            $this->jump("验证码错误","m=admin&f=login");
        }
    }
    function check(){
        $obj=new code();
        $obj->font=LIBS_PATH."four.ttf";
        $obj->output();
        $str=strtolower($obj->codeUrl);
        $this->session->set("check",$str);
//        $objimg=new code();
//        $objimg->size=array(min=>15,max=>25);
//        $objimg->width=120;
//        $objimg->height=40;
//        $objimg->font="static/fonts/z.ttf";
//        $objimg->output();
//        $this->session->set("code",$objimg->codeUrl);
    }

    function main(){
        if ($this->session->get("user")) {
            $this->smarty->display("main.html");
        }else{
             $this->jump("请登录","m=admin&f=login");
            echo $this->session->get("user");
        }
    }
    function out(){
        $this->session->clear();
        $this->jump("退出成功","m=admin&f=login");
    }
    
}