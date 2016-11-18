<extend file='resource/view/BigHome'/>
<block name="content">
	<?php
	if(!$data["commodity_id"]){
		go(u("index/index"));
	}
	?>
	<style>
		.fenxiang{
			position: absolute;
			right: -40px;
			bottom: -60px;
		}
	</style>
	<script src="{{__ROOT__}}/resource/hdjs/home/js/fly.min.js"></script>
	<div class="main">
		<div class="content">
			<div class="crumbs">
				您的位置是:
				<a href="{{u('index/index')}}">首页</a>
				<b></b>
				<foreach from="$fathers" key="$key" value="$value">
					<a href="{{u('product/phone',array('category_id'=>$value[0]))}}">
						{{$value[1]}}
					</a>
					<if value="$key lt count($fathers) - 1">
						<b></b>
					</if>
				</foreach>
			</div>
		</div>

		<div class="content">
			<div class="wrapper" style="min-height:600px;">
				<div class="prod-container-top">
					<!--这是放大镜效果start-->
					<div class="prod-container-left">




						<div id="box">
							<div id="left">
								<foreach from="$data['about_commodity_during_album']" key="$key" value="$value">
									<a href="#"><img src="{{__ROOT__}}/{{$value}}"/></a>
								</foreach>
								<div id="move"></div>
							</div>
							<div id="bottom">
								<foreach from="$data['about_commodity_samll_album']" key="$key" value="$value">
									<a href="#"><img src="{{__ROOT__}}/{{$value}}"/></a>
								</foreach>
							</div>
							<div id="big"></div>
							<div id="right">
								<foreach from="$data['about_commodity_big_album']" key="$key" value="$value">
									<a href="#"><img src="{{__ROOT__}}/{{$value}}"/></a>
								</foreach>
							</div>
							<script>
								$(function () {
									$('#left a:first-child').addClass('show');
									$('#bottom a:first-child').addClass('hover');
									$('#right a:first-child').addClass('show');
								})
							</script>
							<div class="fenxiang">

								<div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=cadd0d4c-277e-47c2-946f-a0415c47efec&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
<!--								<div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=cadd0d4c-277e-47c2-946f-a0415c47efec&amp;pophcol=2&amp;lang=zh"></script><a class="bshareDiv" onclick="javascript:return false;"></a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>-->

							</div>
							<script type="text/javascript">
								var ThisUrl = window.location.href;
								bShareOpt = {
									uuid: "	cadd0d4c-277e-47c2-946f-a0415c47efec",
									url: ThisUrl,
									summary: "我发现了 一个非常不错的商品：" + "{{$data['commodity_name']}}," + "{{$data['commodity_title']}}",
									pic: "{{__ROOT__}}/{{$data['commodity_list_img']}}",
									vUid: "",
									product: "{{$data['commodity_name']}}",
									price: "{{$data['commodity_mall_price']}}",
									brand: "{{$data['type_id']}}",
									tag: "h-ui",
									category: "{{$data['category_name']}}",
									template: 1
								}
//							</script>
							<!--<div class="fenxiang">
								<a class="bsLikeDiv" href="http://static.bshare.cn"></a>
									<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareLike.js"></script>
								<div class="bshare-custom icon" style="float:left;">
									<a title="分享到QQ空间" class="bshare-qzone"></a>
									<a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
									<a title="分享到人人网" class="bshare-renren"></a>
									<a title="分享到腾讯微博" class="bshare-qqmb"></a>
									<a title="分享到搜狐微博" class="bshare-sohuminiblog"></a>
								</div>
							</div>
							<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;ssc=false&amp;mdiv=-1&amp;type=15"></script>
							<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC1.js"></script>-->-->
						</div>

						<input type="hidden" class="goods_lists_id">



					</div>
					<!--这是放大镜效果end-->
					<!--这是样品展示start-->
					<div class="prod-container-right">
						<h1>{{$data['commodity_name']}}</h1>
						<small>
							{{$data['commodity_title']}}
						</small>
						<ul class="summary-price">
							<li>
									<span class="now-price">
										<dfn>¥</dfn>{{$data['commodity_mall_price']}}
									</span>
							</li>
							<!--<li>
                                <label>赠品:</label>
                                <ul class="gift-box">
                                    <li title="【飞蝗】蓝牙自拍杆">
                                        <a href="">
                                            <img src="{{__ROOT__}}/resource/hdjs/home/other/item/1897_1453712386055_250x250.png"/>
                                        </a>
                                        <span>
                                            X 1
                                        </span>
                                    </li>
                                    <li title="【现代（HYUNDAI）】蓝牙音箱">
                                        <a href="">
                                            <img src="{{__ROOT__}}/resource/hdjs/home/other/item/1944_1453712407491_250x250.png"/>
                                        </a>
                                        <span>
                                            X 1
                                        </span>
                                    </li>
                                </ul>
                            </li>-->
						</ul>
						<!--这是售品的样式选择-->
						<form action="" id="prod-detail-form">
							<dl>
								<!--<dt>:</dt>
                                <dd>
                                    <ul class="color-box">
                                        <li>
                                            <a href="script:;" style="background: #f2dcdb;"></a>
                                            玫瑰金
                                            <i></i>
                                        </li>
                                        <li class="on">
                                            <a href="script:;" style="background: #ddd9c3;"></a>
                                            金色
                                            <i></i>
                                        </li>
                                    </ul>
                                </dd>-->
								<!--版本-->
								<foreach from="$data['spec']" key="$key" value="$value">
									<dt>{{$key}}:</dt>
									<dd>
										<ul class="tags">
											<foreach from="$value" key="$k" value="$v">
												<li commodity_attr_id="{{$v['commodity_attr_id']}}">
													{{$v['commodity_attr_value']}}
													<input type="hidden" name="commodity_attr_addprice" value="{{$v['commodity_attr_addprice']}}">
													<i></i>
												</li>
											</foreach>
										</ul>
									</dd>
								</foreach>
								<script>
									$(function () {
										//这里是异步提交商品类型ID
										$("ul.tags").delegate('li','click',function(event){
											if({{$data["commodity_all_stock"]}} == 0){
												alertDiv("商品提示","该商品没有库存哦","","关闭","success");
												$(this).removeClass("on");
												return;
											}
											//这里是让添加购物车按钮可以点击
											$('.addcar').removeAttr("disabled");
											$('.J_LinkBuy').removeAttr("disabled");



											if($(this).attr('class') == "disabled"){//这个的话就是没有类
												return;
											}
											//这是为了每次点击的时候让货品id为空，免得下边会取得到上一次的货品id
											$('.goods_lists_id').val('');

											//这是每次点击的时候，让库存清空
											$('.stockDiv').html("(请选择商品属性)");



											var This = $(this);

											//这是点击之后的东西，一会打开
											//这是为了让点击别的时候，也让他可以显示出来
											$('.btns').html('<button title="立即购买" class="J_LinkBuy">立即购买</button><button title="加入购物车" class="J_LinkAdd addcar">加入购物车</button>');
											//这是让他下边的附加价格加进去
											var addprice = 0;
											$('.tags li.on').each(function (k,v) {
												addprice += parseFloat($(this).find('input:hidden').val());

											})

											//然后将原来的价格加上附加价格
											$('.now-price').html('<dfn>¥</dfn>'+ parseFloat(parseFloat({{$data['commodity_mall_price']}}) + addprice).toFixed(2));

											This.parents('dd').siblings('dd').find('li').removeClass('disabled').bind('click');
											// 获取所有的class为on的commodity_attr_id
											var commodity_attr_id = '';
											var attrNum = 0;
											$('.tags li.on').each(function (k,v) {
												commodity_attr_id += $(this).attr('commodity_attr_id') + '|';
												attrNum ++;
											})
											if(attrNum < $(".tags").length){
												return false;
											}
											var commodity_id = {{q('get.commodity_id','0','intval')}};

											$.post("{{u('item/commodity_attr')}}",{"commodity_attr_id":commodity_attr_id,"commodity_id":commodity_id},function (res) {
												//直接判断如果要是返回数组为空，就是没有货品
												if(!res){
													$(".stockDiv").html("商品暂时缺货");
													$('.btns').html('<button title="商品暂时缺货" class="J_LinkDisabled">商品暂时缺货</button>');
													return;
												}
												if(res.goods.length == 0){//这是里面的goods为空数组
													$(".stockDiv").html("商品暂时缺货");
													$('.btns').html('<button title="商品暂时缺货" class="J_LinkDisabled">商品暂时缺货</button>');
													return;
												}
//													//res是goods_lists当中的一条数据
//													//获取下他的库存量
//													//判断是否有这个goods,如果没有的话，就没有货

												if($('.tags li.on').length == {{count($data['spec'])}}){
													if(res['goods']){
														//这是将商品id写进去
														var goods_lists_id = res['goods'].goods_lists_id;
														$('.goods_lists_id').val(goods_lists_id);
														//这是显示库存
														$('.stockDiv').html("(库存" + "<i class='stock'>" + res['goods'].goods_lists_stock + "</i>" + "件)");
														if(res['goods'].goods_lists_stock <= 0){
															//这说明没有货
															$('.btns').html('<button title="商品暂时缺货" class="J_LinkDisabled">商品暂时缺货</button>');
															return false;
														}
													}
												}
											},'json')

										})




									})

								</script>
								<!--服务-->
								<!--<dt>服务:</dt>
                                <dd>
                                    <ul class="tags">
                                        <li class="broken" title="半年碎屏宝，服务类商品，此款碎屏宝不适配Xplay5机型，购买当天生效，不支持退款">
                                            <span class="icon"></span>
                                            【vivo服务】半年碎屏宝
                                            <span class="item-price">
                                                <dnf>¥</dnf>
                                                59.00
                                            </span>
                                            <i></i>
                                        </li>
                                        <li class="broken" title="半年碎屏宝，服务类商品，此款碎屏宝不适配Xplay5机型，购买当天生效，不支持退款">
                                            <span class="icon"></span>
                                            【vivo服务】半年碎屏宝
                                            <span class="item-price">
                                                <dnf>¥</dnf>
                                                59.00
                                            </span>
                                            <i></i>
                                        </li>
                                        <li class="detail">
                                            <a href="">
                                                详情>>
                                            </a>
                                        </li>
                                    </ul>
                                </dd>-->
								<!--这是数量-->
								<dt>数量:</dt>
								<dd class="order-num">
									<label class="dec" id="dec">-</label>
									<input class="add-num" type="text" value="1" />
									<label class="dec" id="inc">+</label>
									<small class="stockDiv">(请选择商品属性)</small>
								</dd>
								<!--支持分期付款-->
								<dt>支持分期付款:</dt>
								<dd class="installment">
									<div class="installment-label">花呗分期最低价</div>
									<div class="installment-price red">
										<dfn>¥</dfn>
										624.5*12期
									</div>
									<label class="btn-show-more">
										更多
									</label>

								</dd>
							</dl>
						</form>

						<div class="btns" style="overflow: hidden">
							<?php if($data['commodity_all_stock'] == 0){ ?>
								<button title="商品暂时缺货" class="J_LinkDisabled">商品暂时缺货</button>
							<?php }else{ ?>
								<button title="立即购买" class="J_LinkBuy">立即购买</button>
								<button title="加入购物车" class="J_LinkAdd addcar">加入购物车</button>
							<?php } ?>
						</div>
						<div class="activity-tags">
							<ul>
								<li class="post-free"></li>
								<li class="change-arbitrary"></li>
							</ul>
						</div>
					</div>
					<!--这是样品展示end-->
				</div>
			</div>
		</div>
		<!--这是详情-->
		<div class="prod-main-info">
			<div class="prod-main-tab">
				<div class="prod-tab-box">
					<div class="btns">
						<?php if($data['commodity_all_stock'] == 0){ ?>
							<button title="商品暂时缺货" class="J_LinkDisabled">商品暂时缺货</button>
						<?php }else{ ?>
							<button title="立即购买" class="J_LinkBuy">立即购买</button>
							<button title="加入购物车" class="J_LinkAdd addcar">加入购物车</button>
						<?php } ?>
					</div>
					<div class="thumb-goods">
						<div class="figure">
							<li>
								<img src="{{__ROOT__}}/{{$data['commodity_list_img']}}"/>
							</li>
						</div>
						<h3 title="{{$data['commodity_name']}}">{{$data['commodity_name']}}</h3>
						<span>￥{{$data['commodity_mall_price']}}</span>
					</div>
					<ul class="fix">
						<li class="on" id="information"><a href="">详情<b></b></a></li>
						<li id="parameter"><a href="">参数<b></b></a></li>
						<li id="evaluate">
								<a href="script:;">评论</a></li>
								<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2113667"></script> <!-- 如果已经过加载此行JS，即可不用重复加载 -->
						<li id="afterservice"><a href="">售后服务<b></b></a></li>
					</ul>
				</div>
			</div>
			<!--这是商品详情展示-->
			<div class="prod-main-box">
				<!--这是商品详情的table-->
				<div class="information prod-on">
					<div class="section">
						<p>
							{{$data['about_commodity_about']}}
						</p>
					</div>
				</div>
				<!--这是参数的talbe-->
				<div class="parameter">
					<div class="prod-parameter-box">
						<ul>
							<foreach from="$data['attr']" key="$key" value="$value">
								<li>
									<h4>{{$key}}</h4>
									<p>{{$value}}</p>
								</li>
							</foreach>
						</ul>

					</div>
				</div>
				<!--这是商品的评价-->
				<div class="evaluate">
					<!--这是上边的商品评分-->
					<div class="wrapper">
						<table>
							<tbody>
							<tr>
								<th class="title" rowspan="2">商品评分</th>
								<th class="total-points" rowspan="2">4.8</th>
								<td class="total-stars">
											<span>
												<i></i>
											</span>
								</td>
								<th>综合评分</th>
								<td class="small-stars">
											<span>
												<i></i>
											</span>
									4.8
								</td>
								<th>卖家的服务态度</th>
								<td class="small-stars">
											<span>
												<i></i>
											</span>
									4.8
								</td>
							</tr>
							<tr>
								<td class="evaluater-num">
									<span class="yellow">15956</span>
									人评分
								</td>
								<th>宝贝与描述相符</th>
								<td class="small-stars">
											<span>
												<i></i>
											</span>
									4.8
								</td>
								<th>卖家的发货速度</th>
								<td class="small-stars">
											<span>
												<i style="width: 90%;"></i>
											</span>
									4.5
								</td>
							</tr>
							<tr>
								<th class="btn-box" colspan="7">
<!--									您可以对已购买的产品进行评价-->
<!--									<button>我要评价</button>-->
								</th>
							</tr>
							</tbody>
						</table>
					</div>
					<!--这是用户的评价-->
					<!-- UY BEGIN -->

					<div id="uyan_frame"></div>

					<!-- UY END -->
				</div>
				<!--这是售后服务-->
				<div class="afterservice">
					<div class="wrapper">
						{{$data['about_commodity_afterMarket']}}

					</div>
				</div>
				<!--售后服务end-->
			</div>
		</div>
	</div>
	<div class="installment-popup">
		<div class="popup-container">
			<table>
				<tbody>
				<tr>
					<th width="25%">每期金额</th>
					<th width="20%">期数</th>
					<th>手续费</th>
				</tr>
				</tbody>
				<tbody>
				<tr>
					<td class="red">
						<dfn>¥</dfn>
						2498
					</td>
					<td>3期</td>
					<td>
						共计约
						<dfn>¥</dfn>
						7494 含0%手续费
					</td>
				</tr>
				<tr>
					<td class="red">
						<dfn>¥</dfn>
						1249
					</td>
					<td>6期</td>
					<td>
						共计约
						<dfn>¥</dfn>
						7494 含0%手续费
					</td>
				</tr>
				<tr>
					<td class="red">
						<dfn>¥</dfn>
						624.5
					</td>
					<td>9期</td>
					<td>
						共计约
						<dfn>¥</dfn>
						7494 含0%手续费
					</td>
				</tr>
				</tbody>
			</table>
			<div class="info-tip">
				<img src="{{__ROOT__}}/resource/hdjs/home/other/item/icon-warning_f446f02.png"/>
				实际分期金额和手续费以收银台为准
			</div>
		</div>
		<i class="icon-close"></i>
	</div>
	<script>
		$(function() {
			//这是获取购物车图标的位置
			var offset = $("#end").offset();
			$('.btns').delegate('.J_LinkAdd,.addcar','click',function(event){
				var goods_lists_id = $('.goods_lists_id').val();
				var This = $(this);
				//这是异步添加

				//如果这个id为空的话
				if(goods_lists_id == ""){
					alertDiv('请选择商品属性','没有选择商品属性不能加入购物车哦！','','关闭');
					return;
				}
				var num = parseInt($('.add-num').val());

				$.post("{{u('item/onceStock')}}",{"goods_lists_id":goods_lists_id},function (res) {//res是这个货品总库存
					$.post("{{u('item/onceNum')}}",{"goods_lists_id":goods_lists_id},function (onceNum) {//购物车数量
						if((Number(onceNum) + num) > res){//这是如果大于库存，
							alertDiv("添加购物车提示","您选择的商品大于库存,请您选择其他款式","关闭","","error");
						}else{//如果小于库存，就可以添加

							//这是添加，

							$.post("{{u('item/Addcar',array('commodity_id'=>q('get.commodity_id','0','intval')))}}",{"num":num,"goods_lists_id":goods_lists_id},function () {
								console.log(1)
								var addcar = This;
								var img = "{{$data['commodity_list_img']}}";
								var flyer = $('<img class="u-flyer" src="'+img+'">');
								$('.u-flyer').css({'z-index':999});
								flyer.fly({
									start: {
										left: 300, //开始位置（必填）#fly元素会被设置成position: fixed  event.pageX
										top:  300//开始位置（必填）event.pageY
									},
									end: {
										left: offset.left+10, //结束位置（必填）
										top: offset.top+10, //结束位置（必填）
										width: 0, //结束时宽度
										height: 0 //结束时高度
									},
									onEnd: function(){ //结束回调
										$.post("{{u('item/carNum')}}",{a:1},function (res) {
											$('#end').siblings('span').html(res);
										},'json')
									}
								});


							},'json')

						}
					})

				},'json')



			});







			//这是添加或者修改数量
			//这里是添加数量或者修改数量
			$("#inc").click(function(){
				var This = $(this);
				//这里获取下选来的文字
				var html = This.siblings('small').html();
				var goods_lists_id = $('.goods_lists_id').val();
				var num = Number($(this).siblings('input').val());
				var stock = '';
				stock = Number($('.stock').html());

				if(!stock){//这就是没有商品选择属性
					var time = null;
					var i = 0;
					time = setInterval(function(){
						i++;
						if(i > 5){
							clearInterval(time);
						}
						if(i%2){
//							This.siblings('small').addClass('red');
							This.siblings('small').animate( {"margin-left":"20px"},230).addClass('red');
						}else{
//							This.siblings('small').removeClass('red');
							This.siblings('small').animate( {"margin-left":"0px"},230).removeClass('red');
						}
					},200)
					return;

				}

				//在之前判断，购买的是否已经超出库存
				//现在的数量，加上购物车的数量 < 库存
				$.post("{{u('item/onceNum')}}",{"goods_lists_id":goods_lists_id},function (res) {
					if((res + num) >= stock){//库存数量，然后就是异步判断这个的库存
						var time = null;
						var i = 0;
						time = setInterval(function(){
							i++;
							if(i > 5){
								clearInterval(time);
							}
							if(i%2){
//							This.siblings('small').addClass('red');
								This.siblings('small').animate( {"margin-left":"20px"},230).addClass('red');
							}else{
//							This.siblings('small').removeClass('red');
								This.siblings('small').animate( {"margin-left":"0px"},230).removeClass('red');
							}
							//然后让加入购物车和立即购买都不能点击
							$('.addcar').attr("disabled",true);
							$('.J_LinkBuy').attr("disabled",true);
						},200)
					}else{
						num += 1;
						This.siblings('input').val(num);
						This.siblings('small').html(html);
						$('.addcar').removeAttr("disabled");
						$('.J_LinkBuy').removeAttr("disabled");
					}


				},"json")


			})
			$("#dec").click(function(){
				var This = $(this);
				var num = Number($(this).siblings('input').val());
				var goods_lists_id = $('.goods_lists_id').val();

				var stock = '';
				stock = Number($('.stock').html());
				if(num > 1){
					num -= 1;
					//在减完之后将文字改变
					$.post("{{u('item/onceStock')}}",{"goods_lists_id":goods_lists_id},function (res) {//res是这个货品总库存
						This.siblings('small').html('(库存<i class="stock">' + res + '</i>件)');
						$.post("{{u('item/onceNum')}}",{"goods_lists_id":goods_lists_id},function (onceNum) {//购物车数量
							if((Number(onceNum) + num) >= res){
								console.log("大于")
								$('.addcar').attr("disabled",true);
								$('.J_LinkBuy').attr("disabled",true);
							}else{
								console.log("小于")
								$('.addcar').removeAttr("disabled");
								$('.J_LinkBuy').removeAttr("disabled");
							}
							This.siblings('input').val(num);
						})

					},'json')


				}


			})
			//这里是数量的代码
			//这里判断如果失去焦点的时候判读里面的数字
			$(".add-num").blur(function(){
				var This = $(this);
				var stock = '';
				var goods_lists_id = $('.goods_lists_id').val();
				stock = Number($('.stock').html());
				if(!stock){
					var time = null;
					var i = 0;
					time = setInterval(function(){
						i++;
						if(i > 5){
							clearInterval(time);
						}
						if(i%2){
//							This.siblings('small').addClass('red');
							This.siblings('small').animate( {"margin-left":"20px"},230).addClass('red');
						}else{
//							This.siblings('small').removeClass('red');
							This.siblings('small').animate( {"margin-left":"0px"},230).removeClass('red');
						}
						//然后让加入购物车和立即购买都不能点击
						$('.addcar').attr("disabled",true);
						$('.J_LinkBuy').attr("disabled",true);
					},200)
					This.val(1);
					return;
				}

				//在之前判断，购买的是否已经超出库存
				//现在的数量，加上购物车的数量 < 库存
				$.post("{{u('item/onceNum')}}",{"goods_lists_id":goods_lists_id},function (res) {
					if(This.val() < 1 || (res + This.val()) >= stock){//这里写的是后边的仅限3部//这里改成库存数量，然后就是异步判断这个的库存
						var time = null;
						var i = 0;
						time = setInterval(function(){
							i++;
							if(i > 5){
								clearInterval(time);
							}
							if(i%2){
//							This.siblings('small').addClass('red');
								This.siblings('small').animate( {"margin-left":"20px"},230).addClass('red');
							}else{
//							This.siblings('small').removeClass('red');
								This.siblings('small').animate( {"margin-left":"0px"},230).removeClass('red');
							}
							//然后让加入购物车和立即购买都不能点击
							$('.addcar').attr("disabled",true);
							$('.J_LinkBuy').attr("disabled",true);
						},200)
					}else{
						This.val('1');
						$('.addcar').removeAttr("disabled");
						$('.J_LinkBuy').removeAttr("disabled");
					}


				},"json")


			})

			$(function () {
				$("body").delegate(".J_LinkBuy","click",function () {
					location.href = "{{u('shoppingcar/shoppingcar')}}";
				})
//				$('.bshare-qzone').css("display","block");
			})
		});
	</script>

</block>