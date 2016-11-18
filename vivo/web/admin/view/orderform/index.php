<extend file='index.html'/>
<block name="content">
    <!--**********************************************************-->
    <link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
    <!--[if lte IE 8]>
    <![endif]-->
    <script src="{{__ROOT__}}/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>

    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.admin.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/dist/echarts.js"></script>
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="{{u('index/index')}}">首页</a>
            </li>
            <li class="active"><span class="Current_page iframeurl" name="admin_info.html" href="javascript:void(0)" style="color: rgb(51, 51, 51); cursor: default;">订单管理</span></li>
            <li class="active" id="parentIframe" style="display: none;"><span class="parentIframe iframeurl"> </span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <div class="clearfix">
        <div class="admin_info_style">
            <div class="border clearfix">
                <span class="r_f">共：<b>{{count($data)}}</b>个订单</span>
            </div>
            <div class="recording_list" style="height: 400px;overflow: scroll">
                <div id="sample-table_wrapper" class="dataTables_wrapper no-footer">
                    <table width="1300" class="table table-border table-bordered table-bg table-hover table-sort dataTable no-footer" id="sample-table" role="grid" aria-describedby="sample-table_info">
                        <thead>
                        <tr class="text-c" role="row">
                            <th width="25" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 20px;"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                            <th width="60" class="sorting_desc" tabindex="0" aria-controls="sample-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: 升序排列" style="width: 62px;">ID</th>
                            <th width="150" class="sorting_desc" tabindex="0" aria-controls="sample-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: 升序排列" style="width: 62px;">订单编号</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">产品名称</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">总价</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">优惠</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">订单时间</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">数量</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">状态</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="操作" style="width: 132px;">操作</th></tr>
                        </thead>
                        <tbody>
                        <foreach from="$data" key = "$k" value="$v">
                            <tr role="row" class="odd">
                                <td><label><input type="checkbox" class="ace" value=""><span class="lbl"></span></label></td>
                                <td class="sorting_1">{{($v['orderForm_id'])}}</td>
                                <td>
                                    <a>{{($v['orderForm_num'])}}</a>
                                </td>
                                <td>
                                    <foreach from="$v['lists']" key="$key" value="$value">
                                        <a href="{{u('home/item/item',array('commodity_id'=>$value['commodity_id']))}}" target="_blank">
                                            <img src="{{$value['commodity_list_img']}}" title="产品名称" style="width=60px;height: 60px;border: 1px solid #ddd;">
                                        </a>
                                        <if value="count($v['lists']) gt 0">
                                            <if value="count($v['lists']) == $key+1">

                                                <else>
                                                    <i class="icon-plus" style="color: #ccc;font-size: 24px"></i>
                                            </if>

                                        </if>
                                    </foreach>
                                </td>
                                <td>
                                    {{number_format($v['orderForm_price'],2)}}
                                </td>
                                <td>
                                    0.00
                                </td>
                                <td>
                                    {{date("Y-m-d H:i:s",$v["orderForm_sendtime"])}}
                                </td>
                                <td>{{$v["allNum"]}}</td>
                                <td class="td-status">
<!--                                    订单状态0:未付款 1:待收货 2未评价3:已取消-->
                                    <span class="label label-success radius">
                                        {{$v['orderForm_status']}}
                                    </span>
                                </td>
                                <td class="td-manage">
                                    <if value="$v['orderForm_status'] == '未发货'">
                                        <a title="发货" onclick="Delivery_stop(this,'10061','{{$v['orderForm_id']}}')" href="javascript:;" class="btn btn-xs btn-success"><i class="icon-truck"></i></a>
                                    </if>
                                    <a title="订单详细" href="javascript:;" class="btn btn-xs btn-info"><i class="icon-list bigger-120"></i></a>
                                    <a title="删除" href="javascript:;" orderForm_status="{{$v['orderForm_status']}}" onclick="member_del(this,'{{$v['orderForm_id']}}')" class="btn btn-xs btn-warning"><i class="icon-trash  bigger-120"></i></a>
                                </td>
                            </tr>
                        </foreach>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="Delivery_stop" style="display: none;" class="layui-layer-wrap">
            <div class="">
                <div class="content_style">
                    <div class="form-group"><label class="col-sm-2 control-label no-padding-right" for="form-field-1">快递公司 </label>
                        <div class="col-sm-9"><select class="form-control" id="form-field-select-1">
                                <option value="">--选择快递--</option>
                                <option value="1">天天快递</option>
                                <option value="2">圆通快递</option>
                                <option value="3">中通快递</option>
                                <option value="4">顺丰快递</option>
                                <option value="5">申通快递</option>
                                <option value="6">邮政EMS</option>
                                <option value="7">邮政小包</option>
                                <option value="8">韵达快递</option>
                            </select></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 快递号 </label>
                        <div class="col-sm-9"><input type="text" id="form-field-1" placeholder="快递号" class="col-xs-10 col-sm-5" style="margin-left:0px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            jQuery(function($) {

                $('#sample-table').DataTable( {
                    "aaSorting": [[ 1, "asc" ]],//默认第几个排序
//            pageLength: 5,//这是设置默认长度
                    "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]
                } );
                $('table th input:checkbox').on('click' , function(){
                    var that = this;
                    $(this).closest('table').find('tr > td:first-child input:checkbox')
                        .each(function(){
                            this.checked = that.checked;
                            $(this).closest('tr').toggleClass('selected');
                        });
                });
            });
        </script>
        <script>
            /*品牌-编辑*/
            function member_edit(title,url,id,w,h){
                layer_show(title,url,w,h);
            }

            /*品牌-删除*/
            function member_del(obj,orderForm_id){
                if($(obj).attr("orderForm_status") == "未付款"){
                    layer.alert("该商品卖家正在加紧筹钱中，不能删除哦");
                }
                if($(obj).attr("orderForm_status") == "未发货"){
                    layer.alert("该商品正在仓库加紧出库中，不能删除哦");
                }
                if($(obj).attr("orderForm_status") == "已发货"){
                    layer.alert("该商品正在快递车上加紧奔跑中，不能删除哦");
                }

                if($(obj).attr("orderForm_status") == "已完成" || $(obj).attr("orderForm_status") == "已取消"){
                    layer.confirm('确认要删除吗？',function(index){
                        $.post("{{u('orderForm/del')}}",{'orderForm_id':orderForm_id},function(res){
                            if(res){
                                $(obj).parents("tr").remove();
                                layer.msg('已删除!',{icon:1,time:1000});
                            }
                        },'json')
                    });
                }


            }

            /**发货**/
            function Delivery_stop(obj,id,orderForm_id){
                layer.open({
                    type: 1,
                    title: '发货',
                    maxmin: true,
                    shadeClose:false,
                    area : ['500px' , ''],
                    content:$('#Delivery_stop'),
                    btn:['确定','取消'],
                    yes: function(index, layero){
                        if($('#form-field-1').val()==""){
                            layer.alert('快递号不能为空！',{
                                title: '提示框',
                                icon:0,
                            })

                        }else{
                                $.post("{{u('orderform/fahuo')}}",{"orderForm_id":orderForm_id},function (res) {
                                    if(res == 1){
                                        layer.confirm('提交成功！',function(index){
//                                            $(obj).parents("td").find(".sorting_1").prepend('<a style=" display:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="已发货"><i class="fa fa-cubes bigger-120"></i></a>');
                                            $(obj).parents(".td-manage").siblings('td.td-status').find('span.radius').html("已发货");
                                            $(obj).remove();
                                            layer.msg('已发货!',{icon: 6,time:1000});
                                        });
                                        layer.close(index);
                                    }
                                },"json")
                        }

                    }
                })
            };
        </script>
</block>