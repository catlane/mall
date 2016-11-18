<?php namespace system\model;

use hdphp\Model\Model;

class Address extends Model{

	//数据表
	protected $table = "address";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['address_receiver','required','请填写收货人姓名',3,3],
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
		$data = $this->get();
		if(count($data) >= 10){
			$this->error = "您添加的地址已超过10条";
			return false;
		}
		if(!$this->create()) return false;
		//这里判断收货人地区
		if($_POST['address_area']){
			foreach ($_POST['address_area'] as $key => $value){
				if(!$value){
					$this->error = "请输入收货人所在地区";
					return false;
				}
			}
		}
		//然后再判断收货人详细地址
		if($_POST['address_xxaddress'] == ""){
			$this->error = "请填写收货人详细地址";
			return false;
		}
		if(!$_POST['address_phone']){//先判断如果没有手机号码
			if(!$_POST['address_fixed']){//再判断没有手机号码
				$this->error = "请输入收货人手机号码或者固定电话";
				return false;
			}
		}

		//这是修改下收货地区
		$this->data['address_area'] = implode('|',$this->data['address_area']);
		//然后将会员ID添加进来
		$this->data['address_member_user_id'] = $_SESSION['member_user'];

		//这里判断是不是默认收货地址
		if($_POST['address_default']){
			$this->data['address_default'] = 1;
		}else{
			$this->data['address_default'] = 0;
		}
		$this->error = $this->add();
		return true;

	}
	//这里是修改地址
	public function edit(){
		if(!$this->create()) return false;
		//这里判断收货人地区
		if($_POST['address_area']){
			foreach ($_POST['address_area'] as $key => $value){
				if(!$value){
					$this->error = "请输入收货人所在地区";
					return false;
				}
			}
		}
		//然后再判断收货人详细地址
		if($_POST['address_xxaddress'] == ""){
			$this->error = "请填写收货人详细地址";
			return false;
		}
		if(!$_POST['address_phone']){//先判断如果没有手机号码
			if(!$_POST['address_fixed']){//再判断没有手机号码
				$this->error = "请输入收货人手机号码或者固定电话";
				return false;
			}
		}

		//这是修改下收货地区
		$this->data['address_area'] = implode('|',$this->data['address_area']);
		//然后将会员ID添加进来
		$this->data['address_member_user_id'] = $_SESSION['member_user'];

		//这里判断是不是默认收货地址
		if($_POST['address_default']){
			$this->data['address_default'] = 1;
		}else{
			$this->data['address_default'] = 0;
		}

		$this->save();
		$this->error = $_POST['address_id'];
		return true;
	}

}