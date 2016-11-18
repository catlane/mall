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
            <label class="control-label" for="category_name">分类名称</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="<?php echo $oldData['category_name']?>">
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="category_sort">分类排序</label>
            <input type="text" class="form-control" id="category_sort" name="category_sort" value="<?php echo $oldData['category_sort']?>">
        </div>
        <div class="form-group has-warning">
            <label class="control-label" for="category_pid">分类层级</label>
            <select name="category_pid" id="category_pid" class="form-control">
                <option value="<?php echo $pid['category_id']?>" selected ><?php echo $pid['category_name']?></option>
            </select>
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="type_type_id">归属类型</label>
            <select name="type_type_id" id="" class="form-control" id="type_type_id">
                <option value="<?php echo $pid['type_type_id']?>" ><?php echo $pid['type_name']?></option>
            </select>
        </div>
        <input type="hidden" name="category_id" value="<?php echo $oldData['category_id']?>">
        <button type="button" class="btn btn-block btn-primary submit">确定修改</button>
    <input type='hidden' name='__TOKEN__' value='cd0bf0cc922641a1863c4def5b7c222c'/></form>

</div>
<script>
    $('.submit').click(function(){
        var data = $(this).parents('form').serialize();
        $.post("<?php echo u('category/addSon')?>",data,function (res) {
            if(res.valid){
                layer.alert(res.message,{
                    title: '提示框',
                    icon:1,
                    time:3000,
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
    })
</script>
</body>
</html>