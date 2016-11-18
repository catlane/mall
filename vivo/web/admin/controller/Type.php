<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/27
 * Time: 17:15
 */
    namespace web\admin\controller;

    class Type extends Common{
        private $db;
        private $attr;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Type();
            $this->attr = new \system\model\Type_attr();
            //这是为了左边的显示出来
            View::with("on","产品管理");
        }

        public function index(){
            $data = $this->db->get();
            View::with('data',$data);
            View::make();
        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            View::make();
        }
        public function edit(){
            $type_id = q('get.type_id','0','intval');
            $oldData = $this->db->where('type_id',$type_id)->first();
            if(IS_POST){
                if($this->db->edit()){
                    message('修改成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            View::with('oldData',$oldData);
            View::make();
        }
        public function del(){
            $this->db->where('type_id',$_POST['type_id'])->delete();
        }

        //type_info这是类型信息，里面添加商品，修改类型属性
        public function type_info(){
            $type_id = q('type_id','0','intval');
            $data = $this->db
                    ->join('type_attr','type_id','=','type_type_id')
                    ->where('type_id',$type_id)
                    ->get();
            View::with('data',$data);
            $type_name = $this->db->where('type_id',$type_id)->pluck('type_name');
            View::with('type_name',$type_name);
            //这是将他下边的分类分配过去
            $category = Db::table('category')->where('type_type_id',$type_id)->get();
            $category = Data::tree($category,'category_name','category_id','category_pid');
            View::with('category',$category);
            View::make();
        }


        //这是类型属性的添加
        public function addAttr(){
            if(IS_POST){
                if($this->attr->store()){
                    message('添加成功','','success');
                }
                message($this->attr->getError(),'','error');
            }
            View::make();
        }
        public function editAttr(){
            if(IS_POST){
                if($this->attr->edit()){
                    message('修改成功','','success');
                }
                message($this->attr->getError(),'','success');
            }
            $type_attr_id = q('get.type_attr_id','0','intval');
            $data = $this->attr->where('type_attr_id',$type_attr_id)->first();
            View::with('data',$data);
            View::make();
        }
        public function delAttr(){
            if(IS_POST){
                $this->attr->where('type_attr_id',$_POST['type_attr_id'])->delete();
            }
        }
    }