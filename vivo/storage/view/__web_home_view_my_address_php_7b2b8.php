<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>vivo智能手机官方商城</title>
		<link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">
		<script>
			var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?11fa58260b76b6726f12b8c97924964a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();		</script>
		<script>
			var Root = "http://127.0.0.1/vivo";
		</script>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/master.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/my.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/my_address.css" />
		
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/my.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/area.js" type="text/javascript" charset="utf-8"></script>
					<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/YMDClass.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='f1b27c12b07034a38069ea237fd802f9'/><input type='hidden' name='__TOKEN__' value='f1b27c12b07034a38069ea237fd802f9'/><input type='hidden' name='__TOKEN__' value='f1b27c12b07034a38069ea237fd802f9'/></form>
				<script>
					$(function() {
						$('.searchForm').submit(function() {
							var searchKeywordStr = $(this).find("input[name=searchKeywordStr]").val();
							location.href = "http://127.0.0.1/vivo/index.php?s=home/product/search" + "&searchKeywordStr=" + searchKeywordStr;
							return false;
						})
					})
				</script>
				<a href="" class="close"></a>
			</div>
		</div>
		<header class="header">
			<div class="wrapper">
				<nav>
					<a href="http://127.0.0.1/vivo/index.php?s=home/index/index" class="logoImg">
						<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/logo.png" />
					</a>
					<ul class="nav">
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=2" category_id="2">手机</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=8" category_id="8">上衣</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=19" category_id="19">配件</a>
							</li>
											</ul>
					<script>
						$(function() {
							$('.nav li a').each(function(k, v) {
								var This = $(this);
								var thisCategory_id = 0; //这是获取的当前分类的ID
								$.post("http://127.0.0.1/vivo/index.php?s=home/common/is_category", {
									"category_id": thisCategory_id
								}, function(res) {
									if(This.attr('category_id') == res) {
										This.css({
											"background": "#008cd6",
											"color": "#fff"
										});
									}
									//第一，获取当前页面的category_id

									//	                        //如果当前这个循环的category_id == 当前这个页面的category_id的话，就给他一个类
									//	                        if($(this).attr('category_id') == $thisCategory_id){
									//	                            $(this).css({"background":"#008cd6","color":"#fff"});
									//	                        }
								}, "json")
							})
						})
					</script>
					<div class="search-user">
						<ul class="u">
							<li class="search">
								<a href="">
									<b></b>
								</a>
							</li>
							<li class="user">
								<a href="http://127.0.0.1/vivo/index.php?s=home/my/index">
									<b></b>
								</a>
								<div class="user-menu">
									<h1 class="member-center">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/information">
                                    <i></i>
                                    个人中心
                                </a>
                                
                                <span class="icon-angular"></span>
                            </h1>
									<h1 class="my-order">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/order">
                                    <i style="background-position: -48px 0;"></i>
                                    我的订单
                                </a>
                            </h1>
																		<h1 class="logout">
                                    <a href="script:;">
                                        <i style="background-position: -100px 0;"></i>
                                        退出登录
                                    </a>
                                </h1>
																	</div>
								<script>
									$(function() {
										$(".member-center").hover(function() {
											$(this).find("i").css("background-position", "0px -45px");
										}, function() {
											$(this).find("i").css("background-position", "0px 0px");
										})

										$(".my-order").hover(function() {
											$(this).find("i").css("background-position", "-48px -45px");
										}, function() {
											$(this).find("i").css("background-position", "-48px 0px");
										})

										$(".logout").hover(function() {
											$(this).find("i").css("background-position", "-100px -45px");
										}, function() {
											$(this).find("i").css("background-position", "-100px 0px");
										})

										$('.logout a').click(function() {
											alertDiv("退出", "确定退出么", "退出", "取消", "error");
											$(".btn-blue").click(function() {
												$.post("http://127.0.0.1/vivo/index.php?s=home/common/out", {
													"a": 1
												}, function(res) {
													location.href = "http://127.0.0.1/vivo/index.php?s=home/index/index";
												}, "json")
											})

											return false;
										})

									})
								</script>
							</li>
							<li class="shopCar">
								<a href="http://127.0.0.1/vivo/index.php?s=home/shoppingcar/shoppingcar">
									<b id="end"></b>
									<span class="shopcart-num">1</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--这里是子模板的内容start-->
		
    <div class="main">
        <div class="content">
            <div class="crumbs">
                您的位置是:<a href="http://127.0.0.1/vivo/index.php?s=home/index/index">首页</a>
                <b></b>
                <a href="<?php echo u('my/index')?>">会员中心</a><b></b>收货地址            </div>
        </div>
        <div class="content">
            <aside class="menu-bar">
                <ul class="portrait-box">
                    <li>
                        <a href="http://127.0.0.1/vivo/index.php?s=home/my/information" title="编辑资料">
                            <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/my/header_phone.jpg"/>
                        </a>
                    </li>
                    <li class="mem-name">
                        <i></i>
                                            </li>
                    <li class="vcoin-info">
                        我的V币:
                        <a>
                            <span class="red">0</span>
                        </a>
                        V币
                    </li>
                </ul>
                <dl class="menu">
                    <dt>
                        <i class="icon-deal"></i>
                        交易管理
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/order">我的订单</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/refund">退/换货</a></dd>

                    <dt>
                        <i class="icon-evaluation"></i>
                        我的账户
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/information">个人资料</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/address">收货地址</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/favorite">我的收藏</a></dd>
                </dl>
            </aside>
            
    <script type="text/javascript">
        $(function(){
            //初始化方法
            area.init('area');
            //修改的时候默认被选中效果
            area.selected('黑龙江','哈尔滨','道里区');
        })
    </script>
    <article class="c">
        <dl class="member-order-list">
            <dt class="module-title">
                <p class="left">
                    已有
                    <strong><?php echo $num?></strong>
                    收货地址
                    <span>（最多可添加10个收货地址）</span>
                </p>
                <p class="right">
                    <span class="add">
                        添加收货地址
                    </span>
                    <a class="add-icon-open"></a>
                </p>
            </dt>
            <?php if($num == 0){?>
                
                <div class="no-address" style="display: block;">
                    <img src="<?php echo __ROOT__?>/resource/hdjs/home/other/my/no-address-icon_d646c68.png" alt="">
                    <span>您还没有收货地址</span>
                </div>
            
               <?php }?>
            <div class="no-address">
                <img src="<?php echo __ROOT__?>/resource/hdjs/home/other/my/no-address-icon_d646c68.png" alt="">
                <span>您还没有收货地址</span>
            </div>
<!--            这是编辑收货地址start-->
            <dd class="edit-box">
                <p>编辑收货地址</p>
                <form action="script:;" method="post">
                    <fieldset>
                        <table>
                            <tbody>
                                <tr>
                                    <th>
                                        <strong>*</strong>收货地区
                                    </th>
                                    <td>
                                        <select name="address_area[]" id="area1"></select>
                                        <select name="address_area[]" id="area2"></select>
                                        <select name="address_area[]" id="area3"></select>
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>详细地址
                                    </th>
                                    <td>
                                        <input type="text" class="address" name="address_xxaddress" aria-required="true" aria-describedby="address-error" aria-invalid="true">
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>收货人姓名
                                    </th>
                                    <td>
                                        <input type="text" name="address_receiver" class="receiverName" aria-describedby="receiverName-error">
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>收货地址邮编
                                    </th>
                                    <td>
                                        <input type="text" placeholder="默认为000000" name="address_zipcode" class="receiverName" aria-describedby="receiverName-error">
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>手机
                                    </th>
                                    <td class="phone">
                                        <div class="p-mobile">
                                            <input type="tel" name="address_phone" id="mobilePhone" aria-required="true" class="error-style" aria-describedby="mobilePhone-error"><span id="mobilePhone-error" class="error-style"></span>
                                        </div>
                                        <div class="p-telephone">
                                            <span></span>
                                            <input type="tel" name="address_fixed" id="telPhone" class="valid">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="checkbox" id="default" name="address_default" checked="checked" value="1"><label>设为默认地址</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="确认" class="btn-blue confirm-btn">
                                        <input type="reset" value="取消" class="btn-cancel">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                <input type='hidden' name='__TOKEN__' value='f1b27c12b07034a38069ea237fd802f9'/></form>
            </dd>
<!--            这是编辑收货地址end-->
            <?php if($num != 0){?>
                
                <dd class="address-box">
                    <table class="common">
                        <thead>
                        <tr>
                            <th class="address" width="30%">地址</th>
                            <th class="name" width="20%">收货人</th>
                            <th class="phone" width="20%">联系电话</th>
                            <th class="operation" width="30%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ((array)$data as $key=>$value){?>
                                <tr class="address-info">
                                    <td>
                                        <?php foreach ((array)$value['address_area'] as $k=>$v){?>
                                            <span name="address.province"><?php echo $v?></span>
                                        <?php }?>
                                        <span name="address.address"><?php echo $value['address_xxaddress']?></span>
                                    </td>
                                    <td><span name="address.receiverName"><?php echo $value['address_receiver']?></span></td>
                                    <td>
                                        <span name="address.mobilePhone">
                                            <?php
                                                if($value['address_phone']){
                                                    echo $value['address_phone'];
                                                }else{
                                                    echo $value['address_fixed'];
                                                }
                                            ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="address-edit" address_id="<?php echo $value['address_id']?>">编辑</a>
                                        <span>|</span>
                                        <a class="delete address-delete" address_id="<?php echo $value['address_id']?>">删除</a>
                                        <span>|</span>
                                        <?php if($value['address_default'] == 1){?>
                <!--这就是默认收货地址-->
                                            <button class="select-address address" address_id="<?php echo $value['address_id']?>">默认地址</button>
                                        <?php }else{?>
                                            <button class="address" address_id="<?php echo $value['address_id']?>">默认地址</button>
                                        
               <?php }?>

                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </dd>
            
               <?php }?>
        </dl>
        <script>
            $(function () {
                //这里是当我点击的时候，判断我这是添加地址，还是修改地址
                $('.add-icon-open').click(function () {
                    //这是让他显示我这是添加收货地址还是修改收货地址
                    $('.edit-box p').html("添加收货地址");
                    //这是让他添加上这个类，到时候我好判断
                    $('.edit-box form').addClass('addForm').removeClass('editForm');

                    //然后判断他有没有隐藏域，有就删除了
                    if($("#address_id").length > 0){
                        $("#address_id").remove();
                    }
                })
                $("body").delegate(".address-edit","click",function(){
                    var address_id = $(this).attr("address_id");
                    //这是让他显示我这是添加收货地址还是修改收货地址
                    $('.edit-box p').html("修改收货地址");
                    //这是让他添加上这个类，到时候我好判断
                    $('.edit-box form').addClass('editForm').removeClass('addForm');
                    if($("#address_id").length > 0){
                        $("#address_id").val(address_id);
                    }else{
                        $(".edit-box .editForm").append("<input type='hidden' id='address_id' name='address_id' value='" + address_id + "'/>");
                    }

                    
                    //然后我异步将数据分配过去
                    $.post("<?php echo u('my/showAddress')?>",{"address_id":address_id},function (res) {
                        console.log(res.address_area[1])
                        //然后我分配
                        //这是地区
                        area.selected(res.address_area[0],res.address_area[1],res.address_area[2]);
                            
                        //这是详细地址
                            $("input[name=address_xxaddress]").val(res.address_xxaddress);
                        //这是收货人姓名
                            $("input[name=address_receiver]").val(res.address_receiver);
                        //这是收货人手机号码
                            $("input[name=address_phone]").val(res.address_phone);
                        //这是收货人固定电话
                            $("input[name=address_fixed]").val(res.address_fixed);
                        //这是收货地址邮编
                            $("input[name=address_zipcode]").val(res.address_zipcode);
                    },'json')
                    
                })



                //这里是添加地址时候的form提交
                $('body').delegate('.addForm','submit',function(){
                    var This = $(this);
                    var data = $(this).serialize();
                    $.post("<?php echo u('my/addAddress')?>",data,function (res) {
                        if(res.valid){//这里是如果要是提交成功的话
                            alertDiv('添加成功','您已添加成功一条地址','确定','','success');
                            //这是让他三秒后自动关闭
                            setTimeout(function () {
                                $('.dialog-container').animate({"top":"-500px"},500,function () {
                                    $('.dialog-container').remove();
                                });
                                setTimeout(function () {
                                    $('.mask').remove();
                                },500)
                            },3000);
                            //然后我组合字符串
                            var str = '<tr class="address-info">';
                                str += '<td>';
                                str += '<span name="address.province">' + $("#area1").val() + '</span>&nbsp;';
                                str += '<span name="address.province">' + $("#area2").val() + '</span>&nbsp;';
                                str += '<span name="address.address">' + $("#area3").val() + '</span>&nbsp;';
                                str += '<span name="address.address">' + $("input[name=address_xxaddress]").val() + '</span>';
                                str += '</td>';
                                str += '<td><span name="address.receiverName">' + $("input[name=address_receiver]").val() + '</span></td>';
                                str += '<td>';
                                str += '<span name="address.mobilePhone">';
                                if($("input[name=address_phone]").val() != ""){
                                    str += $("input[name=address_phone]").val();
                                }else{
                                    str += $("input[name=address_fixed]").val();
                                }
                                str += '</span>';
                                str += '</td>';
                                str += '<td>';
                                str += '<a class="address-edit" address_id="' + res.message + '">编辑</a>';
                                str += '&nbsp;<span>|</span>&nbsp;';
                                str += '<a class="delete address-delete" address_id="' + res.message + '">删除</a>';
                                str += '&nbsp;<span>|</span>&nbsp;';
                                if($('#default').is(':checked')){//这里判断是不是默认地址，如果是就添加上那个类
                                    str += '<button class="select-address address" address_id="' + res.message + '">默认地址</button>';
                                }else{//如果不是的话，就不添加
                                    str += '<button class="address" address_id="' + res.message + '">默认地址</button>';
                                }

                                str += '</td>';
                                str += '</tr>';

                            //然后让我的表格显示出来
                            $('.no-address').css('display','none');//这是让没有地址的那个图片显示出来
                            $('.address-box').css('display','block');//这是让表格显示出来

                            //然后判断我这个是不是默认地址
                            if($('#default').is(':checked')){//如果是默认地址的话，我就添加到最前边
                                //然后删除所有的默认地址的这个类
                                $.each($('body .select-address'),function (k,v) {
                                    $(this).removeClass('select-address');
                                })
                                $('.common tbody').prepend(str);//这是将这个添加到前边
                                //然后将所有的都变成不是默认地址
                                $.post("<?php echo u('checklist/editDefault')?>",{"address_id":res.message},function (res) {
                                },'json')


                            }else{//如果不是默认地址的话，那么我就添加到最后边去
                                $('.common tbody').append(str);
                            }
                            //然后关闭这个div
                            This.parents(".edit-box").slideUp(500);
                            //然后修改已有收货地址
                            var num = Number($('.module-title .left strong').html());
                            $('.module-title .left strong').html(num+1);
                            //然后将最后一个错误提示给关闭了
                            $("input[name=address_phone]").siblings('span').html("").attr('title',"");
                            document.getElementsByClassName("addForm")[0].reset();
                        }else{//这里是如果出错的话
                            //这里是超出最多地址
                            if(res.message.indexOf("已超过10条") != -1){
                                alertDiv("地址信息提示","您添加的地址已超出10条，请删除一些哦！",'','关闭','error');
                                setTimeout(function () {
                                    $('.dialog-container').animate({"top":"-500px"},500,function () {
                                        $('.dialog-container').remove();
                                    });
                                    setTimeout(function () {
                                        $('.mask').remove();
                                    },500)
                                },1500);
                                setTimeout(function () {
                                    This.parents(".edit-box").slideUp(500);
                                    document.getElementsByClassName("addForm")[0].reset();
                                })
                                return;
                            }


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
                            //这里是缺少详细地址
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


                        //这是清空表单元素
//                        document.getElementsByClassName("addAddress")[0].reset();
                    },'json')
                    return;
                })




                //这里是修改
                $('body').delegate('.editForm','submit',function(){
                    var This = $(this);
                    var data = $(this).serialize();
                    $.post("<?php echo u('my/editAddress')?>",data,function (res) {
                        if(res.valid){//这里是如果要是提交成功的话
                            alertDiv('修改成功','您已修改了该地址！','确定','','success');
                            //这是让他三秒后自动关闭
                            setTimeout(function () {
                                $('.dialog-container').animate({"top":"-500px"},500,function () {
                                    $('.dialog-container').remove();
                                });
                                setTimeout(function () {
                                    $('.mask').remove();
                                },3000)
                            },3000);
                            //然后我组合字符串
                            var str = '<tr class="address-info">';
                            str += '<td>';
                            str += '<span name="address.province">' + $("#area1").val() + '</span>&nbsp;';
                            str += '<span name="address.province">' + $("#area2").val() + '</span>&nbsp;';
                            str += '<span name="address.address">' + $("#area3").val() + '</span>&nbsp;';
                            str += '<span name="address.address">' + $("input[name=address_xxaddress]").val() + '</span>';
                            str += '</td>';
                            str += '<td><span name="address.receiverName">' + $("input[name=address_receiver]").val() + '</span></td>';
                            str += '<td>';
                            str += '<span name="address.mobilePhone">';
                            if($("input[name=address_phone]").val() != ""){
                                str += $("input[name=address_phone]").val();
                            }else{
                                str += $("input[name=address_fixed]").val();
                            }
                            str += '</span>';
                            str += '</td>';
                            str += '<td>';
                            str += '<a class="address-edit" address_id="' + res.message + '">编辑</a>';
                            str += '&nbsp;<span>|</span>&nbsp;';
                            str += '<a class="delete address-delete" address_id="' + res.message + '">删除</a>';
                            str += '&nbsp;<span>|</span>&nbsp;';
                            if($('#default').is(':checked')){//这里判断是不是默认地址，如果是就添加上那个类
                                str += '<button class="select-address address" address_id="' + res.message + '">默认地址</button>';
                            }else{//如果不是的话，就不添加
                                str += '<button class="address" address_id="' + res.message + '">默认地址</button>';
                            }

                            str += '</td>';
                            str += '</tr>';

                            //然后判断我这个是不是默认地址
                            if($('#default').is(':checked')){//如果是默认地址的话，我就添加到最前边
                                //然后删除掉当前这条数据
                                $.each($('.address-edit'),function (k,v) {
                                    //如果他要是等于这个id的话，我就删除了他
                                    if($(this).attr("address_id") == $("#address_id").val()){
                                        $(this).parents("tr.address-info").remove();
                                        return;
                                    }
                                })

                                //然后删除所有的默认地址的这个类
                                $.each($('body .select-address'),function (k,v) {
                                    $(this).removeClass('select-address');
                                })
                                $('.common tbody').prepend(str);//这是将这个添加到前边
                                //然后将所有的都变成不是默认地址
                                $.post("<?php echo u('checklist/editDefault')?>",{"address_id":res.message},function (res) {
                                },'json')


                            }else{//如果不是默认地址的话，那么我就添加到最后边去
                                var html = '';
                                html += '<td>';
                                html += '<span name="address.province">' + $("#area1").val() + '</span>&nbsp;';
                                html += '<span name="address.province">' + $("#area2").val() + '</span>&nbsp;';
                                html += '<span name="address.address">' + $("#area3").val() + '</span>&nbsp;';
                                html += '<span name="address.address">' + $("input[name=address_xxaddress]").val() + '</span>';
                                html += '</td>';
                                html += '<td><span name="address.receiverName">' + $("input[name=address_receiver]").val() + '</span></td>';
                                html += '<td>';
                                html += '<span name="address.mobilePhone">';
                                if($("input[name=address_phone]").val() != ""){
                                    html += $("input[name=address_phone]").val();
                                }else{
                                    html += $("input[name=address_fixed]").val();
                                }
                                html += '</span>';
                                html += '</td>';
                                html += '<td>';
                                html += '<a class="address-edit" address_id="' + res.message + '">编辑</a>';
                                html += '&nbsp;<span>|</span>&nbsp;';
                                html += '<a class="delete address-delete" address_id="' + res.message + '">删除</a>';
                                html += '&nbsp;<span>|</span>&nbsp;';
                                html += '<button class="address" address_id="' + res.message + '">默认地址</button>';
                                html += '</td>';
                                $.each($('.address-edit'),function (k,v) {
                                    //如果他要是等于这个id的话，我就修改他
                                    if($(this).attr("address_id") == $("#address_id").val()){
                                        $(this).parents("tr.address-info").html(html);
                                        return;
                                    }
                                })
                            }
                            //然后关闭这个div
                            This.parents(".edit-box").slideUp(500);
                            //然后将最后一个错误提示给关闭了
                            $("input[name=address_phone]").siblings('span').html("").attr('title',"");
                            document.getElementsByClassName("editForm")[0].reset();
                        }else{//这里是如果出错的话
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
                            //这里是缺少详细地址
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


                        //这是清空表单元素
//                        document.getElementsByClassName("addAddress")[0].reset();
                    },'json')
                    return;
                })


            })
        </script>
    </article>

        </div>

        <script>
            $(function () {
                $.each($(".menu dd"),function () {
                    console.log($(this).find("a").html())
                    if($(this).find("a").html() == "收货地址"){
                        $(this).addClass("on");
                    }
                })
            })
        </script>
    </div>

		<!--这里是子模板的内容end-->
		<footer>
			<div class="shop-agree">
				<div class="wrapper cl">
					<ul>
						<li>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">
								<b class="b1"></b>
								<p>
									<span>0</span> 运费购手机
								</p>
							</a>
						</li>
						<li>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">
								<b class="b2"></b>
								<p>
									<span>30</span> 天无理由退款
								</p>
							</a>
						</li>
						<li>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">
								<b class="b3"></b>
								<p>
									电子发票
								</p>
							</a>
						</li>
						<li>
							<a href="http://www.vivo.com.cn/service/map.html" target="_blank">
								<b class="b4"></b>
								<p>
									<span>380</span> 余家售后服务中心
								</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="shop-help">
				<div class="wrapper">
					<dl>
						<dt>
                    <b class="b1"></b>
                    购买流程
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/alipay" target="_blank">支付宝支付</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">发票说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/coupon" target="_blank">优惠券说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/huabei" target="_blank">花呗分期</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b2"></b>
                    配送方式
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport" target="_blank">配送方式</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">配送费用</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/sign" target="_blank">签收须知</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b3"></b>
                    服务支持
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/servicePromise" target="_blank">服务保证</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">售后服务</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/brokenScreen" target="_blank">碎屏保</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/extendService" target="_blank">手机延保</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b4"></b>
                    品牌服务
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/contactUs" target="_blank">联系我们</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b5"></b>
                    小V在线时段
                </dt>
						<dd>周一至周五 08:00-21:00</dd>
						<dd>周六、周日 09:00-18:00</dd>
						<dd class="online-service">
							<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" target="_blank">
								<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/online-service.png" />
							</a>
						</dd>
					</dl>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="wrapper">
					<div class="sns-box">
						成为vivo粉丝:
						<a href="" class="a1"><b></b></a>
						<a href="" class="a2"><b></b></a>
						<a href="" class="a3"><b></b></a>
						<a href="" class="a4">
							<b></b>
							<div>
								<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" />
								<em></em>
							</div>
						</a>
					</div>
					<div class="copy-info">
						<a href="" class="footer-logo"></a>
						Copyright ©2011-2016 广东步步高电子工业有限公司 						<br /> 版权所有 保留一切权利粤粤ICP备05100288号 |
						<a href="http://www.miitbeian.gov.cn/">粤ICP备05100288号</a>
					</div>
				</div>
			</div>
		</footer>
		<div class="side-bar">
			<ul>

				<li>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" class="service" target="_blank">
						<div>
							在线客服
						</div>
					</a>
				</li>
				<li>
					<a href="" class="qrcode">
						<div>
							<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" alt="" />
							<p>
								支付宝扫码<br />关注最新活动福利
							</p>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="feedback">
						<div>
							意见反馈
						</div>
					</a>
					<script type="text/javascript">
						$('.feedback').click(function(){
							alertDiv("意见反馈提醒","您如果需要什么意见，可以通过在线客服反馈哦!","关闭","","success")
							return false;
						})
					</script>
				</li>
				<li>
					<a href="" class="backtop">
						<div>
							返回顶部
						</div>
					</a>
				</li>
			</ul>
		</div>
	</body>

</html>


