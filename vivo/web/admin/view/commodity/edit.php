        <link href="{{__ROOT__}}/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace.min.css" />
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/css/style.css"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="{{__ROOT__}}/web/admin/view/assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="{{__ROOT__}}/web/admin/view/assets/js/ace-extra.min.js"></script>
		<!--[if lt IE 9]>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/html5shiv.js"></script>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/respond.min.js"></script>
		<![endif]-->
        <!--[if !IE]> -->
		<script src="{{__ROOT__}}/web/admin/view/js/jquery-1.9.1.min.js"></script>
		<!-- <![endif]-->
		<!--[if IE]>
         <script type="text/javascript">window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");</script>
        <![endif]-->
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/bootstrap.min.js"></script>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/typeahead-bs2.min.js"></script>
		<!--[if lte IE 8]>
		  <script src="{{__ROOT__}}/web/admin/view/assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="{{__ROOT__}}/web/admin/view/assets/js/ace-elements.min.js"></script>
		<script src="{{__ROOT__}}/web/admin/view/assets/js/ace.min.js"></script>
        <script src="{{__ROOT__}}/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>
		<script src="{{__ROOT__}}/web/admin/view/assets/laydate/laydate.js" type="text/javascript"></script>
        
        
        
        
        
        
        
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
    <div class="clearfix" id="add_picture" style="width: 100%;">
        <div class="page_right_style" style="width: 100%">
            <form action="script:;" method="post" class="form form-horizontal" id="form-article-add">
            	<input type="hidden" name="type_id" value="{{$oldData['type_id']}}" />
                <div class="clearfix cl">
                    <label class="form-label col-2"><span class="c-red">*</span>商品名称：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="{{$oldData['commodity_name']}}" placeholder="" id="" name="commodity_name"></div>
                </div>
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品标题：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="{{$oldData['commodity_title']}}" placeholder="" id="" name="commodity_title"></div>
                </div>
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品货号：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="{{$oldData['commodity_num']}}" placeholder="" id="" name="commodity_num"></div>
                </div>

                <div class=" clearfix cl">
                    <div class="Add_p_s">
                        <label class="form-label col-2">单位：</label>
                        <div class="formControls col-2">
                            <input type="text" class="input-text" value="{{$oldData['commodity_unit']}}" placeholder="商品单位" id="" name="commodity_unit">
                        </div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">市场价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="{{$oldData['commodity_market_price']}}" placeholder="市场价格" id="" name="commodity_market_price" >元</div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">商城价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="{{$oldData['commodity_mall_price']}}" placeholder="商城价格" id="" name="commodity_mall_price" >元</div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">总库存：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" placeholder="总库存" id="" name="commodity_all_stock" value="{{$oldData['commodity_all_stock']}}" ></div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">点击率：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" placeholder="点击率" id="" name="commodity_click" value="{{$oldData['commodity_click']}}"></div>
                    </div>

                    <div class="Add_p_s">
                        <label class="form-label col-2">品牌：</label>
                        <div class="formControls col-2">
                            <span class="select-box">
                                <select class="select" name="brands_brands_id">
                                    <option value="0">请选择</option>
                                    <foreach from="$brandData" key = "$key" value = "$value">
                                        <option value="{{$value['brands_id']}}" <if value="$oldData['brands_brands_id'] == $value['brands_id']">selected</if> >{{$value['brands_name']}}</option>
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
                                        <option value="{{$value['category_id']}}" category_pid = "{{$value['category_pid']}}" <if value="$oldData['category_id'] == $value['category_id']">selected</if> >{{$value['_category_name']}}</option>
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
                            <tbody>
                                <foreach from="$oldData['attr']" key="$key" value="$value">
                                    <tr>
                                        <td>{{$value['type_attr_name']}}</td>
                                        <td>
                                            <select name="attr[{{$value['type_attr_type_attr_id']}}]">
                                            	<option value="0">请选择</option>
                                                <foreach from="$value['type_attr_value']" key="$k" value="$v">
                                                    <option value="{{$v}}" <if value="$value['commodity_attr_value'] == $v">selected</if> >{{$v}}</option>
                                                </foreach>
                                            </select>
                                        </td>
                                    </tr>
                                </foreach>
                            </tbody>
                        </table>
                    </div>
                </div>
<!--                这是商品规格-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品规格：</label>
                    <div class="formControls col-10" id="norm">
                        <table class="table table-hover">
                            <tbody>
                                <foreach from="$oldData['spec']" key="$key" value="$value">
                                    <tr>
                                        <td>{{$value['type_attr_name']}}</td>
                                        <td>
                                            <select name="spec[{{$value['type_attr_type_attr_id']}}][value][]">
                                                <foreach from="$value['type_attr_value']" key="$k" value="$v">
                                                    <option value="{{$v}}" <if value="$value['commodity_attr_value'] == $v">selected</if> >{{$v}}</option>
                                                </foreach>
                                            </select>
                                        </td>
                                        <td>
                                            <input name="spec[{{$value['type_attr_type_attr_id']}}][addPrice][]" value="{{$value['commodity_attr_addprice']}}" placeholder="请输入附加价格">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary addNorm">添加规格</button>
                                        </td>
                                    </tr>
                                </foreach>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--上传图片start-->
                <div class="clearfix cl">
                    <label class="form-label col-2">列表图片：</label>
                    <div class="formControls col-10" style="position: relative">
                            <input type="text" class="form-control" style="margin-left: 0;width: 70%;float: left;" id="commodity_list_img" name="commodity_list_img" readonly="" value="{{$oldData['commodity_list_img']}}" style="padding: 0 10px">
                            <div style="position: absolute;right: 10%;">
                                <div id="queue"></div>
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                            </div>
                    </div>
                </div>

                <div class="clearfix cl ">
                    <label class="form-label col-2">图片展示：</label>
                        <div class="input-group listImg" style="margin-top:5px;margin-left: 10px;float: left;">
                            <img src="{{$oldData['commodity_list_img']}}" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgOnce(this)">×</em>
                        </div>
                </div>
                <!--上传图片end-->

                <!--上传图片start-->
                <div class="clearfix cl">
                    <label class="form-label col-2">商品图册：</label>
                    <div class="formControls col-10" style="position: relative">
                        <input type="text" class="form-control" style="margin-left: 0;width: 70%;float: left;" id="many_image" name="many_image" readonly="" value="{{$oldData['about_commodity_big_album']}}" style="padding: 0 10px">
                        <div style="position: absolute;right: 10%;">
                            <div id="queue"></div>
                            <input id="many_image_upload" name="many_image_upload" type="file" multiple="true">
                        </div>
                    </div>
                </div>

                <div class="clearfix cl" >
                    <label class="form-label col-2">图片展示：</label>
                    <div class="manyImg">
                        <foreach from="$oldData['many_image']" key="$key" value="$value">
                           <?php if($value){ ?>
                               <div class="input-group" style="margin-top:5px;margin-left: 10px;float: left;">
                                   <img src="{{$value}}" class="img-responsive img-thumbnail many_img" width="150">
                                   <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImgMany(this)">×</em>
                               </div>
                            <?php } ?>
                        </foreach>
                    </div>
                </div>
                <!--上传图片end-->




                <div class="clearfix cl">
                    <label class="form-label col-2">商品详情：</label>
                    <div class="formControls col-10">
                        <script id="about_commodity_about" name="about_commodity_about" type="text/plain" style="width:100%;height:400px;">{{$oldData['about_commodity_about']}}</script>
                    </div>
                </div>
                <div class="clearfix cl" style="overflow: scroll;">
                    <label class="form-label col-2">售后服务：</label>
                    <div class="formControls col-10">
                        <script id="about_commodity_afterMarket" name="about_commodity_afterMarket" type="text/plain" style="width:100%;height:400px;">{{$oldData['about_commodity_afterMarket']}}</script>
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
                <input type="hidden" name="commodity_id" value="{{$oldData['commodity_id']}}">
                <input type="hidden" name="about_commodity_id" value="{{$oldData['about_commodity_id']}}">
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
    //首先获取到所有的数据，然后当我点击当前这个分类的时候，然后我再把这个值赋值给他
    var oldAttrHtml = $('#attr').html();
    var oldNormHtml = $('#norm').html();
//        这是当我点击分类的时候，然后我异步变化他所对应的类型属性以及规格
        $('.category').change(function () {
            var category_id = $(this).val();
            var category_pid = $(this).find("option:selected").attr('category_pid');
            var attr = '<table class="table table-hover">';
            var norm = '<table class="table table-hover">';
            //这是判断如果是0的话，因为不能够添加商品，所以不能让他通过
            if(category_pid == 0){
                layer.alert("顶级分类不允许添加商品",{
                    title: '提示框',
                    icon:0,
                });
                $(this).val(0);
                return false;
            }
            //这是判断如果是当前这个分类的话，我再将原来数据赋值过去
            if(category_id == {{$oldData['category_id']}}){
                $('#attr').html(oldAttrHtml);
                $('#norm').html(oldNormHtml);
                return false;
            }
            $.post("{{u('commodity/changeType')}}",{'category_id':category_id},function(typeData){
                $.each(typeData,function (k,v) {
                    if(v.type_attr_type == 0){//就是属性
                        attr += '<tr><td>' + v.type_attr_name + '</td><td><select name="attr[' + v.type_attr_id + ']">';
                        $.each(v.type_attr_value,function (kk,vv) {
                            attr += '<option value="' + vv +'">' + vv +'</option>';
                        })
                        attr+= '</select></td></tr>';
                        attr += '<input type="hidden" name="type_id" value="' + v.type_type_id +'" />';
                    }else{//就是规格
                        norm += '<tr><td>' + v.type_attr_name + '</td><td><select name="spec[' + v.type_attr_id +'][value][]">';
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
                    $('.listImg img').attr('src',data.path);
                    $('#commodity_list_img').val(data.path);
                },

            });
        });
        function removeImgOnce(obj) {
            var src = $(obj).siblings('img').attr('src');
            if(src == 'resource/images/nopic.jpg'){
                return false;
            }
            $.post("{{u('commodity/editDelImg')}}",{'src':src},function () {
            },'json')
            $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
            $('#commodity_list_img').val('');
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
//            $.post("{{u('commodity/editDelImg')}}",{'src':src},function () {
//            },'json')
            var many_img = '';
            if($('.manyImg .img-responsive').size() > 1){//如果大于1，就删除
                $(obj).parents('.input-group').remove();
                $('.many_img').each(function(k,v){
	        		many_img += $(this).attr('src') + '|';
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
          $.post("{{u('commodity/edit')}}",data,function (res) {
              if(res.valid){
                  layer.alert('修改成功',{
                      title:'提示框',
                      icon:1,
                      yes:function () {
                          parent.location.href = "{{u('commodity/index')}}";
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
