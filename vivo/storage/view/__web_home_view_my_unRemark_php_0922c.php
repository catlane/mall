<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>vivo智能手机官方商城</title>
    <script>
        var Root = "http://127.0.0.1/vivo";
    </script>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/master.css"/>
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/my.css"/>
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/my_unRemark.css"/>
    
    <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
            <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/my.js" type="text/javascript" charset="utf-8"></script>
            <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/area.js" type="text/javascript" charset="utf-8"></script>
            <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/YMDClass.js" type="text/javascript" charset="utf-8"></script>
    </head>
<body>
<div class="head-search">
    <div class="search-box">
        <form action="" method="get">
            <input type="text" maxlength="20" placeholder="如:x6" name="" id="" value="" />
            <button type="submit">搜索</button>
        <input type='hidden' name='__TOKEN__' value='5fb67602155418ba72265121aec246de'/><input type='hidden' name='__TOKEN__' value='5fb67602155418ba72265121aec246de'/><input type='hidden' name='__TOKEN__' value='5fb67602155418ba72265121aec246de'/></form>
        <a href="" class="close"></a>
    </div>
</div>
<header class="header">
    <div class="wrapper">
        <nav>
            <a href="http://127.0.0.1/vivo/index.php?s=home/index/index" class="logoImg">
                <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/logo.png"/>
            </a>
            <ul class="nav">
                                    <li><a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=2" category_id="2">手机</a></li>
                                    <li><a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=8" category_id="8">上衣</a></li>
                                    <li><a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=19" category_id="19">配件</a></li>
                            </ul>
            <script>
                $(function () {
                    $('.nav li a').each(function (k,v) {
                        //第一，获取当前页面的category_id
                        $thisCategory_id = 0;
                        //如果当前这个循环的category_id == 当前这个页面的category_id的话，就给他一个类
                        if($(this).attr('category_id') == $thisCategory_id){
                            $(this).css({"background":"#008cd6","color":"#fff"});
                        }
                    })
                })
            </script>
            <div class="search-user">
                <ul>
                    <li class="search">
                        <a href="">
                            <b></b>
                        </a>
                    </li>
                    <li class="user">
                        <a href="http://127.0.0.1/vivo/index.php?s=home/my/index">
                            <b></b>
                        </a>
                    </li>
                    <li class="shopCar">
                        <a href="http://127.0.0.1/vivo/index.php?s=home/shoppingcar/shoppingcar">
                            <b id="end"></b>
                            <span class="shopcart-num">2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--这里是子模板的内容start-->

    <div class="main">
        <div class="content">
            <div class="crumbs">
                您的位置是:<a href="http://127.0.0.1/vivo/index.php?s=home/index/index">首页</a>
                <b></b>
                <a href="<?php echo u('my/index')?>">会员中心</a><b></b>未评价商品            </div>
        </div>
        <div class="content">
            <aside class="menu-bar">
                <ul class="portrait-box">
                    <li>
                        <a href="http://127.0.0.1/vivo/index.php?s=home/my/information" title="编辑资料">
                            <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/my/header_phone.jpg"/>
                        </a>
                    </li>
                    <li class="mem-name">
                        <i></i>
                        杨宇辉5201314
                    </li>
                    <li class="vcoin-info">
                        我的V币:
                        <a href="">
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
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/order">我的订单</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/refund">退/换货</a></dd>
                    <dt>
                        <i class="icon-evaluation"></i>
                        评价管理
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/unRemark">未评价商品</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/allRemark">我的评论</a></dd>

                    <dt>
                        <i class="icon-evaluation"></i>
                        我的账户
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/information">个人资料</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/address">收货地址</a></dd>
                    <dd><a href="">我的V币</a></dd>
                    <dd><a href="">我的优惠券</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/favorite">我的收藏</a></dd>
                </dl>
            </aside>
            
    <article class="c">
        <dl class="member-order-list">
            <dt>未评价商品</dt>
            <div class="no-record">
                <img src="<?php echo __ROOT__?>/resource/hdjs/home/other/my/no-prod-icon_4ba659d.png" alt="">
                <span>暂时还没有任何商品</span>
            </div>
        </dl>
    </article>

        </div>

    </div>

<!--这里是子模板的内容end-->
<footer>
    <div class="shop-agree">
        <div class="wrapper cl">
            <ul>
                <li>
                    <a href="">
                        <b class="b1"></b>
                        <p>
                            <span>0</span>
                            运费购手机
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <b class="b2"></b>
                        <p>
                            <span>30</span>
                            天无理由退款
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <b class="b3"></b>
                        <p>
                            电子发票
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <b class="b4"></b>
                        <p>
                            <span>380</span>
                            余家售后服务中心
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="shop-help">
        <div class="wrapper">
            <dl>
                <dt>
                    <b class="b1"></b>
                    购买流程
                </dt>
                <dd><a href="">支付宝支付</a></dd>
                <dd><a href="">发票说明</a></dd>
                <dd><a href="">优惠价说明</a></dd>
                <dd><a href="">花呗分期</a></dd>
            </dl>
            <dl>
                <dt>
                    <b class="b2"></b>
                    配送方式
                </dt>
                <dd><a href="">配送方式</a></dd>
                <dd><a href="">配送费用</a></dd>
                <dd><a href="">签收须知</a></dd>
            </dl>
            <dl>
                <dt>
                    <b class="b3"></b>
                    服务支持
                </dt>
                <dd><a href="">服务保证</a></dd>
                <dd><a href="">售后服务</a></dd>
                <dd><a href="">售后网点查询</a></dd>
                <dd><a href="">碎屏保</a></dd>
                <dd><a href="">手机延保</a></dd>
            </dl>
            <dl>
                <dt>
                    <b class="b4"></b>
                    品牌服务
                </dt>
                <dd><a href="">常见问题</a></dd>
                <dd><a href="">相关下载</a></dd>
                <dd><a href="">联系我们</a></dd>
            </dl>
            <dl>
                <dt>
                    <b class="b5"></b>
                    小V在线时段
                </dt>
                <dd>周一至周五 08:00-21:00</dd>
                <dd>周六、周日 09:00-18:00</dd>
                <dd class="online-service">
                    <a href="">
                        <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/online-service.png"/>
                    </a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="wrapper">
            <div class="sns-box">
                成为vivo粉丝:
                <a href="" class="a1"><b></b></a>
                <a href="" class="a2"><b></b></a>
                <a href="" class="a3"><b></b></a>
                <a href="" class="a4">
                    <b></b>
                    <div>
                        <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/weixin-ico.jpg"/>
                        <em></em>
                    </div>
                </a>
            </div>
            <div class="copy-info">
                <a href="" class="footer-logo"></a>
                Copyright ©2011-2016 广东步步高电子工业有限公司
                <br />
                版权所有 保留一切权利粤B2-20080267 |
                <a href="">粤ICP备05100288号</a>
            </div>
        </div>
    </div>
</footer>
<div class="side-bar">
    <ul>
        <li>
            <a href="" class="service">
                <div>
                    在线客服
                </div>
            </a>
        </li>
        <li>
            <a href="" class="qrcode">
                <div>
                    <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qrcode_6a6b792.png" alt="" />
                    <p>
                        支付宝扫码<br />关注最新活动福利
                    </p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="feedback">
                <div>
                    意见反馈
                </div>
            </a>
        </li>
        <li>
            <a href="" class="backtop">
                <div>
                    返回顶部
                </div>
            </a>
        </li>
    </ul>
</div>
</body>
</html>



