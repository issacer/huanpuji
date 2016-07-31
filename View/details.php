<?php require_once "../Controller/DetailsController.class.php"; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--在移动端按比例缩放-->
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <link rel="stylesheet" href="../Public/css/swiper.min.css">
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->
    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>
    <title>懐璞集</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    html,body{
        height: 100%;
        font-family: "Microsoft YaHei UI";
        line-height: 1.5;
    }
    body{
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
        background-color: #3E3E3F;
    }
    #board-details{
        padding-left: 7px;
        padding-right: 7px;
        height: 100%;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
    }
    .block-details{
        padding: 10px 12px; background-color: #D8D8D8;margin-bottom: 20px;
    }
    .block-details img{
        width: 100%;
    }
    .block-details p{
        text-indent: 25px;
        font-size: 16px;
    }
    .block-details h4{
        padding-bottom: 8px;padding-top: 8px;
        font-size: 16px;
    }
    .area-dtlsHd{
        display: table;width: 100%;padding-top: 8px;padding-bottom: 8px;
        font-size: 16px;
    }
    .area-dtlsHd li{
        display: table-cell;width: 50%;font-weight: bold;
    }
    .area-btn{
        text-align: right;padding:15px 0 4px 20px;
        /*border: 1px solid red;*/
    }
    .area-success{
        /*padding-top: 15px;*/
        /*padding-top: 4px;*/
        text-align: center;
    }
    .area-btn button,.area-success button{
        color: white;
        background-color: #57585A;
        border: none;
        padding: 7px 25px;
        border-radius: 4px;
        font-size: 16px;
        margin-left: 5px;
    }
    .area-btn button:active,.area-success button:active{
        background-color: #393939;
    }

    /*在三个复用的代码块的基础在添加样式*/
    /*.block-disTip,#block-service,#board-personal,.menu-child{
        background: rgba(62,62,63,1);
    }*/
    #board-personal,.area-service{
        background: rgba(62,62,63,1);
    }
    .area-button a{
        box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
    }
</style>
<body>
<!--详细介绍-->
<main id="board-details" data-id="<?php echo $detail->id;?>">
    <div class="block-details">
        <img src="<?php echo __BACK__ .$detail->pHead;?>">
        <ul class="area-dtlsHd">
            <li><?php echo $detail->pName;?></li>
            <li>价格: <?php echo $detail->pPrice;?>&nbsp;&yen;</li>
        </ul>
        <p><?php echo $detail->pContent;?></p>
        <div class="area-btn">
            <button class="btn-collect">默默收藏</button>
            <button class="btn-buy">馬上就要</button>
        </div>
        <br/>
        <img src="<?php echo __BACK__ .$detail->pImage[0]->pi_image;?>">
        <img src="<?php echo __BACK__ .$detail->pImage[1]->pi_image;?>">
        <h4>产品尺寸</h4>
        <p><?php echo $detail->pSize;?></p>
        <br/>
        <h4>注意事项</h4>
        <p><?php echo $detail->pNotice;?></p>
        <img src="<?php echo __BACK__ .$detail->pImage[2]->pi_image;?>">
        <h4>快递问题</h4>
        <p><?php echo $detail->pExpress;?></p>
        <div class="area-btn">
            <button class="btn-collect">默默收藏</button>
            <button class="btn-buy">馬上就要</button>
        </div>
    </div>
    <div style="height: 100px;"></div>
</main>

<?php include "./Temp/menu.php";?>

<style>
    /*收藏成功*/
    #board-colTip{
        position: absolute;top: -30px;bottom: 100px;left: 0;right: 0;
        padding-top: 60px;padding-left: 20px;padding-right: 20px;
        visibility: hidden;opacity: 0;
    }
    .block-colTip{
        text-align: center;background: rgba(250,250,251,0.9);
        padding-top: 40px;padding-bottom: 20px;
        box-shadow: 5px 10px 15px #888888;
    }
    .area-tipImg{
        padding: 0 50px;
    }
    .area-tipImg img{
        margin-bottom: 50px;
        width: 100%;
    }
</style>
<!--收藏成功提示-->
<div id="board-colTip">
    <div class="block-colTip">
        <div class="area-tipImg">
            <img src="../Public/images/collectTip.png">
        </div>
        <div class="area-success">
            <button class="btn-check">前去查看</button>
            <button class="btn-view">繼續瀏覽</button>
        </div>
    </div>
</div>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<script type="text/javascript" src="../Public/js/issac.js"></script><!--issac类库-->
<script type="text/javascript" src="../Public/js/public.js"></script>
<script type="text/javascript">
    /*收藏*/
    $(".btn-collect").click(function(){
        var id =$("#board-details").attr("data-id");
        modelInT("#board-colTip","0");
        $(".btn-collect").text("已經收藏");
        $(".btn-collect").unbind();
    });
    /*购买-微信支付*/
    $(".btn-buy").click(function(){
        var id =$("#board-details").attr("data-id");
        window.location.href="buy.php?id="+id;
    });
    /*继续浏览*/
    $(".btn-view").click(function(){
        modelOutT("#board-colTip","-30px");
    });
</script>
<script type="text/javascript">
    $(function()
    {//这个是调用微信图片浏览器的函数
        //下面是获取当前页面所有的img的src 转成数组 并且 转换成json格式
        var aa=[];
        var i=0;
        var src=[];
        aa=$('.block-details img');
        for (i=0;i<aa.length;i++){
            src[i]=aa[i].src;    //把所有的src存到数组里
        }

        //下面是点击图片的时候获取当前第几个图片并且启用咱们做的调用微信图片浏览器的函数
        $('.block-details img').click(function(){
            var index = $('.block-details img').index(this);
            imagePreview(src[index],src);
        });


    });
    function imagePreview(curSrc,srcList) {
        //这个检测是否参数为空
        if(!curSrc || !srcList || srcList.length == 0) {
            return;
        }

        //这个使用了微信浏览器提供的JsAPI 调用微信图片浏览器
        WeixinJSBridge.invoke('imagePreview', {
            'current' : curSrc,
            'urls' : srcList
        });
    };
</script>
</body>
</html>