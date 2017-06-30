<?php
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/6/28
 * Time: 下午7:37
 */
class tree{
    public function __construct(){
        $this->str="";
    }
    function tree($db,$table,$pid,$cid,$n=0){
        $sql="select * FROM  {$table} WHERE pid={$pid}";
        //首先查询当前pid
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $str=str_repeat('+',$n);
            echo $row['id']."+".$cid."-";
            if ($row['id']==$cid){
                $this->str.="<option value={$cid} selected>{$str}{$row['tablename']}</option>";
            }else{
                $this->str.="<option value={$row['id']}>{$str}{$row['tablename']}</option>";
            }
            $this->tree($db,$table,$row['id'],$cid,$n+2);
    }
    }

}