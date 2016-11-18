<?php namespace system\model;

use hdphp\Model\Model;

class Brands extends Model{

	//数据表
	protected $table = "brands";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['brands_name','required','品牌名称为空',3,3],
		['brands_logo','required','品牌Logo',3,3],
		['brands_sort','required','品牌排序为空',3,3],
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

	public function addBrand(){
		if(!$this->create()) return false;
		//判断品牌名称是否已经存在
		if($this->db->where('brands_name',$_POST['brands_name'])->first()){
			$this->error = '品牌名称已存在';
			return false;
		}
		//这是文件路径
		$path = "resource/public/brandsImg/" . date('Y_m_d',time()) . "/";
		//如果没有这个文件夹，则创建这个文件夹
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		//然后，将这个复制到brands中
		copy($_POST['brands_logo'],$path . basename($_POST['brands_logo']));
		$this->data['brands_logo'] = $path . basename($_POST['brands_logo']);
		$this->add();
		return true;
	}

	public function edit(){
		if(!$this->create()) return false;
		$path = "resource/public/brandsImg/" . date('Y_m_d',time()) . "/";
		//如果没有这个文件夹，则创建这个文件夹
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		copy($_POST['brands_logo'],$path . basename($_POST['brands_logo']));
		$this->data['brands_logo'] = $path . basename($_POST['brands_logo']);
		$this->save();
		return true;
	}
}