<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 9:35
 */
    namespace web\home\controller;
    class Login{
        private $db;
        public function __construct(){
            $this->db = new \system\model\Member_user();
        }

        //这是现实页面
        public function index(){
            View::make();
        }

        //这是登陆
        public function login(){
            if($this->db->login()){
                message($this->db->getError(),'','success');
            }else{
                message($this->db->getError(),'','error');
            }
        }

        //这是注册
        public function registered(){
            //先将密码这个字段写进去
            foreach ($_POST as $key => $value){
                if($key == "member_user_password1"){//这是手机
                    $_POST['member_user_password'] = $value;
                    //这是将注册方式当作昵称
                    $_POST['member_user_nickname'] = $_POST['member_user_phone'];
                }
                if($key == "member_user_password2"){//这是邮箱
                    $_POST['member_user_password'] = $value;
                    //这是将注册方式当作昵称
                    $_POST['member_user_nickname'] = $_POST['member_user_email'];
                }
            }
            $_POST['member_user_username'] = time();//这是账号
            if($this->db->registered()){
                message("添加成功，请登录",'','success');
            }else{
                message($this->db->getError(),'','error');
            }
        }
        //这里是显示验证码
        public function CodeImg(){
            Code::width(75)->height(48)->num(1)->make();
        }
        //这里是验证验证码
        public function yzCode(){
            $code = $_POST['code'];
            if(strtoupper($code) == strtoupper($_SESSION['code'])){
                echo 1;
            }else{
                echo 0;
            }
        }
        //这里是验证手机号码
        public function yzPhone(){
            if(in_array($_POST['phone'],$this->db->lists('member_user_phone'))){
                echo 1;
            }else{
                echo 0;
            }
        }

        //这里是验证手机号码
        public function yzEmail(){
            if(in_array($_POST['email'],$this->db->lists('member_user_email'))){
                echo 1;
            }else{
                echo 0;
            }
        }


        public function webprotocol(){
            View::make();
        }
        public function __empty(){
            View::make("common/__empty");
        }

    }