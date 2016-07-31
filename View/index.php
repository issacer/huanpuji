<?php require_once "../Controller/IndexController.class.php"; ?>
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
    <link rel="stylesheet" href="../Public/css/index.css">
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->
    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>
    <title>懐璞集</title>
</head>
<body>
<!--判断是否要显示过渡图片-->
<script type="text/javascript" src="../Public/js/loadScreen.js"></script>

<!--背景图片-->
<main>
    <div class="swiper-pagination1 space-point"></div>
    <div class="swiper-container1" style="height: 100%;z-index: -1;">
        <div class="swiper-wrapper">
            <?php for($i =0; $i <7; $i++){?>
            <div class="swiper-slide slide-bg"
                 onclick='location.href="details.php?id=<?php echo $recommendList[$i]->id;?>"'>
                <img src="<?php echo __BACK__ .$recommendList[$i]->pHead;?>">
            </div>
            <?php }?>
        </div>
    </div>
</main>

<?php include "./Temp/menu.php";?>

<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<!--<script type="text/javascript" src="../Public/js/getPublicHtml.js"></script><!--public-->-->
<script type="text/javascript" src="../Public/js/issac.js"></script><!--issac类库-->
<script type="text/javascript" src="../Public/js/public.js"></script>
<script type="text/javascript">
    /*背景图片的轮播*/
    var mySwiper1 = new Swiper('.swiper-container1',{
        pagination : '.swiper-pagination1',
        loop: true
    });
    /*过渡图片的淡出*/
    $(window).load(function(){
        setTimeout(function(){
            $(".item-logo,.item-list").fadeIn(1000);
        },500);
        setTimeout(function(){
            $("#board-transit").fadeOut(1000);
        },2000);
    });
</script>
</body>
</html>