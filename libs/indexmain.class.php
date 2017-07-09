<?php
class indexMain{
    function __construct(){
        $this->smarty=new Smarty();
        $this->smarty->setCompileDir("compile");
        $this->smarty->setTemplateDir("template/index");
        $this->session=new session();
    }
}