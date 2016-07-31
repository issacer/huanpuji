var href =window.location.href;
if(href.indexOf("?start") !=-1){
    var htmlStr ='<div id="board-transit"> <div class="block-indexImg"> ' +
        '<img class="item-logo" src="../Public/images/index.png"> </div> ' +
        '<div class="area-catena"> <ul class="item-list"> <div> ' +
        '<img src="../Public/images/zhi.png"> </div> <div> ' +
        '<img src="../Public/images/yushui.png"> </div> <div> ' +
        '<img src="../Public/images/wa.png"> </div> <div> ' +
        '<img src="../Public/images/lan.png"> </div> <div> ' +
        '<img src="../Public/images/keshou.png"> </div> </ul> </div> </div>';
    $("body").prepend(htmlStr);
}