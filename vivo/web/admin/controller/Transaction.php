<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/17
 * Time: 19:16
 */
    namespace web\admin\controller;
    class Transaction extends Common{
        public function __construct(){
            parent::__construct();
            //这是为了左边的显示出来
            View::with("on","交易管理");
        }

        public function index(){
            //获取所有的金额
            $allPrice = 0;
            $allPriceData = Db::table('orderform')
                ->whereNotIn("orderForm_status",["退货成功"])
                ->lists("orderForm_price");//这是获取所有没有退货成功的价钱
            foreach ($allPriceData as $key => $value){
                $allPrice += $value;
            }
            View::with("allPrice",$allPrice);
            //获取所有的订单数量
            $orderNum = count(Db::table('orderform')->get());
            View::with("orderNum",$orderNum);
            //所有交易成功的数量
            $successNum = count(Db::table("orderform")->where("orderForm_status","已完成")->get());
            View::with("successNum",$successNum);
            $failureNum = count(Db::table("orderform")->where("orderForm_status","退货成功")->orwhere("orderForm_status","已取消")->get());
            View::with("failureNum",$failureNum);
            //获取所有退款金额
            $returnsPrice = 0;
            $d = Db::table("orderform")->where("orderForm_status","退货成功")->get();
            foreach ($d as $key => $value) {
                $returnsPrice += $value['orderForm_price'];
            }
            View::with("returnsPrice",$returnsPrice);

            //这里分配折线图记录
            $monthAll = array();
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1451577600,1454256000])->get());//1-2
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1454256000,1456761600])->get());//2-3
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1456761600,1459440000])->get());//3-4
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1459440000,1462032000])->get());//4-5
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1462032000,1464710400])->get());//5-6
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1464710400,1467302400])->get());//6-7
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1467302400,1467302400])->get());//7-8
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1467302400,1472659200])->get());//8-9
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1472659200,1475251200])->get());//9-10
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1475251200,1477929600])->get());//10-11
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1477929600,1480521600])->get());//11-12
            $monthAll[] = count(Db::table("orderform")->whereBetween("orderForm_sendtime",[1480521600,1483200000])->get());//11-1
            View::with("monthAll",$monthAll);
            //这里是获取这几个月中所有的带付款的
            $monthNoMoney = array();
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1451577600,1454256000])->get());//1-2
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1454256000,1456761600])->get());//2-3
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1456761600,1459440000])->get());//3-4
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1459440000,1462032000])->get());//4-5
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1462032000,1464710400])->get());//5-6
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1464710400,1467302400])->get());//6-7
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1467302400,1467302400])->get());//7-8
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1467302400,1472659200])->get());//8-9
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1472659200,1475251200])->get());//9-10
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1475251200,1477929600])->get());//10-11
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1477929600,1480521600])->get());//11-12
            $monthNoMoney[] = count(Db::table("orderform")->where("orderForm_status","未付款")->whereBetween("orderForm_sendtime",[1480521600,1483200000])->get());//11-1
            View::with("monthNoMoney",$monthNoMoney);

            //这里是获取这几个月中所有的已付款的
            $monthSuccessMoney = array();
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1451577600,1454256000])->get());//1-2
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1454256000,1456761600])->get());//2-3
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1456761600,1459440000])->get());//3-4
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1459440000,1462032000])->get());//4-5
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1462032000,1464710400])->get());//5-6
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1464710400,1467302400])->get());//6-7
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1467302400,1467302400])->get());//7-8
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1467302400,1472659200])->get());//8-9
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1472659200,1475251200])->get());//9-10
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1475251200,1477929600])->get());//10-11
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1477929600,1480521600])->get());//11-12
            $monthSuccessMoney[] = count(Db::table("orderform")->where("orderForm_status","未发货")->orwhere("orderForm_status","已发货")->orwhere("orderForm_status","已完成")->orwhere("orderForm_status","换货成功")->whereBetween("orderForm_sendtime",[1480521600,1483200000])->get());//11-1
            View::with("monthSuccessMoney",$monthSuccessMoney);
            //这里是获取这几个月中所有的未发货的
            $monthNoShipped = array();
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1451577600,1454256000])->get());//1-2
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1454256000,1456761600])->get());//2-3
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1456761600,1459440000])->get());//3-4
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1459440000,1462032000])->get());//4-5
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1462032000,1464710400])->get());//5-6
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1464710400,1467302400])->get());//6-7
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1467302400,1467302400])->get());//7-8
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1467302400,1472659200])->get());//8-9
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1472659200,1475251200])->get());//9-10
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1475251200,1477929600])->get());//10-11
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1477929600,1480521600])->get());//11-12
            $monthNoShipped[] = count(Db::table("orderform")->where("orderForm_status","未发货")->whereBetween("orderForm_sendtime",[1480521600,1483200000])->get());//11-1
            View::with("monthNoShipped",$monthNoShipped);
            View::make();
        }
    }