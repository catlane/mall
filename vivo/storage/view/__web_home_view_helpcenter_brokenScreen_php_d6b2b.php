<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>vivo智能手机官方商城</title>
    <link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">
    <script>
        var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?11fa58260b76b6726f12b8c97924964a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();        var Root = "http://127.0.0.1/vivo";
    </script>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/master.css"/>
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/helpcenter.css"/>
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/brokenScreen.css"/>
    
    <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
    </head>
<body>
<div class="head-search">
    <div class="search-box">
        <form action="" method="get" class="searchForm">
            <input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
            <button type="submit">搜索</button>
        <input type='hidden' name='__TOKEN__' value='a68f619a9a2555f4c11871b58820917f'/><input type='hidden' name='__TOKEN__' value='a68f619a9a2555f4c11871b58820917f'/><input type='hidden' name='__TOKEN__' value='a68f619a9a2555f4c11871b58820917f'/></form>
        <script>
            $(function () {
                $('.searchForm').submit(function () {
                    var searchKeywordStr = $(this).find("input[name=searchKeywordStr]").val();
                    location.href = "http://127.0.0.1/vivo/index.php?s=home/product/search" + "&searchKeywordStr=" + searchKeywordStr;
                    return false;
                })
            })
        </script>
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
                <ul class="u">
                    <li class="search">
                        <a href="">
                            <b></b>
                        </a>
                    </li>
                    <li class="user">
                        <a href="http://127.0.0.1/vivo/index.php?s=home/my/index">
                            <b></b>
                        </a>
                        <div class="user-menu">
                            <h1 class="member-center">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/information">
                                    <i></i>
                                    个人中心
                                </a>
                                
                                <span class="icon-angular"></span>
                            </h1>
                            <h1 class="my-order">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/order">
                                    <i style="background-position: -48px 0;"></i>
                                    我的订单
                                </a>
                            </h1>
                                                            <h1 class="logout">
                                    <a href="script:;">
                                        <i style="background-position: -100px 0;"></i>
                                        退出登录
                                    </a>
                                </h1>
                                                    </div>
                        <script>
                            $(function () {
                                $(".member-center").hover(function () {
                                    $(this).find("i").css("background-position","0px -45px");
                                },function () {
                                    $(this).find("i").css("background-position","0px 0px");
                                })

                                $(".my-order").hover(function () {
                                    $(this).find("i").css("background-position","-48px -45px");
                                },function () {
                                    $(this).find("i").css("background-position","-48px 0px");
                                })

                                $(".logout").hover(function () {
                                    $(this).find("i").css("background-position","-100px -45px");
                                },function () {
                                    $(this).find("i").css("background-position","-100px 0px");
                                })

                                $('.logout a').click(function () {
                                    alertDiv("退出","确定退出么","退出","取消","error");
                                    $(".btn-blue").click(function () {
                                        $.post("http://127.0.0.1/vivo/index.php?s=home/common/out",{"a":1},function (res) {
                                            location.href = "http://127.0.0.1/vivo/index.php?s=home/index/index";
                                        },"json")
                                    })

                                    return false;
                                })


                            })
                        </script>
                    </li>
                    <li class="shopCar">
                        <a href="http://127.0.0.1/vivo/index.php?s=home/shoppingcar/shoppingcar">
                            <b id="end"></b>
                            <span class="shopcart-num">0</span>
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
				您的位置是:
				<a href="http://127.0.0.1/vivo/index.php?s=home/index/index">首页</a>
				<b></b> 			</div>
		</div>
		<div class="content">
			<aside class="menu-bar">
				<dl class="menu">
					<dt class="menu-title buy-process"><i></i><span>购买流程</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/alipay">支付宝支付</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/huabei">花呗分期</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice">发票说明</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/coupon">优惠券说明</a>
					</dd>
					<dt class="menu-title send-mode"><i></i><span>配送方式</span></dt>
					<dd class="menu-item on">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport">配送方式</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost">配送费用</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/sign">签收须知</a>
					</dd>
					<dt class="menu-title service-support"><i></i><span>服务支持</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/servicePromise">服务保证</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService">售后服务</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/brokenScreen">碎屏宝</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/extendService">手机延保</a>
					</dd>
					<dt class="menu-title brand-service"><i></i><span>品牌服务</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport">联系我们</a>
					</dd>
				</dl>
			</aside>
			
	<article class="c">
		<!--c start -->
		<div class="c-title cl">
			<h1>碎屏宝</h1>
		</div>
		<div>
			<h2>碎屏宝服务范围</h2>
			<img src="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/help/broken-screen-service-scope_3ba5585.png">
			<h2>碎屏宝购买流程</h2>
			<img src="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/help/broken-screen-buy-process_c313c8a.png">
			<h2>碎屏宝服务流程</h2>
			<img src="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/help/broken-screen-service-process_60f43cb.png">
			<h2>购买须知</h2>
			<ul>
				<li>官方商城所有机型均支持购机时，同步绑定购买碎屏宝；<br>购机3天内补充购买碎屏宝仅支持X5ProL/D/V、X5M、X5Max+、X6L/D/A、X6PlusL/D/A、Xplay5系列、X7、X7Plus、V系列机型。</li>
				<li>碎屏宝有效期内：仅提供屏幕出现破裂时免费更换原装屏幕一次。服务仅限屏幕，其他损坏的物料费用需自理。</li>
				<li>如您与售后服务中心协商寄送维修（该服务仅省会级服务点支持），快递请自费，不支持到付。</li>
				<li>服务购买立即生效，直接同步到vivo售后服务系统。<br>仅凭手机IMEI码可全国vivo售后服务中心进行服务和查询。<br>服务中心查询：手机设置—更多设置—售后服务。</li>
				<li>碎屏宝分普通屏（
					<a href="/product/1">半年版59元</a>；
					<a href="/product/2">一年版99元</a>）和曲面屏（
					<a href="/product/9911">半年版128元</a>；
					<a href="/product/9912">一年版158元</a>）两种，请根据需要选择购买。</li>
			</ul>
		</div>
	</article>

		</div>
<script type="text/javascript">
	$(function() {
		var on = "碎屏保";
		$.each($('.menu-item'),function(k,v){
			console.log(on)
			if($(this).find("a").html() == on){
				$(this).css({"color":"#018ed6","background-color":"#def4ff"});
				$(this).find("a").css("color","inherit");
			}
		})
	})
</script>
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
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" target="_blank">
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
                        <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png"/>
                        <em></em>
                    </div>
                </a>
            </div>
            <div class="copy-info">
                <a href="" class="footer-logo"></a>
                Copyright ©2011-2016 广东步步高电子工业有限公司                 <br />
                版权所有 保留一切权利粤粤ICP备05100288号 |
                <a href="http://www.miitbeian.gov.cn/">粤ICP备05100288号</a>
            </div>
        </div>
    </div>
</footer>
<div class="side-bar">
    <ul>

        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" class="service" target="_blank">
                <div>
                    在线客服
                </div>
            </a>
        </li>
        <li>
            <a href="" class="qrcode">
                <div>
                    <img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" alt="" />
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


