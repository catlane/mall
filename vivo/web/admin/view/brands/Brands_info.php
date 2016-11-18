<extend file='index.html'/>
<block name="content">
  <link href="{{__ROOT__}}/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/css/style.css"/>
  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace.min.css" />
  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome.min.css" />
  <link href="{{__ROOT__}}/web/admin/view/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
  <!--[if IE 7]>
    <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome-ie7.min.css" />
  <![endif]-->
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-ie.min.css" />
  <![endif]-->
  <script src="{{__ROOT__}}/web/admin/view/js/jquery-1.9.1.min.js"></script>
  <script src="{{__ROOT__}}/web/admin/view/assets/js/bootstrap.min.js"></script>
  <script src="{{__ROOT__}}/web/admin/view/assets/js/typeahead-bs2.min.js"></script>
  <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
  <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>
  <script src="{{__ROOT__}}/web/admin/view/assets/layer/layer.js" type="text/javascript" ></script>
  <script src="{{__ROOT__}}/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>
  <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.js"></script>
  <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.admin.js"></script>
  <script src="{{__ROOT__}}/web/admin/view/js/lrtk.js" type="text/javascript"></script>

<div class="page-content clearfix">
 <div class="brand_detailed">
  <div class="brand_info clearfix">
   <div class="title_brand">品牌信息</div>
   <form>
    <ul class="Info_style clearfix">
     <li><label class="label_name">品牌名称：</label> <span class="name">{{$data['brands_name']}}</span></li>
      <li><label class="label_name">排序：</label><span class="name">{{$data['brands_sort']}}</span></li>
      <li><label class="label_name">是否热门：</label><span class="name">
              <?php if($data['brands_ifhot'] == 0){ ?>
                  不热门
              <?php }else{ ?>
                  热门
              <?php } ?>
          </span></li>
      <li><label class="label_name">状&nbsp;&nbsp;&nbsp;&nbsp;态：</label><span class="name">
              <?php if($data['brands_status'] == 0){ ?>
                未启用
              <?php }else{ ?>
                已启用
              <?php } ?>
          </span></li>
    </ul>
    <div class="brand_logo">
      <img src="{{$data['brands_logo']}}"  width="120px" height="60px"/>
      <p class="name">{{$data['brands_name']}}</p>
    </div>
   </form>
   </div>
 </div>
 <!--品牌商品-->
 <div class="border clearfix">
       <span class="l_f">
        <a href="{{u('commodity/add')}}"  title="添加商品" class="btn btn-warning Order_form"><i class="icon-plus"></i>添加商品</a>
       </span>
       <span class="r_f">该品牌下共：<b>{{$count}}</b>件商品</span>
  </div>
     <!--产品列表-->
     <div class="table_menu_list" id="testIframe" style="width: auto">
            <table class="table table-striped table-bordered table-hover" id="sample-table">
                <thead>
                <tr>
                    <th width="25px"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                    <th width="80px">商品编号</th>
                    <th width="250px">商品名称</th>
                    <th width="100px">市场价格</th>
                    <th width="100px">商城价格</th>
                    <th width="180px">发布时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$commodityData" key="$key" value="$value">
                    <tr>
                        <td width="25px"><label><input type="checkbox" class="ace" ><span class="lbl"></span></label></td>
                        <td width="80px">{{$value['commodity_id']}}</td>
                        <td width="250px"><u style="cursor:pointer" class="text-primary" onclick="">
                                <a href="{{u('commodity/commodity_info',array('commodity_id'=>$value['commodity_id']))}}">
                                    {{$value['commodity_name']}}
                                </a>
                            </u></td>
                        <td width="100px">{{$value['commodity_market_price']}}</td>
                        <td width="100px">{{$value['commodity_mall_price']}}</td>
                        <td width="180px">{{date('Y-m-d H:i:s',$value['commodity_added_time'])}}</td>
                        <td class="td-manage">
                            <a title="编辑" onclick="member_edit('编辑','{{u('commodity/edit',array('commodity_id'=>$value['commodity_id']))}}','{{($value['commodity_id'])}}','','510')" href="javascript:;" class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a>
                            <a title="删除" href="javascript:;" onclick="member_del(this,'{{$v['category_id']}}')" class="btn btn-xs btn-warning"><i class="icon-trash  bigger-120"></i></a>
                        </td>
                    </tr>
                </foreach>
                </tbody>
            </table>
        </div>
</div>

<script type="text/javascript">
//数据
jQuery(function($) {
		var oTable1 = $('#sample-table').dataTable( {
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[0,2,]}// 制定列不参与排序
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
			});
 	//图层隐藏限时参数
//初始化宽度、高度
 $(".widget-box").height($(window).height()-215);
if($('.table_menu_list').height() > 270){
    $('.table_menu_list').height($("#iframe").height()-$('.brand_detailed').height()-$('.border').height()-135).css('overflow','scroll');
}else{
    $('.table_menu_list').css('height','auto');
}


$('.table_menu_list').width($("#iframe").width());
$('body').css('overflow','hidden');
  //当文档窗口发生改变时 触发
    $(window).resize(function(){
        $(".widget-box").height($(window).height()-215);
        if($('.table_menu_list').height() > 270){
            $('.table_menu_list').height($("#iframe").height()-$('.brand_detailed').height()-$('.border').height()-135).css('overflow','scroll');
        }else{
            $('.table_menu_list').css('height','auto');
        }
        $('.table_menu_list').width($("#iframe").width());
        $('body').css('overflow','hidden');
	});
/*品牌-停用*/
function member_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="icon-ok bigger-120"></i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="icon-ok bigger-120"></i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!',{icon: 6,time:1000});
	});
}
/*品牌-编辑*/
function member_edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}


/*品牌-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
//面包屑返回值
var index = parent.layer.getFrameIndex(window.name);
parent.layer.iframeAuto(index);
$('.Order_form').on('click', function(){
	var cname = $(this).attr("title");
	var chref = $(this).attr("href");
	var cnames = parent.$('.Current_page').html();
	var herf = parent.$("#iframe").attr("src");
    parent.$('#parentIfour').html(cname);
    parent.$('#iframe').attr("src",chref).ready();;
	parent.$('#parentIfour').css("display","inline-block");
	//parent.$('.Current_page').attr({"name":herf,"href":"javascript:void(0)"}).css({"color":"#4c8fbd","cursor":"pointer"});
	parent.$('.parentIframe').attr("name",herf).css({"color":"#4c8fbd","cursor":"pointer"});
	//parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+" class='iframeurl'>" + cnames + "</a>");
    parent.layer.close(index);
	
});
</script>
</block>