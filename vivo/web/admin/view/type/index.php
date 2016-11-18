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
            <li class="active"><span class="Current_page iframeurl" name="admin_info.html" href="javascript:void(0)" style="color: rgb(51, 51, 51); cursor: default;">类型管理</span></li>
            <li class="active" id="parentIframe" style="display: none;"><span class="parentIframe iframeurl"> </span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <div class="clearfix">
        <div class="admin_info_style">
            <div class="border clearfix">
               <span class="l_f">
                    <a href="{{u('type/add')}}" title="添加类型" class="btn btn-warning Order_form"><i class="icon-plus"></i>添加类型</a>
               </span>
                <span class="r_f">共：<b>{{count($data)}}</b>个类型</span>
            </div>
            <div class="recording_list" style="height: 420px;overflow: scroll">
                <div id="sample-table_wrapper" class="dataTables_wrapper no-footer">
                    <table class="table table-border table-bordered table-bg table-hover table-sort dataTable no-footer" id="sample-table" role="grid" aria-describedby="sample-table_info">
                        <thead>
                            <tr class="text-c" role="row">
                                <th width="25" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 20px;"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                                <th width="60" class="sorting_desc" tabindex="0" aria-controls="sample-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: 升序排列" style="width: 62px;">ID</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">类型名称</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="操作" style="width: 132px;">操作</th></tr>
                        </thead>
                        <tbody>
                            <foreach from="$data" key = "$k" value="$v">
                                <tr role="row" class="odd">
                                    <td><label><input type="checkbox" class="ace" value=""><span class="lbl"></span></label></td>
                                    <td class="sorting_1">{{($v['type_id'])}}</td>
                                    <td>
                                        <a href="{{u('type/type_info',array('type_id'=>$v['type_id']))}}">{{($v['type_name'])}}</a>
                                    </td>
                                    <td class="td-manage">
                                        <a title="添加类型属性" onclick="member_edit('添加类型属性','{{u('type/addAttr',array('type_id'=>$v['type_id']))}}','{{($v['type_id'])}}','','510')" href="javascript:;" class="btn btn-xs btn-success"><i class="icon-edit bigger-120"></i></a>
                                        <a title="编辑" onclick="member_edit('编辑','{{u('type/edit',array('type_id'=>$v['type_id']))}}','{{($v['type_id'])}}','','510')" href="javascript:;" class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a>
                                        <a title="删除" href="javascript:;" onclick="member_del(this,'{{$v['type_id']}}')" class="btn btn-xs btn-warning"><i class="icon-trash  bigger-120"></i></a>
                                    </td>
                                </tr>
                            </foreach>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

<script>
    jQuery(function($) {

        $('#sample-table').DataTable( {
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
//            pageLength: 5,//这是设置默认长度
            "lengthMenu": [[2, 4, 6, -1], [2, 4, 6, "All"]]
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
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.post("{{u('type/del')}}",{'type_id':id},function(){
            },'json')
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }
</script>
</block>