<?php namespace system\model;

use hdphp\Model\Model;

class Goods_lists extends Model{

	//数据表
	protected $table = "goods_lists";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['goods_lists_num','required','货品货号为空',3,3],
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
		$oldData = $this->where('commodity_commodity_id',$_POST['commodity_commodity_id'])->get();
		//然后判断$_POST中的goods_lists_allid里面是否有为0的
		$goods_lists_allid = '';
		foreach($_POST['goods_lists_allid'] as $key => $value){
			if(!$value[0]){
				$this->error = $key.'填写为空,请重新填写';
				return false;
			}else{
				$goods_lists_allid .= $value[0] . '|';
			}
		}
		$goods_lists_allid = rtrim($goods_lists_allid,'|');
		$this->data = array(
			"goods_lists_allid" => $goods_lists_allid,
			"goods_lists_stock" => $_POST['goods_lists_stock'],
			"goods_lists_num" => $_POST['goods_lists_num'],
			"commodity_commodity_id" => $_POST['commodity_commodity_id']
		);
		//这里判断商品库存不能为空，而不是不能为0
		if($_POST['goods_lists_stock'] == ""){
			$this->error = '商品库存为空，请核对后认真填写！';
			return false;
		}
		//这是判断货品规格不能重复，
		if($oldData){
			foreach ($oldData as $key => $value){
				if($value['goods_lists_allid'] == $this->data['goods_lists_allid']){
					$this->error = '商品已存在，如需操作，请修改！';
					return false;
				}
			}
		}
		//这是货品货号不能重复
		$allData = $this->get();
		if($allData){
			foreach ($allData as $key => $value){
				if($value['goods_lists_num'] == $this->data['goods_lists_num']){
					$this->error = '货品货号不能重复';
					return false;
				}
			}
		}
//		然后计算出已经添加的当前商品的库存
		$allStock = '';//这是定义一个字符串，存放已经添加商品的库存
		foreach ($oldData as $key => $value){
			$allStock += intval($value['goods_lists_stock']);
		}
		//这是获取总库存
		$dataStock = Db::table('commodity')->where('commodity_id',$_POST['commodity_commodity_id'])->pluck('commodity_all_stock');
		//这是所有的旧数据的库存加上现在的库存如果大于总库存的话，就不正确
		if(($allStock+$_POST['goods_lists_stock']) > $dataStock){
			$this->error = '货品库存总量超过商品总库存，请核对后认真填写！';
			return false;
		}
		$this->add();
		return true;
	}

}