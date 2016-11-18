
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>用户服务协议</title>
    <style type="text/css">
        body, h1, dl, dd, p {
            margin: 0;
        }

        body {
            font-family: "Microsoft YaHei", "微软雅黑";
        }

        .wrapper {
            margin: 0 auto;
            width: 1065px;
        }

        :before {
            margin-right: 10px;
        }

        .no-count:before {
            display: none;
        }

        #header .wrapper{
            font-size: 0;
            line-height: 73px;
        }

        #header img{
            vertical-align: middle;
            width: 110px;
        }

        h1 {
            color: #333;
            font-size: 18px;
            font-weight: normal;
            line-height: 36px;
            text-align: center;
            background-color: #deeaf6;
        }

        article > dl {
            margin: 17px 0;
            color: #666;
            font-size: 14px;
            line-height: 27px;
            text-align: justify;
            /*重置first计数*/
            counter-reset: first;
        }

        article > dl > dt {
            font-weight: bold;
            /*重置second计数*/
            counter-reset: second;
            /*first计数加1*/
            counter-increment: first 1;
        }

        /*article > dl > dt:before {
            content: counter(first, cjk-ideographic) "、";
        }*/

        article > dl > dd {
            /*second计数加1*/
            counter-increment: second 1;
        }

        article > dl > dd:before {
            content: counter(first, decimal) "." counter(second, decimal);
        }

        article > dl > dd > dl > dt {
            /*重置third计数*/
            counter-reset: third;
        }

        article > dl > dd > dl > dt:before {
            content: counter(first, decimal) "." counter(second, decimal);
        }

        article > dl > dd > dl > dd {
            /*third计数加1*/
            counter-increment: third 1;
        }

        article > dl > dd > dl > dd:before {
            content: counter(first, decimal) "." counter(second, decimal) "." counter(third, decimal);
        }

        .releaser {
            margin-bottom: 20px;
            text-align: right;
        }

        #footer {
            height: 75px;
            background-color: #363636;
        }

        .copyright {
            padding-top: 23px;
            color: #666;
            font-size: 12px;
            line-height: 1;
            text-align: center;
        }
        .vf-f-copyright a {
            color: #666;
            text-decoration: none;
            cursor: pointer;
            outline: 0 none;
        }
        .vf-f-copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            line-height: 1.4em;
            color: #666;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="../web/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="header">
    <div class="wrapper">
        <a href="{{u('index/index')}}">
            <img src="{{__ROOT__}}/resource/hdjs/home/other/master/logo.png" />
        </a>
    </div>
</header>
<main>
    <div class="wrapper">
        <article>
            <h1>用户服务协议</h1>
            <dl>
                <dt>一、总则</dt>
                <dd>本协议是您与vivo之间关于您使用vivo相关服务所订立的协议。“vivo”是指维沃移动通信有限公司及其相关服务可能存在的运营关联单位。“用户”是指使用vivo相关服务的使用人，在本协议中更多地称为“您”。
                </dd>
                <dd>用户应当同意本协议的条款并按照页面上的提示完成全部的注册程序。用户在进行注册程序过程中点击"同意"按钮即表示用户与vivo达成协议，完全接受本协议项下的全部条款。</dd>
                <dd>您在使用vivo服务时可能需要注册一个帐户。用户注册成功后，vivo将给予每个用户一个用户帐户及相应的密码，该用户帐户和密码由用户负责保管；用户应当对以其用户帐户进行的所有活动和事件负法律责任。</dd>
                <dd>用户可以使用vivo各个单项服务，当用户使用vivo各单项服务时，用户的使用行为视为其对该单项服务的服务条款以及vivo在该单项服务中发出的各类公告的同意。</dd>
                <dd>您使用vivo的服务即视为您已阅读本协议并接受本协议的约束。vivo有权在必要时修改本协议条款。您可以在相关服务页面查阅最新版本的协议条款。本协议条款变更后，如果您继续使用vivo提供的服务，即视为您已接受修改后的协议。如果您不接受修改后的协议，应当停止使用vivo提供的服务。
                </dd>
                <dt>二、注册信息和隐私保护</dt>
                <dd>vivo帐户的所有权归vivo，用户完成注册申请手续后，获得vivo帐户的使用权。</dd>
                <dd>用户不应将其帐户、密码转让或出借予他人使用。如用户发现其帐户遭他人非法使用，应立即通知vivo。因第三方行为或用户自身的保管疏忽等原因导致用户帐户、密码遭他人非法使用，vivo不承担任何责任。</dd>
                <dd>vivo不对外公开或向任何非关联第三方提供单个用户的注册资料，除非：（1）事先获得用户的明确授权；（2）为您提供所要求的产品和服务所必需；（3）根据相关法律法规或法院、政府主管部门的要求；（4）为维护vivo的合法权益。
                </dd>
                <dt>三、用户帐户管理及使用规则</dt>
                <dd class="no-count">
                    <dl>
                        <dt>您在使用帐户服务时须遵守法律法规，不得利用帐户服务从事违法违规或侵犯他人合法权益的行为。</dt>
                        <dd>如果您违反了本条约定，导致任何第三方损害的，您应当独立承担责任，vivo因此遭受损失的，您也应当一并赔偿。</dd>
                        <dd>如果您违反了本条约定，vivo有权暂停或终止对您的服务。</dd>
                    </dl>
                </dd>
                <dd>您在使用本服务过程中应当遵守当地相关的法律法规，并尊重当地的道德和风俗习惯。如果您的行为违反了当地法律法规或道德风俗，您应当为此独立承担责任。</dd>
                <dd>您应避免因使用本服务而使vivo卷入政治和公共事件，否则vivo有权暂停或终止对您的服务。</dd>
                <dd>vivo依照业务规则限制、冻结或终止您的帐户使用时，可能会给您造成一定损失，该损失由您自行承担，vivo不承担任何责任。</dd>
                <dt>四、广告推广信息</dt>
                <dd>您同意vivo可以在提供服务的过程中自行或由第三方广告商向您发送广告、推广或宣传信息（包括商业与非商业信息），其方式和范围可不经向您特别通知而变更。</dd>
                <dd>您同意，对vivo服务中出现的广告信息，您应审慎判断其真实性和可靠性，除法律明确规定外，您应对依该广告信息进行的交易负责。</dd>
                <dt>五、免责事由</dt>
                <dd>您理解并同意，在使用本服务的过程中，可能会遇到不可抗力等风险因素，使本服务发生中断，由此给您造成的损失vivo在法律允许的范围内免责。</dd>
                <dd>vivo依据本协议约定获得处理违法违规内容的权利，该权利不构成vivo的义务或承诺，vivo不能保证及时发现违法行为或进行相应处理。</dd>
                <dt>六、管辖与法律适用</dt>
                <dd>本协议签订地为中华人民共和国广东省东莞市长安镇。</dd>
                <dd>若您和vivo之间发生任何纠纷或争议，首先应友好协商解决；协商不成的，您同意将纠纷或争议提交本协议签订地有管辖权的人民法院管辖。</dd>
                <dd>本协议的成立、生效、履行、解释及纠纷解决，适用中华人民共和国大陆地区法律（不适用冲突法）。</dd>
                <dd>本协议条款无论因何种原因部分无效或不可执行，其余条款仍有效，对双方具有约束力。</dd>
                <dt>七、其他</dt>
                <dd>如果您对本协议或本服务有意见或建议，可与vivo客户服务部门联系，我们会给予您必要的帮助。（正文完）</dd>
            </dl>
            <p class="releaser">vivo公司</p>
        </article>
    </div>
</main>
<footer id="footer">
    <div class="vf-f-copyright">
        <p class="copyright">COPYRIGHT © 1996-2016 <br>ALL RIGHTS RESERVED. <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备05100288号</a></p>
    </div>
</footer>
</body>
</html>