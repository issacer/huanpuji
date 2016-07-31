<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/5/30
 * Time: 20:05
 */
error_reporting(E_ALL^E_NOTICE);    //不现实notice提示
require_once "../Common/function.php";
class TempController extends Model{
    private $urlHd =null;
    
    public function __construct($urlHd){
        $this->urlHd =$urlHd."/Public/Tem/";
    }

    public function getDisplay(){
        $openId ="oIy8Zs0oiF55wUgiC3YrLufqKAjM";
        $url =__BACK__ ."User/findUser?username=$openId";
        $res =json_decode($this->curl_get($url));
        /*if($res->status){
            $ctt =file_get_contents($this->urlHd."display.html");
//            sprintf($ctt,)
        } */
        $ctt =file_get_contents($this->urlHd."display.php");
        echo $ctt;
    }

    public function getDisTip(){
//        $ty =$_POST['ty'];
        $disNum =$_POST['disNum'];
        $res =false;
        if(!$res) {
            if($disNum ==1) {
                $ctt = file_get_contents($this->urlHd . "disTip.html");
                echo $ctt;
            }else{
                echo 0;
            }
        }else{
            echo 1;
        }
    }
}

$func =$_REQUEST['func'];
$temp =new TempController(__ROOT__);
$temp->$func();