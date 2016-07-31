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

$productId =$_GET['id'];

$handler =new BuyModel();
$detail =$handler->getProductDetail($productId);


