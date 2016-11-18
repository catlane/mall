<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>vivo智能手机官方商城</title>
		<link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">
		<script>
			{
				{
					$sys["sys_count"]
				}
			}
			var Root = "http://127.0.0.1/vivo";
		</script>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/master.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/helpcenter.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/servicePromise.css" />
		
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='1e2995e7a1922b49ff721e9adf789c2d'/><input type='hidden' name='__TOKEN__' value='1e2995e7a1922b49ff721e9adf789c2d'/><input type='hidden' name='__TOKEN__' value='1e2995e7a1922b49ff721e9adf789c2d'/></form>
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
								var thisCategory_id = {
									{
										q('get.category_id', '0', 'intval')
									}
								}; //这是获取的当前分类的ID
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
									<span class="shopcart-num">0</span>
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
				<b></b> 帮助中心<b></b>服务保证			</div>
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
			<h1>服务保证</h1>
		</div>
		<dl>
			<dt><h2>三包细则</h2></dt>
			<dd class="sanbao-details">
				<ul>
					<li>以下若有与国家政策不符或遗漏之处，以国家政策为准。</li>
					<li>
						<p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 您可以凭有效发货票和有效三包凭证按照三包规定将享受下列三包服务：</p>
						<table>
							<tbody>
								<tr>
									<td class="not-empty">
										<h3>自售出之日起7日内</h3>
										<p>移动电话机主机出现国家规定的《移动电话机商品性能故障表》所列性能故障的，消费者可以选择退货、换货或者修理。 </p>
									</td>
									<td class="empty"></td>
									<td class="not-empty">
										<h3>自售出之日起第8日至第30日内</h3>
										<p>移动电话机主机出现国家规定的《移动电话机商品性能故障表》所列性能故障的，消费者可以选择换货或者修理。</p>
									</td>
									<td class="empty"></td>
									<td class="not-empty">
										<h3>三包有效期为一年</h3>
										<p>移动电话机主机三包有效期为一年，您的移动电话主机出现性能故障，可享受保修服务。</p>
									</td>
								</tr>
							</tbody>
						</table>
					</li>
					<li>在三包有效期内，用户必须出具购机发票和有效三包凭证才能享受包换、包退的权利；如果丢失有效发货票和三包凭证，且不能提供有效发货票，仅提供保修服务，不进行退换货处理。</li>
					<li>在三包有效期内，电池、充电器、移动终端卡、数据接口卡、外接有线耳机等移动电话机附件出现国家规定的《移动电话机商品性能故障表》所属故障，按照国家规定时间予以保修，超过保修期也可进行付费维修，维修费用全国统一。</li>
					<li>本公司对产品的其他配置（例如：说明书、保修卡等）不承担三包责任。</li>
				</ul>
			</dd>
			<dt><h2>保修说明</h2></dt>
			<dd class="maintain-declare">
				<p>您的保修服务仅限于正常使用下有效。一切人为损坏及属下列情况之一的移动电话机商品，不实行三包，但可以实行收费修理：</p>
				<table>
					<tbody>
						<tr>
							<td>
								<p>超过三包有效期的</p>
							</td>
							<td>
								<p>非本公司授权的服务点拆动造成</p>
							</td>
							<td>
								<p>无三包凭证及有效发货票的，但能够证明该移动电话机商品在三包有效期内的除外</p>
							</td>
							<td>
								<p>未按产品使用说明书要求使用</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>因不可抗力造成损坏的</p>
							</td>
							<td>
								<p>三包凭证上的内容与商品实物标识不符或者涂改的</p>
							</td>
							<td>
								<p>非本公司原因造成的故障、缺陷</p>
							</td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<ul>
					<li>非保修机维修后对手机原故障保修30日</li>
					<li>进水机或严重人为损坏机器维修，用户均需与服务点先签定有关维修协议</li>
					<li>您可以到本公司全国联保网络的任一联保点进行更换、维修</li>
					<li>您可以到本公司全国联保网络的任一联保点进行更换、维修</li>
				</ul>
			</dd>
			<dt><h2>送修及取机注意事项</h2></dt>
			<dd class="announcements">
				<table>
					<tbody>
						<tr>
							<td>
								<p>顾客在填写《维修工作单》时，请根据要求填写，且字迹清楚、信息有效 （姓名、地址、联系电话、故障现象等）</p>
							</td>
							<td>
								<p>请您在送修机器前，先将存储在手机内的重要信息（如电话号码）记录下来，以免丢失或泄露</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>顾客取机凭"步步高移动电话维修单"的用户联取机，如果因顾客不慎遗失 "用户联"，顾客须持本人身份证或有效证明到送修处办理挂失手</p>
							</td>
							<td>
								<p>如果您需要以支票形式付款，请您在提交已填写正确金额的有效支票后，请在款到后取机。</p>
							</td>
						</tr>
					</tbody>
				</table>
			</dd>
			<dt><h2>移动电话机商品性能故障表</h2></dt>
			<dd class="performance-table">
				<table>
					<thead>
						<tr>
							<th>名称</th>
							<th>性能故障</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>主机</th>
							<td>说明书所列功能失效、显示屏无显示、错字、漏划、无法开机、不能正常登录或通信无振铃/拨号错误/非正常关机、SIM卡接触不良、按键</td>
						</tr>
						<tr>
							<th>充电器</th>
							<td>不工作或工作不正常，使用指定充电器无法正常充电。</td>
						</tr>
						<tr>
							<th>电池</th>
							<td>充电后手机仍然不能正常工作。判断依据为电池容量不小于80% 。</td>
						</tr>
						<tr>
							<th>外接有线耳机</th>
							<td>不能正常送受话</td>
						</tr>
						<tr>
							<th>移动终端卡</th>
							<td>不能正常工作</td>
						</tr>
						<tr>
							<th>数据接口卡</th>
							<td>不能正常工作</td>
						</tr>
					</tbody>
				</table>
			</dd>
			<dt><h2>温馨提示</h2></dt>
			<dd class="warm-prompt">
				<p>本公司秉承"以顾客为关注焦点"的原则，为充分维护您的权益，敬请关注以下几点信息： </p>
				<table>
					<tbody>
						<tr>
							<td>
								<h3>注意保护个人信息</h3>
								<p>您的手机在需要服务时（升级或维修等），请把手机内存储的电话号码及其它重要信息备份后清除，以免丢失或泄密。</p>
							</td>
							<td>
								<h3>妥善保管相关凭证</h3>
								<p>为了更好地为您服务，请妥善保管您的保修卡及维修单据、购机电子发票（联网可查）。</p>
							</td>
							<td>
								<h3>凭证信息不得私自更改</h3>
								<p>收到之后将产品IMEI码贴条贴到vivo保修卡（用户联），手机IMEI位置，并且填写资料信息，销售单位注明购买平台和订单号、电子发票号，方便联保服务。</p>
							</td>
							<td>
								<h3>售后网点查询</h3>
								<p class="link">vivo智能手机售后服务网点查询：
									<a href="http://www.vivo.com.cn/service/map.html">http://www.vivo.com.cn/service/map.html</a>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<h3>维修注意事项</h3>
								<p>对于受潮、进液、严重损坏或非法改装的手机在处理后可能会出现一些其它问题，如维修前能打电话，但维修后不能打电话或出现不开机，这是故障本身造成的不可恢复性，本公司恕不负责恢复手机原样。</p>
							</td>
							<td>
								<h3>送修时带齐有效凭证</h3>
								<p>送修时请携带有效三包凭证和电子发票正本或复印件（三包凭证请填写完整，并注明购买订单号和电子发票号，且不得涂改，否则视为无效）。电话背上的IMEI串号贴纸不得撕毁，否则保修承诺将失效。</p>
							</td>
							<td>
								<h3>故障机更换</h3>
								<p>若符合更换条件的，只更换故障部分。如手机故障，只更换手机；电池故障只更换电池。机身其他自带零配件如：天线装饰铭牌、充电器、包装料等不予更换。</p>
							</td>
							<td>
								<h3>维修服务</h3>
								<p>对于人为损坏的故障机（如：进水、受潮、摔坏、使用不当等）私自拆开或在其它非本公司指定维修点维修并造成损坏的手机，以及超过保修期限的手机，本公司可提供维修服务，但需收取相应费用。</p>
							</td>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
	</article>

		</div>
<script type="text/javascript">
	$(function() {
		var on = "服务保证";
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
							<a href="">
								<b class="b1"></b>
								<p>
									<span>0</span> 运费购手机
								</p>
							</a>
						</li>
						<li>
							<a href="">
								<b class="b2"></b>
								<p>
									<span>30</span> 天无理由退款
								</p>
							</a>
						</li>
						<li>
							<a href="">
								<b class="b3"></b>
								<p>
									电子发票
								</p>
							</a>
						</li>
						<li>
							<a href="">
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

