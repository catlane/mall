<extend file='index.html'/>
<block name="content">
    <link href="{{__ROOT__}}/web/admin/view/assets/css/codemirror.css" rel="stylesheet">
    <script src="{{__ROOT__}}/web/admin/view/assets/dist/echarts.js"></script>
<div class=" page-content clearfix">
    <div class="transaction_style">
        <ul class="state-overview clearfix">
            <li class="Info">
                <span class="symbol red"><i class="fa fa-jpy"></i></span>
                <span class="value"><h4>交易金额</h4><p class="Quantity color_red">{{number_format("$allPrice",2)}}</p></span>
            </li>
            <li class="Info">
                <span class="symbol  blue"><i class="fa fa-shopping-cart"></i></span>
                <span class="value"><h4>订单数量</h4><p class="Quantity color_red">{{$orderNum}}</p></span>
            </li>
            <li class="Info">
                <span class="symbol terques"><i class="fa fa-shopping-cart"></i></span>
                <span class="value"><h4>交易成功</h4><p class="Quantity color_red">{{$successNum}}</p></span>
            </li>
            <li class="Info">
                <span class="symbol yellow"><i class="fa fa-shopping-cart"></i></span>
                <span class="value"><h4>交易失败</h4><p class="Quantity color_red">{{$failureNum}}</p></span>
            </li>
            <li class="Info">
                <span class="symbol darkblue"><i class="fa fa-jpy"></i></span>
                <span class="value"><h4>退款金额</h4><p class="Quantity color_red">{{number_format($returnsPrice,2)}}</p></span>
            </li>
        </ul>

    </div>
    <div class="t_Record" style="width: 100%">
        <div id="main" style="height:400px; overflow:hidden; width:100%;" ></div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        //当文档窗口发生改变时 触发
        $(window).resize(function(){
            $(".t_Record").css('width','100%');
        });
        $(".t_Record").css('width','100%');

    });


    require.config({
        paths: {
            echarts: '{{__ROOT__}}/web/admin/view/assets/dist'
        }
    });
    require(
        [
            'echarts',
            'echarts/theme/macarons',
            'echarts/chart/line',   // 按需加载所需图表，如需动态类型切换功能，别忘了同时加载相应图表
            'echarts/chart/bar'
        ],
        function (ec,theme) {
            var myChart = ec.init(document.getElementById('main'),theme);
            option = {
                title : {
                    text: '月购买订单交易记录',
                    subtext: '实时获取用户订单购买记录'
                },
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['所有订单','待付款','已付款','代发货']
                },
                toolbox: {
                    show : true,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'所有订单',
                        type:'bar',
                        data:[
                            "{{$monthAll[0]}}",
                            "{{$monthAll[1]}}",
                            "{{$monthAll[2]}}",
                            "{{$monthAll[3]}}",
                            "{{$monthAll[4]}}",
                            "{{$monthAll[5]}}",
                            "{{$monthAll[6]}}",
                            "{{$monthAll[7]}}",
                            "{{$monthAll[8]}}",
                            "{{$monthAll[9]}}",
                            "{{$monthAll[10]}}",
                            "{{$monthAll[11]}}"
                        ],
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        }
                    },
                    {
                        name:'待付款',
                        type:'bar',
                        data:[
                            "{{$monthNoMoney[0]}}",
                            "{{$monthNoMoney[1]}}",
                            "{{$monthNoMoney[2]}}",
                            "{{$monthNoMoney[3]}}",
                            "{{$monthNoMoney[4]}}",
                            "{{$monthNoMoney[5]}}",
                            "{{$monthNoMoney[6]}}",
                            "{{$monthNoMoney[7]}}",
                            "{{$monthNoMoney[8]}}",
                            "{{$monthNoMoney[9]}}",
                            "{{$monthNoMoney[10]}}",
                            "{{$monthNoMoney[11]}}"
                        ],
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },


                    }
                    , {
                        name:'已付款',
                        type:'bar',
                        data:[
                            "{{$monthSuccessMoney[0]}}",
                            "{{$monthSuccessMoney[1]}}",
                            "{{$monthSuccessMoney[2]}}",
                            "{{$monthSuccessMoney[3]}}",
                            "{{$monthSuccessMoney[4]}}",
                            "{{$monthSuccessMoney[5]}}",
                            "{{$monthSuccessMoney[6]}}",
                            "{{$monthSuccessMoney[7]}}",
                            "{{$monthSuccessMoney[8]}}",
                            "{{$monthSuccessMoney[9]}}",
                            "{{$monthSuccessMoney[10]}}",
                            "{{$monthSuccessMoney[11]}}"
                        ],
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },

                    }
                    , {
                        name:'代发货',
                        type:'bar',
                        data:[
                            "{{$monthNoShipped[0]}}",
                            "{{$monthNoShipped[1]}}",
                            "{{$monthNoShipped[2]}}",
                            "{{$monthNoShipped[3]}}",
                            "{{$monthNoShipped[4]}}",
                            "{{$monthNoShipped[5]}}",
                            "{{$monthNoShipped[6]}}",
                            "{{$monthNoShipped[7]}}",
                            "{{$monthNoShipped[8]}}",
                            "{{$monthNoShipped[9]}}",
                            "{{$monthNoShipped[10]}}",
                            "{{$monthNoShipped[11]}}"
                        ],
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },

                    }
                ]
            };

            myChart.setOption(option);
        }
    );
</script>
</block>