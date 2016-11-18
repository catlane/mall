<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/29
 * Time: 20:23
 */
    namespace web\admin\controller;

    class Commodity extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Commodity();
            //这是为了左边的显示出来
            View::with("on","产品管理");
        }

        public function index(){
            $data = $this->db->get();
            View::with('data',$data);
            View::make();
        }
        //这是添加商品
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            //先将所有的分类和品牌分配过去
            $cateData = Data::tree(Db::table('category')->get(),'category_name','category_id','category_pid');
            View::with('cateData',$cateData);
            $brandData = Db::table('brands')->get();
            View::with('brandData',$brandData);
            View::make();
        }
        
        
        
        //这是修改
        public function edit(){
        	//每次进入这个页面，先清除一下记有路径的session
        	unset($_SESSION['src']);//这是因为不能记录上次的图片，否则会删除错误
        	
        	if(IS_POST){
        		if($this->db->edit()){
        			message('修改成功','','success');
        		}
        		message($this->db->getError(),'','error');
        	}
            //这是将传递过来的商品ID获取到
            $commodity_id = q('get.commodity_id','0','intval');
            //这是获取到商品表中的当前ID的数据,以及关于商品表中的数据
//            ****************首先获取修数据start
            $data = $this->db
                ->join('about_commodity','commodity_id','=','about_commodity_commodity_id')
                ->where('commodity_id',$commodity_id)
                ->first();
            //然后再将商品属性表中的数据添加进来
            $commodity_attr_data = Db::table('commodity_attr')
                ->join('type_attr','type_attr_type_attr_id','=','type_attr_id')
                ->where('commodity_commodity_id',$commodity_id)->get();
            //这里判断type_attr_type如果是0，就是属性，如果是1，就是规格
            if($commodity_attr_data){//这里是判断下这个数组是不是空数组，如果是空数组的话，不判断会报错
                foreach ($commodity_attr_data as $key => $value){
                    $commodity_attr_data[$key]['type_attr_value'] = explode('|',$value['type_attr_value']);
                }
                foreach ($commodity_attr_data as $key => $value){
                    if($value['type_attr_type'] == 0){
                        $data['attr'][] = $value;
                    }else{
                        $data['spec'][] = $value;
                    }
                }
            }
            $data['many_image'] = explode('|',$data['about_commodity_big_album']);
            View::with('oldData',$data);
//            ******************获取旧数据end
//            ************************然后将品牌遍历过去start
            $brandData = Db::table('brands')->get();
            View::with('brandData',$brandData);
//            ************************然后将品牌遍历过去end
//            ************************然后将分类遍历过去start
            $cateData = Data::tree(Db::table('category')->get(),'category_name','category_id','category_pid');
            View::with('cateData',$cateData);
//            ************************然后将分类遍历过去end
        	View::make();
        }
        
        
        
        
        
        //这是删除
        public function del(){
        	//先删除当前表中的数据
        	$commodity_id = $_POST['commodity_id'];
        	$this->db->where('commodity_id',$commodity_id)->delete();
        	//然后删除详属性中的数据
        	Db::table('commodity_attr')->where('commodity_commodity_id',$commodity_id)->delete();
        	//然后删除关于商品中的数据
        	Db::table('about_commodity')->where('about_commodity_commodity_id',$commodity_id)->delete();
        }
        
        
        
        
        public function changeType(){
            //这是异步变化分类所对应的属性和规格
            $category_id = $_POST['category_id'];
            $type_id = Db::table('category')->where('category_id',$category_id)->pluck('type_type_id');
            $typeData = Db::table('type_attr')->where('type_type_id',$type_id)->get();
            foreach ($typeData as $key => $value){
                $typeData[$key]['type_attr_value'] = explode('|',$value['type_attr_value'] );
            }
            echo json_encode($typeData);
        }

        public function commodity_info(){
            $commodity_id = q('get.commodity_id','0','intval');
            $commodity_data = $this->db
                ->join('about_commodity','commodity_id','=','about_commodity_commodity_id')
                ->where('commodity_id',$commodity_id)
                ->first();
            if($commodity_data){
                //这是将所有的商品属性获取数来，并且join  type_attr表，因为要判断是否是属性，还是规格
                $commodity_attr_data = Db::table('commodity_attr')
                    ->join('type_attr','type_attr_type_attr_id','=','type_attr_id')
                    ->where('commodity_commodity_id',$commodity_id)
                    ->get();
                foreach ($commodity_attr_data as $k => $v){
                    if($v['type_attr_type'] == 0){//这就是属性
//                        $commodity_data['spec']['name'][] = $v['type_attr_name'];
                        $commodity_data['attr'][] = $v['commodity_attr_value'];
                    }else{
                        $commodity_data['spec']['name'][] = $v['type_attr_name'];
                        $commodity_data['spec']['value'][] = $v['commodity_attr_value'];
                        $commodity_data['spec']['addprice'][] = $v['commodity_attr_addprice'];
                    }
                }
                //然后将多图分解了
                $commodity_data['many_image'] = explode('|',$commodity_data['about_commodity_during_album']);
            }
            //然后将品牌名字分配过去
            $commodity_data['category_name'] = Db::table('category')->where('category_id',$commodity_data['category_id'])->pluck('category_name');
            //然后将属性名字分配过去
            $commodity_data['type_name'] = Db::table('type')->where('type_id',$commodity_data['type_id'])->pluck('type_name');
            //然后将品牌名字分配过去
            $commodity_data['brands_name'] = Db::table('brands')->where('brands_id',$commodity_data['brands_brands_id'])->pluck('brands_name');
            //然后将管理员名字分配过去
            $commodity_data['admin_name'] = Db::table('admin_user')->where('admin_user_id',$commodity_data['admin_user_admin_user_id'])->pluck('admin_user_username');
            View::with('commodity_data',$commodity_data);
            View::make();
        }




        //这是上传图片
        public function img(){
            $files = Upload::make();
            echo json_encode($files[0]);exit;
        }
        public function delImg(){
            $src = $_POST['src'];
            unlink($src);
        }
        
        public function editDelImg(){
        	$_SESSION['src'][] = $_POST['src'];
        }


        

    }