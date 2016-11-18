<?php namespace system\model;

use hdphp\Model\Model;

class Admin_login extends Model{

	//数据表
	protected $table = "admin_user";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['admin_user_account','required','账号为空',3,3],
		['admin_user_password','required','密码为空',3,3],
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

	public function login(){
		if(!$this->create()) return false;
		$account = $_POST['admin_user_account'];
		$password = md5($_POST['admin_user_password']);
		$code = strtoupper($_POST['code']);
		//首先判断用户名和密码是否正确
		$a = $this->where('admin_user_account',$account)->andwhere('admin_user_password',$password)->first();
		if(!$a){
			$this->error = '用户名或密码输入错误，请重新输入！';
			return false;
		}
		$_SESSION['admin_user_id'] = $this->where('admin_user_account',$account)->pluck('admin_user_id');
		return true;
	}
}