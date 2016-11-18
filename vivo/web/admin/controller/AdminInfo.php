<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/24
 * Time: 20:56
 */
    namespace web\admin\controller;
    use system\model\ChangeInfo;

    class AdminInfo extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\ChangeInfo();
            //这是为了左边的显示出来
            View::with("on","管理员管理");
        }

        public function index(){
            //首先将用户信息引过去
            $user_info = Db::table('admin_user')
                ->join("user_role","admin_user_id","=","user_id")
                ->where('admin_user_id',$_SESSION['admin_user_id'])
                ->first();
            $role = Db::table("role")
                ->where("id",$user_info["role_id"])
                ->first();
            foreach ($role as $key => $value){
                $user_info["role_".$key] = $value;
            }
            View::with('user_info',$user_info);
            $loginLogs = Db::table('loginLog')
                ->join('admin_user','admin_user_admin_user_id','=','admin_user_id')
                ->where("admin_user_id",$_SESSION["admin_user_id"])
                ->get();
            View::with('loginLogs',$loginLogs);
            $data = json_encode($loginLogs);
            View::with('data',$data);
            View::make('admin_info.html');
        }
        public function changeInfo(){
            if(IS_POST){
                if($this->db->changeInfo()){
                    message('修改成功','','success');
                }else{
                    message($this->db->getError(),'','error');
                }
            }
        }
        public function changePassword(){
            if($_POST){
                //首先判断传递过来的字段是否为空
                if(!$_POST['admin_user_password']){
                    message('原密码为空','','error');
                    return false;
                }
                //然后判断这个密码和数据库的密码一样不
                if(md5($_POST['admin_user_password']) != $this->db->where('admin_user_id',$_SESSION['admin_user_id'])->pluck('admin_user_password')){
                    message('原密码输入不正确','','error');
                    return false;
                }
                if(!$_POST['admin_user_newPassword']){
                    message('原密码为空','','error');
                    return false;
                }
                if(!$_POST['admin_user_againPassword']){
                    message('原密码为空','','error');
                    return false;
                }//判断新密码与再次输入的密码是否一样
                if($_POST['admin_user_newPassword'] != $_POST['admin_user_againPassword']){
                    message('两次输入的密码不一样','','error');
                    return false;
                }
                //再判断新密码是不是和旧密码一样，
                if($_POST['admin_user_againPassword'] == $_POST['admin_user_password']){
                    message('新密码不可以和就密码一样','','error');
                    return false;
                }
                Db::table('admin_user')->where('admin_user_id',$_SESSION['admin_user_id'])->update(['admin_user_password'=>md5($_POST['admin_user_againPassword'])]);
                message('修改成功','','success');
            }
        }
    }