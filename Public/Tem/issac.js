/**
 * Created by issac on 2016/5/30.
 * 需要引入juery
 */
//显示加载器
function loadshow(){
    var loadStr='<ul id="loading" style="opacity: 0;display: table;width: 100%;height:100%;position: absolute;top:0;left:0;z-index: 30;"> ' +
        '<li style="display: table-cell;text-align: center;vertical-align: middle;"> ' +
        '<img style="width: 43px;background: black;padding: 15px;border-radius: 6px;" src="http://localhost/proI/Public/icons/load.gif"> ' +
        '</li> ' +
        '</ul>';
    $("body").append(loadStr);
    $("#loading").animate({
        opacity: 1
    },500);
}

//隐藏加载器
function loadhide(){
    $("#loading").animate({
        opacity: 0
    },500);
    setTimeout(function(){
        $("#loading").remove()
    },500);
}
//模态框
/* 起始：上 */
function modelOutT(target, top){
    var objModel =$(target);
    objModel.animate({
        opacity: "0",
        top: top
    },250);
    setTimeout(function(){
        objModel.css("visibility","hidden");
    },200);
}
function modelInT(target, top){
    var objModel =$(target);
    objModel.css("visibility","visible");
    setTimeout(function(){
        objModel.animate({
            opacity: "1",
            top: top
        }, 250);
    },150);
}
/* 起始位置： 下 */
function modelInB(target, bottom){
    var objModel =$(target);
    objModel.css("visibility","visible");
    setTimeout(function(){
        objModel.animate({
            opacity: "1",
            bottom: bottom
        }, 250);
    },150);
}
function modelOutB(target, bottom){
    var objModel =$(target);
    objModel.animate({
        opacity: "0",
        bottom: bottom
    },250);
    setTimeout(function(){
        objModel.css("visibility","hidden");
    },200);
}