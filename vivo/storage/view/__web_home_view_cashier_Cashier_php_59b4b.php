<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/resource/hdjs/home/css/cashier.css"/>
		<script src="<?php echo __ROOT__?>/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo __ROOT__?>/resource/hdjs/home/js/cashier.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="head">
			<!--页头登录订单信息-->
			<div class="login-bar">
				<ul class="fr">
					<li>
						vivo欢迎您，
						<a href="">杨宇辉5201314</a><!--这里就跳转到了用户中心-->
					</li>
					<li>
						<a href="">退出登录</a>
					</li>
					<li>
						<a href="">我的订单</a>
					</li>
					<li>
						<a href="">帮助中心</a>
					</li>
				</ul>
			</div>
		</div>
		<!--收银台logo-->
		<div class="cash-logo">
			<div class="w">
				<img src="<?php echo __ROOT__?>/resource/hdjs/home/other/master/casher-logo.png"/>
			</div>
		</div>
		<!--这是网页主体start-->
		<div class="main w">
			<div class="order-info">
				<div class="order-info-less">
					<div class="left">
						<p class="orderid-d">
							订单提交成功，请您尽快付款！订单号：16092179594129120292
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
							<span>¥2498.00</span>
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
							<span class="val">【火爆热销】X7全网通  金色  x1</span>
						</li>
						<li>
							交易金额：
							<span class="val">2498.00元</span>
						</li>
						<li>
							购买时间：
							<span class="val">2016-09-21 22:06:34</span>
						</li>
						<li>
							商品名称：
							<span class="val">【火爆热销】X7全网通  金色  x1</span>
						</li>
						<li>
							收 货 人：
							<span class="val">后盾网</span>
						</li>
						<li>
							联系方式：
							<span class="val">18535741189</span>
						</li>
						<li>
							收货地址：：
							<span class="val">北京市北京市朝阳区后盾it教育</span>
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
								<span>¥2498.00</span>
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
						<a href="script:;">立即支付</a>
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
						<img src="<?php echo __ROOT__?>/resource/hdjs/home/other/master/weixin-ico.jpg"/>
						<em></em>
					</div>
				</a>
			</div>
		</div>
	</body>
</html>
