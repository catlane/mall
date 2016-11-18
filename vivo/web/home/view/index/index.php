<extend file='resource/view/BigHome'/>
<script type="text/javascript">
	//这里是让一上来看的人知道，用户名以及密码
	$(function(){
		var tishi = {{$_SESSION["tishi"]}};
		if(tishi == 1){
			alertDiv("友情提示","亲爱的用户,您参观的这个网站前台，<br/>后台最高管理员账号为:<span style='color:red;'>admin</span>,密码:<span style='color:red;'>admin888</span><br/>最高管理员权限意味着<br/><span style='color:red;'>所有功能</span>都可以操作，小心玩坏了哦！么么哒","跳转到后台","知道了!","success");
			$('.btn-blue').click(function(){
				window.open("{{u('admin/index/index')}}");
			})
			setTimeout(function(){
				$('.dialog-container').animate({"top":"-500px"},500,function () {
					$('.dialog-container').remove();
				});
				setTimeout(function () {
					$('.mask').remove();
				},500)
			},6000)
		}
	})
</script>
<block name="content">
<!--		这里是主体内容，这是子模板中的内容start-->
		<div class="main">
			<div class="content">
				<div class="banner">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<foreach from="$data['advertising_img']" key="$key" value="$value">
								<div class="swiper-slide">
									<a href="{{u('item/item',array('commodity_id'=>33))}}" target="_blank">
										<img src="{{__ROOT__}}/{{$value}}"/>
									</a>
								</div>
							</foreach>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
						<!-- Add Arrows -->
					</div>
				</div>

				<div class="recommend">
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>33))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_1.jpg"/>
							</a>
						</div>
					</div>
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>32))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_2.jpg"/>
							</a>
						</div>
					</div>
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>31))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_3.jpg"/>
							</a>
						</div>
					</div>
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>30))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_4.jpg"/>
							</a>
						</div>
					</div>
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>29))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_5.jpg"/>
							</a>
						</div>
					</div>
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>28))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_6.jpg"/>
							</a>
						</div>
					</div>
					<div class="once">
						<div>
							<a href="{{u('item/item',array('commodity_id'=>32))}}" target="_blank">
								<img src="{{__ROOT__}}/resource/hdjs/home/other/index/once_7.jpg"/>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--		这里是主体内容，这是子模板中的内容end-->
</block>

