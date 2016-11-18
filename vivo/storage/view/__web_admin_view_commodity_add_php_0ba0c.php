<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>网站后台管理系统  </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/ace.min.css" />
		<link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/css/style.css"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/ace-extra.min.js"></script>
		<!--[if lt IE 9]>
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/html5shiv.js"></script>
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/respond.min.js"></script>
		<![endif]-->
        <!--[if !IE]> -->
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/js/jquery-1.9.1.min.js"></script>
		<!-- <![endif]-->
		<!--[if IE]>
         <script type="text/javascript">window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");</script>
        <![endif]-->
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/bootstrap.min.js"></script>
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/typeahead-bs2.min.js"></script>
		<!--[if lte IE 8]>
		  <script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/ace-elements.min.js"></script>
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/js/ace.min.js"></script>
        <script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>
		<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>
        

<script type="text/javascript">
 $(function(){
 var cid = $('#nav_list> li>.submenu');
	  cid.each(function(i){
       $(this).attr('id',"Sort_link_"+i);

    })
 })
 jQuery(document).ready(function(){
    $.each($(".submenu"),function(){
	var $aobjs=$(this).children("li");
	var rowCount=$aobjs.size();
	var divHeigth=$(this).height();
    $aobjs.height(divHeigth/rowCount);
  });
    //初始化宽度、高度
    $("#main-container").height($(window).height()-76);
	$("#iframe").height($(window).height()-116);
	 $('#iframe').width($('.main-content').width());
	$(".sidebar").height($(window).height()-99);
    var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
	$(".submenu").height();
	$("#nav_list").children(".submenu").css("height",thisHeight);

    //当文档窗口发生改变时 触发
    $(window).resize(function(){
		$("#main-container").height($(window).height()-76);
		$("#iframe").height($(window).height()-116);
		$(".sidebar").height($(window).height()-99);

		var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
		$(".submenu").height();
		$("#nav_list").children(".submenu").css("height",thisHeight);
  });

//然后就是当他变化的时候，$('#sidebar')
	 $('#sidebar-collapse').click(function () {
		 $('#iframe').width($('.main-content').width());
	 })

//    $(".iframeurl").click(function(){
//                var cid = $(this).attr("name");//这是获取到iframe的src将要跳转的地址
//				var cname = $(this).attr("title");//这是写获取到字，用来做当前地址
//                $("#iframe").attr("src",cid).ready();//
//				$("#Bcrumbs").attr("href",cid).ready();
//				$(".Current_page a").attr('href',cid).ready();//这是将写当前地址的跳转地址
//                $(".Current_page").attr('name',cid);//
//				$(".Current_page").html(cname).css({"color":"#333333","cursor":"default"}).ready();
//				$("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display","none").ready();
//				$("#parentIfour").html(''). css("display","none").ready();
//      });


});

//jQuery( document).ready(function(){
//	  $("#submit").click(function(){
//	// var num=0;
//     var str="";
//     $("input[type$='password']").each(function(n){
//          if($(this).val()=="")
//          {
//              // num++;
//			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
//                title: '提示框',
//				icon:0,
//          });
//             // layer.msg(str+=""+$(this).attr("name")+"不能为空！\r\n");
//             layer.close(index);
//          }
//     });
//})
//	});
/*********************点击事件*********************/
$( document).ready(function(){
  $('#nav_list').find('li.home').click(function(){
	$('#nav_list').find('li.home').removeClass('active');
	$(this).addClass('active');
  });


//时间设置
  function currentTime(){
    var d=new Date(),str='';
    str+=d.getFullYear()+'年';
    str+=d.getMonth() + 1+'月';
    str+=d.getDate()+'日';
    str+=d.getHours()+'时';
    str+=d.getMinutes()+'分';
    str+= d.getSeconds()+'秒';
    return str;
}
setInterval(function(){$('#time').html(currentTime)},1000);
//修改密码
$('.change_Password').on('click', function(){
    layer.open({
    type: 1,
	title:'修改密码',
	area: ['300px','300px'],
	shadeClose: true,
	content: $('#change_Pass'),
	btn:['确认修改'],
	yes:function(index, layero){
		   if ($("#password").val()==""){
			  layer.alert('原密码不能为空!',{
              title: '提示框',
				icon:0,

			 });
			return false;
          }
		  if ($("#Nes_pas").val()==""){
			  layer.alert('新密码不能为空!',{
              title: '提示框',
				icon:0,

			 });
			return false;
          }

		  if ($("#c_mew_pas").val()==""){
			  layer.alert('确认新密码不能为空!',{
              title: '提示框',
				icon:0,

			 });
			return false;
          }
		    if(!$("#c_mew_pas").val || $("#c_mew_pas").val() != $("#Nes_pas").val() )
        {
            layer.alert('密码不一致!',{
              title: '提示框',
				icon:0,

			 });
			 return false;
        }
		 else{
			  layer.alert('修改成功！',{
               title: '提示框',
			icon:1,
			  });
			  layer.close(index);
		  }
	}
    });
});
  $('#Exit_system').on('click', function(){
      layer.confirm('是否确定退出系统？', {
    	 btn: ['是','否'] ,//按钮
	 	icon:2,
    	},
	function(){

	  location.href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/login/quit";
    });
});
})
</script>
	</head>
	<body>
		<div class="navbar navbar-default" id="navbar">
        <script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>					
						<img src="http://127.0.0.1/vivo1/vivo/web/admin/view/images/logo.png">
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
			   <div class="navbar-header pull-right" role="navigation">
               <ul class="nav ace-nav">	
                <li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span  class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small><i class="admin_username">杨宇辉</i>	</span>
								<i class="icon-caret-down"></i>
							</a>
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li><a href="#"><i class="icon-cog"></i>设置</a></li>
								<li><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/admininfo/index"><i class="icon-user"></i>个人资料</a></li>
								<li class="divider"></li>
								<li><a href="javascript:ovid(0)" id="Exit_system"><i class="icon-off"></i>退出</a></li>
							</ul>
						</li>
	                   <li class="purple">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-bell-alt"></i><span class="badge badge-important">8</span></a>
							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header"><i class="icon-warning-sign"></i>8条通知</li>
                            <li>
                              <a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

					
					</ul>
                <!-- <div class="right_info">

                   <div class="get_time" ><span id="time" class="time"></span>欢迎光临,管理员</span></div>
					<ul class="nav ace-nav">
						<li><a href="javascript:ovid(0)" class="change_Password">修改密码</a></li>
                        <li><a href="javascript:ovid(0)" id="Exit_system">退出系统</a></li>

					</ul>
				</div>-->
                </div>
			</div>
		</div>
		<div class="main-container" id="main-container">
        <script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				<div class="sidebar" id="sidebar">
<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>
					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
                     <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						网站后台管理系统  
						</div>
						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>
							<span class="btn btn-info"></span>
							<span class="btn btn-warning"></span>
							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->
					<ul class="nav nav-list" id="nav_list">
				     <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/index/index" name="" class="iframeurl" title=""><i class="icon-dashboard"></i><span class="menu-text"> 系统首页 </span></a></li>
                     <li><a href="#" class="dropdown-toggle"><i class="icon-desktop"></i><span class="menu-text"> 产品管理 </span><b class="arrow icon-angle-down"></b></a>
					   <ul class="submenu">
						 <li class="home"><a  href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/brands/index" name="Brand_Manage.html" title="品牌管理"  class="iframeurl"><i class="icon-double-angle-right"></i>品牌管理</a></li>
						 <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/category/index" name="http://127.0.0.1/vivo1/vivo/index.php?s=admin/category/index" title="分类管理"  class="iframeurl"><i class="icon-double-angle-right"></i>分类管理</a></li>
						 <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/type/index" name="http://127.0.0.1/vivo1/vivo/index.php?s=admin/type/index" title="类型管理"  class="iframeurl"><i class="icon-double-angle-right"></i>类型管理</a></li>
						   <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/commodity/index" name="http://127.0.0.1/vivo1/vivo/index.php?s=admin/commodity/index" title="商品管理"  class="iframeurl"><i class="icon-double-angle-right"></i>商品管理</a></li>
						</ul>
					</li>
					<li>
					<a href="#" class="dropdown-toggle"><i class="icon-picture "></i><span class="menu-text"> 图片管理 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
						<li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/Advertising/index" name="advertising.html" title="广告管理" class="iframeurl"><i class="icon-double-angle-right"></i>广告管理</a></li>
							</ul>
						</li>
					<li>
					<a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 交易管理 </span><b class="arrow icon-angle-down"></b></a>
                    <ul class="submenu">
                    <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/transaction/index" name=".html" title="交易信息"  class="iframeurl"><i class="icon-double-angle-right"></i>交易信息</a></li>
                    <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/orderform/index" name="" title="订单管理"  class="iframeurl"><i class="icon-double-angle-right"></i>订单管理</a></li>
					<li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/returns/index" name="" title="退/换货管理"  class="iframeurl"><i class="icon-double-angle-right"></i>退/换货管理</a></li>
                   </ul>
				  </li>
                  <!--<li>-->
					<!--<a href="#" class="dropdown-toggle"><i class="icon-user"></i><span class="menu-text"> 会员管理 </span><b class="arrow icon-angle-down"></b></a>-->
                    <!--<ul class="submenu">-->
                    <!--<li class="home"><a href="javascript:void(0)" name="user_list.html" title="会员列表"  class="iframeurl"><i class="icon-double-angle-right"></i>会员列表</a></li>-->
                    <!--<li class="home"><a href="javascript:void(0)" name="member-Grading.html" title="等级管理"  class="iframeurl"><i class="icon-double-angle-right"></i>等级管理</a></li>-->
                    <!--<li class="home"><a href="javascript:void(0)" name="integration.html" title="会员记录管理"  class="iframeurl"><i class="icon-double-angle-right"></i>会员记录管理</a></li>-->

                   <!--</ul>-->
				  <!--</li>-->
						<!--<li><a href="#" class="dropdown-toggle"><i class="icon-edit"></i><span class="menu-text"> 消息管理 </span><b class="arrow icon-angle-down"></b></a>-->
							<!--<ul class="submenu">-->
								<!--<li class="home"><a href="javascript:void(0)" name="Guestbook.html" title="留言列表" class="iframeurl"><i class="icon-double-angle-right"></i>留言列表</a></li>-->
                                <!--<li class="home"><a href="javascript:void(0)" name="Feedback.html" title="意见反馈" class="iframeurl"><i class="icon-double-angle-right"></i>意见反馈</a></li>-->
							<!--</ul>-->
						<!--</li>-->
						<!--<li><a href="#" class="dropdown-toggle"><i class="icon-edit"></i><span class="menu-text"> 文章管理 </span><b class="arrow icon-angle-down"></b></a>-->
							<!--<ul class="submenu">-->
								<!--<li class="home"><a href="javascript:void(0)" name="Guestbook.html" title="文章列表" class="iframeurl"><i class="icon-double-angle-right"></i>文章列表</a></li>-->
                                <!--<li class="home"><a href="javascript:void(0)" name="Feedback.html" title="分类分类" class="iframeurl"><i class="icon-double-angle-right"></i>分类分类</a></li>-->
							<!--</ul>-->
						<!--</li>-->
                        	<li><a href="#" class="dropdown-toggle"><i class="icon-cogs"></i><span class="menu-text"> 系统管理 </span><b class="arrow icon-angle-down"></b></a>
							<ul class="submenu">
								<li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/systemSetting/index" name="" title="系统设置" class="iframeurl"><i class="icon-double-angle-right"></i>系统设置</a></li>
								<!--<li class="home"><a href="javascript:void(0)" name="菜单管理.html" title="栏目管理" class="iframeurl"><i class="icon-double-angle-right"></i>栏目管理</a></li>-->
							<!---->
                                <!--<li class="home"><a href="javascript:void(0)" name="用户管理.html" title="系统日志" class="iframeurl"><i class="icon-double-angle-right"></i>系统日志</a></li>-->
							</ul>
						</li>
                        <li><a href="#" class="dropdown-toggle"><i class="icon-group"></i><span class="menu-text"> 管理员管理 </span><b class="arrow icon-angle-down"></b></a>
							<ul class="submenu">
							
								<li class="home"><a href="javascript:void(0)" name="admin_Competence.html" title="权限管理"  class="iframeurl"><i class="icon-double-angle-right"></i>权限管理</a></li>
                                <li class="home"><a href="javascript:void(0)" name="administrator.html" title="管理员列表" class="iframeurl"><i class="icon-double-angle-right"></i>管理员列表</a></li>
								  <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/admininfo/index" name="admin_info.html" title="个人信息" class="iframeurl"><i class="icon-double-angle-right"></i>个人信息</a></li>
							</ul>
						</li>
					</ul>
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>
                    <script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
				<div class="main-content">
                <script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

                    
                 <!--<iframe id="iframe" style="border:0; width:100%; background-color:#FFF;"name="iframe" frameborder="0" src="http://127.0.0.1/vivo1/vivo/web/admin/view/home.html">  </iframe>-->
					<div id="iframe" style="border:0; width:1150px; background-color:#FFF;overflow: hidden">
						

        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/js/html5.js"></script>
        <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/js/PIE_IE678.js"></script>
        <![endif]-->
        <link href="<?php echo __ROOT__?>/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
        <!--[if IE 7]>
        <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->
        <link href="<?php echo __ROOT__?>/web/admin/view/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo __ROOT__?>/web/admin/view/Widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />


        <!--这是上传图片-->
        <script src="<?php echo __ROOT__?>/web/admin/view/js/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/web/admin/view/css/uploadify.css">


    <style>
        input.input-text{
            vertical-align: bottom;
        }
    </style>
    <div class="clearfix" id="add_picture">
        <div class="page_right_style">
            <div class="type_title">添加商品</div>
            <form action="script:;" method="post" class="form form-horizontal" id="form-article-add">
                <div class="clearfix cl">
                    <label class="form-label col-2"><span class="c-red">*</span>商品名称：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="" placeholder="" id="" name="commodity_name"></div>
                </div>
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品标题：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="" placeholder="" id="" name="commodity_title"></div>
                </div>
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品货号：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="" placeholder="" id="" name="commodity_num"></div>
                </div>

                <div class=" clearfix cl">
                    <div class="Add_p_s">
                        <label class="form-label col-2">单位：</label>
                        <div class="formControls col-2">
                            <input type="text" class="input-text" value="" placeholder="商品单位" id="" name="commodity_unit">
                        </div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">市场价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="市场价格" id="" name="commodity_market_price" >元</div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">商城价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="商城价格" id="" name="commodity_mall_price" >元</div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">总库存：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="总库存" id="" name="commodity_all_stock" ></div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">点击率：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="点击率" id="" name="commodity_click"></div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">品牌：</label>
                        <div class="formControls col-2">
                            <span class="select-box">
                                <select class="select" name="brands_brands_id">
                                    <option value="0">请选择</option>
                                    <?php foreach ((array)$brandData as $key=>$value){?>
                                        <option value="<?php echo $value['brands_id']?>"><?php echo $value['brands_name']?></option>
                                    <?php }?>
                                </select>
				            </span>
                        </div>
                    </div>
                    <div class="Add_p_s">
                        <label class="form-label col-2">分类：</label>
                        <div class="formControls col-2">
                            <span class="select-box">
                                <select class="select category" name="category_id">
                                    <option value="0">请选择</option>
                                    <?php foreach ((array)$cateData as $key=>$value){?>
                                        <option value="<?php echo $value['category_id']?>" category_pid = "<?php echo $value['category_pid']?>"><?php echo $value['_category_name']?></option>
                                    <?php }?>
                                </select>
				            </span>
                        </div>
                    </div>
                </div>

<!--                这是商品属性-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品属性：</label>
                    <div class="formControls col-10" id="attr">
                        <table class="table table-hover">
                            <tr>
                                <td>...</td>
                                <td colspan="2">...</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div>
                </div>
<!--                这是商品规格-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品规格：</label>
                    <div class="formControls col-10" id="norm">
                        <table class="table table-hover">
                            <tr>
                                <td>...</td>
                                <td colspan="2">...</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--上传图片start-->
                <div class="clearfix cl">
                    <label class="form-label col-2">列表图片：</label>
                    <div class="formControls col-10" style="position: relative">
                            <input type="text" class="form-control" style="margin-left: 0;width: 70%;float: left;" id="commodity_list_img" name="commodity_list_img" readonly="" value="" style="padding: 0 10px">
                            <div style="position: absolute;right: 10%;">
                                <div id="queue"></div>
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                            </div>
                    </div>
                </div>

                <div class="clearfix cl ">
                    <label class="form-label col-2">图片展示：</label>
                        <div class="input-group listImg" style="margin-top:5px;margin-left: 10px;float: left;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgOnce(this)">×</em>
                        </div>
                </div>
                <!--上传图片end-->

                <!--上传图片start-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品图册：</label>
                    <div class="formControls col-10" style="position: relative">
                        <input type="text" class="form-control" style="margin-left: 0;width: 70%;float: left;" id="many_image" name="many_image" readonly="" value="" style="padding: 0 10px">
                        <div style="position: absolute;right: 10%;">
                            <div id="queue"></div>
                            <input id="many_image_upload" name="many_image_upload" type="file" multiple="true">
                        </div>
                    </div>
                </div>

                <div class="clearfix cl" manyImg>
                    <label class="form-label col-2">图片展示：</label>
                    <div class="manyImg">
                        <div class="input-group" style="margin-top:5px;margin-left: 10px;float: left;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail many_img" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgMany(this)">×</em>
                        </div>
                    </div>
                </div>
                <!--上传图片end-->




                <div class="clearfix cl">
                    <label class="form-label col-2">商品详情：</label>
                    <div class="formControls col-10">
                        <script id="about_commodity_about" name="about_commodity_about" type="text/plain" style="width:100%;height:400px;"></script>
                    </div>
                </div>
                <div class="clearfix cl">
                    <label class="form-label col-2">售后服务：</label>
                    <div class="formControls col-10">
                        <script id="about_commodity_afterMarket" name="about_commodity_afterMarket" type="text/plain" style="width:100%;height:400px;"></script>
                    </div>
                </div>
                <div class="clearfix cl">
                    <label class="form-label col-2">允许评论：</label>
                    <div class="formControls col-2 skin-minimal">
                        <div class="check-box" style=" margin-top:9px"><input type="checkbox" id="checkbox-1"><label for="checkbox-1">&nbsp;</label></div>
                    </div>
                </div>
                <div class="clearfix cl">
                    <div class="Button_operation">
                        <button class="btn btn-primary radius submit" type="submit"><i class="icon-save "></i>保存并提交审核</button>
                        <button onClick="article_save();" class="btn btn-secondary  btn-warning" type="button"><i class="icon-save"></i>保存草稿</button>
                        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                    </div>
                </div>
            <input type='hidden' name='__TOKEN__' value='e39dadce697a8248b320fb4cfe29c357'/></form>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/Validform/5.3.2/Validform.min.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
    <script src="<?php echo __ROOT__?>/web/admin/view/js/lrtk.js" type="text/javascript" ></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/js/H-ui.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/js/H-ui.admin.js"></script>
    <script>

        $( document).ready(function(){
//初始化宽度、高度
            $(".page_right_style").height($("#iframe").height());
            $(".page_right_style").width($("#iframe").width());
            //当文档窗口发生改变时 触发
            $(window).resize(function(){
                $(".page_right_style").height($(window).height());
                $(".page_right_style").width($("#iframe").width());
            });
        });
        //这是商品详情
        $(function(){
            var about_commodity_about = UE.getEditor('about_commodity_about');
        });
        //这是售后服务
        $(function(){
            var about_commodity_afterMarket = UE.getEditor('about_commodity_afterMarket');
        });
    </script>


    <script>
//        这是当我点击分类的时候，然后我异步变化他所对应的类型属性以及规格
        $('.category').change(function () {
            var category_id = $(this).val();
            var category_pid = $(this).find("option:selected").attr('category_pid');
            var attr = '<table class="table table-hover">';
            var norm = '<table class="table table-hover">';
            if(category_pid == 0){
                layer.alert("顶级分类不允许添加商品",{
                    title: '提示框',
                    icon:0,
                });
                $(this).val(0);
                return false;
            }
            $.post("<?php echo u('commodity/changeType')?>",{'category_id':category_id},function(typeData){
                $.each(typeData,function (k,v) {
                    if(v.type_attr_type == 0){//就是属性
                        attr += '<tr><td>' + v.type_attr_name + '</td><td><select name="attr[' + v.type_attr_id + ']"><option value="0">请选择</option>';
                        $.each(v.type_attr_value,function (kk,vv) {
                            attr += '<option value="' + vv +'">' + vv +'</option>';
                        })
                        attr+= '</select></td></tr>';
                        attr += '<input type="hidden" name="type_id" value="' + v.type_type_id +'" />';
                    }else{//就是规格
                        norm += '<tr><td>' + v.type_attr_name + '</td><td><select name="spec[' + v.type_attr_id +'][value][]"><option value="0">请选择</option>';
                        $.each(v.type_attr_value,function (kk,vv) {
                            norm += '<option value="' + vv +'">' + vv +'</option>';
                        })
                        norm+= '</select></td>';
                        norm += '<td><input name="spec[' + v.type_attr_id +'][addPrice][]" value="0" placeholder="请输入附加价格" /></td>';
                        norm += '<td><button type="button" class="btn btn-primary addNorm">添加规格</button></td>';
                        norm += '</tr>';
                		norm += '<input type="hidden" name="type_id" value="' + v.type_type_id +'" />';
                    }
                })



                attr += '</table>';
                norm += '</table>';
                $('#attr').html(attr);
                $('#norm').html(norm);
            },'json')
        })
    </script>
    <script>
        $(function () {
            $('#norm').delegate('.addNorm','click',function () {
                //首先复制一行
                var tr = $(this).parents('tr').clone();
                tr.find('.addNorm').attr('class','btn btn-danger delNorm').html('删除规格');
                $(this).parents('tr').after(tr);
            })
            $('#norm').delegate('.delNorm','click',function () {
                //首先删除当前一行
                $(this).parents('tr').remove();
            })
        })
    </script>
<!--    这是上传图片,列表图*********many_image_upload-->
    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#file_upload').uploadify({
                'formData'     : {
                    'buttonClass' : 'some-class',
                    'successTimeout' : 10,
                    'timestamp' : '<?php echo $timestamp;?>',
                    'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                },
                'swf'      : '<?php echo __ROOT__?>/web/admin/view/uploadify.swf',
                'uploader' : "<?php echo u('commodity/img')?>",
                'buttonText' : '选择文件',
//            'uploadLimit' : 10,//文件上传数量
                'onUploadSuccess' : function(file, data, response) {
                    data = $.parseJSON(data);
                    $('.listImg img').attr('src',"<?php echo __ROOT__?>/" + data.path);
                    $('#commodity_list_img').val(data.path);
                },

            });
        });
        function removeImgOnce(obj) {
            var src = $(obj).parent().prev().find('input').val();
            if(src == 'resource/images/nopic.jpg'){
                return false;
            }
            $.post("<?php echo u('commodity/delImg')?>",{'src':src},function () {
            },'json')
            $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
            $("#commodity_list_img").val('');
        }
    </script>


    <!--    这是上传图片,多张图片上传*********-->
    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#many_image_upload').uploadify({
                'formData'     : {
                    'buttonClass' : 'some-class',
                    'successTimeout' : 10,
                    'timestamp' : '<?php echo $timestamp;?>',
                    'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                },
                'swf'      : '<?php echo __ROOT__?>/web/admin/view/uploadify.swf',
                'uploader' : "<?php echo u('commodity/img')?>",
                'buttonText' : '选择文件',
//            'uploadLimit' : 10,//文件上传数量
                'onUploadSuccess' : function(file, data, response) {
                    var img = $('div.manyImg').html();
                    var many_path = '';
                    if(img.indexOf('resource/images/nopic.jpg') != -1){
                        //就说明存在
                        img = '';
                    }
                    data = $.parseJSON(data);
                    img += '<div class="input-group" style="margin-top:5px;margin-left: 10px;float: left;">';
                    img += '<img src="' + data.path +'" class="img-responsive img-thumbnail many_img" width="150">';
                    img += '<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgMany(this)">×</em>';
                    img += '</div>';
                    $('.manyImg').html(img);
                    $('.manyImg .many_img').each(function(k,v){
                        many_path += $(this).attr('src') + '|';
                    })
                    $('#many_image').val(many_path);
                },

            });
        });
        function removeImgMany(obj) {
            //这是获取到当前删除图片的路径
            var src = $(obj).siblings('img').attr('src');
            if(src == 'resource/images/nopic.jpg'){
                return false;
            }
            $.post("<?php echo u('commodity/delImg')?>",{'src':src},function () {
            },'json')
            var many_img = '';
            if($('.manyImg .img-responsive').size() > 1){//如果大于1，就删除
                $(obj).parents('.input-group').remove();
                $('.many_img').each(function(k,v){
	        		many_img += $(this).attr('src');
	        	})
            }else{//小于1，就替换路径
            	many_img = '';
                $(obj).siblings('img').attr('src', 'resource/images/nopic.jpg');
                //然后从text中那里面删除，
            }
           //然后删除当前图片的路径从字符串当中
			$('#many_image').val(many_img);        	
        }
    </script>
<!--    这是表单提交,ajax异步提交-->
    <script>
        $('.submit').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("<?php echo u('commodity/add')?>",data,function (res) {
                if(res.valid){
                    layer.alert('添加成功',{
                        title:'提示框',
                        icon:1,
                        yes:function () {
                            location.href = "<?php echo u('commodity/index')?>";
                        }
                    })
                }else{
                    layer.alert(res.message,{
                        title: '提示框',
                        icon:0,
                    })
                }
            },'json')
        })
    </script>

					</div>
					<!--id="iframe" style="border:0; width:100%; background-color:#FFF;"-->
<!-- /.page-content -->
				</div><!-- /.main-content -->	
                
                  <div class="ace-settings-container" id="ace-settings-container" style="z-index:999;">
                      <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                          <i class="icon-cog bigger-150"></i>
                      </div>
  
                      <div class="ace-settings-box" id="ace-settings-box">
                          <div>
                              <div class="pull-left">
                                  <select id="skin-colorpicker" class="hide">
                                      <option data-skin="default" value="#438EB9">#438EB9</option>
                                      <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                      <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                      <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                  </select>
                              </div>
                              <span>&nbsp; 选择皮肤</span>
                          </div>
  
                          <div>
                              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                              <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                          </div>
  
                          <div>
                              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                              <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                          </div>
  
                          <div>
                              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                              <label class="lbl" for="ace-settings-add-container">
                                  切换窄屏
                                  <b></b>
                              </label>
                          </div>
                      </div>
                  </div><!-- /#ace-settings-container -->		
	</div><!-- /.main-container-inner -->
			
		</div>
         <!--底部样式-->
       
         <div class="footer_style" id="footerstyle">
          <p class="l_f">版权所有：北京四美软件  京ICP备11011739号</p>
          <p class="r_f">地址：北京市朝阳区孙河顺白路12好  邮编：210011 技术支持：杨宇辉</p>
         </div>
         <!--修改密码样式-->
         <div class="change_Pass_style" id="change_Pass">
            <ul class="xg_style">
             <li><label class="label_name">原&nbsp;&nbsp;密&nbsp;码</label><input name="原密码" type="password" class="" id="password"></li>
             <li><label class="label_name">新&nbsp;&nbsp;密&nbsp;码</label><input name="新密码" type="password" class="" id="Nes_pas"></li>
             <li><label class="label_name">确认密码</label><input name="再次确认密码" type="password" class="" id="c_mew_pas"></li>
              
            </ul>
     <!--       <div class="center"> <button class="btn btn-primary" type="button" id="submit">确认修改</button></div>-->
         </div>
        <!-- /.main-container -->
		<!-- basic scripts -->
		<script>
			$(function () {
				//这里的作用是将调色盘的颜色分配到hover出来的网站后台管理系统中去
				$("#sidebar-shortcuts-mini span").hover(function () {
					$('#sidebar-shortcuts-large').css('background',$(this).css('background-color'));
				})
				$.each($("#nav_list li").find("ul.submenu").find("li a"),function () {
					if("产品管理"){
						if($(this).parent("li").parent("ul").siblings("a").find("span").html().indexOf("产品管理") > -1){
							console.log($(this).parent("li").parent("ul").siblings("a").find("span").html())
							$(this).parent("li").parent("ul").parent("li").addClass("open");
							$(this).parent("li").parent("ul").show();
						}
					}
				})
			})
		</script>
</body>
</html>



