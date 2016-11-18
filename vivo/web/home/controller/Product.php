<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 9:06
 */
    namespace web\home\controller;
    class Product extends Common{
        public function phone(){
            //先传递过去css
            $css = array(
                "phone.css",
            );
            View::with('css',$css);
            //然后获取到category_id
            $top_category_id = q('get.category_id','0','intval');
            //然后判断他是不是顶级分类
            $pid = Db::table('category')->where('category_id',$top_category_id)->pluck('category_pid');
            if(!$pid){//这里如果是0
                $son_category_data = Db::table('category')
                    ->where('category_pid',$top_category_id)
                    ->get();
                $_SESSION['top_category_id'] = $top_category_id;
            }else{//如果不是0,就找出他的pid的所有分类
                $son_category_data = Db::table('category')
                                ->where('category_pid',$pid)
                                ->get();
            }
            View::with('son_category_data',$son_category_data);
            //然后再将商品遍历过去
            $category_model = new \system\model\Category();
            $sons = $category_model -> getSons($category_model->get(), $top_category_id);
            $sons[] = $top_category_id;

            $bigPage = ceil(count(Db::table('commodity')
                    ->whereIn("category_id",$sons)
                    ->get())/8);
            $page = q('get.page') ? q('get.page') : 1;
            if($page > $bigPage){//如果大于这个的条数，
                $page = $bigPage;
            }

            if($page < 1){//如果大于这个的条数，
                $page = 1;
            }

            $commodityData = Db::table('commodity')
                ->whereIn("category_id",$sons)
                ->limit(8*($page-1),8)
                ->get();

            //然后我将这个最大页数遍历过去
            View::with("bigPage",$bigPage);

            View::with('commodityData',$commodityData);
            //然后将面包屑分配过去
        	$itemGetFather = new item();
        	$fathers = $itemGetFather->getFathers(Db::table("category")->get(),$top_category_id);
        	$fathers[] = $top_category_id;
			foreach ($fathers as $key => $value) {
	        	$arr[$key][] = $value;
	        	$arr[$key][] = Db::table("category")->where("category_id",$value)->pluck("category_name");
	       	}
        	View::with("fathers",$arr);
            
            View::make();
        }

        //这是搜索
        public function search(){
            //先传递过去css
            $css = array(
                "phone.css",
            );
            View::with('css',$css);
            $arr = array();
            $i = 0;
            if($_GET['searchKeywordStr']){
                $str = $_GET['searchKeywordStr'];
                $commodityData = Db::query("select * from vivo_commodity where commodity_name like ?",["%$str%"]);
                View::with("commodityData",$commodityData);
//                p(count($commodityData)%5);
//                foreach ($commodityData as $key => $value){
//                    if($key < 5 * $i){
//                        $arr[$i][] = $value;
//                        $i++;
//                    }
//                }
//                if($_GET['page'] == 1){
//                    View::with("commodityData",$commodityData);
//                }
            }
            View::make();
        }

    }