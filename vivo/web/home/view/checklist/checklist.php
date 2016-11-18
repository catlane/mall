<extend file='resource/view/BigHome'/>
<block name="content">
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
								<foreach from="$addressData" key="$key" value="$value">
									<if value="$value['address_default'] == 1">
										<li class="address-item on">
									<else>
										<li class="address-item">
									</if>
										<label for="">
											<input type="hidden" class="id" value="{{$value['address_id']}}">
											<p class="item-top">
												<span title="地址">{{$value['address_receiver']}}</span>
												<span title="联系电话">
													<if value="$value['address_phone'] != ''">
														{{$value['address_phone']}}
													<else>
														{{$value['address_fixed']}}
													</if>
												</span>
											</p>
											<p title="{{$value['address_xxaddress']}}">
												<foreach from="$value['address_area']" key="$k" value="$v">
													<span>{{$v}}</span>
												</foreach>
												<span>{{$value['address_xxaddress']}}</span>
											</p>
											<ul class="operations">
												<if value="$value['address_default'] == 0">
													<li class="default-address">设为默认地址</li>
												</if>
												<li class="delThis">删除</li>
											</ul>
										</label>
									</li>
								</foreach>
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
								</form>
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

									<foreach from="$carData" key="$key" value="$value">
										<tbody class="item-single" carId="{{$value['carId']}}"><!--多个商品的话，就循环这个tbody-->
										<tr class="prod-line">
											<td class="prod-pic">
												<a href="">
													<img src="{{__ROOT__}}/{{$value['img']}}"/>
												</a>
											</td>
											<td class="prod-name">
												<a href="">{{$value['name']}}</a>
												<br />
												<foreach from="$value['attr']" key="$k" value="$v">
													<span>
														{{$k}}：{{$v}}
													</span><br/>
												</foreach>

											</td>
											<td>{{number_format($value['addAfterPirce'],2)}}</td>
											<td>{{$value['num']}}</td>
											<td>-0.00</td>
											<td>{{number_format($value['total'])}}</td>
											<td>{{number_format($value['total'],2)}}</td>
										</tr>
										</tbody>
									</foreach>
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
												<em class="red">{{$review['allNum']}}</em>
												件
												&nbsp;商品总金额：
											</label>
											<span class="price">
												<dfn>¥</dfn>
												{{number_format($review['allPrice'],2)}}
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
									<span class="allAddress">{{$addressDefaultData["address_area"]}}{{$addressDefaultData["address_xxaddress"]}}</span>
								</li>
								<li>
									<label for="">收件人</label>
									<span class="allInfo">{{$addressDefaultData["address_receiver"]}}~{{$addressDefaultData["address_contact"]}}</span>
								</li>
							</ul>
							<label for="">应付金额</label>
							<span class="real-price red">
								<dfn>¥</dfn>
								{{number_format($review['allPrice'],2)}}
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
				d.put("orderForm_price","{{$review['allPrice']}}");
				//订单备注
				d.put("orderForm_comments",$("textarea[name=orderForm_comments]").val());

				var carId = "";
				$.each($('.item-single'),function (k,v) {
					carId += $(this).attr('carId') + '|';
				})
				d.put("carId",carId);


				JSON.stringify(d.data);
				$.post("{{u('checklist/add')}}",d.data,function (res) {
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
									location.href = "{{u('cashier/cashier')}}" + "&orderForm_id=" + res.message.orderForm_orderForm_id;
								}else{//直接购买成功
									location.href = "{{u('success/success')}}" + "&orderForm_id=" + res.message.orderForm_orderForm_id;
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
</block>