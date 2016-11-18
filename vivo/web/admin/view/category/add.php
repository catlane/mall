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
    <script src="{{__ROOT__}}/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.queue.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/swfupload.speed.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/swfupload/handlers.js"></script>
    <style>
        .add_text{
            width: 75%;
            margin-left: 10px;
        }
    </style>
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="{{u('index/index')}}">首页</a>
            </li>
            <li class="active">
                <a class="Current_page iframeurl" href="{{u('category/index')}}" style="color: rgb(76, 143, 189); cursor: pointer;">分类管理</a>
            </li>
            <li class="active" id="parentIframe" style="display: inline-block;"><span class="parentIframe iframeurl">添加分类</span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <form action="" method="post">
        <div class=" clearfix">
            <div id="add_brand" class="clearfix">
                <div class="left_add" style="width: 100%;">
                    <div class="title_name" style="width: 100%">添加分类</div>
                    <ul class="add_conent">
                        <li class=" clearfix"><label class="label_name"><i>*</i>分类名称：</label> <input name="category_name" type="text" class="add_text"/></li>
                        <li class=" clearfix"><label class="label_name"><i>*</i>分类排序：</label> <input name="category_sort" type="number" min="1" class="add_text"/></li>
                        <li class=" clearfix"><label class="label_name"><i>*</i>分类层级：</label>
                            <select name="category_pid" id="" class="add_text">
                                <option value="0" selected>顶级分类</option>
                            </select>
                        </li>
                        <li class=" clearfix"><label class="label_name"><i>*</i>归属类型：</label>
                            <select name="type_type_id" id="" class="add_text">
                                <option value="">请选择类型</option>
                                <foreach from="$type" key = "$key" value="$value">
                                    <option value="{{$value['type_id']}}">{{$value['type_name']}}</option>
                                </foreach>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="button_brand" style="bottom: 30px;position: fixed;">
                <input name="" type="button"  class="btn btn-warning btn-save" value="保存"/>
                <input name="" type="reset" value="取消" class="btn btn-warning"/>
            </div>
        </div>
    </form>
    </body>
    </html>
    <script type="text/javascript">

        $(document).ready(function(){
            $(".left_add").height($(window).height()-200);
            $(".select").height($(window).height()-195);
            $("#select_style").height($(window).height()-220);
            //当文档窗口发生改变时 触发
            $(window).resize(function(){
                $(".left_add").height($(window).height()-200);
                $(".select").height($(window).height()-195);
                $("#select_style").height($(window).height()-220);
            });
        })
    </script>
    <script>
        //这是异步提交
        $('.btn-save').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("{{u('category/add')}}",data,function (res) {
                if(res.valid){
                    layer.alert('添加成功',{
                        title: '提示框',
                        icon:1,
                        yes:function () {
                            location.href = "{{u('category/index')}}";
                        }
                    });
//                    location.href = "{{u('type/index')}}";
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
        })
    </script>
</block>