<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/5/30
 * Time: 20:05
 */
$code =$_REQUEST['code'];
$appId ="wxc6eb97e3b6a2c475";
$secret ="36c0a5c02af5898efd0d52856c3b32fe";
$url ="https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appId&secret=$secret&code=$code&grant_type=authorization_code";
$json=file_get_contents($url); // 访问在里面进行了
$obj=json_decode($json);
$access_token =$obj->access_token;
$openid =$obj->openid;

$uri ="https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
$jsonII =file_get_contents($uri);
echo $jsonII;