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
            <div class="title_brand">类型信息</div>
                <ul class="Info_style clearfix" style="margin-right: 0;">
                    <li style="width: 100%;"><label class="label_name">类型名称：</label> <span class="name">{{$type_name}}</span></li>
                    <div style="width: 100%;overflow: hidden;padding: 0 7px;" class="box">
                        <if value="count($data) == 0">
                            &nbsp;&nbsp;<span style="color: red;">当前类型属性为空</span>
                        <else>
                            <foreach from="$data" key="$key" value="$value">
                                <div style="float: left;width: auto;border-top: 1px solid #ccc;" class="type_attr">
                                            <div class="b_Introduce" style="clear: left;">
                                                <label class="label_name"  style="float: left;width: 80px;line-height: 40px;text-align: right;">类型
                                                    <if value="$value['type_attr_type'] == 1">
                                                        <span style="color: #999;">规格</span>
                                                    </if>
                                                    <if value="$value['type_attr_type'] == 0">
                                                        <span style="color: #999;">属性</span>
                                                    </if>
                                                    ：</label>
                                            </div>
                                            <div class="b_Introduce" style="clear: left;">
                                                <label class="label_name"  style="float: left;width: 80px;line-height: 40px;text-align: right;"></label>
                                                <label class="label_name"  style="float: left;width: 80px;line-height: 40px;text-align: right;">{{$value['type_attr_name']}}:</label>
                                                <p class="name" style="float: left;line-height: 40px;margin-left: 5px;">{{$value['type_attr_value']}}</p>
                                                <div class="td-manage" style="float: left;margin-left: 20px">
                                                    <a title="编辑" onclick="member_edit('编辑','{{u('type/editAttr',array('type_attr_id'=>$value['type_attr_id']))}}','4','','510')" href="javascript:;" class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a>
                                                    <a title="删除" href="javascript:;" onclick="type_attr_del(this,'{{$value['type_attr_id']}}')" class="btn btn-xs btn-warning"><i class="icon-trash  bigger-120"></i></a>
                                                </div>
                                            </div>
                                        </div>
                            </foreach>
                        </if>
                    </div>
                </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        if($('.box').height() > $('#iframe').height()-100){
            $('.box').height($('#iframe').height()-94).css('overflow','scroll');
        }else{
            $('.box').css('overflow','hidden');
        }
    })
    //数据
    jQuery(function($) {
        var oTable1 = $('#sample-table').dataTable( {
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[0,2,3,4,5,8,9]}// 制定列不参与排序
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
    $(".widget-box").height($(window).height()-435).css('border-bottom','1px solid #ccc');
    $(".table_menu_list").width($(window).width()-260);
    $(".table_menu_list").height($(window).height()-215);
    //当文档窗口发生改变时 触发  
    $(window).resize(function(){
        $(".widget-box").height($(window).height()-435).css('border-bottom','1px solid #ccc');
        $(".table_menu_list").width($(window).width()-260);
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
</block>