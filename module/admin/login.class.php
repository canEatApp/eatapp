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
        $password=md5($_POST["pass"]);
        $check=strtolower($_POST["check"]);
        $checked=$this->session->get("check");
        if ($check==$checked) {
            $db = new db();
            $arr = $db->select("admin");
            foreach ($arr as $k=>$v) {
                if ($user == $v["aname"]) {
                    if ($password = $v["apass"]) {
                        $this->session->clear();
                        $this->session->set("user", "{$user}");
                        $this->session->set("load", "loaded");
                        $uid=$v['aid'];
                        $this->session->set("uid",$uid);
                        $this->session->set("rid",$v["arole"]);
                        $this->jump("登录成功", "m=admin&f=login&a=main");
                    } else {
                        $this->jump("密码错误", "m=admin&f=login");
                    }
                } else {
                    $this->jump("账户不存在", "m=admin&f=login");
                }
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
            $user=$this->session->get("user");
            $this->smarty->assign("user",$this->session->get("user"));
            $db=new db();
            $result=$db->where("aname='{$user}'")->select('admin');
            $this->smarty->assign("rid",$this->session->get("rid"));
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
    function sign(){
        $this->smarty->display("sign.html");
    }
}