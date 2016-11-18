<?php namespace system\model;

use hdphp\Model\Model;

class Keep extends Model{

	//数据表
	protected $table = "keep";

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


	public function store(){
		if(!$this->create()) return false;
		if(!$_SESSION['member_user']){
			$this->error = "您还不是会员,请登录后操作";
			return false;
		}
		$commodity_id = $_POST['commodity_id'];
		$commodityData = Db::table("commodity")->where("commodity_id",$commodity_id)->first();

		//这里判断这个商品是不是收藏过
		if($this->where("keep_commodity_id",$commodity_id)->first()){
			$this->error = "该商品已经收藏";
			return false;
		}


		$this->data = array(
			"keep_commodity_id" => $commodity_id,
			"keep_time" => time(),
			"keep_commodity_name" => $commodityData["commodity_name"],
			"keep_commodity_price" => $commodityData["commodity_mall_price"],
			"keep_commodity_user_id" => $_SESSION['member_user']
		);
		//然后删除购物车中的数据
		unset($_SESSION['cart']['goods'][$_POST["car_id"]]);
		return $this->add();
	}

}