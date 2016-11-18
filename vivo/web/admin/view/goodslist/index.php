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
            <li>
                <a href="{{u('commodity/index')}}">商品管理</a>
            </li>
            <li>
                货品管理
            </li>
            <li class="active" id="parentIframe" style="display: none;"><span class="parentIframe iframeurl"> </span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <div class="clearfix">
        <div class="admin_info_style">
            <div class="recording_list">
                <div id="sample-table_wrapper" class="dataTables_wrapper no-footer">
                    <table class="table table-border table-bordered table-bg table-hover table-sort dataTable no-footer" id="sample-table" role="grid" aria-describedby="sample-table_info">
                        <thead>
                        <tr class="text-c" role="row">
                            <th width="25" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 20px;"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                            <th style="width: 100px" class="sorting_desc" tabindex="0" aria-controls="sample-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: 升序排列" style="width: 62px;">ID</th>
                            <foreach from="$spec" key="$key" value="$value">
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="商品名称" style="width: 102px;">{{$key}}</th>
                            </foreach>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="上架时间" style="width: 102px;">库存</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="上架时间" style="width: 102px;">货号</th>
                            <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="操作" style="width: 132px;">操作</th></tr>
                        </thead>
                        <tbody>
                            <foreach from="$oldData" key="$key" value="$value">
                                <tr role="row" class="odd">
                                        <td><label><input type="checkbox" class="ace" value=""><span class="lbl"></span></label></td>
                                        <td class="sorting_1">{{$value['goods_lists_id']}}</td>
                                        <foreach from="$value['goods_lists_allid']" key="$k" value="$v">
                                            <td>{{$v}}</td>
                                        </foreach>
                                        <td>{{$value['goods_lists_stock']}}</td>
                                        <td>{{$value['goods_lists_num']}}</td>
                                        <td class="td-manage">
                                            <a title="删除" href="javascript:;" onclick="member_del(this,'{{$value["goods_lists_id"]}}')" class="btn btn-xs btn-warning"><i class="icon-trash  bigger-120"></i></a>
                                        </td>
                                </tr>
                            </foreach>
                                <tr role="row" class="even">
                                    <form action="{{u('goodslist/add')}}" class="form" method="post">
                                    <td><label><input type="checkbox" class="ace" value=""><span class="lbl"></span></label></td>
                                    <td class="sorting_1">添加货品</td>
                                    <foreach from="$spec" key="$key" value="$value">
                                        <td>
                                            <select name="goods_lists_allid[{{$key}}][]" id="">
                                                <option value="0">请选择</option>
                                                <foreach from="$value" key="$k" value="$v">
                                                    <option value="{{$k}}">{{$v}}</option>
                                                </foreach>
                                            </select>
                                        </td>
                                    </foreach>
                                    <td><input type="number" name="goods_lists_stock"></td>
                                    <td><input type="number" name="goods_lists_num"></td>
                                    <td class="td-manage">
                                        <button type="submit" class="btn btn-xs btn-primary submit"><i class="icon-plus bigger-120" style="width: 100%"></i></button>
                                    </td>
                                        <input type="hidden" name="commodity_commodity_id" value="{{q('get.commodity_id','0','intval')}}">
                                    </form>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                $('.form').submit(function () {
                    var data = $(this).serialize();
                    $.post("{{u('goodslist/add')}}",data,function (res) {
                        if(res.valid){
                            layer.alert('添加成功',{
                                title: '提示框',
                                icon:1,
                                yes:function () {
                                    location.href = "{{u('goodsList/index',array('commodity_id'=>q('get.commodity_id','0','intval')))}}";
                                }
                            });
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
                    return false;
                })
            })
            jQuery(function($) {

                $('#sample-table').DataTable( {
                    "aaSorting": [[ 0, "sec" ]],//默认第几个排序
                    pageLength: 5,//这是设置默认长度
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
            /*品牌-删除*/
            function member_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    $.post("{{u('goodsList/del')}}",{'goods_lists_id':id},function(){
                    },'json')
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
        </script>
</block>