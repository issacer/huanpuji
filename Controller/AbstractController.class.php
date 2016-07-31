<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 13:30
 */
require_once "../Common/function.php";
session_start();

$type =$_GET['type'];

$handler =new AbstractModel();
//获取logo
$logo =$handler->logo($type);
//过滤 $type 数据
handleType($type);
//产品列表
$productList =$handler->getProductList($type);

/*echo "<pre>";
print_r($productList);
echo "</pre>";exit;*/
