$(function(){
	//当我点击两周内自动登陆的时候，让他选中
	var b = true;
	$('.remember').click(function(){
		if(b){
			$(this).css('background-position','-88px -38px');
			$(this).siblings('input[type=hidden]').val('1');
		}else{
			$(this).css('background-position','-88px 0px');
			$(this).siblings('input[type=hidden]').val('0');
		}
		b = !b;
	})
	//首先当我点击注册vivo的时候，跳转到注册页面
	$('.registered-btn').click(function(){
		$('.login').css('display','none');
		$('.registered').css('display','block');
	})
	//当我点击立即登陆的时候，让他跳转到登陆也main
	$('.J_login').click(function(){
		$('.login').css('display','block');
		$('.registered').css('display','none');
	})
	//当我点击用邮箱注册和手机注册时
	$('.email-raido').click(function(){
		$(this).attr('checked','checked')
				.siblings('input').removeAttr('checked');
		$('.email-register').css('display','block');
		$('.phone-register').css('display','none');

		//这是当我点击之后清除所有的表单元素
		$('.reg').find(".reset").trigger('click');
		//这是当我点击之后清除所有的错误提示
		$('.reg').find(".error").remove();
		$('.reg').find(".correct").remove();
		//然后切换一个验证码
		$('.change-code').trigger('click');
	})
	$('.phone-radio').click(function(){
		$(this).attr('checked','checked')
				.siblings('input').removeAttr('checked');
		$('.phone-register').css('display','block');
		$('.email-register').css('display','none');
		//这是当我点击之后清除所有的表单元素
		$('.reg').find(".reset").trigger('click');
		//这是当我点击之后清除所有的错误提示
		$('.reg').find(".error").remove();
		$('.reg').find(".correct").remove();
		//然后切换一个验证码
		$('.change-code').trigger('click');
	})

	//这里判断如果没有点击,就不能让他注册，必须同意才行
	$('.reg').submit(function () {
		//然后再判断我输入了验证码
		if($(this).find('.code').val() == ''){
			if($(this).find('.code').parents('li').find('.error').length){
				$(this).find('.code').parents('li').find('.correct').remove();
				$(this).find('.code').parents('li').find('.error').remove();
			}
			$('<b class="correct"></b>').appendTo($(this).find('.code').parents('li'));
			$('<p class="error">验证码为空</p>').appendTo($(this).find('.code').parents('li'));
			return false;
		}

		//当我表单提交的时候，如果没有选中接受，就不能提交
		if($(this).find(":checked").length < 1){
			$('<p />', {
				class: 'error',
				html:"请同意协议内容"
			}).appendTo($(this).find("a.xieyi").parent());
			return false;
		}else{
			$(this).find("a.xieyi").siblings('error').remove();
		}

	})

	//这是当我点击XX的时候，让他清空数据
	$(".reg").delegate(".correct","click",function(){
		if($(this).siblings('p.error').length){//如果要是有的话，就说明这个是不正确的，然后我点击可以删除里面的文字
			//让当前这个input的val为空，并且获得焦点
			$(this).siblings('input').val('').focus();
			//然后删除错误提示
			$(this).siblings('p.error').remove();
			//然后删除自己
			$(this).remove();
		}
	})

	//$('.code-box img')//这是验证码   $('.change-code')这是那个换一张
	var src = $('.code-box img').attr('src');
	$('.code-box img,.change-code').click(function () {
		$('.code-box img').attr("src",src + '&a=' + Math.random());
		if($(this).parents('li').find('.correct').length){
			$(this).parents('li').find('.error').remove();
			$(this).parents('li').find('.correct').remove();
		}
		$(this).parents('li').find('.code').val('').focus();
		return false;
	})




	// 这是插件验证
	$('#PHONE').validate({
		member_user_phone: {
			rule: {
				required:true,
				phone: true
			},
			error: {
				required: '手机号码不能为空',
				phone: '手机号错误'
			}
		},
		member_user_password1: {
			rule: {
				required:true,
				pwd: true
			},
			error: {
				required: '密码不能为空',
				pwd: '密码格式不正确，请输入字母或者字母，长度5-15'
			}
		},
		cpassword1: {
			rule: {
				required: true,
				confirm: 'member_user_password1'
			},
			error: {
				required: '密码不能为空',
				confirm: '两次密码不一致'
			}
		},
	})
	$('#EMAIL').validate({
		member_user_email: {
			rule: {
				required: true,
				email: true
			},
			error: {
				required: '邮箱不能为空',
				email: '邮箱不正确'
			},
		},
		member_user_password2: {
			rule: {
				required:true,
				pwd: true
			},
			error: {
				required: '密码不能为空',
				pwd: '密码格式不正确，请输入字母或者字母，长度5-15'
			}
		},
		cpassword2: {
			rule: {
				required: true,
				confirm: 'member_user_password2'
			},
			error: {
				required: '密码不能为空',
				confirm: '两次密码不一致'
			}
		},
	})









})
