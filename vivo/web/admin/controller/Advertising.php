<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/18
 * Time: 14:12
 */
    namespace web\admin\controller;
    class Advertising extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Advertising();
            //这是为了左边的显示出来
            View::with("on","图片管理");
        }

        public function index(){
            $data = $this->db->get();
            foreach($data as $key => $value){
                $data[$key]["advertising_img"] = explode('|',$value["advertising_img"]);
            }
            View::with("data",$data);
            View::make();

        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message($this->db->getError(),'','success');
                }else{
                    message($this->db->getError(),'','error');
                }
            }
        }

        //这是修改状态
        public function editStatus(){
            $advertising_id = $_POST['id'];
            $advertising_status = $this->db->where("advertising_id",$advertising_id)->pluck("advertising_status");
            if($advertising_status == 0){//这就是将自己修改成1，别的都是0
                $this->db->where("advertising_status",1)->update(["advertising_status"=>0]);
                $this->db->where("advertising_id",$advertising_id)->update(["advertising_status"=>1]);
                echo 1;
                die();
            }else{//这就是将自己修改成0，然后提示，必须选择一个
                $this->db->where("advertising_id",$advertising_id)->update(["advertising_status"=>0]);
                echo 0;
                die();
            }            
        }
        
        public function del(){
            $advertising_id = $_POST['id'];
            $this->db->where("advertising_id",$advertising_id)->delete();
            echo 1;
            die();
        }
        
        public function editShow(){
            $advertising_id = $_POST['id'];
            $data = $this->db->where("advertising_id",$advertising_id)->first();
            $data["advertising_size"] = explode("*",$data["advertising_size"]);
            $data["width"] = $data["advertising_size"][0];
            $data["height"] = $data["advertising_size"][1];
            echo json_encode($data);
            die();
        }
    }