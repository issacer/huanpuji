<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/6/11
 * Time: 20:10
 */
$config =array(
    "APPID"     =>"wxc6eb97e3b6a2c475",
    "SECRET"    =>"36c0a5c02af5898efd0d52856c3b32fe",
    "__ROOT__"  =>"http://".$_SERVER['SERVER_NAME']."/huanpuji",
    "__BACK__"  =>"http://119.29.200.13:8080/hpj"
);
 
foreach($config as $key => $val){ define($key, $val);}