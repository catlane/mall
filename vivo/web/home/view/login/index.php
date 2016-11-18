<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/hdjs/home/css/login.css"/>
		<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/hdjs/home/css/master.css"/>
		<link rel="stylesheet" href="{{__ROOT__}}/resource/hdjs/home/hdjs/hdjs.css">
		<script src="{{__ROOT__}}/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="{{__ROOT__}}/resource/hdjs/home/js/master.js"></script>
		<script src="{{__ROOT__}}/resource/hdjs/home/js/login.js" type="text/javascript" charset="utf-8"></script>
		<script src="{{__ROOT__}}/resource/hdjs/home/hdjs/hdjs.min.js"></script>
	</head>
	<body>
		<a href="{{u('item/item',array('commodity_id'=>33))}}" class="banner_bg" target="_blank"></a>
		<div class="middle_box">
			<div class="hide_out">
				<div class="left">
					<!--登陆start-->
					<div class="login">
						<div class="fieldset-section">
							<form action="" method="post" class="dl">
								<p class="sub-title">使用邮箱/手机号登陆</p>
								<ul class="slogin">
									<li class="li_input username">
										<em></em>
										<input type="text" name="username" placeholder="邮箱/手机号" />
										<p class="error_info">这是错误提示</p>
										<b class="error"></b>
									</li>
									<li class="li_input password">
										<em></em>
										<input type="password" name="password" placeholder="密码" />
										<p class="error_info">这是错误提示</p>
										<b class="error"></b>
									</li>
									<li class="login-btn">
										<input type="submit" value="立即登陆" />
									</li>
									<li class="forget">
										<span class="v_checkbox">
											<span class="remember"></span>
											<input type="hidden" name="remember">
											两周内自动登陆
										</span>
										<a href="" class="forgot-pwd">
											忘记密码？
										</a>
										<script>
											$(".forgot-pwd").click(function(){
												alertDiv("友情提示","抱歉,找回密码功能正在维护中...","","关闭","error");
												return false;
											})
										</script>
									</li>
									<li class="registered-btn">
										<a href="script:;">注册vivo账号</a>
									</li>
								</ul>
							</form>
							<script>
								$(function () {
									$('.dl').submit(function () {
										var data = $(this).serialize();
										$.post("{{u('login/login')}}",data,function (res) {
											//说明这个是和账号有关系的，我直接写到账号那里就行了
											if(res.message.indexOf("帐号") > -1){
												$('input[name=username]')
													.siblings('.error_info').css('display','block').html(res.message)
													.siblings('.error').css('display','block');
												return;
											}

											if(res.message.indexOf("密码") > -1){
												$('input[name=password]')
													.siblings('.error_info').css('display','block').html(res.message)
													.siblings('.error').css('display','block');
												return;
											}
											if(res.message.indexOf("登陆成功") > -1){
												location.href = history.go(-1);
												return;
											}
										},'json')
										return false;
									})
									$('input[name=username],input[name=password]').focus(function () {
										$(this).siblings('.error_info').css('display','none').html('')
											.siblings('.error').css('display','none');
									})
									$('.dl .error').click(function () {
										$(this).siblings('input').val('').focus()
											.siblings('.error_info').css('display','none').html('')
											.siblings('.error').css('display','none');
									})
								})
							</script>
						</div>
					</div>
					<!--登陆end-->
					<!--这是注册start-->
					<div class="registered">
							<p class="sub-title">
								已有账号？
								<a href="script:;" class="J_login">立即登陆</a>
							</p>
							<ul class="register-method">
								<li class="radio">
									<input type="radio" class="radio-style phone-radio" checked="checked" />
									<label for="" class="label-style">
										用手机注册
									</label>
									<input type="radio" class="radio-style email-raido" />
									<label for="" class="label-style">
										用邮箱注册
									</label>
								</li>
							</ul>
							<!--用手机注册start-->
						<form action="{{u('login/registered')}}" method="post" class="reg" id="PHONE">
							<ul class="phone-register">
								<li class="vercode li_input">
									<em></em>
									<input type="text" placeholder="请验证图片验证码" name="code" class="code" />
									<span class="code-box">
										<img src="{{u('login/CodeImg')}}"/>
									</span>
									<a href="" class="change-code">换一张</a>
								</li>
								<li class="phonenumber li_input">
									<em></em>
									<input type="text" placeholder="请输入手机号码" name="member_user_phone" />
								</li>
<!--								<li class="vercode li_input">-->
<!--									<button>获取验证码</button>-->
<!--									<em></em>-->
<!--									<input type="text" placeholder="请验证手机验证码" />-->
<!--								</li>-->
								<li class="pwd li_input">
									<em></em>
									<input type="password" placeholder="请输入密码" name="member_user_password1" />
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="password" placeholder="请再次输入密码" name="cpassword1" />
								</li>
								<li class="check">
									<input type="checkbox" id="isAgreePhone" class="isAgree" checked />
									<label for="isAgreePhone">我已阅读并接受</label>
									<a href="{{u('login/webprotocol')}}" target="_blank" class="xieyi">《vivo服务协议》</a>
								</li>
								<li class="registered-btn">
									<input type="submit" />
								</li>
							</ul>
							<input type="reset" class="reset" name="reset" style="display: none;" />
						</form>
							<!--用手机注册end-->
							<!--用邮箱注册start-->
						<form action="{{u('login/registered')}}" method="post" class="reg" id="EMAIL">
							<ul class="email-register">
								<li class="email li_input">
									<em></em>
									<input type="email" placeholder="请输入邮箱地址" name="member_user_email" />
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="password" placeholder="请输入密码" name="member_user_password2" />
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="password" placeholder="请再次输入密码" name="cpassword2" />
								</li>
								<li class="vercode li_input">
									<em></em>
									<input type="text" placeholder="请验证图片验证码" name="code" class="code" />
									<span class="code-box">
										<img src="{{u('login/CodeImg')}}"/>
									</span>
									<a href="" class="change-code">换一张</a>
								</li>
								<li class="check">
									<input type="checkbox" id="isAgreeEmail" class="isAgree" />
									<label for="isAgreeEmail">我已阅读并接受</label>
									<a href="{{u('login/webprotocol')}}" target="_blank" class="xieyi">《vivo服务协议》</a>
								</li>
								<li class="registered-btn">
									<input type="submit" />
								</li>
							</ul>
							<input type="reset" class="reset" name="reset" style="display: none;" />
							</form>
							<!--用邮箱注册end-->

					</div>
					<!--这是注册end-->
				</div>
				<div class="right">
					<div class="other-method">
						<p class="sub-title">
							其他方式登陆
							<ul>
								<li class="qq" onclick="noLogin('QQ账号')">
									<a href="script:;">
										<b></b>
										QQ账号
									</a>
								</li>
								<li class="weixin" onclick="noLogin('微信账号')">
									<a href="script:;">
										<b></b>
										微信账号
									</a>
								</li>
								<li class="sina" onclick="noLogin('新浪微博账号')">
									<a href="script:;">
										<b></b>
										新浪微博
									</a>
								</li>
								<li class="renren" onclick="noLogin('人人账号')">
									<a href="script:;">
										<b></b>
										人人账号
									</a>
								</li>
								<li class="server">
									<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" target="_blank">
										<b></b>
										在线客服
									</a>
								</li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<script src="{{__ROOT__}}/resource/hdjs/app/util.js"></script>
			<script src="{{__ROOT__}}/resource/hdjs/require.js"></script>
			<script src="{{__ROOT__}}/resource/hdjs/app/config.js"></script>
			<script>
				$(function () {
					//这里是异步判断验证码是否正确
					$('.code').keyup(function () {
						var This = $(this);
						var code = $(this).val();
						$.post("{{u('login/yzCode')}}",{"code":code},function (res) {
							if(res){
								if(This.parent().find('.correct').length){
									This.parent().find('.correct').remove();
									This.parent().find('.error').remove();
								}
								$('<b class="correct" style="background-position: -20px 0px"></b>').appendTo(This.parent());
							}else{
								if(This.parent().find('.correct').length){
									This.parent().find('.correct').remove();
									This.parent().find('.error').remove();
								}
								$('<b class="correct"></b>').appendTo(This.parent());
								$('<p class="error">验证码错误</p>').appendTo(This.parent());
								//然后让这个表单没办法提交
								This.parents('.reg').submit(function () {
									return false;
								})
							}
						},'json')
					})


					//判断手机号码是否存在
					$('input[name=member_user_phone]').blur(function () {
						var This = $(this);
						var phone = $(this).val();
						$.post("{{u('login/yzPhone')}}",{"phone":phone},function (res) {
							if(res){
								if(This.parent().find('.correct').length){
									This.parent().find('.correct').remove();
									This.parent().find('.error').remove();
								}
								$('<b class="correct"></b>').appendTo(This.parent());
								$('<p class="error">该手机号码已被注册</p>').appendTo(This.parent());
								//然后让这个表单没办法提交
								This.parents('.reg').submit(function () {
									return false;
								})
							}
						},'json')
					})



					//判断邮箱是否存在
					$('input[name=member_user_email]').blur(function () {
						var This = $(this);
						var email = $(this).val();
						$.post("{{u('login/yzEmail')}}",{"email":email},function (res) {
							if(res){
								if(This.parent().find('.correct').length){
									This.parent().find('.correct').remove();
									This.parent().find('.error').remove();
								}
								$('<b class="correct"></b>').appendTo(This.parent());
								$('<p class="error">该邮箱已被注册</p>').appendTo(This.parent());
								//然后让这个表单没办法提交
								This.parents('.reg').submit(function () {
									return false;
								})
							}
						},'json')
					})


					//然后这里是异步提交数据
					$('.reg').submit(function () {
						var data = $(this).serialize();
						$.post("{{u('login/registered')}}",data,function (res) {
							if(res.valid){
								location.href = "{{u('login/index')}}";
							}else{
								alertDiv("提示",res.message,"","关闭","error");
							}
						},'json')
						return false;
					})


				})
				//这里写qq登录什么的
				function noLogin (method) {
					alertDiv("友情提示","抱歉，<span style='color:red;font-weight: blod;'>"+method+"</span>登录功能正在<span style='color:red;font-weight: blod;'>紧急申请</span>中...<br/>请您先用邮箱或者手机号注册！！！","","关闭","error");
					return false;
				}
			</script>
		</div>
	</body>
</html>
