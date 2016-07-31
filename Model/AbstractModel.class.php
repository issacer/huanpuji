<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 13:31
 */
require_once "../Common/autoload.class.php";
class AbstractModel extends Model{
    /**
     * @link    处理是否显示logo、显示什么类型的logo
     * @param   $type 类型
     * @return  string/boolean
     * */
    public function logo($type){
        $html ='<div style="padding: 7px;"></div>';
        if(
            $type !="" &&
            $type !=null &&
            isset($type)
        ){
            switch($type){
                case "zhi":
                    $image ="zhi.png";break;
                case "lanpu":
                    $image ="lan.png";break;
                case "wa":
                    $image ="wa.png";break;
                case "yushui":
                    $image ="yushui.png";break;
                case "keshou":
                    $image ="keshou.png";break;
                default:
                    $image =false;
            }
            if($image !=false){
                $html ='<div class="area-logo">'.
                '<img src="../Public/images/'.$image.'">'.
                '</div>';
            }
        }
        return $html;
    }
    
    /**
     * @link    获取产品列表
     * @param   $type 产品类型
     * @return  json/array/string
     * */
    public function getProductList($type){
        if(!$type){
            $url =__BACK__ ."/Product/findProductAll";
        }else {
            $url =__BACK__ ."/Product/findProductByType?pType=".$type;
        }
        $res =json_decode($this->curl_get($url));
        if($res->status !==false){
            return !$type ?$res->productList :$res->productType;
        }else { //数据为空
            return false;
        }
    }
}