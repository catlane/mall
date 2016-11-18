<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/17
 * Time: 11:35
 */
    namespace web\admin\controller;
    class OrderForm extends Common{
        private $db;
        private $listsDb;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Orderform();
            $this->listsDb = new \system\model\Orderformlist();
            //这是为了左边的显示出来
            View::with("on","交易管理");
        }

        public function index(){
            $data = $this->db->get();
            foreach ($data as $key => $value){
                $data[$key]["lists"] = $this->listsDb
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

        public function fahuo(){
            //这里将"未发货"改成"已发货"
            $this->db->where("orderForm_id",$_POST['orderForm_id'])->update(["orderForm_status"=>"已发货"]);
            echo 1;
            die();
        }
        
        public function del(){
            $this->db->where("orderForm_id",$_POST['orderForm_id'])->delete();
            echo 1;
            die();
        }

    }