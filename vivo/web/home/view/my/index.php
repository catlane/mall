<extend file='resource/view/my'/>
<block name="right">
    <article class="c">
		<dl>
			<dt class="module-item">
                <h1 class="welcome-info">
                    您好，
                    <span>杨宇辉5201314</span>
                    ，欢迎进入会员中心！
                </h1>
                <ul class="mem-properties">
                    <li>
                        我的V币：
                        <a>
                            <span>0</span>V币
                        </a>
                    </li>
                    <li class="login-time">
                        最近一次登录时间：{{date("Y-m-d H:i:s",time())}}
                    </li>
                </ul>
                <div class="statistic-list">
                    <ul>
                        <li class="item">
                            未付款订单
                            <a href="{{u('my/order&status=not_paid')}}">
                                <if value="$unpaidNum lt 0">
                                    {{$unpaidNum}}
                                <else>
                                        0
                                </if>
                            </a>
                        </li>
                        <li class="item evaluation">
                            评论和回复
                            <a href="">0</a>
                        </li>
                        <li class="item coupon">
                            优惠券
                            <a href="">0</a>
                        </li>
                    </ul>
                </div>
                <div class="page-module">
                    <h2 class="title">
                        最近的订单
                    </h2>
                    <table class="order-table">
                        <thead>
                            <tr>
                                <th width="25%">订单号</th>
                                <th width="15%">金额</th>
                                <th width="25%">下单日期</th>
                                <th width="15%">状态</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <foreach from="$data" key="$key" value="$value">
                                <if value="$key < 6">
                                    <tr>
                                        <td>{{$value['orderForm_num']}}</td>
                                        <td>{{number_format($value['orderForm_price'])}}</td>
                                        <td>{{date("Y-m-d H:i:s",$value["orderForm_sendtime"])}}</td>
                                        <td>待付款</td>
                                        <td><a href="{{u('my/detail',array('orderForm_id'=>$value['orderForm_id']))}}">查看订单</a></td>
                                    </tr>
                                <else>
                                    <if value="$key == 6">
                                        <tr>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                    </if>
                                </if>
                            </foreach>
                        </tbody>
                    </table>
                </div>
                <div class="page-module">
                    <h2 class="title">
                        最近浏览
                    </h2>
                    <ul class="recent-views">
                        <if value="$member_notesData['member_notes_commodity'] == ''">
                            亲，暂时还没有浏览的商品哦，赶紧去吧
                            <a href="{{u('index/index')}}" style="color: #008cd7;">逛逛</a>吧
                        <else>
                            <foreach from="$member_notesData['member_notes_commodity']" key="$key" value="$value">
                                <li>
                                    <a href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}" target="_blank">
                                        <img src="{{$value['commodity_list_img']}}" alt="">
                                        <p>{{$value['commodity_name']}}</p>
                                    </a>
                                </li>
                            </foreach>
                        </if>
                    </ul>
                </div>
            </dt>
		</dl>
    </article>
</block>

