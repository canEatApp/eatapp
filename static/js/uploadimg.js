class upload_1{
    constructor(){
        //这种书写方式会导致所有数据都能在外部被修改
        this.box="";
        this.imgBox="";
        this.inputBox="";
        this.file="";
        this.data=[];
        this.add="";
        this.img="";
        this.relimg="";
        this.del="";
        this.message="";
        this.messageBox='';
        this.warm="";
        this.uploadBtn="";
        this.num=0;
        this.limit=10;
        this.url="upload.php";
        this.imgBoxArr=[];
        this.success=function (aa) {console.log(aa)};
        this.size=1024*1024*10;
        this.imgType=["jpg","jpeg","png","gif"];
        this.inputBoxStyle={width:100,height:100,background:"orange"};
        this.imgBoxStyle={width:100,height:100,padding:5,border:"1px solid #000"};
        this.progressStyle={background:"orange",height:10,borderTop:"1px solid #ccc",fontSize:12};
        this.uploadBtnStyle={width:100,height:40,background:"coral"};

    }
    //1.动态创建dom元素
    createView(box){
    //(1)创建容器
        this.createBox();
        this.createInput();
        this.createUploadBtn();

    }
    createBox(box){
        if (box){
            this.box=box;
            return;
        }
        this.box=document.createElement("div");
        this.box.style.cssText="overflow:hidden;margin:20px auto;padding:5px;box-sizing:border-box;position:relative;";
        document.querySelector('body').appendChild(this.box);
    }
    //创建上传栏
    createInput(inputBox){
        if (inputBox){
            this.inputBox=inputBox;
            return;
        }
        this.inputBox=document.createElement("div");
        this.inputBox.style.cssText=`
            width:${this.inputBoxStyle.width}px;
            height:${this.inputBoxStyle.height}px;
            background-color:${this.inputBoxStyle.background};
            box-sizing:border-box;float:left;margin-right:6px;
            position:relative;`;
        this.inputBox.className="inputBox";
        this.file=document.createElement("input");
        this.file.type="file";
        this.file.multiple="multiple";
        this.file.accept="image/png,image/gif,image/jpeg";
        //创建文件input
        this.file.style.cssText="width:100%;height:100%;position:absolute;top:0;left:0;opacity:0;cursor:pointer;z-index:2;";
        this.inputBox.appendChild(this.file);
        var div=document.createElement("div");
        div.innerHTML="+";
        div.style.cssText="position:absolute;width: 50px;height: 50px;z-index: 1;font-size: 30px;text-align: center;line-height: 50px;top: 0;bottom: 0;left: 0;right: 0;margin: auto;"
        this.inputBox.appendChild(div);
        var flag=document.querySelector('.imgbox')?document.querySelector('.imgbox'):false;
        if (flag){
            this.box.insertBefore(this.inputBox,flag)
        }else{
            this.box.appendChild(this.inputBox);
        }
        this.change();
    }
    // 创建预览窗口
    createImg(url,imgBox){
        if(imgBox) {
            this.imgBox = imgBox;
            this.box.appendChild(this.imgBox);
            return;
        }
        this.imgBox=document.createElement("div");
        this.imgBox.style.cssText=`
            width:${this.imgBoxStyle.width}px;height:${this.imgBoxStyle.height}px;border:${this.imgBoxStyle.border};
            overflow:hidden;padding:${this.imgBoxStyle.padding}px;box-sizing:border-box;position:relative;float:left;`;

        this.img=document.createElement("div");
        this.img.style.cssText="width:100%;height:100%;position:relative;overflow:hidden;";
        this.relimg=document.createElement("img");
        if (url){
            this.relimg.src=url;
        }
        this.relimg.style.cssText="height:100%;";
        this.del=document.createElement("div");
        this.del.innerHTML="-";
        this.del.style.cssText="width: 100%;height: 100%;background-color:#000;color: #fff;text-align: center;position: absolute;top: 0;left:0;font-size: 60px;display: none;cursor: pointer;position:absolute;z-index:10;left:0;top:0;";
        this.img.appendChild(this.del);
        this.img.appendChild(this.relimg);
        this.imgBox.appendChild(this.img);
        this.progress=document.createElement('div');
        this.progress.style.cssText=`width:0%;height:${this.progressStyle.height}px;border-top:${this.progressStyle.borderTop};position:absolute;bottom:0;left:0;line-height:${this.progressStyle.height}px;font-size:${this.progressStyle.fontSize}px;`;
        this.messageBox=document.createElement("div");
        this.messageBox.innerHTML=this.warm;
        this.messageBox.style.cssText=`width:100%;height:100%;background-color:${this.progressStyle.background};opacity:0.8;text-align:center;position:absolute;top:0;left:0;z-index:1;display:none;`;
        this.img.appendChild(this.messageBox);
        this.imgBox.appendChild(this.progress);
        this.box.appendChild(this.imgBox);
        this.imgBoxArr.push(this.img);
    }
    // 创建上传按钮
    createUploadBtn(uploadBtn){
        if (uploadBtn){
            this.uploadBtn=uploadBtn;
            return;
        }
        this.uploadBtn=document.createElement('div');
        this.uploadBtn.innerHTML="上传";
        this.uploadBtn.style.cssText=`
            width:${this.uploadBtnStyle.width}px;height:${this.uploadBtnStyle.height}px;
            text-align:center;line-height:${this.uploadBtnStyle.height}px;background-color:${this.uploadBtnStyle.background};
            float:left;margin-top:6px;border:1px solid;cursor:pointer;`;
        this.box.insertBefore(this.uploadBtn,this.inputBox);
    }
    change(){
        // 图片上传改变时
        this.file.onchange=()=>{
            let arr;
            arr=Array.prototype.slice.call(this.file.files);
            arr.forEach( (val,index)=> {
               this.check(val,index,arr);
            });
            let that=this;
            this.uploadBtn.onclick=function () {
                that.up();
            }
        }
    }
    check(val,index,arr){
        var flag=1;
        let that=this;
        let fileRead=new FileReader();
        fileRead.readAsDataURL(val);
        fileRead.onload=(e)=>{
            this.createImg();
            this.imgBoxArr.forEach((val)=>{
                val.addEventListener("mouseover",function () {
                    this.firstElementChild.style.display="block";
                    this.firstElementChild.onclick=function () {
                        let parent=this.parentNode.parentNode;
                        let delData=this.nextSibling.src;
                        that.data.filter(function (val) {
                            return !val==delData;
                        });
                        that.box.removeChild(parent);

                    }
                });
                val.addEventListener("mouseout",function () {
                    this.firstElementChild.style.display="none";
                });
            });
            this.relimg.src=e.target.result;
            let inputBox=document.querySelector('.inputBox');
            if (inputBox){
                this.box.removeChild(inputBox);
            }
                this.createInput();
        };
        if (flag){
            this.data.push(val);
        }
    }
    up(){
        let that=this;
        this.data.forEach(function (val,index) {
            let ajax=new XMLHttpRequest();
            let formDate=new FormData();
            formDate.append('img',val);
            ajax.onload=function () {
                that.success(ajax.responseText);
            };
            ajax.upload.onprogress=function (e) {
                let pro=e.loaded/e.total*100+"%";
                that.progress.style.width=pro;
            };
            ajax.open("post",that.url,true);
            ajax.send(formDate);
        });
    }
}