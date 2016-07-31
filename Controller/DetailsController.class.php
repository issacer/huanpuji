<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 13:30
 */
require_once "../Common/autoload.class.php";
session_start();

$id =$_GET['id'];
$handler =new DetailsModel();
$handler->handleId($id);

$detail =$handler->getProductDetail($id);
//var_dump($detail);exit;