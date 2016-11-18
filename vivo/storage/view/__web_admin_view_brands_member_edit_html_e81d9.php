<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="<?php echo __ROOT__?>/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="<?php echo __ROOT__?>/web/admin/view/js/jquery-1.9.1.min.js"></script>

    <script src="<?php echo __ROOT__?>/web/admin/view/js/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/web/admin/view/css/uploadify.css">


    <script src="<?php echo __ROOT__?>/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>

</head>
<body>
<style>
    .member_show{
        padding: 20px;
        width: 100%;
    }
    #SWFUpload_0_1{
        width: 100%;
    }
</style>
<div class="member_show" >
    <form action="">
        <div class="form-group has-success">
            <label class="control-label" for="brands_name">品牌名称</label>
            <input type="text" class="form-control" id="brands_name" name="brands_name" value="<?php echo $oldData['brands_name']?>">
        </div>
        <!--上传图片start-->
        <div class="form-group has-warning" style="overflow: hidden;">
            <label class="control-label" for="brands_name" style="width: 100%">品牌Logo</label>
            <div class="form-group has-error" style="float: left;width: 70%;">
                <input type="text" class="form-control" id="brands_logo" name="brands_logo" readonly="" value="<?php echo $oldData['brands_logo']?>" style="padding: 0 10px">
            </div>
            <div class="input-group" style="float: left;">
                <div id="queue"></div>
                <input style="width: 100%" id="file_upload" name="file_upload" type="file" multiple="true">
            </div>
        </div>
        <div class="input-group" style="margin-top:5px;">
            <img src="<?php echo $oldData['brands_logo']?>" class="img-responsive img-thumbnail" width="150">
            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
        </div>
        <!--上传图片end-->
        <div class="form-group has-error">
            <label class="control-label" for="brands_sort">品牌排序</label>
            <input type="number" minlength="1" class="form-control" id="brands_sort" name="brands_sort" value="<?php echo $oldData['brands_sort']?>">
        </div>
        <div class="form-group has-warning">
            <label class="control-label" for="brands_ifhot">品牌是否热门</label>
            <select name="brands_ifhot" id="brands_ifhot" class="form-control">
                <option value="1" <?php if($oldData['brands_ifhot'] == 1){?>
                selected
               <?php }?> >热门</option>
                <option value="0" <?php if($oldData['brands_ifhot'] == 0){?>
                selected
               <?php }?> >不热门</option>
            </select>
        </div>
        <input type="hidden" name="brands_id" value="<?php echo $oldData['brands_id']?>">
        <button type="button" class="btn btn-block btn-primary submit">确定修改</button>
    <input type='hidden' name='__TOKEN__' value='32f690a1db74a90ddaf10ce17c8e4c49'/></form>

</div>
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
            'swf'      : '<?php echo __ROOT__?>/web/admin/view/uploadify.swf',
            'uploader' : "<?php echo u('brands/img')?>",
            'buttonText' : '选择文件',
//            'uploadLimit' : 1,//文件上传数量
            'onUploadSuccess' : function(file, data, response) {
                data = $.parseJSON(data);
                $('.img-responsive').attr('src',"<?php echo __ROOT__?>/" + data.path);
                $('#brands_logo').val(data.path);
            },

        });
    });
    function removeImg(obj) {
        var src = $(obj).parent().prev().find('input').val();
        if(src == 'resource/images/nopic.jpg'){
            return false;
        }
        $.post("<?php echo u('brands/delImg')?>",{'src':src},function () {
        },'json')
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
</script>
<script>
    $('.submit').click(function(){
        var data = $(this).parents('form').serialize();
        var id = $(this).siblings('input[type=hidden]').val();
        $.post("<?php echo u('brands/edit')?>",data,function (res) {
            return;
            if(res.valid){
                layer.alert(res.message,{
                    title: '提示框',
                    icon:1,
                    time:3000,
                    yes:function () {
                        parent.location.href = "<?php echo u('brands/index')?>";
                    },
                });
                setTimeout(function () {
                    parent.location.href = "<?php echo u('brands/index')?>";
                },3000)
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
</body>
</html>