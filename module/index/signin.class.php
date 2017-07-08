<?php
/**
 * Created by PhpStorm.
 * User: xiaoxiong
 * Date: 2017/7/7
 * Time: 23:35
 */
class signin extends indexMain{
    function sign(){
        $this->smarty->display("xx-signin.html");
    }
    function check(){

        require_once('libs/Ucpaas.class.php');
//初始化必填
        $options['accountsid']='27d0ce581303e8fe9a02576d4f9e0be2';
        $options['token']='9dba99ea2a29a27a6da2b23dde615006';
//初始化 $options必填
        $ucpass = new Ucpaas($options);
        $appId = "7d22eacc2aa24b738d870919a402dd90";
        $to = $_REQUEST["phonenum"];
        $templateId = "74722";
        $param=mt_rand(999,9999);
        $ucpass->templateSMS($appId,$to,$templateId,$param);
        session_start();
        $_SESSION["yan"]=$param;
        echo $_SESSION[ ];
    }
    function signch(){
        $user=$_REQUEST["user"];
        $phone=$_REQUEST["phone"];
        $yan=$_REQUEST["yan"];
        $pass=$_REQUEST["pass"];
        if ($yan==$_SESSION["yan"]){
            $db=new db2("indexuser");
            $result=$db->insert(" iusername='{$user}',ipass='$pass',iphone='$phone' ");
            if($result>0){
                echo "ok";
            }else{
                echo "cuole";
            }
        }else{
            var_dump( $_SESSION['yan']);
        }
    }
}