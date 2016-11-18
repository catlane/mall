<extend file='resource/view/my'/>
<block name="right">
    <article class="c">
    	<if value="$refundCount != 0">
    		<script type="text/javascript">
    		//这里是判断是否有未退货的商品，如果有就提示一下
				setTimeout(function(){
					alertDiv("退/换货提示","您有未选择退换货的商品，请选择","","关闭","error");
				},1000)
    		</script>
    	</if>
        <dl class="member-order-list">
            <dt>退款/退货查询</dt>
            <if value="count($data) == 0">
                <div class="no-record">
                    <img src="{{__ROOT__}}/resource/hdjs/home/other/my/my_refund_no.png" alt="">
                    <span>您还没有退款/退货订单</span>
                </div>
            </if>
            <if value="count($data) != 0">
                <dd>
                    <div class="list-caption">
                        <div class="col col10">商品</div>
                        <div class="col col11">数量</div>
                        <div class="col col12">价格</div>
                        <div class="col col13">状态</div>
                        <div class="col col14">操作</div>
                    </div>
                        <!--                这里是多个的订单信息-->
                    <foreach from="$data" key="$key" value="$value">
                        <table class="order-table">
                            <colgroup>
                                <col width="155">
                                <col>
                                <col class="col1">
                                <col class="col2">
                                <col class="col3">
                                <col class="col4">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th colspan="6" class="order-title">
                                    <ul>
                                        <li class="order-number">订单号：
                                            <a href="{{u('my/detail',array('orderForm_id'=>$value['orderForm_id']))}}">{{$value["orderForm_num"]}}</a>
                                        </li>
                                        <li class="order-time">成交时间: {{date("Y-m-d H:i:s",$value["orderForm_sendtime"])}}
                                        </li>
                                    </ul>
                                </th>
                            </tr>
                            <!--							这是循环所有的商品start-->
                            <foreach from="$value['lists']" key="$k" value="$v">
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="{{u('item/item',array('commodity_id'=>$v['commodity_id']))}}" target="_blank">
                                            <img src="{{$v['commodity_list_img']}}" alt="">
                                        </a>
                                    </td>
                                    <td class="prod-name">
                                        <a href="{{u('item/item',array('commodity_id'=>$v['commodity_id']))}}" target="_blank" title="{{$v['commodity_name']}}">{{$v['commodity_name']}}</a>
                                        <br>{{$v['orderFormList_attr']}}
                                    </td>
                                    <td>{{$v['orderFormList_shopNum']}}</td>
                                    <td>
                                        {{number_format($v["orderFormList_price"],2)}}
                                    </td>
                                    <if value="$k == 0 ">
                                        <if value="$value['returns_success_status'] != ''"><!--说明处理了-->
                                            <td rowspan="{{count($value['lists'])}}" class="status">{{$value['returns_success_status']}}</td>
                                        <else>
                                            <td rowspan="{{count($value['lists'])}}" class="status">{{$value['returns_status']}}</td>
                                        </if>

                                        <td rowspan="{{count($value['lists'])}}" class="operation">
                                            <ul>
                                                <li>
                                                    <a href="{{u('my/detail',array('orderForm_id'=>$value['orderForm_id']))}}">查看订单</a>
                                                </li>
<!--                                                这是全部显示，让他可以选择退货或者是换货-->
                                                <if value="$value['returns_status'] == '退/换货申请中'">
                                                    <li class="t">
                                                        <a href="" class="link-cancel btn-href tuihuo" returns_id = "{{$value['returns_id']}}">
                                                            退货
                                                        </a>
                                                    </li>
                                                    <li class="h">
                                                        <a href="" class="link-cancel btn-href huanhuo" returns_id = "{{$value['returns_id']}}">
                                                            换货
                                                        </a>
                                                    </li>
                                                </if>
                                                <if value="$value['returns_success_status'] == ''">
                                                    <!--                                                这是已经退货了-->
                                                    <if value="$value['returns_status'] == '退货申请中'">
                                                        <li class="t">
                                                            <a href="" class="link-cancel btn-href tuihuo" returns_id = "{{$value['returns_id']}}">
                                                                退货
                                                            </a>
                                                        </li>
                                                    </if>
                                                    <!--                                                这是换货了-->
                                                    <if value="$value['returns_status'] == '换货申请中'">
                                                        <li class="h">
                                                            <a href="" class="link-cancel btn-href huanhuo" returns_id = "{{$value['returns_id']}}">
                                                                换货
                                                            </a>
                                                        </li>
                                                    </if>
                                                </if>


                                            </ul>
                                        </td>
                                    </if>
                                </tr>
                            </foreach>
                            <!--							这是循环所有的商品end-->

                            <tr class="operation-line">
                                <td colspan="6">
                                    总计：<span class="red">
                                    <dfn>¥</dfn>{{number_format($value['orderForm_price'],2)}}
                                   </span> (含运费：
                                    <dfn>¥</dfn>0.00 优惠：
                                    <dfn>¥</dfn>0.00 )
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </foreach>
                </dd>
            </if>
        </dl>
        <script>
            $(function () {
                //这是退货
                $(".tuihuo").click(function () {
                    var returns_id = $(this).attr('returns_id');
                    var returns_status = "退货申请中";
                    var This = $(this);
                    var status = This.parents("td.operation").siblings("td.status").html();
                    if(status == "退货申请中"){
                        alertDiv("退货提示",'您的退货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    if(status == "换货申请中"){
                        alertDiv("退货提示",'您的换货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    $.post("{{u('my/editReturns')}}",{"returns_id":returns_id,"returns_status":returns_status},function (res) {
                        if(res == 1){
                            alertDiv("退货提示",'您的退货申请正在处理...','关闭','','success');
                            This.parents('li.t').siblings('li.h').remove();
                            This.parents("td.operation").siblings("td.status").html("退货申请中");
                        }
                    },"json")
                    return false;
                })

                //这是换货
                $(".huanhuo").click(function () {
                    var returns_id = $(this).attr('returns_id');
                    var returns_status = "换货申请中";
                    var This = $(this);
                    var status = This.parents("td.operation").siblings("td.status").html();
                    if(status == "换货申请中"){
                        alertDiv("换货提示",'您的换货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    if(status == "退货申请中"){
                        alertDiv("换货提示",'您的退货申请已经在处理...马上就好了哦','关闭','','error');
                        return false;
                    }
                    $.post("{{u('my/editReturns')}}",{"returns_id":returns_id,"returns_status":returns_status},function (res) {
                        if(res == 1){
                            alertDiv("换货提示",'您的换货申请正在处理...','关闭','','success');
                            This.parents('li.h').siblings('li.t').remove();
                            This.parents("td.operation").siblings("td.status").html("换货申请中");
                        }
                    },"json")
                    return false;
                })
            })
        </script>
    </article>
</block>