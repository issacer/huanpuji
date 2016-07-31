<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 13:33
 */
require_once "../Common/autoload.class.php";
class BuyModel extends Model{
    public function getProductDetail($id){
        $url =__BACK__ ."/Product/findOne?id=$id";
        $res =json_decode($this->curl_get($url));
//        var_dump($res);exit;
        if($res->status !==false){
            return $res->productOne[0];
        }else { //数据为空
            return false;
        }
    }
}