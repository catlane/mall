<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/26
 * Time: 19:39
 */
    namespace web\admin\controller;
    class Brands extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Brands();
            //这是为了左边的显示出来
            View::with("on","产品管理");
        }

        public function index(){
            $data = $this->db->get();
            View::with('data',$data);
            $hot = $this->db->where('brands_ifhot','1')->count();
            View::with('hot',$hot);
            $nothot = $this->db->where('brands_ifhot','0')->count();
            View::with('nothot',$nothot);
            View::make('Brand_Manage.html');
        }
        public function addBrand(){
            if($_POST){
                if($this->db->addBrand()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            View::make('Add_Brand.html');
        }
        //这是看是否启用
        public function status(){
            if(IS_POST){
                $this->db->where('brands_id',$_POST['brands_id'])
                    ->update(['brands_status'=>$_POST['brands_status']]);
            }
        }
        public function edit(){
            if(IS_POST){
                if($this->db->edit()){
                    message('修改成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            $brands_id = q('get.brands_id','0','intval');
            $oldData = $this->db->where('brands_id',$brands_id)->first();
            View::with('oldData',$oldData);
            View::make('member-edit.html');
        }
        public function del(){
            if(IS_POST){
                $this->db->where('brands_id',$_POST['id'])->delete();
            }
            echo 1;
            die();
        }
        public function img(){
            $files = Upload::make();
            echo json_encode($files[0]);exit;
        }
        public function delImg(){
            $src = $_POST['src'];
            unlink($src);
        }
        
        
        
        //
        public function brands_info(){
            $brands_id = q('get.brands_id','0','intval');
            $data = $this->db->where('brands_id',$brands_id)->first();
            View::with('data',$data);
            $commodityData = Db::table('commodity')->where('brands_brands_id',$brands_id)->get();
            $count = count($commodityData);
            View::with('count',$count);

            View::with('commodityData',$commodityData);
            View::make();
        }
        
    }