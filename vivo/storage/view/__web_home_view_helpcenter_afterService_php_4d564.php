<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>vivo智能手机官方商城</title>
		<link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">
		<script>
			var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?11fa58260b76b6726f12b8c97924964a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();		</script>
		<script>
			var Root = "http://127.0.0.1/vivo";
		</script>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/master.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/helpcenter.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/afterService.css" />
		
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='4910aae0d1f5243b755be53b79dfdf18'/><input type='hidden' name='__TOKEN__' value='4910aae0d1f5243b755be53b79dfdf18'/><input type='hidden' name='__TOKEN__' value='4910aae0d1f5243b755be53b79dfdf18'/></form>
				<script>
					$(function() {
						$('.searchForm').submit(function() {
							var searchKeywordStr = $(this).find("input[name=searchKeywordStr]").val();
							location.href = "http://127.0.0.1/vivo/index.php?s=home/product/search" + "&searchKeywordStr=" + searchKeywordStr;
							return false;
						})
					})
				</script>
				<a href="" class="close"></a>
			</div>
		</div>
		<header class="header">
			<div class="wrapper">
				<nav>
					<a href="http://127.0.0.1/vivo/index.php?s=home/index/index" class="logoImg">
						<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/logo.png" />
					</a>
					<ul class="nav">
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=2" category_id="2">手机</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=8" category_id="8">上衣</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=19" category_id="19">配件</a>
							</li>
											</ul>
					<script>
						$(function() {
							$('.nav li a').each(function(k, v) {
								var This = $(this);
								var thisCategory_id = 0; //这是获取的当前分类的ID
								$.post("http://127.0.0.1/vivo/index.php?s=home/common/is_category", {
									"category_id": thisCategory_id
								}, function(res) {
									if(This.attr('category_id') == res) {
										This.css({
											"background": "#008cd6",
											"color": "#fff"
										});
									}
									//第一，获取当前页面的category_id

									//	                        //如果当前这个循环的category_id == 当前这个页面的category_id的话，就给他一个类
									//	                        if($(this).attr('category_id') == $thisCategory_id){
									//	                            $(this).css({"background":"#008cd6","color":"#fff"});
									//	                        }
								}, "json")
							})
						})
					</script>
					<div class="search-user">
						<ul class="u">
							<li class="search">
								<a href="">
									<b></b>
								</a>
							</li>
							<li class="user">
								<a href="http://127.0.0.1/vivo/index.php?s=home/my/index">
									<b></b>
								</a>
								<div class="user-menu">
									<h1 class="member-center">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/information">
                                    <i></i>
                                    个人中心
                                </a>
                                
                                <span class="icon-angular"></span>
                            </h1>
									<h1 class="my-order">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/order">
                                    <i style="background-position: -48px 0;"></i>
                                    我的订单
                                </a>
                            </h1>
																		<h1 class="logout">
                                    <a href="script:;">
                                        <i style="background-position: -100px 0;"></i>
                                        退出登录
                                    </a>
                                </h1>
																	</div>
								<script>
									$(function() {
										$(".member-center").hover(function() {
											$(this).find("i").css("background-position", "0px -45px");
										}, function() {
											$(this).find("i").css("background-position", "0px 0px");
										})

										$(".my-order").hover(function() {
											$(this).find("i").css("background-position", "-48px -45px");
										}, function() {
											$(this).find("i").css("background-position", "-48px 0px");
										})

										$(".logout").hover(function() {
											$(this).find("i").css("background-position", "-100px -45px");
										}, function() {
											$(this).find("i").css("background-position", "-100px 0px");
										})

										$('.logout a').click(function() {
											alertDiv("退出", "确定退出么", "退出", "取消", "error");
											$(".btn-blue").click(function() {
												$.post("http://127.0.0.1/vivo/index.php?s=home/common/out", {
													"a": 1
												}, function(res) {
													location.href = "http://127.0.0.1/vivo/index.php?s=home/index/index";
												}, "json")
											})

											return false;
										})

									})
								</script>
							</li>
							<li class="shopCar">
								<a href="http://127.0.0.1/vivo/index.php?s=home/shoppingcar/shoppingcar">
									<b id="end"></b>
									<span class="shopcart-num">1</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--这里是子模板的内容start-->
		
	<div class="main">
		<div class="content">
			<div class="crumbs">
				您的位置是:
				<a href="http://127.0.0.1/vivo/index.php?s=home/index/index">首页</a>
				<b></b> 帮助中心<b></b>售后服务			</div>
		</div>
		<div class="content">
			<aside class="menu-bar">
				<dl class="menu">
					<dt class="menu-title buy-process"><i></i><span>购买流程</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/alipay">支付宝支付</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/huabei">花呗分期</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice">发票说明</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/coupon">优惠券说明</a>
					</dd>
					<dt class="menu-title send-mode"><i></i><span>配送方式</span></dt>
					<dd class="menu-item on">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport">配送方式</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost">配送费用</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/sign">签收须知</a>
					</dd>
					<dt class="menu-title service-support"><i></i><span>服务支持</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/servicePromise">服务保证</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService">售后服务</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/brokenScreen">碎屏宝</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/extendService">手机延保</a>
					</dd>
					<dt class="menu-title brand-service"><i></i><span>品牌服务</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/contactUs">联系我们</a>
					</dd>
				</dl>
			</aside>
			
	<article class="c">
		<!--c start -->
		<div class="c-title cl">
			<h1>售后服务</h1>
		</div>

		<div class="prod-main-afterservice">
			<div class="prod-afterservice-box wrapper">
				<ul class="cl">
					<li class="return">
						<b></b>
						<h3>30天无理由退换货</h3>
						<p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。
						</p>
					</li>

					<li class="b1">
						<b></b>
						<h3>退机服务</h3>
						<p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>
							<span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>
					</li>
					<li class="b3">
						<b></b>
						<h3>换机服务</h3>
						<p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>
					</li>
					<li class="b2">
						<b></b>
						<h3>全国联网三包服务</h3>
						<p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：
							<a href="/helpcenter/service-promise" target="_blank">http://shop.vivo.com.cn/helpcenter/service-promise</a>
						</p>
					</li>
					<li class="b5">
						<b></b>
						<h3>vivo售后服务点查询</h3>
						<p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：
							<a href="http://www.vivo.com.cn/service/map.html" target="_blank">http://www.vivo.com.cn/service/map.html</a>
						</p>
					</li>

				</ul>
			</div>
		</div>
	</article>

		</div>
<script type="text/javascript">
	$(function() {
		var on = "售后服务";
		$.each($('.menu-item'),function(k,v){
			console.log(on)
			if($(this).find("a").html() == on){
				$(this).css({"color":"#018ed6","background-color":"#def4ff"});
				$(this).find("a").css("color","inherit");
			}
		})
	})
</script>
	</div>

		<!--这里是子模板的内容end-->
		<footer>
			<div class="shop-agree">
				<div class="wrapper cl">
					<ul>
						<li>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">
								<b class="b1"></b>
								<p>
									<span>0</span> 运费购手机
								</p>
							</a>
						</li>
						<li>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">
								<b class="b2"></b>
								<p>
									<span>30</span> 天无理由退款
								</p>
							</a>
						</li>
						<li>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">
								<b class="b3"></b>
								<p>
									电子发票
								</p>
							</a>
						</li>
						<li>
							<a href="http://www.vivo.com.cn/service/map.html" target="_blank">
								<b class="b4"></b>
								<p>
									<span>380</span> 余家售后服务中心
								</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="shop-help">
				<div class="wrapper">
					<dl>
						<dt>
                    <b class="b1"></b>
                    购买流程
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/alipay" target="_blank">支付宝支付</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">发票说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/coupon" target="_blank">优惠券说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/huabei" target="_blank">花呗分期</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b2"></b>
                    配送方式
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport" target="_blank">配送方式</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">配送费用</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/sign" target="_blank">签收须知</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b3"></b>
                    服务支持
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/servicePromise" target="_blank">服务保证</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">售后服务</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/brokenScreen" target="_blank">碎屏保</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/extendService" target="_blank">手机延保</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b4"></b>
                    品牌服务
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/contactUs" target="_blank">联系我们</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b5"></b>
                    小V在线时段
                </dt>
						<dd>周一至周五 08:00-21:00</dd>
						<dd>周六、周日 09:00-18:00</dd>
						<dd class="online-service">
							<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" target="_blank">
								<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/online-service.png" />
							</a>
						</dd>
					</dl>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="wrapper">
					<div class="sns-box">
						成为vivo粉丝:
						<a href="" class="a1"><b></b></a>
						<a href="" class="a2"><b></b></a>
						<a href="" class="a3"><b></b></a>
						<a href="" class="a4">
							<b></b>
							<div>
								<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" />
								<em></em>
							</div>
						</a>
					</div>
					<div class="copy-info">
						<a href="" class="footer-logo"></a>
						Copyright ©2011-2016 广东步步高电子工业有限公司 						<br /> 版权所有 保留一切权利粤粤ICP备05100288号 |
						<a href="http://www.miitbeian.gov.cn/">粤ICP备05100288号</a>
					</div>
				</div>
			</div>
		</footer>
		<div class="side-bar">
			<ul>

				<li>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" class="service" target="_blank">
						<div>
							在线客服
						</div>
					</a>
				</li>
				<li>
					<a href="" class="qrcode">
						<div>
							<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" alt="" />
							<p>
								支付宝扫码<br />关注最新活动福利
							</p>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="feedback">
						<div>
							意见反馈
						</div>
					</a>
					<script type="text/javascript">
						$('.feedback').click(function(){
							alertDiv("意见反馈提醒","您如果需要什么意见，可以通过在线客服反馈哦!","关闭","","success")
							return false;
						})
					</script>
				</li>
				<li>
					<a href="" class="backtop">
						<div>
							返回顶部
						</div>
					</a>
				</li>
			</ul>
		</div>
	</body>

</html>

