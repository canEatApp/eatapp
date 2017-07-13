<?php
class page{
    public $total;//总条数
    public $pageNum=1;//每页显示的条数
    public $pages;//总页数
    public $limit;

    function show(){
        $this->pages=ceil($this->total/$this->pageNum);
       $search=$_SERVER["QUERY_STRING"];
       $url=SELF_PATH."?".$search;
       if(!strrpos($url,"pages")){
          $url=$url."&pages=0";
       }


       //获取原始的地址（除了pages的地址栏信息）

        $originurl=substr($url,0,strrpos($url,"&pages="));





       $current=substr($url,strrpos($url,"=")+1);

       $str="";
       $str.="共有".$this->pages."页";
       $str.="<a href='{$originurl}&pages=0'>[首页]</a>";

       $up=($current-1)<0?0:$current-1;
       $str.="<a href='{$originurl}&pages={$up}'>[上一页]</a>";


       $start=($current-3)<0?0:$current-3;
       $end=($start+6)>$this->pages?$this->pages:$start+6;
        for($i=$start;$i<$end;$i++){
            $num=$i+1;
            if($i==$current){
                $style="style='color:red'";
            }else{
                $style="style='color:#000'";
            }
            $str.="<a href='{$originurl}&pages={$i}' {$style}>[".$num."]</a> ";
        }


       $next=$current+1>$this->pages-1?$this->pages-1:$current+1;
        $str.="<a href='{$originurl}&pages={$next}'>[下一页]</a>";
       $last=$this->pages-1;
       $str.="<a href='{$originurl}&pages={$last}'>[尾页]</a>";

       $currentNum=$current*$this->pageNum;
       $this->limit="limit ".$currentNum. " , ".$this->pageNum;

       return $str;

    }

}