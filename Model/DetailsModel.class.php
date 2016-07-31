<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 13:33
 */
require_once "../Common/autoload.class.php";
class DetailsModel extends Model{

    /**
     * @link    处理id是否缺失
     * @param   $id 产品的id
     * */
    public function handleId(&$id){
        if($id ==null){
            $this->alert("数据丢失，请稍后再试");
            exit; 
        }
    }

    /**
     * */
    public function getProductDetail($id){
        header("content-type: text/html;charset=utf-8;");
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