<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/10
 * Time: 14:29
 */
    namespace web\home\controller;
    class Common{
        public function __construct(){
            //这里是将公共部分传递过去
            //首先传递category
            $topCategoryData = Db::table('category')
                            ->where('category_pid','0')
                            ->get();
            View::with('topCategoryData',$topCategoryData);

            //然后我将购物车的数量遍历过去
            if($_SESSION['cart']){
                $carNum = Cart::getTotalNums();
                View::with('carNum',$carNum);
            }else{
                $carNum = 0;
                View::with('carNum',$carNum);
            }


            //然后将网站基本配置分配过去
            $sys = Db::table("sys")->where("sys_id",1)->first();
            View::with("sys",$sys);

            //然后判断是否是有这个提示，如果是就让他变成0
            if(isset($_SESSION["tishi"])){
                $_SESSION["tishi"] = 0;
            }else{
                //这里我记录下是否是以一次看这个网站，是的话，就提示，不是就不提示了
                $_SESSION['tishi'] = "1";
            }

            
        }
        
        public function out(){
            unset($_SESSION["member_user"]);
            echo 1;
            die();
        }
        public function __empty(){
            View::make("common/__empty");
        }
        
        //这里判断这个是不是他的父级,其实就是找到他的顶级分类
        public function is_category(){
        	$category_id = $_POST['category_id'];
        	$itemGetFather = new item();
        	$fathers = $itemGetFather->getFathers(Db::table("category")->get(),$category_id);
        	$fathers[] = $category_id;
        	//然后判断哪个是顶级分类
        	foreach ($fathers as $key => $value) {
        		if(Db::table("category")->where("category_id",$value)->pluce("category_pid") == 0){
        			echo $value;
        			die();
        		}
        	}
        }
                
    }