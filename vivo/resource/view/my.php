<extend file='resource/view/BigHome'/>
<block name="content">
    <div class="main">
        <div class="content">
            <div class="crumbs">
                您的位置是:<a href="{{u('index/index')}}">首页</a>
                <b></b>
                {{$address}}
            </div>
        </div>
        <div class="content">
            <aside class="menu-bar">
                <ul class="portrait-box">
                    <li>
                        <a href="{{u('my/information')}}" title="编辑资料">
                            <img src="{{__ROOT__}}/resource/hdjs/home/other/my/header_phone.jpg"/>
                        </a>
                    </li>
                    <li class="mem-name">
                        <i></i>
                        {{$data["member_user_nickname"]}}
                    </li>
                    <li class="vcoin-info">
                        我的V币:
                        <a>
                            <span class="red">0</span>
                        </a>
                        V币
                    </li>
                </ul>
                <dl class="menu">
                    <dt>
                        <i class="icon-deal"></i>
                        交易管理
                    </dt>
                    <dd><a href="{{u('my/order')}}">我的订单</a></dd>
                    <dd><a href="{{u('my/refund')}}">退/换货</a></dd>

                    <dt>
                        <i class="icon-evaluation"></i>
                        我的账户
                    </dt>
                    <dd><a href="{{u('my/information')}}">个人资料</a></dd>
                    <dd><a href="{{u('my/address')}}">收货地址</a></dd>
                    <dd><a href="{{u('my/favorite')}}">我的收藏</a></dd>
                </dl>
            </aside>
            <blade name="right"/>
        </div>

        <script>
            $(function () {
                $.each($(".menu dd"),function () {
                    console.log($(this).find("a").html())
                    if($(this).find("a").html() == "{{$on}}"){
                        $(this).addClass("on");
                    }
                })
            })
        </script>
    </div>
</block>
