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
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/checklist.css" />
		
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/checklist.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/area.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='0dd1562f6ec30e307a965042efc935e0'/><input type='hidden' name='__TOKEN__' value='0dd1562f6ec30e307a965042efc935e0'/></form>
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
									<span class="shopcart-num">2</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--这里是子模板的内容start-->
		
	<?php
	if(!$carData){
		go(u('index/index'));
	}
	?>

    <script type="text/javascript">
        $(function(){
            //初始化方法
            area.init('area');
            //修改的时候默认被选中效果
            area.selected('北京市','北京','朝阳区');
        })
    </script>

	<div class="main">
			<!--这是核对订单流程图-->
			<div class="wrapper">
				<div class="buy-steps"></div>
			</div>
			<!--这是核对订单流程图end-->
			<!--这是这是核对订单详细信息-->
			<div class="container">
				<div class="wrapper">
					<!--这是收货人信息-->
					<dl class="module-list">
						<dt class="module-title">收货人信息</dt>
						<!--这是收货地址，以及添加收货地址-->
						<dd class="address-info">
							<ul class="adress-list">
								<?php foreach ((array)$addressData as $key=>$value){?>
									<?php if($value['address_default'] == 1){?>
                
										<li class="address-item on">
									<?php }else{?>
										<li class="address-item">
									
               <?php }?>
										<label for="">
											<input type="hidden" class="id" value="<?php echo $value['address_id']?>">
											<p class="item-top">
												<span title="地址"><?php echo $value['address_receiver']?></span>
												<span title="联系电话">
													<?php if($value['address_phone'] != ''){?>
                
														<?php echo $value['address_phone']?>
													<?php }else{?>
														<?php echo $value['address_fixed']?>
													
               <?php }?>
												</span>
											</p>
											<p title="<?php echo $value['address_xxaddress']?>">
												<?php foreach ((array)$value['address_area'] as $k=>$v){?>
													<span><?php echo $v?></span>
												<?php }?>
												<span><?php echo $value['address_xxaddress']?></span>
											</p>
											<ul class="operations">
												<?php if($value['address_default'] == 0){?>
                
													<li class="default-address">设为默认地址</li>
												
               <?php }?>
												<li class="delThis">删除</li>
											</ul>
										</label>
									</li>
								<?php }?>
								<li class="new">
									<label for="">添加新地址</label>
								</li>
								<!--当我提交之后，就会在后边产生一个新地址，并且有设为默认这个-->
								<form action="script:;" method="post" class="addAddress">
									<dl class="address-info-new">
										<dt>
											<span>*</span>
											收货人：
										</dt>
										<dd>
											<input type="text" name="address_receiver" placeholder="请填写收货人地址" />
											<span class="error" title=""></span>
										</dd>
										<dt>
											<span>*</span>
											所在地区：
										</dt>
										<dd>
											<select name="address_area[]" id="area1"></select>
                                        	<select name="address_area[]" id="area2"></select>
                                        	<select name="address_area[]" id="area3"></select>
											<!--...-->
											<span class="error"></span>
										</dd>
										<dt>
											<span>*</span>
											详细地址：
										</dt>
										<dd>
											<input type="text" class="address" name="address_xxaddress" placeholder="请先收货人详细信息"/>
											<span class="error" title=""></span>
										</dd>
										<dt>
											<span></span>
											地址邮编：
										</dt>
										<dd>
											<input type="text" name="address_zipcode" placeholder="默认可以为000000" />
											<span class="error" title=""></span>
										</dd>
										<dt>
											<span>*</span>
											手机号码：
										</dt>
										<dd>
											<input type="text" name="address_phone" placeholder="请填写收货人手机号码" />
											<span class="error" title=""></span>
											 或
										</dd>
										<dt class="tel">固定电话：</dt>
										<dd>
											<input type="text" name="address_fixed" placeholder="请填写固定电话" />
											<span class="error" title=""></span>
										</dd>
										<dt></dt>
										<dd>
											<label for="defaultAddress">
												<input type="checkbox" name="address_default" id="defaultAddress" />
												设为默认地址
											</label>
										</dd>
										<dt></dt>
										<dd style="margin-top: 10px;">
											<button type="submit" class="blue">保存</button>
											<button type="reset" class="cancel">取消</button>
											<br /><br />
										</dd>
									</dl>
								<input type='hidden' name='__TOKEN__' value='0dd1562f6ec30e307a965042efc935e0'/></form>
							</ul>
						</dd>
						<!--这是收货地址end-->
						<!--支付方式start-->
						<dt class="module-title">
							支付方式：
							<small>已选择：<span class="pay-style">在线支付</span></small>
						</dt>
						<dd class="delivery-info">
							<div class="pay-method on">
								在线支付
								<i></i>
							</div>
							<div class="pay-method"><!--这个可以没有-->
								货到付款
								<i></i>
							</div>
							<input type="hidden" name="orderForm_payMethod" value="在线支付">
						</dd>
						<!--支付方式end-->
						<!--这是发票信息start-->
						<dt class="module-title">发票信息</dt>
						<dd class="invoice-info">
							<div class="tax-type on">
								个人发票
								<i></i>
							</div>
							<div class="tax-type">
								公司发票
								<i></i>
							</div>
							<input type="hidden" name="orderForm_taxType" value="个人发票">
							<label for="">
								<span class="red">*</span>
								发票抬头
								<input type="text" name="orderForm_invoice" id="" value="000000000" placeholder="发票抬头" />
							</label>
						</dd>
						<!--这是发票信息end-->
						<!--这是确认信息start-->
						<dt class="module-title">确认商品</dt>
						<dd class="confirm-goods">
							 <!--这是商品的信息展示start-->
							<div class="prod-list">
								<table class="order-table" cellpadding="0">
									<thead>
										<tr>
											<th width="194"></th>
											<th style="text-align: left;">商品名称</th>
											<th width="124">价格(元)</th>
											<th width="146">数量</th>
											<th width="146">优惠</th>
											<th width="137">赠送V币</th>
											<th width="162">小计(元)</th>
										</tr>
									</thead>

									<?php foreach ((array)$carData as $key=>$value){?>
										<tbody class="item-single" carId="<?php echo $value['carId']?>"><!--多个商品的话，就循环这个tbody-->
										<tr class="prod-line">
											<td class="prod-pic">
												<a href="">
													<img src="<?php echo __ROOT__?>/<?php echo $value['img']?>"/>
												</a>
											</td>
											<td class="prod-name">
												<a href=""><?php echo $value['name']?></a>
												<br />
												<?php foreach ((array)$value['attr'] as $k=>$v){?>
													<span>
														<?php echo $k?>：<?php echo $v?>
													</span><br/>
												<?php }?>

											</td>
											<td><?php echo number_format($value['addAfterPirce'],2)?></td>
											<td><?php echo $value['num']?></td>
											<td>-0.00</td>
											<td><?php echo number_format($value['total'])?></td>
											<td><?php echo number_format($value['total'],2)?></td>
										</tr>
										</tbody>
									<?php }?>
								</table>
							</div>
							<!--这是商品的信息展示end-->
							<!--这是确认信息使用的优惠价以及备注start-->
							<div class="order-info-box">
								<ul>
									<li class="coupon-info">
										<div class="coupon-info-title">
											<i></i>
											使用优惠券
										</div>
										<div class="info-box">
											<label for="">
												选择已有优惠券：
												<select name="">
													<option value="">选择优惠券</option>
												</select>
											</label>
											<label for="">
												如果您有通过站外方式获得的优惠券，请在此输入号码：
												<input type="text" placeholder="请输入优惠券号码" />
											</label>
											<button>验证优惠码</button>
										</div>
									</li>
									<!--这是订单备注-->
									<li class="order-remark">
										<div class="info-box">
											<label for="">
												<i></i>
												订单备注：
											</label>
											<textarea name="orderForm_comments" rows="1" cols="" placeholder="限300字（若有特殊需求，请联系商城在线客服）"></textarea>
										</div>
									</li>
								</ul>
								<!--这是其他信息start-->
								<div class="other-info">
									<ul>
										<li class="order-sum">
											<label for="">
												商品:&nbsp;&nbsp;
												<em class="red"><?php echo $review['allNum']?></em>
												件
												&nbsp;商品总金额：
											</label>
											<span class="price">
												<dfn>¥</dfn>
												<?php echo number_format($review['allPrice'],2)?>
											</span>
										</li>
										<li class="order-sum">
											<label for="">
												优惠：
											</label>
											<span class="red">
												<dfn>¥</dfn>
												0.00
											</span>
										</li>
										<li class="order-sum">
											<label for="">
												邮费：
											</label>
											<span class="red">
												<dfn>¥</dfn>
												0.00
											</span>
										</li>
									</ul>
								</div>
								<!--这是其他信息end-->
							</div>
							<!--这是确认信息使用的优惠价以及备注end-->
						</dd>
						<!--这是确认信息end-->
						<!--这是查看信息start-->
						<dt class="real-price-box">
							<ul class="delivery-address">
								<li>
									<label for="">地址：</label>
									<span class="allAddress"><?php echo $addressDefaultData["address_area"]?><?php echo $addressDefaultData["address_xxaddress"]?></span>
								</li>
								<li>
									<label for="">收件人</label>
									<span class="allInfo"><?php echo $addressDefaultData["address_receiver"]?>~<?php echo $addressDefaultData["address_contact"]?></span>
								</li>
							</ul>
							<label for="">应付金额</label>
							<span class="real-price red">
								<dfn>¥</dfn>
								<?php echo number_format($review['allPrice'],2)?>
							</span>
						</dt>
						<!--这是查看信息end-->
					</dl>
					<!--这是提交按钮start-->
					<div class="btn-box">
						<button class="back-soppingcar" title="返回购物车">返回购物车</button>
						<button type="submit" class="btn-confirm addLists" title="提交订单">提交订单</button>
					</div>
					<!--这是提交按钮end-->
				</div>
			</div>
			<!--这是这是核对订单详细信息end-->
		</div>
	<script>
		$(function () {
			function Dictionary(){
				this.data = {};
				this.put = function(key,value){
					this.data[key] = value;
				};
				this.get = function(key){
					return this.data[key];
				};
			}
			//我点击提交订单按钮
			$('.addLists').click(function () {
				var d = new Dictionary();
				//这里是往进添加数据
				if($("input[name=orderForm_payMethod]").val() != ""){//支付方式
					d.put("orderForm_payMethod",$("input[name=orderForm_payMethod]").val());
				}else{
					alertDiv("请选择支付方式",'您还没有选择支付方式哦!','','关闭','error');
					return;
				}
				if($("input[name=orderForm_taxType]").val() != ""){//发票方式
					d.put("orderForm_taxType",$("input[name=orderForm_taxType]").val());
				}else{
					alertDiv("请选择发票方式",'您还没有选择发票方式哦!','','关闭','error');
					return;
				}
				if($("input[name=orderForm_invoice]").val() != ""){//发票抬头
					d.put("orderForm_invoice",$("input[name=orderForm_invoice]").val());
				}else{
					alertDiv("请填写发票抬头",'您还没有填写发票抬头哦!','','关闭','error');
					return;
				}
				if($(".allInfo").html() != "请填写"){//收货人姓名
					d.put("orderForm_info",$(".allInfo").html());
				}else{
					alertDiv("请选择收货人信息",'您还没有选择收货人信息哦!','','关闭','error');
					return;
				}
				if($(".allAddress").html() != "请填写"){//收货人详细地址
					d.put("orderForm_address",$(".allAddress").html());
				}else{
					alertDiv("请选择收货人信息",'您还没有选择收货人信息哦!','','关闭','error');
					return;
				}
				d.put("orderForm_price","<?php echo $review['allPrice']?>");
				//订单备注
				d.put("orderForm_comments",$("textarea[name=orderForm_comments]").val());

				var carId = "";
				$.each($('.item-single'),function (k,v) {
					carId += $(this).attr('carId') + '|';
				})
				d.put("carId",carId);


				JSON.stringify(d.data);
				$.post("<?php echo u('checklist/add')?>",d.data,function (res) {
					if(res.valid){
						alertDiv("提交订单成功",'提交订单需要几秒，请稍后...','关闭','','success');
						setTimeout(function () {
							$('.dialog-container').animate({"top":"-500px"},500,function () {
								$('.dialog-container').remove();
							});
							setTimeout(function () {
								$('.mask').remove();
							},500)
						},1500);
						setTimeout(function () {
								if(res.message.orderForm_status == "未付款"){//去付款
									location.href = "<?php echo u('cashier/cashier')?>" + "&orderForm_id=" + res.message.orderForm_orderForm_id;
								}else{//直接购买成功
									location.href = "<?php echo u('success/success')?>" + "&orderForm_id=" + res.message.orderForm_orderForm_id;
								}

						},1500)
					}else{
						alertDiv("错误提示",res.message,'确认','','error');
					}
				},'json')
			})

			//这是当我点击支付方式以及发票信息的时候，填写隐藏域
			$('.pay-method,.tax-type').click(function () {
				var str = $.trim($(this).text());
				$(this).siblings('input[type=hidden]').val(str);
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
