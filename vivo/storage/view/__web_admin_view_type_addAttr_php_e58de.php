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
            <label class="control-label" for="type_attr_name">类型属性名称</label>
            <input type="text" class="form-control" id="type_attr_name" name="type_attr_name" value="">
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="type_attr_value">类型属性值</label>
            <input type="text" class="form-control" id="type_attr_value" name="type_attr_value" value="" placeholder="多个属性值请用 | 分开  ">
        </div>
        <div class="form-group has-warning">
            <label class="control-label" for="type_attr_type">属性类型</label>
            <select name="type_attr_type" id="type_attr_type" class="form-control">
                <option value="1">规格</option>
                <option value="0">属性</option>
            </select>
        </div>
        <input type="hidden" name="type_type_id" value="<?php echo q('get.type_id','0','intval')?>">
        <button type="button" class="btn btn-block btn-primary submit">确定修改</button>
    <input type='hidden' name='__TOKEN__' value='b88b5f605a1b8bb5847c66d690bae352'/></form>

</div>
<script>
    $('.submit').click(function(){
        var data = $(this).parents('form').serialize();
        $.post("<?php echo u('type/addAttr')?>",data,function (res) {
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