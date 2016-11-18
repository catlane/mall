$(function(){

	
	
	//这是shopping中添加减少
	// num('.add','.less');

	//这是删除当前这个商品
	$('.delThis').click(function(){
		var This = $(this);
		alertDiv("删除购物车提示","您确定删除么？删除之后不可恢复","确定","取消","error");
		$(".btn-blue").click(function () {
			//然后ajax提交数据，删除这个商品
			var id = new Array;
			id.push(This.parents("td").siblings('td.check-box').find('input[type=checkbox]').val());
			var ids = {};
			for(var i=0;i<id.length;i++)
			{
				ids[i]=id[i];
			}
			JSON.stringify(ids);  //结果：{'1':'a','2':'b','3':'c'}
			$.post(Root + "/index.php?s=home/shoppingcar/del",ids,function () {
				//然后将页面中的元素删除掉
				This.parents('tr').remove();
				allPrice();

				//这里判断下数据库中是否有数据，如果购物车的这个数据库中已经没有了数据的话，就让他显示空的那个css
				//因为不能判断count($shoppingCarData)，所以只能判断还剩下几行了
				var trs = $('.have-list').find('tbody').find('tr').length;
				if(trs == 0){//如果要是没有了的话，
					//就删除这个div
					$('.have-list').remove();

					$('<div class="no-result"><img src="resource/hdjs/home/other/shoppingcar/no-shopping.png" alt="" /> <p> 亲，您的购物车里还没有物品哦，赶紧去 <a href="'+ Root +  '/index.php?s=home/index/index">逛逛</a> 吧 </p> </div>').appendTo($('.prod-list'));
				}
				//这里让这个alertDiv关闭掉
				$('.dialog-container').animate({"top":"-500px"},500,function () {
					$('.dialog-container').remove();
				});
				setTimeout(function () {
					$('.mask').remove();
				},500)

			},'json')

		})
	})
	
	allPrice();//这个是让他一上来就计算他的价格
	allchk();//这个是让他一上来就判断选中状态
	
	
//	---------批量操作
	//这是当我单击全选的时候，
	$('.allCheckbox').click(function(){
		if(this.checked){
			$('.allCheckbox').prop("checked",true).attr('checked','checked');
			$(".check-box").find('input').prop("checked",true).attr('checked','checked');  
			allPrice();
		}else{
			$('.allCheckbox').removeAttr("checked",false); 
			$(".check-box").find('input').removeAttr("checked");
		}
		allPrice();
	})
	
	//这是当我点击单个checkbox的时候，判断是否满足全部选中的状态
	$(".check-box :checkbox").click(function(){
		if(this.checked){
			$(this).attr('checked','checked');
		}else{
			$(this).removeAttr('checked','checked');
		}
		allchk();
		allPrice();
	})

	//删除所有的商品
	$('.delSelect').click(function(){
		//先获取选中的
//		$('.check-box :checkbox[checked=checked]')//这是选中的元素
		//然后ajax提交数据，删除这个商品
		//然后将页面中的元素删除掉
		if($('.check-box :checkbox[checked=checked]').length == 0){
			alertDiv("删除购物车提示","你没有选择商品哦","","取消","error");
			return false;
		}

		alertDiv("删除购物车提示","您确定删除么？删除之后不可恢复","确定","取消","error");
		$(".btn-blue").click(function () {
			var id = new Array;
			$.each($('.check-box :checkbox[checked=checked]'),function (k,v) {
				id.push($(this).val())
			})
			var ids = {};
			for(var i=0;i<id.length;i++)
			{
				ids[i]=id[i];
			}
			JSON.stringify(ids);  //结果：{'1':'a','2':'b','3':'c'}
			$.post(Root + "/index.php?s=home/shoppingcar/del",ids,function () {
				$('.check-box :checkbox[checked=checked]').parents('tr').remove();
				allPrice();




				//这里判断下数据库中是否有数据，如果购物车的这个数据库中已经没有了数据的话，就让他显示空的那个css
				//因为不能判断count($shoppingCarData)，所以只能判断还剩下几行了
				var trs = $('.have-list').find('tbody').find('tr').length;
				if(trs == 0){//如果要是没有了的话，
					//就删除这个div
					$('.have-list').remove();

					$('<div class="no-result"><img src="resource/hdjs/home/other/shoppingcar/no-shopping.png" alt="" /> <p> 亲，您的购物车里还没有物品哦，赶紧去 <a href="' + Root+ '/index.php?s=home/index/index">逛逛</a> 吧 </p> </div>').appendTo($('.prod-list'));
				}

				//这里将这个div关闭掉

				$('.dialog-container').animate({"top":"-500px"},500,function () {
					$('.dialog-container').remove();
				});
				setTimeout(function () {
					$('.mask').remove();
				},500)

			},'json')



		})
	})
	
	//这里是单个移入收藏夹
	$('.collectThis').click(function(){
		var This = $(this);
		var commodity_id = $(this).attr("commodity_id");
		var car_id = $(this).attr("car_id");
		var num = Number($(this).parent("td").siblings("td").find(".number-box").find("input").val());
		var Allnum = Number($(".shopcart-num").html());
		//然后弹出一个模态框，显示添加成功
		alertDiv("移入收藏夹提示","移动后选中商品将不在购物车中显示","确定","取消","error");
		$(".btn-blue").click(function () {
			//写异步
			$.post(Root + "/index.php?s=home/shoppingcar/addKeep",{"commodity_id":commodity_id,"car_id":car_id},function (res) {
				if(res.valid){
					//然后将页面中的元素删除掉
					This.parents('tr').remove();
					allPrice();

					//这里判断下数据库中是否有数据，如果购物车的这个数据库中已经没有了数据的话，就让他显示空的那个css
					//因为不能判断count($shoppingCarData)，所以只能判断还剩下几行了
					var trs = $('.have-list').find('tbody').find('tr').length;
					if(trs == 0){//如果要是没有了的话，
						//就删除这个div
						$('.have-list').remove();

						$('<div class="no-result"><img src="resource/hdjs/home/other/shoppingcar/no-shopping.png" alt="" /> <p> 亲，您的购物车里还没有物品哦，赶紧去 <a href="'+ Root +  '/index.php?s=home/index/index">逛逛</a> 吧 </p> </div>').appendTo($('.prod-list'));
					}
					//这里让这个alertDiv关闭掉
					alertDiv("移入收藏夹提示","添加收藏成功","确定","","success");
					setTimeout(function () {
						$('.dialog-container').animate({"top":"-500px"},500,function () {
							$('.dialog-container').remove();
						});
						setTimeout(function () {
							$('.mask').remove();
						},300)
					},1500)
					//然后修改购物车数量
					$(".shopcart-num").html(Allnum-num);
				}else{
					alertDiv("移入收藏夹提示",res.message,"","关闭","error");
					setTimeout(function () {
						$('.dialog-container').animate({"top":"-500px"},500,function () {
							$('.dialog-container').remove();
						});
						setTimeout(function () {
							$('.mask').remove();
						},300)
					},1500)
				}
			})
		})

	})
	
	

	
	//这个是判断全选框的选中状态
	function allchk(){
		var chknum = $(".check-box :checkbox").size();//选项总个数 
	    var chk = 0; 
	    $(".check-box :checkbox").each(function () {
	        if($(this).attr("checked")=='checked'){
	            chk++;
	        } 
	    }); 
	    if(chknum==chk){//全选 
	        $(".allCheckbox").attr("checked",true).prop('checked','checked'); 
	    }else{//不全选 
	        $(".allCheckbox").removeAttr("checked"); 
	    }
	}
})
