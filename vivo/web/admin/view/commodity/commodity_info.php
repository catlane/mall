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
        <div class="brand_detailed" id="box">
            <div class="brand_info clearfix">
                <div class="title_brand">商品信息</div>
                <ul class="Info_style clearfix">
                    <li><label class="label_name">商品名称：</label> <span class="name">{{$commodity_data['commodity_name']}}</span></li>
                    <li><label class="label_name">商品货号：</label><span class="name">{{$commodity_data['commodity_num']}}</span></li>
                    <li><label class="label_name">商品货号：</label><span class="name">{{$commodity_data['commodity_num']}}</span></li>
                    <li><label class="label_name">商品单位：</label><span class="name">{{$commodity_data['commodity_unit']}}</span></li>
                    <li><label class="label_name">市场价：</label><span class="name">{{$commodity_data['commodity_market_price']}}</span></li>
                    <li><label class="label_name">商城价：</label><span class="name">{{$commodity_data['commodity_mall_price']}}</span></li>
                    <li><label class="label_name">总库存：</label><span class="name">{{$commodity_data['commodity_all_stock']}}</span></li>
                    <li><label class="label_name">点击量：</label><span class="name">{{$commodity_data['commodity_click']}}</span></li>
                    <li><label class="label_name">上架时间：</label><span class="name">{{date('Y-m-d H:i:m',$commodity_data['commodity_added_time'])}}</span></li>
                    <li><label class="label_name">所属分类：</label><span class="name">{{$commodity_data['category_name']}}</span></li>
                    <li><label class="label_name">所属类型：</label><span class="name">{{$commodity_data['type_id']}}</span></li>
                    <li><label class="label_name">所属品牌：</label><span class="name">{{$commodity_data['brands_name']}}</span></li>
                    <li><label class="label_name">管理员：</label><span class="name">{{$commodity_data['admin_name']}}</span></li>
                </ul>
                <div class="brand_logo">
                    <img src="{{$commodity_data['commodity_list_img']}}"  width="140px" height="140px"/>
                    <p class="name">{{$commodity_data['commodity_name']}}</p>
                </div>
            </div>
            <!--这是商品属性-->
            <div class="brand_info clearfix">
                <div class="title_brand">商品属性</div>
                <ul class="Info_style clearfix">
                    <li><label class="label_name">商品属性：</label>
                        <foreach from="$commodity_data['attr']" key="$key" value="$value">
                            <span class="name" style="background: #FFE4E1;border-radius: 10px;margin: 3px;padding: 5px;">{{$value}}</span>
                        </foreach>
                    </li>
                </ul>
            </div>
            <!--这是商品规格-->
            <div class="brand_info clearfix">
                <div class="title_brand">商品规格</div>
                <ul class="Info_style clearfix">
                    <foreach from="$commodity_data['spec'][value]" key="$key" value="$value">
                    <li style="width: 100%">
                        <label class="label_name">{{$commodity_data['spec']['name'][$key]}}：</label>
                        <span class="name">{{$value}}：&nbsp;&nbsp;<b style="color:red;">{{$commodity_data['spec']['addprice'][$key]}}</b>&nbsp;元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </li>
                    </foreach>
                </ul>
            </div>
            <!--这是商品图册-->
            <div class="brand_info clearfix">
                <div class="title_brand">商品图册</div>
                <ul class="Info_style clearfix">
                    <li style="width: 100%;height: auto;">
                        <label class="label_name">商品图册：</label>
                        <foreach from="$commodity_data['many_image']" key="$key" value="$value">
                            <span class="name" style="float: left;">
                                <div style="padding: 5px;border-radius: 5px;border: 1px solid #ccc;">
                                    <img src="{{$value}}" alt="" style="padding-bottom: 0px;width: 200px;">
                                </div>
                            </span>
                        </foreach>
                    </li>
                </ul>
            </div>
            <!--这是商品详情-->
            <div class="brand_info clearfix">
                <div class="title_brand">商品详情</div>
                <ul class="Info_style clearfix" style="margin-right: 0">
                    <li style="width: 100%;max-height: 500px;overflow: scroll;padding-left: 15px;">
                        {{$commodity_data['about_commodity_about']}}
                    </li>
                </ul>
            </div>
            <!--这是商品售后服务-->
            <div class="brand_info clearfix">
                <div class="title_brand">商品售后</div>
                <ul class="Info_style clearfix" style="margin-right: 0">
                    <li style="width: 100%;max-height: 500px;overflow: scroll;padding-left: 15px;">
                        {{$commodity_data['about_commodity_afterMarket']}}
                    </li>
                </ul>
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
        //当文档窗口发生改变时 触发
        $(window).resize(function(){
            $(".widget-box").height($(window).height()-215);
            if($('#box').height() > $('#iframe').height()){//如果要是比iframe高的话，就溢出scroll
                $('#box').height($('#iframe').height()).css({'overflow':'scroll','padding-bottom':40});
            }else{//否则的话，就直接显示出来
                $('#box').css({'height':'auto'});
            }
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
    <script>
        //初始化宽度、高度
        $(function () {
            $(".widget-box").height($(window).height()-215);
            if($('#box').height() > $('#iframe').height()){//如果要是比iframe高的话，就溢出scroll
                $('#box').height($('#iframe').height()+17).css({'overflow':'scroll','padding-bottom':30});
            }else{//否则的话，就直接显示出来
                $('#box').css({'height':'auto'});
            }
        })
    </script>
</block>