<extend file='resource/view/my'/>
<block name="right">
    <article class="c">
        <dl>
            <dd class="module-item">
                <div class="delivery-info normal">
                    <br>
                    <br>

                    <div class="progress-bar step1">
                        <if value="$data['orderForm_status'] == '未付款'">
                            <div class="bar-box"></div>
                        </if>
                        <if value="$data['orderForm_status'] == '未发货'">
                            <div class="bar-box" style="background-position:0 -220px"></div>
                        </if>
                        <if value="$data['orderForm_status'] == '已发货'">
                            <div class="bar-box" style="background-position:0 -330px"></div>
                        </if>
                        <if value="$data['orderForm_status'] == '已完成'">
                            <div class="bar-box" style="background-position:0 -440px"></div>
                        </if>
                    </div>
                    <ul class="delivery-records">
                        <li>
                            <label>{{date("Y-m-d H:i:s",$data['orderForm_sendtime'])}}</label><label> 您提交的订单已经创建成功</label>
                        </li>
                        <if value="$data['orderForm_cancelTime'] != ''">
                            <li>
                                <label>{{date("Y-m-d H:i:s",$data['orderForm_cancelTime'])}}</label><label>订单已关闭。原因:{{$data['orderForm_cancelMethod']}}</label>
                            </li>
                        </if>
                        <if value="count($data['returns']) != 0">
                            <li>
                                <label>{{date("Y-m-d H:i:s",$data['returns']['returns_time'])}}</label><label>{{$data['returns']['returns_status']}}</label>
                            </li>

                            <if value="$data['returns']['returns_success_status'] != ''">
                                <li>
                                    <label>{{date("Y-m-d H:i:s",$data['returns']['returns_success_time'])}}</label><label>{{$data['returns']['returns_success_status']}}</label>
                                </li>
                            </if>

                        </if>
                    </ul>
                </div>


                <div class="order-module order-overview">
                    <h2 class="title">订单基本信息</h2>
                    <ul>
                        <li class="overview-item">订单号：{{$data['orderForm_num']}}</li>
                        <li class="overview-item">订单金额：<span class="red"><dfn>¥</dfn>{{number_format($data["orderForm_price"],2)}}</span></li>
                        <li class="overview-item">订单状态：
                            {{$data['orderForm_status']}}

                        </li>
                    </ul>
                    <if value="$data['orderForm_status'] == '未付款'">
                        <div class="operation-box">
                            <button class="btn-confirm btn-highlight order-button" style="width: 160px;border-radius=5px;" orderForm_id="{{$data['orderForm_id']}}">去结算</button>
                            <a class="btn-href cancelOrder" orderForm_id="{{$data['orderForm_id']}}">
                                取消订单
                            </a>
                        </div>
                    </if>
                </div>

                <div class="order-module receiver-info">
                    <h2 class="title">收货信息</h2>
                    <ul>
                        <li>收货人：{{$data['orderForm_receiver']}}</li>
                        <li>手机：{{$data['010-1114456']}}</li>
                        <li>收货地址：{{$data['orderForm_address']}}</li>
                    </ul>

                </div>

                <div class="order-module pay-type">
                    <h2 class="title">支付及配送方式</h2>
                    <ul>
                        <li>配送方式：圆通微小件
                            <dfn>¥</dfn>0.00</li>
                        <li>支付方式：{{$data['orderForm_payMethod']}}                </li>
                        <li>发票类型：{{$data['orderForm_taxType']}}</li>
                        <li>发票抬头：{{$data['orderForm_invoice']}}</li>
                    </ul>
                </div>

                <div class="order-module prod-list">
                    <h2 class="title">商品清单和结算信息</h2>
                    <table class="order-table" cellpadding="0">
                        <thead>
                        <tr>
                            <th width="155"></th>
                            <th style="text-align: left">商品名称</th>
                            <th width="95">价格</th>
                            <th width="66">数量</th>
                            <th width="95">优惠</th>
                            <th width="95">赠送V币</th>
                            <th width="95">小计</th>
                        </tr>
                        </thead>
                        <foreach from="$data['lists']" key="$key" value="$value">
                            <tbody class="item-single">
                            <tr class="prod-line">
                                <td class="prod-pic">
                                    <a class="figure" href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}" target="_blank">
                                        <img src="{{$value['commodity_list_img']}}" alt="">
                                    </a>
                                </td>
                                <td width="305" class="prod-name"><a class="figure" href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}" target="_blank" title="{{$value['commodity_name']}}">{{$value['commodity_name']}}</a><br>
                                   {{$value['orderFormList_attr']}}
                                </td>
                                <td>{{number_format($value['orderFormList_price'],2)}}</td>
                                <td>{{$value['orderFormList_shopNum']}}</td>
                                <td>
                                    -0.00</td>
                                <td>{{$value['orderFormList_price']}}</td>
                                <td class="total-price">{{number_format($value['orderFormList_price'],2)}}</td>
                            </tr>
                            </tbody>
                        </foreach>
                    </table>

                    <div class="order-info-box cl">
                        <div class="left-box pull-left" style="float: left;">
                            <ul>
                                <li class="coupon-info cl">
                                    <div class="info-box">
                                        <label>订单优惠：</label><span class="red">【包邮】</span>订单满68元免运费
                                    </div>
                                </li>
                                <li class="order-remark cl">
                                    <div class="info-box">
                                        <label>订单备注：
                                        {{$data['orderForm_comments']}}
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right-box pull-right">
                            <ul>
                                <li class="order-sum">商品总金额：<label><span class="price"><dfn>¥</dfn>{{number_format($data['orderForm_price'],2)}}</span></label></li>
                                <li class="order-sum">运费：<label><span class="red"><dfn>¥</dfn>0.00</span></label></li>
                                <li class="order-sum">优惠：<label><span class="red">-<dfn>¥</dfn>0.00</span></label></li>
                                <li class="order-sum">总计：<label><span class="price"><dfn>¥</dfn>{{number_format($data['orderForm_price'],2)}}</span></label></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <form id="orderPayform" method="post"></form>
            </dd>

            <script>
                $(function () {
                    $(function () {
                        $('.order-button').click(function () {
                            var orderForm_id = $(this).attr("orderForm_id");
                            location.href= "{{u('cashier/cashier')}}" + '&orderForm_id=' + orderForm_id;
                        })
                    })
                    $('.cancelOrder').click(function(){
                        var orderForm_id = $(this).attr("orderForm_id");
                        alertDiv("取消订单申请","订单成功取消后无法恢复",'确定取消','暂不取消','error');
                        $(".btn-blue").click(function () {
                            $.post("{{u('my/cancelOrder')}}",{"orderForm_id":orderForm_id,"orderForm_cancelMethod":"手动"},function (res) {
                                alertDiv("取消成功提示","订单取消成功,1秒后跳转",'','关闭','success');
                                setTimeout(function () {
                                    $('.dialog-container').animate({"top":"-500px"},500,function () {
                                        $('.dialog-container').remove();
                                    });
                                    setTimeout(function () {
                                        $('.mask').remove();
                                    },500)
                                    window.location.reload();
                                },1000)
                            },'json')
                        })
                        $(this).attr("href","script:;");
                    })
                })
            </script>
        </dl>
    </article>
</block>