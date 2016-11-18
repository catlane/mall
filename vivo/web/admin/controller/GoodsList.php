<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/9
 * Time: 17:48
 */
    namespace web\admin\controller;
    class GoodsList extends Common{
        private $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Goods_lists();
        }


        //这是货品列表
        public function index(){
            //首先获取商品ID
            $commodity_id = q('get.commodity_id','0','intval');
            //首先将所有的规格遍历出来
            $attr = Db::table('commodity_attr')
                ->join('type_attr','type_attr_type_attr_id','=','type_attr_id')
                ->where('commodity_commodity_id',$commodity_id)//这是匹配当前商品ID
                ->where('type_attr_type','1')//这是匹配规格
                ->get();
            //然后重组数组
            $spec = array();
            foreach ($attr as $key => $value){
                $spec[$value['type_attr_name']][$value['commodity_attr_id']] = $value['commodity_attr_value'];
            }
            View::with('spec',$spec);
            /*array(
                "颜色" => array(
                    "1" => "极光白",//"commodity_attr_id" => "commodity_attr_value"
                    "2" => "玫瑰金",
                    "4" => "香槟金",
                ),
                "容量" => array(
                    "16",
                    "64",
                    "128",
                ),
            );*/
            //然后遍历数据

            $oldData = $this->db
                ->where('commodity_commodity_id',$commodity_id)->get();
            if($oldData){//这里判断是否是空的，如果是空的会报错 
                foreach ($oldData as $key => $value){
                    $oldData[$key]['goods_lists_allid'] = explode('|',$value['goods_lists_allid']);
                }
                foreach ($oldData as $key => $value){
                    foreach($value['goods_lists_allid'] as $k => $v){
                        $oldData[$key]['goods_lists_allid'][$k] = Db::table('commodity_attr')->where('commodity_attr_id',$v)->pluck('commodity_attr_value');
                    }
                }
            }

            View::with('oldData',$oldData);
            View::make();
        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'','error');
            }
        }
        public function del(){
            $goods_lists_id = $_POST['goods_lists_id'];
            $this->db->where('goods_lists_id',$goods_lists_id)->delete();
        }
    }







