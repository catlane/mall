<extend file='index.html'/>
<block name="content">
    <!--**********************************************************-->
    <link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace.min.css" rel="stylesheet">
    <!--    这是为了分类那里的文件夹所用的-->
    <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/Widget/zTree/css/zTreeStyle/zTreeStyle.css" rel="stylesheet">

    <!--[if lte IE 8]>
    <![endif]-->
    <script src="{{__ROOT__}}/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>

    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.admin.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/dist/echarts.js"></script>
<!--    这是为了分类那里的文件夹所用的-->
    <script src="{{__ROOT__}}/web/admin/view/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="{{u('index/index')}}">首页</a>
            </li>
            <li class="active"><span class="Current_page iframeurl" name="admin_info.html" href="javascript:void(0)" style="color: rgb(51, 51, 51); cursor: default;">分类管理</span></li>
            <li class="active" id="parentIframe" style="display: none;"><span class="parentIframe iframeurl"> </span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <div class="clearfix">
        <div class="admin_info_style">
            <div class="border clearfix">
               <span class="l_f">
                    <a href="{{u('category/add')}}" title="添加类型" class="btn btn-warning Order_form"><i class="icon-plus"></i>添加分类</a>
               </span>
                <span class="r_f">共：<b>{{count($data)}}</b>个分类</span>
            </div>
            <div>
                <div class="widget-box side_content" style="float: left;border-bottom: 1px solid #CCC;">
                    <div class="side_list">
                        <div class="widget-header header-color-green2">
                            <h4 class="lighter smaller">产品类型列表</h4>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main padding-8">
                                <div  id="treeDemo" class="ztree"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recording_list" style="border:1px solid #ccc;height: 405px;overflow: scroll">
                    <div id="sample-table_wrapper" class="dataTables_wrapper no-footer">
                        <table class="table table-border table-bordered table-bg table-hover table-sort dataTable no-footer" id="sample-table" role="grid" aria-describedby="sample-table_info">
                            <thead>
                            <tr class="text-c" role="row">
                                <th width="25" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 20px;"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                                <th width="60" class="sorting_desc" tabindex="0" aria-controls="sample-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: 升序排列" style="width: 62px;">ID</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">分类名称</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">分类排序</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">分类层级</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="客户端IP" style="width: 102px;">所属归类</th>
                                <th width="60" class="sorting_disabled" rowspan="1" colspan="1" aria-label="操作" style="width: 132px;">操作</th></tr>
                            </thead>
                            <tbody>
                            <foreach from="$data" key = "$k" value="$v">
                                <tr role="row" class="odd">
                                    <td><label><input type="checkbox" class="ace" value=""><span class="lbl"></span></label></td>
                                    <td class="sorting_1">{{($v['category_id'])}}</td>
                                    <td>
                                        <a href="{{u('category/category_info',array('category_id'=>$v['category_id']))}}">{{($v['category_name'])}}</a>
                                    </td>
                                    <td class="sorting_1">{{($v['category_sort'])}}</td>
                                    <td class="sorting_1">
                                        <if value="$v['category_pid'] == 0">
                                            顶级分类
                                        <else>
                                            {{Db::table('category')->where('category_id',$v['category_pid'])->pluck('category_name')}}
                                        </if>
                                    </td>
                                    <td class="sorting_1">{{($v['type_name'])}}</td>
                                    <td class="td-manage">
                                        <a title="添加子集分类" onclick="member_edit('添加子集分类','{{u('category/addSon',array('category_id'=>$v['category_id']))}}','{{($v['category_id'])}}','','510')" href="javascript:;" class="btn btn-xs btn-success"><i class="icon-edit bigger-120"></i></a>
                                        <a title="编辑" onclick="member_edit('编辑','{{u('category/edit',array('category_id'=>$v['category_id']))}}','{{($v['category_id'])}}','','510')" href="javascript:;" class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a>
                                        <a title="删除" href="javascript:;" onclick="member_del(this,'{{$v['category_id']}}')" class="btn btn-xs btn-warning"><i class="icon-trash  bigger-120"></i></a>
                                    </td>
                                </tr>
                            </foreach>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>

<script>
    //这是初始化**********************************************
    $(function () {
        $('.widget-box').height($(window).height()-240);
        $('.recording_list').width($('#iframe').width()-260).css('float','right');
    })
    //这是table*******************************************
    jQuery(function($) {
        $('#sample-table').DataTable( {
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
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
        /**************/
        var setting = {
        view: {
        dblClickExpand: false,
        showLine: false,
        selectedMulti: false
        },
        data: {
        simpleData: {
        enable:true,
        idKey: "category_id",
        pIdKey: "category_pid",
        rootPId: ""
        }
        },
        callback: {
        beforeClick: function(treeId, treeNode) {
        var zTree = $.fn.zTree.getZTreeObj("tree");
        if (treeNode.isParent) {
        zTree.expandNode(treeNode);
        return false;
        } else {
        demoIframe.attr("src",treeNode.file + ".html");
        return true;
        }
        }
        }
        };

        var zNodes = <?php echo $tree; ?>;
        zNodes.unshift({ category_id:0, category_pid:-1, name:"商城分类列表", open:true});
        var code;

        function showCode(str) {
        if (!code) code = $("#code");
        code.empty();
        code.append("<li>"+str+"</li>");
            }

            $(document).ready(function(){
                var t = $("#treeDemo");
                t = $.fn.zTree.init(t, setting, zNodes);
//                demoIframe = $("#testIframe");
//                demoIframe.bind("load", loadReady);
//                var zTree = $.fn.zTree.getZTreeObj("tree");
//                zTree.selectNode(zTree.getNodeByParam("category_id",'13'));
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
            $.post("{{u('category/del')}}",{'category_id':id},function(res){
                if(res.valid == 0){
                    layer.alert(res.message);
                    return;
                }else{
                	$(obj).parents("tr").remove();
	                layer.msg('已删除!',{icon:1,time:1000});
	                location.href = "{{u('category/index')}}";	
                }
            },'json');

        });
    }
</script>
</block>