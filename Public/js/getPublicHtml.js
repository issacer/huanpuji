/*获取公共的html代码*/
$.ajax({url: "../Controller/TempController.php",
    type: "post",
    data: {func: "getDisplay"},
    dataType: "text",
    async: false,
    success:function(res){
        $("body").prepend(res);
    }
});