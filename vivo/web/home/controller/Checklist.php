<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 9:26
 */
    namespace web\home\controller;
    class Checklist extends isLogin{
        private $addressDb;
        private $db;
        private $carData;
        public function __construct(){
            parent::__construct();
            $this->addressDb = new \system\model\Address();
            $this->db = new \system\model\Orderform();
        }

        public function checklist(){
            //先传递过去css
            $css = array(
                "checklist.css",
            );
            View::with('css',$css);
            $js = array(
                "checklist.js",
            );
            $js[] = "area.js";//这是城市联动
            View::with('js',$js);

            //这里是将收货地址遍历过去
            $addressData = $this->addressDb->orderBy('address_default','desc')->get();
            foreach ($addressData as $key => $value){
                $addressData[$key]['address_area'] = explode('|',$value['address_area']);
            }
            View::with('addressData',$addressData);

            //这是将默认收货地址发送过去，省得点击
            $addressDefaultData = $this->addressDb->where("address_default",1)->first();
            $addressDefaultData['address_area'] = explode('|',$addressDefaultData['address_area']);
            $addressDefaultData['address_area'] = implode('',$addressDefaultData['address_area']);
            if($addressDefaultData["address_phone"]){
                $addressDefaultData["address_contact"] = $addressDefaultData["address_phone"];
            }else{
                $addressDefaultData["address_contact"] = $addressDefaultData["address_fixed"];
            }
            View::with('addressDefaultData',$addressDefaultData);
            
            
            //这是获取购买物品的数据
            $car_ids = explode(',',$_GET['ids']);
            if($car_ids){
                $review['allPrice'] = '';
                foreach ($car_ids as $key => $value){
                    if(isset($_SESSION['cart']['goods'][$value])){//如果有这个id，就添加进去
                        $this->carData[] = $_SESSION['cart']['goods'][$value];
                        $this->carData[$key]['carId'] = $value;
                        $review['allPrice'] += $_SESSION['cart']['goods'][$value]['total'];
                    }
                }
                View::with('carData',$this->carData);
                //这里将所有的总金额，件数，修改过去
                $review['allNum'] = count($this->carData);
                View::with('review',$review);
            }
            View::make();
        }
        
        public function add(){
            if(IS_POST){
                if($this->db->store($this->carData)){
                    message($this->db->getError(),'','success');
                }else{
                    message($this->db->getError(),'','error');
                }
            }
        }
        
        
        public function addAddress(){
            //这是添加收货地址
            if(IS_POST){
                if($this->addressDb->store()){
                    message($this->addressDb->getError(),'','success');
                }else{
                    message($this->addressDb->getError(),'','error');
                }
            }
        }
        
        //这是修改默认收货地址
        public function editDefault(){
            $address_id = $_POST['address_id'];
            $this->addressDb->where('address_id',$address_id)->update(['address_default' => 1]);
            $this->addressDb->WhereNotIn("address_id",array($address_id))->update(['address_default' => 0]);
        }

        public function del(){
            $address_id = $_POST['address_id'];
            $this->addressDb->where('address_id',$address_id)->delete();
        }

        //这是写最后的确认地址当我点击地址的时候，让他下边的地址，也改变
        public function endConfirm(){
            $address_id = $_POST['address_id'];
            $endConfirmInfo = $this->addressDb->where('address_id',$address_id)->first();
            $endConfirmInfo['address_area'] = explode('|',$endConfirmInfo['address_area']);
            $endConfirmInfo['address_area'] = implode('',$endConfirmInfo['address_area']);
            //是否有手机，
            if($endConfirmInfo['address_phone']){//有
                $endConfirmInfo['address_contact'] = $endConfirmInfo['address_phone'];
            }else{
                $endConfirmInfo['address_contact'] = $endConfirmInfo['address_fixed'];
            }
            echo json_encode($endConfirmInfo);
//            北京市北京市朝阳区后盾it教育
            // 后盾网 18535741189

        }

    }