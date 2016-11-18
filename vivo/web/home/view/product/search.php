<extend file='resource/view/BigHome'/>
<block name="content">
    <div class="main">
        <div class="content">
            <div class="crumbs">
                您的位置是:<a href="{{u('index/index')}}">首页</a>
                <b></b>
                搜索
            </div>
        </div>

        <div class="content">
            <!--这是筛选部分-->
            <!--这是商品list-->
            <?php if($commodityData){ ?>
                <div class="list-box">
                    <ul>
                        <foreach from="$commodityData" key="$key" value="$value">
                            <li>
                                <a href="{{u('item/item',array('commodity_id'=>$value['commodity_id']))}}" <if value="$value['commodity_all_stock'] == 0">class="no-good"</if> >
                                <div class="figure">
                                    <img src="{{__ROOT__}}/{{$value['commodity_list_img']}}" alt="" />
                                </div>
                                <h3 title="{{$value['commodity_name']}}">
                                    {{$value['commodity_name']}}
                                </h3>
                                <p>
                                    <dfn>¥</dfn>
                                    {{$value['commodity_mall_price']}}
                                </p>
                                </a>
                            </li>
                        </foreach>
                        <!--no-good-->
                    </ul>
                </div>
            <?php }else{ ?>
                <div class="no-lists">
                    <img src="{{__ROOT__}}/resource/hdjs/home/other/phone/no-lists.png">
                    <p>当前没有商品符合筛选条件，请查看全部商品</p>
                </div>
            <?php } ?>


        </div>
    </div>
</block>
