<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/resource/hdjs/home/css/login.css"/>
		<script src="<?php echo __ROOT__?>/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo __ROOT__?>/resource/hdjs/home/js/login.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<a href="" class="banner_bg"></a>
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
										<input type="password" name="username" placeholder="密码" />
										<p class="error_info">这是错误提示</p>
										<b class="error"></b>
									</li>
									<li class="login-btn">
										<input type="submit" value="立即登陆" />
									</li>
									<li class="forget">
										<span class="v_checkbox">
											<span class="remember"></span>
											两周内自动登陆
										</span>
										<a href="" class="forgot-pwd">
											忘记密码？
										</a>
									</li>
									<li class="registered-btn">
										<a href="script:;">注册vivo账号</a>
									</li>
								</ul>
							<input type='hidden' name='__TOKEN__' value='0a9f1e9e7013ab0d9f2da11a7878d940'/></form>
						</div>
					</div>
					<!--登陆end-->
					<!--这是注册start-->
					<div class="registered">
						<form action="" method="post" class="reg">
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
							<ul class="phone-register">
								<li class="vercode li_input">
									<em></em>
									<input type="text" placeholder="请验证图片验证码" />
									<span class="code-box">
										<img src="<?php echo __ROOT__?>/resource/hdjs/home/other/login/code.jpg"/>
									</span>
									<a href="" class="change-code">换一张</a>
									<b class="correct"></b>
									<p class="error">验证码错误</p>
								</li>
								<li class="phonenumber li_input">
									<em></em>
									<input type="text" placeholder="请验证图片验证码" />
									<b class="correct"></b>
									<p class="error">手机号码错误</p>
								</li>
								<li class="vercode li_input">
									<button>获取验证码</button>
									<em></em>
									<input type="text" placeholder="请验证图片验证码" />
									<b class="correct"></b>
									<p class="error">手机号码错误</p>
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="text" placeholder="请输入密码" />
									<b class="correct"></b>
									<p class="error">密码输入错误</p>
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="text" placeholder="请再次输入密码" />
									<b class="correct"></b>
									<p class="error">密码输入错误</p>
								</li>
								<li class="check">
									<input type="checkbox" id="_isAgreePhone" />
									<label for="_isAgreePhone">我已阅读并接受</label>
									<a href="">《vivo服务协议》</a>
									<p class="error">请同意协议内容</p>
								</li>
								<li class="registered-btn">
									<input type="submit" />
								</li>
							</ul>
							<!--用手机注册end-->
							<!--用邮箱注册start-->
							<ul class="email-register">
								<li class="email li_input">
									<em></em>
									<input type="email" placeholder="请输入邮箱地址" />
									<b class="correct"></b>
									<p class="error">邮箱地址输入错误</p>
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="password" placeholder="请输入密码" />
									<b class="correct"></b>
									<p class="error">密码输入错误</p>
								</li>
								<li class="pwd li_input">
									<em></em>
									<input type="password" placeholder="请再次输入密码" />
									<b class="correct"></b>
									<p class="error">密码输入错误</p>
								</li>
								<li class="vercode li_input">
									<em></em>
									<input type="text" placeholder="请验证图片验证码" />
									<span class="code-box">
										<img src="<?php echo __ROOT__?>/resource/hdjs/home/other/login/code.jpg"/>
									</span>
									<a href="" class="change-code">换一张</a>
									<b class="correct"></b>
									<p class="error">验证码错误</p>
								</li>
								<li class="check">
									<input type="checkbox" id="isAgreePhone" />
									<label for="isAgreePhone">我已阅读并接受</label>
									<a href="">《vivo服务协议》</a>
									<p class="error">请同意协议内容</p>
								</li>
								<li class="registered-btn">
									<input type="submit" />
								</li>
							</ul>
							<!--用邮箱注册end-->
						<input type='hidden' name='__TOKEN__' value='0a9f1e9e7013ab0d9f2da11a7878d940'/></form>
					</div>
					<!--这是注册end-->
				</div>
				<div class="right">
					<div class="other-method">
						<p class="sub-title">
							其他方式登陆
							<ul>
								<li class="qq">
									<a href="">
										<b></b>
										QQ账号
									</a>
								</li>
								<li class="weixin">
									<a href="">
										<b></b>
										微信账号
									</a>
								</li>
								<li class="sina">
									<a href="">
										<b></b>
										新浪微博
									</a>
								</li>
								<li class="renren">
									<a href="">
										<b></b>
										人人账号
									</a>
								</li>
								<li class="server">
									<a href="">
										<b></b>
										在线客服
									</a>
								</li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>
