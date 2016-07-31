<?php

class HelperModel{
    public $mysqli =null;
    public $root =null;
    public $host =null;
    function __construct(){
        /*$info =simplexml_load_file("conf.xml");
        //将根节点的子元素放进一个数组
        $dataInfo =$info->data;
        //取出第一个子元素
        $data =$dataInfo[0];
        //取出data标签里的数据
        $host =$data->host;
        $account =$data->account;
        $password =$data->password;
        $DBName =$data->dataBaseName;*/

//        require_once $_SERVER['DOCUMENT_ROOT']."ydnurse/config.php";
//        $this->root =$config['DOCUMENT_ROOT'];
//        $this->host =$config['DB_HOST'];
        $host ="119.29.200.13";
        $user ="hpj";
        $pwd ="950108";
        $mysqli =new MySQLi($config['DB_HOST'], $config['DB_USER'], $config['DB_PWD'],$config['DB_NAME']);
        if($mysqli->connect_error){
            die("数据库连接失败，请稍后再试(:0001)！");
        }else {
            $this->mysqli =$mysqli;
            $mysqli->set_charset('utf8');       //设置字符编码
        }

    }

    public function __call($funcName, $params){ //1.不存在的方法名 2.参数列表的数组
        exit("func: $funcName is not exist!");
    }
    public function ___set($name, $value){
        $this->$name =$value;
    }

    public function ___get($name){
        return $this->$name;
    }

    /*  功能：      查询语句（返回以字段值做索引值的数组）
     *  发送失败：   返回错误信息
     *  结果集为空： 返回 0
     *  其他：      返回 结果集的数组
     * */
    public function select($order){     //返回结果数组
        if(!$res =$this->mysqli->query($order)){	//语句发送失败
            return $this->mysqli->error;
        }else {
            if($res->num_rows ==0){     //结果集为空
                return 0;
            }else { //结果集不为空
                $i = 0;
                while ($row[$i++] = $res->fetch_assoc()) ;
                unset($row[$i - 1]);
                $res->free();
                return $row;
            }
        }
    }

    /*  功能： 返回影响行数
     *  发送失败： 返回错误信息
     *  其他： 返回影响行数
     * */
    public function count($order){
        $res =$this->mysqli->query($order);
        if(!$res){
            exit($this->mysqli->error);
        }else {
            $row =$res->num_rows;
            $res->free();
            return $row;
        }
    }

    /*  功能：      查询语句（返回以数字做索引值的数组）
     *  发送失败：   返回错误信息
     *  结果集为空： 返回 0
     *  其他：      返回 结果集的数组
     * */
    public function find($order){
        if(!$res =$this->mysqli->query($order)){	//语句发送失败
            return $this->mysqli->error;
        }else {
            if($res->num_rows ==0){     //结果集为空
                return 0;
            }else { //结果集不为空
                $i = 0;
                while ($row[$i++] = $res->fetch_row()) ;
                unset($row[$i - 1]);
                $res->free();
                return $row;
            }
        }
    }

    /*  发送失败：　返回错误信息
     *  结果集为空：　返回　０
     *  其他：　返回一位数组的结果集数组
     * */
    public function getRow($order){
        if(!$res =$this->mysqli->query($order)){	//语句发送失败
            return false;
        }else {
            if($res->num_rows ==0){     //结果集为空
                return 0;
            }else { //结果集不为空
                $row = $res->fetch_assoc();
                $res->free();
                return $row;
            }
        }
    }

    /*  功能呢： 获取字段对应数据值
     *  发送失败： 返回错误信息
     *  结果集空： 返回 0
     *  其他返回： 字段对应的数据值
     * */
    public function getField($order){
        if(!$res =$this->mysqli->query($order)){	//语句发送失败
            return $this->mysqli->error;
        }else {
            if($res->num_rows ==0){     //结果集为空
                return 0;
            }else { //结果集不为空
                $field = $res->fetch_assoc();
                $arr = explode(" ", $order);
                $name = $arr[1];
                unset($arr);
                $res->free();
                return $field[$name];
            }
        }
    }

    /*  功能：执行更新或插入或删除操作
     *  发送失败： 返回 错误信息
     *  其他： 返回影响行数
     * */
    public function execute($order){    //更新插入操作
        $res =$this->mysqli->query($order);
        if(json_encode($res) =="false"){    //发送出错
            return $this->mysqli->error;
        }else{
            return $res;    //返回影响行数
        }
    }

    /*开启事务*/
    public function startTrans(){
        $this->mysqli->autocommit(false);
    }

    /*提交事务*/
    public function commit(){
        $this->mysqli->commit();
    }
    /*事务回滚*/
    public function rollback(){
        $this->mysqli->rollback();
    }
    /*返回错误信息*/
    public function errorTip(){
        $this->mysqli->error;
    }
}
