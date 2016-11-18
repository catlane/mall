<extend file='resource/view/BigHome'/>
<block name="content">
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
								<img src="{{__ROOT__}}/resource/hdjs/home/other/shoppingcar/no-shopping.png" alt="" />
								<p>
									亲，您的购物车里还没有物品哦，赶紧去
									<a href="{{u('index/index')}}">逛逛</a>
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
									<foreach from="$shoppingCarData" key="$key" value="$value">
										<!--一行一个商品-->
										<tr>
											<td class="td-check check-box">
												<label for="">
													<input type="checkbox" name="id[]" value="{{$key}}" />
												</label>
											</td>
											<td class="prod-pic">
												<a href="">
													<img src="{{$value['img']}}"/>
												</a>
											</td>
											<td class="prod-name">
												<a href="{{u('item/item',array('commodity_id'=>$value['id']))}}">{{$value['name']}}</a>
												<br />
												<foreach from="$value['attr']" key="$k" value="$v">
													{{$k}}：{{$v}}<br/>
												</foreach>
											</td>
											<td class="priceOnce">{{$value['addAfterPirce']}}</td>
											<td>
												<span class="number-box">
													<a href="javascript:;" class="less">-</a>
													<input type="text" name="" id="" value="{{$value['num']}}" title="请输入购买数量" />
													<a href="javascript:;" class="add">+</a>
												</span>
											</td>
											<td class="prePrice">0.00</td>
											<td class="item-vcoin">85.00</td>
											<td class="total-price">{{($value['price'] + $value['options']['addPrice']) * $value['num']}}</td>
											<td>
												<!--如果收藏了-->
												<span style="display: none;">已收藏</span>
												<!--如果收藏了end-->

												<!--如果没有收藏-->
												<a href="javascript:;" class="collectThis" car_id="{{$key}}" commodity_id="{{$value['id']}}">收藏</a>
												<!--如果没有收藏end-->
												|
												<a href="javascript:;" class="delThis">删除</a>
											</td>
										</tr>
										<!--一行一个商品end-->
									</foreach>
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
				$.post("{{u('shoppingcar/checklist')}}",{"id":ids},function (res) {
					location.href = res
				},'json')
			})
			$('.goshopping').click(function(){
				location.href = "{{u('index/index')}}";
			})

			//这里是添加数量或者修改数量
			$('.add').click(function () {
				var This = $(this);
				var id = $(this).parents('td').siblings('td.check-box').find('input[type=checkbox]').val();
				var num = Number($(this).siblings('input').val());
				var allNum = Number($('#end').siblings('span').html());
				
				var stockOnce = '';
				//这里异步获取下库存
				$.post("{{u('shoppingcar/stockOnce')}}",{"id":id},function (res) {
					stockOnce = res;
					if(num < stockOnce){//这里是判断这个的库存
						num = num + 1;
						//然后异步添加
						$.post("{{u('shoppingcar/edit')}}",{"id":id,"num":num},function (res) {
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
					$.post("{{u('shoppingcar/edit')}}",{"id":id,"num":num},function (res) {

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
				$.post("{{u('shoppingcar/stockOnce')}}",{"id":id},function (res) {
					var stockOnce = res;
					if(This.val() < 1 || This.val() > stockOnce){
						This.val(1);
					}
					
					allPrice();
				},'json')
			})
		</script>
		</div>
</block>
