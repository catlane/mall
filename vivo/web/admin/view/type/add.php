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

    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="{{u('index/index')}}">首页</a>
            </li>
            <li class="active">
                <a class="Current_page iframeurl" href="{{u('type/index')}}" style="color: rgb(76, 143, 189); cursor: pointer;">类型管理</a>
            </li>
            <li class="active" id="parentIframe" style="display: inline-block;"><span class="parentIframe iframeurl">添加类型</span></li>
            <li class="active" id="parentIfour" style="display: none;"></li>
        </ul>
    </div>
    <form action="" method="post">
        <div class=" clearfix">
            <div id="add_brand" class="clearfix">
                <div class="left_add" style="width: 100%;">
                    <div class="title_name" style="width: 100%">添加类型</div>
                    <ul class="add_conent">
                        <li class=" clearfix"><label class="label_name"><i>*</i>类型名称：</label> <input name="type_name" type="text" class="add_text"/></li>
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
            $.post("{{u('type/add')}}",data,function (res) {
                if(res.valid){
                    layer.alert('添加成功',{
                        title: '提示框',
                        icon:1,
                        yes:function () {
                            location.href = "{{u('type/index')}}";
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