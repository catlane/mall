<?php namespace system\model;

use hdphp\Model\Model;
use hdphp\page\Page;

class Member_user extends Model{

	//数据表
	protected $table = "member_user";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
//		['member_user_password','required','密码为空',3,3]
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

		//先判断用户名或者密码是不是空
		if($_POST['username'] == ''){
			$this->error = "帐号不能为空";
			return false;
		}

		if($_POST['password'] == ''){
			$this->error = "密码不能为空";
			return false;
		}
		//
		foreach ($this->get() as $key => $value){
			if(in_array($_POST['username'],$value)){//如果在这里边的话，就说明是当前这个，然后去判断密码是否正确
				if(md5($_POST['password']) == $value['member_user_password']){
					//这里是成功的
					//然后判断是否两周内自动登陆
					if($_POST['remember']){
						setcookie(session_name(),session_id(),time() + 3600 * 24 * 7 * 2,'/');
						$_SESSION['member_user'] = $value['member_user_id'];
					}else{
						setcookie(session_name(),session_id(),0,'/');
						$_SESSION['member_user'] = $value['member_user_id'];
					}
					//这是将用户浏览记录下来
					//这里判断有没有这个用户
					Db::table("member_notes")->firstOrCreate(['member_notes_user_id' =>$value['member_user_id']],['member_notes_user_id'=>$value['member_user_id']]);


					$this->error = "登陆成功";
					return true;
				}else{
					$this->error = "您输入的密码有误，请重新输入";
					return false;
				}
				break;
			}
		}
		$this->error = "帐号不存在，请重新输入";
		return false;
	}

	//这是注册
	public function registered(){
		if(!$this->create()) return false;
		//判断两次输入密码是否一致
		if($_POST['member_user_password2'] != $_POST['cpassword2']){
			$this->error = "两次密码输入不一致，请重新输入";
		}
		//判断是否手机号或者邮箱是否存在
		if(isset($_POST['member_user_phone'])){//说明这是手机
			if(in_array($_POST['member_user_phone'],$this->lists('member_user_phone'))){
				$this->error = "该手机已注册，请确认后输入";
				return false;
			}
		}else{
			if(in_array($_POST['member_user_email'],$this->lists('member_user_email'))){
				$this->error = "该邮箱已注册，请确认后输入";
				return false;
			}
		}
		$this->data = array(
			"member_user_username" => $_POST['member_user_username'],
			"member_user_nickname" => $_POST['member_user_nickname'],
			"member_user_password" => md5($_POST['member_user_password']),
		);
		if(isset($_POST['member_user_phone'])){//说明这是手机
			$this->data['member_user_phone'] = $_POST['member_user_phone'];
		}else{
			$this->data['member_user_email'] = $_POST['member_user_email'];
		}
		return $this->add();
	}
	
	public function edit(){
		if(!$this->create()) return false;
		if($_POST['member_user_nickname'] == ""){
			$this->error = "用户昵称为空";
			return false;
		}
		if(!$_POST['member_user_sex']){
			$this->error = "用户性别为空";
			return false;
		}
		if(!$_POST["year1"]){
			$this->error = "请选择年份";
			return false;
		}
		if(!$_POST["month1"]){
			$this->error = "请选择月份";
			return false;
		}
		if(!$_POST["day1"]){
			$this->error = "请选择日期";
			return false;
		}
		foreach ($_POST['member_user_liveAddress'] as $key => $value) {
			if(!$value){
				$this->error = "请选择居住地";
				return false;
			}
		}
		$this->data["member_user_birthday"][] = $_POST["year1"];
		$this->data["member_user_birthday"][] = $_POST["month1"];
		$this->data["member_user_birthday"][] = $_POST["day1"];
		//然后将日期和居住地都转成字符串
		$this->data["member_user_birthday"] = implode($this->data["member_user_birthday"],"|");
		$this->data["member_user_liveAddress"] = implode($this->data["member_user_liveAddress"],"|");
		$this->data["member_user_id"] = $_SESSION['member_user'];
		$this->save();
		return true;
	}
	
}