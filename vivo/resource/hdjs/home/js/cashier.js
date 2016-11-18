$(function(){
	//这是当我点击订单详情的时候，让订单详情显示或者隐藏
	$('.right').click(function(){
		if($('.order-details').css('display') == 'none'){
			$(this).find('div.triangle').css({'border-top':'0px solid #429edc','border-bottom':'8px solid #429edc'});
			$('.order-details').slideDown(500);
		}else{
			$(this).find('div.triangle').css({'border-top':'8px solid #429edc','border-bottom':'0px solid #429edc'});
			$('.order-details').slideUp(500);
		}
	})
	//这是当我点击其他支付方式的时候，让更多的支付方式显示出来
	$('.other-pay').click(function(){
		$(this).css('display','none');
		$('.other-paylist').css('display','block');
	})
	$('.pay-item').click(function(){
		$(this).addClass('selected');
		$('.pay-item').not($(this)).removeClass('selected');
	})
})
