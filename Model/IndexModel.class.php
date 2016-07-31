<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 12:49
 */
require_once "../Common/autoload.class.php";
class IndexModel extends Model{

    public function __construct(){
    }

    /**
     * @link    获取7个推荐产品的信息
     * @return  array
     * */
    public function getRecommend(){
        //$recommendList[0]->pSize;
        $url = __BACK__ ."/Product/findSeven";
//        echo $url;exit;
        $res =$this->curl_get($url);
        $json =json_decode($res);
//        var_dump($json->productSeven);exit;
        if(!$json->status){
            $this->alert("网络错误,请售后再试!");
        }else{
            return $json->productSeven;
        }
    }
    
    public function handleSessionId($sessionId){
        session_id($sessionId);
        session_start();
    }

    public function getIssac(){
        echo $this->issac;
    }
}