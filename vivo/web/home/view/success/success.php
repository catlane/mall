<extend file='resource/view/BigHome'/>
<block name="content">
    <?php
        if(!$data["orderForm_id"]){
            go(u("index/index"));
        }
    ?>
    <div class="main">
        <div id="content" class="cl">

            <div id="content" class="cl">
                <!--content start -->
                <div class="wrapper">
                    <div class="buy-steps step3"></div>
                    <div class="page-box">
                        <dl class="cl">
                            <dt class="icon-success"></dt>
                            <dd class="content-container">
                                <h3 class="title">订单提交成功，订单金额<span class="red bold">{{number_format($data["orderForm_price"],2)}}</span>元。</h3>
                                <input id="order-no" type="hidden" value="16101483195542320292">

                                <p class="comment">订单号{{$data['orderForm_num']}}，可进入“<a href="{{u('my/order')}}">我的订单</a>”实时查询您的订单及跟踪物流信息。
                                </p>

                                <p class="prod-name">商品:
                                    <span class="val">
                                        <foreach from="$data['commodity_info']" key="$key" value="$value">
                                            <if value="$key == 0">
                                                {{$value[0]}}
                                                <foreach from="$value[1]" key="$k" value="$v">
                                                    {{$v}}
                                                </foreach>
                                                <br/>
                                            <else>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                {{$value[0]}}
                                                <foreach from="$value[1]" key="$k" value="$v">
                                                    {{$v}}
                                                </foreach>
                                                <br/>
                                            </if>
                                        </foreach>
							        </span>
                                </p>

                                <p class="order-address">配送：{{$data['orderForm_address']}} /{{$data['orderForm_taxType']}} </p>

                                <p class="pay-type">支付方式：{{$data["orderForm_payMethod"]}}</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="btns">
                        <button type="button" class="btn-cancel" onclick="location.href='{{u("index/index")}}'">再去逛逛</button>
                        <button class="btn-confirm" type="button" onclick="location.href='{{u("my/order")}}'">查看我的订单</button>
                    </div>
                </div>
                <!--content end -->
            </div>
        </div>
    </div>
</block>