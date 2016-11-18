<extend file='index.html'/>
<block name="content">
    <link href="{{__ROOT__}}/web/admin/view/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <script src="{{__ROOT__}}/web/admin/view/assets/js/typeahead-bs2.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/layer/layer.js" type="text/javascript" ></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="{{__ROOT__}}/web/admin/view/js/lrtk.js" type="text/javascript"></script>


    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.admin.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/dist/echarts.js"></script>
<div class="page-content clearfix">
    <div class="brand_detailed">
        <div class="brand_info clearfix">
            <div class="title_brand">分类信息</div>
                <ul class="Info_style clearfix" style="margin-right: 0;">
                    <li style="width: 100%;"><label class="label_name">分类名称：</label> <span class="name">{{$data['category_name']}}</span></li>
                </ul>
        </div>
    </div>
    <!--品牌商品-->
    <div class="border clearfix">
       <span class="l_f">
        <a href="script:;" title="添加商品" class="btn btn-warning Order_form addCommodity"><i class="icon-plus"></i>添加商品</a>
        <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a>
       </span>
        <span class="r_f">该品牌下共：<b>{{count($commodity_all_data[0])}}</b>件商品</span>
    </div>
    <!--产品列表-->
    <div class="b_products_list clearfix" id="products_list">
        <div id="scrollsidebar" class="left_Treeview">
            <div class="show_btn" id="rightArrow"><span></span></div>
            <div class="widget-box side_content" >
                <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
                <div class="side_list">
                    <div class="widget-header header-color-green2"><h4 class="lighter smaller">产品所属子分类</h4></div>
                    <div class="widget-body">
                        <ul class="b_P_Sort_list">
                            <foreach from="$category" key="$key" value="$value">
                                <li><i class="icon-file-text grey"></i> <a href="{{u('category/category_info',array('category_id'=>$value['category_id']))}}">{{$value['category_name']}}</a></li>
                            </foreach>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!--列表展示-->
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
                <foreach from="$commodity_all_data" key="$k" value="$v">
                    <foreach from="$v" key="$key" value="$value">
                        <tr>
                            <td width="25px"><label><input type="checkbox" class="ace" ><span class="lbl"></span></label></td>
                            <td width="80px">{{$value['commodity_id']}}</td>
                            <td width="250px">
                                <u style="cursor:pointer" class="text-primary">
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
                </foreach>
                </tbody>
            </table>
        </div>
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
    $(function() {
        $("#products_list").fix({
            float : 'left',
            //minStatue : true,
            skin : 'green',
            durationTime :false,
            stylewidth:'220',
            spacingw:30,//设置隐藏时的距离
            spacingh:260,//设置显示时间距
        });
    });
    //初始化宽度、高度
    $(".widget-box").height($(window).height()-215);
    $(".table_menu_list").width($('#iframe').width()-260);
    $(".table_menu_list").height($(window).height()-215);
    //当文档窗口发生改变时 触发
    $(window).resize(function(){
        $(".widget-box").height($(window).height()-215);
        $(".table_menu_list").width($('#iframe').width()-260);
        $(".table_menu_list").height($(window).height()-215);
    });
    /*品牌-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

    /*品牌-删除*/
    function type_attr_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.post("{{u('type/delAttr')}}",{'type_attr_id':id},function () {
            },'json')
            $(obj).parents("div.type_attr").remove();
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
<script>
    $(function () {
        $('.addCommodity').click(function () {
            if(!"{{$data['category_id']}}"){
                alert('不可以添加商品');
            }else{
                window.open("{{u('commodity/add',array('category_id'=>$data['category_id']))}}");
            }
        })
    })
</script>
</block>