$(function(){
	//这是显示搜索框
	var search = true;
	$('.search').click(function(){
		if(search){
			$('.head-search').slideDown();
		}else{
			$('.search-box input').val('');
			$('.head-search').slideUp();
		}
		search = !search;
		return false;
	})
	//这是搜索框的关闭按钮
	$('.close').click(function(){
		$('.search-box input').val('');
		$('.head-search').slideUp();
		search = !search;
		return false;
	})
	//这是让跳到顶部按钮显示出来
	$(window).scroll(function(){
		var t = $(document.body).scrollTop();
		if(t > 300){
//			$('.backtop').css('display','block');
			$('.backtop').css('display','block').fadeIn();
			
		}else{
			$('.backtop').fadeOut('show');
		}
	})
	
	//顶部按钮的单击事件
	$('.backtop').click(function(){
		$('html,body').animate({scrollTop: $('.header').offset().top},1000);//让他一秒跳到这个id
		return false;
	});
})

//-----------------------因为多个页面用到了on,所以提取到公共处
//这是添加on这个类
function on(obj){
	$('body').delegate(obj,'click',function(){
		 $(this).addClass('on').siblings().removeClass('on');
	})
}


//这是添加数量
var time = null;
function num(add,less){
	$(add).click(function(){
		var This = $(this);
		var num = Number($(this).siblings('input').val());
		if(num >= 3){//这里写的是后边的仅限3部//这里改成库存数量，然后就是异步判断这个的库存
			var time = null;
			var i = 0;
			time = setInterval(function(){
				i++;
				if(i > 11){
					clearInterval(time);
				}
				if(i%2){
					This.siblings('small').addClass('red');
				}else{
					This.siblings('small').removeClass('red');
				}
			},100)
		}else{
			num += 1;
			$(this).siblings('input').val(num);
		}
		allPrice();
	})
	$(less).click(function(){
		var num = Number($(this).siblings('input').val());
		if(num > 1){
			num -= 1;
			$(this).siblings('input').val(num);
		}
		allPrice();
	})
	//这里是数量的代码
	//这里判断如果失去焦点的时候判读里面的数字
	$(add).siblings('input').blur(function(){
		if($(this).val() < 1 || $(this).val() > 3){
			$(this).val('1');
		}
		allPrice();
	})
}


//	-----------计算价格
//当我加载页面的时候，判断，是否选中了，如果选中了得话，在计算
//-------1.首先，我一上来是选中的状态，然后，我计算下他的价格
/*
 ----------$('.allPrice')//这是所有的商品总价
 ----------$('.allPrePrice')//这是所有的优惠价格
 ----------$('.endPrice')//这是最后的价格
*/
//所有的价格
function allPrice(){
	//
	var selectNum = $(".check-box :checkbox[checked=checked]").size();//这是选中的商品的个数
	$('.selectNum').html(selectNum);
	
	var allPrice = 0;//这是商品总价
	var allPrePrice = 0;//这是总共优惠的价格
	var AllTotalPrice = 0;//这是商品优惠之后，最终的价格
	//这里判断选中的个数，如果是0个的话，就让它们的最终价格为0
	if(!$(".check-box :checkbox[checked=checked]").size()){
		$('.allPrice').html('0.00');
		$('.allPrePrice').html('0.00');
		$('.AllTotalPrice').html('0.00');
	}
	$(".check-box :checkbox").each(function(){
		//这是获取当前商品的购买数量
		var num = $(this).parents('td.check-box')
				  .siblings('td').find('input[type=text]').val();
		//判断如果要是数量为空的话，那么都是0
		if(num == 0){
			$(this).parents('td.check-box').siblings('td.item-vcoin').html('0.00');
			$(this).parents('td.check-box').siblings('td.total-price').html('0.00');
			return;
		}
		if(!$(this).attr('checked')){
			//当前这个的单价
			var priceOnce = Number($(this).parents('td.check-box').siblings('td.priceOnce').html());
			//当前这个的优惠价格double()
			var prePriceOnce = parseFloat($(this).parents('td.check-box').siblings('td.prePrice').html());
			//这是单个商品优惠后的最终价格totalPrice
			var totalPrice = num * priceOnce - prePriceOnce;
			$(this).parents('td.check-box').siblings('td.item-vcoin').html(totalPrice.toFixed(2));
			$(this).parents('td.check-box').siblings('td.total-price').html(totalPrice.toFixed(2));
			return;
		}
		//-----然后这是选中的状态,就将所有的都写上
		//当前这个的单价
		var priceOnce = Number($(this).parents('td.check-box').siblings('td.priceOnce').html());
		//当前这个的优惠价格double()
		var prePriceOnce = parseFloat($(this).parents('td.check-box').siblings('td.prePrice').html());
		//这是单个商品优惠后的最终价格totalPrice
		var totalPrice = num * priceOnce - prePriceOnce;
		$(this).parents('td.check-box').siblings('td.item-vcoin').html(totalPrice.toFixed(2));
		$(this).parents('td.check-box').siblings('td.total-price').html(totalPrice.toFixed(2));
		
		//这是将计算后的值放到那个里面
		allPrice += priceOnce;
		allPrePrice += prePriceOnce;
		AllTotalPrice += totalPrice;
	})
	//然后将这个赋值
	$('.allPrice').html(allPrice.toFixed(2));
	$('.allPrePrice').html(allPrePrice.toFixed(2));
	$('.AllTotalPrice').html(AllTotalPrice.toFixed(2));
}



//这是写一个模态框

function alertDiv(title,content,yes,no,status) {
	var bodyHeight = $(window).height();
	var str = '<div class="dialog-container">';
		str += '<i class="icon icon-close"></i>';
		str += '<div class="dialog-title">';
		if(status == "success"){
			str += '<i class="icon icon-warning" style="background-position: 0 -57px;">';
		}else{
			str += '<i class="icon icon-warning">';
		}
		str +='</i>' + title +  '</div>';
		str += '<div class="dialog-content">';
		str += '<p>温馨提示:' + content +  '</p>';
		if(yes){//如果有yes
			if(no){//如果有yes 和 no 
				str += '<button class="btn btn-blue">' + yes +  '</button>';
				str += '<button class="btn btn-cancel">' + no +  '</button>';
			}else{//只有yes 没有no 
				str += '<button class="btn btn-blue">' + yes +  '</button>';
			}
		}else{//这是没有yes
			if(no){//这是没有yes 只有 no
				str += '<button class="btn btn-cancel">' + no +  '</button>';
			}
		}
	
		str += '</div></div>';
		str += '<div class="mask""></div>';
	//这是追加到页面当中去
	$(str).appendTo("body");

	//然后给他先设置上他的top为他高度的负数,只是最后为了让他从高度的负数那里下来
	$('.dialog-container').css("top",(-Number($('.dialog-container').height())));

	//这是设置他的样式
	//如果浏览器的高度小于他自己的高度，就让他top为0
	if(bodyHeight < $('.dialog-container').height()){
		$('.dialog-container').animate({"top":"0px"},500);
	}else{
		$('.dialog-container').animate({"top":Number(bodyHeight - $('.dialog-container').height()) / 2 - 50},500);
	}

	//在窗口变化的时候判断
	$(window).resize(function(){
		//如果浏览器的高度小于他自己的高度，就让他top为0
		if($(window).height() < $('.dialog-container').height()){
			$('.dialog-container').css("top","0px");
		}else{
			$('.dialog-container').css("top",Number($(window).height() - $('.dialog-container').height()) / 2 - 30);
		}
	});


	$(".btn-cancel,.icon-close").click(function () {
		var This = $(this);
		$('.dialog-container').animate({"top":"-500px"},500,function () {
			$('.dialog-container').remove();
		});
		setTimeout(function () {
			$('.mask').remove();
		},500)
	})

	//这里是只有yes 没有 no 的话，就让他点击关闭
	if(yes){
		if(!no){
			//这是如果只有一个的话，这个就是用来关闭的
			$('.btn-blue').click(function () {
				$('.dialog-container').animate({"top":"-500px"},500,function () {
					$('.dialog-container').remove();
				});
				setTimeout(function () {
					$('.mask').remove();
				},500)
			})
		}
	}
}
