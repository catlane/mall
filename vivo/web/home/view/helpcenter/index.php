<extend file='resource/view/BigHome' />
<block name="content">
	<div class="main">
		<div class="content">
			<div class="crumbs">
				您的位置是:
				<a href="{{u('index/index')}}">首页</a>
				<b></b> {{$address}}
			</div>
		</div>
		<div class="content">
			<aside class="menu-bar">
				<dl class="menu">
					<dt class="menu-title buy-process"><i></i><span>购买流程</span></dt>
					<dd class="menu-item">
						<a href="{{u('helpcenter/alipay')}}">支付宝支付</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/huabei')}}">花呗分期</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/invoice')}}">发票说明</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/coupon')}}">优惠券说明</a>
					</dd>
					<dt class="menu-title send-mode"><i></i><span>配送方式</span></dt>
					<dd class="menu-item on">
						<a href="{{u('helpcenter/transport')}}">配送方式</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/transportCost')}}">配送费用</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/sign')}}">签收须知</a>
					</dd>
					<dt class="menu-title service-support"><i></i><span>服务支持</span></dt>
					<dd class="menu-item">
						<a href="{{u('helpcenter/servicePromise')}}">服务保证</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/afterService')}}">售后服务</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/brokenScreen')}}">碎屏宝</a>
					</dd>
					<dd class="menu-item">
						<a href="{{u('helpcenter/extendService')}}">手机延保</a>
					</dd>
					<dt class="menu-title brand-service"><i></i><span>品牌服务</span></dt>
					<dd class="menu-item">
						<a href="{{u('helpcenter/contactUs')}}">联系我们</a>
					</dd>
				</dl>
			</aside>
			<blade name="right" />
		</div>
<script type="text/javascript">
	$(function() {
		var on = "{{$on}}";
		$.each($('.menu-item'),function(k,v){
			console.log(on)
			if($(this).find("a").html() == on){
				$(this).css({"color":"#018ed6","background-color":"#def4ff"});
				$(this).find("a").css("color","inherit");
			}
		})
	})
</script>
	</div>
</block>