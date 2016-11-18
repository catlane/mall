<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="{{__ROOT__}}/web/admin/view/assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="{{__ROOT__}}/web/admin/view/js/jquery-1.9.1.min.js"></script>

    <script src="{{__ROOT__}}/web/admin/view/js/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/web/admin/view/css/uploadify.css">


    <script src="{{__ROOT__}}/web/admin/view/assets/layer/layer.js" type="text/javascript"></script>

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
            <label class="control-label" for="type_name">类型名称</label>
            <input type="text" class="form-control" id="type_name" name="type_name" value="{{$oldData['type_name']}}">
        </div>
        <input type="hidden" name="type_id" value="{{$oldData['type_id']}}">
        <button type="button" class="btn btn-block btn-primary submit">确定修改</button>
    </form>

</div>
<script>
    $('.submit').click(function(){
        var data = $(this).parents('form').serialize();
        $.post("{{u('type/edit')}}",data,function (res) {
            if(res.valid){
                layer.alert(res.message,{
                    title: '提示框',
                    icon:1,
                    time:3000,
                    yes:function () {
                        parent.location.href = "{{u('type/index')}}";
                    },
                });
                setTimeout(function () {
                    parent.location.href = "{{u('type/index')}}";
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