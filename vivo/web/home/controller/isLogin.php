<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/14
 * Time: 10:32
 */
    namespace web\home\controller;
    class isLogin extends Common{
        public function __construct(){
            parent::__construct();
            if(!isset($_SESSION['member_user'])){
                go(u('login/index'));
            }
        }
    }