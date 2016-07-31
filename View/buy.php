<?php require_once "../Controller/BuyController.class.php"; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--在移动端按比例缩放-->
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no;">

    <!--<script type='text/javascript' src='__PUBLIC__/js/jquery-1.11.3.js' charset='utf-8'></script>
    <script>var Zepto = jQuery</script>-->
    <link rel="stylesheet" href="../Public/css/swiper.min.css">
    <link rel="stylesheet" href="../Public/css/buy.css">
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->
    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>
    <title>懐璞集</title>
</head>
<body class="body">

<!--购买-->
<div id="board-buy">
    <!--选择商品数量-->
    <div class="block-buy">
        <div class="area-buyImg">
            <img src="<?php echo __BACK__ .$detail->pHead;?>">
        </div>
        <div class="sty-text"><?php echo $detail->pName;?></div>
        <div class="sty-text area-proCount">
            数量：
            <label class="btn-redPro">-</label>
            <span class="item-proCount">1</span>
            <label class="btn-addPro">+</label>
        </div>
    </div>
    <style>
        /*下拉菜单*/
        .block-logistics,.block-payMethod{
            background: rgb(224,226,225);border-radius: 3px;
            margin-top: 20px;padding: 10px;
        }
        .area-logistics-l,.area-payMethod-l{
            float: left;
            /*border: 1px solid red;*/
            padding: 5px 5px;font-weight: bold;
        }
        .area-logistics-r,.area-payMethod-r{
            /*border: 1px solid red;*/
            float: right;position: relative;
            border-radius: 3px
        }
        .sel-logistics,.sel-payMethod{
            background: rgb(137,137,137);color: white;padding: 5px 35px 5px 10px;
            position: relative;cursor: default;border-radius: 2px;
        }
        .sel-logistics:active,.sel-payMethod:active{
            background: rgb(107,107,107);
        }
        .sel-logistics img,.sel-payMethod img{
            width: 20px;position: absolute;top: 3px;right: 5px;
        }
        .area-logistics,.area-payMethod{
            position: absolute;top: 28px;/*border:1px solid black;*/
            background: rgb(107,107,107);
            color: white;cursor: default;
            padding: 5px 0;
            border-radius: 0 0 2px 2px;
            visibility: hidden;
            z-index: 30;
        }
        .area-logistics div,.area-payMethod div{
            position: relative;
            padding: 5px 35px 5px 10px;
        }
        .area-logistics div:active,.area-payMethod div:active{
            background: rgb(137,137,137);
        }
        .area-logistics img,.area-payMethod img{
            width: 20px;
            position: absolute;
            top: 3px; right: 5px;
        }
        .hidden{
            display: none;
        }
    </style>
    <!--配送方式模块-->
    <div class="block-logistics">
        <!--配送方式-左-->
        <div class="area-logistics-l">配送方式</div>
        <!--配送方式-右-->
        <div class="area-logistics-r">
            <!--选择物流下拉菜单-->
            <div class="sel-logistics">
                <span>德邦物流</span>
                <img src="../Public/icons/xiala.png">
            </div>
            <!--下拉菜单内容-->
            <div class="area-logistics">
                <div>
                    德邦物流
                    <img src="../Public/icons/hook.png">
                </div>
                <div>
                    顺丰速运
                    <img class="hidden" src="../Public/icons/hook.png">
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!--付款方式模块-->
    <div class="block-payMethod">
        <!--配送方式-左-->
        <div class="area-payMethod-l">付款方式</div>
        <!--配送方式-右-->
        <div class="area-payMethod-r">
            <!--选择物流下拉菜单-->
            <div class="sel-payMethod">
                <span>微信支付</span>
                <img src="../Public/icons/xiala.png">
            </div>
            <!--下拉菜单内容-->
            <div class="area-payMethod">
                <div>
                    微信支付
                    <img src="../Public/icons/hook.png">
                </div>
                <div>
                    货到付款
                    <img class="hidden" src="../Public/icons/hook.png">
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <style>
        .area-payBtn{
            padding: 20px 20px 0 20px;
           /* position: absolute;
            bottom: 30px;left: 15px;right: 15px;*/
            /*border: 1px solid white;*/
        }
        .btn-pay{
            width: 100%;text-align: center;
            background: rgb(137,137,137);color: white;
            padding-top: 10px;padding-bottom: 10px;
            font-size: 16px;border-radius: 3px;
            cursor: pointer;
        }
        .btn-pay:active{
            background: rgb(107,107,107);
        }
    </style>
    <div class="area-payBtn">
        <div class="btn-pay">好了我確定了結賬去!</div>
    </div>
    <button class="finish">购物完成</button>
    <button class="addTip">填写地址提示</button>
</div>

<!--购买成功提示-->
<div id="model-buyTip" class="model-issac">
    <div class="dialog-issac model-issacBg">
        <div class="model-issacCtt">
            <!--你的html代码-->
            <div class="block-buyTip blockIssac">
                <div class="area-buyTipCtt">
                    <div class="item-buyTipImg">
                        <img src="../Public/images/p1.jpg">
                    </div>
                    <div class="item-buyTipText">
                        <div>产品名称</div>
                        <p>亲爱的懐璞集用户你好，谢谢您对懐璞集工艺品的喜爱，您的爱物已经下单成功，请耐心等候。如果有任何疑问，请您联系我们的客服。</p>
                    </div>
                </div>
                <div class="btn-buyTip btnIssac">好的我繼續逛逛</div>
            </div>
            <!--你的html代码-->
        </div>
    </div>
</div>


<!--填写地址提示-->
<div id="model-addTip" class="model-issac">
    <div class="dialog-issac model-issacBg">
        <div class="model-issacCtt">
            <!--你的html代码-->
            <div class="block-addTip blockIssac">
                <img class="btn-addTipClose" src="../Public/icons/close.png">
                <p>亲爱的懐璞集用户您好，谢谢您对懐璞集工艺品的喜爱，在您购买之前，有劳您先填写您的收货信息以便我们为您发货。
                    点击下面按钮将为您跳转到收货信息填写页面。</p>
                <ul>
                    <div class="btn-writeAdd btnIssac">去填寫</div>
                </ul>
            </div>
            <!--你的html代码-->
        </div>
    </div>
</div>

<!--填写地址-->
<div id="model-writeAdd" class="model-issac" style="bottom: 0;z-index: 30;">
    <div class="dialog-issac model-issacBg">
        <div class="model-issacCtt">
            <!--你的html代码-->
            <div class="block-writeAdd blockIssac" style="top: -30px;">
                <img class="btn-writeAddClose" src="../Public/icons/close.png">
                <div>
                    <input style="width: 50%;" type="text">
                    <p>以上有劳填写您的大名</p>
                </div>
                <div>
                    <input type="text">
                    <p>以上有劳填写您的收货地址</p>
                </div>
                <div>
                    <input type="tel">
                    <p>以上有劳填写您的行动电话号码</p>
                </div>
                <ul>
                    <div class="btn-submitAdd btnIssac" style="display: inline;padding-right: 30px;padding-left: 30px;">交卷！</div>
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
    /*商品数量*/
    /*增加商品数量*/
    $(".btn-addPro").click(function(){
        var val =$(".item-proCount").text();
        $(".item-proCount").text(parseInt(val)+1);
    });
    /*减少商品数量*/
    $(".btn-redPro").click(function(){
        var val =$(".item-proCount").text();
        if(val >1) {
            $(".item-proCount").text(parseInt(val) - 1);
        }
    });
    /*选择物流下拉菜单*/
    var statusLog ="off"; //标志位
    function toggleLog(){
        var order ={"off":["on","visible"],"on":["off","hidden"]};
        $(".area-logistics").css("visibility", order[statusLog][1]);
        statusLog =order[statusLog][0];
    }
    /*触发选择物流下拉菜单的按钮*/
    $(".sel-logistics").click(function(){
        toggleLog();
    });
    /*选择物流方式触发*/
    $(".area-logistics div").click(function(){
        var val =$(this).text().trim();
        $(".area-logistics img").addClass("hidden");
        $(this).find("img").removeClass("hidden");
        $(".sel-logistics span").text(val);
        toggleLog();
    });
    /*选择支付方式下拉菜单*/
    var statusPay ="off"; //标志位
    function togglePay(){
        var order ={"off":["on","visible"],"on":["off","hidden"]};
        $(".area-payMethod").css("visibility", order[statusPay][1]);
        statusPay =order[statusPay][0];
    }
    /*触发选择物流下拉菜单的按钮*/
    $(".sel-payMethod").click(function(){
        togglePay();
    });
    /*选择物流方式触发*/
    $(".area-payMethod div").click(function(){
        var val =$(this).text().trim();
        $(".area-payMethod img").addClass("hidden");
        $(this).find("img").removeClass("hidden");
        $(".sel-payMethod span").text(val);
        togglePay();
    });
    /*支付按钮*/
    $(".btn-pay").click(function(){
        var count =$(".item-proCount").text().trim();
        var logistics =$(".sel-logistics span").text();
        var payMethod =$(".sel-payMethod span").text();
        alert("数量："+count+"\n物流："+logistics+"\n付款方式："+payMethod);
    });
    /*$("#board-buy").click(function(){
        if(statusLog !="off" || statusPay !="off"){
            if(statusLog =="on"){
                $(".area-logistics").css("visibility", "hidden");
                statusLog ="off";
            } else if(statusPay =="on"){
                $(".area-payMethod").css("visibility", "hidden");
                statusPay ="off";
            }

        }
    });*/

</script>
<script type="text/javascript">
    /*购买完成的提示弹窗*/
    $(".finish").click(function(){
        modelInT("#model-buyTip","0");
    });
    $(".btn-buyTip").click(function(){
        modelOutT("#model-buyTip","-40px");
    });
    $(".model-issacBackground").click(function(){
        modelOutT("#model-buyTip","-30px");
    });
    /*填写地址提示*/
    $(".addTip").click(function(){
        modelInT("#model-addTip", "0");
    });
    $(".btn-addTipClose").click(function(){
        modelOutT("#model-addTip", "-30px");
    });

    /*填写地址*/
    $(".btn-writeAddClose").click(function(){
        modelOutT("#model-writeAdd","-30px");
    });
    $(".btn-submitAdd").click(function(){
        var obj =$(".block-writeAdd").find("input");
        var name    =obj.eq(0).val();
        var address =obj.eq(1).val();
        var phone   =obj.eq(2).val();
        if(name =="" || address =="" || phone ==""){
            alert("请正确填写地址!");
            return false;
        }else {
            alert("name:" + name + "\naddress:" + address + "\nphone:" + phone);
        }
    });
    /*去填写地址*/
    $(".btn-writeAdd").click(function(){
        modelInT("#model-writeAdd","0");
        modelOutT("#model-addTip", "-30px");
    });
</script>
<script type="text/javascript">
    /*点击body是下拉菜单隐藏*/
    var bodyFlag =false;
    $(".body").click(function(){
        if(!window.bodyFlag){
            $(".area-logistics,.area-payMethod").css("visibility", "hidden");
            statusLog ="off";
            statusPay ="off";
        }else{
            window.bodyFlag =false;
        }
    });
    $(".area-logistics-r,.area-payMethod-r").click(function(){
        window.bodyFlag =true;
    });
</script>
</body>
</html>