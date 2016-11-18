<extend file='index.html'/>
<block name="content">
    <link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
    <script src="{{__ROOT__}}/web/admin/view/js/lrtk.js" type="text/javascript" ></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.queue.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.speed.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/handlers.js"></script>

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
                    <foreach from="$data" key="$key" value="$value">
                        <tr>
                            <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
                            <td>{{$value['advertising_id']}}</td>
                            <td>{{$value["advertising_sort"]}}</td>
                            <td style="width: 100px;height: 30px;">
                                <foreach from="$value['advertising_img']" key="$k" value="$v">
                                    <span class="ad_img">
                                        <img src="{{$v}}"  width="100%" height="100%"/>
                                    </span>
                                </foreach>

                            </td>
                            <td>{{$value['advertising_size']}}</td>
                            <td><a href="http://{{$value['advertising_url']}}" target="_blank">
                                    {{$value['advertising_url']}}
                                </a></td>
                            <td>{{date("Y-m-d H:i:s",$value["advertising_time"])}}</td>
                            <td class="td-status">
                                <if value="$value['advertising_status'] == 1">
                                  <span class="label label-success radius">显示</span>
                                <else>
                                    <span class="label label-defaunt radius">已关闭</span>
                                </if>
                            </td>
                            <td class="td-manage">
                                <if value="$value['advertising_status'] == 0"><!--这就是关闭状态-->
                                    <a style="text-decoration:none" class="btn btn-xs member_start" advertising_id="{{$value['advertising_id']}}" href="script:;" title="显示"><i class="fa fa-close bigger-120"></i></a>
                                <else>
                                    <a href="javascript:;" title="停用"  class="btn btn-xs btn-success member_stop" advertising_id="{{$value['advertising_id']}}"><i class="fa fa-check  bigger-120"></i></a>
                                </if>
<!--                                <a title="编辑" href="javascript:;" advertising_id="{{$value['advertising_id']}}" class="btn btn-xs btn-info edit" ><i class="fa fa-edit bigger-120"></i></a>-->
                                <a title="删除" href="javascript:;"  onclick="member_del(this,{{$value['advertising_id']}})" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
                            </td>
                        </tr>
                    </foreach>

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
                   <div class="resizebox"><img src="{{__ROOT__}}/web/admin/view/images/image.png" width="100px" alt="" height="100px"/></div></div>
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
    </form>
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
            $.post("{{u('advertising/editStatus')}}",{"id":id},function (res) {
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
            $.post("{{u('advertising/editStatus')}}",{"id":id},function (res) {
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
            $.post("{{u('advertising/del')}}",{"id":id},function (res) {
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
                    $.post("{{u('advertising/add')}}",data,function (res) {
                        if(res.valid){
                            layer.alert('添加成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                            document.getElementsByTagName("form")[0].reset();
                            $(".logobox .resizebox").html("<img src='" + "{{__ROOT__}}/" + "web/admin/view/images/image.png" + "' />");
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
        $.post("{{u('advertising/editShow')}}",{"id":id},function (res) {
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
                    $.post("{{u('advertising/add')}}",data,function (res) {
                        if(res.valid){
                            layer.alert('添加成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                            document.getElementsByTagName("form")[0].reset();
                            $(".logobox .resizebox").html("<img src='" + "{{__ROOT__}}/" + "web/admin/view/images/image.png" + "' />");
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
        $(".logobox .resizebox").html("<img src='" + "{{__ROOT__}}/" + "web/admin/view/images/image.png" + "' />");
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
        if($(".logobox .resizebox >:first").attr("src") == "{{__ROOT__}}/" + "web/admin/view/images/image.png"){
            $(".logobox .resizebox").html("<img src='" + "{{__ROOT__}}/web/admin/view/" + up_path +"' width='" + _up_width + "' height='" + _up_height + "'>");
        }else{
            $(".logobox .resizebox").append("<img src='" + "{{__ROOT__}}/web/admin/view/" + up_path +"' width='" + _up_width + "' height='" + _up_height + "'>");
        }
        $('.banner').val($('.banner').val() + up_path + '|');
    }

    var swfImageUpload;
    $(document).ready(function() {
        var settings = {
            flash_url : "{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.swf",
            flash9_url : "{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload_fp9.swf",
            upload_url: "{{__ROOT__}}/web/admin/view/upload.php",// 接受上传的地址
            file_size_limit : "5MB",// 文件大小限制
            file_types : "*.jpg;*.gif;*.png;*.jpeg;",// 限制文件类型
            file_types_description : "图片",// 说明，自己定义
            file_upload_limit : 100,
            file_queue_limit : 0,
            custom_settings : {},
            debug: false,
            // Button settings
            button_image_url: "{{__ROOT__}}/web/admin/view/Widget/swfupload/upload-btn.png",
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
</block>