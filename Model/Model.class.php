<?php
/**
 * Created by PhpStorm.
 * User: issac
 * Date: 2016/7/23
 * Time: 11:54
 */
abstract class Model{
    function __construct(){

    }

    /**
     * @link    cur_post请求数据
     * @param   $postData ="" post传递的数据
     * @param   $url 目标链接
     * @return  json/array
     * */
    public function curl_post($url, $postData =""){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }

    /**
     * @link    curl_get 请求数据
     * @param   $url 目标链接
     * @return  json/array
     * */
    public function curl_get($url){
        $ch = curl_init();

        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        //执行并获取HTML文档内容
        $output = curl_exec($ch);

        //释放curl句柄
        curl_close($ch);

        return $output;
    }

    /**
     * @link    alert提示信息
     * @param   $msg 提示信息
     * */
    public function alert($msg){
        header("content-type:text/html;charset=utf-8;");
        echo '<script>alert("'.$msg.'")</script>';
        exit;
    }

    /**
     * @link    建立session
     * @param   $index session的索引
     * @param   $value session的键值
     * @return  int
     * */
    public function setSession($index, $value){
        ob_start();
        session_start();
        if(isset($_SESSION[$index])){
            if($_SESSION[$index] !=$value){
                $_SESSION[$index] =$value;
                if($_SESSION[$index] !=$value){
                    $this->alert("访问微信接口错误，请稍后再试");
                }
            }
        }else{
            $_SESSION[$index] =$value;
            if($_SESSION[$index] !=$value){
                $this->alert("访问微信接口错误，请稍后再试");
            }
        }
        return session_id();
    }

    /**
     * @link    重定向
     * @param   $url
     * */
    public function redirect($url){
        if(isset($url)){
            header("location: $url");
        }else {
            $this->alert("错误链接，请重新登陆 或 联系客服!");
        }
    }

    /**
     * */
    public function isLogin(){

    }

    /**
     * @link    post跳转
     * @param   $url
     * @param   $params 参数
     * */
    public function redirect_post($url, $params){
        $html ="<form id='post_form' method='post' action='$url'>%s</form>";
        $dataHtml = '';
        foreach($params as $index=>$value){
            $dataHtml .="<input type='hidden' name='$index' value='$value'/>";
        }
        $html =sprintf($html,$dataHtml);
        $script ='<script type="text/javascript">'.
            'document.getElementById("post_form").submit();'.
            '</script>';
//        echo htmlspecialchars($html.$script);
        echo $html.$script;
    }

    public function isGetUid($uid){
        if($uid =="" ||
        !isset($uid) ||
        $uid ==null
        ){
            $this->alert("数据丢失请重新进入！");
            exit;
        }
    }
}