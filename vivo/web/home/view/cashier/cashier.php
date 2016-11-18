<!DOCTYPE html>
<?php
	if(!$data["orderForm_id"]){
		go(u('index/index'));
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/hdjs/home/css/master.css"/>
		<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/hdjs/home/css/cashier.css"/>
		<script src="{{__ROOT__}}/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="{{__ROOT__}}/resource/hdjs/home/js/master.js"></script>
		<script src="{{__ROOT__}}/resource/hdjs/home/js/cashier.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="head">
			<!--页头登录订单信息-->
			<div class="login-bar">
				<ul class="fr">
					<li>
						vivo欢迎您，
						<a href="{{u('my/information')}}">{{$data["member_user_nickname"]}}</a><!--这里就跳转到了用户中心-->
					</li>
					<li>
						<a href="" class="exit">退出登录</a>
						<script>
							$(function () {
								$(".exit").click(function () {
									alertDiv("确定退出么？","您确定退出么？","退出","取消","error");
									$(".btn-blue").click(function () {
										$.post("{{u('common/out')}}",{"a":1},function (res) {
											if(res){
												alertDiv("退出成功","欢迎下次登陆","关闭","","success");
												setTimeout(function () {
													location.href = "{{u('index/index')}}";
												},1000)
											}
										},"json")
									})
									return false;
								})
							})
						</script>
					</li>
					<li>
						<a href="{{u('my/order')}}">我的订单</a>
					</li>
				</ul>
			</div>
		</div>
		<!--收银台logo-->
		<div class="cash-logo">
			<div class="w">
				<img src="{{__ROOT__}}/resource/hdjs/home/other/master/casher-logo.png"/>
			</div>
		</div>
		<!--这是网页主体start-->
		<div class="main w">
			<div class="order-info">
				<div class="order-info-less">
					<div class="left">
						<p class="orderid-d">
							订单提交成功，请您尽快付款！订单号：{{$data["orderForm_num"]}}
						</p>
						<p class="orderid-cancle">
							请您在提交订单后
							<span>72小时</span>
							内完成支付，否则订单自动会取消。
						</p>
					</div>
					<div class="right">
						<p>
							应付金额
							<span>¥{{number_format($data["orderForm_price"],2)}}</span>
							元
						</p>
						<a href="script:;">
							订单详情
							<div class="triangle"></div>
						</a>
					</div>
				</div>
				<!--订单详情-->
				<div class="order-details">
					<ul>
						<li>
							商品名称：
							<span class="val">
								<foreach from="$data['commodity_info']" key="$key" value="$value">
									<if value="$key == 0">
										{{$value[0]}}
										<foreach from="$value[1]" key="$k" value="$v">
											{{$v}}
										</foreach>
										<br/>
									<else>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										{{$value[0]}}
										<foreach from="$value[1]" key="$k" value="$v">
											{{$v}}
										</foreach>
										<br/>
									</if>
								</foreach>
							</span>
						</li>
						<li>
							交易金额：
							<span class="val">{{$data['orderForm_price']}}元</span>
						</li>
						<li>
							购买时间：
							<span class="val">{{date("Y-m-d H:i:m",$data["orderForm_sendtime"])}}</span>
						</li>
						<li>
							收 货 人：
							<span class="val">{{$data["orderForm_receiver"]}}</span>
						</li>
						<li>
							联系方式：
							<span class="val">{{$data["orderForm_phone"]}}</span>
						</li>
						<li>
							收货地址：：
							<span class="val">{{$data["orderForm_address"]}}</span>
						</li>
					</ul>
				</div>
				<!--付款方式-->
				<div class="pay-way-outer">
					<div class="pay-wraper">
						<!--这是显示的支付方式-->
						<div class="rec-alipay">
							<div class="pay-item zhifubao selected">
								<a href="script:;"></a>
							</div>
							<div class="other-pay">
								<span>其他支付方式</span>
							</div>
							<div class="order-total">
								支付
								<span>¥{{number_format($data["orderForm_price"],2)}}</span>
								元
							</div>
						</div>
						
						<!--这是隐藏的支付方式-->
						<div class="other-paylist">
							<ul>
								<li class="pay-item shaoma">
									<a href="script:;"></a>
								</li>
								<li class="pay-item weixin">
									<a href="script:;"></a>
								</li>
								<li class="pay-item caifutong">
									<a href="script:;"></a>
								</li>
								<li class="pay-item zaixian">
									<a href="script:;"></a>
								</li>
								<li class="pay-item huabei">
									<a href="script:;"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="pay-btn">
						<a href="" class="J_pay">立即支付</a>
					</div>
				</div>
			</div>
		</div>
		<!--这是网页主体end-->
		<div class="footer">
			<div class="copyright">
    			COPYRIGHT © 1996-2015 vivo MOBILE COMMUNICATION CO.LTD.ALL RIGHTS RESERVED. 粤ICP备05100288号
			</div>
			<div class="sns-box">
				成为vivo粉丝:
				<a href="" class="a1"><b></b></a>
				<a href="" class="a2"><b></b></a>
				<a href="" class="a3"><b></b></a>
				<a href="" class="a4">
					<b></b>
					<div>
						<img src="{{__ROOT__}}/resource/hdjs/home/other/master/weixin-ico.jpg"/>
						<em></em>
					</div>
				</a>
			</div>
		</div>
		<script>
			$(function () {
				$(".J_pay").click(function () {
					var orderForm_id = "{{$data['orderForm_id']}}";
					$.post("{{u('cashier/editStatus')}}",{"orderForm_id":orderForm_id},function () {
						location.href = "{{u('success/success',array('orderForm_id'=>$data['orderForm_id']))}}";
					},'json')
					return false;
				})
				//					{{u('success/success',array('orderForm_id'=>$data['orderForm_id']))}}

			})
		</script>
	</body>
</html>
