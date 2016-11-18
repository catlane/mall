<extend file='index.html' />
<block name="content">
	<link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
	<script src="{{__ROOT__}}/web/admin/view/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="{{__ROOT__}}/web/admin/view/assets/js/jquery.ui.touch-punch.min.js"></script>
	<div class="margin clearfix">
		<div class="stystems_style">
			<div class="tabbable">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active">
						<a data-toggle="tab" href="#home"><i class="green fa fa-home bigger-110"></i>&nbsp;基本设置</a>
					</li>
				</ul>
				<div class="tab-content">
					<form action="" method="post" class="form">
						<div id="home" class="tab-pane active">
							<div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>底部版权信息： </label>
								<div class="col-sm-9"><input type="text" name="sys_copy" value="{{$data['sys_copy']}}" id="website-title" placeholder="" value="" class="col-xs-10 "></div>
							</div>
							<div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>备案号： </label>
								<div class="col-sm-9"><input type="text" name="sys_beian" value="{{$data['sys_beian']}}" id="website-title" placeholder="" value="" class="col-xs-10 "></div>
							</div>
							<div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>统计代码： </label>
								<div class="col-sm-9"><textarea name="sys_count" class="textarea" style="border: 1px solid #d5d5d5;">{{$data['sys_count']}}</textarea></div>
							</div>
							<div class="Button_operation">
								<button class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存</button>
								<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
								<input type="hidden" name="sys_id" value="{{$data['sys_id']}}">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	<script>
		$(function(){
			$('.clearfix').height($('#iframe').height()).css({
			'overflow': 'scroll'
			});
			$('#id-input-file-2').ace_file_input({
				no_file: '选择上传图标 ...',
				btn_choose: '选择',
				btn_change: '更改',
				droppable: false,
				onchange: null,
				thumbnail: false, //| true | large
				whitelist: 'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
			});
			
			$('.form').submit(function(){
				var data = $(this).serialize();
				$.post("{{u('systemSetting/edit')}}",data,function (res) {
					if(res.valid){
						layer.alert("修改成功");
					}else{
						laery.alert(res.message);
					}
				},'json')
				return false;
			})
			
		})
		
	</script>
</block>