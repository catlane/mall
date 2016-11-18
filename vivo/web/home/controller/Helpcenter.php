<?php
namespace web\home\controller;
    class Helpcenter extends Common{
        private $css = array("helpcenter.css",);
        public function __construct(){
            parent::__construct();
            //先分配js
			
        }
        //这是父级
        public function index(){
        	
        	View::make();
        }
        //这是支付宝
        public function alipay(){
        	$this->css[] = "helpcenter_alipay.css";
        	View::with('css',$this->css);
        	View::with("on","支付宝支付");
        	//然后分配当前位置
            $address = "帮助中心<b></b>支付宝支付";
            View::with('address',$address);
        	View::make();
        }
        //这是花呗分期
        public function huabei(){
        	$this->css[] = "huabei-instalment.css";
        	View::with('css',$this->css);
        	View::with("on","花呗分期");
        	$address = "帮助中心<b></b>花呗分期";
            View::with('address',$address);
        	View::make();
        }
        //这是发票说明
        public function invoice(){
        	$this->css[] = "invoice-declare.css";
        	View::with('css',$this->css);
        	View::with("on","发票说明");
        	$address = "帮助中心<b></b>发票说明";
            View::with('address',$address);
        	View::make();
        }
        //这是优惠券说明
        public function coupon(){
        	$this->css[] = "coupon-declare.css";
        	View::with('css',$this->css);
        	View::with("on","优惠券说明");
        	$address = "帮助中心<b></b>优惠券说明";
            View::with('address',$address);
        	View::make();
        }
        //这是配送方式
        public function transport(){
        	$this->css[] = "coupon-declare.css";
        	View::with('css',$this->css);
        	View::with("on","配送方式");
        	$address = "帮助中心<b></b>配送方式";
            View::with('address',$address);
        	View::make();
        }
        //这是配送费用
        public function transportCost(){
        	$this->css[] = "transportCost.css";
        	View::with('css',$this->css);
        	View::with("on","配送费用");
        	$address = "帮助中心<b></b>配送费用";
            View::with('address',$address);
        	View::make();
        }
        //这是签收须知
        public function sign(){
        	$this->css[] = "sign.css";
        	View::with('css',$this->css);
        	View::with("on","签收须知");
        	$address = "帮助中心<b></b>签收须知";
            View::with('address',$address);
        	View::make();
        }
        //这是服务保证
        public function servicePromise(){
        	$this->css[] = "servicePromise.css";
        	View::with('css',$this->css);
        	View::with("on","服务保证");
        	$address = "帮助中心<b></b>服务保证";
            View::with('address',$address);
        	View::make();
        }
        //这是售后服务
        public function afterService(){
        	$this->css[] = "afterService.css";
        	View::with('css',$this->css);
        	View::with("on","售后服务");
        	$address = "帮助中心<b></b>售后服务";
            View::with('address',$address);
        	View::make();
        }
        //这是碎屏保
        public function brokenScreen(){
        	$this->css[] = "brokenScreen.css";
        	View::with('css',$this->css);
        	View::with("on","碎屏保");
        	$address = "帮助中心<b></b>碎屏保";
            View::with('address',$address);
        	View::make();
        }
        //这是手机延保
        public function extendService(){
        	View::with('css',$this->css);
        	View::with("on","手机延保");
        	$address = "帮助中心<b></b>手机延保";
            View::with('address',$address);
        	View::make();
        }
        //这是联系我们
        public function contactUs(){
//      	$this->css[] = "extendService.css";
        	View::with('css',$this->css);
        	View::with("on","联系我们");
        	$address = "帮助中心<b></b>联系我们";
            View::with('address',$address);
        	View::make();
        }
    }
?>