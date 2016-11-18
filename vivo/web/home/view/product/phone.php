<extend file='resource/view/BigHome'/>
<block name="content">
	<div class="main">
			<div class="content">
				<div class="crumbs">
					您的位置是:<a href="{{u('index/index')}}">首页</a>
					<b></b>
					<foreach from="$fathers" key="$key" value="$value">
							<if value="$key lt count($fathers) - 1">
								<a href="{{u('product/phone',array('category_id'=>$value[0]))}}">
									{{$value[1]}}
								</a>
							<else>
								{{$value[1]}}
							</if>
						<if value="$key lt count($fathers) - 1">
							<b></b>
						</if>
					</foreach>
					
				</div>
			</div>
			
			<div class="content">
				<!--这是筛选部分-->
				<div class="filter">
					<div class="f-line">
						<dl>
							<dt>分类</dt>
							<dd><a href="">全部</a></dd>

							<foreach from="$son_category_data" key="$key" value="$value">
								<dd category_id="{{$value['category_id']}}" ><a href="{{u('product/phone',array('category_id'=>$value['category_id']))}}">{{$value['category_name']}}</a></dd>
							</foreach>

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
							<foreach from="$commodityData" key="$key" value="$value">
								<li>
									<a href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}" <if value="$value['commodity_all_stock'] == 0">class="no-good"</if> >
										<div class="figure">
											<img src="{{__ROOT__}}/{{$value['commodity_list_img']}}" alt="" />
										</div>
										<h3 title="{{$value['commodity_name']}}">
											{{$value['commodity_name']}}
										</h3>
										<p>
											<dfn>¥</dfn>
											{{$value['commodity_mall_price']}}
										</p>
									</a>
								</li>
							</foreach>
							<!--no-good-->
						</ul>
					</div>
				<?php }else{ ?>
					<div class="no-lists">
						<img src="{{__ROOT__}}/resource/hdjs/home/other/phone/no-lists.png">
						<p>当前没有商品符合筛选条件，请查看全部商品</p>
					</div>
				<?php } ?>

				<!--这是分页-->
				<div class="pagination"><!-- class="current"-->
					<if value="$bigPage gt 1">
						<!--然后判断如果要是按当前的page==自己的page，就不能跳转，给自己加上类-->
						<a class="page">1</a>
						<a class="page" href="{{u('product/phone',array('category_id'=>q('get.category_id',0,'intval'),'page'=>2))}}">2</a>
						<label for="">
							<input type="text" name="" id="" value="" /> / {{$bigPage}}
						</label>
						<a href="" class="go"></a>
					</if>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function () {
				//这里写分页
				$('.pagination a.page').each(function (k,v) {
					var UrlPage = "{{q('get.page',0,'intval')}}";
					var ThisPage = $(this).html();
					if(ThisPage == UrlPage){//说明就是自己
						//让自己变成不能点击
						$(this).addClass("current").removeAttr("href");
						//然后让别的变成可以点击的

						$(this).siblings("a.page").each(function () {
							$(this).attr("href","{{u('product/phone',array('category_id'=>q('get.category_id',0,'intval')))}}" + "&page=" + $(this).html())
						});
					}
				})

				//这里写失去焦点
				$('.go').siblings("label").find("input").keyup(function () {
					var page = Number($(this).val());
					var bigPage = Number("{{$bigPage}}");
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
					var bigPage = "{{$bigPage}}";
					console.log(bigPage)
					if(page >= bigPage){
						page = bigPage;
					}
					if(page < 1){
						page = 1;
					}
					$(this).siblings("label").find("input").val(page);
					location.href = "{{u('product/phone',array('category_id'=>q('get.category_id',0,'intval')))}}" + "&page=" + page;
					return false;
				})
			})



			$(function(){
				$.each($('.f-line').eq(0).find("dl dd"),function(k,v){
					//先获取当前的这个id
					var thisCategory_id = $(this).attr("category_id");
					//然后获取浏览器地址的id
					var urlCategory_id = "{{q('get.category_id','0','intval')}}";
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
					var category_id = "{{q('get.category_id','0','intval')}}";
					$.post("{{u('common/is_category')}}",{"category_id":category_id},function(res){
						location.href = "{{u('product/phone')}}" + "&category_id=" + res;
					},"json")
					return false;
				})
			})
		</script>
</block>
