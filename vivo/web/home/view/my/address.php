<extend file='resource/view/my'/>
<block name="right">
    <script type="text/javascript">
        $(function(){
            //初始化方法
            area.init('area');
            //修改的时候默认被选中效果
            area.selected('黑龙江','哈尔滨','道里区');
        })
    </script>
    <article class="c">
        <dl class="member-order-list">
            <dt class="module-title">
                <p class="left">
                    已有
                    <strong>{{$num}}</strong>
                    收货地址
                    <span>（最多可添加10个收货地址）</span>
                </p>
                <p class="right">
                    <span class="add">
                        添加收货地址
                    </span>
                    <a class="add-icon-open"></a>
                </p>
            </dt>
            <if value="$num == 0">
                <div class="no-address" style="display: block;">
                    <img src="{{__ROOT__}}/resource/hdjs/home/other/my/no-address-icon_d646c68.png" alt="">
                    <span>您还没有收货地址</span>
                </div>
            </if>
            <div class="no-address">
                <img src="{{__ROOT__}}/resource/hdjs/home/other/my/no-address-icon_d646c68.png" alt="">
                <span>您还没有收货地址</span>
            </div>
<!--            这是编辑收货地址start-->
            <dd class="edit-box">
                <p>编辑收货地址</p>
                <form action="script:;" method="post">
                    <fieldset>
                        <table>
                            <tbody>
                                <tr>
                                    <th>
                                        <strong>*</strong>收货地区
                                    </th>
                                    <td>
                                        <select name="address_area[]" id="area1"></select>
                                        <select name="address_area[]" id="area2"></select>
                                        <select name="address_area[]" id="area3"></select>
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>详细地址
                                    </th>
                                    <td>
                                        <input type="text" class="address" name="address_xxaddress" aria-required="true" aria-describedby="address-error" aria-invalid="true">
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>收货人姓名
                                    </th>
                                    <td>
                                        <input type="text" name="address_receiver" class="receiverName" aria-describedby="receiverName-error">
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>收货地址邮编
                                    </th>
                                    <td>
                                        <input type="text" placeholder="默认为000000" name="address_zipcode" class="receiverName" aria-describedby="receiverName-error">
                                        <span class="error-style"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <strong>*</strong>手机
                                    </th>
                                    <td class="phone">
                                        <div class="p-mobile">
                                            <input type="tel" name="address_phone" id="mobilePhone" aria-required="true" class="error-style" aria-describedby="mobilePhone-error"><span id="mobilePhone-error" class="error-style"></span>
                                        </div>
                                        <div class="p-telephone">
                                            <span></span>
                                            <input type="tel" name="address_fixed" id="telPhone" class="valid">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="checkbox" id="default" name="address_default" checked="checked" value="1"><label>设为默认地址</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="确认" class="btn-blue confirm-btn">
                                        <input type="reset" value="取消" class="btn-cancel">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </form>
            </dd>
<!--            这是编辑收货地址end-->
            <if value="$num != 0">
                <dd class="address-box">
                    <table class="common">
                        <thead>
                        <tr>
                            <th class="address" width="30%">地址</th>
                            <th class="name" width="20%">收货人</th>
                            <th class="phone" width="20%">联系电话</th>
                            <th class="operation" width="30%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                            <foreach from="$data" key="$key" value="$value">
                                <tr class="address-info">
                                    <td>
                                        <foreach from="$value['address_area']" key="$k" value="$v">
                                            <span name="address.province">{{$v}}</span>
                                        </foreach>
                                        <span name="address.address">{{$value['address_xxaddress']}}</span>
                                    </td>
                                    <td><span name="address.receiverName">{{$value['address_receiver']}}</span></td>
                                    <td>
                                        <span name="address.mobilePhone">
                                            <?php
                                                if($value['address_phone']){
                                                    echo $value['address_phone'];
                                                }else{
                                                    echo $value['address_fixed'];
                                                }
                                            ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="address-edit" address_id="{{$value['address_id']}}">编辑</a>
                                        <span>|</span>
                                        <a class="delete address-delete" address_id="{{$value['address_id']}}">删除</a>
                                        <span>|</span>
                                        <if value="$value['address_default'] == 1"><!--这就是默认收货地址-->
                                            <button class="select-address address" address_id="{{$value['address_id']}}">默认地址</button>
                                        <else>
                                            <button class="address" address_id="{{$value['address_id']}}">默认地址</button>
                                        </if>

                                    </td>
                                </tr>
                            </foreach>
                        </tbody>
                    </table>
                </dd>
            </if>
        </dl>
        <script>
            $(function () {
                //这里是当我点击的时候，判断我这是添加地址，还是修改地址
                $('.add-icon-open').click(function () {
                    //这是让他显示我这是添加收货地址还是修改收货地址
                    $('.edit-box p').html("添加收货地址");
                    //这是让他添加上这个类，到时候我好判断
                    $('.edit-box form').addClass('addForm').removeClass('editForm');

                    //然后判断他有没有隐藏域，有就删除了
                    if($("#address_id").length > 0){
                        $("#address_id").remove();
                    }
                })
                $("body").delegate(".address-edit","click",function(){
                    var address_id = $(this).attr("address_id");
                    //这是让他显示我这是添加收货地址还是修改收货地址
                    $('.edit-box p').html("修改收货地址");
                    //这是让他添加上这个类，到时候我好判断
                    $('.edit-box form').addClass('editForm').removeClass('addForm');
                    if($("#address_id").length > 0){
                        $("#address_id").val(address_id);
                    }else{
                        $(".edit-box .editForm").append("<input type='hidden' id='address_id' name='address_id' value='" + address_id + "'/>");
                    }

                    
                    //然后我异步将数据分配过去
                    $.post("{{u('my/showAddress')}}",{"address_id":address_id},function (res) {
                        console.log(res.address_area[1])
                        //然后我分配
                        //这是地区
                        area.selected(res.address_area[0],res.address_area[1],res.address_area[2]);
                            
                        //这是详细地址
                            $("input[name=address_xxaddress]").val(res.address_xxaddress);
                        //这是收货人姓名
                            $("input[name=address_receiver]").val(res.address_receiver);
                        //这是收货人手机号码
                            $("input[name=address_phone]").val(res.address_phone);
                        //这是收货人固定电话
                            $("input[name=address_fixed]").val(res.address_fixed);
                        //这是收货地址邮编
                            $("input[name=address_zipcode]").val(res.address_zipcode);
                    },'json')
                    
                })



                //这里是添加地址时候的form提交
                $('body').delegate('.addForm','submit',function(){
                    var This = $(this);
                    var data = $(this).serialize();
                    $.post("{{u('my/addAddress')}}",data,function (res) {
                        if(res.valid){//这里是如果要是提交成功的话
                            alertDiv('添加成功','您已添加成功一条地址','确定','','success');
                            //这是让他三秒后自动关闭
                            setTimeout(function () {
                                $('.dialog-container').animate({"top":"-500px"},500,function () {
                                    $('.dialog-container').remove();
                                });
                                setTimeout(function () {
                                    $('.mask').remove();
                                },500)
                            },3000);
                            //然后我组合字符串
                            var str = '<tr class="address-info">';
                                str += '<td>';
                                str += '<span name="address.province">' + $("#area1").val() + '</span>&nbsp;';
                                str += '<span name="address.province">' + $("#area2").val() + '</span>&nbsp;';
                                str += '<span name="address.address">' + $("#area3").val() + '</span>&nbsp;';
                                str += '<span name="address.address">' + $("input[name=address_xxaddress]").val() + '</span>';
                                str += '</td>';
                                str += '<td><span name="address.receiverName">' + $("input[name=address_receiver]").val() + '</span></td>';
                                str += '<td>';
                                str += '<span name="address.mobilePhone">';
                                if($("input[name=address_phone]").val() != ""){
                                    str += $("input[name=address_phone]").val();
                                }else{
                                    str += $("input[name=address_fixed]").val();
                                }
                                str += '</span>';
                                str += '</td>';
                                str += '<td>';
                                str += '<a class="address-edit" address_id="' + res.message + '">编辑</a>';
                                str += '&nbsp;<span>|</span>&nbsp;';
                                str += '<a class="delete address-delete" address_id="' + res.message + '">删除</a>';
                                str += '&nbsp;<span>|</span>&nbsp;';
                                if($('#default').is(':checked')){//这里判断是不是默认地址，如果是就添加上那个类
                                    str += '<button class="select-address address" address_id="' + res.message + '">默认地址</button>';
                                }else{//如果不是的话，就不添加
                                    str += '<button class="address" address_id="' + res.message + '">默认地址</button>';
                                }

                                str += '</td>';
                                str += '</tr>';

                            //然后让我的表格显示出来
                            $('.no-address').css('display','none');//这是让没有地址的那个图片显示出来
                            $('.address-box').css('display','block');//这是让表格显示出来

                            //然后判断我这个是不是默认地址
                            if($('#default').is(':checked')){//如果是默认地址的话，我就添加到最前边
                                //然后删除所有的默认地址的这个类
                                $.each($('body .select-address'),function (k,v) {
                                    $(this).removeClass('select-address');
                                })
                                $('.common tbody').prepend(str);//这是将这个添加到前边
                                //然后将所有的都变成不是默认地址
                                $.post("{{u('checklist/editDefault')}}",{"address_id":res.message},function (res) {
                                },'json')


                            }else{//如果不是默认地址的话，那么我就添加到最后边去
                                $('.common tbody').append(str);
                            }
                            //然后关闭这个div
                            This.parents(".edit-box").slideUp(500);
                            //然后修改已有收货地址
                            var num = Number($('.module-title .left strong').html());
                            $('.module-title .left strong').html(num+1);
                            //然后将最后一个错误提示给关闭了
                            $("input[name=address_phone]").siblings('span').html("").attr('title',"");
                            document.getElementsByClassName("addForm")[0].reset();
                        }else{//这里是如果出错的话
                            //这里是超出最多地址
                            if(res.message.indexOf("已超过10条") != -1){
                                alertDiv("地址信息提示","您添加的地址已超出10条，请删除一些哦！",'','关闭','error');
                                setTimeout(function () {
                                    $('.dialog-container').animate({"top":"-500px"},500,function () {
                                        $('.dialog-container').remove();
                                    });
                                    setTimeout(function () {
                                        $('.mask').remove();
                                    },500)
                                },1500);
                                setTimeout(function () {
                                    This.parents(".edit-box").slideUp(500);
                                    document.getElementsByClassName("addForm")[0].reset();
                                })
                                return;
                            }


                            //这里是缺少收货人姓名
                            if(res.message.indexOf("收货人姓名") != -1){
                                $("input[name=address_receiver]").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }else{
                                $("input[name=address_receiver]").siblings('span').html('').attr('title','');
                            }
                            //这里是缺少收货人所在地区
                            if(res.message.indexOf("收货人所在地区") != -1){
                                $(".address_area").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }else{
                                $(".address_area").siblings('span').html('').attr('title','');
                            }
                            //这里是缺少详细地址
                            if(res.message.indexOf("收货人详细地址") != -1){
                                $("input[name=address_xxaddress]").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }else{
                                $("input[name=address_xxaddress]").siblings('span').html('').attr('title','');
                            }
                            //这里是缺少收货人手机号码
                            if(res.message.indexOf("手机号码或者固定电话") != -1){
                                $("input[name=address_phone]").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }
                        }


                        //这是清空表单元素
//                        document.getElementsByClassName("addAddress")[0].reset();
                    },'json')
                    return;
                })




                //这里是修改
                $('body').delegate('.editForm','submit',function(){
                    var This = $(this);
                    var data = $(this).serialize();
                    $.post("{{u('my/editAddress')}}",data,function (res) {
                        if(res.valid){//这里是如果要是提交成功的话
                            alertDiv('修改成功','您已修改了该地址！','确定','','success');
                            //这是让他三秒后自动关闭
                            setTimeout(function () {
                                $('.dialog-container').animate({"top":"-500px"},500,function () {
                                    $('.dialog-container').remove();
                                });
                                setTimeout(function () {
                                    $('.mask').remove();
                                },3000)
                            },3000);
                            //然后我组合字符串
                            var str = '<tr class="address-info">';
                            str += '<td>';
                            str += '<span name="address.province">' + $("#area1").val() + '</span>&nbsp;';
                            str += '<span name="address.province">' + $("#area2").val() + '</span>&nbsp;';
                            str += '<span name="address.address">' + $("#area3").val() + '</span>&nbsp;';
                            str += '<span name="address.address">' + $("input[name=address_xxaddress]").val() + '</span>';
                            str += '</td>';
                            str += '<td><span name="address.receiverName">' + $("input[name=address_receiver]").val() + '</span></td>';
                            str += '<td>';
                            str += '<span name="address.mobilePhone">';
                            if($("input[name=address_phone]").val() != ""){
                                str += $("input[name=address_phone]").val();
                            }else{
                                str += $("input[name=address_fixed]").val();
                            }
                            str += '</span>';
                            str += '</td>';
                            str += '<td>';
                            str += '<a class="address-edit" address_id="' + res.message + '">编辑</a>';
                            str += '&nbsp;<span>|</span>&nbsp;';
                            str += '<a class="delete address-delete" address_id="' + res.message + '">删除</a>';
                            str += '&nbsp;<span>|</span>&nbsp;';
                            if($('#default').is(':checked')){//这里判断是不是默认地址，如果是就添加上那个类
                                str += '<button class="select-address address" address_id="' + res.message + '">默认地址</button>';
                            }else{//如果不是的话，就不添加
                                str += '<button class="address" address_id="' + res.message + '">默认地址</button>';
                            }

                            str += '</td>';
                            str += '</tr>';

                            //然后判断我这个是不是默认地址
                            if($('#default').is(':checked')){//如果是默认地址的话，我就添加到最前边
                                //然后删除掉当前这条数据
                                $.each($('.address-edit'),function (k,v) {
                                    //如果他要是等于这个id的话，我就删除了他
                                    if($(this).attr("address_id") == $("#address_id").val()){
                                        $(this).parents("tr.address-info").remove();
                                        return;
                                    }
                                })

                                //然后删除所有的默认地址的这个类
                                $.each($('body .select-address'),function (k,v) {
                                    $(this).removeClass('select-address');
                                })
                                $('.common tbody').prepend(str);//这是将这个添加到前边
                                //然后将所有的都变成不是默认地址
                                $.post("{{u('checklist/editDefault')}}",{"address_id":res.message},function (res) {
                                },'json')


                            }else{//如果不是默认地址的话，那么我就添加到最后边去
                                var html = '';
                                html += '<td>';
                                html += '<span name="address.province">' + $("#area1").val() + '</span>&nbsp;';
                                html += '<span name="address.province">' + $("#area2").val() + '</span>&nbsp;';
                                html += '<span name="address.address">' + $("#area3").val() + '</span>&nbsp;';
                                html += '<span name="address.address">' + $("input[name=address_xxaddress]").val() + '</span>';
                                html += '</td>';
                                html += '<td><span name="address.receiverName">' + $("input[name=address_receiver]").val() + '</span></td>';
                                html += '<td>';
                                html += '<span name="address.mobilePhone">';
                                if($("input[name=address_phone]").val() != ""){
                                    html += $("input[name=address_phone]").val();
                                }else{
                                    html += $("input[name=address_fixed]").val();
                                }
                                html += '</span>';
                                html += '</td>';
                                html += '<td>';
                                html += '<a class="address-edit" address_id="' + res.message + '">编辑</a>';
                                html += '&nbsp;<span>|</span>&nbsp;';
                                html += '<a class="delete address-delete" address_id="' + res.message + '">删除</a>';
                                html += '&nbsp;<span>|</span>&nbsp;';
                                html += '<button class="address" address_id="' + res.message + '">默认地址</button>';
                                html += '</td>';
                                $.each($('.address-edit'),function (k,v) {
                                    //如果他要是等于这个id的话，我就修改他
                                    if($(this).attr("address_id") == $("#address_id").val()){
                                        $(this).parents("tr.address-info").html(html);
                                        return;
                                    }
                                })
                            }
                            //然后关闭这个div
                            This.parents(".edit-box").slideUp(500);
                            //然后将最后一个错误提示给关闭了
                            $("input[name=address_phone]").siblings('span').html("").attr('title',"");
                            document.getElementsByClassName("editForm")[0].reset();
                        }else{//这里是如果出错的话
                            //这里是缺少收货人姓名
                            if(res.message.indexOf("收货人姓名") != -1){
                                $("input[name=address_receiver]").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }else{
                                $("input[name=address_receiver]").siblings('span').html('').attr('title','');
                            }
                            //这里是缺少收货人所在地区
                            if(res.message.indexOf("收货人所在地区") != -1){
                                $(".address_area").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }else{
                                $(".address_area").siblings('span').html('').attr('title','');
                            }
                            //这里是缺少详细地址
                            if(res.message.indexOf("收货人详细地址") != -1){
                                $("input[name=address_xxaddress]").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }else{
                                $("input[name=address_xxaddress]").siblings('span').html('').attr('title','');
                            }
                            //这里是缺少收货人手机号码
                            if(res.message.indexOf("手机号码或者固定电话") != -1){
                                $("input[name=address_phone]").siblings('span').html(res.message).attr('title',res.message);
                                return;
                            }
                        }


                        //这是清空表单元素
//                        document.getElementsByClassName("addAddress")[0].reset();
                    },'json')
                    return;
                })


            })
        </script>
    </article>
</block>