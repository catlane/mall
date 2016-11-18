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
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/my.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/my_refund.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/my_order.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/css/member-order.css" />
		
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/my.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/area.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/js/YMDClass.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='5a22885661d0b5614f2b75269ace9d3b'/><input type='hidden' name='__TOKEN__' value='5a22885661d0b5614f2b75269ace9d3b'/><input type='hidden' name='__TOKEN__' value='5a22885661d0b5614f2b75269ace9d3b'/></form>
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
                您的位置是:<a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/index/index">首页</a>
                <b></b>
                <a href="<?php echo u('my/index')?>">会员中心</a><b></b>退款/退货            </div>
        </div>
        <div class="content">
            <aside class="menu-bar">
                <ul class="portrait-box">
                    <li>
                        <a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/information" title="编辑资料">
                            <img src="http://127.0.0.1/vivo1/vivo/resource/hdjs/home/other/my/header_phone.jpg"/>
                        </a>
                    </li>
                    <li class="mem-name">
                        <i></i>
                                            </li>
                    <li class="vcoin-info">
                        我的V币:
                        <a>
                            <span class="red">0</span>
                        </a>
                        V币
                    </li>
                </ul>
                <dl class="menu">
                    <dt>
                        <i class="icon-deal"></i>
                        交易管理
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/order">我的订单</a></dd>
                    <dd><a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/refund">退/换货</a></dd>

                    <dt>
                        <i class="icon-evaluation"></i>
                        我的账户
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/information">个人资料</a></dd>
                    <dd><a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/address">收货地址</a></dd>
                    <dd><a href="http://127.0.0.1/vivo1/vivo/index.php?s=home/my/favorite">我的收藏</a></dd>
                </dl>
            </aside>
            
    <article class="c">
    	<?php if($refundCount != 0){?>
                
    		<script type="text/javascript">
    		//这里是判断是否有未退货的商品，如果有就提示一下
				setTimeout(function(){
					alertDiv("退/换货提示","您有未选择退换货的商品，请选择","","关闭","error");
				},1000)
    		</script>
    	
               <?php }?>
        <dl class="member-order-list">
            <dt>退款/退货查询</dt>
            <?php if(count($data) == 0){?>
                
                <div class="no-record">
                    <img src="<?php echo __ROOT__?>/resource/hdjs/home/other/my/my_refund_no.png" alt="">
                    <span>您还没有退款/退货订单</span>
                </div>
            
               <?php }?>
            <?php if(count($data) != 0){?>
                
                <dd>
                    <div class="list-caption">
                        <div class="col col10">商品</div>
                        <div class="col col11">数量</div>
                        <div class="col col12">价格</div>
                        <div class="col col13">状态</div>
                        <div class="col col14">操作</div>
                    </div>
                        <!--                这里是多个的订单信息-->
                    <?php foreach ((array)$data as $key=>$value){?>
                        <table class="order-table">
                            <colgroup>
                                <col width="155">
                                <col>
                                <col class="col1">
                                <col class="col2">
                                <col class="col3">
                                <col class="col4">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th colspan="6" class="order-title">
                                    <ul>
                                        <li class="order-number">订单号：
                                            <a href="<?php echo u('my/detail',array('orderForm_id'=>$value['orderForm_id']))?>"><?php echo $value["orderForm_num"]?></a>
                                        </li>
                                        <li class="order-time">成交时间: <?php echo date("Y-m-d H:i:s",$value["orderForm_sendtime"])?>
                                        </li>
                                    </ul>
                                </th>
                            </tr>
                            <!--							这是循环所有的商品start-->
                            <?php foreach ((array)$value['lists'] as $k=>$v){?>
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="<?php echo u('item/item',array('commodity_id'=>$v['commodity_id']))?>" target="_blank">
                                            <img src="<?php echo $v['commodity_list_img']?>" alt="">
                                        </a>
                                    </td>
                                    <td class="prod-name">
                                        <a href="<?php echo u('item/item',array('commodity_id'=>$v['commodity_id']))?>" target="_blank" title="<?php echo $v['commodity_name']?>"><?php echo $v['commodity_name']?></a>
                                        <br><?php echo $v['orderFormList_attr']?>
                                    </td>
                                    <td><?php echo $v['orderFormList_shopNum']?></td>
                                    <td>
                                        <?php echo number_format($v["orderFormList_price"],2)?>
                                    </td>
                                    <?php if($k == 0 ){?>
                
                                        <?php if($value['returns_success_status'] != ''){?>
                <!--说明处理了-->
                                            <td rowspan="<?php echo count($value['lists'])?>" class="status"><?php echo $value['returns_success_status']?></td>
                                        <?php }else{?>
                                            <td rowspan="<?php echo count($value['lists'])?>" class="status"><?php echo $value['returns_status']?></td>
                                        
               <?php }?>

                                        <td rowspan="<?php echo count($value['lists'])?>" class="operation">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo u('my/detail',array('orderForm_id'=>$value['orderForm_id']))?>">查看订单</a>
                                                </li>
<!--                                                这是全部显示，让他可以选择退货或者是换货-->
                                                <?php if($value['returns_status'] == '退/换货申请中'){?>
                
                                                    <li class="t">
                                                        <a href="" class="link-cancel btn-href tuihuo" returns_id = "<?php echo $value['returns_id']?>">
                                                            退货
                                                        </a>
                                                    </li>
                                                    <li class="h">
                                                        <a href="" class="link-cancel btn-href huanhuo" returns_id = "<?php echo $value['returns_id']?>">
                                                            换货
                                                        </a>
                                                    </li>
                                                
               <?php }?>
                                                <?php if($value['returns_success_status'] == ''){?>
                
                                                    <!--                                                这是已经退货了-->
                                                    <?php if($value['returns_status'] == '退货申请中'){?>
                
                                                        <li class="t">
                                                            <a href="" class="link-cancel btn-href tuihuo" returns_id = "<?php echo $value['returns_id']?>">
                                                                退货
                                                            </a>
                                                        </li>
                                                    
               <?php }?>
                                                    <!--                                                这是换货了-->
                                                    <?php if($value['returns_status'] == '换货申请中'){?>
                
                                                        <li class="h">
                                                            <a href="" class="link-cancel btn-href huanhuo" returns_id = "<?php echo $value['returns_id']?>">
                                                                换货
                                                            </a>
                                                        </li>
                                                    
               <?php }?>
                                                
               <?php }?>


                                            </ul>
                                        </td>
                                    
               <?php }?>
                                </tr>
                            <?php }?>
                            <!--							这是循环所有的商品end-->

                            <tr class="operation-line">
                                <td colspan="6">
                                    总计：<span class="red">
                                    <dfn>¥</dfn><?php echo number_format($value['orderForm_price'],2)?>
                                   </span> (含运费：
                                    <dfn>¥</dfn>0.00 优惠：
                                    <dfn>¥</dfn>0.00 )
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <?php }?>
                </dd>
            
               <?php }?>
        </dl>
        <script>
            $(function () {
                //这是退货
                $(".tuihuo").click(function () {
                    var returns_id = $(this).attr('returns_id');
                    var returns_status = "退货申请中";
                    var This = $(this);
                    var status = This.parents("td.operation").siblings("td.status").html();
                    if(status == "退货申请中"){
                        alertDiv("退货提示",'您的退货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    if(status == "换货申请中"){
                        alertDiv("退货提示",'您的换货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    $.post("<?php echo u('my/editReturns')?>",{"returns_id":returns_id,"returns_status":returns_status},function (res) {
                        if(res == 1){
                            alertDiv("退货提示",'您的退货申请正在处理...','关闭','','success');
                            This.parents('li.t').siblings('li.h').remove();
                            This.parents("td.operation").siblings("td.status").html("退货申请中");
                        }
                    },"json")
                    return false;
                })

                //这是换货
                $(".huanhuo").click(function () {
                    var returns_id = $(this).attr('returns_id');
                    var returns_status = "换货申请中";
                    var This = $(this);
                    var status = This.parents("td.operation").siblings("td.status").html();
                    if(status == "换货申请中"){
                        alertDiv("换货提示",'您的换货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    if(status == "退货申请中"){
                        alertDiv("换货提示",'您的退货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    $.post("<?php echo u('my/editReturns')?>",{"returns_id":returns_id,"returns_status":returns_status},function (res) {
                        if(res == 1){
                            alertDiv("换货提示",'您的换货申请正在处理...','关闭','','success');
                            This.parents('li.h').siblings('li.t').remove();
                            This.parents("td.operation").siblings("td.status").html("换货申请中");
                        }
                    },"json")
                    return false;
                })
            })
        </script>
    </article>

        </div>

        <script>
            $(function () {
                $.each($(".menu dd"),function () {
                    console.log($(this).find("a").html())
                    if($(this).find("a").html() == "退/换货"){
                        $(this).addClass("on");
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


