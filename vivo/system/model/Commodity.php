<?php namespace system\model;

use hdphp\Model\Model;

class Commodity extends Model{

	//数据表
	protected $table = "commodity";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['commodity_name','required','商品名称为空',3,3],
		['commodity_title','required','商品标题为空',3,3],
		['commodity_num','required','商品货号为空',3,3],
		['commodity_unit','required','商品单位为空',3,3],
		['commodity_market_price','required','市场价格为空',3,3],
		['commodity_mall_price','required','商城价格为空',3,3],
		['commodity_list_img','required','商品列表图为空',3,3],
		['commodity_click','required','商品点击量为空',3,3],
		['brands_brands_id','required','商品品牌为空',3,3]
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
		//首先应该先自动验证
//		1.验证当前的
		if(!$this->create()) return false;
		if($_POST['commodity_all_stock'] == ''){
			$this->error = '商品库存为空';
			return false;
		}
//		2.验证商品属性的
		$commodity_attr = new Commodity_attr();
		if(!$commodity_attr->create()){
			$this->error = $commodity_attr->getError();
			return false;
		}
//		3.验证关于商品
		$about_commodity = new About_commodity();
		if(!$about_commodity->create()){
			$this->error = $about_commodity->getError();
			return false;
		}
//		-----------验证大图是否为空
		if(!$_POST['many_image']){
			$this->error = '商品图册为空';
			return false;
		}
		//先将时间添加过去
		$this->data['commodity_added_time'] = time();
		//然后将添加的管理员id存入进去
		$this->data['admin_user_admin_user_id'] = $_SESSION['admin_user_id'];
		//然后改一下列表图片的大小
		$this->data['commodity_list_img'] = Image::thumb($this->data['commodity_list_img'], 'commodityImg/listImg/' . basename($this->data['commodity_list_img']), 250, 250, 5);
		$commodity_id =  $this->add();//这是返回一个当前添加的id

		//然后添加到商品属性表中
		//为了方便进入数据，所以要重组数组
//		1.先重组商品的属性，因为属性没有附加价格，所以他的附加价格为0
		if($_POST['attr']){
			foreach ($_POST['attr'] as $key => $value){
				//这里要注意，如果值是0的话，则不让他添加进来
				if($value){
					$attrData = array(
						"commodity_attr_value" => $value,
						"commodity_attr_addprice" => '0',
						"type_attr_type_attr_id" => $key,
						"commodity_commodity_id" => $commodity_id
					);
					$commodity_attr->add($attrData);
				}
			}
		}
//		2.然后重组规格，因为规格是有可能有附加价格的，所以他的附加价格不可以写成固定的
		foreach ($_POST['spec'] as $key => $value){
			foreach($value['value'] as $k => $v){
				if($v){
					$specData = array(
						"commodity_attr_value" => $v,
						"commodity_attr_addprice" => $value['addPrice'][$k],
						"type_attr_type_attr_id" => $key,
						"commodity_commodity_id" => $commodity_id
					);
					$commodity_attr->add($specData);
				}
			}
		}
//		3.然后我将图片缩略，分别缩略3张
		$small = "";
		$medium = "";
		$big = "";
		$manyImg = explode('|',$_POST['many_image']);
		foreach ($manyImg as $key => $value){
			if(strpos($value,'big_') === false){     //使用绝对等于
			    //不包含
			    $small .= Image::thumb($value, 'commodityImg/manyImg' . '/samll/small_' . basename($value), 60, 60, 5) . '|';
				$medium .= Image::thumb($value, 'commodityImg/manyImg' . '/medium/medium_' . basename($value), 530, 530, 5) . '|';
				$big .= Image::thumb($value, 'commodityImg/manyImg' . '/big/big_' . basename($value), 1060, 1060, 5) . '|';
			}else{
			    //包含attachment/big/big_1281475919571.png
				$small .= 'commodityImg/manyImg/samll/' . str_replace('big_','small_',basename($value));
			    $medium .= 'commodityImg/manyImg/medium/' . str_replace('big_','medium_',basename($value));
			    $big .= $value;
			}
		}
		$small = rtrim($small,'|');
		$medium = rtrim($medium,'|');
		$big = rtrim($big,'|');
		$aboutData = array(
			"about_commodity_samll_album" => $small,
			"about_commodity_during_album" => $medium,
			"about_commodity_big_album" => $big,
			"about_commodity_about" => $_POST['about_commodity_about'],
			"about_commodity_afterMarket" => $_POST['about_commodity_afterMarket'],
			"about_commodity_commodity_id" => $commodity_id
		);
		$about_commodity->add($aboutData);
		return true;
	}
	
	
	
	//这是修改
	public function edit(){
		$commodity_id = $_POST['commodity_id'];
		//首先应该先自动验证
//		1.验证当前的
		if(!$this->create()) return false;
//		2.验证商品属性的
		$commodity_attr = new Commodity_attr();
		if(!$commodity_attr->create()){
			$this->error = $commodity_attr->getError();
			return false;
		}
//		3.验证关于商品
		$about_commodity = new About_commodity();
		if(!$about_commodity->create()){
			$this->error = $about_commodity->getError();
			return false;
		}
//		-----------验证大图是否为空
		if(!$_POST['many_image']){
			$this->error = '商品图册为空';
			return false;
		}
		//先将时间添加过去
		$this->data['commodity_added_time'] = time();
		//然后将添加的管理员id存入进去
		$this->data['admin_user_admin_user_id'] = $_SESSION['admin_user_id'];
		//然后改一下列表图片的大小
		$this->data['commodity_list_img'] = Image::thumb($this->data['commodity_list_img'], 'commodityImg/listImg/' . basename($this->data['commodity_list_img']), 250, 250, 5);
		$this->save();//这是修改商品表中的信息

		//然后修改到商品属性表中
		//先删除了，再添加
		$commodity_attr->where('commodity_commodity_id',$commodity_id)->delete();
		//为了方便进入数据，所以要重组数组
//		1.先重组商品的属性，因为属性没有附加价格，所以他的附加价格为0
		if($_POST['attr']){
			foreach ($_POST['attr'] as $key => $value){
				//这里要注意，如果值是0的话，则不让他添加进来
				if($value){
					$attrData = array(
						"commodity_attr_value" => $value,
						"commodity_attr_addprice" => '0',
						"type_attr_type_attr_id" => $key,
						"commodity_commodity_id" => $commodity_id
					);
					$commodity_attr->add($attrData);
				}
			}
		}
//		2.然后重组规格，因为规格是有可能有附加价格的，所以他的附加价格不可以写成固定的
		if($_POST['spec']){
			foreach ($_POST['spec'] as $key => $value){
				foreach($value['value'] as $k => $v){
					if($v){
						$specData = array(
							"commodity_attr_value" => $v,
							"commodity_attr_addprice" => $value['addPrice'][$k],
							"type_attr_type_attr_id" => $key,
							"commodity_commodity_id" => $commodity_id
						);
						$commodity_attr->add($specData);
					}
				}
			}
		}
//		3.然后我将图片缩略，分别缩略3张
		$small = "";
		$medium = "";
		$big = "";
		$manyImg = explode('|',$_POST['many_image']);
		foreach ($manyImg as $key => $value){
			if(strpos($value,'big_') == false){
				//不包含
				$small .= Image::thumb($value, 'commodityImg/manyImg' . '/samll/small_' . basename($value), 60, 60, 5) . '|';
				$medium .= Image::thumb($value, 'commodityImg/manyImg' . '/medium/medium_' . basename($value), 530, 530, 5) . '|';
				$big .= Image::thumb($value, 'commodityImg/manyImg' . '/big/big_' . basename($value), 1060, 1060, 5) . '|';
			}else{
				//包含attachment/big/big_1281475919571.png
				$small .= 'commodityImg/manyImg/samll/' . str_replace('big_','small_',basename($value)) . '|';
				$medium .= 'commodityImg/manyImg/medium/' . str_replace('big_','medium_',basename($value)) . '|';
				$big .= $value . '|';
			}
		}
		$small = rtrim($small,'|');
		$medium = rtrim($medium,'|');
		$big = rtrim($big,'|');
		$aboutData = array(
			"about_commodity_id" => $_POST['about_commodity_id'],
			"about_commodity_samll_album" => $small,
			"about_commodity_during_album" => $medium,
			"about_commodity_big_album" => $big,
			"about_commodity_about" => $_POST['about_commodity_about'],
			"about_commodity_afterMarket" => $_POST['about_commodity_afterMarket'],
			"about_commodity_commodity_id" => $commodity_id
		);
		$about_commodity->save($aboutData);

		//最后将图片删除掉
		/*foreach ($_SESSION['src'] as $key => $value) {/*attachment/54981475927814.png*/
			/*p($value);
			$value = attachment/big/big_1281475919571.png;
			//判断这个文件是否存在
			if(!file_exists($value)){
				continue;
			}
			//判断他是图册还是单张列表图
			if(strpos($value,'big_') === false){
				//不包含,说明是列表图
				unlink($value);
			}else{
				//包含
				$samllImg = 'attachment/samll/' . str_replace('big_','small_',basename($value));
				$mediumImg = 'attachment/medium/' . str_replace('big_','medium_',basename($value));
				$bigImg = $value;
				unlink($samllImg);
				unlink($mediumImg);
				unlink($bigImg);
			}
		}*/
		
		return true;
	}
	
	
}