<extend file='resource/view/my'/>
<block name="right">
    <article class="c">
        <dl class="member-order-list">
            <dt>我的收藏</dt>
            <?php if(!$data){  ?>
                <div class="no-record" style="display: block;">
                    <img src="{{__ROOT__}}/resource/hdjs/home/other/my/no-collection-icon_1f9db31.png" alt="">
                    <span>暂时还没有任何商品</span>
                </div>
            <?php }else{ ?>
                <div class="no-record">
                    <img src="{{__ROOT__}}/resource/hdjs/home/other/my/no-collection-icon_1f9db31.png" alt="">
                    <span>暂时还没有任何商品</span>
                </div>
                <dd>
                    <table class="common">
                        <thead>
                        <tr>
                            <th class="img">列表图</th>
                            <th class="name">商品名称</th>
                            <th class="price">金额</th>
                            <th class="time">收藏时间</th>
                            <th class="state">商品状态</th>
                            <th class="operation">操作</th>
                        </tr>
                        </thead>

                        <foreach from="$data" key="$key" value="$value">
                            <tbody>
                            <tr>
                                <td>
                                    <a class="img-wrapper" target="_blank" href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}">
                                        <img src="{{__ROOT__}}/{{$value['commodity_list_img']}}">
                                    </a>
                                </td>
                                <td>
                                    <a class="link" target="_blank" href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}">{{$value['commodity_name']}}</a>
                                </td>
                                <td><strong>
                                        <dfn>¥</dfn>{{number_format($value["commodity_mall_price"],2)}}</strong></td>
                                <td>{{date('Y-m-d H:i:s',$value['keep_time'])}}</td>
                                <td>
                                    <?php if($value['commodity_all_stock'] > 0){ ?>
                                        有货
                                    <?php }else{ ?>
                                        缺货
                                    <?php } ?>
                                </td>
                                <td class="operate">
                                    <a class="buy" href="{{__ROOT__}}/{{$value['commodity_list_img']}}" target="_blank">去购买</a>
                                    <a class="delete" keep_id="{{$value['keep_id']}}">删除</a>
                                </td>
                            </tr>
                            </tbody>
                        </foreach>
                    </table>
                </dd>
            <?php } ?>
                
            </if>
            
        </dl>
    </article>
    <script>
        $(function () {
            $(".delete").click(function () {
                var This = $(this);
                var keep_id = $(this).attr("keep_id");
                alertDiv("移除收藏夹提示","您确定移除收藏夹么？","确定","取消","error");
                $(".btn-blue").click(function () {
                    $.post("{{u('my/delKeep')}}",{"keep_id":keep_id},function (res) {
                        if(res){
                            alertDiv("移除收藏夹提示","移除收藏夹成功","关闭","","success");
                            setTimeout(function () {
                                $('.btn-blue').click(function () {
                                    $('.dialog-container').animate({"top":"-500px"},500,function () {
                                        $('.dialog-container').remove();
                                    });
                                    setTimeout(function () {
                                        $('.mask').remove();
                                    },500)
                                })
                            },2000)
                            This.parents("tbody").remove();
                            //然后判断是否有宝贝，如果没有就显示没有的图片
                            if($(".common tbody").length == 0){
                                $('.no-record').show();
                                $(".common").parent("dd").hide();
                            }
                        }
                    },"json")
                })
            })
        })
    </script>
</block>