$(function(){
//-------------这里是收货地址的js-------start----------------
	//1.当我点击添加/编辑收货地址的时候,让他显示出来,
	function show(obj){
		$("body").delegate(obj,"click",function(){
			$('.edit-box').slideDown(500);
			$('.no-address').css('display','none');
		})
		$('.btn-cancel').click(function(){
			$('.edit-box').slideUp(500);
			if(ltrim($('.common tbody').html()) == ''){
				$('.no-address').css('display','block');
			}
		})
	}
	show('.add-icon-open');
	show('.address-edit');
	//****************这里需要注意的是，当我点击修改时，要变化他们的旧数据
	//2.当我点击删除的时候，我删除当前这条数据
	$("body").delegate(".address-delete","click",function(){
		var This = $(this);
		var address_id = $(this).attr("address_id");
		alertDiv("删除地址提示","您确定删除这条地址么？删除之后不可恢复哦！","确定","取消","error");
		$(".btn-blue").click(function () {//这是当我点击确定之后
			// 1.ajax删除数据库中的数据
			$.post(Root + "/index.php?s=home/my/delAddress",{"address_id":address_id},function (res) {
				// 2.删除当前这条数据
				This.parents('tr.address-info').remove();
				//然后判断当前是否有收货地址，
				if(ltrim($('.common tbody').html()) == ''){//这是没有收货地址
					//然后就让他显示没有地址的那个
					$('.no-address').css('display','block');
					$('.address-box').css('display','none');//这里需要注意，在添加之后一定要让这个显示出来
				}
				//3.修改收货地址的数量
				var num = $(".module-title .left strong").html();
				$(".module-title .left strong").html(num-1)
				//3.然后隐藏这个alert
				$('.dialog-container').animate({"top":"-500px"},500,function () {
					$('.dialog-container').remove();
				});
				setTimeout(function () {
					$('.mask').remove();
				},500)
			},"json")
		})
	})

	//这是设为默认地址
	$('.common').delegate('.address','click',function(){
		var This = $(this);
		var address_id = $(this).attr("address_id");
		//首先发异步
		$.post(Root + "/index.php?s=home/my/editDefault",{"address_id":address_id},function (res) {
			//然后js添加按钮
			This.addClass('select-address');
			$('.address').not(This).removeClass('select-address');
			//然后,将当前这条记录移动到最前边
			var html = '<tr class="address-info">';
			html += This.parents('tr.address-info').html();
			html += '</tr>';
			This.parents('tr.address-info').remove();
			$('.common tbody').prepend(html);
		},"json")

	})
	
	
	
	
	//这里是去除左边的空格
	function ltrim(str){ //删除左边的空格
　　     return str.replace(/(^\s*)/g,"");
　　 }
	
//-------------这里是收货地址的js-------end------------------
})
