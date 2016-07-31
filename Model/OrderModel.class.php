<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 12:49
 */
require_once "../Common/autoload.class.php";
class OrderModel extends Model{
    public function __construct(){
    }

    public function getOrderList($uid){
        $url =__BACK__ ."/List/findListDetail?id=$uid";
        $res =$this->curl_get($url);
        var_dump($res);
    }
}