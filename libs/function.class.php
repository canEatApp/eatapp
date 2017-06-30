<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/22
 * Time: 下午3:58
 */
if(!COMMING){
    exit();
}
function e($array){
    if(is_array($array)){
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }elseif (is_string($array)){
        echo $array;
    }
}