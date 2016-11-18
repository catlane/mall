<?php namespace system\model;

use hdphp\Model\Model;

class Advertising extends Model{

	//数据表
	protected $table = "advertising";

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
		if($_POST['宽'] == ""){
			$this->error = "宽为空";
			return false;
		}
		if($_POST['高'] == ""){
			$this->error = "高为空";
			return false;
		}
		if($_POST['地址'] == ""){
			$this->error = "地址为空";
			return false;
		}
		if($_POST['img'] == ""){
			$this->error = "图片为空";
			return false;
		}
		//然后我将这个图片复制到一个专用的里面
		$_POST["img"] = explode("|",rtrim($_POST['img'],"|"));
		$img = '';
		foreach ($_POST['img'] as $key => $value){
			if(!is_dir("resource/hdjs/home/other/banner/")){
				mkdir("resource/hdjs/home/other/banner/",0777,true);
			}
			Image::thumb("web/admin/view/".$value, "resource/hdjs/home/other/banner/".basename($value), $_POST['宽'], $_POST['高'], 3);
			$img .= "resource/hdjs/home/other/banner/".basename($value) . '|';
		}
		$this->data = array(
			"advertising_size" => $_POST["宽"] . "*" . $_POST["高"],
			"advertising_sort" => $_POST['排序'],
			"advertising_url" => $_POST["地址"],
			"advertising_status" => $_POST["form-field-radio1"],
			"advertising_time" => time(),
			"advertising_img" => rtrim($img,"|")
		);
		if($this->data["advertising_status"] == 1){//这就是显示，然后让别的都隐藏了
			$this->db->where("advertising_status",1)->update(["advertising_status"=>0]);
		}
		return $this->add();
	}
}