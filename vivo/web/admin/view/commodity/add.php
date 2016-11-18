<extend file='index.html'/>
<block name="content">

        <!--[if lt IE 9]>
        <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/html5.js"></script>
        <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/PIE_IE678.js"></script>
        <![endif]-->
        <link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
        <!--[if IE 7]>
        <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->
        <link href="{{__ROOT__}}/web/admin/view/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
        <link href="{{__ROOT__}}/web/admin/view/Widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />


        <!--这是上传图片-->
        <script src="{{__ROOT__}}/web/admin/view/js/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/web/admin/view/css/uploadify.css">


    <style>
        input.input-text{
            vertical-align: bottom;
        }
    </style>
    <div class="clearfix" id="add_picture">
        <div class="page_right_style">
            <div class="type_title">添加商品</div>
            <form action="script:;" method="post" class="form form-horizontal" id="form-article-add">
                <div class="clearfix cl">
                    <label class="form-label col-2"><span class="c-red">*</span>商品名称：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="" placeholder="" id="" name="commodity_name"></div>
                </div>
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品标题：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="" placeholder="" id="" name="commodity_title"></div>
                </div>
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品货号：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="" placeholder="" id="" name="commodity_num"></div>
                </div>

                <div class=" clearfix cl">
                    <div class="Add_p_s">
                        <label class="form-label col-2">单位：</label>
                        <div class="formControls col-2">
                            <input type="text" class="input-text" value="" placeholder="商品单位" id="" name="commodity_unit">
                        </div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">市场价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="市场价格" id="" name="commodity_market_price" >元</div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">商城价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="商城价格" id="" name="commodity_mall_price" >元</div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">总库存：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="总库存" id="" name="commodity_all_stock" ></div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">点击率：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="" placeholder="点击率" id="" name="commodity_click"></div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">品牌：</label>
                        <div class="formControls col-2">
                            <span class="select-box">
                                <select class="select" name="brands_brands_id">
                                    <option value="0">请选择</option>
                                    <foreach from="$brandData" key = "$key" value = "$value">
                                        <option value="{{$value['brands_id']}}">{{$value['brands_name']}}</option>
                                    </foreach>
                                </select>
				            </span>
                        </div>
                    </div>
                    <div class="Add_p_s">
                        <label class="form-label col-2">分类：</label>
                        <div class="formControls col-2">
                            <span class="select-box">
                                <select class="select category" name="category_id">
                                    <option value="0">请选择</option>
                                    <foreach from="$cateData" key="$key" value="$value">
                                        <option value="{{$value['category_id']}}" category_pid = "{{$value['category_pid']}}">{{$value['_category_name']}}</option>
                                    </foreach>
                                </select>
				            </span>
                        </div>
                    </div>
                </div>

<!--                这是商品属性-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品属性：</label>
                    <div class="formControls col-10" id="attr">
                        <table class="table table-hover">
                            <tr>
                                <td>...</td>
                                <td colspan="2">...</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div>
                </div>
<!--                这是商品规格-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品规格：</label>
                    <div class="formControls col-10" id="norm">
                        <table class="table table-hover">
                            <tr>
                                <td>...</td>
                                <td colspan="2">...</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--上传图片start-->
                <div class="clearfix cl">
                    <label class="form-label col-2">列表图片：</label>
                    <div class="formControls col-10" style="position: relative">
                            <input type="text" class="form-control" style="margin-left: 0;width: 70%;float: left;" id="commodity_list_img" name="commodity_list_img" readonly="" value="" style="padding: 0 10px">
                            <div style="position: absolute;right: 10%;">
                                <div id="queue"></div>
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                            </div>
                    </div>
                </div>

                <div class="clearfix cl ">
                    <label class="form-label col-2">图片展示：</label>
                        <div class="input-group listImg" style="margin-top:5px;margin-left: 10px;float: left;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgOnce(this)">×</em>
                        </div>
                </div>
                <!--上传图片end-->

                <!--上传图片start-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品图册：</label>
                    <div class="formControls col-10" style="position: relative">
                        <input type="text" class="form-control" style="margin-left: 0;width: 70%;float: left;" id="many_image" name="many_image" readonly="" value="" style="padding: 0 10px">
                        <div style="position: absolute;right: 10%;">
                            <div id="queue"></div>
                            <input id="many_image_upload" name="many_image_upload" type="file" multiple="true">
                        </div>
                    </div>
                </div>

                <div class="clearfix cl" manyImg>
                    <label class="form-label col-2">图片展示：</label>
                    <div class="manyImg">
                        <div class="input-group" style="margin-top:5px;margin-left: 10px;float: left;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail many_img" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgMany(this)">×</em>
                        </div>
                    </div>
                </div>
                <!--上传图片end-->




                <div class="clearfix cl">
                    <label class="form-label col-2">商品详情：</label>
                    <div class="formControls col-10">
                        <script id="about_commodity_about" name="about_commodity_about" type="text/plain" style="width:100%;height:400px;"></script>
                    </div>
                </div>
                <div class="clearfix cl">
                    <label class="form-label col-2">售后服务：</label>
                    <div class="formControls col-10">
                        <script id="about_commodity_afterMarket" name="about_commodity_afterMarket" type="text/plain" style="width:100%;height:400px;"></script>
                    </div>
                </div>
                <div class="clearfix cl">
                    <label class="form-label col-2">允许评论：</label>
                    <div class="formControls col-2 skin-minimal">
                        <div class="check-box" style=" margin-top:9px"><input type="checkbox" id="checkbox-1"><label for="checkbox-1">&nbsp;</label></div>
                    </div>
                </div>
                <div class="clearfix cl">
                    <div class="Button_operation">
                        <button class="btn btn-primary radius submit" type="submit"><i class="icon-save "></i>保存并提交审核</button>
                        <button onClick="article_save();" class="btn btn-secondary  btn-warning" type="button"><i class="icon-save"></i>保存草稿</button>
                        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/Validform/5.3.2/Validform.min.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/Widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
    <script src="{{__ROOT__}}/web/admin/view/js/lrtk.js" type="text/javascript" ></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.js"></script>
    <script type="text/javascript" src="{{__ROOT__}}/web/admin/view/js/H-ui.admin.js"></script>
    <script>

        $( document).ready(function(){
//初始化宽度、高度
            $(".page_right_style").height($("#iframe").height());
            $(".page_right_style").width($("#iframe").width());
            //当文档窗口发生改变时 触发
            $(window).resize(function(){
                $(".page_right_style").height($(window).height());
                $(".page_right_style").width($("#iframe").width());
            });
        });
        //这是商品详情
        $(function(){
            var about_commodity_about = UE.getEditor('about_commodity_about');
        });
        //这是售后服务
        $(function(){
            var about_commodity_afterMarket = UE.getEditor('about_commodity_afterMarket');
        });
    </script>


    <script>
//        这是当我点击分类的时候，然后我异步变化他所对应的类型属性以及规格
        $('.category').change(function () {
            var category_id = $(this).val();
            var category_pid = $(this).find("option:selected").attr('category_pid');
            var attr = '<table class="table table-hover">';
            var norm = '<table class="table table-hover">';
            if(category_pid == 0){
                layer.alert("顶级分类不允许添加商品",{
                    title: '提示框',
                    icon:0,
                });
                $(this).val(0);
                return false;
            }
            $.post("{{u('commodity/changeType')}}",{'category_id':category_id},function(typeData){
                $.each(typeData,function (k,v) {
                    if(v.type_attr_type == 0){//就是属性
                        attr += '<tr><td>' + v.type_attr_name + '</td><td><select name="attr[' + v.type_attr_id + ']"><option value="0">请选择</option>';
                        $.each(v.type_attr_value,function (kk,vv) {
                            attr += '<option value="' + vv +'">' + vv +'</option>';
                        })
                        attr+= '</select></td></tr>';
                        attr += '<input type="hidden" name="type_id" value="' + v.type_type_id +'" />';
                    }else{//就是规格
                        norm += '<tr><td>' + v.type_attr_name + '</td><td><select name="spec[' + v.type_attr_id +'][value][]"><option value="0">请选择</option>';
                        $.each(v.type_attr_value,function (kk,vv) {
                            norm += '<option value="' + vv +'">' + vv +'</option>';
                        })
                        norm+= '</select></td>';
                        norm += '<td><input name="spec[' + v.type_attr_id +'][addPrice][]" value="0" placeholder="请输入附加价格" /></td>';
                        norm += '<td><button type="button" class="btn btn-primary addNorm">添加规格</button></td>';
                        norm += '</tr>';
                		norm += '<input type="hidden" name="type_id" value="' + v.type_type_id +'" />';
                    }
                })



                attr += '</table>';
                norm += '</table>';
                $('#attr').html(attr);
                $('#norm').html(norm);
            },'json')
        })
    </script>
    <script>
        $(function () {
            $('#norm').delegate('.addNorm','click',function () {
                //首先复制一行
                var tr = $(this).parents('tr').clone();
                tr.find('.addNorm').attr('class','btn btn-danger delNorm').html('删除规格');
                $(this).parents('tr').after(tr);
            })
            $('#norm').delegate('.delNorm','click',function () {
                //首先删除当前一行
                $(this).parents('tr').remove();
            })
        })
    </script>
<!--    这是上传图片,列表图*********many_image_upload-->
    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#file_upload').uploadify({
                'formData'     : {
                    'buttonClass' : 'some-class',
                    'successTimeout' : 10,
                    'timestamp' : '<?php echo $timestamp;?>',
                    'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                },
                'swf'      : '{{__ROOT__}}/web/admin/view/uploadify.swf',
                'uploader' : "{{u('commodity/img')}}",
                'buttonText' : '选择文件',
//            'uploadLimit' : 10,//文件上传数量
                'onUploadSuccess' : function(file, data, response) {
                    data = $.parseJSON(data);
                    $('.listImg img').attr('src',"{{__ROOT__}}/" + data.path);
                    $('#commodity_list_img').val(data.path);
                },

            });
        });
        function removeImgOnce(obj) {
            var src = $(obj).parent().prev().find('input').val();
            if(src == 'resource/images/nopic.jpg'){
                return false;
            }
            $.post("{{u('commodity/delImg')}}",{'src':src},function () {
            },'json')
            $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
            $("#commodity_list_img").val('');
        }
    </script>


    <!--    这是上传图片,多张图片上传*********-->
    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#many_image_upload').uploadify({
                'formData'     : {
                    'buttonClass' : 'some-class',
                    'successTimeout' : 10,
                    'timestamp' : '<?php echo $timestamp;?>',
                    'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                },
                'swf'      : '{{__ROOT__}}/web/admin/view/uploadify.swf',
                'uploader' : "{{u('commodity/img')}}",
                'buttonText' : '选择文件',
//            'uploadLimit' : 10,//文件上传数量
                'onUploadSuccess' : function(file, data, response) {
                    var img = $('div.manyImg').html();
                    var many_path = '';
                    if(img.indexOf('resource/images/nopic.jpg') != -1){
                        //就说明存在
                        img = '';
                    }
                    data = $.parseJSON(data);
                    img += '<div class="input-group" style="margin-top:5px;margin-left: 10px;float: left;">';
                    img += '<img src="' + data.path +'" class="img-responsive img-thumbnail many_img" width="150">';
                    img += '<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgMany(this)">×</em>';
                    img += '</div>';
                    $('.manyImg').html(img);
                    $('.manyImg .many_img').each(function(k,v){
                        many_path += $(this).attr('src') + '|';
                    })
                    $('#many_image').val(many_path);
                },

            });
        });
        function removeImgMany(obj) {
            //这是获取到当前删除图片的路径
            var src = $(obj).siblings('img').attr('src');
            if(src == 'resource/images/nopic.jpg'){
                return false;
            }
            $.post("{{u('commodity/delImg')}}",{'src':src},function () {
            },'json')
            var many_img = '';
            if($('.manyImg .img-responsive').size() > 1){//如果大于1，就删除
                $(obj).parents('.input-group').remove();
                $('.many_img').each(function(k,v){
	        		many_img += $(this).attr('src');
	        	})
            }else{//小于1，就替换路径
            	many_img = '';
                $(obj).siblings('img').attr('src', 'resource/images/nopic.jpg');
                //然后从text中那里面删除，
            }
           //然后删除当前图片的路径从字符串当中
			$('#many_image').val(many_img);        	
        }
    </script>
<!--    这是表单提交,ajax异步提交-->
    <script>
        $('.submit').click(function () {
            var data = $(this).parents('form').serialize();
            $.post("{{u('commodity/add')}}",data,function (res) {
                if(res.valid){
                    layer.alert('添加成功',{
                        title:'提示框',
                        icon:1,
                        yes:function () {
                            location.href = "{{u('commodity/index')}}";
                        }
                    })
                }else{
                    layer.alert(res.message,{
                        title: '提示框',
                        icon:0,
                    })
                }
            },'json')
        })
    </script>
</block>
