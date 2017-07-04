<?php
if(!COMMING){
    exit();
}
class Smarty_1{
    public $compile="compile";
    public $template="template";
    function setCompileDir($dir){
        $this->compile=$dir;
        if (!is_dir($this->compile)){
            mkdir($this->compile);
            return $this;
        }
    }

    function setTemplateDir($dir){
        $this->template=$dir;
        if (!is_dir($this->template)){
            mkdir($this->template);
            return $this;
        }
    }
    function display($file){
        //展示
        include $this->template."/qyh-index.html";
        //组合拷贝文件路径
        $url=$this->template."/".$file;
        //将整个文件读成字符串file_get_contents
        $con=file_get_contents($url);
        //筛选字符串中的{str}
        $str=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->array["$1"]?>',$con);

        $compilefile=$this->compile."/index.php";
        file_put_contents($compilefile,$str);
        include $compilefile;
    }
    function assign($array,$val){
        //插入
        $this->array[$array]=$val;

    }
}