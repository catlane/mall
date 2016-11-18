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
			var Root = "http://127.0.0.1/vivo1/vivo";
		</script>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/master.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/phone.css" />
		
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='5c4f7d97fcbb48d52c7e758bab625b20'/><input type='hidden' name='__TOKEN__' value='5c4f7d97fcbb48d52c7e758bab625b20'/></form>
				<script>
					$(function() {
						$('.searchForm').submit(function() {
							var searchKeywordStr = $(this).find("input[name=searchKeywordStr]").val();
							location.href = "http://127.0.0.1/vivo1/vivo/index.php?s=home/product/search" + "&searchKeywordStr=" + searchKeywordStr;
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
					<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/index/index" class="logoImg">
						<img src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/other/master/logo.png" />
					</a>
					<ul class="nav">
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=2" category_id="2">手机</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=8" category_id="8">上衣</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=19" category_id="19">配件</a>
							</li>
											</ul>
					<script>
						$(function() {
							$('.nav li a').each(function(k, v) {
								var This = $(this);
								var thisCategory_id = 34; //这是获取的当前分类的ID
								$.post("http://127.0.0.1/vivo1/vivo/index.php?s=home/common/is_category", {
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
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/index">
									<b></b>
								</a>
								<div class="user-menu">
									<h1 class="member-center">
                                <a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/information">
                                    <i></i>
                                    个人中心
                                </a>
                                
                                <span class="icon-angular"></span>
                            </h1>
									<h1 class="my-order">
                                <a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/order">
                                    <i style="background-position: -48px 0;"></i>
                                    我的订单
                                </a>
                            </h1>
																		<h1 class="login">
                                    <a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/login/index">
                                        <i style="background-position: -100px 0;"></i>
                                        会员登录
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
												$.post("http://127.0.0.1/vivo1/vivo/index.php?s=home/common/out", {
													"a": 1
												}, function(res) {
													location.href = "http://127.0.0.1/vivo1/vivo/index.php?s=home/index/index";
												}, "json")
											})

											return false;
										})

									})
								</script>
							</li>
							<li class="shopCar">
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/shoppingcar/shoppingcar">
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
					您的位置是:<a href="<?php echo u('index/index')?>">首页</a>
					<b></b>
					<?php foreach ((array)$fathers as $key=>$value){?>
							<?php if($key<count($fathers) - 1){?>
                
								<a href="<?php echo u('product/phone',array('category_id'=>$value[0]))?>">
									<?php echo $value[1]?>
								</a>
							<?php }else{?>
								<?php echo $value[1]?>
							
               <?php }?>
						<?php if($key<count($fathers) - 1){?>
                
							<b></b>
						
               <?php }?>
					<?php }?>
					
				</div>
			</div>
			
			<div class="content">
				<!--这是筛选部分-->
				<div class="filter">
					<div class="f-line">
						<dl>
							<dt>分类</dt>
							<dd><a href="">全部</a></dd>

							<?php foreach ((array)$son_category_data as $key=>$value){?>
								<dd category_id="<?php echo $value['category_id']?>" ><a href="<?php echo u('product/phone',array('category_id'=>$value['category_id']))?>"><?php echo $value['category_name']?></a></dd>
							<?php }?>

						</dl>
					</div>
					<!--<div class="f-line">
						<dl>
							<dt>排序</dt>
							<dd class="on"><a href="">默认</a></dd>
							<dd><a href="">价格<i></i></a></dd>
							<dd><a href="">上架时间<i></i></a></dd>
							<dd><a href=""><em></em>仅看有货</a></dd>
						</dl>
					</div>-->
				</div>
				<!--这是商品list-->
				<?php if($commodityData){ ?>
					<div class="list-box">
						<ul>
							<?php foreach ((array)$commodityData as $key=>$value){?>
								<li>
									<a href="<?php echo u('item/item',array('commodity_id'=>$value['commodity_id']))?>" <?php if($value['commodity_all_stock'] == 0){?>
                class="no-good"
               <?php }?> >
										<div class="figure">
											<img src="<?php echo __ROOT__?>/<?php echo $value['commodity_list_img']?>" alt="" />
										</div>
										<h3 title="<?php echo $value['commodity_name']?>">
											<?php echo $value['commodity_name']?>
										</h3>
										<p>
											<dfn>¥</dfn>
											<?php echo $value['commodity_mall_price']?>
										</p>
									</a>
								</li>
							<?php }?>
							<!--no-good-->
						</ul>
					</div>
				<?php }else{ ?>
					<div class="no-lists">
						<img src="<?php echo __ROOT__?>/resource/hdjs/home/other/phone/no-lists.png">
						<p>当前没有商品符合筛选条件，请查看全部商品</p>
					</div>
				<?php } ?>

				<!--这是分页-->
				<div class="pagination"><!-- class="current"-->
					<?php if($bigPage>1){?>
                
						<!--然后判断如果要是按当前的page==自己的page，就不能跳转，给自己加上类-->
						<a class="page">1</a>
						<a class="page" href="<?php echo u('product/phone',array('category_id'=>q('get.category_id',0,'intval'),'page'=>2))?>">2</a>
						<label for="">
							<input type="text" name="" id="" value="" /> / <?php echo $bigPage?>
						</label>
						<a href="" class="go"></a>
					
               <?php }?>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function () {
				//这里写分页
				$('.pagination a.page').each(function (k,v) {
					var UrlPage = "<?php echo q('get.page',0,'intval')?>";
					var ThisPage = $(this).html();
					if(ThisPage == UrlPage){//说明就是自己
						//让自己变成不能点击
						$(this).addClass("current").removeAttr("href");
						//然后让别的变成可以点击的

						$(this).siblings("a.page").each(function () {
							$(this).attr("href","<?php echo u('product/phone',array('category_id'=>q('get.category_id',0,'intval')))?>" + "&page=" + $(this).html())
						});
					}
				})

				//这里写失去焦点
				$('.go').siblings("label").find("input").keyup(function () {
					var page = Number($(this).val());
					var bigPage = Number("<?php echo $bigPage?>");
					if(page >= bigPage){
						page = bigPage;
					}
					if(page < 1){
						page = 1;
					}
					if(isNaN(page)){
						page = 1;
					}
					$(this).val(page);
				})
				//这里写如果直接跳转的话

				$('.go').click(function () {
					var page = $(this).siblings("label").find("input").val();
					var bigPage = "<?php echo $bigPage?>";
					console.log(bigPage)
					if(page >= bigPage){
						page = bigPage;
					}
					if(page < 1){
						page = 1;
					}
					$(this).siblings("label").find("input").val(page);
					location.href = "<?php echo u('product/phone',array('category_id'=>q('get.category_id',0,'intval')))?>" + "&page=" + page;
					return false;
				})
			})



			$(function(){
				$.each($('.f-line').eq(0).find("dl dd"),function(k,v){
					//先获取当前的这个id
					var thisCategory_id = $(this).attr("category_id");
					//然后获取浏览器地址的id
					var urlCategory_id = "<?php echo q('get.category_id','0','intval')?>";
					//首先是全部，他是没有这个值，
					
					if(thisCategory_id == urlCategory_id){
						$(this).addClass("on");
					}
				})
				
				//判断如果要是全部没有的话，那么我就给全部加上
				if($('.f-line').eq(0).find(".on").length == 0){
					$('.f-line').eq(0).find("dl dd:first").addClass("on");
				}
				//这是当全部点击的时候，跳到他的顶级分类那页去
				$('.f-line').eq(0).find("dl dd:first").find("a").click(function(){
					var category_id = "<?php echo q('get.category_id','0','intval')?>";
					$.post("<?php echo u('common/is_category')?>",{"category_id":category_id},function(res){
						location.href = "<?php echo u('product/phone')?>" + "&category_id=" + res;
					},"json")
					return false;
				})
			})
		</script>

		<!--这里是子模板的内容end-->
		<footer>
			<div class="shop-agree">
				<div class="wrapper cl">
					<ul>
						<li>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">
								<b class="b1"></b>
								<p>
									<span>0</span> 运费购手机
								</p>
							</a>
						</li>
						<li>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">
								<b class="b2"></b>
								<p>
									<span>30</span> 天无理由退款
								</p>
							</a>
						</li>
						<li>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">
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
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/alipay" target="_blank">支付宝支付</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">发票说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/coupon" target="_blank">优惠券说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/huabei" target="_blank">花呗分期</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b2"></b>
                    配送方式
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/transport" target="_blank">配送方式</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">配送费用</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/sign" target="_blank">签收须知</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b3"></b>
                    服务支持
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/servicePromise" target="_blank">服务保证</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">售后服务</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/brokenScreen" target="_blank">碎屏保</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/extendService" target="_blank">手机延保</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b4"></b>
                    品牌服务
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/helpcenter/contactUs" target="_blank">联系我们</a>
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
								<img src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/other/master/online-service.png" />
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
								<img src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/other/master/qq.png" />
								<em></em>
							</div>
						</a>
					</div>
					<div class="copy-info">
						<a href="" class="footer-logo"></a>
						Copyright ©2011-2016 杨宇辉个人独立开发						<br /> 版权所有 保留一切权利粤粤ICP备05100288号 |
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
							<img src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/other/master/qq.png" alt="" />
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

