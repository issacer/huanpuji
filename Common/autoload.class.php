<?php
error_reporting(E_ALL^E_NOTICE);    //不现实notice提示
//error_reporting(0);     //不显示warning提示

require_once "../Common/config/config.php";
function __autoload($className) {
    $filename = "../Controller/". $className .".class.php";
    if(!file_exists($filename)){
        $filename = "../Model/". $className .".class.php";
    }
//    echo $filename;
    require_once "$filename";
}