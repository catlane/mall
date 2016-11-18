<?php
    namespace web\home\controller;
    class Index extends Common{
        //这是加载主页面
        public function index(){
            //先传递过去css
            $css = array(
                "index.css",
                "swiper-3.3.1.min.css",
            );
            View::with('css',$css);
            $js = array(
                "index.js",
                "swiper-3.3.1.min.js",
            );
            View::with('js',$js);

            //这是获取轮播图
            $data = Db::table('advertising')->where("advertising_status",1)->first();
            $data["advertising_img"] = explode('|',$data["advertising_img"]);
            View::with("data",$data);
//			html::make('home\index\index','home','index.html');
            
            View::make();
        }
    }
?>