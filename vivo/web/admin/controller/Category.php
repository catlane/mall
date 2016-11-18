<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/24
 * Time: 20:08
 */
    namespace web\admin\controller;
    class Category extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Category();
            //这是为了左边的显示出来
            View::with("on","产品管理");
        }

        public function index(){
            $data = $this->db
                ->join('type','type_type_id','=','type_id')
            ->get();
            View::with('data',$data);
            $tree = $this->db->get();
            foreach ($tree as $key => $value){
                $tree[$key]['name'] = $value['category_name'];
            }
            $tree = json_encode($tree);
            View::with('tree',$tree);
            View::make();
        }
        public function tree(){
            $data = $this->db->get();
            echo json_encode($data);
        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            //先将所有的类型分配过去
            $type = Db::table('type')->get();
            View::with('type',$type);
            View::make();
        }
        public function edit(){
            if(IS_POST){
                if($this->db->edit()){
                    message('修改成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            $category_id = q('get.category_id','0','intval');
            //首先将就数据传递过去
            $oldData = $this->db
                ->where('category_id',$category_id)->first();
            View::with('oldData',$oldData);

            //然后将他父级id所属的类型传递过去
            $parent_id = $this->db->where('category_id',$category_id)->pluck('category_pid');
            //然后判断，他是否是顶级的，如果是顶级的，分类属性随便改，如果不是，则需要修改父级，切换到父级所对应的type
            if($parent_id == 0){
                $type = Db::table('type')->get();
            }else{
                $type = $this->db
                    ->join('type','type_type_id','=','type_id')
                    ->where('category_id',$parent_id)
                    ->get();
            }
            View::with('type',$type);
            //然后获取所有的分类，除了自己和自己的子集
            $sons = $this->db->getSons($this->db->get(),$category_id);
            //然后找到除了自己子集以外所有的分类(但是包括子集，但是这里如果没有数据的话会报错误)
            //所以要判断，是否有内容
            //但是包括了自己，要判断如果是自己的话，就将自己的pid还变成自己的pid，
            if($sons){
                $category = $this->db->whereNotIn('category_id',$sons)->get();
                $category = Data::tree($category,'category_name','category_id','category_pid');
            }else{
                $category = $this->db->get();
                $category = Data::tree($category,'category_name','category_id','category_pid');
            }
            View::with('category',$category);
            View::make();
        }
        //获取到选中的category_id,然后将下边的类型归属相应的做出修改，让他为分类层级的归属类型，
        //如果他要是顶级分类的话，那么就可以选择全部的归属类型
        public function changeType(){
            //获取到category_id
            $category_id = $_POST['category_id'];
            //然后获取到他所对应的type
            if($category_id == 0){
                $type = Db::table('type')->get();
            }else{
                $type = $this->db
                    ->join('type','type_type_id','=','type_id')
                    ->where('category_id',$category_id)
                    ->get();
            }
            echo json_encode($type);
        }

        
        //这是删除
        public function del(){
            //找出自己的儿子
            $son = $this->db->where('category_pid',$_POST['category_id'])->lists('category_id');;
            if($son){
                //然后将他们的pid变成我自己的pid，
                $thisPid = $this->db->where('category_id',$_POST['category_id'])->pluck('category_pid');
                $this->db->whereIn('category_id',$son)->update(['category_pid' => $thisPid]);
            }
            $this->db->where('category_id',$_POST['category_id'])->delete();
            echo 1;
            die();
        }
        
        
        //这是子集分类
        public function addSon(){
            if(IS_POST){
                if($this->db->addSon()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            //首先获取父级id，然后通过父级id分配过去父级id，和父级所属的归属类型
            $parent_id = q('get.category_id','0','intval');
            $pid = $this->db
                ->join("type",'type_type_id','=','type_id')
                ->where('category_id',$parent_id)->first();//这是获取到父级id的所有数据
            View::with('pid',$pid);
            View::make();
        }



        //这是category_info信息
        public function category_info(){
            $category_id = q('get.category_id','0','intval');

            //这是获取他下边所有的分类
            $son_category_id = $this->db->getSons($this->db->get(),$category_id);
            //然后将自己添加进去
            $son_category_id[] = $category_id;
            $commodity_all_data = array();
            foreach ($son_category_id as $Sk => $Sv){
                //这里获取所有的商品
                $commodity_data = Db::table('commodity')
                    ->join('about_commodity','commodity_id','=','about_commodity_commodity_id')
                    ->where('category_id',$Sv)
                    ->get();
                foreach ($commodity_data as $key => $value){//$value['commodity_id']这是商品id
                    if($commodity_data){
                        //这是将所有的商品属性获取数来，并且join  type_attr表，因为要判断是否是属性，还是规格
                        $commodity_attr_data = Db::table('commodity_attr')
                            ->join('type_attr','type_attr_type_attr_id','=','type_attr_id')
                            ->where('commodity_commodity_id',$value['commodity_id'])
                            ->get();
                        foreach ($commodity_attr_data as $k => $v){
                            if($v['type_attr_type'] == 0){//这就是属性
                                $commodity_data[$key]['attr'][] = $v['commodity_attr_value'];
                            }else{
                                $commodity_data[$key]['spec']['value'][] = $v['commodity_attr_value'];
                                $commodity_data[$key]['spec']['addprice'][] = $v['commodity_attr_addprice'];
                            }
                        }
                        //然后将多图分解了
                        $commodity_data[$key]['many_image'][] = explode('|',$commodity_data[$key]['about_commodity_big_album']);
                    }
                }
                $commodity_all_data[] = $commodity_data;
            }
            View::with('commodity_all_data',$commodity_all_data);
            $data = $this->db->where('category_id',$category_id)->first();
            View::with('data',$data);
            $son_category_id = $this->db->getSons($this->db->get(),$category_id);
            if($son_category_id){
                $category = $this->db->wherein('category_id',$son_category_id)->get();
            }else{
                $category = array(
                    array(
                        'category_id'=>$category_id,
                        "category_name"=>"该分类暂时没有子集分类",
                    ),
                );
            }
            View::with('category',$category);
            View::make();
        }
    }