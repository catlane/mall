<extend file='resource/view/my'/>
<block name="right">
    <if value="count($data['member_user_birthday']) == 3">
        <script>
            $(function () {
                //这里是时间
                new YMDselect('year1','month1','day1',{{$data["member_user_birthday"][0]}},{{$data["member_user_birthday"][1]}},{{$data["member_user_birthday"][2]}});
                //初始化方法
                area.init('area');
                //修改的时候默认被选中效果
                area.selected("{{$data['member_user_liveAddress'][0]}}","{{$data['member_user_liveAddress'][1]}}","{{$data['member_user_liveAddress'][2]}}");
            })
        </script>
        <else>
            <script>
                $(function () {
                    //这里是时间
                    new YMDselect('year1','month1','day1',"请选择年份",2,22);
                    //初始化方法
                    area.init('area');
                    //修改的时候默认被选中效果
                    area.selected("请选择省","","请选择县");
                })
            </script>
    </if>

    <article class="c">
        <dl class="member-order-list">
            <dt class="module-title">个人资料</dt>
            <dd class="module-item">
                <form action="">
                    <table class="form-table">
                        <colgroup>
                            <col style="width: 150px;">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th><span class="red">*</span>昵称：</th>
                                <td>
                                    <input type="text" class="user-name valid" placeholder="请输入您的昵称" value="{{$data['member_user_nickname']}}" name="member_user_nickname" aria-required="true" aria-describedby="realName-error" aria-invalid="false">
                                    <span class="error-style"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="red">*</span>性别：</th>
                                <td class="sex-box">
                                    <label><input type="radio" name="member_user_sex" value="男" <if value="$data['member_user_sex'] == 男">checked</if> >男</label>
                                    <label><input type="radio" name="member_user_sex" value="女" <if value="$data['member_user_sex'] == 女">checked</if>>女</label>
                                    <label><input type="radio" name="member_user_sex" value="不方便透露" <if value="$data['member_user_sex'] == 不方便透露">checked</if>>不方便透露</label>
                                    <span class="error-style"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="red">*</span>生日：</th>
                                <td>
                                    <select name="year1"></select>
                                    <select name="month1"></select>
                                    <select name="day1"></select>
                                    <span class="error-style"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="red">*</span>居住地：</th>
                                <td id="j_ReginContriner">
                                    <select name="member_user_liveAddress[]" id="area1" value="{{$data['member_user_liveAddress'][0]}}"></select>
                                    <select name="member_user_liveAddress[]" id="area2" value="{{$data['member_user_liveAddress'][1]}}"></select>
                                    <select name="member_user_liveAddress[]" id="area3" value="{{$data['member_user_liveAddress'][2]}}"></select>
                                    <span class="error-style"></span>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <button class="btn-blue submit btn-submit" type="submit">保存</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </dd>
        </dl>
        <script>
            $(function () {
                $(".module-item form").submit(function () {
                    var data = $(this).serialize();
                    $.post("{{u('my/information')}}",data,function (res) {
                        if(res.valid){
                            $(".error-style").html("");
                            alertDiv("用户信息提示","您已成功修改信息","关闭","","success");
                            $("#j_ReginContriner select").siblings(".error-style").html("");
                        }else{
                            $(".error-style").html("");
                            //这是判断昵称
                            if(res.message.indexOf("用户昵称为空") != -1){
                                $("input[name=member_user_nickname]").siblings(".error-style").html("用户昵称为空");
                                return;
                            }
                            //这是判断性别
                            if(res.message.indexOf("用户性别为空") != -1){
                                $("input[name=member_user_sex]").parent().siblings(".error-style").html("用户性别未选择");
                                return;
                            }
                            //这是判断年份
                            if(res.message.indexOf("请选择年份") != -1){
                                $("select[name=year1]").siblings(".error-style").html("请选择年份");
                                return;
                            }
                            //这是判断月份
                            if(res.message.indexOf("请选择月份") != -1){
                                $("select[name=month1]").siblings(".error-style").html("请选择月份");
                                return;
                            }
                            //这是判断日期
                            if(res.message.indexOf("请选择日期") != -1){
                                $("select[name=day1]").siblings(".error-style").html("请选择日期");
                                return;
                            }
                            //这是判断日期
                            if(res.message.indexOf("请选择居住地") != -1){
                                $("#j_ReginContriner select").siblings(".error-style").html("请选择居住地");
                            }
                        }
                    },"json")
                    $(this).attr("action","script:;");
                    return;
                })
            })
        </script>
    </article>
</block>