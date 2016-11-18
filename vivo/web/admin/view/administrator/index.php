<extend file='index.html'/>
<block name="content">
    <link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/Validform/5.3.2/Validform.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/js/lrtk.js" type="text/javascript" ></script>

<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="{{u('index/index')}}">首页</a>
        </li>
        <li class="active"><span class="Current_page iframeurl" name="" style="color: rgb(51, 51, 51); cursor: default;">管理员管理</span></li>
        <li class="active" id="parentIframe" style="display: none;"><span class="parentIframe iframeurl"> </span></li>
        <li class="active" id="parentIfour" style="display: none;"></li>
    </ul>
</div>

<div class="page-content clearfix" style="margin-top: 10px;">
    <div class="administrator">
        <div class="d_Confirm_Order_style">
            <!--操作-->
            <div class="border clearfix">
       <span class="l_f">
        <a href="javascript:;" id="administrator_add" class="btn btn-warning"><i class="fa fa-plus"></i> 添加管理员</a>
       </span>
                <span class="r_f">共：<b>5</b>人</span>
            </div>
            <!--管理员列表-->
            <div class="clearfix administrator_style" id="administrator">
                <div class="left_style">
                    <div id="scrollsidebar" class="left_Treeview">
                        <div class="show_btn" id="rightArrow"><span></span></div>
                        <div class="widget-box side_content" >
<!--                            <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>-->
                            <div class="side_list"><div class="widget-header header-color-green2"><h4 class="lighter smaller">管理员分类列表</h4></div>
                                <div class="widget-body">
                                    <ul class="b_P_Sort_list">
                                        <li><i class="fa fa-users green"></i> <a href="#">全部管理员（{{count($roleAll)}}）</a></li>
                                        <foreach from="$roleAll" key="$key" value="$value">
                                            <li><i class="fa fa-users orange"></i> <a href="#">{{$value['name']}}（1）</a></li>
                                        </foreach>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table_menu_list"  id="testIframe">
                    <table class="table table-striped table-bordered table-hover" id="sample_table">
                        <thead>
                        <tr>
                            <th width="25px"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                            <th width="80px">编号</th>
                            <th width="250px">登录名</th>
                            <th width="100px">手机</th>
                            <th width="100px">邮箱</th>
                            <th width="100px">角色</th>
                            <th width="180px">加入时间</th>
                            <th width="70px">状态</th>
                            <th width="200px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <foreach from="$user_data" key="$key" value="$value">
                            <tr>
                                <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
                                <td>{{$value["admin_user_id"]}}</td>
                                <td>{{$value["admin_user_account"]}}</td>
                                <td>
                                    <if value="$value['admin_user_phone'] == ''">
                                        空
                                    <else>
                                        {{$value["admin_user_phone"]}}
                                    </if>
                                </td>
                                <td>
                                    <if value="$value['admin_user_email'] == ''">
                                        空
                                        <else>
                                            {{$value["admin_user_email"]}}
                                    </if>
                                </td>
                                <td>
                                    {{$value[0]["name"]}}
                                </td>
                                <td>{{date("Y-m-d H:i:s",$value['admin_user_regTime'])}}</td>
                                <td class="td-status">
                                        <if value="$value[0]['status'] == 1">
                                            <span class="label label-success radius">已启用</span>
                                        <else>
                                            <span class="label label-defaunt radius">已停用</span>
                                        </if>
                                    </td>
                                <td class="td-manage">
                                    <if value="$value[0]['status'] == 1">
                                        <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="fa fa-check  bigger-120"></i></a>
                                    <else>
                                        <a style="text-decoration:none" class="btn btn-xs " onclick="member_start(this,id)" href="javascript:;" title="启用"><i class="fa fa-close bigger-120"></i></a>
                                    </if>


                                    <a title="编辑" onclick="member_edit('编辑','member-add.html','4','','510')" href="javascript:;"  class="btn btn-xs btn-info" ><i class="fa fa-edit bigger-120"></i></a>
                                    <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
                                </td>
                            </tr>
                        </foreach>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--添加管理员-->
    <div id="add_administrator_style" class="add_menber" style="display:none">
        <form action="" method="post" id="form-admin-add">
            <div class="form-group">
                <label class="form-label"><span class="c-red">*</span>管理员：</label>
                <div class="formControls">
                    <input type="text" class="input-text" value="" placeholder="" id="user-name" name="admin_user_account" datatype="*2-16" nullmsg="用户名不能为空">
                </div>
                <div class="col-4"> <span class="Validform_checktip"></span></div>
            </div>
            <div class="form-group">
                <label class="form-label"><span class="c-red">*</span>初始密码：</label>
                <div class="formControls">
                    <input type="password" placeholder="密码" name="admin_user_password" autocomplete="off" value="" class="input-text" datatype="*6-20" nullmsg="密码不能为空">
                </div>
                <div class="col-4"> <span class="Validform_checktip"></span></div>
            </div>
            <div class="form-group">
                <label class="form-label">角色：</label>
                <div class="formControls "> <span class="select-box" style="width:150px;">
				<select class="select" name="admin-role" size="1">
					<option value="0">请选择</option>
                    <foreach from="$roles" key="$key" value="$value">
                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                    </foreach>
				</select>
				</span> </div>
            </div>
            <div>
                <input class="btn btn-primary radius" type="submit" id="Add_Administrator" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        </form>
    </div>
</div>
<script type="text/javascript">
    jQuery(function($) {
        var oTable1 = $('#sample_table').dataTable( {
            "aaSorting": [[ 0, "asc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
//                {"orderable":false,"aTargets":[0,2,3,4,5,7,8,]}// 制定列不参与排序
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

</script>
<script type="text/javascript">
    $(function() {
        $("#administrator").fix({
            float : 'left',
            //minStatue : true,
            skin : 'green',
            durationTime :false,
            spacingw:50,//设置隐藏时的距离
            spacingh:270,//设置显示时间距
        });
    });
    //字数限制
    function checkLength(which) {
        var maxChars = 100; //
        if(which.value.length > maxChars){
            layer.open({
                icon:2,
                title:'提示框',
                content:'您输入的字数超过限制!',
            });
            // 超过限制的字数了就将 文本框中的内容按规定的字数 截取
            which.value = which.value.substring(0,maxChars);
            return false;
        }else{
            var curr = maxChars - which.value.length; //250 减去 当前输入的
            document.getElementById("sy").innerHTML = curr.toString();
            return true;
        }
    };
    $(function () {
        //初始化宽度、高度
        $(".widget-box").height($("#iframe").height());
        $(".table_menu_list").width($("#iframe").width()-260);
        $(".table_menu_list").height($(window).height()-215);
    })

//    //当文档窗口发生改变时 触发
//    $(window).resize(function(){
//        $(".widget-box").height($(window).height()-215);
//        $(".table_menu_list").width($("#iframe").width()-260);
//        $(".table_menu_list").height($(window).height()-215);
//    })
//    laydate({
//        elem: '#start',
//        event: 'focus'
//    });

    /*用户-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="fa fa-close bigger-120"></i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
            $(obj).remove();
            layer.msg('已停用!',{icon: 5,time:1000});
        });
    }
    /*用户-启用*/
    function member_start(obj,id){
        layer.confirm('确认要启用吗？',function(index){
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="fa fa-check  bigger-120"></i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!',{icon: 6,time:1000});
        });
    }
    /*产品-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

    /*产品-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }
    /*添加管理员*/
    $('#administrator_add').on('click', function(){
        layer.open({
            type: 1,
            title:'添加管理员',
            area: ['700px',''],
            shadeClose: false,
            content: $('#add_administrator_style'),

        });
    })
    /*//表单验证提交
    $("#form-admin-add").Validform({

        tiptype:2,

        callback:function(data){
            form[0].submit();
            if(data.status==1){
                layer.msg(data.info, {icon: data.status,time: 5000}, function(){
//                    location.reload();//刷新页面
                });
            }
            else{
                layer.msg(data.info, {icon: data.status,time: 3000});
            }
            var index =parent.$("#iframe").attr("src");
            parent.layer.close(index);
            //
        }
    });*/
    $("#form-admin-add").submit(function () {
        var data = $(this).serialize();
        $.post("{{u('administrator/add')}}",data,function (res) {
            if(res.valid){
                layer.alert("添加管理员提示：添加成功");
                setTimeout(function () {
                    location.reload();//刷新页面
                },1000)
            }else{
                layer.alert("添加管理员提示："+res.message);
            }
        },"json")
        return false;
    })

</script>
</block>
