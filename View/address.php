<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--手机号码不显示为拨号的超链接-->
    <meta name="format-detection" content="telephone=no"/>
    <!--在移动端按比例缩放-->
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no;">

    <!--<script type='text/javascript' src='__PUBLIC__/js/jquery-1.11.3.js' charset='utf-8'></script>
    <script>var Zepto = jQuery</script>-->
    <link rel="stylesheet" href="../Public/css/swiper.min.css">
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->

    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>
    <title>懐璞集</title>
</head>
<style>
    .board-address{
        line-height: 1.5;
        font-size: 16px;
        padding-left: 10px;
        padding-right: 10px;
        position: absolute;
        top: 0; bottom: 0;
        left: 0; right: 0;
        margin-top: 10px;
        margin-bottom: 100px;
        /*height: 100%;*/
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
        /*padding-bottom: 105px;*/
        /*border: 3px solid red;*/
    }
    .block-address{
        position: relative;background: rgba(214,214,216,0.6);
        padding: 10px;margin-bottom: 10px;
        border-radius: 3px;
    }
    .btn-delAds{
        position: absolute;
        top: 3px;right: 3px;
        width: 30px;
        z-index: 5;
    }
    .area-adsCtt{
        background: rgb(88,88,90);
        padding: 30px 20px 20px 20px;
        position: relative;color: white;
        border-radius: 4px;
    }
    .area-adsCtt span{
        text-decoration: none;
        color: white;
        /*清楚手机浏览器的默认属性效果*/
        -webkit-tap-highlight-color: transparent;
        -webkit-appearance: none;
    }
    .area-adsCtt p{
        padding-top: 10px;
    }
    .area-adsCtt div{
        text-align: right;
    }
    button{
        color: white;
        background-color: #57585A;
        border: none;
        padding: 7px 20px;
        border-radius: 4px;
        font-size: 16px;
        margin-left: 5px;
    }
    button:active{
        background-color: #393939;
    }

    /*在三个复用的代码块的基础在添加样式*/
    /*.block-disTip,#block-service,#board-personal,.menu-child{
        background: rgba(62,62,63,1);
    }*/
    #board-personal{
        background: rgba(62,62,63,1);
    }
    .area-button a{
        box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
    }
</style>
<body>
    <main class="board-address">
        <!--一个卡片-->
        <div class="block-address" data-id="012">
            <img class="btn-delAds" src="../Public/icons/close2.png">
            <div class="area-adsCtt">
                <h4>收货地址<label>1</label>:</h4>
                <p>广东省珠海市香洲区唐家湾金风路6号北京理工大学珠海学院第三饭堂四楼腾志科技1</p>
                <div>
                    <span>issac宝华1</span>&nbsp;&nbsp;<span>13250037044</span>
                </div>
            </div>
            <div style="padding-top: 10px;text-align: right;">
                <button class="item-defaultAdd">默認地址</button>
                <button class="btn-alterAdd">修改地址</button>
            </div>
        </div>
        <!--一个卡片-->
        <div class="block-address" data-id="123">
            <img class="btn-delAds" src="../Public/icons/close2.png">
            <div class="area-adsCtt">
                <h4>收货地址<label>2</label>:</h4>
                <p>广东省珠海市香洲区唐家湾金风路6号北京理工大学珠海学院第三饭堂四楼腾志科技2</p>
                <div>
                    <span>issac宝华2</span>&nbsp;&nbsp;<span>13250037044</span>
                </div>
            </div>
            <div style="padding-top: 10px;text-align: right;">
                <button class="item-setDefAdd">設為默認地址</button>
                <button class="btn-alterAdd">修改地址</button>
            </div>
        </div>
        <div style="border: 1px solid white;border-radius: 3px;padding-top: 15px;padding-bottom: 15px;
        text-align: center;margin: 20px 0;color: white;cursor: pointer;" class="btn-addAddress">
            添加地址
        </div>
    </main>
    <!--修改/添加地址-->
    <style>
        /*----------填写地址---------*/
        .block-writeAdd{
            border: 1px solid rgb(168,168,168);
            background: white;
            padding: 50px 30px 40px 30px;
            position: relative;
            top: -30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        .block-writeAdd div{
            margin-bottom: 25px;
        }
        .block-writeAdd input{
            height: 30px;
            width: 100%;
            border: 1px solid rgb(83,83,83);
            padding-left: 5px;
        }
        .block-writeAdd ul{
            text-align: right;
        }
        .block-writeAdd p{
            font-size: 16px;
            padding-top: 10px;
        }
        .btn-alterAddClose{
            position: absolute;top: 15px;
            right: 10px;width: 30px;
        }
        .btn-submitAdd{
            display: inline;
            padding-right: 30px;
            padding-left: 30px;
        }
    </style>
    <div id="model-alterAdd" class="model-issac" style="bottom: 0;z-index: 30;">
        <div class="dialog-issac model-issacBg" style="/*background: white;*/">
            <div class="model-issacCtt">
                <!--你的html代码-->
                <div class="block-writeAdd blockIssac">
                    <img class="btn-alterAddClose" src="../Public/icons/close.png">
                    <div>
                        <input style="width: 50%;" autocomplete="off" placeholder="姓名" type="text">
                        <p>以上有劳填写您的大名</p>
                    </div>
                    <div>
                        <input type="text" autocomplete="off" placeholder="地址">
                        <p>以上有劳填写您的收货地址</p>
                    </div>
                    <div>
                        <input type="tel" maxlength="11" autocomplete="off" placeholder="电话号码">
                        <p>以上有劳填写您的行动电话号码</p>
                    </div>
                    <ul>
                        <div class="btn-submitAdd btnIssac">交卷！</div>
                    </ul>
                </div>
                <!--你的html代码-->
            </div>
        </div>
    </div>
    
    <?php include "./Temp/menu.php";?>

    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type="text/javascript" src="../Public/js/issac.js"></script><!--issac类库-->
    <script type="text/javascript" src="../Public/js/public.js"></script>
    <script type="text/javascript">
        /*删除*/
        $("main").delegate(".btn-delAds","click",function(){
            if(confirm("确定删除该地址？")){
                var id =$(this).parent().attr("data-id");
                var obj =$(this);
                obj.parent().fadeOut();
                setTimeout(function(){
                    obj.parent().remove();
                },1000);
                //alert("delete id="+id);
            }
        });
        /*再去看一次*/
        $(".btn-again").click(function(){
            var id =$(this).parent().parent().attr("data-id");
            window.location.href="details.html?id="+id;
        });

        /*修改地址-触发修改地址的模态框*/
        $.getAddress =function(obj){
            var id      =obj.closest(".block-address").attr("data-id");
            var name    =obj.closest(".block-address").find(".area-adsCtt div span").eq(0).text();
            var phone   =obj.closest(".block-address").find(".area-adsCtt div span").eq(1).text();
            var address =obj.closest(".block-address").find("p").text();
            $(".block-writeAdd input:eq(0)").val(name);
            $(".block-writeAdd input:eq(1)").val(address);
            $(".block-writeAdd input:eq(2)").val(phone);
            $(".btn-submitAdd").attr("data-id", id);
        };
        $("main").delegate(".btn-alterAdd","click",function(){
            $.getAddress($(this));
            modelInT("#model-alterAdd","0");
            $(".btn-submitAdd").attr("data-order","alter");
            var index =$(this).parent().parent().index();
            $(".btn-submitAdd").attr("data-index",index);
        });

        /*提交修改地址/提交添加地址*/
        /*新增地址*/
        $.addAddress =function(name, address, phone){
            var index =$(".block-address").length +1;
            var htmlStr ='<div class="block-address" data-id="123"> ' +
                    '<img class="btn-delAds" src="../Public/icons/close2.png"> ' +
                    '<div class="area-adsCtt">' +
                    '<h4>收货地址<label>'+index+'</label>:</h4> ' +
                    '<p>'+address+'</p> ' +
                    '<div> ' +
                    '<span>'+name+'</span>&nbsp;&nbsp;<span>'+phone+'</span> ' +
                    '</div> ' +
                    '</div> ' +
                    '<div style="padding-top: 10px;text-align: right;"> ' +
                    '<button class="item-setDefAdd">設為默認地址</button> ' +
                    '<button class="btn-alterAdd">修改地址</button> ' +
                    '</div> ' +
                    '</div> ';
            $(".btn-addAddress").before(htmlStr);
        };
        /*修改地址*/
        $.alterAddress =function(name, address, phone){
            var index =$(".btn-submitAdd").attr("data-index");
            var obj =$(".area-adsCtt").eq(index);
            obj.find("span").eq(0).text(name);
            obj.find("p").text(address);
            obj.find("span").eq(1).text(phone);
        };
        $(".btn-submitAdd").click(function(){
            var order   =$(this).attr("data-order");
            var name    =$(".block-writeAdd input:eq(0)").val();
            var address =$(".block-writeAdd input:eq(1)").val();
            var phone   =$(".block-writeAdd input:eq(2)").val();
            if(order =="alter"){
                //修改地址
                $.alterAddress(name, address, phone);
//                alert("type: "+order+"\n"+name+"\n"+address+"\n"+phone);
            }else{
                //添加地址
                $.addAddress(name, address, phone);
            }
            modelOutT("#model-alterAdd","-30px");
        });

        /*关闭修改地址的模态框*/
        $(".btn-alterAddClose").click(function(){
            modelOutT("#model-alterAdd","-30px");
        });
        /*设置默认地址按钮*/
        $("main").delegate(".item-setDefAdd","click",function(){
            $(".item-defaultAdd").text("设为默认地址");
            $(".item-defaultAdd").unbind();
            $(".item-defaultAdd").attr("class","item-setDefAdd");
            $(this).text("默认地址");
            $(this).unbind();
            $(this).attr("class","item-defaultAdd");
        });

        /*添加地址*/
//        var addFlag =false;
        $.clearAddress =function(){
            $(".block-writeAdd input:eq(0)").val("");
            $(".block-writeAdd input:eq(1)").val("");
            $(".block-writeAdd input:eq(2)").val("");
        };
        $(".btn-addAddress").click(function(){
            $.clearAddress();
            modelInT("#model-alterAdd","0");
            $(".btn-submitAdd").attr("data-order","add");
        });
    </script>
</body>
</html>