<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/28
 * Time: 23:09
 */
    namespace web\admin\controller;
    class systemSetting extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Sys();
            //这是为了左边的显示出来
            View::with("on","系统管理");
        }

        public function index(){
            $data = $this->db->where("sys_id",1)->first();
            View::with("data",$data);
            View::make();
        }
        public function edit(){
            if(IS_POST){
                if($this->db->edit()){
                    message("修改成功",'','success');
                }
                message($this->db->getError(),'','error');
            }
        }
    }