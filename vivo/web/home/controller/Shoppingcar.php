<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 9:21
 */
    namespace web\home\controller;
    class Shoppingcar extends Common{
        public function shoppingcar(){
            //先传递过去css
            $css = array(
                "shoppingcar.css",
            );
            View::with('css',$css);
            $js = array(
                "shoppingcar.js",
            );
            View::with('js',$js);

            //这里是获取所有的购物车数据
            $shoppingCarData = Cart::getGoods();
            View::with('shoppingCarData',$shoppingCarData);
            View::make();
        }
        //这是删除购物车***单个或者多个
        public function del(){
            foreach ($_POST as $key => $value){
                unset($_SESSION['cart']['goods'][$value]);
            }
            echo 1;
            die();
        }

        //这里是修改购物车的数量
        public function edit(){
            $id = $_POST['id'];
            $num = $_POST['num'];
            $data=array(
                'sid'=>$id,// 唯一 sid，添加购物车时自动生成
                'num'=>$num
            );
            Cart::update($data);
            echo 1;
            die();
        }

        //这里是计算单个的库存
        public function stockOnce(){//这是通过SESSION的$key的id
            if($_SESSION['cart']){
                $stockOnce = $_SESSION['cart']['goods'][$_POST['id']]['options']['goods_lists_stock'];
                echo $stockOnce;
                die();
            }
        }

        //这是去结算
        public function checklist(){
            foreach ($_POST['id'] as $key => $value){
                $ids[] = $value;
            }
            $ids = implode(',',$ids );
            $a = u('checklist/checklist',array('ids'=>$ids));
            echo json_encode($a);exit;
        }

        //这是添加收藏
        public function addKeep(){
            $keepDb = new \system\model\Keep();
            if(IS_POST){
                if($keepDb->store()){
                    message($keepDb->getError(),'','success');
                }else{
                    message($keepDb->getError(),'','error');
                }
            }
        }

    }