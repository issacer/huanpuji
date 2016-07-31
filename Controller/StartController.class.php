<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/14
 * Time: 23:25
 */
require_once "../Common/function.php";
header("content-type: text/html;charset=utf-8;");
$handler =new StartModel();
$url =__ROOT__ ."/Controller/test.php";

$code =$_REQUEST['code'];

/*$openId =$handler->getOpenid($code);
$handler->setSession("openid", $openId);
$userMsgWeChat =$handler->getUserMsgFromJson();*/

$openId ="oIy8Zs0oiF55wUgiC3YrLufqKAjM";
$handler->setSession("openid", $openId);

$userMsg =$handler->getUserMsgByOpenId();
if(!$userMsg){  //新用户
    $uid =$handler->setupNewUser(); 
}else {     //旧用户
    $uid =$userMsg->id;
}

$data =array(
    "uid"       =>$uid,
    /*"headimgurl"=>$userMsgWeChat->headimgurl,
    "nickname"  =>$userMsgWeChat->nickname*/
);
/*var_dump($_SESSION['usermsg']);
unset($_SESSION['usermsg']);
var_dump($_SESSION['usermsg']);exit;*/

$sessionId =$handler->setSession("usermsg", $data);
//echo $sessionId;exit;
/*echo "<pre>";
print_r($_SESSION['usermsg']);
echo "</pre>";
exit;*/
$href =__ROOT__ ."/View/index.php";
$params =array("sessionid"=>$sessionId);
$handler->redirect($href);
//$handler->redirect_post($href, $params);


