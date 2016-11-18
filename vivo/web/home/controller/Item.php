<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 9:14
 */
namespace web\home\controller;
class Item extends Common{
    public function Item(){
        //先传递过去css
        $css = array(
            "item.css",
        );
        View::with('css',$css);
        //先传递过去js
        $js = array(
            "item.js",
        );
        View::with('js',$js);
        //通过商品ID遍历商品相关数据
        $commodity_id = q('get.commodity_id','0','intval');
        $commodityData = Db::table('commodity')
            ->join('about_commodity','commodity_id','=','about_commodity_commodity_id')
            ->where('commodity_id',$commodity_id)
            ->first();
        $commodityData['about_commodity_samll_album'] = explode('|',$commodityData['about_commodity_samll_album']);
        $commodityData['about_commodity_during_album'] = explode('|',$commodityData['about_commodity_during_album']);
        $commodityData['about_commodity_big_album'] = explode('|',$commodityData['about_commodity_big_album']);

        $commodity_attr_data = Db::table('commodity_attr')
            ->join('type_attr','type_attr_type_attr_id','=','type_attr_id')
            ->where('commodity_commodity_id',$commodity_id)
            ->orderBy('type_attr_type_attr_id','ASC')
            ->get();
        foreach ($commodity_attr_data as $key => $value){
            if(!$value['type_attr_type']){//这里是属性
                $commodityData['attr'][$value['type_attr_name']] = $value['commodity_attr_value'];
            }else{//这里是规格
                $commodityData['spec'][$value['type_attr_name']][$key]['commodity_attr_id'] = $value['commodity_attr_id'];
                $commodityData['spec'][$value['type_attr_name']][$key]['commodity_attr_value'] = $value['commodity_attr_value'];
                $commodityData['spec'][$value['type_attr_name']][$key]['commodity_attr_addprice'] = $value['commodity_attr_addprice'];
            }

        }
        //这里是将category_name分配过去
        $commodityData["category_name"] = Db::table("category")->where("category_id",$commodityData["category_id"])->pluck("category_name");
        View::with('data',$commodityData);
		
		//这是面包屑
		$fathers = $this->getFathers(Db::table("category")->get(),$commodityData["category_id"]);
        $fathers[] = $commodityData["category_id"];
        foreach ($fathers as $key => $value) {
        	$arr[$key][] = $value;
        	$arr[$key][] = Db::table("category")->where("category_id",$value)->pluck("category_name");
        }
        View::with("fathers",$arr);

        $member_notesData = Db::table("member_notes")->where("member_notes_user_id",$_SESSION['member_user'])->first();

            if($member_notesData["member_notes_commodity"] != ""){
                $member_notesData["member_notes_commodity"] = explode("|",$member_notesData["member_notes_commodity"]);
                if(!in_array($commodity_id,$member_notesData["member_notes_commodity"])){
                    if($commodity_id != 0){
                        $member_notesData["member_notes_commodity"][] = $commodity_id;
                    }
                }
            }else{
                if($commodity_id != 0){
                    $member_notesData["member_notes_commodity"][] = $commodity_id;
                }
            }
        $member_notesData["member_notes_commodity"] = implode($member_notesData["member_notes_commodity"],"|");
        //然后再修改
        Db::table("member_notes")->where("member_notes_user_id",$_SESSION['member_user'])->update(["member_notes_commodity"=>$member_notesData["member_notes_commodity"]]);
        View::make();
    }
    
    //这是找父亲
    
//  cid = 2;   pid = 1;
//  cid = 3;   pid = 2;
//  cid = 4;   pid = 3;
    public function getFathers($data,$category_id){
		static $temp;
		$category_pid = Db::table("category")->where("category_id",$category_id)->pluck("category_pid");
		foreach ($data as $key => $value) {
			if($category_pid == $value['category_id']){
				$this->getFathers($data,$value["category_id"]);
				$temp[] = $value['category_id'];
			}
		}
		
		
		return $temp;
	}
    
    public function commodity_attr(){
        $commodity_id = $_POST['commodity_id'];//这是获取商品ID
        $commodity_attr_id = $_POST['commodity_attr_id'];//这是获取所有的商品属性ID
        $commodity_attr_id = rtrim($commodity_attr_id,'|');//然后去除右边的|
        $commodity_attr_id = explode('|',$commodity_attr_id);//然后转换成数组
        //然后获取数据库中的货品信息
        $goods_lists_data = Db::table('goods_lists')
            ->where('commodity_commodity_id',$commodity_id)->get();
        if(!$goods_lists_data){
            die();
        }
        foreach ($goods_lists_data as $key => $value){
            //这是将那个字符串转换成数组，
            $goods_lists_data[$key]['goods_lists_allid'] = explode('|',$value['goods_lists_allid']);
        }
        //这里是让如果他俩的长度要是相等的话，就给这个数组，下边检测是否有这个数组，如果有的话，就是当前这个商品
        if(count($commodity_attr_id) == count($goods_lists_data[0]['goods_lists_allid'])){
            $num = array();
        }
        //这是最外边的数组
        $goodData = array();
        //这就是将要对比的数据$v['goods_lists_allid']
        //然后用in_array判断是否在那个里面
        //这是单个选择的规格----->$value
        foreach ($goods_lists_data as $k => $v){
            if ($commodity_attr_id == array_intersect($commodity_attr_id, $v['goods_lists_allid'])) {
                $goodData[] = $v['goods_lists_allid'];
                if(isset($num)){
                    $num = Db::table('goods_lists')->where('goods_lists_id',$v['goods_lists_id'])->first();
                }
            }
        }
        //这是将要传递过去的数组
        $thisArr = array();
        if($goodData){
            foreach ($goodData as $key => $value){
                foreach ($value as $k => $v){
                    $thisArr['attr'][] = $v;
                }
            }
        }
        if(isset($num)){
            $thisArr['goods'] = $num;
        }
        echo json_encode($thisArr);
        die();
    }
    
    public function Addcar(){
        $num = $_POST['num'];
        $commodity_id = $_GET['commodity_id'];
        $commodityData = Db::table('commodity')->where('commodity_id',$commodity_id)->first();
        $commodity_name = $commodityData['commodity_name'];
        $commodity_img = $commodityData['commodity_list_img'];
        $commodity_price = $commodityData['commodity_mall_price'];
        $goods_lists_id = $_POST['goods_lists_id'];
        $goods_listsData = Db::table('goods_lists')->where('goods_lists_id',$goods_lists_id)->first();
        $goods_lists_stock = $goods_listsData['goods_lists_stock'];//这是货品库存，添加商品不能超过这个量


//        计算所有的属性附加价格/单个
        $addPrice = '';
        $all = array();
        foreach (explode('|',$goods_listsData['goods_lists_allid']) as $key => $value){
            $addPrice += Db::table('commodity_attr')->where('commodity_attr_id',$value)->pluck('commodity_attr_addprice');
            $all[$key] = Db::table('commodity_attr')
                ->join('type_attr','type_attr_type_attr_id','=','type_attr_id')
                ->where('commodity_attr_id',$value)
                ->field(['type_attr_name','commodity_attr_value'])
                ->first();
        }
        $data = array(
            "id" => $commodity_id,//这是商品id
            "name" => $commodity_name,//这是商品的名称
            "num" => $num,//这是购买的数量
            "price" => $commodity_price,//这是单个商品的价格
            "addAfterPirce" => ($commodity_price+$addPrice),//这是加上附加价格之后的单价
            "img" => $commodity_img,
            "options" => array(
                "goods_lists_id" => $goods_lists_id,//这是货品id
                "addPrice" => $addPrice,//这是单个的所有附加价格
                "goods_lists_stock" => $goods_lists_stock//这是货品的库存
            )
        );

        foreach($all as $key => $value){
            $data['attr'][$value['type_attr_name']] = $value['commodity_attr_value'];
        }
        Cart::add($data); // 添加到购物车
        echo 1;die();
    }

    //这里是计算购物车的所有数量
    public function carNum(){
        if($_SESSION['cart']){
            echo Cart::getTotalNums();
        }
    }

    public function onceNum(){//这是获取购物车中单个货品的数量
        if(Cart::getGoods()){
            $data = Cart::getGoods();
            if($data){
                foreach ($data as $key => $value){
                    if($_POST['goods_lists_id'] == $value['options']['goods_lists_id']){
                        echo $value['num'];
                        die();
                    }
                }
                echo 0;
                die();
            }
        }else{
            echo 0;
            die();
        }
    }

    public function onceStock(){//这是获取单个货品的库存
        echo Db::table('goods_lists')->where('goods_lists_id',$_POST['goods_lists_id'])->pluck('goods_lists_stock');
    }

	

}

