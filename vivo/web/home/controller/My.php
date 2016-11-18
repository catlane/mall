<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 9:43
 */
    namespace web\home\controller;
    class My extends isLogin{
        private $css = array("my.css",);
        public function __construct(){
            parent::__construct();
            //先分配js
            $js[] = "my.js";
            $js[] = "area.js";//这是城市联动
            $js[] = "YMDClass.js";//这是时间联动
            View::with('js',$js);
//            $data = Db::table("member_user")->where("member_user_id",$_SESSION["member_user"])->first();
//            View::with("data",$data);
        }

        public function index(){
            //先分配css
            $this->css[] = "my_index.css";
            View::with('css',$this->css);
            //然后分配当前位置
            $address = "会员中心";
            View::with('address',$address);
            //然后分配订单
            $orderFromData = Db::table('orderform')
                            ->where("member_user_member_user_id",$_SESSION['member_user'])
                            ->orderBy("orderForm_sendtime","desc")
                            ->get();
            View::with("data",$orderFromData);
            $unpaidNum = '';//这是记录未付款的的数量
            foreach($orderFromData as $key => $value){

                if($value['orderForm_status'] == "未付款"){//这里就是未付款

                    $unpaidNum = $unpaidNum+1;
                }
            }
            View::with('unpaidNum',$unpaidNum);

            //这是最近浏览
            $member_notesData = Db::table("member_notes")->where("member_notes_user_id",$_SESSION['member_user'])->first();
            if($member_notesData["member_notes_commodity"] != ""){
                $member_notesData["member_notes_commodity"] = explode("|",$member_notesData["member_notes_commodity"]);
                foreach ($member_notesData["member_notes_commodity"] as $key => $value){
                    $member_notesData["member_notes_commodity"][$key] = Db::table("commodity")->where("commodity_id",$value)->first();
                }
            }
            View::with("member_notesData",$member_notesData);


            View::make();
        }
        public function order(){
            //先分配css
            $this->css[] = "my_order.css";
            $this->css[] = "member-order.css";
            View::with('css',$this->css);
            //然后分配当前位置
            $address = "<a href=\"{{u('my/index')}}\">会员中心</a><b></b>我的订单";
            View::with('address',$address);

            //这是获取的所有数据，等获取get参数的时候，对$data做出相对应的修改
            $data = Db::table('orderform')
                ->where("member_user_member_user_id",$_SESSION['member_user'])
                ->orderBy("orderForm_sendtime",'desc')
                ->get();
            foreach ($data as $key => $value){
                $data[$key]["lists"] = Db::table("orderformlist")
                    ->join("commodity","commodity_commodity_id","=","commodity_id")
                    ->where("orderForm_orderForm_id",$value['orderForm_id'])
                    ->get();
            }
            //然后修改下属性
            foreach ($data as $key => $value){
                foreach ($value['lists'] as $k => $v){
                    $data[$key]['lists'][$k]["orderFormList_attr"] = explode('|',rtrim($v["orderFormList_attr"],'|'));
                }
            }
            //然后将颜色这条取出来
            foreach ($data as $key => $value){
                foreach ($value['lists'] as $k => $v){
                    foreach ($v["orderFormList_attr"] as $kk => $vv){
                        if(strpos($vv,"颜色") > -1){
                            $data[$key]['lists'][$k]["orderFormList_attr"] = $vv;
                        }
                    }
                }
            }
            //这里是将待付款，是待收货，已完成，已关闭等基数..
            $not_paidNum = 0;
            $to_receiveNum = 0;
            $completedNum = 0;
            $closedNum = 0;
            foreach($data as $key => $value){
                if($value['orderForm_status'] == "未付款"){//这就是未付款 0
                    $not_paidNum = $not_paidNum + 1;
                }
                if($value['orderForm_status'] == "未发货" || $value['orderForm_status'] == "已发货"){//这就是未发货 1
                    $to_receiveNum = $to_receiveNum + 1;
                }
                if($value['orderForm_status'] == "已完成"){//这就是待收货 1
                    $completedNum = $completedNum + 1;
                }
                if($value['orderForm_status'] == "已取消"){//这就是待收货 1
                    $closedNum = $closedNum + 1;
                }
            }
            View::with("not_paidNum",$not_paidNum);
            View::with("to_receiveNum",$to_receiveNum);
            View::with("completedNum",$completedNum);
            View::with("closedNum",$closedNum);
            //然后再分配当前点击的状态，是待付款，是待收货，已完成，已关闭...
            if(isset($_GET['status'])){//这里是判断有没有状态，如果没有，就是显示全部
                if($_GET['status'] == "not_paid"){//这就是未付款 0
                    $not_paid = array();
                    foreach ($data as $key => $value) {
                        if($value["orderForm_status"] == "未付款"){
                            $not_paid[] = $value;
                        }
                    }
                    View::with("data",$not_paid);
                }
                if($_GET['status'] == "to_receive"){//这就是待收货 1
                    $to_receive = array();
                    foreach ($data as $key => $value) {
                        if($value["orderForm_status"] == "未发货" || $value["orderForm_status"] == "已发货"){
                            $to_receive[] = $value;
                        }
                    }
                    View::with("data",$to_receive);
                }
                if($_GET['status'] == "completed"){//这就是已完成2
                    $completed = array();
                    foreach ($data as $key => $value) {
                        if($value["orderForm_status"] == "已完成"){
                            $completed[] = $value;
                        }
                    }
                    View::with("data",$completed);
                }
                if($_GET['status'] == "closed"){//这就是已关闭 3
                    $closed = array();
                    foreach ($data as $key => $value) {
                        if($value["orderForm_status"] == "已取消"){
                            $closed[] = $value;
                        }
                    }
                    View::with("data",$closed);
                }
            }else{//这里是没有状态，就是order没有附加参数，显示所有的订单信息
                View::with("data",$data);
            }

            //这是用于左边的是否选中
            View::with("on","我的订单");
            View::make();
        }

        //这是退换货
        public function refund(){
            //先分配css
            $this->css[] = "my_refund.css";
            $this->css[] = "my_order.css";
            $this->css[] = "member-order.css";
            View::with('css',$this->css);
            //然后分配当前位置
            $address = "<a href=\"{{u('my/index')}}\">会员中心</a><b></b>退款/退货";
            View::with('address',$address);
            
            //这里是分配退换货品的信息
            $returnsDb = new \system\model\Returns();
            $data = $returnsDb
                ->where("returns_user_id",$_SESSION['member_user'])
                ->join("orderform","returns_orderForm_id","=","orderForm_id")
                ->get();

            foreach ($data as $key => $value){
                $data[$key]["lists"] = Db::table("orderformlist")
                    ->join("commodity","commodity_commodity_id","=","commodity_id")
                    ->where("orderForm_orderForm_id",$value['orderForm_id'])
                    ->get();
            }
            //然后修改下属性
            foreach ($data as $key => $value){
                foreach ($value['lists'] as $k => $v){
                    $data[$key]['lists'][$k]["orderFormList_attr"] = explode('|',rtrim($v["orderFormList_attr"],'|'));
                }
            }
            //然后将颜色这条取出来
            foreach ($data as $key => $value){
                foreach ($value['lists'] as $k => $v){
                    foreach ($v["orderFormList_attr"] as $kk => $vv){
                        if(strpos($vv,"颜色") > -1){
                            $data[$key]['lists'][$k]["orderFormList_attr"] = $vv;
                        }
                    }
                }
            }
            View::with("data",$data);
            
            //然后将未选择退货还是换货的数量分配过去
            $refundCount = 0;
            foreach($data as $key => $value){
            	if($value["returns_status"] == "退/换货申请中"){
            		$refundCount ++;
            	}
            }
            View::with("refundCount",$refundCount);
            //这是用于左边的是否选中
            View::with("on","退/换货");
            View::make();
        }
            //这是添加到退货表中
            public function returns(){
                $orderForm_id = $_POST['orderForm_id'];
                //1.变成已退货
                Db::table("orderform")->where("orderForm_id",$orderForm_id)->update(["orderForm_status"=>"退/换货申请中"]);
                $orderFormData = Db::table("orderform")->where("orderForm_id",$orderForm_id)->first();
                //2.加入到退货表中
                $returnsDb = new \system\model\Returns();
                $data = array(
                    "returns_orderForm_id" => $orderForm_id,
                    "returns_status" => "退/换货申请中",
                    "returns_time" => time()
                );
                return $returnsDb->add($data);
                die();
            }

            //这是修改时退货还是换货
            public function editReturns(){
                $returnsDb = new \system\model\Returns();
                $returns_id = $_POST['returns_id'];
                $returns_status = $_POST['returns_status'];
                $orderForm_id = $returnsDb->where("returns_id",$returns_id)->pluck("returns_orderForm_id");
                Db::table("orderform")->where("orderForm_id",$orderForm_id)->update(["orderForm_status"=>$returns_status]);
                $returnsDb->where("returns_id",$returns_id)->update(["returns_status"=>$returns_status]);
                echo 1;
                die();
            }




        public function information(){
            $vipDb = new \system\model\Member_user();
            if(IS_POST){
                if($vipDb->edit()){
                    message($vipDb->getError(),"","success");
                }else{
                    message($vipDb->getError(),"","error");
                }
            }
            //先分配css
            $this->css[] = "my_information.css";
            View::with('css',$this->css);
            //然后分配当前位置
            $address = "<a href=\"{{u('my/index')}}\">会员中心</a><b></b>个人资料";
            View::with('address',$address);

            $data = $vipDb->where("member_user_id",$_SESSION['member_user'])->first();
            $data["member_user_birthday"] = explode('|',$data["member_user_birthday"]);
            $data["member_user_liveAddress"] = explode("|",$data["member_user_liveAddress"]);
            View::with("data",$data);
            //这是用于左边的是否选中
            View::with("on","个人资料");
            View::make();
        }
        public function address(){
            //先分配css
            $this->css[] = "my_address.css";
            View::with('css',$this->css);

            //然后分配当前位置
            $address = "<a href=\"{{u('my/index')}}\">会员中心</a><b></b>收货地址";
            View::with('address',$address);

            //然后分配数据
            $addressDb = new \system\model\Address();
            $data = $addressDb
                ->where("address_member_user_id",$_SESSION['member_user'])
                ->orderBy("address_default",'desc')
                ->get();

            foreach ($data as $key => $value){
                $data[$key]['address_area'] = explode('|',$value['address_area']);
            }
            View::with("data",$data);
            //这是传递过去地址的数量
            $num = count($data);
            View::with("num",$num);
            //这是用于左边的是否选中
            View::with("on","收货地址");
            View::make();
        }
            //这是添加收货地址
            public function addAddress(){
                $addressDb = new \system\model\Address();
                if(IS_POST){
                    if($addressDb->store()){
                        message($addressDb->getError(),'','success');
                    }
                    message($addressDb->getError(),'','error');
                }
            }
        
            //这是修改收货地址
            public function editAddress(){
                $addressDb = new \system\model\Address();
                if(IS_POST){
                    if($addressDb->edit()){
                        message($addressDb->getError(),'','success');
                    }
                    message($addressDb->getError(),'','error');
                }
            }
            public function showAddress(){
                $addressDb = new \system\model\Address();
                $address_id = $_POST['address_id'];
                $data = $addressDb->where("address_id",$address_id)->first();
                $data["address_area"] = explode('|',$data['address_area']);
                echo json_encode($data);
                die();
            }
            public function delAddress(){
                $addressDb = new \system\model\Address();
                $addressDb->where("address_id",$_POST["address_id"])->delete();
                echo 1;
                die();
            }
            //这是修改默认收货地址
            public function editDefault(){
                $addressDb = new \system\model\Address();
                $address_id = $_POST['address_id'];
                $addressDb->where('address_id',$address_id)->update(['address_default' => 1]);
                $addressDb->WhereNotIn("address_id",array($address_id))->update(['address_default' => 0]);
                echo 1;
                die();
            }
        
        
        public function favorite(){
            //先分配css
            $this->css[] = "my_favorite.css";
            View::with('css',$this->css);
            //然后分配当前位置
            $address = "<a href=\"{{u('my/index')}}\">会员中心</a><b></b>我的收藏";
            View::with('address',$address);

            //这是我的收藏
            $keepDb = new \system\model\Keep();
            $data = $keepDb
                ->where("keep_commodity_user_id",$_SESSION['member_user'])
                ->join("commodity","keep_commodity_id",'=',"commodity_id")
                ->get();
            View::with("data",$data);
            //这是用于左边的是否选中
            View::with("on","我的收藏");
            View::make();
        }
        //删除收藏
        public function delKeep(){
            $keepDb = new \system\model\Keep();
            $keepDb->where("keep_id",$_POST['keep_id'])->delete();
            echo 1;
            die();
        }

        public function detail(){//这是订单详情
            //先分配css
            $this->css[] = "my_detail.css";
            $this->css[] = "buy-process.css";
            View::with('css',$this->css);
            $address = "<a href=\"{{u('my/order')}}\">我的订单</a><b></b>订单详情";
            View::with('address',$address);

            $orderForm_id = q("get.orderForm_id",'0','intval');
            //这是订单数据
            $data = Db::table('orderform')
                ->where("orderForm_id",$orderForm_id)
                ->first();
            $data['returns']  = Db::table('returns')->where("returns_orderForm_id",$orderForm_id)->first();
            $data["lists"] = Db::table("orderformlist")
                ->join("commodity","commodity_commodity_id","=","commodity_id")
                ->where("orderForm_orderForm_id",$orderForm_id)
                ->get();
            //然后修改下属性
            foreach ($data['lists'] as $k => $v){
                $data['lists'][$k]["orderFormList_attr"] = explode('|',rtrim($v["orderFormList_attr"],'|'));
            }
            //然后将颜色这条取出来
            foreach ($data['lists'] as $k => $v){
                foreach ($v["orderFormList_attr"] as $kk => $vv){
                    if(strpos($vv,"颜色") > -1){
                        $data['lists'][$k]["orderFormList_attr"] = $vv;
                    }
                }
            }
            View::with("data",$data);
            View::make();
        }


        //这是取消订单，就是将这个的数字改成3
        public function cancelOrder(){
            $orderForm_id = $_POST['orderForm_id'];
            $orderForm_cancelMethod = $_POST['orderForm_cancelMethod'];
            if($orderForm_cancelMethod == "手动"){
                $orderForm_cancelMethod = "用户手动取消订单";
            }
            Db::table('orderform')->where('orderForm_id',$orderForm_id)->update(["orderForm_status"=>'已取消',"orderForm_cancelTime"=>time(),"orderForm_cancelMethod"=>$orderForm_cancelMethod]);
            echo 1;
            die();
        }

        public function Receipt(){//这是收货
            $orderForm_id = $_POST['orderForm_id'];
            Db::table('orderform')->where('orderForm_id',$orderForm_id)->update(["orderForm_status"=>'已完成']);
            echo 1;
            die();
        }

    }