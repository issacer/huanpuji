<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/14
 * Time: 23:25
 */
require_once "../Common/function.php";
header("content-type: text/html;charset=utf-8;");
session_start();

$handler =new IndexModel();
/*$sessionId =$_POST['sessionid'];
$handler->handleSessionId($sessionId);*/

$handler->isLogin();
$recommendList =$handler->getRecommend();



