<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/27
 * Time: 下午5:47
 */
class main{
    public function __construct(){
        $this->smarty=new Smarty();
        $smarty=new Smarty();
        $smarty->setCompileDir("compile/admin");
        $smarty->setTemplateDir("template/admin");
        $this->smarty=$smarty;
        $session=new session();
        $this->session=$session;
    }
    function jump($message,$src){
        $newSrc="index.php?".$src;
        $this->smarty->setCompileDir("compile/admin");
        $this->smarty->setTemplateDir("template/admin");
        $this->smarty->assign("message",$message);
        $this->smarty->assign("src",$newSrc);
        $this->smarty->display("jump.html");
    }

}