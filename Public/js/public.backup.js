/**
 * Created by issac on 2016/5/30.
 * 需要引入juery
 */

/*-----------------public---------------------*/
/*跳转主页*/
$("#btn-index").click(function(){
    window.location.href="index.html";
});
/*获取陈列架二级菜单没货的提示*/
/*显示提示*/
function disTipShow(){
    modelInT(".block-disTip", "0");
    window.recordII ="block-disTip";
}
/*隐藏提示*/
function disTipHide(){
    modelOutT(".block-disTip", "-30px");
    window.recordII="";
}
var disNum =0;
function getDisTip(ty){
    window.disNum++;
    $.ajax({
        url: "../Controller/TempController.php",
        type: "post",
        data: {
            func: "getDisTip",
            ty: ty,
            disNum: window.disNum
        },
        dataType: "text",
        async: false,
        success:function(res){
            if(res ==1){
                window.location.href="abstract.html?ty="+ty;
            }else if(window.disNum ==1){   //首次请求
                //alert(res);return false;
                $("body").prepend(res);
                $(".disBtn-close").on("click", function () {
                    disTipHide();
                });
            }
        }
    });
}
/*陈列架的二级菜单*/

$(".block-display li").click(function(){
    var ty =$(this).attr("data-ty");
    loadshow();
    setTimeout(function(){
        getDisTip(ty);
        //alert("该系列的残品还在紧锣密鼓赶工中!");
        disTipShow();
        loadhide();
    },1000);
});

/*陈列架二级菜单的轮播*/
var mySwiper = new Swiper('.swiper-container',{
    pagination : '.swiper-pagination'
    /*loop: true*/
});
/*陈列架二级菜单显示*/
function displayShow(){
    $(".item-point").addClass("trans");
    window.recordI ="btn-display";
    modelInB(".menu-child", "100px");
    // $("#btn-display").attr("data-order","on");
}
/*陈列架二级菜单隐藏*/
function displayhide(){
    if(window.recordII !=""){
        disTipHide();
    }
    $(".item-point").removeClass("trans");
    modelOutB(".menu-child", "80px");
    window.recordI ="";
    // $("#btn-display").attr("data-order","off");
}
/* 模态框切换 */
/*
 *   recordI :记录当前是那个模态框被弹出，用于触发另一模态框时关闭被记录的模态框
 *   recordII:记录陈列架的二级菜单点击后是否出现没货的提示框，功能同上
 * */
var recordI ="",recordII ="";
/*用于切换不同的模态框*/
function toggle(){
    if(window.recordI !=""){
        if(window.recordI =="btn-service") {
            serviceHide();
        }else if(window.recordI =="btn-display"){
            if(window.recordII !=""){
                disTipHide();
            }
            displayhide();
        }else if(window.recordI =="btn-personal"){
            //个人中心
            personalHide();
        }

    }
}
/*一级菜单-陈列架*/
/*$("#btn-display").click(function(){
    var val =$(this).attr("data-order");
    if(val =="off"){
        toggle();
        displayShow();

    }else {
        displayhide();
    }
});*/
/*------------------------------*/
/*服务模态框显示*/
function serviceShow(){
    $(".item-pointSer img").removeClass("trans");
    $("#btn-service").attr("data-order","on");

    window.recordI = "btn-service";
    modelInB("#block-service", "98px");
}
/*服务模态框隐藏*/
function serviceHide(){
    $(".item-pointSer img").addClass("trans");
    $("#btn-service").attr("data-order","off");
    modelOutB("#block-service", "70px");

    window.recordI = "";
}
/*一级菜单-客服*/
$("#btn-service").click(function(){
//        alert($(this).attr("data-order"));
    if($(this).attr("data-order") =="off") {
        toggle();
        serviceShow();
    }else{
        serviceHide();
    }
});
/*服务模态框的关闭按钮*/
$("#block-service .disBtn-close").click(function(){
    serviceHide();
});
/*------------------------------*/
/*个人模态框显示*/
function personalShow(){
    $(".item-pointPer img").removeClass("trans");
    $("#btn-personal").attr("data-order","on");

    window.recordI = "btn-personal";
    modelInB("#board-personal", "98px");
}
/*服务模态框隐藏*/
function personalHide(){
    $(".item-pointPer img").addClass("trans");
    $("#btn-personal").attr("data-order","off");
    modelOutB("#board-personal", "70px");

    window.recordI = "";
}
/*一级菜单-个人中心*/
$("#btn-personal").click(function(){
//        alert($(this).attr("data-order"));
    if($(this).attr("data-order") =="off") {
        toggle();
        personalShow();
    }else{
        personalHide();
    }
});

/*------个人信息的提示--------*/
/*显示个人提示*/
function perTipShow(){
    modelInT("#board-perTip","-30px");
}
/*隐藏个人信息的提示*/
function perTipHide(){
    modelOutT("#board-perTip","-60px");
}

/*-------------*/
/*
var scrollHeight =$(window).height();
var scrollWidth =$(window).width();
alert(scrollHeight+"\n"+scrollWidth);
if(scrollHeight <568){

    $(".area-button a").removeClass("param-normal");
    $(".area-button a").addClass("param-special");
}
*/
