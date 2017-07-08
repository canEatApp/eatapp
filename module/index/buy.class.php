<?php
/**
 * Created by PhpStorm.
 * User: ZHC
 * Date: 2017/7/7
 * Time: 15:06
 */
if(!COMMING){
    exit();
}
class buy extends indexMain{
    function info(){
        $this->smarty->display("zhc-buy.html");
    }
}