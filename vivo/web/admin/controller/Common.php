<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 23:06
 */
    namespace web\admin\controller;
    class Common{
        public function __construct(){
            if(!isset($_SESSION['admin_user_id'])){
                go(u('login/index'));
            }
            $admin_user_id = $_SESSION['admin_user_id'];
            $admin_user_username = Db::table('admin_user')
                ->where('admin_user_id',$admin_user_id)
                ->pluck('admin_user_username');
            View::with('admin_user_username',$admin_user_username);
            if(!Rbac::verify()) message('您暂时没有权限访问该管理','back','error');
        }
        public function __empty(){
            View::make("common/__empty");
        }
    }