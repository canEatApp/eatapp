<?php
/**
 * Created by PhpStorm.
 * User: ZHC
 * Date: 2017/7/7
 * Time: 9:23
 */
if(!COMMING){
    exit();
}
class shop extends indexMain{
    function text(){

        $db=new db2("shop");
//        接收一个店铺的ID
        $sid=1;
        $shop=$db->where("sid=$sid")->select();
//        var_dump($shop[0]);
//        商铺名称
        $this->smarty->assign("shopname",$shop[0]['sname']);
        //        公告
        $this->smarty->assign("snotes",$shop[0]['snotes']);
        //        英文
        $this->smarty->assign("english",$shop[0]['senotes']);
        //        满多少起送
        $this->smarty->assign("srules",$shop[0]['srules']);
        $this->smarty->display("zhc-shop.html");
    }

//    店铺商品分类
    function info(){
//        接收一个店铺的ID
        $sid=1;
        $db=new db2("slist");
        $shop=$db->where("sid=$sid")->select();
        echo json_encode($shop);
    }

//    每个分类对应的商品
    function shopclass(){
//        接收一个店铺的ID
        $sid=1;
//        接收店铺下分类的ID
        $sclass=$_REQUEST['id'];
        //        商店商品分类
        $obj=new db2("commodity");
//        条件  查出来ID为1的商店的商品分类
        $shopclass=$obj->where("sid=$sid and slid=$sclass")->select();
        echo json_encode($shopclass);
//        echo $sclass;
    }

}