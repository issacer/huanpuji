/**
 * Created by issac on 2016/5/30.
 * 需要引入juery
 */

/*-----------------public---------------------*/
/*跳转主页*/
$("#btn-index").click(function(){
    window.location.href="index.php";
});
/*一级菜单-陈列架*/
/*小三角唤出系列菜单*/
$(".btn-pointer").click(function(){
    var status =$(this).attr("data-status");
    if(status =="off") {
        toggle();
        displayShow();
    }
});
/*点击背景关闭小三角唤出的系列菜单*/
$("#board-menuChild").click(function(){
    displayhide();
    $.pointerOff();
});
/*点击系列菜单，阻止背景点击事件的冒泡*/
$(".menu-child").click(function(event){
    event.stopPropagation();
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

//异步检测是否有存货
$.ajaxExistProduct =function (type){
    var url =__back__ +"/Product/findProductByType?pType="+type;
    // alert(url); 
    $.ajax({
        type: "post",
        url: url,
        dataType: "JSONP",
        cache: false,
        success: function (sender) {
            alert(JSON.stringify(sender));return false;
            if(sender['status'] ==false){
                alert('fail');
            }else {
                alert('success');
            }
        },
        error: function(){

        }
    });
};
/*陈列架的二级菜单*/
$(".block-display li").click(function(){
    var type =$(this).attr("data-ty");
    loadshow();
    $.ajaxExistProduct(type);
    return false;
    setTimeout(function(){
        disTipShow();
        loadhide();
    },1000);
});

//关闭没货提示
$(".disBtn-close").on("click", function () {
    disTipHide();
});

/*陈列架二级菜单的轮播*/
var mySwiper = new Swiper('.swiper-container',{
    pagination : '.swiper-pagination',
    loop: true
});

//改变“小三角”的状态为“已唤出菜单”
$.pointerOn =function(){
    $(".btn-pointer").attr("data-status","on");
};
//改变“小三角”的状态为“未唤出菜单”
$.pointerOff =function(){
    $(".btn-pointer").attr("data-status","off");
};
/*陈列架二级菜单显示*/
function displayShow(){
    $(".btn-pointer").addClass("trans");
    window.recordI ="btn-display";
    modelInB("#board-menuChild", "127px");
    $.pointerOn();
}
/*陈列架二级菜单隐藏*/
function displayhide(){
    if(window.recordII !=""){
        disTipHide();
    }
    $(".btn-pointer").removeClass("trans");
    modelOutB("#board-menuChild", "105px");
    window.recordI ="";
}

/* 模态框切换 */
/*   recordI :记录当前是那个模态框被弹出，用于触发另一模态框时关闭被记录的模态框
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
/*------------------------------*/
/*服务模态框显示*/
function serviceShow(){
    $(".item-pointSer img").addClass("trans");
    $("#btn-service").attr("data-order","on");

    window.recordI = "btn-service";
    modelInB("#block-service", "102px");

    $.pointerOn();
}
/*服务模态框隐藏*/
function serviceHide(){
    $(".item-pointSer img").removeClass("trans");
    $("#btn-service").attr("data-order","off");
    modelOutB("#block-service", "70px");
    window.recordI = "";

    $.pointerOff();
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
/*服务模态框的“关闭”按钮*/
$("#block-service .disBtn-close").click(function(){
    serviceHide();
});


/*------------------------------*/
/*个人模态框显示*/
function personalShow(){
    $(".item-pointSer img").addClass("trans");
    $("#btn-personal").attr("data-order","on");

    window.recordI = "btn-personal";
    modelInB("#board-personal", "102px");

    $.pointerOn();
}
/*服务模态框隐藏*/
function personalHide(){
    $(".item-pointSer img").removeClass("trans");
    $("#btn-personal").attr("data-order","off");
    modelOutB("#board-personal", "70px");

    window.recordI = "";

    $.pointerOff();
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

