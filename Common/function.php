<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 18:04
 */
require_once "../Common/config/config.php";
require_once "autoload.class.php";
header("content-type: text/html;charset=utf-8");
/**
 * @link    过滤 $type 数据
 * @param   $type 产品类型
 * */
function handleType(&$type){
    switch($type){
        case "beiju":break;
        case "chapan":break;
        case "haocha":break;
        case "zhuju":break;
        case "chaju":break;
        case "zhi":break;
        case "lanpu":break;
        case "wa":break;
        case "yushui":break;
        case "keshou":break;
        case "": break;
        default:
            exit("数据丢失，请稍后再试！");
    }
}