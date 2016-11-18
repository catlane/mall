<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>h-ui智能手机官方商城</title>
<!--		<link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">-->
		<link rel="shortcut icon" href="{{__ROOT__}}/resource/hdjs/home/other/master/hui.ico">
		<script>
			{{$sys["sys_count"]}}
		</script>
		<script>
			var Root = "{{__ROOT__}}";
		</script>
		<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/hdjs/home/css/master.css" />
		<foreach from="$css" value="$value">
			<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/hdjs/home/css/{{$value}}" />
		</foreach>

		<script src="{{__ROOT__}}/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="{{__ROOT__}}/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
		<foreach from="$js" value="$value">
			<script src="{{__ROOT__}}/resource/hdjs/home/js/{{$value}}" type="text/javascript" charset="utf-8"></script>
		</foreach>
	</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				</form>
				<script>
					$(function() {
						$('.searchForm').submit(function() {
							var searchKeywordStr = $(this).find("input[name=searchKeywordStr]").val();
							location.href = "{{u('product/search')}}" + "&searchKeywordStr=" + searchKeywordStr;
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
					<a href="{{u('index/index')}}" class="logoImg">
						<img src="{{__ROOT__}}/resource/hdjs/home/other/master/logo.png" />
					</a>
					<ul class="nav">
						<foreach from="$topCategoryData" key="$key" value="$value">
							<li>
								<a href="{{u('product/phone',array('category_id'=>$value['category_id']))}}" category_id="{{$value['category_id']}}">{{$value['category_name']}}</a>
							</li>
						</foreach>
					</ul>
					<script>
						$(function() {
							$('.nav li a').each(function(k, v) {
								var This = $(this);
								var thisCategory_id = {{q('get.category_id', '0', 'intval')}}; //这是获取的当前分类的ID
								$.post("{{u('common/is_category')}}", {
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
								<a href="{{u('my/index')}}">
									<b></b>
								</a>
								<div class="user-menu">
									<h1 class="member-center">
                                <a href="{{u('my/information')}}">
                                    <i></i>
                                    个人中心
                                </a>
                                
                                <span class="icon-angular"></span>
                            </h1>
									<h1 class="my-order">
                                <a href="{{u('my/order')}}">
                                    <i style="background-position: -48px 0;"></i>
                                    我的订单
                                </a>
                            </h1>
									<?php if(isset($_SESSION['member_user'])){ ?>
									<h1 class="logout">
                                    <a href="script:;">
                                        <i style="background-position: -100px 0;"></i>
                                        退出登录
                                    </a>
                                </h1>
									<?php }else{ ?>
									<h1 class="login">
                                    <a href="{{u('login/index')}}">
                                        <i style="background-position: -100px 0;"></i>
                                        会员登录
                                    </a>
                                </h1>
									<?php } ?>
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
												$.post("{{u('common/out')}}", {
													"a": 1
												}, function(res) {
													location.href = "{{u('index/index')}}";
												}, "json")
											})

											return false;
										})

									})
								</script>
							</li>
							<li class="shopCar">
								<a href="{{u('shoppingcar/shoppingcar')}}">
									<b id="end"></b>
									<span class="shopcart-num">{{$carNum}}</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--这里是子模板的内容start-->
		<blade name="content" />
		<!--这里是子模板的内容end-->
		<footer>
			<div class="shop-agree">
				<div class="wrapper cl">
					<ul>
						<li>
							<a href="{{u('helpcenter/transportCost')}}" target="_blank">
								<b class="b1"></b>
								<p>
									<span>0</span> 运费购手机
								</p>
							</a>
						</li>
						<li>
							<a href="{{u('helpcenter/afterService')}}" target="_blank">
								<b class="b2"></b>
								<p>
									<span>30</span> 天无理由退款
								</p>
							</a>
						</li>
						<li>
							<a href="{{u('helpcenter/invoice')}}" target="_blank">
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
							<a href="{{u('helpcenter/alipay')}}" target="_blank">支付宝支付</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/invoice')}}" target="_blank">发票说明</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/coupon')}}" target="_blank">优惠券说明</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/huabei')}}" target="_blank">花呗分期</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b2"></b>
                    配送方式
                </dt>
						<dd>
							<a href="{{u('helpcenter/transport')}}" target="_blank">配送方式</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/transportCost')}}" target="_blank">配送费用</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/sign')}}" target="_blank">签收须知</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b3"></b>
                    服务支持
                </dt>
						<dd>
							<a href="{{u('helpcenter/servicePromise')}}" target="_blank">服务保证</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/afterService')}}" target="_blank">售后服务</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/brokenScreen')}}" target="_blank">碎屏保</a>
						</dd>
						<dd>
							<a href="{{u('helpcenter/extendService')}}" target="_blank">手机延保</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b4"></b>
                    品牌服务
                </dt>
						<dd>
							<a href="{{u('helpcenter/contactUs')}}" target="_blank">联系我们</a>
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
								<img src="{{__ROOT__}}/resource/hdjs/home/other/master/online-service.png" />
							</a>
						</dd>
					</dl>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="wrapper">
					<div class="sns-box">
						成为h-ui粉丝:
<!--						<a href="" class="a1"><b></b></a>-->
<!--						<a href="" class="a2"><b></b></a>-->
<!--						<a href="" class="a3"><b></b></a>-->
						<a href="" class="a4">
							<b></b>
							<div>
								<img src="{{__ROOT__}}/resource/hdjs/home/other/master/qq.png" />
								<em></em>
							</div>
						</a>
					</div>
					<div class="copy-info">
						<a href="{{u('home/index/index')}}" class="footer-logo"></a>
						{{$sys['sys_copy']}}
						<br /> 版权所有 保留一切权利粤{{$sys["sys_beian"]}} |
						<a href="http://www.miitbeian.gov.cn/">{{$sys["sys_beian"]}}</a>
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
							<img src="{{__ROOT__}}/resource/hdjs/home/other/master/qq.png" alt="" />
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