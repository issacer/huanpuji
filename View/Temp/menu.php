<!-- javascript-config -->
<script>
    var __back__ ="<?php echo __BACK__;?>";
</script>

<!--陈列架系列产品-没货提示-->
<div class="block-disTip">
    <div>
        <img class="disBtn-close" src="../Public/icons/close.png">
        <img style="width: 100%;" src="../Public/images/p2.jpg">
        <p class="item-disTip">该系列产品正在懐璞集工厂中紧锣密鼓地制造着，希望很快您就能买到哦。</p>
    </div>
</div>

<!--陈列架二级菜单-->
<div id="board-menuChild">
    <menu class="menu-child">
        <div class="swiper-container block-display">
            <div class="swiper-wrapper">
                <div class="swiper-slide item-displayI">
                    <li data-ty="beiju"><img src="../Public/icons/bei.png">杯具</li>
                    <li data-ty="chapan"><img src="../Public/icons/chatai.png">茶盘</li>
                    <li data-ty="haocha"><img src="../Public/icons/haocha.png">好茶</li>
                    <li data-ty="zhuju"><img src="../Public/icons/zhuju.png">煮具</li>
                    <li data-ty="chaju"><img src="../Public/icons/chaju.png">茶具</li>
                </div>
                <div class="swiper-slide item-displayII">
                    <li data-ty="zhi"><img src="../Public/icons/zhi.png">止系列</li>
                    <li data-ty="lanpu"><img src="../Public/icons/lanpu.png">阑浦系列</li>
                    <li data-ty="wa"><img src="../Public/icons/wa.png">瓦系列</li>
                    <li data-ty="yushui"><img src="../Public/icons/yushui.png">雨水系列</li>
                    <li data-ty="keshou"><img src="../Public/icons/keshou.png">可手系列</li>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </menu>
</div>

<!--客服-->
<div id="block-service" data-order="off">
    <div class="area-service">
        <div class="item-ctt">
            <!--关闭按钮-->
            <img class="disBtn-close" src="../Public/icons/close.png">
            <p>如果你对&nbsp;懐璞集&nbsp;产品有任何疑问，<br/>请记下您的疑问，点击下方按钮跳转<br/>至公众号页面进行客服问答。<br/>
                或者拨打我们的客服电话：<br/>
                <a href="tel:400-120-2333">400-120-2333</a><br/>
                如果你不是我们公众号的粉丝，可长按扫描下面二维码进入我们的客服公众号：</p>
            <div class="item-srcode">
                <img src="../Public/images/srCode.png">
            </div>
        </div>
    </div>
</div>

<!--个人中心-->
<?php $userMsg =$_SESSION['usermsg']; ?>
<div id="board-personal">
    <div class="block-personal">
        <div class="block-perBorder" data-uid="%s">
            <div class="area-hd">
                <img src="../Public/images/hdImg.png">
                <p>我是人名</p>
            </div>
            <div class="area-button">
                <div class="attr-pdR">
                    <a class="param-normal" href="order.php?id=<?php echo $userMsg['uid'];?>">我的訂單</a>
                </div>
                <div class="attr-pdL">
                    <a class="param-normal" href="collect.php?id=<?php echo $userMsg['uid'];?>">藏寶箱</a>
                </div>
            </div>
            <div class="area-button">
                <div class="attr-pdR">
                    <a class="param-normal" onclick="perTipShow()">個人信息</a>
                </div>
                <div class="attr-pdL">
                    <a class="param-normal" href="address.php?id=<?php echo $userMsg['uid'];?>">收貨地址</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--个人信息的提示-->
<div id="board-perTip">
    <div class="block-perTip">
        <div class="block-perTip-child">
            <div class="area-perTip">
                <img onclick="perTipHide()" src="../Public/icons/close3.png">
                <p>哎呀！懐璞集现在还小，买不起好的服务器，压力有点山大，
                    过段时间再把您美美的照片传上来哦。实在抱歉呀！</p>
                <div class="item-perTip">
                    <button onclick="perTipHide()">好了原谅你 : )</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--底部菜单（public）-->
<div class="bottom-menu">
    <div class="item-pointSer">
        <img class="btn-pointer" data-status="off" src="../Public/icons/pointI.png">
    </div>
    <ul>
        <li id="btn-index"><div><img src="../Public/icons/home.png" alt="">首頁</div></li>
        <li id="btn-display" onclick='location.href="abstract.php"'><div><img src="../Public/icons/ripe.png">陳列架</div></li>
        <li id="btn-service" data-order="off"><div><img src="../Public/icons/service.png" alt="">客服</div></li>
        <li id="btn-personal" data-order="off"><div><img src="../Public/icons/user.png" alt="">個人</div></li>
    </ul>
</div>