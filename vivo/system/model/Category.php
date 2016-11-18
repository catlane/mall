<?php namespace system\model;

use hdphp\Model\Model;

class Category extends Model{

	//数据表
	protected $table = "category";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['category_name','required','分类名称为空',3,3],
		['category_sort','required','分类排序为空',3,3],
		['type_type_id','required','所属类型为空',3,3],
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
		if($this->where('category_name',$_POST['category_name'])->first()){
			$this->error = '该分类名称已存在！';
			return false;
		}
		return $this->add();
	}
	public function edit(){
		if(!$this->create()) return false;
		if($_POST['category_pid'] == ''){
			$this->error = '分类层级为空';
			return false;
		}
		$this->save();
		return true;
	}


	//这是关于子集的
	public function addSon(){
		if(!$this->create()) return false;
		return $this->add();
	}
	
	
	
	//这是获取他所有的子集
	public function getSons($data,$id){
		static $arr = array();
		foreach ($data as $value){
			if($value['category_pid'] == $id){
				$arr[] = $value['category_id'];
				$this->getSons($data,$value['category_id']);
			}
		}
		return $arr;
	}


	/*public function getSons($data,$id){
		static $arr = array();
		foreach ($data as $value){
			if($value['category_pid'] == $id){
				$arr[] = $value['category_id'];
				$this->getSons($data,$value['category_id']);
			}
		}
		return $arr;
	}*/
}