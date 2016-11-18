$(function(){
	//这是跳转地址
	$('.back-soppingcar').click(function(){
		location.href = Root + "/index.php?s=home/shoppingcar/shoppingcar";
	})
	
	//------------------------------这是checklist核对订单页面start
	//这是收货人信息的选择
//				支付方式
//				发票信息
	on('.address-item');
	on('.pay-method');
	on('.tax-type');

	//这是当我点击选中的时候，设置他为本次收货地址
	$('body').delegate(".address-item",'click',function(){
		var id = $(this).find('.id').val();
		$.post(Root + '/index.php?s=home/checklist/endConfirm',{"address_id":id},function (res) {
			$('.allAddress').html(res.address_area+res.address_xxaddress);
			$('.allInfo').html(res.address_receiver + '~' + res.address_contact);
		},'json')

	})

	//这里是当我点击new的时候，打开那个form，点击别的时候，让他关闭
	$('.address-item,.cancel').click(function(){
		$('.address-info-new').css('display','none');
	})
	$('.new').click(function(){
		$('.address-info-new').css('display','block');
	})

	//这是当我点击设为默认地址后，然后我将我自己设置成为默认地址，将我自己的默认地址这个元素删除掉，然后将别的加上
	$('.adress-list').delegate(".default-address",'click',function(){
		var This = $(this);
		var ThisParents = $(this).parents('.address-item');
		//第一步，发异步
		var addressId = ThisParents.find('.id').val();
		$.post(Root + '/index.php?s=home/checklist/editDefault',{"address_id":addressId},function (res) {
		},'json')
		//第二步，给别的添加元素
		$.each($('.adress-list .operations'),function (k,v) {
			if($(this).find('.default-address').length){
			}else{
				$(this).prepend('<li class="default-address">设为默认地址</li>');
			}

		})


		//然后将自己删除了
		This.remove();

		ThisParents.siblings().removeClass('on');
		//然后获取自己父级li的html();
		Html = '<li class="address-item on">';
		Html += ThisParents.html();
		Html += '</li>';
		ThisParents.remove();//然后删除了
		$('.adress-list').prepend(Html);


	})

	//这是当我点击删除的时候，删除当前的div
	$('.adress-list').delegate(".delThis",'click',function(){
		var This = $(this);
		alertDiv('确定删除此地址么','您确认删除此地址么？','确认删除','取消删除','error')
		$('.btn-blue').click(function () {
			//这里提交异步删除
			var address_id = This.parents('li.address-item').find('.id').val();;
			$.post(Root + '/index.php?s=home/checklist/del',{"address_id":address_id},function (res) {
				
			},'json')
			//....
			This.parents('li.address-item').remove();
			if($('ul.adress-list').children().first().attr('class') == 'new'){
				//如果是new的话，就让new显示出来
				$('.address-info-new').css('display','block');
			}
			$('ul.adress-list').children().first().addClass('on');


			//然后移除这个模态框
			$('.dialog-container').animate({"top":"-500px"},500,function () {
				$('.dialog-container').remove();
			});
			setTimeout(function () {
				$('.mask').remove();
			},500)
		})
		/*if(confirm('确定删除此地址么')){
			$(this).parents('li.address-item').remove();
			if($('ul.adress-list').children().first().attr('class') == 'new'){
				//如果是new的话，就让new显示出来
				$('.address-info-new').css('display','block');
			}
			$('ul.adress-list').children().first().addClass('on');
		}*/
	})
	//这是当我点击支付方式的时候，改变支付方式
	$('.pay-method').click(function(){
		$('.pay-style').html($(this).html());
	})
//------------------------------这是checklist核对订单页面end
	//这里是异步添加收货地址
	$('.addAddress').submit(function () {
		var data = $(this).serialize();
		$.post(Root + '/index.php?s=home/checklist/addAddress',data,function (res) {
			if(res.valid){
				//这里就是添加成功
				// 这里弹出添加成功
				alertDiv('添加成功','您已添加成功一条数据','确定','','success');
				//这是让他三秒后自动关闭
				setTimeout(function () {
					$('.dialog-container').animate({"top":"-500px"},500,function () {
						$('.dialog-container').remove();
					});
					setTimeout(function () {
						$('.mask').remove();
					},500)
				},2000);

				//然后让这个关闭掉
				$('.address-info-new').css('display','none');
				//然后然后别的所有有on的都移除掉on
				$('.adress-list').find('.on').removeClass('on');
				//我组合字符串为了到最后添加元素
				var str = '<li class="address-item on"><label for=""><p class="item-top">';
				str += '<span title="地址">' + $("input[name=address_receiver]").val() + '</span>';
				if($("input[name=address_phone]")){//如果有手机，就写手机号码
					str += '<span title="联系电话">' + $("input[name=address_phone]").val() + '</span>';
				}else{//如果没有手机号码，就写固定电话
					str += '<span title="联系电话">' + $("input[name=address_fixed]").val() + '</span>';
				}
				str += '</p>';
				str += '<p title="' + $("input[name=address_xxaddress]").val() + '">';
				//这是地区
				$.each($('.address_area').parent('dd').find('select'),function (k,v) {
					str += '<span>' + $(this).val() + '</span>';
				})
				str += '<span>' + $("input[name=address_xxaddress]").val() +'</span>';
				str += '</p>';
				str += '<ul class="operations">';
				str += '<li class="default-address">设为默认地址</li>';
				str += '<li class="delThis">删除</li>';
				str += '</ul></label></li>';

				//然后我判断他是否选择了设为默认地址
				if($('#defaultAddress').is(':checked')){
					//如果是默认收货地址的话，就添加到最前边
					$('.adress-list').prepend(str);//这是将这个添加到前边
					//然后将别的都变成不是收货地址
					$.post(Root + '/index.php?s=home/checklist/editDefault',{"address_id":res.message},function (res) {

					},'json')

					//判断是否有这个设为默认地址，如果有，就删除了
					$.each($('.operations'),function (k,v) {
						if($(this).find('.default-address').length){
							$(this).find('.default-address').remove();
						}
						$(this).prepend('<li class="default-address">设为默认地址</li>');
					})
					//然后将第一个的收货地址删除了
					$('.adress-list').find('ul.operations').eq(0).find('li.default-address').remove();
				}else{
					$('.new').before(str);
				}

				//这是让那会的最后一个判断显示的错误给关闭掉
				$("input[name=address_phone]").siblings('span').html('').attr('title','');
				//然后清空表单
				document.getElementsByClassName("addAddress")[0].reset();
				//然后修改下边的收货地址
				$.post(Root + '/index.php?s=home/checklist/endConfirm',{"address_id":res.message},function (res) {
					$('.allAddress').html(res.address_area+res.address_xxaddress);
					$('.allInfo').html(res.address_receiver + '~' + res.address_contact);
				},'json')
			}else{
				//这里是缺少收货人姓名
				if(res.message.indexOf("收货人姓名") != -1){
					$("input[name=address_receiver]").siblings('span').html(res.message).attr('title',res.message);
					return;
				}else{
					$("input[name=address_receiver]").siblings('span').html('').attr('title','');
				}
				//这里是缺少收货人所在地区
				if(res.message.indexOf("收货人所在地区") != -1){
					$(".address_area").siblings('span').html(res.message).attr('title',res.message);
					return;
				}else{
					$(".address_area").siblings('span').html('').attr('title','');
				}
				//这里是缺少
				if(res.message.indexOf("收货人详细地址") != -1){
					$("input[name=address_xxaddress]").siblings('span').html(res.message).attr('title',res.message);
					return;
				}else{
					$("input[name=address_xxaddress]").siblings('span').html('').attr('title','');
				}
				//这里是缺少收货人手机号码
				if(res.message.indexOf("手机号码或者固定电话") != -1){
					$("input[name=address_phone]").siblings('span').html(res.message).attr('title',res.message);
					return;
				}
			}
		},'json')
		return false;
	})




})
