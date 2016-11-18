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
                <option value="0">顶级分类</option>
                <?php foreach ((array)$category as $key=>$value){?>
                    <?php if($value['category_id'] == $oldData['category_id']){ ?>
                        <option value="<?php echo $oldData['category_pid']?>" selected ><?php echo $value['_category_name']?></option>
                    <?php }else{ ?>
                        <option value="<?php echo $value['category_id']?>" ><?php echo $value['_category_name']?></option>
                    <?php } ?>
                <?php }?>
            </select>
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="type_type_id">归属类型</label>
            <select name="type_type_id" id="type_type_id" class="form-control" id="type_type_id">
                <?php foreach ((array)$type as $key=>$value){?>
                    <option value="<?php echo $value['type_id']?>" ><?php echo $value['type_name']?></option>
                <?php }?>
            </select>
        </div>
        <input type="hidden" name="category_id" value="<?php echo $oldData['category_id']?>">
        <button type="button" class="btn btn-block btn-primary submit">确定修改</button>
    <input type='hidden' name='__TOKEN__' value='3c16abcde4f939f0393fa6928029134e'/></form>

</div>
<script>
    $('.submit').click(function(){
        var data = $(this).parents('form').serialize();
        $.post("<?php echo u('category/edit')?>",data,function (res) {
            if(res.valid){
                layer.alert(res.message,{
                    title: '提示框',
                    icon:1,
                    time:3000,
                    yes:function () {
                        parent.location.href = "<?php echo u('category/index')?>";
                    }
                });
            }else{
                layer.alert(res.message,{
                    title: '提示框',
                    icon:0,
                });
                return false;
            }
        },'json')
    })
    $(function () {
        $('#category_pid').change(function () {
            //获取到选中的category_id,然后将下边的类型归属相应的做出修改，让他为分类层级的归属类型，
            //如果他要是顶级分类的话，那么就可以选择全部的归属类型
            var category_id = $(this).val();
            $.post("<?php echo u('category/changeType')?>",{'category_id':category_id},function (type) {
                var str = '';
                for(var i = 0;i<type.length;i++){

                    str += "<option value='" + type[i].type_id +  "'>" + type[i].type_name + "</option>";
                }
                $('#type_type_id').html(str);
            },'json')
        })
    })

</script>
</body>
</html>