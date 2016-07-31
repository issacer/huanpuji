<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 12:49
 */
require_once "../Common/autoload.class.php";
class StartModel extends Model{
    private $weChat =null;

    public function __construct(){
    }

    /**
     * @link    获取微信的json数据包
     * @param   $code 微信返回码
     * @return  string/json
     * */
    public function getJsonFormServer($code){
        $url ="https://api.weixin.qq.com/sns/oauth2/access_token?".
            "appid=".APPID."&secret=".SECRET."&code=$code&grant_type=authorization_code";
        $json=file_get_contents($url); // 访问在里面进行了
        $weChat =json_decode($json);
        $this->weChat =$weChat;
        return $weChat;
    }

    /**
     * @link    获取openid
     * @param   $code 微信返回码
     * @return  string
     * */
    public function getOpenid($code){
        $json =$this->getJsonFormServer($code);
        return $json->openid;
    }

    /**
     * @link    根据openid获取用户信息
     * */
    public function getUserMsgByOpenId(){
        $url =__BACK__ ."/User/findUser?username=".$_SESSION['openid'];
        $userMsg =json_decode($this->curl_get($url));
        if($userMsg->status){
            return $userMsg->findUser[0];
        }else {
            return false;  //新用户应该创建新用户
        }
    }

    /**
     * @link    创建新用户，并返回新纪录id
     * */
    public function setupNewUser(){

    }

    /**
     * @link    获取头像src
     * @return  string
     * */
    public function getUserMsgFromJson(){
        $access_token =$this->weChat->access_token;

        $uri ="https://api.weixin.qq.com/sns/userinfo?access_token=$access_token".
            "&openid=".$_SESSION['openid']."&lang=zh_CN";
        $json =file_get_contents($uri);
        $message =json_decode($json);
        return $message;
    }
}