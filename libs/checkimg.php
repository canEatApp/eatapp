<?php
class code{
    public $width=200;
    public $height=60;
    public $type="png";
    public $code="abcdefghjkmnpqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    public $codeLen=4;
    public $codeUrl;
    public $size=array(min=>26,max=>36);
    public $angle=array(min=>-20,max=>30);
    public $image;
    public $current="";
    public $lineNum=5;
    public $pointNum=100;
    public $font="../five.ttf";

    //创建画布
    function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->getcolor('q'));

    }
    //创建内容 随机的文字
    function createCon(){
        $this->gettext();
//        echo $this->codeUrl;
        for($i=0;$i<$this->codeLen;$i++){
            $size=mt_rand($this->size['min'],$this->size['max']);
            $angle=mt_rand($this->angle['min'],$this->angle['max']);
            $x=$i*($this->width/$this->codeLen)+mt_rand(-5,30);

            $box=imagettfbbox($size,$angle,$this->font,substr($this->codeUrl,$i,1));
            $heighta=$box[1]-$box[5];
            $height=$box[1]-$box[5]+mt_rand(-5,30);
            if($x<0){
                $x=0;
                if($x>($this->width-$heighta)){
                    $x=($this->width-$heighta);
                }
            }
            if($height<$heighta){
                $height=$heighta;
            }
            imagettftext($this->image,$size,$angle,$x,$height,$this->getcolor('s'),$this->font,$this->codeUrl[$i]);
        }
    }
    function getText(){
        $str="";
        for($i=0;$i<$this->codeLen;$i++){
            $str.=substr($this->code,mt_rand(0,strlen($this->code)-1),1);
        }
        $this->codeUrl=$str;
        return $str;
    }
    function getline(){
        for($i=0;$i<$this->lineNum;$i++){
            imageline($this->image,mt_rand(0,20),mt_rand(0,$this->height),mt_rand($this->width-20,$this->width),mt_rand(0,$this->height),$this->getcolor('q'));
        }
    }
    function getpoint(){
        for($i=0;$i<$this->pointNum;$i++){
            imagesetpixel($this->image,mt_rand(5,$this->width),mt_rand(5,$this->height),$this->getcolor('q'));
        }
    }
    function getcolor($color='s'){
        $r=$color=="s"?mt_rand(0,120):mt_rand(130,255);
        $g=$color=="s"?mt_rand(0,120):mt_rand(130,255);
        $b=$color=="s"?mt_rand(0,120):mt_rand(130,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    function output(){
        header("content-type:image/$this->type");
        $this->createCanvas();
        $this->createCon();
        $this->getline();
        $this->getpoint();
        imagepng($this->image);
        imagedestroy($this->image);
    }
}

//
//class code1{
//    public $width=200;
//    public $height=50;
//    public $type="png";
//    public $code="abcdefghijklmnopqrstuvwxyz0123456789";
//    public $condeLen=4;
//    public $codeUrl;
//    public $size=array("min"=>20,"max"=>40);
//    public $pixNum=50;
//    public $lineNum=10;
//    public $lineSet=array("min"=>50,"max"=>250);
//    public $angle=array("min"=>-15,"max"=>15);
//    //创建画布
//    function createCanvas(){
//        $this->image=imagecreatetruecolor($this->width,$this->height);
//        imagefill($this->image,0,0,$this->getColor());
//    }
//    //获取颜色
//    function getColor($bold="black"){
//        $r=$bold=="black"?mt_rand(0,110):mt_rand(110,255);
//        $g=$bold=="black"?mt_rand(0,110):mt_rand(110,255);
//        $b=$bold=="black"?mt_rand(0,110):mt_rand(110,255);
//        return imagecolorallocate($this->image,$r,$g,$b);
//    }
//    //写内容
//    function getCon(){
//        $this->getText();
//        for($i=0;$i<$this->condeLen;$i++){
//            $width=($this->width/4+mt_rand(2,10))*$i;
//            $size=mt_rand($this->size["min"],$this->size["max"]);
//            $angle=mt_rand($this->angle["min"],$this->angle["max"]);
//            $y=imagettfbbox($size,$angle,$this->codeUrl,$this->text[i]);
//            imagettftext($this->image,$size,$angle,$width,30,$this->getColor("as"),$this->codeUrl,$this->text[i]);
//        }
//    }
//    //获取文字
//    function getText(){
//        $str="";
//        for ($i=0;$i<$this->codeLen;$i++){
//            $str.=$this->code[mt_rand(0,strlen($this->code)-1)];
//        }
//        $this->text=$str;
//        echo $str;
//        return $str;
//    }
//    //画点
//    function setPix(){
//        for ($i=0;$i<$this->pixNum;$i++){
//            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
//        }
//    }
//    //画线
//    function setLine(){
//        for ($i=0;$i<$this->lineNum;$i++) {
//            imageline($this->image, mt_rand(0,$this->lineSet["min"]), mt_rand(0,$this->lineSet["min"]), mt_rand($this->lineSet["min"],$this->lineSet["max"]), mt_rand($this->lineSet["min"],$this->lineSet["max"]), $this->getColor("no"));
//        }
//    }
//    //输出
//    function output(){
//        header("content-type:image/".$this->type);
//        //输出验证码
//        $this->createCanvas();
//        $this->getCon();
//        $this->setPix();
//        $this->setLine();
//        $type="image/".$this->type;
//        imagepng($this->image);
//        imagedestroy($this->image);
//
//    }
//}
