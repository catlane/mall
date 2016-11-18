<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/23
 * Time: 9:40
 */
    namespace web\admin\controller;
    class Login{
        private $db;
        public function __construct(){
            $this->db = new \system\model\Admin_login();
        }

        public function index(){
            if(IS_POST){
                if($this->db->login()){
                    //然后存入登录日志中
                    $server = array();
                    $server['loginLog_address'] = $this->getAddress($_SERVER['HTTP_HOST']);
                    $server['loginLog_IP'] = $_SERVER['HTTP_HOST'];//这是将登录IP地址记录进去
                    $server['loginLog_time'] = time();//这是将登录时间记录进去
                    $server['admin_user_admin_user_id'] = $_SESSION['admin_user_id'];
                    if(!$server['loginLog_address']){
                        $server['loginLog_address'] = '网络信号不好，获取地理位置失败！';
                    }
                    Db::table('loginlog')->insert($server);
                    message('登陆成功，跳转中...',u("index/index"),'success');
                    die();
                }
                message($this->db->getError(),'back','error');
                die();
            }
            View::make();
        }
        public function quit(){
            session_destroy();
            session_unset();
            go(u('login/index'));
        }
        public function getAddress($queryIP){
            $url = 'http://ip.qq.com/cgi-bin/searchip?searchip1='.$queryIP;
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_ENCODING ,'gb2312');
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
            $result = curl_exec($ch);
            $result = mb_convert_encoding($result, "utf-8", "gb2312"); // 编码转换，否则乱码
            curl_close($ch);
            preg_match("@<span>(.*)</span></p>@iU",$result,$ipArray);
            $loc = $ipArray[1];
            return $loc;
        }
        public function __empty(){
            View::make("common/__empty");
        }
    }