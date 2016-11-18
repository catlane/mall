/*
 -----------------------------------------------------
 这是item中的代码
*/
$(function(){
	//------------------------------------icon-close
	//这是当我hover.btn-show-more他的时候,显示详情
	$('.btn-show-more').hover(function(){
		var height = $(this).offset().top;

		$('.installment-popup').fadeIn(200).css("top",height);
	})
	$('.installment-popup').hover(function(){
		$(this).fadeIn(200);
	},function(){
		$(this).fadeOut(200);
	})
	
	//这里是样品的颜色
//				版本
//				服务的选中"on"的状态
// 	on('.color-box li');
	$("ul.tags").delegate('li','click',function(event){

		if(!$(this).attr('class')){//这个的话就是没有类
			$(this).addClass('on').siblings().removeClass('on');
		}
	})
	$("ul.tags").delegate('li.on','click',function(event){
		//当我点击on的时候，让他去除on这个标签
		$(this).removeClass('on');
		//然后让所有的disabled移除disabled
		$("#prod-detail-form").find('li.disabled').removeClass('disabled');
		// //然后始终让第一行可以选择
		// $('#prod-detail-form').find('dd:first').find('li').removeClass('disabled');
	})
	//这是添加数量
	// num('#inc','#dec');
	
	
	//这里是当页面高度到达这里的时候，让他变成fixed
	var p = $('.prod-main-tab').offset().top;
	$(window).scroll(function(){
		var t = $(document.body).scrollTop();
		if(t > p){
			$('.prod-main-tab').addClass('fixed').css('position','fixed');
			$('.prod-main-tab button').css('display','block');
			$('.prod-main-tab .thumb-goods').css('display','block');
			$('.prod-main-info').css('padding-top','71px');
		}else{
			$('.prod-main-tab').removeClass('fixed').removeAttr('style');
			$('.prod-main-tab button').css('display','none');
			$('.prod-main-tab .thumb-goods').css('display','none');
			$('.prod-main-info').css('padding-top','0px');
		}
	})
	//--------------------------
	$('.fix li').click(function(){
		$(this).find('a').attr('href','script:;');//这是为了让点击这个的时候不刷新页面
//		这是获取他自己的id,因为这个id和他们所对应的table层的class是一样的,
		var className = $(this).attr('id')
		$('.'+className).addClass('prod-on').siblings().removeClass('prod-on');
		$(this).addClass('on').siblings().removeClass('on');
	})
	
	//这是关闭更多按钮
	$('.icon-close').click(function(){
		$(this).parents('div.installment-popup').fadeOut(200);
	})
})


//这是放大镜
window.onload = function(){
	/*1.首先获取对象*/
	var box = document.getElementById("box");
	var leftDiv = document.getElementById("left");
	var bottomDiv = document.getElementById("bottom");
	var rightDiv = document.getElementById("right");
	var big = document.getElementById("big");
	var move = document.getElementById("move");
	//下边是tag元素
	var leftA = leftDiv.getElementsByTagName('a');
	var bottomA = bottomDiv.getElementsByTagName('a');
	var rightA = rightDiv.getElementsByTagName('a');
	//这是要做当让下边的小图片和left中的图片一致
	for (var i = 0; i < bottomA.length; i++) {
		bottomA[i].index = i;
		bottomA[i].onmouseover = function(){
			for (var j = 0; j < bottomA.length; j++) {
				bottomA[j].setAttribute('class','');
				leftA[j].setAttribute('class','');
				rightA[j].setAttribute('class','');
			}
			this.setAttribute('class','hover');
			leftA[this.index].setAttribute('class','show');
			rightA[this.index].setAttribute('class','show');
		}
	}
	/*2.当我hover时,让上边的那个move框显示出来,让rightDiv显示出来*/
	big.onmouseover = function(){
		move.style.display = 'block';
		rightDiv.style.display ='block';
	}
	big.onmouseout = function(){
		move.style.display = 'none';
		rightDiv.style.display = 'none';
	}
	/*3.移动这个move框子*/
	big.onmousemove = function(ev){
		var ev = window.event || ev;
		//var left = ev.clientX - leftDiv.offsetLeft - move.offsetWidth/2 - box.offsetLeft;
		//var top = ev.clientY - leftDiv.offsetTop- move.offsetHeight/2 - box.offsetTop;
		//下边这样写是为了兼容，上边那样写的做法请看图
		var left = (ev.layerX || ev.offsetX) - move.offsetWidth/2;
		var top = (ev.layerY || ev.offsetX) - move.offsetHeight/2;
		if(left < 0){
			left = 0;
		}
		if(top < 0){
			top = 0;
		}
		var maxLeft = leftDiv.offsetWidth - move.offsetWidth;
		var maxTop = leftDiv.offsetHeight- move.offsetHeight;
		if(left > maxLeft){
			left = maxLeft;
		}
		if(top > maxTop){
			top = maxTop;
		}
		move.style.left = left + 'px';
		move.style.top = top + 'px';
		//开始做大图
		/*比例换算*/
		//先得到当前的这个大图
		var rightImage = rightDiv.getElementsByClassName('show')[0].children[0];
		var proX = left / (leftDiv.offsetWidth - move.offsetWidth);
		var proY = top / (leftDiv.offsetHeight - move.offsetHeight);
		
		var imgLeft = proX * (rightDiv.offsetWidth - rightImage.offsetWidth);
		var imgTop = proY * (rightDiv.offsetHeight - rightImage.offsetHeight);
		
		rightImage.style.left = imgLeft + 'px';
		rightImage.style.top = imgTop + 'px';
	}



	


}