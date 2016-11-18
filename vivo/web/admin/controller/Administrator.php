<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 15:30
 */
    namespace web\admin\controller;
    class Administrator extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Admin_user();
            //这是为了左边的显示出来
            View::with("on","管理员管理");
        }

        public function index(){
            //这里将角色遍历过去
            $roles = Db::table("role")
                ->where("status",1)//这里是可以使用的
                ->whereNotIn("pid",[0])//这里不可以添加超级管理员，所以是不为0的
                ->get();
            View::with("roles",$roles);
            //然后显示所有的用户
            $user_data = $this->db
                ->join("user_role","admin_user_id",'=',"user_id")
                ->get();
            $roleAll = Db::table("role")
                ->where("status",1)//这里是可以使用的
                ->get();
            foreach ($user_data as $key => $value){
                foreach ($roleAll as $k => $v){
                    if($value['role_id'] == $v["id"]){
                        $user_data[$key][] = $v;
                        continue 2;
                    }
                }
            }
            View::with("roleAll",$roleAll);
            View::with("user_data",$user_data);
            VIew::make();
        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message("添加成功",'','success');
                }
                message($this->db->getError(),'','error');
            }
        }
    }