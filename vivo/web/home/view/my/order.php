<extend file='resource/view/my' />
<block name="right">
	<article class="c">
		<dl class="member-order-list">
			<dt>我的订单</dt>
			<dd>
				<ul class="statistic-tags">
					<?php if(!isset($_GET['status'])){?>
					<li class="on">
						<a href="{{u('my/order')}}">全部</a>
					</li>
					<li <if value="$_GET['status'] == not_paid">class="on"</if> >
					<a href="{{u('my/order&status=not_paid')}}">代付款({{$not_paidNum}})</a>
					</li>
					<li <if value="$_GET['status'] == to_receive">class="on"</if>>
					<a href="{{u('my/order&status=to_receive')}}">待收货({{$to_receiveNum}})</a>
					</li>
					<li <if value="$_GET['status'] == completed">class="on"</if> >
					<a href="{{u('my/order&status=completed')}}">已完成({{$completedNum}})</a>
					</li>
					<li <if value="$_GET['status'] == closed">class="on"</if> >
					<a href="{{u('my/order&status=closed')}}">已关闭({{$closedNum}})</a>
					</li>
					<?php }else{ ?>
					<li>
						<a href="{{u('my/order')}}">全部</a>
					</li>
					<li<if value="$_GET['status'] == not_paid">class="on"</if> >
						<a href="{{u('my/order&status=not_paid')}}">代付款({{$not_paidNum}})</a>
					</li>
					<li <if value="$_GET['status'] == to_receive">class="on"</if> >
						<a href="{{u('my/order&status=to_receive')}}">待收货({{$to_receiveNum}})</a>
					</li>
					<li <if value="$_GET['status'] == completed">class="on"</if> >
						<a href="{{u('my/order&status=completed')}}">已完成({{$completedNum}})</a>
					</li>
					<li <if value="$_GET['status'] == closed">class="on"</if> >
						<a href="{{u('my/order&status=closed')}}">已关闭({{$closedNum}})</a>
					</li>
					<?php } ?>

				</ul>
				<if value="count($data) != 0"><!--判断是否有这个变量-->
					<div class="list-caption">
						<div class="col col10">商品</div>
						<div class="col col11">数量</div>
						<div class="col col12">价格</div>
						<div class="col col13">状态</div>
						<div class="col col14">操作</div>
					</div>
					<!--                这里是多个的订单信息-->
					<foreach from="$data" key="$key" value="$value">
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
											<a href="{{u('my/detail',array('orderForm_id'=>$value['orderForm_id']))}}">{{$value["orderForm_num"]}}</a>
										</li>
										<li class="order-time">成交时间: {{date("Y-m-d H:i:s",$value["orderForm_sendtime"])}}
										</li>
									</ul>
								</th>
							</tr>
							<!--							这是循环所有的商品start-->
							<foreach from="$value['lists']" key="$k" value="$v">
								<tr class="prod-line">
									<td class="prod-pic">
										<a class="figure" href="{{u('item/item',array('commodity_id'=>$v['commodity_id']))}}" target="_blank">
											<img src="{{$v['commodity_list_img']}}" alt="">
										</a>
									</td>
									<td class="prod-name">
										<a href="{{u('item/item',array('commodity_id'=>$v['commodity_id']))}}" target="_blank" title="{{$v['commodity_name']}}">{{$v['commodity_name']}}</a>
										<br>{{$v['orderFormList_attr']}}
									</td>
									<td>{{$v['orderFormList_shopNum']}}</td>
									<td>
										{{number_format($v["orderFormList_price"],2)}}
									</td>
									<if value="$k == 0 ">
										<td rowspan="{{count($value['lists'])}}" class="status">
											{{$value['orderForm_status']}}
										</td>
										<td rowspan="{{count($value['lists'])}}" class="operation">
											<ul>
												<li>
													<a href="{{u('my/detail',array('orderForm_id'=>$value['orderForm_id']))}}">查看订单</a>
												</li>
												<?php if($value['orderForm_status'] == "未付款"){ ?>
													<li>
														<a href="" class="link-cancel btn-href cancelOrder" orderForm_id = "{{$value['orderForm_id']}}">
															取消订单
														</a>
													</li>
												<?php } ?>
												<?php if($value['orderForm_status'] == "已发货"){ ?>
													<li>
														<a href="" class="link-cancel btn-href Receipt" orderForm_id = "{{$value['orderForm_id']}}">
															确认收货
														</a>
													</li>
												<?php } ?>
												<?php if($value['orderForm_status'] == "已完成"){ ?>
													<li>
														<a href="" class="link-cancel btn-href returns" orderForm_id = "{{$value['orderForm_id']}}">
															退/换货
														</a>
													</li>
												<?php } ?>
											</ul>
										</td>
									</if>
								</tr>
							</foreach>
							<!--							这是循环所有的商品end-->

							<tr class="operation-line">
								<td colspan="6">
									总计：<span class="red">
					<dfn>¥</dfn>{{number_format($value['orderForm_price'],2)}}
				   </span> (含运费：
									<dfn>¥</dfn>0.00 优惠：
									<dfn>¥</dfn>0.00 )
									<?php if($value["orderForm_status"] == "未付款"){  ?>
										<button type="button" class="btn btn-confirm btn-highlight order-button" id="order-button" orderForm_id="{{$value['orderForm_id']}}">
											去结算
										</button>
									<?php } ?>
								</td>
							</tr>
							</tbody>
						</table>
					</foreach>
					<!--                这里是多个的订单信息end-->
					<!--这是订单为空-->
				<else>
					<!--这是没有订单-->
					<div class="no-record no-order">
						<img src="{{__ROOT__}}/resource/hdjs/home/other/my/my_refund_no.png"><span>您还没有订单</span>
					</div>
				</if>
			</dd>
		</dl>
	</article>
	<script>
		$(function () {
			$('.order-button').click(function () {
				var orderForm_id = $(this).attr("orderForm_id");
				location.href= "{{u('cashier/cashier')}}" + '&orderForm_id=' + orderForm_id;
			})

			$('.cancelOrder').click(function(){
				var orderForm_id = $(this).attr("orderForm_id");
				alertDiv("取消订单申请","订单成功取消后无法恢复",'确定取消','暂不取消','error');
				$(".btn-blue").click(function () {
					$.post("{{u('my/cancelOrder')}}",{"orderForm_id":orderForm_id,"orderForm_cancelMethod":"手动"},function (res) {
						alertDiv("取消成功提示","订单取消成功,1秒后跳转",'','关闭','success');
						setTimeout(function () {
							$('.dialog-container').animate({"top":"-500px"},500,function () {
								$('.dialog-container').remove();
							});
							setTimeout(function () {
								$('.mask').remove();
							},500)
							window.location.reload();
						},1000)
					},'json')
				})
				$(this).attr("href","script:;");
			})
			//这是收货
			$('.Receipt').click(function(){
				var orderForm_id = $(this).attr("orderForm_id");
				alertDiv("确认收货信息","确定收货么？",'确定','关闭','error');
				$(".btn-blue").click(function () {
					$.post("{{u('my/Receipt')}}",{"orderForm_id":orderForm_id},function (res) {
						alertDiv("收货提示","收货成功，期待您的评价,1秒后跳转",'','关闭','success');
						setTimeout(function () {
							$('.dialog-container').animate({"top":"-500px"},500,function () {
								$('.dialog-container').remove();
							});
							setTimeout(function () {
								$('.mask').remove();
							},500)
							window.location.reload();
						},1000)
					},'json')
				})
				$(this).attr("href","script:;");
			})

			//这是退货
			$('.returns').click(function(){
				var orderForm_id = $(this).attr("orderForm_id");
				alertDiv("确认退/换货么","亲？宝贝不好用么！怎么舍得呢",'确定退货','点错了','error');
				$(".btn-blue").click(function () {
					$.post("{{u('my/returns')}}",{"orderForm_id":orderForm_id},function (res) {
						if(res){
							alertDiv("退/换货提示","退/换货成功,1秒后跳转",'','关闭','success');
							setTimeout(function () {
								$('.dialog-container').animate({"top":"-500px"},500,function () {
									$('.dialog-container').remove();
								});
								setTimeout(function () {
									$('.mask').remove();
								},500)
								window.location.href = "{{u('my/refund')}}";
							},1000)
						}
					},'json')
				})
				$(this).attr("href","script:;");
			})


		})


	</script>
</block>