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
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/my_detail.css"/>
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/buy-process.css"/>
    
    <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
            <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/my.js" type="text/javascript" charset="utf-8"></script>
            <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/area.js" type="text/javascript" charset="utf-8"></script>
            <script src="http://127.0.0.1/vivo/resource/hdjs/home/js/YMDClass.js" type="text/javascript" charset="utf-8"></script>
    </head>
<body>
<div class="head-search">
    <div class="search-box">
        <form action="" method="get" class="searchForm">
            <input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
            <button type="submit">搜索</button>
        <input type='hidden' name='__TOKEN__' value='9d9c1239047927adbb06ccc319eb4e38'/><input type='hidden' name='__TOKEN__' value='9d9c1239047927adbb06ccc319eb4e38'/><input type='hidden' name='__TOKEN__' value='9d9c1239047927adbb06ccc319eb4e38'/></form>
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
                您的位置是:<a href="http://127.0.0.1/vivo/index.php?s=home/index/index">首页</a>
                <b></b>
                <a href="<?php echo u('my/order')?>">我的订单</a><b></b>订单详情            </div>
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
                        我的账户
                    </dt>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/information">个人资料</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/address">收货地址</a></dd>
                    <dd><a href="http://127.0.0.1/vivo/index.php?s=home/my/favorite">我的收藏</a></dd>
                </dl>
            </aside>
            
    <article class="c">
        <dl>
            <dd class="module-item">
                <div class="delivery-info normal">
                    <br>
                    <br>

                    <div class="progress-bar step1">
                        <?php if($data['orderForm_status'] == '未付款'){?>
                
                            <div class="bar-box"></div>
                        
               <?php }?>
                        <?php if($data['orderForm_status'] == '未发货'){?>
                
                            <div class="bar-box" style="background-position:0 -220px"></div>
                        
               <?php }?>
                        <?php if($data['orderForm_status'] == '已发货'){?>
                
                            <div class="bar-box" style="background-position:0 -330px"></div>
                        
               <?php }?>
                        <?php if($data['orderForm_status'] == '已完成'){?>
                
                            <div class="bar-box" style="background-position:0 -440px"></div>
                        
               <?php }?>
                    </div>
                    <ul class="delivery-records">
                        <li>
                            <label><?php echo date("Y-m-d H:i:s",$data['orderForm_sendtime'])?></label><label> 您提交的订单已经创建成功</label>
                        </li>
                        <?php if($data['orderForm_cancelTime'] != ''){?>
                
                            <li>
                                <label><?php echo date("Y-m-d H:i:s",$data['orderForm_cancelTime'])?></label><label>订单已关闭。原因:<?php echo $data['orderForm_cancelMethod']?></label>
                            </li>
                        
               <?php }?>
                        <?php if(count($data['returns']) != 0){?>
                
                            <li>
                                <label><?php echo date("Y-m-d H:i:s",$data['returns']['returns_time'])?></label><label><?php echo $data['returns']['returns_status']?></label>
                            </li>

                            <?php if($data['returns']['returns_success_status'] != ''){?>
                
                                <li>
                                    <label><?php echo date("Y-m-d H:i:s",$data['returns']['returns_success_time'])?></label><label><?php echo $data['returns']['returns_success_status']?></label>
                                </li>
                            
               <?php }?>

                        
               <?php }?>
                    </ul>
                </div>


                <div class="order-module order-overview">
                    <h2 class="title">订单基本信息</h2>
                    <ul>
                        <li class="overview-item">订单号：<?php echo $data['orderForm_num']?></li>
                        <li class="overview-item">订单金额：<span class="red"><dfn>¥</dfn><?php echo number_format($data["orderForm_price"],2)?></span></li>
                        <li class="overview-item">订单状态：
                            <?php echo $data['orderForm_status']?>

                        </li>
                    </ul>
                    <?php if($data['orderForm_status'] == '未付款'){?>
                
                        <div class="operation-box">
                            <button class="btn-confirm btn-highlight order-button" style="width: 160px;border-radius=5px;" orderForm_id="<?php echo $data['orderForm_id']?>">去结算</button>
                            <a class="btn-href cancelOrder" orderForm_id="<?php echo $data['orderForm_id']?>">
                                取消订单
                            </a>
                        </div>
                    
               <?php }?>
                </div>

                <div class="order-module receiver-info">
                    <h2 class="title">收货信息</h2>
                    <ul>
                        <li>收货人：<?php echo $data['orderForm_receiver']?></li>
                        <li>手机：<?php echo $data['010-1114456']?></li>
                        <li>收货地址：<?php echo $data['orderForm_address']?></li>
                    </ul>

                </div>

                <div class="order-module pay-type">
                    <h2 class="title">支付及配送方式</h2>
                    <ul>
                        <li>配送方式：圆通微小件
                            <dfn>¥</dfn>0.00</li>
                        <li>支付方式：<?php echo $data['orderForm_payMethod']?>                </li>
                        <li>发票类型：<?php echo $data['orderForm_taxType']?></li>
                        <li>发票抬头：<?php echo $data['orderForm_invoice']?></li>
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
                        <?php foreach ((array)$data['lists'] as $key=>$value){?>
                            <tbody class="item-single">
                            <tr class="prod-line">
                                <td class="prod-pic">
                                    <a class="figure" href="<?php echo u('item/item',array('commodity_id'=>$value['commodity_id']))?>" target="_blank">
                                        <img src="<?php echo $value['commodity_list_img']?>" alt="">
                                    </a>
                                </td>
                                <td width="305" class="prod-name"><a class="figure" href="<?php echo u('item/item',array('commodity_id'=>$value['commodity_id']))?>" target="_blank" title="<?php echo $value['commodity_name']?>"><?php echo $value['commodity_name']?></a><br>
                                   <?php echo $value['orderFormList_attr']?>
                                </td>
                                <td><?php echo number_format($value['orderFormList_price'],2)?></td>
                                <td><?php echo $value['orderFormList_shopNum']?></td>
                                <td>
                                    -0.00</td>
                                <td><?php echo $value['orderFormList_price']?></td>
                                <td class="total-price"><?php echo number_format($value['orderFormList_price'],2)?></td>
                            </tr>
                            </tbody>
                        <?php }?>
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
                                        <?php echo $data['orderForm_comments']?>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right-box pull-right">
                            <ul>
                                <li class="order-sum">商品总金额：<label><span class="price"><dfn>¥</dfn><?php echo number_format($data['orderForm_price'],2)?></span></label></li>
                                <li class="order-sum">运费：<label><span class="red"><dfn>¥</dfn>0.00</span></label></li>
                                <li class="order-sum">优惠：<label><span class="red">-<dfn>¥</dfn>0.00</span></label></li>
                                <li class="order-sum">总计：<label><span class="price"><dfn>¥</dfn><?php echo number_format($data['orderForm_price'],2)?></span></label></li>

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
                            location.href= "<?php echo u('cashier/cashier')?>" + '&orderForm_id=' + orderForm_id;
                        })
                    })
                    $('.cancelOrder').click(function(){
                        var orderForm_id = $(this).attr("orderForm_id");
                        alertDiv("取消订单申请","订单成功取消后无法恢复",'确定取消','暂不取消','error');
                        $(".btn-blue").click(function () {
                            $.post("<?php echo u('my/cancelOrder')?>",{"orderForm_id":orderForm_id,"orderForm_cancelMethod":"手动"},function (res) {
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



