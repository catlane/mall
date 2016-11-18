/*
Navicat MySQL Data Transfer

Source Server         : vivo
Source Server Version : 50548
Source Host           : c70_yangyuhui.houdunphp.com:3306
Source Database       : c70_yangyuhui

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2016-11-18 07:56:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog_article`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(150) NOT NULL DEFAULT '',
  `click` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `sendtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `digest` varchar(255) NOT NULL DEFAULT '' COMMENT '摘要',
  `author` varchar(20) NOT NULL DEFAULT '' COMMENT '作者',
  `is_recycle` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `user_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属用户uid',
  `category_cid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '所属分类cid',
  PRIMARY KEY (`aid`),
  KEY `fk_article_user_idx` (`user_uid`),
  KEY `fk_article_category1_idx` (`category_cid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('1', '房歌', '999', '1473687110', '1473753929', 'attachment/2016/09/12/46961473687107.jpg', '房歌', '济民', '2', '1', '2');
INSERT INTO `blog_article` VALUES ('2', '可惜不是你，陪我走到最后（忧郁）', '21', '1473687704', '1473753920', 'attachment/2016/09/12/28991473687390.jpg', '忧郁', '忧郁', '1', '1', '7');
INSERT INTO `blog_article` VALUES ('3', '梦断相思绝', '32', '1473687953', '0', 'attachment/2016/09/12/101473687916.jpg', '梦断相思绝', '亡訫魂', '1', '1', '6');
INSERT INTO `blog_article` VALUES ('4', '莅住时光，暖意生香', '20', '1473688071', '0', 'attachment/2016/09/12/77801473688064.jpg', '莅住时光，暖意生香', '烟雨疏疏', '1', '1', '7');
INSERT INTO `blog_article` VALUES ('5', '每人的生命里都有一只碗', '23', '1473688202', '1473778338', 'attachment/2016/09/12/90791473688151.jpg', '每个人的生命里都有一只碗，碗里盛着善良、信任、宽容、真诚，也盛着虚伪、狭隘、猜忌、自私……请剔除碗里的杂质，然后微笑着迎接另一只碗的碰撞，并发出你们清脆、爽朗的笑声吧！', '杨青', '1', '1', '7');
INSERT INTO `blog_article` VALUES ('6', 'Just about me', '47', '1473762638', '1477484413', 'attachment/2016/10/26/26261477484166.png', '杨宇辉，南，一个90后草根男站长！16年入行。从搬砖一样的生活方式换成了现在有“单”而居的日子。当然这个单不是单身的单，跟我的职业相比，爱情脱单并不是问题！虽然极尽苛刻的征婚条件但也远不及客户千奇百怪的要求。告别了朝九晚五，躲过了风吹日晒，虽然不再有阶梯式的工资，但是偶尔可以给自己放放假，挽着她，一起轻装旅行。', '杨宇辉', '1', '1', '2');
INSERT INTO `blog_article` VALUES ('8', '测试', '7', '1473933001', '0', 'attachment/2016/09/13/85041473777488.jpg', '测试', '测试', '1', '1', '5');
INSERT INTO `blog_article` VALUES ('7', '我想我们再也回不去了', '5', '1473777499', '0', 'attachment/2016/09/13/85041473777488.jpg', '　　世界是相对的，不要因为别人，耽误自己的未来，<a href=\"http://www.jj59.com/zti/yigeren/\" class=\"keywordlink\">一个人</a>可以简单的活着，但是很多人未必看得起自己，所以，自己得学会奋斗，学会改变自己的命运，要求不高，善待自己，拥有一颗善良的心，做一番为别人着想的事，不要因为金钱背起朋友，不要因为朋友欺骗朋友，有你得到的，就会有你失去的，你可以衡量别人的长短，别人也可以衡量你的好坏。', '夏梦CHY', '1', '1', '6');

-- ----------------------------
-- Table structure for `blog_article_data`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article_data`;
CREATE TABLE `blog_article_data` (
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键字seo',
  `des` varchar(255) NOT NULL DEFAULT '' COMMENT '文章描述 seo',
  `content` text COMMENT '文章内容',
  `article_aid` int(10) unsigned NOT NULL,
  KEY `fk_article_data_article1_idx` (`article_aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章数据表';

-- ----------------------------
-- Records of blog_article_data
-- ----------------------------
INSERT INTO `blog_article_data` VALUES ('房歌', '这是一首关于伤感文章的日志', '<p>　　高楼高高高几许，<br>　　房价涨涨涨天挨；<br>　　背景离乡省吃用，<br>　　洒尽汗水拼三代。<br>　　<br>　　攀附银行办房货，<br>　　从此<a href=\"http://www.jj59.com/zti/shenghuo/\" class=\"keywordlink\">生活</a>紧安排；<br>　　泰山压顶头发晕，<br>　　心慌气喘三十裁。<br>　　<br>　　城里没房如乞丐，<br>　　买了房子变奴才。<br>　　又是月明星稀夜，<br>　　冷露无声湿台阶。<br>　　</p>', '1');
INSERT INTO `blog_article_data` VALUES ('忧郁', '　　时光总是无情的流失过去，而我们是否总是缺少或找寻着什么。总有一些事情让我们面目全非，总有一些回忆让我们心痛不已；前世红尘，今生无缘，也许，注定只能让我们成为生命中一个陌生的过客。', '<p>　　　　<br>　　文/忧郁<br>　　<br>　　这一刻，我还清晰的记得那时的情景，那时的夜晚，那时的话语，那时的你，如今，你的笑声总是在我脑海中荡漾回放，让我措手不及，却痛彻心扉。<br>　　<br>　　时光总是无情的流失过去，而我们是否总是缺少或找寻着什么。总有一些事情让我们面目全非，总有一些回忆让我们心痛不已；前世红尘，今生无缘，也许，注定只能让我们成为生命中一个陌生的过客。<br>　　<br>　　其实，从一开始我就知道会是这个结局，我却一直傻傻的坚持了下去，以为我的真心会<a href=\"script:;\">感动</a>你，会让我们的情谊维持下去，会让这个结局来的更晚一些，直到现在我才明白，有些爱不是真心真意就能够感动和改变的，人与人之间以事看貌不看心的我却见到太多太多，何况现在这个时代何来的一心一意呢？只是我自己相信罢了，更何况我们？<br>　　<br>　　还记得，最初我们都讲诉着自己<a href=\"script:;\">故事</a>，你却讲着讲着泪流满面，我还心痛的告诉你要学会忘记过去；很庆幸的是，我们都有着相同的经历，相同的家庭，而可惜的不是你，陪我走到最后。<br>　　<br>　　曾几何时，你的笑声让我如痴如醉，让我陶醉在里面无法自拔，你却笑着说我“傻。”<br>　　<br>　　曾几何时，我告诉你我今生只为你一个傻，只为你一个笨，你却笑着说我“你这个受虐狂。”<br>　　<br>　　曾几何时，我无数次的问你，你喜欢过我吗？你爱过我吗？你却无言以对。<br>　　<br>　　也许，我们的<a href=\"script:;\">爱情</a>就像河流一样，流到分支的部分始终要分离各自离去！<br>　　<br>　　常常感叹：世事的沧桑，人情的冷漠，我们为什么会相遇到相爱，而面对的却是你无言无视的彻底？是不是我对你的爱还不能触化到你心里的那块冰晶？是不是我的一心一意无法改变你对外貌的相看？我知道，你说过，你是“外貌协会”可我，很想去好好的去珍惜甚至呵护守护你一生，你却对我一视无顾。我发了疯的去想你，我们却陌生得彻底。<br>　　<br>　　耳边不停的反复唱着“我常常会问自己，我凭什么说爱你，离开你怕<a href=\"script:;\">寂寞</a>，面对你怕承诺，反复复总找不到自我”全世界最<a href=\"script:;\">伤心</a>的人莫过于此时此刻的我，你有感受到吗？<br>　　<br>　　多少个梦里都有着你的出现，每次离去，我都痛得醒来，我曾以为，真心真意的付出，一心一意的对待，就会有美好的时光和誓老的陪伴，可是结局却是一场意想不到令人难忘而痛彻心扉的梦，一场令人心碎而难以抹去的伤忆......<br>　　<br>　　有些事情，有些爱情，有些人，我们明知道结局却还要坚持去改变去争取，可是最终还是逃离不了分离，当我们认认真真付出的那一刻，才发现，伤得更深的还是自己，她人根本不会懂得；其实，我们何不顺其自然，何必那么让自己执着呢，你们说对吗？<br>　　<br>　　往事回首，情断心已碎，烟消云散的回忆断断续续出现在我的迷影中，是你，还是我自己不肯放弃这刻骨铭心的芳华？<br>　　<br>　　是谁，把那最初的情怀给了我，却说承诺爱我；是谁，在那个夜晚喝酒之后誓誓真真的说不会离开我；又是谁，不分<a href=\"script:;\">时间</a>与我话语谈情惜相随？<br>　　<br>　　也许，当初的我们都太过于单纯，都想得太简单，以为相爱就会永恒，可事事时时非非的流散却改变了我们最以为真的话语和最真的情誓。<br>　　<br>　　记得那时，我傻傻的期待关于你的任何消息甚至每天都在等待你的电话，然而，美好的日总是不会有很多，一天就一次电话，只是为了更进一步的了解才电话沟通，所以，每一次对我来说都是那么地<a href=\"script:;\">幸福</a>而神圣......<br>　　<br>　　记得我对你说的那句最痛心的话吗：这五年来，我一直孤孤单单在等待我生命中最心动的人，我曾在西藏布达拉宫佛前祈求，若是遇见今生属于自己的一半我绝不会放弃。而时间却证明了，这一切只是一个深深未醒来的梦，我却还往里面深跳。<br>　　<br>　　也许这句古诗说的对“少年不识愁滋味，为赋新词强说愁。”<br>　　<br>　　可惜不是你，陪我走到最后，一切假假真真，一切虚无缥缈，还是自己独自漂泊。我把自己的亲身经历写出来分享给大家，希望你们看了不要忧伤；也许，有的人正在经历我所经历的路段，但是，不要放弃，要相信自己所追求的，也希望你们看了我的创作，更能懂得珍惜和把握眼前身边的人！<br>　　<br>　　<a href=\"script:;\">原创</a><a href=\"script:;\">QQ</a>：71956607文学交流群：6891328<br>　　<br>　　</p>', '2');
INSERT INTO `blog_article_data` VALUES ('伤感文章', '伤感文章', '<p>　　一段深深的<a href=\"http://www.jj59.com/zti/ganqing/\" class=\"keywordlink\">感情</a>，因为太在乎，太过在意，所以，往往不被对方珍惜，往往被忽略，爱是心与心的感觉，是情与情的交融，然而，这一份爱，留下了锥心刺骨的痛，尽管努力去适应这份爱，强装笑容，然而，笑容可以让别人开心，而自己心却在滴血，心疼的感觉，怎么样也无法骗自己；<br>　　<br>　　往往就是因为太看重这份爱，所以，心才会痛，滴血的痛，被彻底撕裂的疼痛，就是因为太过在乎这份爱，所以才会吃醋，让自己无法接受这样的事情，越是认真，越是<a href=\"http://www.jj59.com/zti/shangxin/\" class=\"keywordlink\">伤心</a>，越是主动，越是卑微；爱，不是<a href=\"http://www.jj59.com/zti/yigeren/\" class=\"keywordlink\">一个人</a>单方面的一味追求，而是两颗心彼此的撞击，心与心的呵护，而不是彼此的伤害；若真心总被忽视，践踏，那又何必苦苦作贱了自己，若不被珍惜，又何必苦苦去维系。学会放弃，学会开刀自己，那样就洒脱的离开了，尘世间的美丽，人世间的所有的一切.......<br>　　<br>　　一路天涯，幽幽相思路，一路红尘，真<a href=\"http://www.jj59.com/love-lianai/\" class=\"keywordlink\">爱情</a>相携；一路深情，三生只为你，留万千<a href=\"http://www.jj59.com/zti/sinian/\" class=\"keywordlink\">思念</a>，渡你我三生爱恋，一生深情，不移的眷恋，不变的真爱；深情同行，相依相伴，那么温馨，那样清晰，永远的唯一，闪耀着深深的情意，映射在心底；难以忘却的思念，滴滴相思断肠流泪，<a href=\"http://www.jj59.com/zti/jimo/\" class=\"keywordlink\">寂寞</a>一生情幽幽，红尘泪相思，无助的时候，真想你在身边陪我，彼此相依相伴，不离不弃；那份隐藏在心底，对你不变的真爱，浓缩了一生一世永远的爱恋，<a href=\"http://www.jj59.com/zti/jiyi/\" class=\"keywordlink\">记忆</a>里全是你的影子，是刻入骨髓的深爱，时时刻刻在灵魂里摇曳，在相思渡口中忆起，这一生一世的唯一；对你的爱恋，沁入骨髓的真情，你的一切，早已在我心上打上了烙印，深深的殖入了我的骨髓，思念泪水，却一直在眼中打转。<br>　　<br>　　梦断相思绝，殇了谁的情？枯叶凋零，花落为谁痛？凝眸千年，断了谁的流年？几多欺盼，几许痴缠；唯把相思揉入轮回里，相思忆，泪千行，似曾相逢苍凉梦；殇别离，孤心痛，泪眼迷朦花落间；孤心碎，愁断肠，指尖苍白烟雨中；淡墨落，滴心殇，亘古潇潇残梦殇。寂夜苍凉，孤莺泪凄凉起，叹三生，万千情，一息泪殇，片片风<a href=\"http://www.jj59.com/zti/xue/\" class=\"keywordlink\">雪</a>透心凉，细品味，腻柔情，哽咽失语暗夜殇，相思诗，凄凉句，任一腔绵婉独断肠，相思绝，飘零殇，散落天涯在风中；一泓情，暖细雨，吻遍朱唇上独幽凉，任清风，冷月光，刻骨相思凝眸间，一生深情，烟雨泪千行。<br>　　<br>　　文/亡心魂/Q3392219<br>　　<br>　　</p>', '3');
INSERT INTO `blog_article_data` VALUES ('莅住时光，暖意生香', '莅住时光，暖意生香', '<p>　　我在时光里莅住，期待，在每一个风轻云淡的日子里，可以写出锦瑟生香的暖字；依着阳光安暖，悄然长成一朵潋滟的花；等，春天的情话落在时光的蒹葭，你眼中那寂静的妥帖，便是我在花间筑下的梦。<br>　　<br>　　——题记<br>　　<br>　　很久，没有在春日的阳光下，听歌，写字。然后，靠在窗前背过阳光安静的想念那些虚无缥缈的日子。仿佛，阳光依着褶旧的光影在每一天的时光里流动，然后又不断的变化着天气。于是，我眼里的光阴便多了与阳光有关的温暖。风绕过窗户，轻轻的拂面而过。<br>　　<br>　　喜欢，每一个与阳光谈心的日子，让心里那空旷好久的心房变得暖意葱茏，<a href=\"http://www.jj59.com/xinqingsuibi/\" class=\"keywordlink\">心情</a>舒展；春天来的时候，我在花下筑梦，以桃花为诗，流云为音，清风为韵，与光阴说禅，与岁月品暖。彼时，写一些清凉若水的句子，念三寸日光的唯美。愿流年无恙，岁月安然。<br>　　<br>　　都说最美<a href=\"http://www.jj59.com/zti/renjian/\" class=\"keywordlink\">人间</a>四月天，而我最愿，不管后来的以后我会变得如何如何，唯愿你曾经在我心上莅住过的痕迹还在，就算老了花期，旧了容颜，远了<a href=\"http://www.jj59.com/zti/sinian/\" class=\"keywordlink\">思念</a>，岁月里的相望依旧还有当初的温度。等桃红落了妆，等微雨结了霜，等你给我写的信我的笑容依旧还挂在脸庞，到时候我来读你，读你眼里初见的模样，还有不小心嘴角微扬的角度，那时候，你远远的来，我浅浅的笑，如初见般，春暖花开，寂静安然。<br>　　<br>　　琉璃时光，<a href=\"http://www.jj59.com/zti/fanhua/\" class=\"keywordlink\">繁华</a>寂寂，多想，将春天草长莺飞的熙攘，写成一枚清新温润的词章，寄给你，寄给流年，寄给每一位在旅途中的归人；花落，沉香，有暗香浮动初盛的枝头，那朵朵摇曳的嫣然，便是时光里最美的印记，用指尖的温情，轻轻记下一个春天的温度，落下的<a href=\"http://www.jj59.com\" class=\"keywordlink\">文字</a>，飘在春天的烟雨中，增加了一层淡淡的想念。<br>　　<br>　　某时，会责怪时光走的太急，那么多青葱岁月，杏花微雨的时光，一不小心便走成了恍然如梦。翻开<a href=\"http://www.jj59.com/zti/jiyi/\" class=\"keywordlink\">记忆</a>的篇章，依旧会在某个章节停留，那些半韶余凉，落红满地的叹息，仿佛是宣誓结局里的尾声，沿着记忆的影子一层一层的长，之后，又一寸一寸的凉，直到渐成为眼底淡淡的一抹哀伤。<br>　　<br>　　一场雨，从午后落至半夜，心里的想念会不会从此泛滥成灾。就像<a href=\"http://www.jj59.com/zti/yigeren/\" class=\"keywordlink\">一个人</a>的心事，你猜不透，读不懂。眼里那一场关于扯不断的清梦，是否会跟着光阴的影子沾满回忆，将内心寂静的絮叨，和凌乱的碎语，从此变成一个个音符，流动在睡前闲语中。将那些暗淡无光的星月点亮，只为在这一程的风月里，回眸一笑。<br>　　<br>　　光阴从来不等人，如这阳光一般。划过掌心的莞尔，一个回眸，便落满了苍凉的叹息。人世的烦忧，总会让人心生顿惑，何不学会看淡自己的姿态，如果，俗世的烟火气息已经避无可避，也应该自己学会风烟俱净，摒弃红尘；<a href=\"http://www.jj59.com/zti/shenghuo/\" class=\"keywordlink\">生活</a>和心情总能靠自己分段续写，我的右手是昨天带着淡淡的叹息，左手是有着明朗的笑容，许自己一场春暖花开，浅浅行，静静听，即使一路上无人陪伴，却也能浮动暗香。<br>　　<br>　　有时候，看多了别人的<a href=\"http://www.jj59.com\" class=\"keywordlink\">故事</a>，心里会<a href=\"http://www.jj59.com\" class=\"keywordlink\">伤感</a>，会空落。那些锦上书燕，暗香疏影，经过一年一岁的推移，一嗔一笑的心情。随着光阴叠加，便多了很多说不清道不明的感觉。仿佛，堆积的心事都开始在梦里流浪；我，还来不及整理，还来不及凭记，四月的落花，便已被五月的流年掩藏，彼时，桃花半朵，清风几缕，却在你的笔下，明媚了一个春天，卷落，花谢纷飞，光阴里的印记，落了蒹葭之尾；却也妖娆了你眼中的唯美。<br>　　<br>　　窗外，阳光依旧暖暖，穿过玻璃洒落在身上。突然很留恋这个季节；连着窗外那一抹葱茏的绿，也美的扣人心弦；这个春天，有花香，有疏影，有小桥，有烟雨，便是妥帖安放在心上的三寸日光。<br>　　<br>　　文字作者：烟雨疏疏，Q:937871434<br>　　<br>　　尊重<a href=\"http://www.jj59.com/yuanchuang/\" class=\"keywordlink\">原创</a>，请勿复制粘贴，不支持任何商业推广<br>　　<br>　　</p>', '4');
INSERT INTO `blog_article_data` VALUES ('碗', '碗', '<ul class=\"infos\">\r\n      <p>有一个年轻人去买碗，来到店里他顺手拿起一只碗，然后依次与其它碗轻轻碰击，碗与碗之间相碰时立即发出沉闷、浑浊的声响，他失望地摇摇头。 然后去试下一只碗……他几乎挑遍了店里所有的碗，竟然没有一只满意的，就连老板捧出的自认为是店里碗中精品也被他摇着头失望地放回去了。</p>\r\n<p>老板很是纳闷，问他老是拿手中的这只碗去碰别的碗是什么意思？他得意地告诉老板，这是一位长者告诉他的挑碗的诀窍，当一只碗与另一只碗轻轻碰撞时，发出清脆、悦耳声响的，一定是只好碗。老板恍然大悟，拿起一只碗递给他，笑着说：“小伙子，你拿这只碗去试试，保管你能挑中自己心仪的碗”。</p>\r\n<p><img src=\"http://127.0.0.1/Hdphp/hdphp/attachment/2016/09/12/90791473688151.jpg\" alt=\"每人的生命里都有一只碗\" width=\"585\" height=\"480\"></p>\r\n<p>他半信半疑地依言行事。奇怪！他手里拿着的每一只碗都在轻轻地碰撞下发出清脆的声响，他不明白这是怎么回事，惊问其详。</p>\r\n<p>老板笑着说，道理很简单，你刚才拿来试碗的那只碗本身就是一只次品，你用它试碗那声音必然浑浊，你想得到一只好碗，首先要保证自己拿的那只也是只好碗……</p>\r\n<p>就像一只碗与另一只碗的碰撞一样，一颗心与另一颗心的碰撞，需要付出真诚，才能发出清脆悦耳的响声。自己带着猜忌、怀疑甚至戒备之心与人相处，就难免得到别人的猜忌与怀疑。其实每个人都可能成为自己生命中的“贵人”，前提条件是，你应该与人为善。</p>\r\n<p>你付出了真诚，就会得到相应的信任，你献出爱心，就会得到尊重。反之，你对别人虚伪、猜忌甚至嫉恨，别人给你的也只能是一堵厚厚的墙和一颗冷漠的心。每个人的生命里都有一只碗，碗里盛着善良、信任、宽容、真诚，也盛着虚伪、狭隘、猜忌、自私……请剔除碗里的杂质，然后微笑着迎接另一只碗的碰撞，并发出你们清脆、爽朗的笑声吧！</p>\r\n<p>做最好的自己，才能碰见最好的别人。</p><p align=\"center\" class=\"pageLink\"></p>\r\n\r\n    </ul>', '5');
INSERT INTO `blog_article_data` VALUES ('关于我', '关于我', '<ul>\r\n        <p>杨宇辉，男，一个90后草根男站长！16年入行。从搬砖一样的生活方式换成了现在有“单”而居的日子。当然这个单不是单身的单，跟我的职业相比，爱情脱单并不是问题！虽然极尽苛刻的征婚条件但也远不及客户千奇百怪的要求。告别了朝九晚五，躲过了风吹日晒，虽然不再有阶梯式的工资，但是偶尔可以给自己放放假，挽着老公，一起轻装旅行。</p>\r\n        <p> 人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。生活的压力迫使我放弃了轻松的前台接待，放弃了体面的编辑，换来虽有些蓬头垢面的工作，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为我在学习使用Photoshop、Flash、Dreamweaver、ASP、PHP、JSP...中激发了兴趣，然后越走越远....</p>\r\n        <p>在这条路上，我要感谢三个人，第一个是我从事编辑的老板，是他给了我充分学习研究div的时间，第二个人是我的老师，如果不是街上的一次偶遇，如果不是因为我正缺钱，我不会去强迫自己做不会的事情，但是金钱的诱惑实在是抵挡不了，于是我选择了“接招”，东拼西凑的把一个网站做好了，当时还堪称佳作的网站至今已尘归尘土归土了。第三个人，我总说他是我的伯乐，因为我当初应聘技术员的时候，我说我什么都不会，但是他却给了我机会，而我就牢牢的把握了那次机会，直到现在如果不是我主动把域名和空间转出来，我会一直霸占着公司资源，免费下去（可我就偏偏不是喜欢爱占便宜的人，总感觉欠了就得还）...</p>\r\n        <p> 还要特别感谢一个人，是我的ta。他是我的百科，我不会的，他会，最后我还是不会。博客能做到今天这样，一半都有他的功劳。他不仅仅支持我的事业作为我有力的经济后盾，还毫无怨言的包容我所有工作、生活当中有理无理的坏脾气，曾经我是多么有自己原则的一个人，但是遇到他，打破了我自己毕生坚持的原则，喜欢一句话“冥冥中该来则来，无处可逃”。 </p>\r\n      </ul>', '6');
INSERT INTO `blog_article_data` VALUES ('我想我们再也回不去了', '　　世界是相对的，不要因为别人，耽误自己的未来，<a href=\"http://www.jj59.com/zti/yigeren/\" class=\"keywordlink\">一个人</a>可以简单的活着，但是很多人未必看得起自己，所以，自己得学会奋斗，学会改变自己的命运，要求不高，善待自己，拥有一颗善良的心，做一番为别人着想的事，不要因为金钱背起朋友，不要因为朋友欺骗朋友，有你得到的，就会有你失去的，你可以衡量别人的长短，别人也可以衡量你的好坏。', '<p>　　世界是相对的，不要因为别人，耽误自己的未来，<a href=\"http://www.jj59.com/zti/yigeren/\" class=\"keywordlink\">一个人</a>可以简单的活着，但是很多人未必看得起自己，所以，自己得学会奋斗，学会改变自己的命运，要求不高，善待自己，拥有一颗善良的心，做一番为别人着想的事，不要因为金钱背起朋友，不要因为朋友欺骗朋友，有你得到的，就会有你失去的，你可以衡量别人的长短，别人也可以衡量你的好坏。<br>　　<br>　　每个人都有一颗心，不代表每个人都会善待你，每个人都有一张嘴，不代表每个人都能夸你，好好的活着，有时候自己犯错，不仅影响家庭，还会影响更多的人，<a href=\"http://www.jj59.com/zti/time/\" class=\"keywordlink\">时间</a>是进化的，岁月是短暂的，不要用欺骗别人的方式欺骗自己，不要用无助的方式来要挟朋友，很多事，不要总是求别人，要知道有一个未来，所以要提前准备哦。<br>　　<br>　　你可以一无所有，也可以吊儿郎当，但是你对得起父母吗？你可以没钱，你父母也可以没钱，你不要抱怨别人有一对好父母，也不要因为自己家庭穷而学会愤怒，其实每个人都会愤怒，但是对于愤怒的人来说，受伤的是别人，对于不愤怒的人来说，正确的选择，是下次就会直接躲避你，你在这个世界让别人躲避，那就是你的不对了。<br>　　<br>　　没钱的时候想想做了多少，没朋友的时候，想想为别人做了多少，父母离开的时候，想想自己为父母做了多少，你可以一无所知，但是你的父母养你是不容易的，你可以不动社会的<a href=\"http://www.jj59.com/zti/renjian/\" class=\"keywordlink\">人间</a>冷暖，你可以不知道真情和假意，但是你必须不能用害人的办法去伤害自己，很多事要懂得分析，很多话要懂得驾驭，不是每个人待你都是善意的，要学会用心去听，去接受别人的劝导。<br>　　<br>　　不要高估任何人，不要小瞧任何人，你的冷眼旁观，也许就是别人下一次的不言不语，看着别人受穷很容易，等着自己受穷更容易，学会躲避不容易，学会隐藏自己的本事不容易，要知道，世界是相对的，自己的能力不能转变，自己的本事不能呈现，一个劲的不去改变，那就别想着赚钱了，那就别想着娶一个好老婆了。<br>　　<br>　　有些事只能让我们想象而已，有些话只能让我们说说而已，在不懂的世界，我们说出的每一句话，都会引来很多的非议，在懂得的世界，我们说出的每一句话，都是在为自己的思维找频率，要想知道自己如何改变，不是听别人说了多少，而是猜测多少别人没说的，毕竟自己的改变源于猜测，不要盲目的下注，输的时候来的很快，也许一辈子都不会赢。<br>　　<br>　　每个人都有自己的选择，每个人都有自己的本能，但是不是每个人都会显示优点，很多人显示的是缺点，很多人展示的是别人的复制，每一次的复制，每一次的转变，不是别人看不出来，不是自己的能力不能超越，而很多时间是自己的思维不会架构自己的内心世界，在很多时候，我们的每一个决定都是限时的，有时候一个停顿，都会让别人对自己开始判定。<br>　　<br>　　在我们需要拒绝的时候，别人也许会承诺自己，在我们需要金钱的时候，也许别人未必答应自己，想想吧，别人也是不容易的，自己也是不容易的，很多话有时候没必要说，很多事没必要跟别人说，有时候必须忍一段时间，有时候必须躲一段时间，才能看出自己的本能，看出别人的真心，请在没钱的时候，知道谁是朋友，请在富有的之前，知道自己必须躲避什么人。<br>　　<br>　　高看别人很容易，但是需要自己有修养，低看别人很容易，只要冷眼旁观，不管不问，很多事的过去，自己的否定出现，每一次的判定都会出现不同的套路，让别人看自己，有时候别人说自己没本事，有时候别人说自己没有金钱，但是世界是相对的，没有钱，没有时间，没有朋友，别人说的都是对的，因为自己的呈现是贫穷和无助。<br>　　<br>　　把握每一个时间，看穿别人，因为这个世界很现实，不要等到没钱的时候再去找别人帮助，不要等到没能力的时候再去问，提前准备，才能赢得更好的自己，提前准备，才能认识真诚的自己，不要太虚伪哦，不要等着有钱，不要用等着有钱的方式来说自己多么伟大，没必要，别人的眼睛不是看不见的，不要总是说没有朋友，你不去准备自己，别人拿什么和你交际。<br>　　<br>　　很多人怕穷人，对啊，很多人怕富人，对啊，因为穷人可以用穷来向你借钱，富人可以用资金不够周旋来找你借钱，有时候自己还没有对别人付出，就对别人伸手借钱，有时候自己还没有存钱，就想拿着银行卡取钱，这样只是想想而已，没必要再说自己多么多么的无能为力，只是自己放弃了太多的时间，无法组织团队，无法构建自己的朋友圈。<br>　　<br>　　你可以把钱借给富人，那是因为你想让别人在你穷的时候帮你，这并不算什么道德，你可以在穷人吃不上饭的时候借给他钱，这才是自己的修养，花钱有两种方式，一种是，别人没钱没车，你还能帮助别人，第二种，别人有钱有车，你还借钱给他，请你记住，你花钱，有时候是害别人，有时候是帮助自己，选错了，看错了，还是为了满足自己的一句义气，那就看你值得，还是灵魂值得了。<br>　　<br>　　总有一些人看不起你，总有一部分人被你不搭理，这个社会是相对的，你有钱的时候，也许你看不清很多，你没钱的时候，也许你抱怨太多，但是如果你再不努力，你的未来更是抱怨，你的现在，更是麻烦，当你一无所有的时候再说交朋友，那就晚了，当你富有的时候再说找个好兄弟，也许真的难了，穷的怕你借钱，富的怕你伸手要钱。<br>　　<br>　　你的富有只是一部分，你的能力只是一部分，千万对得起穷人，不要奢求富人的太多，别人走的路比你看的人多，别人说的话比你听的<a href=\"http://www.jj59.com\" class=\"keywordlink\">故事</a>还多，你有时候的一个动作，别人都能了如指掌，有时候你的一句话，别人都能看透一个人，所以，穷人躲着很多人走，富人也是躲着很多人走，而中间的很多人，很多人，被这两种人看透。<br>　　<br>　　你有钱，穷人不会巴结你，富人不会讨好你，你有车，别人的老婆不会讨好你，别人的房子未必卖给你，你可以选择赚钱去换，但是我告诉你，世界上能花钱买的都是不够昂贵的，空气是属于每一个人的，春夏秋冬是属于每一个人的，也许五百年后的小孩能看到晴天，但是五百年后的你已经不知道你的车在那里。<br>　　<br>　　懂得别人需要知识，看透自己的人很多，但是能告诉自己如何改变的人会很少，你可以做出一个不可能的决定，你也可以做出一个否定的表达，但是你<a href=\"http://www.jj59.com/zti/shenghuo/\" class=\"keywordlink\">生活</a>的每一种方式，并不代表很多人都会看好你，因为如果你是穷人，你说话，别人都感觉很假，如果你是富人，你说话别人只是微微一笑，穷人不知道穷，富人不知道富的世界，你还是你，只是表达让更多人做了对你的判断。<br>　　<br>　　不要感觉生活不需要太多，当你没有修养的去犯错，那么你的价值未必还能出现，不要感觉金钱可以带给你太多，你所谓的物欲纵横，也许只是别人钓鱼的时候说说而已，不要看重太多，别人总是别人，说你是应该的，等你是应该的，但是算计你，那是因为你有的太多，记住，当你有的时候，也许身边伸手要钱的人会慢慢的来，当你没有的时候，身边的朋友已经开始慢慢的走开。<br>　　<br>　　你每一天的改变，别人都开始走远，你每一天的改变，朋友都开始更新，要知道，这个世界的人，你走近一个圈子，必然躲避了很多人，你绕开一个村庄，必然看透了一点点，不要总是用一点点来衡量一个人，或者是衡量全世界，因为你的能力只是有限的，如果你的思维无限，你就没必要衡量，判定。<br>　　<br>　　该说话的时候一定要说，不说的话，后悔一辈子，该走的时候要走，不走的话丢失的更多，该留的时候一定要留，不留的话，失去的一辈子看不见，珍惜吧，珍惜吧，好人不多，毕竟帮你的人不多，看见你的人也不多，你有你的尊严，我有我的方式，不同的世界，不同的心灵，你可以为我买衣服，我也可以为了怕你而躲你。<br>　　<br>　　掌握自己，还是害怕别人，很多时候不是自己说了算，有时候朋友提醒，却把自己给害了，有时候朋友不提醒，却让自己感觉愧疚，世界是相对的，人心是不一的，有时候你借给别人钱，别人还说你笨呢，有时候你不借给别人钱，别人还说你是个坏人呢，把钱给需要的人，而不是用敷衍和欺骗拿着钱去找一份麻烦，不安静。<br>　　<br>　　格局是一种态度，需要休养来匹配，<a href=\"http://www.jj59.com/zheliwenzhang/\" class=\"keywordlink\">人生</a>是一种态度，需要思维来架构，不要总是用别人的话语来规划自己，不要总是用自己的能力来锁住自己，很多事，顺其自然，很多话，适合沉默，该说的时候不要错过，该等的时候不要前进，适合则可，不适合，立刻离开，学习读书，学习改变自己，还得学会改变自己的思维。<br>　　<br>　　你也许很想赚钱，但是想赚钱的人多了，也许你很想风光，但是想风光的人多了，风光的背后不是肮脏就是沧桑，对于一个刚开始的自己，学会匹配自己的思维频率，学会驾驭自己的本能教育，善待每一种解释，善待每一种分析，绘画思维的敏捷，造就不同的领域，学习每一个善待的本能，用最快的速度解决战场，不仅需要昨天的<a href=\"http://www.jj59.com/\" class=\"keywordlink\">阅读</a>，还得拥有揣测和判定的能力。<br>　　<br>　　不是每个人都是天才，不是每个人都是富二代，但是每个人都可以去用奋斗改变自己的命运，不要在该勤快的时候懒，不要在黎明的时候学会偷懒，生命没有长短之说，但是有付出和丢弃的时间，你耽误的时间太多，你就会忘记自己，你错过的学习太多，你就放弃了未来，很多话，很多真情，不是别人不给你，而是你没有准备，你付出的太少，太少。<br>　　<br>　　有时候你抓住了机会，只是看一下，没有金钱投资，有时候你看到了命运，只是说说而已，有时候其实我们权衡自己的说话和听力，却忘记了今天做什么，明天还得要什么，记住，切记，不要因为昨天的放弃，而耽误今天的付出，可以付出浪费生命，但是不要付出忘记生命，每一天的存活都是有价值的，你可以不要尊严的活着，并不代表别人接近你也会不向你借钱。<br>　　<br>　　你是你自己的晴天，你是你自己的蓝图，命运在别人的选择里，但是付出在自己的手中，你每一次的选择，都决定了你的朋友圈，你每一次的表白，都代表了很多人的拒绝和不解释，不要因为耽误而放弃表白自己，不要因为没钱而放弃学习，不要因为没有资本而耽误最后的阳光，适合则可，不适合，速度离开。<br></p>', '7');

-- ----------------------------
-- Table structure for `blog_article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article_tag`;
CREATE TABLE `blog_article_tag` (
  `article_aid` int(10) unsigned NOT NULL DEFAULT '0',
  `tag_tid` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `fk_article_tag_article1_idx` (`article_aid`),
  KEY `fk_article_tag_tag1_idx` (`tag_tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章标签中间表';

-- ----------------------------
-- Records of blog_article_tag
-- ----------------------------
INSERT INTO `blog_article_tag` VALUES ('1', '2');
INSERT INTO `blog_article_tag` VALUES ('2', '2');
INSERT INTO `blog_article_tag` VALUES ('3', '6');
INSERT INTO `blog_article_tag` VALUES ('4', '7');
INSERT INTO `blog_article_tag` VALUES ('5', '7');
INSERT INTO `blog_article_tag` VALUES ('5', '5');
INSERT INTO `blog_article_tag` VALUES ('1', '1');
INSERT INTO `blog_article_tag` VALUES ('6', '5');
INSERT INTO `blog_article_tag` VALUES ('6', '4');
INSERT INTO `blog_article_tag` VALUES ('6', '3');
INSERT INTO `blog_article_tag` VALUES ('7', '1');
INSERT INTO `blog_article_tag` VALUES ('7', '2');

-- ----------------------------
-- Table structure for `blog_category`
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `cid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cname` char(20) NOT NULL DEFAULT '' COMMENT '分类名称',
  `ctitle` varchar(120) NOT NULL DEFAULT '' COMMENT '分类的title,作so',
  `cdes` varchar(200) NOT NULL DEFAULT '' COMMENT '分类的描述,做seo',
  `pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '父级pid',
  `ckeywords` varchar(120) NOT NULL DEFAULT '' COMMENT '分类关键字',
  `csort` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类排序',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('8', '抒情文章', '抒情文章', '抒情文章', '7', '抒情文章', '1');
INSERT INTO `blog_category` VALUES ('2', '关于我', '关于我', '这是对我自己的描述', '0', '关于我', '2');
INSERT INTO `blog_category` VALUES ('3', '日志', '日志', '伤感日志', '4', '日志', '3');
INSERT INTO `blog_category` VALUES ('4', '美文', '美文', '这是好的文章', '0', '美文', '19');
INSERT INTO `blog_category` VALUES ('5', '伤感散文', '伤感散文', '这是伤感散文', '4', '伤感，散文', '12');
INSERT INTO `blog_category` VALUES ('6', '伤感文章', '伤感文章', '这是伤感文章', '4', '伤感文章', '123');
INSERT INTO `blog_category` VALUES ('7', '抒情散文', '抒情散文', '抒情散文', '4', '抒情散文', '12');
INSERT INTO `blog_category` VALUES ('11', '测试', '测试', '这是分类的描述', '0', '测试', '1');
INSERT INTO `blog_category` VALUES ('13', '--测试', '--测试', '这是分类的描述', '11', '--测试', '12');

-- ----------------------------
-- Table structure for `blog_comment`
-- ----------------------------
DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE `blog_comment` (
  `coid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '评论内容',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论时间',
  `article_aid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`coid`),
  KEY `fk_comment_article1_idx` (`article_aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章评论表';

-- ----------------------------
-- Records of blog_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_core_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `blog_core_attachment`;
CREATE TABLE `blog_core_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '会员id',
  `siteid` int(11) NOT NULL COMMENT '站点编号',
  `name` varchar(80) NOT NULL,
  `filename` varchar(300) NOT NULL COMMENT '文件名',
  `path` varchar(300) NOT NULL COMMENT '相对路径',
  `extension` varchar(10) NOT NULL DEFAULT '' COMMENT '类型',
  `createtime` int(10) NOT NULL COMMENT '上传时间',
  `size` mediumint(9) NOT NULL COMMENT '文件大小',
  `is_member` tinyint(1) NOT NULL COMMENT '1 前台 2 后台',
  `data` varchar(100) NOT NULL DEFAULT '' COMMENT '辅助信息',
  `hash` char(50) NOT NULL DEFAULT '' COMMENT '标识用于区分资源',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `data` (`data`),
  KEY `extension` (`extension`),
  KEY `hash` (`hash`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='附件';

-- ----------------------------
-- Records of blog_core_attachment
-- ----------------------------
INSERT INTO `blog_core_attachment` VALUES ('1', '0', '0', '294527', '83191473686706', 'attachment/2016/09/12/83191473686706.jpg', 'jpg', '1473686706', '201793', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('2', '0', '0', '1', '46961473687107', 'attachment/2016/09/12/46961473687107.jpg', 'jpg', '1473687107', '4832', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('3', '0', '0', '14I3401P-RT', '28991473687390', 'attachment/2016/09/12/28991473687390.jpg', 'jpg', '1473687390', '16962', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('4', '0', '0', '14I5V941-5321', '101473687916', 'attachment/2016/09/12/101473687916.jpg', 'jpg', '1473687916', '12405', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('5', '0', '0', '14631155J-4321', '77801473688064', 'attachment/2016/09/12/77801473688064.jpg', 'jpg', '1473688064', '11087', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('6', '0', '0', 'a85973b7e8d151108aee2deb83c18f97', '90791473688151', 'attachment/2016/09/12/90791473688151.jpg', 'jpg', '1473688151', '7882', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('7', '0', '0', 'logo', '61561473688467', 'attachment/2016/09/12/61561473688467.jpg', 'jpg', '1473688467', '6792', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('8', '0', '0', 'logo-201305', '4971473688488', 'attachment/2016/09/12/4971473688488.png', 'png', '1473688488', '5109', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('9', '0', '0', 'logo', '87511473688600', 'attachment/2016/09/12/87511473688600.png', 'png', '1473688600', '16434', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('10', '0', '0', '1', '17541473689535', 'attachment/2016/09/12/17541473689535.png', 'png', '1473689535', '1456053', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('11', '0', '0', '1', '88741473762635', 'attachment/2016/09/13/88741473762635.png', 'png', '1473762635', '1456053', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('12', '0', '0', '14I5M0A-3923', '85041473777488', 'attachment/2016/09/13/85041473777488.jpg', 'jpg', '1473777488', '11930', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('13', '0', '0', '88741473762635', '8231473833115', 'attachment/2016/09/14/8231473833115.jpg', 'jpg', '1473833115', '67170', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('14', '0', '0', '9dadb3208e9f9f90c48e408492e73653', '72011473934882', 'attachment/2016/09/15/72011473934882.png', 'png', '1473934882', '74207', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('15', '0', '0', '8231473833115', '96301474158598', 'attachment/2016/09/18/96301474158598.jpg', 'jpg', '1474158598', '67144', '0', '', '1');
INSERT INTO `blog_core_attachment` VALUES ('16', '0', '0', 'banner', '26261477484166', 'attachment/2016/10/26/26261477484166.png', 'png', '1477484166', '1502264', '0', '', '1');

-- ----------------------------
-- Table structure for `blog_link`
-- ----------------------------
DROP TABLE IF EXISTS `blog_link`;
CREATE TABLE `blog_link` (
  `lid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lname` char(40) NOT NULL DEFAULT '' COMMENT '链接名称',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `logo` varchar(120) NOT NULL DEFAULT '' COMMENT 'logo',
  `url` char(150) NOT NULL DEFAULT '' COMMENT '地址',
  `sort` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='友情链接表';

-- ----------------------------
-- Records of blog_link
-- ----------------------------
INSERT INTO `blog_link` VALUES ('1', '杨青个人博客', '1473688474', 'attachment/2016/09/12/61561473688467.jpg', 'http://www.yangqq.com', '1');
INSERT INTO `blog_link` VALUES ('2', '京东', '1473688496', 'attachment/2016/09/12/4971473688488.png', 'http://www.jd.com', '2');
INSERT INTO `blog_link` VALUES ('3', '后盾网', '1473688603', 'attachment/2016/09/12/87511473688600.png', 'http://www.houdunwang.com', '123');

-- ----------------------------
-- Table structure for `blog_tag`
-- ----------------------------
DROP TABLE IF EXISTS `blog_tag`;
CREATE TABLE `blog_tag` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tname` char(25) NOT NULL DEFAULT '' COMMENT '标签名称',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='标签表';

-- ----------------------------
-- Records of blog_tag
-- ----------------------------
INSERT INTO `blog_tag` VALUES ('1', '伤感日志');
INSERT INTO `blog_tag` VALUES ('2', '伤感散文');
INSERT INTO `blog_tag` VALUES ('3', '经典文章');
INSERT INTO `blog_tag` VALUES ('4', '情感文章');
INSERT INTO `blog_tag` VALUES ('5', '原创文章');
INSERT INTO `blog_tag` VALUES ('6', '伤感文章');
INSERT INTO `blog_tag` VALUES ('7', '心情文章');
INSERT INTO `blog_tag` VALUES ('13', '测试');
INSERT INTO `blog_tag` VALUES ('15', '1232');

-- ----------------------------
-- Table structure for `blog_user`
-- ----------------------------
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(100) NOT NULL DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of blog_user
-- ----------------------------
INSERT INTO `blog_user` VALUES ('1', 'admin', 'YHGSbPoSoJzTM8wg6oWCQ6aELaDNjcby9X0PCMCPVC8=');
INSERT INTO `blog_user` VALUES ('2', 'admin888', '7fef6171469e80d32c0559f88b377245');

-- ----------------------------
-- Table structure for `blog_webset`
-- ----------------------------
DROP TABLE IF EXISTS `blog_webset`;
CREATE TABLE `blog_webset` (
  `wid` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(15) NOT NULL DEFAULT '' COMMENT '配置项名称',
  `value` varchar(70) NOT NULL DEFAULT '' COMMENT '配置值',
  `title` varchar(45) NOT NULL DEFAULT '' COMMENT '配置项标题',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='站点配置';

-- ----------------------------
-- Records of blog_webset
-- ----------------------------
INSERT INTO `blog_webset` VALUES ('1', 'webname', '如影随形2', '网站名称', '网站名称');
INSERT INTO `blog_webset` VALUES ('2', 'adminemail', '2218006427@qq.com', '站长邮箱', '站长邮箱');
INSERT INTO `blog_webset` VALUES ('3', 'copy', '<p> Design by <a href=\"www.baidu.com\">DanceSmile</a></p><p>蜀ICP备110023', '版权信息', '版权信息');

-- ----------------------------
-- Table structure for `tp3_webconfig`
-- ----------------------------
DROP TABLE IF EXISTS `tp3_webconfig`;
CREATE TABLE `tp3_webconfig` (
  `id` smallint(1) NOT NULL AUTO_INCREMENT,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp3_webconfig
-- ----------------------------
INSERT INTO `tp3_webconfig` VALUES ('1', '{\"webname\":\"微信\",\"icp\":\"京ICP21389089\",\"tel\":\"98086005235\"}');

-- ----------------------------
-- Table structure for `tp3_wxnumber`
-- ----------------------------
DROP TABLE IF EXISTS `tp3_wxnumber`;
CREATE TABLE `tp3_wxnumber` (
  `id` smallint(1) NOT NULL AUTO_INCREMENT,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp3_wxnumber
-- ----------------------------
INSERT INTO `tp3_wxnumber` VALUES ('1', '{\"token\":\"a\",\"appid\":\"1313\",\"appsecret\":\"131\"}');

-- ----------------------------
-- Table structure for `vivo_about_commodity`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_about_commodity`;
CREATE TABLE `vivo_about_commodity` (
  `about_commodity_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_commodity_samll_album` varchar(300) NOT NULL DEFAULT ' ' COMMENT '这是小图图册',
  `about_commodity_during_album` varchar(300) NOT NULL DEFAULT '' COMMENT '这是中图相册',
  `about_commodity_big_album` varchar(300) NOT NULL DEFAULT '' COMMENT '这是大图图册',
  `about_commodity_about` text COMMENT '这是商品详细介绍',
  `about_commodity_afterMarket` text COMMENT '这是商品售后',
  `about_commodity_commodity_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`about_commodity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='这是商品详细';

-- ----------------------------
-- Records of vivo_about_commodity
-- ----------------------------
INSERT INTO `vivo_about_commodity` VALUES ('13', '', '', '', '<p>123</p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '13');
INSERT INTO `vivo_about_commodity` VALUES ('12', '', '', '', '<p>123123</p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '12');
INSERT INTO `vivo_about_commodity` VALUES ('21', 'commodityImg/manyImg/samll/small_97821475996220.png|commodityImg/manyImg/samll/small_75811475996221.png|commodityImg/manyImg/samll/small_79301475996221.png|commodityImg/manyImg/samll/small_4231475996221.png', 'commodityImg/manyImg/medium/medium_97821475996220.png|commodityImg/manyImg/medium/medium_75811475996221.png|commodityImg/manyImg/medium/medium_79301475996221.png|commodityImg/manyImg/medium/medium_4231475996221.png', 'commodityImg/manyImg/big/big_97821475996220.png|commodityImg/manyImg/big/big_75811475996221.png|commodityImg/manyImg/big/big_79301475996221.png|commodityImg/manyImg/big/big_4231475996221.png', '<p><img src=\"./commodityImg/img/20161009/1475996302114804.jpg\" style=\"\" title=\"1475996302114804.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302117928.jpg\" style=\"\" title=\"1475996302117928.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302130863.jpg\" style=\"\" title=\"1475996302130863.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302109214.jpg\" style=\"\" title=\"1475996302109214.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302114851.jpg\" style=\"\" title=\"1475996302114851.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302542888.jpg\" style=\"\" title=\"1475996302542888.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302120906.jpg\" style=\"\" title=\"1475996302120906.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475996302319726.jpg\" style=\"\" title=\"1475996302319726.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '21');
INSERT INTO `vivo_about_commodity` VALUES ('8', '', '', '', '<p>啊实打实的111</p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '8');
INSERT INTO `vivo_about_commodity` VALUES ('14', '', '', '', '<p>13213</p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '14');
INSERT INTO `vivo_about_commodity` VALUES ('22', 'commodityImg/manyImg/samll/small_34731475999332.png|commodityImg/manyImg/samll/small_7961475999333.png|commodityImg/manyImg/samll/small_65081475999333.png|commodityImg/manyImg/samll/small_67281475999333.png', 'commodityImg/manyImg/medium/medium_34731475999332.png|commodityImg/manyImg/medium/medium_7961475999333.png|commodityImg/manyImg/medium/medium_65081475999333.png|commodityImg/manyImg/medium/medium_67281475999333.png', 'commodityImg/manyImg/big/big_34731475999332.png|commodityImg/manyImg/big/big_7961475999333.png|commodityImg/manyImg/big/big_65081475999333.png|commodityImg/manyImg/big/big_67281475999333.png', '<p><img src=\"./commodityImg/img/20161009/1475999343108444.jpg\" style=\"\" title=\"1475999343108444.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999343124305.jpg\" style=\"\" title=\"1475999343124305.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999344110165.jpg\" style=\"\" title=\"1475999344110165.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999344582779.jpg\" style=\"\" title=\"1475999344582779.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999344280997.jpg\" style=\"\" title=\"1475999344280997.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999344580283.jpg\" style=\"\" title=\"1475999344580283.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999344696641.jpg\" style=\"\" title=\"1475999344696641.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1475999344128144.jpg\" style=\"\" title=\"1475999344128144.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '22');
INSERT INTO `vivo_about_commodity` VALUES ('23', 'commodityImg/manyImg/samll/small_44301476000014.png|commodityImg/manyImg/samll/small_40691476000015.png|commodityImg/manyImg/samll/small_14471476000015.png|commodityImg/manyImg/samll/small_81231476000015.png', 'commodityImg/manyImg/medium/medium_44301476000014.png|commodityImg/manyImg/medium/medium_40691476000015.png|commodityImg/manyImg/medium/medium_14471476000015.png|commodityImg/manyImg/medium/medium_81231476000015.png', 'commodityImg/manyImg/big/big_44301476000014.png|commodityImg/manyImg/big/big_40691476000015.png|commodityImg/manyImg/big/big_14471476000015.png|commodityImg/manyImg/big/big_81231476000015.png', '<p><img src=\"./commodityImg/img/20161009/1476000025139900.jpg\" style=\"\" title=\"1476000025139900.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026210210.jpg\" style=\"\" title=\"1476000026210210.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026286634.jpg\" style=\"\" title=\"1476000026286634.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026755078.jpg\" style=\"\" title=\"1476000026755078.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026436299.jpg\" style=\"\" title=\"1476000026436299.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026133355.jpg\" style=\"\" title=\"1476000026133355.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026210038.jpg\" style=\"\" title=\"1476000026210038.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000026897858.jpg\" style=\"\" title=\"1476000026897858.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '23');
INSERT INTO `vivo_about_commodity` VALUES ('24', 'commodityImg/manyImg/samll/small_56141476000223.png|commodityImg/manyImg/samll/small_861476000223.png|commodityImg/manyImg/samll/small_37051476000223.png', 'commodityImg/manyImg/medium/medium_56141476000223.png|commodityImg/manyImg/medium/medium_861476000223.png|commodityImg/manyImg/medium/medium_37051476000223.png', 'commodityImg/manyImg/big/big_56141476000223.png|commodityImg/manyImg/big/big_861476000223.png|commodityImg/manyImg/big/big_37051476000223.png', '<p><img src=\"./commodityImg/img/20161009/1476000239842605.jpg\" style=\"\" title=\"1476000239842605.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000239438020.jpg\" style=\"\" title=\"1476000239438020.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000239805038.jpg\" style=\"\" title=\"1476000239805038.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000239261030.jpg\" style=\"\" title=\"1476000239261030.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000239379669.jpg\" style=\"\" title=\"1476000239379669.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000239567029.jpg\" style=\"\" title=\"1476000239567029.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '24');
INSERT INTO `vivo_about_commodity` VALUES ('25', 'commodityImg/manyImg/samll/small_45891476000332.png', 'commodityImg/manyImg/medium/medium_45891476000332.png', 'commodityImg/manyImg/big/big_45891476000332.png', '<p><img src=\"./commodityImg/img/20161009/1476000342859559.jpg\" style=\"\" title=\"1476000342859559.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000342852244.jpg\" style=\"\" title=\"1476000342852244.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000342873588.jpg\" style=\"\" title=\"1476000342873588.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000342686356.jpg\" style=\"\" title=\"1476000342686356.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000342122360.jpg\" style=\"\" title=\"1476000342122360.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000342745095.jpg\" style=\"\" title=\"1476000342745095.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '25');
INSERT INTO `vivo_about_commodity` VALUES ('36', 'commodityImg/manyImg/samll/small_29381476873190.png|commodityImg/manyImg/samll/small_151476873190.png|commodityImg/manyImg/samll/small_89621476873190.png|commodityImg/manyImg/samll/small_81331476873190.png', 'commodityImg/manyImg/medium/medium_29381476873190.png|commodityImg/manyImg/medium/medium_151476873190.png|commodityImg/manyImg/medium/medium_89621476873190.png|commodityImg/manyImg/medium/medium_81331476873190.png', 'commodityImg/manyImg/big/big_29381476873190.png|commodityImg/manyImg/big/big_151476873190.png|commodityImg/manyImg/big/big_89621476873190.png|commodityImg/manyImg/big/big_81331476873190.png', '<p><img src=\"./commodityImg/img/20161019/1476873197812870.jpg\" style=\"\" title=\"1476873197812870.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873197131397.jpg\" style=\"\" title=\"1476873197131397.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873197371020.jpg\" style=\"\" title=\"1476873197371020.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873197140946.jpg\" style=\"\" title=\"1476873197140946.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198207757.jpg\" style=\"\" title=\"1476873198207757.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198623659.jpg\" style=\"\" title=\"1476873198623659.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198404842.jpg\" style=\"\" title=\"1476873198404842.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198470681.jpg\" style=\"\" title=\"1476873198470681.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198454329.jpg\" style=\"\" title=\"1476873198454329.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198714800.jpg\" style=\"\" title=\"1476873198714800.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873198860635.jpg\" style=\"\" title=\"1476873198860635.jpg\"/></p><p><br/></p>', '<p>12312313</p>', '36');
INSERT INTO `vivo_about_commodity` VALUES ('26', 'commodityImg/manyImg/samll/small_40141476000468.png|commodityImg/manyImg/samll/small_23401476000469.png|commodityImg/manyImg/samll/small_62041476000469.png', 'commodityImg/manyImg/medium/medium_40141476000468.png|commodityImg/manyImg/medium/medium_23401476000469.png|commodityImg/manyImg/medium/medium_62041476000469.png', 'commodityImg/manyImg/big/big_40141476000468.png|commodityImg/manyImg/big/big_23401476000469.png|commodityImg/manyImg/big/big_62041476000469.png', '<p><img src=\"./commodityImg/img/20161009/1476000473193212.jpg\" title=\"1476000473193212.jpg\" alt=\"1.jpg\"/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '26');
INSERT INTO `vivo_about_commodity` VALUES ('27', 'commodityImg/manyImg/samll/small_3361476000700.png', 'commodityImg/manyImg/medium/medium_3361476000700.png', 'commodityImg/manyImg/big/big_3361476000700.png', '', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '27');
INSERT INTO `vivo_about_commodity` VALUES ('28', 'commodityImg/manyImg/samll/small_10571476000855.png|commodityImg/manyImg/samll/small_90781476000855.png|commodityImg/manyImg/samll/small_9861476000855.png|commodityImg/manyImg/samll/small_88231476000856.png', 'commodityImg/manyImg/medium/medium_10571476000855.png|commodityImg/manyImg/medium/medium_90781476000855.png|commodityImg/manyImg/medium/medium_9861476000855.png|commodityImg/manyImg/medium/medium_88231476000856.png', 'commodityImg/manyImg/big/big_10571476000855.png|commodityImg/manyImg/big/big_90781476000855.png|commodityImg/manyImg/big/big_9861476000855.png|commodityImg/manyImg/big/big_88231476000856.png', '<p><img src=\"./commodityImg/img/20161009/1476000863991581.jpg\" style=\"\" title=\"1476000863991581.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000863318865.jpg\" style=\"\" title=\"1476000863318865.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000863108341.jpg\" style=\"\" title=\"1476000863108341.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000863107407.jpg\" style=\"\" title=\"1476000863107407.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000863131087.jpg\" style=\"\" title=\"1476000863131087.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476000863878235.jpg\" style=\"\" title=\"1476000863878235.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '28');
INSERT INTO `vivo_about_commodity` VALUES ('33', 'commodityImg/manyImg/samll/small_20951476708613.png|commodityImg/manyImg/samll/small_15871476708613.png|commodityImg/manyImg/samll/small_29981476708614.png|commodityImg/manyImg/samll/small_72341476708614.png', 'commodityImg/manyImg/medium/medium_20951476708613.png|commodityImg/manyImg/medium/medium_15871476708613.png|commodityImg/manyImg/medium/medium_29981476708614.png|commodityImg/manyImg/medium/medium_72341476708614.png', 'commodityImg/manyImg/big/big_20951476708613.png|commodityImg/manyImg/big/big_15871476708613.png|commodityImg/manyImg/big/big_29981476708614.png|commodityImg/manyImg/big/big_72341476708614.png', '<p></p><p><img src=\"./commodityImg/img/20161017/1476708630707442.jpg\" style=\"\" title=\"1476708630707442.jpg\"/></p><p><img src=\"./commodityImg/img/20161017/1476708630802112.jpg\" style=\"\" title=\"1476708630802112.jpg\"/></p><p><img src=\"./commodityImg/img/20161017/1476708630109085.jpg\" style=\"\" title=\"1476708630109085.jpg\"/></p><p><img src=\"./commodityImg/img/20161017/1476708630537466.jpg\" style=\"\" title=\"1476708630537466.jpg\"/></p><p><img src=\"./commodityImg/img/20161017/1476708630880774.jpg\" style=\"\" title=\"1476708630880774.jpg\"/></p><p><img src=\"./commodityImg/img/20161017/1476708630457944.jpg\" style=\"\" title=\"1476708630457944.jpg\"/></p><p><br/></p>', '<p>这是售后服务</p>', '33');
INSERT INTO `vivo_about_commodity` VALUES ('34', 'commodityImg/manyImg/samll/small_52341476872237.png|commodityImg/manyImg/samll/small_18031476872237.png|commodityImg/manyImg/samll/small_96061476872238.png|commodityImg/manyImg/samll/small_58141476872238.png', 'commodityImg/manyImg/medium/medium_52341476872237.png|commodityImg/manyImg/medium/medium_18031476872237.png|commodityImg/manyImg/medium/medium_96061476872238.png|commodityImg/manyImg/medium/medium_58141476872238.png', 'commodityImg/manyImg/big/big_52341476872237.png|commodityImg/manyImg/big/big_18031476872237.png|commodityImg/manyImg/big/big_96061476872238.png|commodityImg/manyImg/big/big_58141476872238.png', '<p><img src=\"./commodityImg/img/20161019/1476872246140993.jpg\" style=\"\" title=\"1476872246140993.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247785028.jpg\" style=\"\" title=\"1476872247785028.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247150869.jpg\" style=\"\" title=\"1476872247150869.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247325277.jpg\" style=\"\" title=\"1476872247325277.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247115518.jpg\" style=\"\" title=\"1476872247115518.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247798669.jpg\" style=\"\" title=\"1476872247798669.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247341198.jpg\" style=\"\" title=\"1476872247341198.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247914253.jpg\" style=\"\" title=\"1476872247914253.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247227164.jpg\" style=\"\" title=\"1476872247227164.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247122683.jpg\" style=\"\" title=\"1476872247122683.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476872247547579.jpg\" style=\"\" title=\"1476872247547579.jpg\"/></p><p><br/></p>', '<p>&lt;div class=&quot;prod-afterservice-box wrapper&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;ul class=&quot;cl&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li class=&quot;return&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;&lt;/b&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;30天无理由退换货&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。&lt;br&gt;所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/p&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li class=&quot;b1&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;&lt;/b&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;退机服务&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。&lt;br&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span&gt;退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）&lt;br&gt;收件人：vivo电商仓库&lt;br&gt;联系电话：4007161118 &lt;/span&gt;&lt;/p&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li class=&quot;b3&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;&lt;/b&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;换机服务&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。&lt;/p&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li class=&quot;b2&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;&lt;/b&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;全国联网三包服务&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：&lt;a href=&quot;/helpcenter/service-promise&quot; target=&quot;_blank&quot;&gt;http://shop.vivo.com.cn/helpcenter/service-promise&lt;/a&gt;&lt;/p&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;li class=&quot;b5&quot;&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;&lt;/b&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;vivo售后服务点查询&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：&lt;a href=&quot;http://www.vivo.com.cn/service/map.html&quot; target=&quot;_blank&quot;&gt;http://www.vivo.com.cn/service/map.html&lt;/a&gt;&lt;/p&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/ul&gt;</p><p>&nbsp; &nbsp; &lt;/div&gt;</p><p><br/></p>', '34');
INSERT INTO `vivo_about_commodity` VALUES ('29', 'commodityImg/manyImg/samll/small_74221476000979.png', 'commodityImg/manyImg/medium/medium_74221476000979.png', 'commodityImg/manyImg/big/big_74221476000979.png', null, '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '29');
INSERT INTO `vivo_about_commodity` VALUES ('30', 'commodityImg/manyImg/samll/small_6561476003077.png|commodityImg/manyImg/samll/small_64421476003077.png|commodityImg/manyImg/samll/small_25531476003078.png', 'commodityImg/manyImg/medium/medium_6561476003077.png|commodityImg/manyImg/medium/medium_64421476003077.png|commodityImg/manyImg/medium/medium_25531476003078.png', 'commodityImg/manyImg/big/big_6561476003077.png|commodityImg/manyImg/big/big_64421476003077.png|commodityImg/manyImg/big/big_25531476003078.png', '<p><img src=\"./commodityImg/img/20161009/1476003086768289.jpg\" style=\"\" title=\"1476003086768289.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003086713122.jpg\" style=\"\" title=\"1476003086713122.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003086656578.jpg\" style=\"\" title=\"1476003086656578.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003086138166.jpg\" style=\"\" title=\"1476003086138166.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003086140774.jpg\" style=\"\" title=\"1476003086140774.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003087478513.jpg\" style=\"\" title=\"1476003087478513.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '30');
INSERT INTO `vivo_about_commodity` VALUES ('35', 'commodityImg/manyImg/samll/small_10031476873057.png|commodityImg/manyImg/samll/small_42461476873057.png|commodityImg/manyImg/samll/small_13701476873057.png|commodityImg/manyImg/samll/small_23261476873057.png', 'commodityImg/manyImg/medium/medium_10031476873057.png|commodityImg/manyImg/medium/medium_42461476873057.png|commodityImg/manyImg/medium/medium_13701476873057.png|commodityImg/manyImg/medium/medium_23261476873057.png', 'commodityImg/manyImg/big/big_10031476873057.png|commodityImg/manyImg/big/big_42461476873057.png|commodityImg/manyImg/big/big_13701476873057.png|commodityImg/manyImg/big/big_23261476873057.png', '<p><img src=\"./commodityImg/img/20161019/1476873068994679.jpg\" style=\"\" title=\"1476873068994679.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068593193.jpg\" style=\"\" title=\"1476873068593193.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068504934.jpg\" style=\"\" title=\"1476873068504934.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068600336.jpg\" style=\"\" title=\"1476873068600336.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068344426.jpg\" style=\"\" title=\"1476873068344426.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068953799.jpg\" style=\"\" title=\"1476873068953799.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068896524.jpg\" style=\"\" title=\"1476873068896524.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068674781.jpg\" style=\"\" title=\"1476873068674781.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068118630.jpg\" style=\"\" title=\"1476873068118630.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873068656621.jpg\" style=\"\" title=\"1476873068656621.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873069882969.jpg\" style=\"\" title=\"1476873069882969.jpg\"/></p><p><br/></p>', '<p>12312</p>', '35');
INSERT INTO `vivo_about_commodity` VALUES ('31', 'commodityImg/manyImg/samll/small_56161476003445.png|commodityImg/manyImg/samll/small_94161476003445.png|commodityImg/manyImg/samll/small_61481476003445.png|commodityImg/manyImg/samll/small_38081476003446.png', 'commodityImg/manyImg/medium/medium_56161476003445.png|commodityImg/manyImg/medium/medium_94161476003445.png|commodityImg/manyImg/medium/medium_61481476003445.png|commodityImg/manyImg/medium/medium_38081476003446.png', 'commodityImg/manyImg/big/big_56161476003445.png|commodityImg/manyImg/big/big_94161476003445.png|commodityImg/manyImg/big/big_61481476003445.png|commodityImg/manyImg/big/big_38081476003446.png', '<p><img src=\"./commodityImg/img/20161009/1476003457189985.jpg\" style=\"\" title=\"1476003457189985.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003457126702.jpg\" style=\"\" title=\"1476003457126702.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003457139702.jpg\" style=\"\" title=\"1476003457139702.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003458927722.jpg\" style=\"\" title=\"1476003458927722.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003458606446.jpg\" style=\"\" title=\"1476003458606446.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003458137508.jpg\" style=\"\" title=\"1476003458137508.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003458475156.jpg\" style=\"\" title=\"1476003458475156.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476003458654771.jpg\" style=\"\" title=\"1476003458654771.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '31');
INSERT INTO `vivo_about_commodity` VALUES ('32', 'commodityImg/manyImg/samll/small_49671476004154.png|commodityImg/manyImg/samll/small_85501476004155.png|commodityImg/manyImg/samll/small_95171476004155.png|commodityImg/manyImg/samll/small_41911476004156.png', 'commodityImg/manyImg/medium/medium_49671476004154.png|commodityImg/manyImg/medium/medium_85501476004155.png|commodityImg/manyImg/medium/medium_95171476004155.png|commodityImg/manyImg/medium/medium_41911476004156.png', 'commodityImg/manyImg/big/big_49671476004154.png|commodityImg/manyImg/big/big_85501476004155.png|commodityImg/manyImg/big/big_95171476004155.png|commodityImg/manyImg/big/big_41911476004156.png', '<p><img src=\"./commodityImg/img/20161009/1476004163606274.jpg\" style=\"\" title=\"1476004163606274.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163131040.jpg\" style=\"\" title=\"1476004163131040.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163561995.jpg\" style=\"\" title=\"1476004163561995.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163446928.jpg\" style=\"\" title=\"1476004163446928.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163211329.jpg\" style=\"\" title=\"1476004163211329.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163118018.jpg\" style=\"\" title=\"1476004163118018.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163647413.jpg\" style=\"\" title=\"1476004163647413.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163565050.jpg\" style=\"\" title=\"1476004163565050.jpg\"/></p><p><img src=\"./commodityImg/img/20161009/1476004163135980.jpg\" style=\"\" title=\"1476004163135980.jpg\"/></p><p><br/></p>', '<ul class=\"cl\">\r\n            <li class=\"return\">\r\n                <b></b>\r\n                <h3>30天无理由退换货</h3>\r\n                <p>购机签收30天内，如产品出现质量问题，凭售后检测单包邮退换货；如果使用不满意，机器无人为损坏且赠品发票齐全，也可申请退换货处理，运费自付。<br>所有换货后的机器只享受行业标准签收7天内无理由退货、30天内出现质量问题包换的权益。\r\n                </p>\r\n            </li>\r\n\r\n            <li class=\"b1\">\r\n                <b></b>\r\n                <h3>退机服务</h3>\r\n                <p>属于退机的机器直接退回原购买点，即vivo官方商城，商城售后收到机器后，确认符合退机条件，即安排财务将顾客购机款退回原付款账户。<br>\r\n                    <span>退货地址：广东省东莞市长安镇沙头村东大路151号vivo电商仓库（邮编：523861）<br>收件人：vivo电商仓库<br>联系电话：4007161118 </span></p>\r\n            </li>\r\n            <li class=\"b3\">\r\n                <b></b>\r\n                <h3>换机服务</h3>\r\n                <p>为了给您提供更优质的服务，官方商城发售的手机自收货之日起30天内出现质量问题都可以联系在线客服，凭售后检测单申请退换货，运费由我们承担！ 或由您自付运费，寄回委托客服送修检测，确认后为您换机。</p>\r\n            </li>\r\n            <li class=\"b2\">\r\n                <b></b>\r\n                <h3>全国联网三包服务</h3>\r\n                <p>由于产品本身出现性能故障（见国家规定的《移动电话机商品性能故障表》）， 顾客凭有效发票和有效三包凭证按照三包规定享受三包服务：自售出之日起7日退换货，一个月内包换，一年内保修。三包细则查询：<a href=\"/helpcenter/service-promise\" target=\"_blank\">http://shop.vivo.com.cn/helpcenter/service-promise</a></p>\r\n            </li>\r\n            <li class=\"b5\">\r\n                <b></b>\r\n                <h3>vivo售后服务点查询</h3>\r\n                <p>您可以直接进入手机设置—更多设置—售后服务，查询就近的售后服务点；手机无法开机的情况下，可以在下面页面，完成查询：<a href=\"http://www.vivo.com.cn/service/map.html\" target=\"_blank\">http://www.vivo.com.cn/service/map.html</a></p>\r\n            </li>\r\n\r\n        </ul>', '32');
INSERT INTO `vivo_about_commodity` VALUES ('37', 'commodityImg/manyImg/samll/small_39331476873363.png|commodityImg/manyImg/samll/small_42251476873363.png|commodityImg/manyImg/samll/small_56951476873364.png|commodityImg/manyImg/samll/small_86541476873364.png', 'commodityImg/manyImg/medium/medium_39331476873363.png|commodityImg/manyImg/medium/medium_42251476873363.png|commodityImg/manyImg/medium/medium_56951476873364.png|commodityImg/manyImg/medium/medium_86541476873364.png', 'commodityImg/manyImg/big/big_39331476873363.png|commodityImg/manyImg/big/big_42251476873363.png|commodityImg/manyImg/big/big_56951476873364.png|commodityImg/manyImg/big/big_86541476873364.png', '<p><img src=\"./commodityImg/img/20161019/1476873375898202.jpg\" style=\"\" title=\"1476873375898202.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873375505537.jpg\" style=\"\" title=\"1476873375505537.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873375858914.jpg\" style=\"\" title=\"1476873375858914.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873375125235.jpg\" style=\"\" title=\"1476873375125235.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873375128234.jpg\" style=\"\" title=\"1476873375128234.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873376137998.jpg\" style=\"\" title=\"1476873376137998.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873376187360.jpg\" style=\"\" title=\"1476873376187360.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873376933273.jpg\" style=\"\" title=\"1476873376933273.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873376752539.jpg\" style=\"\" title=\"1476873376752539.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873376134168.jpg\" style=\"\" title=\"1476873376134168.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873376656664.jpg\" style=\"\" title=\"1476873376656664.jpg\"/></p><p><br/></p>', '<p>1231231</p>', '37');
INSERT INTO `vivo_about_commodity` VALUES ('38', 'commodityImg/manyImg/samll/small_64761476873511.png|commodityImg/manyImg/samll/small_89331476873511.png|commodityImg/manyImg/samll/small_77101476873511.png|commodityImg/manyImg/samll/small_47441476873512.png', 'commodityImg/manyImg/medium/medium_64761476873511.png|commodityImg/manyImg/medium/medium_89331476873511.png|commodityImg/manyImg/medium/medium_77101476873511.png|commodityImg/manyImg/medium/medium_47441476873512.png', 'commodityImg/manyImg/big/big_64761476873511.png|commodityImg/manyImg/big/big_89331476873511.png|commodityImg/manyImg/big/big_77101476873511.png|commodityImg/manyImg/big/big_47441476873512.png', '<p><img src=\"./commodityImg/img/20161019/1476873519113306.jpg\" style=\"\" title=\"1476873519113306.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873519847381.jpg\" style=\"\" title=\"1476873519847381.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873519113001.jpg\" style=\"\" title=\"1476873519113001.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873519140524.jpg\" style=\"\" title=\"1476873519140524.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873519300620.jpg\" style=\"\" title=\"1476873519300620.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873519475501.jpg\" style=\"\" title=\"1476873519475501.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873519239213.jpg\" style=\"\" title=\"1476873519239213.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873520835505.jpg\" style=\"\" title=\"1476873520835505.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873520942396.jpg\" style=\"\" title=\"1476873520942396.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873520226390.jpg\" style=\"\" title=\"1476873520226390.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873520521545.jpg\" style=\"\" title=\"1476873520521545.jpg\"/></p><p><br/></p>', '<p>123321</p>', '38');
INSERT INTO `vivo_about_commodity` VALUES ('39', 'commodityImg/manyImg/samll/small_68191476873749.png|commodityImg/manyImg/samll/small_58621476873749.png|commodityImg/manyImg/samll/small_42261476873749.png|commodityImg/manyImg/samll/small_97561476873750.png', 'commodityImg/manyImg/medium/medium_68191476873749.png|commodityImg/manyImg/medium/medium_58621476873749.png|commodityImg/manyImg/medium/medium_42261476873749.png|commodityImg/manyImg/medium/medium_97561476873750.png', 'commodityImg/manyImg/big/big_68191476873749.png|commodityImg/manyImg/big/big_58621476873749.png|commodityImg/manyImg/big/big_42261476873749.png|commodityImg/manyImg/big/big_97561476873750.png', '<p><img src=\"./commodityImg/img/20161019/1476873761472618.jpg\" style=\"\" title=\"1476873761472618.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761410221.jpg\" style=\"\" title=\"1476873761410221.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761818335.jpg\" style=\"\" title=\"1476873761818335.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761644228.jpg\" style=\"\" title=\"1476873761644228.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761132671.jpg\" style=\"\" title=\"1476873761132671.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761159863.jpg\" style=\"\" title=\"1476873761159863.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761186628.jpg\" style=\"\" title=\"1476873761186628.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761971872.jpg\" style=\"\" title=\"1476873761971872.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761367921.jpg\" style=\"\" title=\"1476873761367921.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761727280.jpg\" style=\"\" title=\"1476873761727280.jpg\"/></p><p><img src=\"./commodityImg/img/20161019/1476873761828146.jpg\" style=\"\" title=\"1476873761828146.jpg\"/></p><p><br/></p>', '<p>13213213</p>', '39');

-- ----------------------------
-- Table structure for `vivo_access`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_access`;
CREATE TABLE `vivo_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  KEY `role_id` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_access
-- ----------------------------
INSERT INTO `vivo_access` VALUES ('2', '5');
INSERT INTO `vivo_access` VALUES ('2', '2');
INSERT INTO `vivo_access` VALUES ('2', '3');
INSERT INTO `vivo_access` VALUES ('2', '4');
INSERT INTO `vivo_access` VALUES ('2', '1');
INSERT INTO `vivo_access` VALUES ('3', '1');
INSERT INTO `vivo_access` VALUES ('3', '2');
INSERT INTO `vivo_access` VALUES ('2', '6');
INSERT INTO `vivo_access` VALUES ('3', '4');
INSERT INTO `vivo_access` VALUES ('2', '7');
INSERT INTO `vivo_access` VALUES ('2', '8');
INSERT INTO `vivo_access` VALUES ('2', '9');
INSERT INTO `vivo_access` VALUES ('2', '10');
INSERT INTO `vivo_access` VALUES ('3', '7');
INSERT INTO `vivo_access` VALUES ('3', '8');
INSERT INTO `vivo_access` VALUES ('3', '9');
INSERT INTO `vivo_access` VALUES ('4', '1');
INSERT INTO `vivo_access` VALUES ('3', '3');
INSERT INTO `vivo_access` VALUES ('3', '10');
INSERT INTO `vivo_access` VALUES ('4', '7');
INSERT INTO `vivo_access` VALUES ('4', '8');
INSERT INTO `vivo_access` VALUES ('4', '9');
INSERT INTO `vivo_access` VALUES ('4', '10');
INSERT INTO `vivo_access` VALUES ('4', '11');
INSERT INTO `vivo_access` VALUES ('4', '12');
INSERT INTO `vivo_access` VALUES ('4', '13');
INSERT INTO `vivo_access` VALUES ('4', '14');
INSERT INTO `vivo_access` VALUES ('4', '15');
INSERT INTO `vivo_access` VALUES ('5', '1');
INSERT INTO `vivo_access` VALUES ('5', '7');
INSERT INTO `vivo_access` VALUES ('5', '8');
INSERT INTO `vivo_access` VALUES ('5', '9');
INSERT INTO `vivo_access` VALUES ('5', '10');
INSERT INTO `vivo_access` VALUES ('5', '11');
INSERT INTO `vivo_access` VALUES ('5', '12');
INSERT INTO `vivo_access` VALUES ('5', '13');
INSERT INTO `vivo_access` VALUES ('4', '16');
INSERT INTO `vivo_access` VALUES ('5', '16');

-- ----------------------------
-- Table structure for `vivo_address`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_address`;
CREATE TABLE `vivo_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '这是主键ID',
  `address_receiver` varchar(30) NOT NULL DEFAULT '''''' COMMENT '这是收货人',
  `address_area` varchar(300) NOT NULL DEFAULT '''''' COMMENT '这是收货人所在地区',
  `address_xxaddress` varchar(300) NOT NULL DEFAULT '''''' COMMENT '这是收货人详细地址',
  `address_phone` varchar(12) NOT NULL DEFAULT '''''' COMMENT '这是收货人手机号码',
  `address_fixed` varchar(12) NOT NULL DEFAULT '''''' COMMENT '这是收货人固定电话',
  `address_zipcode` varchar(12) NOT NULL DEFAULT '000000' COMMENT '这是收货人邮编',
  `address_default` int(11) NOT NULL DEFAULT '0' COMMENT '这是是否是默认地址，默认是0      0:不是   1:是',
  `address_member_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '这是所对应的购买用户的ID',
  PRIMARY KEY (`address_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_address
-- ----------------------------
INSERT INTO `vivo_address` VALUES ('8', '杨宇辉', '北京市|北京|朝阳区', '朝阳', '15033610274', '', '', '0', '1');
INSERT INTO `vivo_address` VALUES ('10', '闫霞飞', '北京市|北京|丰台区', '丰台科技园', '18731382048', '', '', '0', '1');
INSERT INTO `vivo_address` VALUES ('16', '12', '北京市|北京|朝阳区', '12', '12121212121', '', '121212', '1', '11');

-- ----------------------------
-- Table structure for `vivo_admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_admin_user`;
CREATE TABLE `vivo_admin_user` (
  `admin_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_account` varchar(100) NOT NULL DEFAULT '' COMMENT '这是管理员的账号',
  `admin_user_password` varchar(100) NOT NULL DEFAULT '',
  `admin_user_username` varchar(100) NOT NULL DEFAULT '' COMMENT '显示的名字',
  `admin_user_regTime` varchar(45) NOT NULL DEFAULT '' COMMENT '这是注册时间',
  `admin_user_sex` enum('男','保密','女') NOT NULL DEFAULT '保密',
  `admin_user_age` int(11) NOT NULL DEFAULT '20',
  `admin_user_phone` varchar(11) NOT NULL DEFAULT '131',
  `admin_user_email` varchar(45) NOT NULL DEFAULT '',
  `admin_user_qq` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='这是后台管理员列表';

-- ----------------------------
-- Records of vivo_admin_user
-- ----------------------------
INSERT INTO `vivo_admin_user` VALUES ('1', 'admin', '7fef6171469e80d32c0559f88b377245', '杨宇辉', '1474859974', '保密', '18', '15033610274', '2218006427@qq.com', '2218006427');
INSERT INTO `vivo_admin_user` VALUES ('3', 'brands', '827ccb0eea8a706c4c34a16891f84e7b', '', '1474859998', '保密', '20', '131', '', '0');
INSERT INTO `vivo_admin_user` VALUES ('4', 'brands-add', '5832b621fd61dd4a25d626782e7c35c1', '品牌添加', '1474859998', '保密', '20', '15033610274', '2218006427@qq.om', '2218006427');
INSERT INTO `vivo_admin_user` VALUES ('5', 'category', '827ccb0eea8a706c4c34a16891f84e7b', '', '1476973209', '保密', '20', '131', '', '0');
INSERT INTO `vivo_admin_user` VALUES ('6', 'category-add', '827ccb0eea8a706c4c34a16891f84e7b', '', '1476973229', '保密', '20', '131', '', '0');

-- ----------------------------
-- Table structure for `vivo_advertising`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_advertising`;
CREATE TABLE `vivo_advertising` (
  `advertising_id` int(11) NOT NULL AUTO_INCREMENT,
  `advertising_size` varchar(50) NOT NULL DEFAULT '0' COMMENT '这是宽和高',
  `advertising_sort` int(5) NOT NULL DEFAULT '0' COMMENT '这是排序',
  `advertising_url` varchar(200) NOT NULL DEFAULT '''''' COMMENT '这是跳转地址',
  `advertising_time` varchar(100) NOT NULL COMMENT '这是添加时间',
  `advertising_status` smallint(6) NOT NULL DEFAULT '0' COMMENT '0是隐藏，1是显示',
  `advertising_img` varchar(500) NOT NULL DEFAULT '''''' COMMENT '这是轮播图图片',
  PRIMARY KEY (`advertising_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_advertising
-- ----------------------------
INSERT INTO `vivo_advertising` VALUES ('2', '1920*600', '1', 'www.baidu.com', '1476793024', '0', 'resource/hdjs/home/other/banner/d7af665b2752c3adc7c5ee317f152942.jpg|resource/hdjs/home/other/banner/119e7257390d60d15deea400423c5d6e.jpg|resource/hdjs/home/other/banner/e62335534e6a191bd638cfe91c04022f.jpg');
INSERT INTO `vivo_advertising` VALUES ('3', '1920*600', '10', 'http://127.0.0.1/vivo/index.php?http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=2', '1476794533', '1', 'resource/hdjs/home/other/banner/674d3658ef08278024e9ad40bc181af7.jpg|resource/hdjs/home/other/banner/15df3e34234cb5a1d04db765745e03fc.jpg|resource/hdjs/home/other/banner/43fa6638af6f90df447d2fa49147040b.jpg');

-- ----------------------------
-- Table structure for `vivo_brands`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_brands`;
CREATE TABLE `vivo_brands` (
  `brands_id` int(11) NOT NULL AUTO_INCREMENT,
  `brands_name` varchar(145) NOT NULL DEFAULT '',
  `brands_logo` varchar(300) NOT NULL DEFAULT '',
  `brands_sort` int(11) NOT NULL DEFAULT '0',
  `brands_ifhot` int(11) NOT NULL DEFAULT '1',
  `brands_status` int(11) NOT NULL DEFAULT '1' COMMENT '1是启用，0是没有启用',
  PRIMARY KEY (`brands_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='这是商品的品牌';

-- ----------------------------
-- Records of vivo_brands
-- ----------------------------
INSERT INTO `vivo_brands` VALUES ('1', 'vivo', 'resource/public/brandsImg/2016_10_09/e5ea1112e1c743d4a273c9e702ce4c6e.jpg', '2', '1', '1');
INSERT INTO `vivo_brands` VALUES ('2', '御泥坊', 'resource/public/brandsImg/2016_10_09/40cba71d4069e4951f037892a4a662b0.jpg', '132', '1', '1');
INSERT INTO `vivo_brands` VALUES ('3', '丝塔美', 'resource/public/brandsImg/2016_10_09/901aef23dd2b8e14288ee740b48d654c.jpg', '123', '1', '1');
INSERT INTO `vivo_brands` VALUES ('4', '高夫', 'resource/public/brandsImg/2016_10_09/71456bfe3ad4546c99c518bf6e6457db.jpg', '123', '1', '1');
INSERT INTO `vivo_brands` VALUES ('5', '水密码', 'resource/public/brandsImg/2016_10_09/1ea7c450078292bbaadb5b964eb020df.png', '123', '1', '1');
INSERT INTO `vivo_brands` VALUES ('6', '魅族', 'resource/public/brandsImg/2016_10_09/2ae9bee671419c0daffddbb65c93617c.jpg', '13', '1', '1');
INSERT INTO `vivo_brands` VALUES ('7', '膜法世家', 'resource/public/brandsImg/2016_10_09/534d2daa0878c5e7f0ed3e8bf95fae24.jpg', '13', '0', '1');
INSERT INTO `vivo_brands` VALUES ('8', '美肤宝', 'resource/public/brandsImg/2016_10_09/04a7c2d79422d6fa5dc7ae3f1ab6b612.jpg', '19', '0', '1');
INSERT INTO `vivo_brands` VALUES ('9', '印象堂', 'resource/public/brandsImg/2016_10_09/5c80395e297a98b581f5c136f84b236e.jpg', '20', '0', '1');
INSERT INTO `vivo_brands` VALUES ('10', 'Apple', 'resource/public/brandsImg/2016_10_09/72c75772c736a3ed4bf58a055a55ea69.jpg', '10', '0', '1');
INSERT INTO `vivo_brands` VALUES ('11', '三星', 'resource/public/brandsImg/2016_10_09/6f9ab92dfa2eb6b43375bd7ba1ed0411.jpg', '13', '1', '1');
INSERT INTO `vivo_brands` VALUES ('12', '华为', 'resource/public/brandsImg/2016_10_09/958ae48a72e07c4c11bd7891431ae6b3.jpg', '11', '1', '1');
INSERT INTO `vivo_brands` VALUES ('13', 'oppo', 'resource/public/brandsImg/2016_10_20/f035583ee5af3f5af9c0cc9c6f0353ad.jpg', '16', '1', '1');

-- ----------------------------
-- Table structure for `vivo_category`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_category`;
CREATE TABLE `vivo_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL DEFAULT '',
  `category_pid` int(11) NOT NULL DEFAULT '0',
  `category_sort` int(11) DEFAULT NULL,
  `type_type_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `fk_category_type_idx` (`type_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='这是商品分类';

-- ----------------------------
-- Records of vivo_category
-- ----------------------------
INSERT INTO `vivo_category` VALUES ('2', '手机', '0', '11', '20');
INSERT INTO `vivo_category` VALUES ('5', 'x-shot', '2', '2', '20');
INSERT INTO `vivo_category` VALUES ('8', '上衣', '0', '11', '12');
INSERT INTO `vivo_category` VALUES ('20', '移动电源', '19', '123', '20');
INSERT INTO `vivo_category` VALUES ('12', '秋衣', '8', '123', '12');
INSERT INTO `vivo_category` VALUES ('19', '配件', '0', '131', '20');
INSERT INTO `vivo_category` VALUES ('22', '充电器', '19', '12313', '20');
INSERT INTO `vivo_category` VALUES ('21', '耳机', '19', '123', '20');
INSERT INTO `vivo_category` VALUES ('23', '数据线', '19', '123', '20');
INSERT INTO `vivo_category` VALUES ('24', '内存卡', '19', '18', '20');
INSERT INTO `vivo_category` VALUES ('25', '辅助类', '19', '18', '20');
INSERT INTO `vivo_category` VALUES ('26', '保护类', '19', '18', '20');
INSERT INTO `vivo_category` VALUES ('27', '其他', '19', '18', '20');
INSERT INTO `vivo_category` VALUES ('28', '碎屏保', '19', '18', '20');
INSERT INTO `vivo_category` VALUES ('29', 'Xplay系列', '2', '12313', '20');
INSERT INTO `vivo_category` VALUES ('30', 'Y系列', '2', '12313', '20');
INSERT INTO `vivo_category` VALUES ('31', 'V系列', '2', '12313', '20');
INSERT INTO `vivo_category` VALUES ('34', 'X系列', '2', '5465', '20');

-- ----------------------------
-- Table structure for `vivo_comment`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_comment`;
CREATE TABLE `vivo_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_title` varchar(100) NOT NULL DEFAULT '',
  `comment_content` text,
  `comment_start` int(11) NOT NULL DEFAULT '0',
  `comment_time` varchar(45) NOT NULL DEFAULT '',
  `comment_status` int(11) NOT NULL DEFAULT '1',
  `commodity_commodity_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `fk_comment_commodity1_idx` (`commodity_commodity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='这是商品评价';

-- ----------------------------
-- Records of vivo_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `vivo_commodity`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_commodity`;
CREATE TABLE `vivo_commodity` (
  `commodity_id` int(11) NOT NULL AUTO_INCREMENT,
  `commodity_name` varchar(300) NOT NULL DEFAULT '' COMMENT '商品名称',
  `commodity_title` varchar(300) NOT NULL DEFAULT '''''' COMMENT '这是商品的标题',
  `commodity_num` int(11) NOT NULL DEFAULT '0' COMMENT '货号',
  `commodity_unit` varchar(45) NOT NULL DEFAULT '元' COMMENT '单位',
  `commodity_market_price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '这是市场价',
  `commodity_mall_price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '这是商城价格',
  `commodity_all_stock` int(11) NOT NULL DEFAULT '0' COMMENT '这是总库存',
  `commodity_list_img` varchar(300) NOT NULL DEFAULT '' COMMENT '这是列表图',
  `commodity_click` int(11) NOT NULL DEFAULT '0' COMMENT '这是点击量',
  `commodity_added_time` varchar(200) NOT NULL DEFAULT '' COMMENT '这是上架时间',
  `category_id` int(11) NOT NULL COMMENT '这是分类id',
  `type_id` int(11) NOT NULL COMMENT '这是类型ID',
  `brands_brands_id` int(11) NOT NULL COMMENT '这是品牌id',
  `admin_user_admin_user_id` int(11) NOT NULL,
  PRIMARY KEY (`commodity_id`),
  KEY `fk_commodity_brands1_idx` (`brands_brands_id`),
  KEY `fk_commodity_admin_user1_idx` (`admin_user_admin_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='这是商品';

-- ----------------------------
-- Records of vivo_commodity
-- ----------------------------
INSERT INTO `vivo_commodity` VALUES ('33', '【限量首发】X7曜石黑 特别版', '【11月11日0:00，二轮开售】内存升级128G，4G大运存，高通八核处理器，支持闪充，实时混响音效，1600W柔光自拍，照亮你的美！', '2147483647', '部', '3000.00', '2798.00', '297', 'commodityImg/listImg/37831476708604.png', '99999', '1476708709', '29', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('21', '【vivo】原装移动电源P50', '\'\'', '131313', '件', '150.00', '99.00', '273', 'commodityImg/listImg/63791475996405.png', '13', '1475999929', '20', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('8', 'vivoX71', '\'\'', '1389268', '件', '1300.00', '1279.00', '13', 'attachment/27541475643465.png', '11', '1475907837', '4', '14', '11', '1');
INSERT INTO `vivo_commodity` VALUES ('26', '【vivo】原装USB数据线', '【国庆限时特价】原装通用数据线', '1231313', '个', '29.00', '10.00', '0', 'commodityImg/listImg/16811476000464.png', '131', '1476092015', '23', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('22', '【vivo】XE680原装耳机', '\'\'', '9823013', '件', '210.00', '158.00', '129', 'commodityImg/listImg/94961475999320.png', '13', '1475999844', '21', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('23', '【vivo】XE100原装耳机', '\'\'', '2147483647', '件', '130.00', '59.00', '0', 'commodityImg/listImg/9441476000009.png', '1213', '1476091566', '21', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('24', '【vivo】原装旅行充电器—闪充充电器', '\'\'', '2147483647', '个', '150.00', '85.00', '134', 'commodityImg/listImg/28741476000218.png', '12313', '1476000248', '22', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('25', '【vivo】原装旅行充电器-2000mA', '\'\'', '1390908108', '个', '130.00', '68.00', '13', 'commodityImg/listImg/36221476000329.png', '13', '1476000350', '22', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('27', '【闪迪 】16G内存卡', '\'\'', '1231321', '件', '70.00', '69.00', '131', 'commodityImg/listImg/65191476000697.png', '535', '1476000706', '24', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('28', '【新品】vivo配件收纳包', '\'\'', '131231', '件', '70.00', '69.00', '118', 'commodityImg/listImg/2861476000849.png', '188', '1476000872', '25', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('29', '【飞蝗】蓝牙自拍杆', '\'\'', '10398019', '件', '99.00', '88.00', '88', 'commodityImg/listImg/91351476000978.png', '88', '1476000985', '25', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('30', 'Xplay5', '【火爆新品】双曲面屏，高通八核，4G运存+128G内存,应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充!', '131313', '部', '3698.00', '3298.00', '295', 'commodityImg/listImg/21831476003069.png', '131', '1476003198', '29', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('31', 'Xplay5旗舰版', '6G运存+128G存储，双曲面屏，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '1238798', '部', '4388.00', '4288.00', '26', 'commodityImg/listImg/80851476003439.png', '123', '1476003540', '29', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('32', 'Y51A 高配版', '镜彩青春、知性美颜、一键倾心', '131313', '部', '1198.00', '1098.00', '7', 'commodityImg/listImg/67171476004149.png', '131', '1476106478', '30', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('34', '【新品上市】Y55 全网通', '【新品首发】全款预定用户享2大权益，优先发货，加送蓝牙音箱。大屏美颜自拍，全网通', '2147483647', '部', '1398.00', '1298.00', '500', 'commodityImg/listImg/98141476872230.png', '555', '1476872285', '30', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('35', '【火爆热销】X7全网通', '【热销新品】4G运存+64G内存，高通八核处理器，支持闪充，实时混响音效，1600W柔光自拍，照亮你的美！', '213132123', '87978', '3498.00', '2498.00', '1234', 'commodityImg/listImg/31571476873050.png', '123123', '1476873076', '34', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('36', '【火爆热销】X7Plus全网通', '【热销新品】4G运存+64G内存，高通八核处理器，5.7英寸大屏，支持闪充，实时混响音效，1600W柔光自拍，照亮你的美！', '123123213', '123123123', '123213.00', '1232.00', '123141', 'commodityImg/listImg/47951476873180.png', '123142122', '1476873213', '34', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('37', 'V3Max玫瑰金', '全网通超薄4G双卡大屏指纹解锁智能手机', '31525325', '部', '1978.00', '1798.00', '21312', 'commodityImg/listImg/25791476873358.png', '12321', '1476873384', '31', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('38', '【热销】X6S 全网通', '【10月20日10:00开启秒杀，秒杀价1998】4G+64G大内存，全网通，急速指纹，双引擎闪充', '344525', '部', '2698.00', '2698.00', '0', 'commodityImg/listImg/801476873506.png', '123123', '1476873527', '34', '20', '1', '1');
INSERT INTO `vivo_commodity` VALUES ('39', 'X6S Plus全网通', '【10月20日10:00开启秒杀，秒杀价2598】5.7英寸大屏幕，4G+64G大内存，全网通，急速指纹，双引擎闪充', '123123123', '部', '2998.00', '2798.00', '0', 'commodityImg/listImg/38791476873744.png', '3123', '1476876056', '34', '20', '1', '1');

-- ----------------------------
-- Table structure for `vivo_commodity_attr`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_commodity_attr`;
CREATE TABLE `vivo_commodity_attr` (
  `commodity_attr_id` int(11) NOT NULL AUTO_INCREMENT,
  `commodity_attr_value` varchar(300) NOT NULL DEFAULT '' COMMENT '属性值',
  `commodity_attr_addprice` varchar(300) NOT NULL DEFAULT '',
  `type_attr_type_attr_id` int(11) NOT NULL,
  `commodity_commodity_id` int(11) NOT NULL,
  PRIMARY KEY (`commodity_attr_id`),
  KEY `fk_commodity_attr_type_attr1_idx` (`type_attr_type_attr_id`),
  KEY `fk_commodity_attr_commodity1_idx` (`commodity_commodity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=722 DEFAULT CHARSET=utf8 COMMENT='这是商品类型commodity(商品)';

-- ----------------------------
-- Records of vivo_commodity_attr
-- ----------------------------
INSERT INTO `vivo_commodity_attr` VALUES ('519', '银色', '7', '13', '23');
INSERT INTO `vivo_commodity_attr` VALUES ('359', '银色', '1', '13', '21');
INSERT INTO `vivo_commodity_attr` VALUES ('360', '白色', '3', '13', '21');
INSERT INTO `vivo_commodity_attr` VALUES ('358', '极光白', '0', '13', '22');
INSERT INTO `vivo_commodity_attr` VALUES ('361', '极光白', '15', '13', '21');
INSERT INTO `vivo_commodity_attr` VALUES ('102', '8', '1', '16', '8');
INSERT INTO `vivo_commodity_attr` VALUES ('99', '黑色', '0', '13', '8');
INSERT INTO `vivo_commodity_attr` VALUES ('100', '32', '20', '16', '8');
INSERT INTO `vivo_commodity_attr` VALUES ('101', '16', '10', '16', '8');
INSERT INTO `vivo_commodity_attr` VALUES ('520', '白色', '0', '13', '26');
INSERT INTO `vivo_commodity_attr` VALUES ('366', '白色', '0', '13', '25');
INSERT INTO `vivo_commodity_attr` VALUES ('365', '白色', '0', '13', '24');
INSERT INTO `vivo_commodity_attr` VALUES ('357', '银色', '0', '13', '22');
INSERT INTO `vivo_commodity_attr` VALUES ('356', '白色', '0', '13', '22');
INSERT INTO `vivo_commodity_attr` VALUES ('94', '8', '0', '16', '14');
INSERT INTO `vivo_commodity_attr` VALUES ('93', '黑色', '0', '13', '14');
INSERT INTO `vivo_commodity_attr` VALUES ('92', '8', '0', '16', '13');
INSERT INTO `vivo_commodity_attr` VALUES ('91', '黑色', '0', '13', '13');
INSERT INTO `vivo_commodity_attr` VALUES ('77', '无袖', '0', '8', '12');
INSERT INTO `vivo_commodity_attr` VALUES ('78', '直筒型', '0', '9', '12');
INSERT INTO `vivo_commodity_attr` VALUES ('79', '超短', '0', '10', '12');
INSERT INTO `vivo_commodity_attr` VALUES ('80', '常规袖', '0', '11', '12');
INSERT INTO `vivo_commodity_attr` VALUES ('81', 'S', '0', '12', '12');
INSERT INTO `vivo_commodity_attr` VALUES ('82', '黑色', '0', '15', '12');
INSERT INTO `vivo_commodity_attr` VALUES ('518', '极光白', '1', '13', '23');
INSERT INTO `vivo_commodity_attr` VALUES ('517', '白色', '13', '13', '23');
INSERT INTO `vivo_commodity_attr` VALUES ('369', '黑色', '0', '13', '28');
INSERT INTO `vivo_commodity_attr` VALUES ('368', '黑色', '0', '13', '27');
INSERT INTO `vivo_commodity_attr` VALUES ('370', '白色', '0', '13', '28');
INSERT INTO `vivo_commodity_attr` VALUES ('371', '黑色', '0', '13', '29');
INSERT INTO `vivo_commodity_attr` VALUES ('372', '白色', '0', '13', '29');
INSERT INTO `vivo_commodity_attr` VALUES ('403', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('401', '双摄像头', '0', '30', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('402', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('399', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('400', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('398', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('397', '1280*800像素', '0', '26', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('395', 'Android 5.1', '0', '24', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('396', '5.43英寸', '0', '25', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('394', '64G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于64G', '0', '23', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('393', '8G RAM', '0', '22', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('392', '1.8Ghz 高通骁龙八核 MSM8976', '0', '21', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('391', '全网通', '0', '19', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('404', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('405', '64', '0', '16', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('406', '白色', '0', '13', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('407', '【vivo服务】一年碎屏宝-曲面屏', '158', '20', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('408', '【vivo服务】半年碎屏宝-曲面屏  ', '128', '20', '30');
INSERT INTO `vivo_commodity_attr` VALUES ('409', '全网通', '0', '19', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('410', '1.8Ghz 高通骁龙八核 MSM8976', '0', '21', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('411', '8G RAM', '0', '22', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('412', '64G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于64G', '0', '23', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('413', 'Android 5.1', '0', '24', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('414', '5.43英寸', '0', '25', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('415', '1280*768像素', '0', '26', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('416', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('417', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('418', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('419', '双摄像头', '0', '30', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('420', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('421', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('422', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('423', '香槟金', '0', '13', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('424', '128', '0', '16', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('425', '64', '-10', '16', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('426', '【vivo服务】一年碎屏宝-曲面屏', '158', '20', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('427', '【vivo服务】半年碎屏宝-曲面屏  ', '128', '20', '31');
INSERT INTO `vivo_commodity_attr` VALUES ('576', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('541', '64', '21.5', '16', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('542', '128', '50', '16', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('540', '16', '0', '16', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('539', '极光白', '0', '13', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('538', '玫瑰金', '0', '13', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('530', '1280*800像素', '0', '26', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('531', '8G RAM', '0', '22', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('532', '2.15Ghz 高通骁龙820处理器', '0', '21', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('533', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('534', '移动联通双4G', '0', '19', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('537', '香槟金', '0', '13', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('536', '【vivo服务】一年碎屏宝-曲面屏', '99', '20', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('535', '【vivo服务】半年碎屏宝-曲面屏  ', '59', '20', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('527', '5.43英寸', '0', '25', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('528', 'Android 4.1', '0', '24', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('529', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('526', '应用分身，指纹识别，极速闪拍，分屏多任务', '0', '29', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('522', '单摄像头', '0', '30', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('523', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('524', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('525', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('521', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '32');
INSERT INTO `vivo_commodity_attr` VALUES ('574', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('575', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('573', '双摄像头', '0', '30', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('571', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('572', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('570', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('568', '4.3英寸', '0', '25', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('569', '1280*800像素', '0', '26', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('567', 'Android 4.1', '0', '24', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('566', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('565', '移动联通双4G', '0', '19', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('564', '4G RAM', '0', '22', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('563', '2.15Ghz 高通骁龙820处理器', '0', '21', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('577', '黑色', '0', '13', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('578', '32', '0', '16', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('579', '128', '20', '16', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('580', '64', '10', '16', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('581', '【vivo服务】一年碎屏宝-曲面屏', '100', '20', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('582', '【vivo服务】半年碎屏宝-曲面屏  ', '50', '20', '33');
INSERT INTO `vivo_commodity_attr` VALUES ('583', '电信4G', '0', '19', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('584', '1.8Ghz 高通骁龙八核 MSM8976', '0', '21', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('585', '2G RAM', '0', '22', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('586', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('587', 'Android 4.1', '0', '24', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('588', '4.3英寸', '0', '25', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('589', '2560X1440像素', '0', '26', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('590', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('591', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('592', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('593', '双摄像头', '0', '30', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('594', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('595', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('596', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('597', '玫瑰金', '0', '13', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('598', '银色', '0', '13', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('599', '32', '0', '16', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('600', '64', '20', '16', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('601', '128', '30', '16', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('602', '【vivo服务】一年碎屏宝-曲面屏', '100', '20', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('603', '【vivo服务】半年碎屏宝-曲面屏  ', '50', '20', '34');
INSERT INTO `vivo_commodity_attr` VALUES ('604', '电信4G', '0', '19', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('605', '1.8Ghz 高通骁龙八核 MSM8976', '0', '21', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('606', '2G RAM', '0', '22', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('607', '64G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于64G', '0', '23', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('608', 'Android 4.1', '0', '24', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('609', '4.3英寸', '0', '25', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('610', '2560X1440像素', '0', '26', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('611', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('612', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('613', '应用分身，指纹识别，极速闪拍，分屏多任务', '0', '29', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('614', '双摄像头', '0', '30', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('615', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('616', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('617', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('618', '玫瑰金', '0', '13', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('619', '香槟金', '0', '13', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('620', '128', '0', '16', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('621', '【vivo服务】一年碎屏宝-曲面屏', '0', '20', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('622', '【vivo服务】半年碎屏宝-曲面屏  ', '0', '20', '35');
INSERT INTO `vivo_commodity_attr` VALUES ('623', '全网通', '0', '19', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('624', '2.15Ghz 高通骁龙820处理器', '0', '21', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('625', '10G RAM', '0', '22', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('626', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('627', 'Android 5.1', '0', '24', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('628', '6.0英寸', '0', '25', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('629', '1280*800像素', '0', '26', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('630', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('631', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('632', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('633', '双摄像头', '0', '30', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('634', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('635', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('636', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('637', '玫瑰金', '0', '13', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('638', '香槟金', '0', '13', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('639', '极光白', '0', '13', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('640', '128', '0', '16', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('641', '【vivo服务】半年碎屏宝-曲面屏  ', '0', '20', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('642', '【vivo服务】一年碎屏宝-曲面屏', '0', '20', '36');
INSERT INTO `vivo_commodity_attr` VALUES ('643', '联通4G', '0', '19', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('644', '1.8Ghz 高通骁龙八核 MSM8976', '0', '21', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('645', '4G RAM', '0', '22', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('646', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('647', 'Android 5.1', '0', '24', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('648', '4.3英寸', '0', '25', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('649', '1280*800像素', '0', '26', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('650', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('651', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('652', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('653', '双摄像头', '0', '30', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('654', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('655', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('656', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('657', '玫瑰金', '0', '13', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('658', '128', '0', '16', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('659', '【vivo服务】一年碎屏宝-曲面屏', '0', '20', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('660', '【vivo服务】半年碎屏宝-曲面屏  ', '0', '20', '37');
INSERT INTO `vivo_commodity_attr` VALUES ('661', '电信4G', '0', '19', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('662', '2.15Ghz 高通骁龙820处理器', '0', '21', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('663', '4G RAM', '0', '22', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('664', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('665', 'Android 5.1', '0', '24', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('666', '4.3英寸', '0', '25', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('667', '1280*768像素', '0', '26', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('668', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('669', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('670', '应用分身，指纹识别，极速闪拍，分屏多任务', '0', '29', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('671', '双摄像头', '0', '30', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('672', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('673', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('674', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('675', '玫瑰金', '0', '13', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('676', '香槟金', '0', '13', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('677', '128', '0', '16', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('678', '64', '0', '16', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('679', '【vivo服务】半年碎屏宝-曲面屏  ', '0', '20', '38');
INSERT INTO `vivo_commodity_attr` VALUES ('714', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '33', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('712', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '31', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('713', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '32', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('711', '双摄像头', '0', '30', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('709', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '28', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('710', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充', '0', '29', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('708', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '27', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('706', '4.5英寸', '0', '25', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('707', '1280*800像素', '0', '26', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('705', 'Android 5.1', '0', '24', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('704', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G', '0', '23', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('703', '10G RAM', '0', '22', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('702', '2.15Ghz 高通骁龙820处理器', '0', '21', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('701', '全网通', '0', '19', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('715', '玫瑰金', '0', '13', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('716', '银色', '0', '13', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('717', '32', '0', '16', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('718', '128', '0', '16', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('719', '64', '0', '16', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('720', '【vivo服务】一年碎屏宝-曲面屏', '0', '20', '39');
INSERT INTO `vivo_commodity_attr` VALUES ('721', '【vivo服务】半年碎屏宝-曲面屏  ', '0', '20', '39');

-- ----------------------------
-- Table structure for `vivo_core_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_core_attachment`;
CREATE TABLE `vivo_core_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '会员id',
  `siteid` int(11) NOT NULL COMMENT '站点编号',
  `name` varchar(80) NOT NULL,
  `filename` varchar(300) NOT NULL COMMENT '文件名',
  `path` varchar(300) NOT NULL COMMENT '相对路径',
  `extension` varchar(10) NOT NULL DEFAULT '' COMMENT '类型',
  `createtime` int(10) NOT NULL COMMENT '上传时间',
  `size` mediumint(9) NOT NULL COMMENT '文件大小',
  `is_member` tinyint(1) NOT NULL COMMENT '1 前台 2 后台',
  `data` varchar(100) NOT NULL DEFAULT '' COMMENT '辅助信息',
  `hash` char(50) NOT NULL DEFAULT '' COMMENT '标识用于区分资源',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `data` (`data`),
  KEY `extension` (`extension`),
  KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='附件';

-- ----------------------------
-- Records of vivo_core_attachment
-- ----------------------------

-- ----------------------------
-- Table structure for `vivo_goods_lists`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_goods_lists`;
CREATE TABLE `vivo_goods_lists` (
  `goods_lists_id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_lists_num` int(11) NOT NULL DEFAULT '0' COMMENT '这是商品货号',
  `goods_lists_stock` int(11) NOT NULL DEFAULT '0' COMMENT '这是商品库存',
  `goods_lists_allid` varchar(300) NOT NULL DEFAULT '' COMMENT '这是组合属性id',
  `commodity_commodity_id` int(11) NOT NULL,
  PRIMARY KEY (`goods_lists_id`),
  KEY `fk_goods_lists_commodity1_idx` (`commodity_commodity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='这是货品列表';

-- ----------------------------
-- Records of vivo_goods_lists
-- ----------------------------
INSERT INTO `vivo_goods_lists` VALUES ('20', '200', '96', '405|406|408', '30');
INSERT INTO `vivo_goods_lists` VALUES ('19', '100', '99', '405|406|407', '30');
INSERT INTO `vivo_goods_lists` VALUES ('24', '555', '0', '542|538|535', '32');
INSERT INTO `vivo_goods_lists` VALUES ('22', '1003', '73', '359', '21');
INSERT INTO `vivo_goods_lists` VALUES ('13', '4', '0', '542|539|535', '32');
INSERT INTO `vivo_goods_lists` VALUES ('21', '1001', '100', '360', '21');
INSERT INTO `vivo_goods_lists` VALUES ('23', '1002', '100', '361', '21');
INSERT INTO `vivo_goods_lists` VALUES ('25', '151', '11', '423|424|426', '31');
INSERT INTO `vivo_goods_lists` VALUES ('29', '123132123', '30', '577|578|581', '33');
INSERT INTO `vivo_goods_lists` VALUES ('27', '13123123', '107', '577|579|581', '33');
INSERT INTO `vivo_goods_lists` VALUES ('28', '1313', '15', '577|580|581', '33');
INSERT INTO `vivo_goods_lists` VALUES ('30', '12312312', '36', '577|578|582', '33');

-- ----------------------------
-- Table structure for `vivo_keep`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_keep`;
CREATE TABLE `vivo_keep` (
  `keep_id` int(11) NOT NULL AUTO_INCREMENT,
  `keep_commodity_id` int(11) NOT NULL DEFAULT '0' COMMENT '这是商品ID',
  `keep_time` varchar(300) NOT NULL DEFAULT '''''' COMMENT '这是收藏时间',
  `keep_commodity_name` varchar(300) NOT NULL DEFAULT '''''' COMMENT '商品名字',
  `keep_commodity_price` varchar(300) NOT NULL DEFAULT '‘’' COMMENT '这是商品价格',
  `keep_commodity_user_id` int(3) NOT NULL,
  PRIMARY KEY (`keep_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_keep
-- ----------------------------
INSERT INTO `vivo_keep` VALUES ('4', '21', '1476641949', '【vivo】原装移动电源P50', '99.00', '0');
INSERT INTO `vivo_keep` VALUES ('3', '31', '1476641273', 'Xplay5旗舰版', '4288.00', '0');

-- ----------------------------
-- Table structure for `vivo_loginlog`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_loginlog`;
CREATE TABLE `vivo_loginlog` (
  `loginLog_id` int(11) NOT NULL AUTO_INCREMENT,
  `loginLog_address` varchar(45) DEFAULT '' COMMENT '这是登录地点',
  `loginLog_IP` varchar(45) NOT NULL DEFAULT '' COMMENT '这是登录IP',
  `loginLog_time` varchar(45) NOT NULL DEFAULT '' COMMENT '这是登录时间',
  `admin_user_admin_user_id` int(11) NOT NULL,
  PRIMARY KEY (`loginLog_id`),
  KEY `fk_loginLog_admin_user1_idx` (`admin_user_admin_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COMMENT='这是登录日志';

-- ----------------------------
-- Records of vivo_loginlog
-- ----------------------------
INSERT INTO `vivo_loginlog` VALUES ('1', '北京市北京市朝阳区孙河顺白路12号后盾IT教育', '127.0.0.1', '1474860956', '1');
INSERT INTO `vivo_loginlog` VALUES ('2', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474864601', '1');
INSERT INTO `vivo_loginlog` VALUES ('3', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474864750', '2');
INSERT INTO `vivo_loginlog` VALUES ('4', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474864752', '2');
INSERT INTO `vivo_loginlog` VALUES ('5', '北京市北京市 鹏博士宽带', '121.69.37.186', '1474864750', '2');
INSERT INTO `vivo_loginlog` VALUES ('6', null, '127.0.0.1', '1474870037', '1');
INSERT INTO `vivo_loginlog` VALUES ('7', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474883331', '1');
INSERT INTO `vivo_loginlog` VALUES ('8', null, '127.0.0.1', '1474885550', '1');
INSERT INTO `vivo_loginlog` VALUES ('9', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474885818', '1');
INSERT INTO `vivo_loginlog` VALUES ('10', '广东省深圳市 电信', '183.37.209.57', '1474886045', '2');
INSERT INTO `vivo_loginlog` VALUES ('11', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474886290', '2');
INSERT INTO `vivo_loginlog` VALUES ('12', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1474898841', '1');
INSERT INTO `vivo_loginlog` VALUES ('13', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1474935803', '2');
INSERT INTO `vivo_loginlog` VALUES ('14', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1474966583', '1');
INSERT INTO `vivo_loginlog` VALUES ('15', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1474966627', '1');
INSERT INTO `vivo_loginlog` VALUES ('16', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1474986417', '1');
INSERT INTO `vivo_loginlog` VALUES ('17', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475022719', '1');
INSERT INTO `vivo_loginlog` VALUES ('18', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475065911', '1');
INSERT INTO `vivo_loginlog` VALUES ('19', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475065913', '1');
INSERT INTO `vivo_loginlog` VALUES ('20', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475074419', '1');
INSERT INTO `vivo_loginlog` VALUES ('21', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475075168', '1');
INSERT INTO `vivo_loginlog` VALUES ('22', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475108703', '1');
INSERT INTO `vivo_loginlog` VALUES ('23', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475151690', '1');
INSERT INTO `vivo_loginlog` VALUES ('24', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475151696', '1');
INSERT INTO `vivo_loginlog` VALUES ('25', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475195108', '1');
INSERT INTO `vivo_loginlog` VALUES ('26', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475195108', '1');
INSERT INTO `vivo_loginlog` VALUES ('27', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475208338', '1');
INSERT INTO `vivo_loginlog` VALUES ('28', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475316966', '1');
INSERT INTO `vivo_loginlog` VALUES ('29', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475339057', '1');
INSERT INTO `vivo_loginlog` VALUES ('30', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475382074', '1');
INSERT INTO `vivo_loginlog` VALUES ('31', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475633884', '1');
INSERT INTO `vivo_loginlog` VALUES ('32', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475642030', '1');
INSERT INTO `vivo_loginlog` VALUES ('33', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475722252', '1');
INSERT INTO `vivo_loginlog` VALUES ('34', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475753749', '1');
INSERT INTO `vivo_loginlog` VALUES ('35', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475903405', '1');
INSERT INTO `vivo_loginlog` VALUES ('36', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1475992683', '1');
INSERT INTO `vivo_loginlog` VALUES ('37', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1475996055', '1');
INSERT INTO `vivo_loginlog` VALUES ('38', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476078678', '1');
INSERT INTO `vivo_loginlog` VALUES ('39', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476103616', '1');
INSERT INTO `vivo_loginlog` VALUES ('40', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476109838', '1');
INSERT INTO `vivo_loginlog` VALUES ('41', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476169990', '1');
INSERT INTO `vivo_loginlog` VALUES ('42', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476195376', '1');
INSERT INTO `vivo_loginlog` VALUES ('43', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476616612', '1');
INSERT INTO `vivo_loginlog` VALUES ('44', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476641167', '1');
INSERT INTO `vivo_loginlog` VALUES ('45', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476674967', '1');
INSERT INTO `vivo_loginlog` VALUES ('46', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476690363', '1');
INSERT INTO `vivo_loginlog` VALUES ('47', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476702238', '1');
INSERT INTO `vivo_loginlog` VALUES ('48', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476708127', '1');
INSERT INTO `vivo_loginlog` VALUES ('49', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476769890', '1');
INSERT INTO `vivo_loginlog` VALUES ('50', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476809736', '1');
INSERT INTO `vivo_loginlog` VALUES ('51', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476822276', '1');
INSERT INTO `vivo_loginlog` VALUES ('52', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476856820', '1');
INSERT INTO `vivo_loginlog` VALUES ('53', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476856822', '1');
INSERT INTO `vivo_loginlog` VALUES ('54', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476869090', '1');
INSERT INTO `vivo_loginlog` VALUES ('55', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476948434', '1');
INSERT INTO `vivo_loginlog` VALUES ('56', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476958220', '3');
INSERT INTO `vivo_loginlog` VALUES ('57', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476960347', '3');
INSERT INTO `vivo_loginlog` VALUES ('58', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476960349', '3');
INSERT INTO `vivo_loginlog` VALUES ('59', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476960496', '3');
INSERT INTO `vivo_loginlog` VALUES ('60', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476960601', '3');
INSERT INTO `vivo_loginlog` VALUES ('61', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476960734', '3');
INSERT INTO `vivo_loginlog` VALUES ('62', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476961379', '3');
INSERT INTO `vivo_loginlog` VALUES ('63', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476968622', '1');
INSERT INTO `vivo_loginlog` VALUES ('64', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476970170', '3');
INSERT INTO `vivo_loginlog` VALUES ('65', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476970451', '1');
INSERT INTO `vivo_loginlog` VALUES ('66', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476970967', '4');
INSERT INTO `vivo_loginlog` VALUES ('67', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476970969', '4');
INSERT INTO `vivo_loginlog` VALUES ('68', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476971000', '4');
INSERT INTO `vivo_loginlog` VALUES ('69', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476971307', '1');
INSERT INTO `vivo_loginlog` VALUES ('70', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476971409', '4');
INSERT INTO `vivo_loginlog` VALUES ('71', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476971620', '4');
INSERT INTO `vivo_loginlog` VALUES ('72', '网络信号不好，获取地理位置失败！', '127.0.0.1', '1476972618', '1');
INSERT INTO `vivo_loginlog` VALUES ('73', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476973249', '5');
INSERT INTO `vivo_loginlog` VALUES ('74', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1476973345', '6');
INSERT INTO `vivo_loginlog` VALUES ('75', '目前暂时没有您的IP信息,&nbsp;&nbsp;期待您的分享', '127.0.0.1', '1477133990', '1');
INSERT INTO `vivo_loginlog` VALUES ('76', '网络信号不好，获取地理位置失败！', 'c70_yangyuhui.houdunphp.com', '1477156764', '1');
INSERT INTO `vivo_loginlog` VALUES ('77', '网络信号不好，获取地理位置失败！', 'www.huishao.xyz', '1477566185', '1');
INSERT INTO `vivo_loginlog` VALUES ('78', '网络信号不好，获取地理位置失败！', 'www.huishao.xyz', '1477885672', '1');
INSERT INTO `vivo_loginlog` VALUES ('79', '网络信号不好，获取地理位置失败！', 'www.huishao.xyz', '1477885674', '1');
INSERT INTO `vivo_loginlog` VALUES ('80', '网络信号不好，获取地理位置失败！', 'c70_yangyuhui.houdunphp.com', '1477896050', '1');
INSERT INTO `vivo_loginlog` VALUES ('81', '网络信号不好，获取地理位置失败！', 'www.huishao.xyz', '1477920295', '1');
INSERT INTO `vivo_loginlog` VALUES ('82', '网络信号不好，获取地理位置失败！', 'c70_yangyuhui.houdunphp.com', '1477996766', '1');
INSERT INTO `vivo_loginlog` VALUES ('83', '网络信号不好，获取地理位置失败！', 'www.huishao.xyz', '1479144838', '1');
INSERT INTO `vivo_loginlog` VALUES ('84', '网络信号不好，获取地理位置失败！', 'www.huishao.xyz', '1479174418', '1');

-- ----------------------------
-- Table structure for `vivo_member_notes`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_member_notes`;
CREATE TABLE `vivo_member_notes` (
  `member_notes_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_notes_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '这是用户ID',
  `member_notes_commodity` varchar(500) NOT NULL DEFAULT '' COMMENT '这是用户的所看的商品',
  PRIMARY KEY (`member_notes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_member_notes
-- ----------------------------
INSERT INTO `vivo_member_notes` VALUES ('1', '1', '30|28|32|33|31|37');
INSERT INTO `vivo_member_notes` VALUES ('2', '9', '33|30|32|31|21|2|34|38');
INSERT INTO `vivo_member_notes` VALUES ('3', '11', '30|33|31');
INSERT INTO `vivo_member_notes` VALUES ('4', '12', '33');
INSERT INTO `vivo_member_notes` VALUES ('5', '13', '33');

-- ----------------------------
-- Table structure for `vivo_member_user`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_member_user`;
CREATE TABLE `vivo_member_user` (
  `member_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_user_username` varchar(100) NOT NULL DEFAULT '' COMMENT '登录用户名',
  `member_user_nickname` varchar(100) NOT NULL DEFAULT '' COMMENT '这是账号昵称 88阿狸...',
  `member_user_password` varchar(100) NOT NULL DEFAULT '' COMMENT '这是密码',
  `member_user_email` varchar(300) NOT NULL DEFAULT '' COMMENT '这是邮箱',
  `member_user_address` varchar(400) NOT NULL DEFAULT '' COMMENT '这是地址',
  `member_user_phone` varchar(12) NOT NULL DEFAULT '0' COMMENT '这是手机号',
  `member_user_fixed` varchar(12) NOT NULL DEFAULT '0' COMMENT '这是固定电话',
  `member_user_sex` enum('不方便透露','女','男') NOT NULL DEFAULT '不方便透露' COMMENT '这是性别',
  `member_user_birthday` varchar(100) DEFAULT NULL COMMENT '这是生日',
  `member_user_liveAddress` varchar(300) DEFAULT NULL COMMENT '这是居住地',
  `comment_comment_id` int(11) NOT NULL,
  PRIMARY KEY (`member_user_id`),
  UNIQUE KEY `member_user_username_UNIQUE` (`member_user_username`),
  KEY `fk_member_user_comment1_idx` (`comment_comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='这是购买用户';

-- ----------------------------
-- Records of vivo_member_user
-- ----------------------------
INSERT INTO `vivo_member_user` VALUES ('1', '1476273032', '3123', '5832b621fd61dd4a25d626782e7c35c1', '', '', '15033610274', '0', '女', '2009|2|22', '内蒙古|呼和浩特|回民区', '0');
INSERT INTO `vivo_member_user` VALUES ('2', '1476273076', '2218006427@qq.com', '7fef6171469e80d32c0559f88b377245', '2218006427@qq.com', '', '0', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('3', '1476273114', '2218006423@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '2218006423@qq.com', '', '0', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('4', '1476273138', '2218006427@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '2218006427@qq.com', '', '0', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('5', '1476273515', '15033610272', '96e79218965eb72c92a549dd5a330112', '', '', '15033610272', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('6', '1476273918', '15033610271', '42c106e1ad51a2b65320237e439e68f9', '', '', '15033610271', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('8', '1476611403', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('9', '1476817026', '18731382048', '5832b621fd61dd4a25d626782e7c35c1', '', '', '18731382048', '0', '不方便透露', '1995|2|22', '辽宁|沈阳|沈河区', '0');
INSERT INTO `vivo_member_user` VALUES ('10', '1476817145', '18731382041', '4297f44b13955235245b2497399d7a93', '', '', '18731382041', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('11', '1477156863', '11111@11.vv', '71b596cb42ee254f7416043d184fc970', '11111@11.vv', '', '0', '0', '不方便透露', null, null, '0');
INSERT INTO `vivo_member_user` VALUES ('12', '1477920680', '3838438@qq.com', '7fef6171469e80d32c0559f88b377245', '3838438@qq.com', '', '0', '0', '女', '1992|2|22', '澳门|澳门|澳门', '0');
INSERT INTO `vivo_member_user` VALUES ('13', '1477992633', '727153336@qq.com', '4297f44b13955235245b2497399d7a93', '727153336@qq.com', '', '0', '0', '不方便透露', null, null, '0');

-- ----------------------------
-- Table structure for `vivo_node`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_node`;
CREATE TABLE `vivo_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '这是控制器以及方法',
  `title` varchar(100) NOT NULL COMMENT '这是注释，',
  `status` tinyint(1) DEFAULT '0' COMMENT '这是状态，显示这个管理员是否在本公司了，1，0',
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `show` tinyint(1) DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_node
-- ----------------------------
INSERT INTO `vivo_node` VALUES ('1', 'admin', '这是后台主页面', '1', '0', '1', null, null);
INSERT INTO `vivo_node` VALUES ('2', 'brands', '这是品牌控制器', '1', '1', '2', null, null);
INSERT INTO `vivo_node` VALUES ('3', 'index', '这是品牌主页面', '1', '2', '3', null, null);
INSERT INTO `vivo_node` VALUES ('4', 'addBrand', '这是品牌添加', '1', '2', '3', null, null);
INSERT INTO `vivo_node` VALUES ('5', 'edit', '这是品牌的修改', '1', '2', '3', null, null);
INSERT INTO `vivo_node` VALUES ('6', 'del', '这是品牌删除', '1', '2', '3', null, null);
INSERT INTO `vivo_node` VALUES ('7', 'admininfo', '这是用户信息', '1', '1', '2', null, null);
INSERT INTO `vivo_node` VALUES ('8', 'index', '这是用户信息主页面', '1', '7', '3', null, null);
INSERT INTO `vivo_node` VALUES ('9', 'changeinfo', '这是用户信息的修改', '1', '7', '3', null, null);
INSERT INTO `vivo_node` VALUES ('10', 'changepassword', '这是修改密码', '1', '7', '3', null, null);
INSERT INTO `vivo_node` VALUES ('11', 'category', '这是分类管理', '1', '1', '2', null, null);
INSERT INTO `vivo_node` VALUES ('12', 'index', '这是分类的添加', '1', '11', '3', null, null);
INSERT INTO `vivo_node` VALUES ('13', 'add', '这是分类的添加', '1', '11', '3', null, null);
INSERT INTO `vivo_node` VALUES ('14', 'edit', '这是分类的修改', '1', '11', '3', null, null);
INSERT INTO `vivo_node` VALUES ('15', 'del', '这是分类的删除', '1', '11', '3', null, null);
INSERT INTO `vivo_node` VALUES ('16', 'category_info', '这是分类的信息', '1', '11', '3', null, null);

-- ----------------------------
-- Table structure for `vivo_orderform`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_orderform`;
CREATE TABLE `vivo_orderform` (
  `orderForm_id` int(11) NOT NULL AUTO_INCREMENT,
  `orderForm_num` int(11) NOT NULL DEFAULT '0' COMMENT '这是订单号',
  `orderForm_payMethod` varchar(30) NOT NULL DEFAULT '''''' COMMENT '这是支付方式',
  `orderForm_taxType` varchar(255) NOT NULL DEFAULT '‘’' COMMENT '这是发票信息',
  `orderForm_invoice` varchar(100) NOT NULL DEFAULT '''''' COMMENT '这是发票抬头',
  `orderForm_receiver` varchar(200) NOT NULL DEFAULT '' COMMENT '这是收货人',
  `orderForm_phone` varchar(12) DEFAULT '''''' COMMENT '这是收货人电话号码',
  `orderForm_address` varchar(500) NOT NULL DEFAULT '' COMMENT '这是收货地址，地区+详细',
  `orderForm_price` varchar(11) NOT NULL DEFAULT '0' COMMENT '这是总价格',
  `orderForm_sendtime` varchar(200) NOT NULL DEFAULT '' COMMENT '生成时间',
  `orderForm_comments` text COMMENT '备注',
  `orderForm_cancelTime` varchar(100) DEFAULT NULL COMMENT '这是取消时间',
  `orderForm_cancelMethod` varchar(100) DEFAULT NULL COMMENT '用户手动取消订单/系统自动取消订单',
  `orderForm_status` varchar(100) NOT NULL DEFAULT '0' COMMENT '订单状态-未付款-未发货-已发货-已完成',
  `member_user_member_user_id` int(11) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`orderForm_id`),
  KEY `fk_orderForm_member_user1_idx` (`member_user_member_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='这是商品订单';

-- ----------------------------
-- Records of vivo_orderform
-- ----------------------------
INSERT INTO `vivo_orderform` VALUES ('41', '1476769848', '货到付款', '个人发票', '000000000', '杨宇辉', '15033610274', '北京市北京市朝阳', '100', '1476769848', '', null, null, '未发货', '1');
INSERT INTO `vivo_orderform` VALUES ('42', '1476816347', '在线支付', '个人发票', '000000000', '闫霞飞', '18731382048', '北京市北京丰台区丰台科技园', '8754', '1476816347', '', null, null, '未发货', '1');
INSERT INTO `vivo_orderform` VALUES ('43', '1476871925', '在线支付', '个人发票', '000000000', '杨宇辉', '15033610274', '北京市北京朝阳区朝阳', '3456', '1476871925', '', null, null, '已发货', '9');
INSERT INTO `vivo_orderform` VALUES ('26', '1476682148', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476682148', '', null, null, '退货成功', '1');
INSERT INTO `vivo_orderform` VALUES ('27', '1476682319', '货到付款', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476682319', '', null, null, '换货成功', '1');
INSERT INTO `vivo_orderform` VALUES ('33', '1476707723', '货到付款', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '200', '1476707723', '', null, null, '退货失败', '1');
INSERT INTO `vivo_orderform` VALUES ('34', '1476708086', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476708086', '', null, null, '已完成', '1');
INSERT INTO `vivo_orderform` VALUES ('35', '1476708176', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476708176', '', null, null, '退货成功', '1');
INSERT INTO `vivo_orderform` VALUES ('36', '1476708774', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '562212', '1476708774', '', null, null, '已完成', '1');
INSERT INTO `vivo_orderform` VALUES ('37', '1476709167', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476709167', '', '1476709176', '用户手动取消订单', '已取消', '1');
INSERT INTO `vivo_orderform` VALUES ('38', '1476710657', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476710657', '', null, null, '已发货', '1');
INSERT INTO `vivo_orderform` VALUES ('39', '1476710681', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '17388', '1476710681', '', null, null, '退货成功', '1');
INSERT INTO `vivo_orderform` VALUES ('40', '1476769826', '在线支付', '个人发票', '000000000', '了看见了看见', '123', '黑龙江哈尔滨道里区进来看见了', '100', '1476769826', '', null, null, '未发货', '1');
INSERT INTO `vivo_orderform` VALUES ('44', '1477157200', '在线支付', '个人发票', '000000000', '12', '12121212121', '北京市北京朝阳区12', '18150', '1477157200', '', null, null, '未发货', '11');
INSERT INTO `vivo_orderform` VALUES ('45', '1477896213', '在线支付', '个人发票', '000000000', '杨宇辉', '15033610274', '北京市北京朝阳区朝阳', '8892', '1477896213', '', null, null, '未付款', '1');
INSERT INTO `vivo_orderform` VALUES ('46', '1477896270', '货到付款', '个人发票', '000000000', '12', '12121212121', '北京市北京朝阳区12', '4446', '1477896270', '', null, null, '退/换货申请中', '1');

-- ----------------------------
-- Table structure for `vivo_orderformlist`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_orderformlist`;
CREATE TABLE `vivo_orderformlist` (
  `orderFormList_id` int(11) NOT NULL AUTO_INCREMENT,
  `orderFormList_shopNum` int(11) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `orderFormList_price` int(11) NOT NULL DEFAULT '0' COMMENT '这是单个订单的订单总价格',
  `orderFormList_attr` varchar(300) NOT NULL DEFAULT '''''' COMMENT '这是货品属性，为了遍历是好用',
  `commodity_commodity_id` int(11) NOT NULL COMMENT '商品id',
  `orderForm_orderForm_id` int(11) NOT NULL COMMENT '这是订单id',
  PRIMARY KEY (`orderFormList_id`),
  KEY `fk_orderFormList_commodity1_idx` (`commodity_commodity_id`),
  KEY `fk_orderFormList_orderForm1_idx` (`orderForm_orderForm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COMMENT='订单列表';

-- ----------------------------
-- Records of vivo_orderformlist
-- ----------------------------
INSERT INTO `vivo_orderformlist` VALUES ('1', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '1');
INSERT INTO `vivo_orderformlist` VALUES ('2', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '1');
INSERT INTO `vivo_orderformlist` VALUES ('3', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '2');
INSERT INTO `vivo_orderformlist` VALUES ('4', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '2');
INSERT INTO `vivo_orderformlist` VALUES ('5', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '3');
INSERT INTO `vivo_orderformlist` VALUES ('6', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '3');
INSERT INTO `vivo_orderformlist` VALUES ('7', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '4');
INSERT INTO `vivo_orderformlist` VALUES ('8', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '4');
INSERT INTO `vivo_orderformlist` VALUES ('9', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '5');
INSERT INTO `vivo_orderformlist` VALUES ('10', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '5');
INSERT INTO `vivo_orderformlist` VALUES ('11', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '6');
INSERT INTO `vivo_orderformlist` VALUES ('12', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '6');
INSERT INTO `vivo_orderformlist` VALUES ('13', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '7');
INSERT INTO `vivo_orderformlist` VALUES ('14', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '7');
INSERT INTO `vivo_orderformlist` VALUES ('15', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '8');
INSERT INTO `vivo_orderformlist` VALUES ('16', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '8');
INSERT INTO `vivo_orderformlist` VALUES ('17', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '9');
INSERT INTO `vivo_orderformlist` VALUES ('18', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '9');
INSERT INTO `vivo_orderformlist` VALUES ('19', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '10');
INSERT INTO `vivo_orderformlist` VALUES ('20', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '10');
INSERT INTO `vivo_orderformlist` VALUES ('21', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '11');
INSERT INTO `vivo_orderformlist` VALUES ('22', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '11');
INSERT INTO `vivo_orderformlist` VALUES ('23', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '12');
INSERT INTO `vivo_orderformlist` VALUES ('24', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '12');
INSERT INTO `vivo_orderformlist` VALUES ('25', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '13');
INSERT INTO `vivo_orderformlist` VALUES ('26', '1', '1207', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '13');
INSERT INTO `vivo_orderformlist` VALUES ('27', '2', '2414', '容量:128|颜色:极光白|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '14');
INSERT INTO `vivo_orderformlist` VALUES ('28', '3', '3656', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '15');
INSERT INTO `vivo_orderformlist` VALUES ('29', '1', '1207', '容量:128|颜色:香槟金|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '15');
INSERT INTO `vivo_orderformlist` VALUES ('30', '1', '1219', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '16');
INSERT INTO `vivo_orderformlist` VALUES ('31', '1', '1219', '容量:64|颜色:极光白|服务:【vivo服务】一年碎屏宝-曲面屏|', '32', '17');
INSERT INTO `vivo_orderformlist` VALUES ('32', '2', '2414', '容量:128|颜色:香槟金|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '18');
INSERT INTO `vivo_orderformlist` VALUES ('33', '1', '1207', '容量:128|颜色:香槟金|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '19');
INSERT INTO `vivo_orderformlist` VALUES ('34', '8', '800', '颜色:银色|', '21', '19');
INSERT INTO `vivo_orderformlist` VALUES ('35', '10', '11570', '容量:16|颜色:玫瑰金|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '20');
INSERT INTO `vivo_orderformlist` VALUES ('36', '1', '1207', '容量:128|颜色:玫瑰金|服务:【vivo服务】半年碎屏宝-曲面屏  |', '32', '21');
INSERT INTO `vivo_orderformlist` VALUES ('37', '1', '100', '颜色:银色|', '21', '22');
INSERT INTO `vivo_orderformlist` VALUES ('38', '1', '100', '颜色:银色|', '21', '23');
INSERT INTO `vivo_orderformlist` VALUES ('39', '1', '100', '颜色:银色|', '21', '24');
INSERT INTO `vivo_orderformlist` VALUES ('40', '1', '100', '颜色:银色|', '21', '25');
INSERT INTO `vivo_orderformlist` VALUES ('41', '1', '100', '颜色:银色|', '21', '26');
INSERT INTO `vivo_orderformlist` VALUES ('42', '1', '100', '颜色:银色|', '21', '27');
INSERT INTO `vivo_orderformlist` VALUES ('43', '1', '100', '颜色:银色|', '21', '28');
INSERT INTO `vivo_orderformlist` VALUES ('44', '1', '100', '颜色:银色|', '21', '29');
INSERT INTO `vivo_orderformlist` VALUES ('45', '1', '100', '颜色:银色|', '21', '30');
INSERT INTO `vivo_orderformlist` VALUES ('46', '1', '100', '颜色:银色|', '21', '31');
INSERT INTO `vivo_orderformlist` VALUES ('47', '1', '100', '颜色:银色|', '21', '32');
INSERT INTO `vivo_orderformlist` VALUES ('48', '2', '200', '颜色:银色|', '21', '33');
INSERT INTO `vivo_orderformlist` VALUES ('49', '1', '100', '颜色:银色|', '21', '34');
INSERT INTO `vivo_orderformlist` VALUES ('50', '1', '100', '颜色:银色|', '21', '35');
INSERT INTO `vivo_orderformlist` VALUES ('51', '194', '562212', '颜色:黑色|容量:32|服务:【vivo服务】一年碎屏宝-曲面屏|', '33', '36');
INSERT INTO `vivo_orderformlist` VALUES ('52', '1', '100', '颜色:银色|', '21', '37');
INSERT INTO `vivo_orderformlist` VALUES ('53', '1', '100', '颜色:银色|', '21', '38');
INSERT INTO `vivo_orderformlist` VALUES ('54', '6', '17388', '颜色:黑色|容量:32|服务:【vivo服务】一年碎屏宝-曲面屏|', '33', '39');
INSERT INTO `vivo_orderformlist` VALUES ('55', '1', '100', '颜色:银色|', '21', '40');
INSERT INTO `vivo_orderformlist` VALUES ('56', '1', '100', '颜色:银色|', '21', '41');
INSERT INTO `vivo_orderformlist` VALUES ('57', '3', '8754', '颜色:黑色|容量:128|服务:【vivo服务】一年碎屏宝-曲面屏|', '33', '42');
INSERT INTO `vivo_orderformlist` VALUES ('58', '1', '3456', '容量:64|颜色:白色|服务:【vivo服务】一年碎屏宝-曲面屏|', '30', '43');
INSERT INTO `vivo_orderformlist` VALUES ('59', '4', '13704', '容量:64|颜色:白色|服务:【vivo服务】半年碎屏宝-曲面屏  |', '30', '44');
INSERT INTO `vivo_orderformlist` VALUES ('60', '1', '4446', '颜色:香槟金|容量:128|服务:【vivo服务】一年碎屏宝-曲面屏|', '31', '44');
INSERT INTO `vivo_orderformlist` VALUES ('61', '2', '8892', '颜色:香槟金|容量:128|服务:【vivo服务】一年碎屏宝-曲面屏|', '31', '45');
INSERT INTO `vivo_orderformlist` VALUES ('62', '1', '4446', '颜色:香槟金|容量:128|服务:【vivo服务】一年碎屏宝-曲面屏|', '31', '46');

-- ----------------------------
-- Table structure for `vivo_returns`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_returns`;
CREATE TABLE `vivo_returns` (
  `returns_id` int(11) NOT NULL AUTO_INCREMENT,
  `returns_orderForm_id` int(11) NOT NULL DEFAULT '0' COMMENT '这是退货的商品信息等，是订单列表id',
  `returns_status` varchar(100) NOT NULL,
  `returns_time` varchar(100) NOT NULL,
  `returns_success_time` varchar(100) NOT NULL COMMENT '这是退货成功后的时间',
  `returns_success_status` varchar(100) NOT NULL COMMENT '这是成功之后的状态',
  `returns_user_id` int(3) NOT NULL,
  PRIMARY KEY (`returns_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_returns
-- ----------------------------
INSERT INTO `vivo_returns` VALUES ('7', '26', '退货申请中', '1476706938', '1476707074', '退货成功', '1');
INSERT INTO `vivo_returns` VALUES ('8', '27', '换货申请中', '1476707140', '1476707282', '换货成功', '1');
INSERT INTO `vivo_returns` VALUES ('9', '35', '退货申请中', '1476708218', '1476708249', '退货成功', '1');
INSERT INTO `vivo_returns` VALUES ('10', '33', '退货申请中', '1476769959', '1476769977', '退货失败', '1');
INSERT INTO `vivo_returns` VALUES ('11', '39', '退货申请中', '1476816404', '1477896403', '退货成功', '1');
INSERT INTO `vivo_returns` VALUES ('12', '46', '退/换货申请中', '1477896374', '', '', '0');

-- ----------------------------
-- Table structure for `vivo_role`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_role`;
CREATE TABLE `vivo_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '这是所对应的model',
  `pid` smallint(6) DEFAULT NULL COMMENT '这是用来标记他是属于那个的',
  `status` tinyint(1) unsigned DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_role
-- ----------------------------
INSERT INTO `vivo_role` VALUES ('1', '超级管理员', '0', '1', '可以执行任何操作');
INSERT INTO `vivo_role` VALUES ('2', '品牌管理员', '1', '1', '可以执行品牌中的任何操作');
INSERT INTO `vivo_role` VALUES ('3', '品牌添加管理员', '2', '1', '可以执行品牌中的添加以及查看');
INSERT INTO `vivo_role` VALUES ('4', '分类管理员', '1', '1', '可以执行分类中的任何操作');
INSERT INTO `vivo_role` VALUES ('5', '分类添加管理员', '4', '1', '可以执行分类中的添加');

-- ----------------------------
-- Table structure for `vivo_sys`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_sys`;
CREATE TABLE `vivo_sys` (
  `sys_id` int(1) NOT NULL AUTO_INCREMENT,
  `sys_copy` varchar(100) NOT NULL COMMENT '这是网站的copy',
  `sys_beian` varchar(200) NOT NULL COMMENT '这是网站的备案信息',
  `sys_count` text COMMENT '这是网站的统计',
  PRIMARY KEY (`sys_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_sys
-- ----------------------------
INSERT INTO `vivo_sys` VALUES ('1', 'Copyright ©2011-2016 杨宇辉个人独立开发', '请勿模仿，翻版必究', 'var _hmt = _hmt || [];\r\n(function() {\r\n  var hm = document.createElement(\"script\");\r\n  hm.src = \"//hm.baidu.com/hm.js?11fa58260b76b6726f12b8c97924964a\";\r\n  var s = document.getElementsByTagName(\"script\")[0]; \r\n  s.parentNode.insertBefore(hm, s);\r\n})();');

-- ----------------------------
-- Table structure for `vivo_type`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_type`;
CREATE TABLE `vivo_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='商品类型';

-- ----------------------------
-- Records of vivo_type
-- ----------------------------
INSERT INTO `vivo_type` VALUES ('12', '上衣');
INSERT INTO `vivo_type` VALUES ('13', '裤子');
INSERT INTO `vivo_type` VALUES ('14', '手机');
INSERT INTO `vivo_type` VALUES ('15', '裙子');
INSERT INTO `vivo_type` VALUES ('16', '套装');
INSERT INTO `vivo_type` VALUES ('17', '婚纱礼服');
INSERT INTO `vivo_type` VALUES ('18', '电脑');
INSERT INTO `vivo_type` VALUES ('19', '旗袍');
INSERT INTO `vivo_type` VALUES ('20', '电子商品');

-- ----------------------------
-- Table structure for `vivo_type_attr`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_type_attr`;
CREATE TABLE `vivo_type_attr` (
  `type_attr_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_attr_name` varchar(100) NOT NULL DEFAULT '',
  `type_attr_value` varchar(300) NOT NULL DEFAULT '',
  `type_attr_type` varchar(300) NOT NULL DEFAULT '' COMMENT '这是属性类型,,规格1，属性0',
  `type_type_id` int(11) NOT NULL,
  PRIMARY KEY (`type_attr_id`),
  KEY `fk_type_attr_type1_idx` (`type_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='这是商品类型属性';

-- ----------------------------
-- Records of vivo_type_attr
-- ----------------------------
INSERT INTO `vivo_type_attr` VALUES ('8', '袖长', '无袖|短袖|五分袖|中袖|七分袖|九分袖', '0', '12');
INSERT INTO `vivo_type_attr` VALUES ('9', '款式', '直筒型|修身型|宽松型|蝙蝠型|高腰型|裙摆型|不规则形', '0', '12');
INSERT INTO `vivo_type_attr` VALUES ('10', '衣长', '超短|短款|中长|长款|加长款', '0', '12');
INSERT INTO `vivo_type_attr` VALUES ('11', '袖型', '常规袖|泡泡袖|蝙蝠袖|露肩袖|荷叶袖|喇叭袖|堆堆袖|花瓣袖|', '1', '12');
INSERT INTO `vivo_type_attr` VALUES ('12', '尺码', 'S|M|L|XL|XXL|XXXL|XXXXL', '1', '12');
INSERT INTO `vivo_type_attr` VALUES ('13', '颜色', '黑色|白色|银色|极光白|香槟金|玫瑰金', '1', '20');
INSERT INTO `vivo_type_attr` VALUES ('17', 'CPU', '1.8GHz 高通骁龙八核MSM8976', '0', '14');
INSERT INTO `vivo_type_attr` VALUES ('15', '颜色', '黑色|白色', '1', '12');
INSERT INTO `vivo_type_attr` VALUES ('16', '容量', '8|16|32|64|128', '1', '20');
INSERT INTO `vivo_type_attr` VALUES ('18', '颜色', '银色|白色|黑色', '1', '21');
INSERT INTO `vivo_type_attr` VALUES ('19', '网络制式', '移动4G|电信4G|移动联通双4G|联通4G|全网通|移动3G|联通3G', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('20', '服务', '【vivo服务】一年碎屏宝-曲面屏|【vivo服务】半年碎屏宝-曲面屏  ', '1', '20');
INSERT INTO `vivo_type_attr` VALUES ('21', 'CPU', '1.8Ghz 高通骁龙八核 MSM8976|2.15Ghz 高通骁龙820处理器', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('22', '内存（运行内存）', '2G RAM|4G RAM|8G RAM|10G RAM', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('23', 'ROM', '32G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于32G|64G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于64G|128G ROM，（不支持T卡扩展）注：由于手机系统和预装的程序占据了部分存储空间，实际可用存储空间小于128G', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('24', '系统', 'Android 5.1|Android 4.1|IOS7|IOS9|IOS10|', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('25', '屏幕尺寸', '5.43英寸|4.3英寸|4.5英寸|6.0英寸', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('26', '屏幕分辨率', '1280*768像素|1280*800像素|2560X1440像素', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('27', '支持频段', '网络类型双卡 2G GSM 900/1800  2G CDMA 800MHz  2G GSM 850/1900MHz（仅支持国际漫游） 3G CDMA 2000 800MHz  3G TD-SCDMA 1880/2010 MHz  3G WCDMA 900/2100 MHz  3G WCDMA 850/1900 MHz(仅支持国际漫游)  4G TDD-LTE B38/B39/B40/B41 （100M） 4G FDD-LTE B1/B3  4G FDD-LTE Band2/4/5/7/8 (仅支持国际漫游）', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('28', '连接支持', 'WiFi 双频WIFI：2.4GHz/5GHz， IEEE 802.11 a/b/g/n/ac  蓝牙支持 蓝牙4.0  USB USB 2.0  GPS定位 支持  OTG 支持', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('29', '功能特色', '双曲面屏，应用分身，指纹识别，极速闪拍，分屏多任务，双引擎闪充|应用分身，指纹识别，极速闪拍，分屏多任务', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('30', '摄像头类型', '单摄像头|双摄像头', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('31', '摄像头', '1600W（主）/800W（前置），F2.0(主)/F2.4（前置）', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('32', '视频拍摄', '录制格式 MP4  录制最大分辨率 3840*2160', '0', '20');
INSERT INTO `vivo_type_attr` VALUES ('33', '标配', '主机、耳机 *1  闪充充电头、数据线 *1  取卡针、透明后盖保护壳 *1  保修卡、快速入门指南 *1', '0', '20');

-- ----------------------------
-- Table structure for `vivo_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `vivo_user_role`;
CREATE TABLE `vivo_user_role` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vivo_user_role
-- ----------------------------
INSERT INTO `vivo_user_role` VALUES ('2', '3');
INSERT INTO `vivo_user_role` VALUES ('1', '1');
INSERT INTO `vivo_user_role` VALUES ('3', '4');
INSERT INTO `vivo_user_role` VALUES ('4', '5');
INSERT INTO `vivo_user_role` VALUES ('5', '6');
