<?php
if(!COMMING){
    exit();
};
class session{
    function __construct(){
        session_start();
    }

    function set($attr,$val){
        $_SESSION[$attr]=$val;
    }
    function get($attr){
        return $att=isset($_SESSION[$attr])?$_SESSION[$attr]:null;
    }
    function del($attr){
        unset($_SESSION[$attr]);
    }
    function clear(){
        foreach($_SESSION as $k=>$v) {
            unset($_SESSION[$k]);
        }
    }
}