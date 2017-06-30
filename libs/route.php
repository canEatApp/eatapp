<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/22
 * Time: 下午4:41
 */
if(!COMMING){
    exit();
};
class route{
    private static $m;//m为模块
    private static $f;//f为文件
    private static $a;//a为方法
    public function getInfo(){
        self::$m=isset($_REQUEST['m'])&&!empty($_REQUEST['m'])?$_REQUEST['m']:"index";
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:"index";
        self::$a=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:"mode";
        $this->getPath();
        //获取路由所需要的文件夹，文件，方法
    }
    private function getPath(){
        //以此判断路径是否正确，成功之后调用相应方法;
        $path=MODULE_PATH."/".self::$m;
        if(is_dir($path)){
            $path=$path."/".self::$f.".class.php";
            if (is_file($path)){
                include $path;
                if(class_exists(self::$f,false)) {
                    if (isset(self::$a)) {
                        $obj = new self::$f();
                        $method = self::$a;
                        $obj->$method();
                    } else {
                        echo self::$a . "这不是一个方法";
                    }
                }else{
                    echo self::$f."这不是一个类";
                }
            }else{
                echo $path."这不是一个文件";
            }
        }else{
            echo "{$path}这不是一个文件夹";
        }
    }
}