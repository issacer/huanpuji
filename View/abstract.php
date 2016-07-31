<?php require_once "../Controller/AbstractController.class.php"; ?>
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
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->
    <link rel="stylesheet" href="../Public/css/abstract.css"><!--public-->
    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>

    <title>懐璞集</title>
</head>

<body>
<!--系列产品的介绍-->
<div class="block-ctt">
    <ul>
        <!--logo-->
        <?php echo $logo;?>
        <?php for($i =0; $i <count($productList); $i++){?>
        <!--一个介绍卡-->
        <div class="area-abstract">
            <img src="<?php echo __BACK__. $productList[$i]->pHead;?>">
            <h4><?php echo $productList[$i]->pName;?></h4>
            <p><?php echo $productList[$i]->pContent;?></p>
            <div class="item-interest">
                <button class="btn-interest" data-id="<?php echo $productList[$i]->id;?>">有興趣</button>
            </div>
        </div>
        <?php }?>
    </ul>
    <div style="height: 100px;"></div>
</div>

<?php include "./Temp/menu.php";?>

<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<script type="text/javascript" src="../Public/js/issac.js"></script><!--issac类库-->
<script type="text/javascript" src="../Public/js/public.js"></script>
<script type="text/javascript">
    $(".btn-interest").click(function(){
        var id =$(this).attr("data-id");
        window.location.href="details.php?id="+id;
    });
</script>
</body>
</html>