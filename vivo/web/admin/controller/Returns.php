<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/17
 * Time: 13:12
 */
    namespace web\admin\controller;
    class Returns extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Returns();
            //这是为了左边的显示出来
            View::with("on","交易管理");
        }

        public function index(){
            $data = $this->db
                ->join("orderform",'returns_orderForm_id','=','orderForm_id')
                ->get();

            foreach ($data as $key => $value){
                $data[$key]["lists"] = Db::table("orderformlist")
                    ->join("commodity","commodity_commodity_id",'=',"commodity_id")
                    ->where("orderForm_orderForm_id",$value["orderForm_id"])
                    ->get();
            }
            foreach ($data as $key => $value){
                $num = '';
                foreach ($value["lists"] as $k => $v){
                    $num += $v['orderFormList_shopNum'];
                }
                $data[$key]["allNum"] = $num;
            }
            View::with("data",$data);
            View::make();
        }
        
        public function edit(){
            $status = $this->db->where("returns_id",$_POST['returns_id'])->pluck("returns_status");
            $orderForm_id = $this->db->where("returns_id",$_POST['returns_id'])->pluck("returns_orderForm_id");
            if($_POST['returns_status'] == "通过"){
                if($status == "退货申请中"){//这就是退货
                    $this->db->where("returns_id",$_POST['returns_id'])->update(["returns_success_status" => "退货成功","returns_success_time"=>time()]);
                    Db::table("orderform")->where("orderForm_id",$orderForm_id)->update(["orderForm_status"=>"退货成功"]);
                }
                if($status == "换货申请中"){//这就是换货
                    $this->db->where("returns_id",$_POST['returns_id'])->update(["returns_success_status" => "换货成功","returns_success_time"=>time()]);
                    Db::table("orderform")->where("orderForm_id",$orderForm_id)->update(["orderForm_status"=>"换货成功"]);
                }
            }else{
                if($status == "退货申请中"){//这就是退货
                    $this->db->where("returns_id",$_POST['returns_id'])->update(["returns_success_status" => "退货失败","returns_success_time"=>time()]);
                    Db::table("orderform")->where("orderForm_id",$orderForm_id)->update(["orderForm_status"=>"退货失败"]);
                }
                if($status == "换货申请中"){//这就是换货
                    $this->db->where("returns_id",$_POST['returns_id'])->update(["returns_success_status" => "换货失败","returns_success_time"=>time()]);
                    Db::table("orderform")->where("orderForm_id",$orderForm_id)->update(["orderForm_status"=>"换货失败"]);
                }
            }
            $res = Db::table("orderform")->where("orderForm_id",$orderForm_id)->pluck("orderForm_status");
            echo json_encode($res);
            die();
        }
        
    }