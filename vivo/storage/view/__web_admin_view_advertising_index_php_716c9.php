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
						
    <link href="<?php echo __ROOT__?>/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
    <script src="<?php echo __ROOT__?>/web/admin/view/js/lrtk.js" type="text/javascript" ></script>
    <script src="<?php echo __ROOT__?>/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo __ROOT__?>/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.queue.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.speed.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/handlers.js"></script>

<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="index.html">首页</a>
        </li>
        <li class="active"><span class="Current_page iframeurl" name="advertising.html" style="color: rgb(51, 51, 51); cursor: default;">广告管理</span></li>
        <li class="active" id="parentIframe" style="display: none;"><span class="parentIframe iframeurl"> </span></li>
        <li class="active" id="parentIfour" style="display: none;"></li>
    </ul>
</div>
<div class=" clearfix" id="advertising">
    <div id="scrollsidebar" class="left_Treeview">


    </div><div class="Ads_list" style="margin: 0">
        <div class="border clearfix">
       <span class="l_f">
        <a href="javascript:ovid()" id="ads_add" class="btn btn-warning"><i class="fa fa-plus"></i> 添加广告</a>
       </span>
            <span class="r_f">共：<b>45</b>条广告</span>
        </div>
        <div class="Ads_lists" style="width: 1145px;height: 415px;overflow: scroll;">
            <table class="table table-striped table-bordered table-hover" id="sample-table">
                <thead>
                <tr>
                    <th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                    <th width="80">ID</th>
                    <th width="70px">排序</th>
                    <th style="width: 100px">图片</th>
                    <th width="150px">尺寸（大小）</th>
                    <th width="200px">链接地址</th>
                    <th width="180">加入时间</th>
                    <th width="70">状态</th>
                    <th width="250">操作</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ((array)$data as $key=>$value){?>
                        <tr>
                            <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
                            <td><?php echo $value['advertising_id']?></td>
                            <td><?php echo $value["advertising_sort"]?></td>
                            <td style="width: 100px;height: 30px;">
                                <?php foreach ((array)$value['advertising_img'] as $k=>$v){?>
                                    <span class="ad_img">
                                        <img src="<?php echo $v?>"  width="100%" height="100%"/>
                                    </span>
                                <?php }?>

                            </td>
                            <td><?php echo $value['advertising_size']?></td>
                            <td><a href="http://<?php echo $value['advertising_url']?>" target="_blank">
                                    <?php echo $value['advertising_url']?>
                                </a></td>
                            <td><?php echo date("Y-m-d H:i:s",$value["advertising_time"])?></td>
                            <td class="td-status">
                                <?php if($value['advertising_status'] == 1){?>
                
                                  <span class="label label-success radius">显示</span>
                                <?php }else{?>
                                    <span class="label label-defaunt radius">已关闭</span>
                                
               <?php }?>
                            </td>
                            <td class="td-manage">
                                <?php if($value['advertising_status'] == 0){?>
                <!--这就是关闭状态-->
                                    <a style="text-decoration:none" class="btn btn-xs member_start" advertising_id="<?php echo $value['advertising_id']?>" href="script:;" title="显示"><i class="fa fa-close bigger-120"></i></a>
                                <?php }else{?>
                                    <a href="javascript:;" title="停用"  class="btn btn-xs btn-success member_stop" advertising_id="<?php echo $value['advertising_id']?>"><i class="fa fa-check  bigger-120"></i></a>
                                
               <?php }?>
<!--                                <a title="编辑" href="javascript:;" advertising_id="<?php echo $value['advertising_id']?>" class="btn btn-xs btn-info edit" ><i class="fa fa-edit bigger-120"></i></a>-->
                                <a title="删除" href="javascript:;"  onclick="member_del(this,<?php echo $value['advertising_id']?>)" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
                            </td>
                        </tr>
                    <?php }?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!--添加广告样式-->
<div id="add_ads_style"  style="display:none">
    <form action="" class="add">
        <div class="add_adverts">
            <ul>
                <li><label class="label_name">图片尺寸</label><span class="cont_style">
  <input name="宽" type="text" id="form-field-1" placeholder="0" class="col-xs-10 col-sm-5" style="width:80px">
  <span class="l_f" style="margin-left:10px;">x</span><input name="高" type="text" id="form-field-1" placeholder="0" class="col-xs-10 col-sm-5" style="width:80px"></span></li>
                <li><label class="label_name">显示排序</label><span class="cont_style"><input name="排序" type="text" id="form-field-1" placeholder="0" class="col-xs-10 col-sm-5" style="width:50px"></span></li>
                <li><label class="label_name">链接地址</label><span class="cont_style"><input name="地址" type="text" id="form-field-1" placeholder="地址" class="col-xs-10 col-sm-5" style="width:450px"></span></li>
                <li><label class="label_name">状&nbsp;&nbsp;态：</label>
   <span class="cont_style">
     &nbsp;&nbsp;<label><input name="form-field-radio1" value="1" type="radio" checked="checked" class="ace"><span class="lbl">显示</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="form-field-radio1" type="radio" class="ace" value="0"><span class="lbl">隐藏</span></label></span><div class="prompt r_f"></div>
                </li>
                <li><label class="label_name">图片</label><span class="cont_style">
 <div class="demo">
	           <div class="logobox" style="height: auto;overflow: hidden;text-align: left">
                   <div class="qingchu" style="position: absolute;top: 0px;right: 10px;">X</div>
                   <div class="resizebox"><img src="<?php echo __ROOT__?>/web/admin/view/images/image.png" width="100px" alt="" height="100px"/></div></div>
               <div class="logoupload">
                  <div class="btnbox"><a id="uploadBtnHolder" class="uploadbtn" href="javascript:;">上传替换</a></div>
                  <div style="clear:both;height:0;overflow:hidden;"></div>
                  <div class="progress-box" style="display:none;">
                    <div class="progress-num">上传进度：<b>0%</b></div>
                    <div class="progress-bar"><div style="width:0%;" class="bar-line"></div></div>
                  </div>  <div class="prompt"><p>图片大小小于5MB,支持.jpg;.gif;.png;.jpeg格式的图片</p></div>
              </div>
           </div>
   </span>
                </li>


            </ul>
        </div>
        <input type="hidden" name="img" class="banner">
    <input type='hidden' name='__TOKEN__' value='cf1e38818956a7fe0397132aa3d0677b'/></form>
</div>
<script>
    //初始化宽度、高度
//    $(".Ads_list").width($("#iframe").width()+100);
    $(function() {
        $("#advertising").fix({
            float : 'left',
            //minStatue : true,
            skin : 'green',
            durationTime :false,
            stylewidth:'220',
            spacingw:30,//设置隐藏时的距离
            spacingh:250,//设置显示时间距
            set_scrollsidebar:'.Ads_style',
            table_menu:'.Ads_list'
        });
    });
    /*广告图片-停用*/
    $('.member_stop').on('click', function(){
        var This = $(this);
        var id = $(this).attr("advertising_id");
        layer.confirm('确认要关闭吗？',{icon:0,},function(index){
            $.post("<?php echo u('advertising/editStatus')?>",{"id":id},function (res) {
                if(res == 0){
                    This.parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs mumber_start" href="javascript:;" title="显示"><i class="fa fa-close bigger-120"></i></a>');
                    This.parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已关闭</span>');
                    This.remove();
                    layer.alert("您必须选择一个启用",function () {
                        location.reload([true])
                    });
                }
            })
        });
    })

    /*广告图片-启用*/
//    $('body').delegate(".member_start","click",function (
        $('.member_start').on('click', function(){
        var This = $(this);
        var id = $(this).attr("advertising_id");
        layer.confirm('确认要显示吗？',{icon:0,},function(index){
            $.post("<?php echo u('advertising/editStatus')?>",{"id":id},function (res) {
                if(res==1){
                    //这是添加关闭按钮
                    This.parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" href="javascript:;" title="关闭"><i class="fa fa-check  bigger-120"></i></a>');
                    //这是添加显示文字
                    This.parents("tr").find(".td-status").html('<span class="label label-success radius">显示</span>');
                    //然后将自己删除了
                    This.remove();
                    layer.msg('显示!',{icon: 6,time:1000});
                    setTimeout(function () {
                        location.reload([true])
                    },300)
                }
            })
        });
    })
    /*广告图片-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',{icon:0,},function(index){
            $.post("<?php echo u('advertising/del')?>",{"id":id},function (res) {
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
                layer.alert("记得选择一个启用哦");
            },"json")
        });
    }
    /*******添加广告*********/
    $('#ads_add').on('click', function(){
        layer.open({
            type: 1,
            title: '添加广告',
            maxmin: true,
            shadeClose: false, //点击遮罩关闭层
            area : ['800px' , ''],
            content:$('#add_ads_style'),
            btn:['提交','取消'],
            yes:function(index,layero){
                var num=0;
                var str="";
                $(".add_adverts input[type$='text']").each(function(n){
                    if($(this).val()=="")
                    {

                        layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                            title: '提示框',
                            icon:0,
                        });
                        num++;
                        return false;
                    }
                });
                if(num>0){  return false;}
                else{
                    var data = $(".add").serialize();
                    $.post("<?php echo u('advertising/add')?>",data,function (res) {
                        if(res.valid){
                            layer.alert('添加成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                            document.getElementsByTagName("form")[0].reset();
                            $(".logobox .resizebox").html("<img src='" + "<?php echo __ROOT__?>/" + "web/admin/view/images/image.png" + "' />");
                            location.reload([true])
                        }else{
                            layer.alert(res.message,{
                                title: '提示框',
                                icon:0,
                            });
                            layer.close(index);
                        }
                    })
                }
            }
        });
    });


    /*******修改广告*********/
    $('.edit').on('click', function(){
        var id = $(this).attr("advertising_id");
        $.post("<?php echo u('advertising/editShow')?>",{"id":id},function (res) {
            JSON.stringify(res)
            console.log(res[0])
            console.log(res["width"])
            if(res){
                $("input[name=宽]").val(res.width);
                $("input[name=高]").val(res.height);
            }
        })
        layer.open({
            type: 1,
            title: '修改广告',
            maxmin: true,
            shadeClose: false, //点击遮罩关闭层
            area : ['800px' , ''],
            content:$('#add_ads_style'),
            btn:['提交','取消'],
            yes:function(index,layero){
                var num=0;
                var str="";
                $(".add_adverts input[type$='text']").each(function(n){
                    if($(this).val()=="")
                    {

                        layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                            title: '提示框',
                            icon:0,
                        });
                        num++;
                        return false;
                    }
                });
                if(num>0){  return false;}
                else{
                    var data = $(".add").serialize();
                    $.post("<?php echo u('advertising/add')?>",data,function (res) {
                        if(res.valid){
                            layer.alert('添加成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                            document.getElementsByTagName("form")[0].reset();
                            $(".logobox .resizebox").html("<img src='" + "<?php echo __ROOT__?>/" + "web/admin/view/images/image.png" + "' />");
                        }else{
                            layer.alert(res.message,{
                                title: '提示框',
                                icon:0,
                            });
                            layer.close(index);
                        }
                    })
                }
            }
        });
    });
    $('.qingchu').click(function () {
        $(".logobox .resizebox").html("<img src='" + "<?php echo __ROOT__?>/" + "web/admin/view/images/image.png" + "' />");
        $('.banner').val('');
    })
</script>
<script type="text/javascript">
    function updateProgress(file) {
        $('.progress-box .progress-bar > div').css('width', parseInt(file.percentUploaded) + '%');
        $('.progress-box .progress-num > b').html(SWFUpload.speed.formatPercent(file.percentUploaded));
        if(parseInt(file.percentUploaded) == 100) {
            // 如果上传完成了
            $('.progress-box').hide();
        }
    }

    function initProgress() {
        $('.progress-box').show();
        $('.progress-box .progress-bar > div').css('width', '0%');
        $('.progress-box .progress-num > b').html('0%');
    }

    function successAction(fileInfo,str) {
        var up_path = fileInfo.path;
        var up_width = fileInfo.width;
        var up_height = fileInfo.height;
        var _up_width,_up_height;
        if(up_width > 120) {
            _up_width = 120;
            _up_height = _up_width*up_height/up_width;
        }

        $(".logobox .resizebox").css({width: "100%"});
        if($(".logobox .resizebox >:first").attr("src") == "<?php echo __ROOT__?>/" + "web/admin/view/images/image.png"){
            $(".logobox .resizebox").html("<img src='" + "<?php echo __ROOT__?>/web/admin/view/" + up_path +"' width='" + _up_width + "' height='" + _up_height + "'>");
        }else{
            $(".logobox .resizebox").append("<img src='" + "<?php echo __ROOT__?>/web/admin/view/" + up_path +"' width='" + _up_width + "' height='" + _up_height + "'>");
        }
        $('.banner').val($('.banner').val() + up_path + '|');
    }

    var swfImageUpload;
    $(document).ready(function() {
        var settings = {
            flash_url : "<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload.swf",
            flash9_url : "<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/swfupload_fp9.swf",
            upload_url: "<?php echo __ROOT__?>/web/admin/view/upload.php",// 接受上传的地址
            file_size_limit : "5MB",// 文件大小限制
            file_types : "*.jpg;*.gif;*.png;*.jpeg;",// 限制文件类型
            file_types_description : "图片",// 说明，自己定义
            file_upload_limit : 100,
            file_queue_limit : 0,
            custom_settings : {},
            debug: false,
            // Button settings
            button_image_url: "<?php echo __ROOT__?>/web/admin/view/Widget/swfupload/upload-btn.png",
            button_width: "95",
            button_height: "30 ",
            button_placeholder_id: 'uploadBtnHolder',
            button_window_mode : SWFUpload.WINDOW_MODE.TRANSPARENT,
            button_cursor : SWFUpload.CURSOR.HAND,
            button_action: SWFUpload.BUTTON_ACTION.SELECT_FILE,

            moving_average_history_size: 40,

            // The event handler functions are defined in handlers.js
            swfupload_preload_handler : preLoad,
            swfupload_load_failed_handler : loadFailed,
            file_queued_handler : fileQueued,
            file_dialog_complete_handler: fileDialogComplete,
            upload_start_handler : function (file) {
                initProgress();
                updateProgress(file);
            },
            upload_progress_handler : function(file, bytesComplete, bytesTotal) {
                updateProgress(file);
            },
            upload_success_handler : function(file, data, response) {
                // 上传成功后处理函数
                var fileInfo = eval("(" + data + ")");
                var str = '';
                console.log(fileInfo)
                successAction(fileInfo,str);
            },
            upload_error_handler : function(file, errorCode, message) {
                alert('上传发生了错误！');
            },
            file_queue_error_handler : function(file, errorCode, message) {
                if(errorCode == -110) {
                    alert('您选择的文件太大了。');
                }
            }
        };
        swfImageUpload = new SWFUpload(settings);
    });
</script>
<script>
    jQuery(function($) {
        var oTable1 = $('#sample-table').dataTable( {
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[0,2,3,4,5,7,8,]}// 制定列不参与排序
            ] } );


        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }
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
					if("图片管理"){
						if($(this).parent("li").parent("ul").siblings("a").find("span").html().indexOf("图片管理") > -1){
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


