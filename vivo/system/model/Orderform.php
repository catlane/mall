<?php namespace system\model;

use hdphp\Model\Model;

class Orderform extends Model{

	//数据表
	protected $table = "orderform";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;


	//禁止插入的字段
	protected $denyInsertFields = [];

	//禁止更新的字段
	protected $denyUpdateFields = [];

	//前置方法 比如: _before_add 为添加前执行的方法
	protected function _before_add(){}
	protected function _before_delete(){}
	protected function _before_save(&$data){}

	protected function _after_add(){}
	protected function _after_delete(){}
	protected function _after_save(){}

	public function store($data){
		if(!$this->create()) return false;
		if(!$_POST['orderForm_payMethod']) {
			$this->error = "请选择支付方式";
			return false;
		}
		if(!$_POST['orderForm_taxType']){
			$this->error = "请选择发票方式";
			return false;
		}
		if(!$_POST['orderForm_invoice']){
			$this->error = "请填写发票抬头";
			return false;
		}
		if(!$_POST['orderForm_info']){
			$this->error = "请选择收货人信息";
			return false;
		}
		if(!$_POST['orderForm_address']){
			$this->error = "请选择收货人信息";
			return false;
		}
		$_POST['orderForm_info'] = explode('~',$_POST['orderForm_info']);
		$this->data = array(
			"orderForm_num" => time(),//订单号
			"orderForm_payMethod" => $_POST['orderForm_payMethod'],//支付方式
			"orderForm_taxType" => $_POST['orderForm_taxType'],//"发票方式"
			"orderForm_invoice" => $_POST['orderForm_invoice'],//"这是发票抬头"
			"orderForm_receiver" => $_POST['orderForm_info'][0],//"收货人姓名"
			"orderForm_phone" => $_POST["orderForm_info"][1],//收货人电话
			"orderForm_address" => $_POST['orderForm_address'],//"收货地址"
			"orderForm_price" => $_POST['orderForm_price'],//这是所有的价格
			"orderForm_sendtime" => time(),
			"orderForm_comments" => $_POST['orderForm_comments'],
			"member_user_member_user_id" => $_SESSION['member_user'],
		);
		if($_POST['orderForm_payMethod'] == "在线支付") {//这里判断是是什么支付方式，如果是在线支付的话，就存放0，
			$this->data["orderForm_status"] = "未付款";
		}else{//如果是货到付款的话，就存放1，直接发货
			$this->data["orderForm_status"] = "未发货";
		}

		$orderForm_orderForm_id = $this->add();
		$orderformlistData = new Orderformlist();
		$carId = explode('|',rtrim($_POST['carId'],'|'));
		foreach ($carId as $key => $value){
			if(isset($_SESSION['cart']['goods'][$value])){//如果有这个id，就添加进去
				$carData[] = $_SESSION['cart']['goods'][$value];
			}
		}
		foreach ($carData as $key => $value){
			$orderformlistData->data = array(
				"orderFormList_shopNum" => $value['num'],
				"orderFormList_price" => $value['total'],
				"commodity_commodity_id" => $value['id'],
				"orderForm_orderForm_id" => $orderForm_orderForm_id
			);
			$orderformlistData->data["orderFormList_attr"] = '';
			foreach ($value['attr'] as $k => $v){
				$orderformlistData->data["orderFormList_attr"] .= $k . ":" . $v . "|";
				//容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏
			}
			rtrim($orderformlistData->data["orderFormList_attr"],'|');
			$orderformlistData->add();
		}


		//这里修改库存
		foreach ($carId as $key => $value){
			$goods_lists_id = $_SESSION['cart']['goods'][$value]["options"]["goods_lists_id"];
			$commodity_id = $_SESSION['cart']['goods'][$value]['id'];
			$num = $_SESSION['cart']['goods'][$value]["num"];
			//这是修改货品
			$goods_stock = Db::table('goods_lists')->where('goods_lists_id',$goods_lists_id)->pluck("goods_lists_stock");
			$goods_rem = $goods_stock - $num;
			Db::table('goods_lists')->where('goods_lists_id',$goods_lists_id)->update(['goods_lists_stock'=>$goods_rem]);
			//这是修改商品
			$commodity_stock = Db::table('commodity')->where('commodity_id',$commodity_id)->pluck("commodity_all_stock");
			$commodity_rem = $commodity_stock - $num;
			Db::table('commodity')->where('commodity_id',$commodity_id)->update(['commodity_all_stock'=>$commodity_rem]);
		}
		//这里写删除购物车的商品
		foreach ($carId as $key => $value){
			unset($_SESSION['cart']['goods'][$value]);
		}

		
		//这里返回状态和订单id
		$a = array(
			"orderForm_status" => $this->data['orderForm_status'],
			"orderForm_orderForm_id" => $orderForm_orderForm_id
		);
		$this->error = $a;
		return true;
	}
}