<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/28
 * Time: 11:08
 */
error_reporting(E_ALL^E_NOTICE);    //不现实notice提示
/*入口文件*/
require_once "./Common/config/config.php";
$code =$_REQUEST['code'];
$href =__ROOT__."/Controller/StartController.class.php?code=".$code;
//header("location: $href");
echo '<script>window.location.href="'.$href.'";</script>';