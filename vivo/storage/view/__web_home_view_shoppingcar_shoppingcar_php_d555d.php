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
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/shoppingcar.css" />
		
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/shoppingcar.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='db9d0dbb3dbb7d5a19ccd98f91c1e4aa'/><input type='hidden' name='__TOKEN__' value='db9d0dbb3dbb7d5a19ccd98f91c1e4aa'/></form>
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
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=35" category_id="35">测试管理员权限1</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=2" category_id="2">手机</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=8" category_id="8">上衣</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=19" category_id="19">配件</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/product/phone&category_id=36" category_id="36">测试分类添加管理员添加</a>
							</li>
											</ul>
					<script>
						$(function() {
							$('.nav li a').each(function(k, v) {
								var This = $(this);
								var thisCategory_id = 0; //这是获取的当前分类的ID
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
			<!--这是都有的购物车流程图-->
			<div class="wrapper">
				<div class="buy-steps"></div>
			</div>
			<!--这是都有的购物车流程图end-->
			<!--这是购物车商品-->
			<div class="container">
				<div class="wrapper">
					<div class="prod-list">
						<!--这是如果没有的情况下-->
						<?php if(!$shoppingCarData){ ?>
							<div class="no-result">
								<img src="<?php echo __ROOT__?>/resource/hdjs/home/other/shoppingcar/no-shopping.png" alt="" />
								<p>
									亲，您的购物车里还没有物品哦，赶紧去
									<a href="<?php echo u('index/index')?>">逛逛</a>
									吧
								</p>
							</div>
						<?php } ?>
						<!--这是如果没有的情况下end-->
						<!--这是有商品的情况下-->
						<?php if($shoppingCarData){ ?>
							<div class="have-list">
							<table>
								<thead>
									<tr>
										<th width="35" class="td-check">
											<input type="checkbox" checked="checked" value="" class="allCheckbox" />
										</th>
										<th width="155" style="text-align: left;">
											<label for="">全选</label>
										</th>
										<th style="text-align: left;">商品名称</th>
										<th width="120">价格(元)</th>
										<th width="130">数量</th>
										<th width="120">优惠</th>
										<th width="120">赠送V币</th>
										<th width="128">小计(元)</th>
										<th width="120">操作</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ((array)$shoppingCarData as $key=>$value){?>
										<!--一行一个商品-->
										<tr>
											<td class="td-check check-box">
												<label for="">
													<input type="checkbox" name="id[]" value="<?php echo $key?>" />
												</label>
											</td>
											<td class="prod-pic">
												<a href="">
													<img src="<?php echo $value['img']?>"/>
												</a>
											</td>
											<td class="prod-name">
												<a href="<?php echo u('item/item',array('commodity_id'=>$value['id']))?>"><?php echo $value['name']?></a>
												<br />
												<?php foreach ((array)$value['attr'] as $k=>$v){?>
													<?php echo $k?>：<?php echo $v?><br/>
												<?php }?>
											</td>
											<td class="priceOnce"><?php echo $value['addAfterPirce']?></td>
											<td>
												<span class="number-box">
													<a href="javascript:;" class="less">-</a>
													<input type="text" name="" id="" value="<?php echo $value['num']?>" title="请输入购买数量" />
													<a href="javascript:;" class="add">+</a>
												</span>
											</td>
											<td class="prePrice">0.00</td>
											<td class="item-vcoin">85.00</td>
											<td class="total-price"><?php echo ($value['price'] + $value['options']['addPrice']) * $value['num']?></td>
											<td>
												<!--如果收藏了-->
												<span style="display: none;">已收藏</span>
												<!--如果收藏了end-->

												<!--如果没有收藏-->
												<a href="javascript:;" class="collectThis" car_id="<?php echo $key?>" commodity_id="<?php echo $value['id']?>">收藏</a>
												<!--如果没有收藏end-->
												|
												<a href="javascript:;" class="delThis">删除</a>
											</td>
										</tr>
										<!--一行一个商品end-->
									<?php }?>
								</tbody>
							</table>
							<ul class="price-list">
								<li>
									商品总价：
									<span class="price">
										<dfn>¥</dfn>
										<span class="allPrice">243.00</span>
									</span>
								</li>
								<li>
									优惠：
									<span class="price red">
										-
										<dfn>¥</dfn>
										<span class="allPrePrice">0.00</span>
									</span>
								</li>
							</ul>
							<div class="option-box">
								<div class="option-operation">
									<ul>
										<li>
											<label for="">
												<input type="checkbox" class="allCheckbox" checked="checked" />
												全选
											</label>
										</li>
										<li>
											<a href="script:;" class="delSelect">
												删除选中的商品
											</a>
										</li>
									</ul>
								</div>
								<div class="real-price">
									已选商品
									<em>
										<span class="selectNum">2</span>
									</em>
									件，合计（不含运费）：
									<span class="price">
										<dnf>¥</dnf>
										<span class="AllTotalPrice">243.00</span>
									</span>
								</div>
							</div>
							<div class="btn-box">
								<button class="goshopping" title="继续购物">继续购物</button>
								<button class="btnconfirm" title="去结算">去结算</button>
							</div>
						</div>
							<input type="hidden" class="count" value="">
						<?php } ?>
						<!--这是有商品的情况下end-->
					</div>
				</div>
			</div>
			<!--这是购物车商品end-->
		<script>
			//这是跳转地址
			$('.btnconfirm').click(function(){
				var id = new Array;
				$.each($('.check-box :checkbox[checked=checked]'),function (k,v) {
					id.push($(this).val())
				})
				//如果没有选择商品
				if(id.length == 0){
					alertDiv('请选择购买的商品','您没有选择购买的商品哦','','关闭','error');
					return;
				}
				var ids = {};
				for(var i=0;i<id.length;i++)
				{
					ids[i]=id[i];
				}
				JSON.stringify(ids);  //结果：{'1':'a','2':'b','3':'c'}
				$.post("<?php echo u('shoppingcar/checklist')?>",{"id":ids},function (res) {
					location.href = res
				},'json')
			})
			$('.goshopping').click(function(){
				location.href = "<?php echo u('index/index')?>";
			})

			//这里是添加数量或者修改数量
			$('.add').click(function () {
				var This = $(this);
				var id = $(this).parents('td').siblings('td.check-box').find('input[type=checkbox]').val();
				var num = Number($(this).siblings('input').val());
				var allNum = Number($('#end').siblings('span').html());
				
				var stockOnce = '';
				//这里异步获取下库存
				$.post("<?php echo u('shoppingcar/stockOnce')?>",{"id":id},function (res) {
					stockOnce = res;
					if(num < stockOnce){//这里是判断这个的库存
						num = num + 1;
						//然后异步添加
						$.post("<?php echo u('shoppingcar/edit')?>",{"id":id,"num":num},function (res) {
						},'json')
						//然后我再修改下购物车的数量
						//然后我再修改下购物车的数量
						$('#end').siblings('span').html(allNum+1);
						This.siblings('input').val(num);
						allPrice();
					}
				},'json')
			})


			//这里是减少数量或者修改数量
			$('.less').click(function () {
				var id = $(this).parents('td').siblings('td.check-box').find('input[type=checkbox]').val();
				var num = Number($(this).siblings('input').val());
				var allNum = Number($('#end').siblings('span').html());
				if(num > 1){
					num -= 1;
					//然后异步添加
					$.post("<?php echo u('shoppingcar/edit')?>",{"id":id,"num":num},function (res) {

					},'json')

					//然后我再修改下购物车的数量
					$('#end').siblings('span').html(allNum-1);
					$(this).siblings('input').val(num);
					allPrice();
				}
			})
			//这里是数量的代码
			//这里判断如果失去焦点的时候判读里面的数字
			$(".less").siblings('input').blur(function(){
				var id = $(this).parents('td').siblings('td.check-box').find('input[type=checkbox]').val();
				var This = $(this);
				$.post("<?php echo u('shoppingcar/stockOnce')?>",{"id":id},function (res) {
					var stockOnce = res;
					if(This.val() < 1 || This.val() > stockOnce){
						This.val(1);
					}
					
					allPrice();
				},'json')
			})
		</script>
		</div>

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

