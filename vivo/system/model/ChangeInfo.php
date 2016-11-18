<?php namespace system\model;

use hdphp\Model\Model;

class ChangeInfo extends Model{

	//数据表
	protected $table = "admin_user";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['admin_user_username','required','用户名为空',3,3],
		['admin_user_sex','required','性别为空',3,3],
		['admin_user_age','required','年龄为空',3,3],
		['admin_user_phone','phone','手机号码格式不正确',3,3],
		['admin_user_email','email','邮箱格式不正确',3,3],
		['admin_user_qq','required','qq号码为空',3,3],
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


	public function changeInfo(){
		if(!$this->create()) return false;
		$sexs = array('保密','男','女');
		if(!in_array($_POST['admin_user_sex'],$sexs)){
			$this->error = '性别格式不正确';
			return false;
		}
		$this->save();
		return true;
	}
}