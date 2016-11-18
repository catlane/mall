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
		<!--<script src="http://127.0.0.1/vivo1/vivo/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>-->
        

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
	$("#iframe").height($(window).height()-98);
	 $('#iframe').width($('.main-content').width());
	$(".sidebar").height($(window).height()-99);
    var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
	$(".submenu").height();
	$("#nav_list").children(".submenu").css("height",thisHeight);

    //当文档窗口发生改变时 触发
    $(window).resize(function(){
		$("#main-container").height($(window).height()-76);
		$("#iframe").height($(window).height()-98);
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
								<span  class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small><i class="admin_username">
																	杨宇辉								
               							</i>	</span>
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
                                <li class="home"><a href="http://127.0.0.1/vivo1/vivo/index.php?s=admin/Administrator/index" name="administrator.html" title="管理员列表" class="iframeurl"><i class="icon-double-angle-right"></i>管理员列表</a></li>
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
						
    <link href="<?php echo __ROOT__?>/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/css/style.css"/>
    <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/assets/css/ace.min.css" />
    <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/assets/css/font-awesome.min.css" />
    <link href="<?php echo __ROOT__?>/web/admin/view/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo __ROOT__?>/web/admin/view/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="<?php echo __ROOT__?>/web/admin/view/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo __ROOT__?>/web/admin/view/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo __ROOT__?>/web/admin/view/assets/js/typeahead-bs2.min.js"></script>
    <script src="<?php echo __ROOT__?>/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.queue.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.speed.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/handlers.js"></script>
    <style>
        .add_text{
            width: 75%;
            margin-left: 10px;
        }
    </style>
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="<?php echo u('index/index')?>">首页</a>
            </li>
            <li class="active">
                <a class="Current_page iframeurl" href="<?php echo u('category/index')?>" style="color: rgb(76, 143, 189); cursor: pointer;">分类管理</a>
            </li>
            <li class="active" id="parentIframe" style="display: inline-block;"><span class="parentIframe iframeurl">添加分类</span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <form action="" method="post">
        <div class=" clearfix">
            <div id="add_brand" class="clearfix">
                <div class="left_add" style="width: 100%;">
                    <div class="title_name" style="width: 100%">添加分类</div>
                    <ul class="add_conent">
                        <li class=" clearfix"><label class="label_name"><i>*</i>分类名称：</label> <input name="category_name" type="text" class="add_text"/></li>
                        <li class=" clearfix"><label class="label_name"><i>*</i>分类排序：</label> <input name="category_sort" type="number" min="1" class="add_text"/></li>
                        <li class=" clearfix"><label class="label_name"><i>*</i>分类层级：</label>
                            <select name="category_pid" id="" class="add_text">
                                <option value="0" selected>顶级分类</option>
                            </select>
                        </li>
                        <li class=" clearfix"><label class="label_name"><i>*</i>归属类型：</label>
                            <select name="type_type_id" id="" class="add_text">
                                <option value="">请选择类型</option>
                                <?php foreach ((array)$type as $key=>$value){?>
                                    <option value="<?php echo $value['type_id']?>"><?php echo $value['type_name']?></option>
                                <?php }?>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="button_brand" style="bottom: 30px;position: fixed;">
                <input name="" type="button"  class="btn btn-warning btn-save" value="保存"/>
                <input name="" type="reset" value="取消" class="btn btn-warning"/>
            </div>
        </div>
    <input type='hidden' name='__TOKEN__' value='3580424b2e4db2e215820639bbf2434c'/></form>
    </body>
    </html>
    <script type="text/javascript">

        $(document).ready(function(){
            $(".left_add").height($(window).height()-200);
            $(".select").height($(window).height()-195);
            $("#select_style").height($(window).height()-220);
            //当文档窗口发生改变时 触发
            $(window).resize(function(){
                $(".left_add").height($(window).height()-200);
                $(".select").height($(window).height()-195);
                $("#select_style").height($(window).height()-220);
            });
        })
    </script>
    <script>
        //这是异步提交
        $('.btn-save').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("<?php echo u('category/add')?>",data,function (res) {
                if(res.valid){
                    layer.alert('添加成功',{
                        title: '提示框',
                        icon:1,
                        yes:function () {
                            location.href = "<?php echo u('category/index')?>";
                        }
                    });
//                    location.href = "<?php echo u('type/index')?>";
                    layer.close();
                    return true;
                }else{
                    layer.alert(res.message,{
                        title: '提示框',
                        icon:0,
                    });
                    return false;
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


