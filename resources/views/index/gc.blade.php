@extends("index.mooc")
@section("content")
  <div class="g-mobile-nav" id="g-mobile-nav-js">
   <div id="g-mobile-nav">
    <ul>
     <li><a href="../courses.htm">课程</a></li>
     <li><a href="index.htm">广场</a></li>
     <li><a href="../mobile.htm">App下载</a></li>
     <li><a >雨课堂</a></li>
     <li><a class="js-mobile-login" href="../mobile_login.htm">登录</a></li>
     <li><a href="../mobile_register.htm">注册</a></li>
    </ul>
   </div>
   <div class="cf mobile-nav-container">
    <div class="fl logo">
     <a href="../index.htm"><img src="../../storage.xuetangx.com/xuetangx/site/common/mobile_logo-1.png" /></a>
    </div>
    <a class="fr" id="g-mobile-nav-toggle" href="javascript:"><img src="../../storage.xuetangx.com/xuetangx/site/common/mobile_nav_switch2-1.png" /></a>
    <a class="fr js-mobile-login" href="../mobile_login.htm">登录</a>
   </div>
  </div>
  <script>
        (function() {
            var nav = document.getElementById('g-mobile-nav');
            var toggle = true;
            document.getElementById('g-mobile-nav-toggle').addEventListener('click', function() {
                nav.style.maxHeight = toggle ? '1000px' : 0;
                toggle = !toggle;
            });
            var loginBtns = document.getElementsByClassName('js-mobile-login');
            for (var i = 0; i < loginBtns.length; i++) {
                loginBtns[i].setAttribute('href', '/mobile_login?next=' + location.href);
            }
        })();
    </script>
  <section class="pagename hide" data-page="HOMEPOST"></section>
  <div class="forum_detail">
   <div class="forum_poster_position">
    <section class="po wrap cf">
     <div class="container-fulid">
      <div class="row">
       <div class="left col-md-8 col-sm-10">
        <div class="poster_position1">
         <a href="post/2423.htm" id="bannerOne" target="_blank" data-click="onClick" data-block="BANNER" data-element="1"> <img src="../../storage.xuetangx.com/public_assets/xuetangx/bbs/365x365.png" alt="" title="玩转自主模式 赢取学堂好礼" />
          <div class="poster_position1_cover">
           <div class="poster_position1_title">
            <span class="ppt1 ppt">玩转自主模式 赢取学堂好礼</span>
           </div>
          </div> </a>
        </div>
       </div>
       <div class="middle col-md-9 col-sm-14">
        <div class="poster_position2">
         <a href="post/2785-1.htm" id="bannerTwo" target="_blank" data-click="onClick" data-block="BANNER" data-element="2"> <img src="../../storage.xuetangx.com/public_assets/xuetangx/bbs/cover/haoxiguanjiushiwa.gif" alt="" title="你都有些什么样的好习惯？" />
          <div class="poster_position2_cover">
           <div class="poster_position2_title">
            <span class="ppt2 ppt">你都有些什么样的好习惯？</span>
           </div>
          </div> </a>
        </div>
        <div class="poster_position3">
         <a href="post/2786.htm" id="bannerThree" target="_blank" data-click="onClick" data-block="BANNER" data-element="3"> <img src="../../storage.xuetangx.com/public_assets/xuetangx/bbs/cover/xiangwangdehaoshenghaa.gif" alt="" title="你所向往的生活是怎样的？" />
          <div class="poster_position3_cover">
           <div class="poster_position3_title">
            <span class="ppt3 ppt">你所向往的生活是怎样的？</span>
           </div>
          </div> </a>
        </div>
       </div>
       <div class="right col-md-7 col-sm-24">
        <div class="bulletin_board_tag">
         <h2>学堂公告</h2>
        </div>
        <div class="bulletin_board">
         <div class="hello">
          <span class="purple_stick"></span>
          <h3>大家好 \(0^o^0)/ !!!</h3>
         </div>
         <div class="bbc_wrap">
          <p class="bulletin_board_content" data-innerclick="innerClick" data-block="NOTICE" data-description="NOTICENAV">欢迎来到学堂在线广场！ <br /> 交学友，看资讯，晒笔记... <br /> 在广场：喧闹不可怕，沉默才可怕 <br /> 在广场：沉淀优质内容，分享酸甜苦辣 <br /> 现在开始吧，You are what you MOOC！ <br /> <br /> <br /> 点击&nbsp;<u><a href="post/67.htm" target="_blank">新手入门</a>&nbsp;</u>了解广场各板块发帖规则 <br /></p>
         </div>
         <div class="bulletin_board_time fr">
          <p>2015-03-31</p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
   </div>
   <div class="forum_about">
    <div class="wrap cf">
     <div class="left fl">
      <div class="post_header">
       <h1>讨论区</h1>
       <a href="category/activity-1.htm" target="_blank" class="view_whole">活动</a>
       <a href="category/course-1.htm" target="_blank" class="view_whole">分享</a>
       <a href="category/note-1.htm" target="_blank" class="view_whole">笔记</a>
       <a href="category/news-1.htm" target="_blank" class="view_whole">资讯</a>
       <a href="category/gossip-1.htm" target="_blank" class="view_whole">灌水</a>
       <a href="http://bad_redirect" class="post_btn fr" id="postBtn" target="_blank" data-click="onClick" data-block="LIST" data-description="TOADDPOST"><span></span><em>我要发帖</em></a>
      </div>
      <div class="post_body">
       <div class="pb_position b classifyactivity">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em class="popular_tag"><span></span></em>
          <em>活动</em>
          <a target="_blank" class="ptitle" href="post/1376.htm" data-click="onClick" data-block="LIST" data-element="1"> <p>【学堂暑期大学】夏日学霸大作战（结果已公布）</p> </a>
         </div>
         <p class="last_send_time fr">2016-07-01 11:42:49</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">——————————————【 最终结果 】————————————————————————不好意思让大家久等啦！终于到了激动人心发奖环节！恭喜以下获奖的小伙伴！【说明与须知】请以上获奖者于近期及时查</p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/1.htm" target="_blank"><p>精华</p></a>
          <a href="tag/2.htm" target="_blank"><p>推荐</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂活动小队长♂</a></p>
          <p class="popular"><span></span>306人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifyactivity">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em class="popular_tag"><span></span></em>
          <em>活动</em>
          <a target="_blank" class="ptitle" href="post/2423-1.htm" data-click="onClick" data-block="LIST" data-element="2"> <p>【新学期の大福利】玩转自主模式 赢取学堂好礼</p> </a>
         </div>
         <p class="last_send_time fr">2016-08-30 12:45:50</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">新学期！新玩儿法！学堂在线全新“自主模式课程”火热上线！课程内容全程开放，学习进度自己做主！学霸们再也不用苦苦等待课程更新了！一口气学完不瞌睡！学渣们再也不用着急急忙忙交作业了！无压力学习睡得香！还有</p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/2.htm" target="_blank"><p>推荐</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂活动小队长♂</a></p>
          <p class="popular"><span></span>120人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifyactivity">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em class="popular_tag"><span></span></em>
          <em>活动</em>
          <a target="_blank" class="ptitle" href="post/2803-1.htm" data-click="onClick" data-block="LIST" data-element="3"> <p>【励志贴】新学期，先定一个小目标</p> </a>
         </div>
         <p class="last_send_time fr">2016-09-21 14:44:46</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">王老板说：“......先定一个能达到的小目标，比方说我先挣它一个亿。”嗯，小队长确实很认同王老板的想法，一个亿的确只是一个小目标（喂！幺幺零嘛！这里有人装X。。。） 可是谈钱多庸俗啊，知识、才华、健</p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/2.htm" target="_blank"><p>推荐</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂活动小队长♂</a></p>
          <p class="popular"><span></span>215人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifycourse">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em>分享</em>
          <a target="_blank" class="ptitle" href="post/2835.htm" data-click="onClick" data-block="LIST" data-element="4"> <p>【福利贴】混血校花带你揭秘阿里大家族的校招体验</p> </a>
         </div>
         <p class="last_send_time fr">2016-09-26 15:32:31</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">阿里巴巴，是很多人梦想进入的公司。在阿里工作到底是什么样的工作体验呢？9月27日，英才职播第二期，美丽的混血校花特工将带你去参观阿里体育公司，直观感受在阿里的工作体验。你会见到阿里体育的办公楼；你也会</p>
        </div>
        <div class="pref">
         <div class="ptag hide">
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂活动小队长♂</a></p>
          <p class="popular"><span></span>3人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifycourse">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em class="popular_tag"><span></span></em>
          <em>分享</em>
          <a target="_blank" class="ptitle" href="post/1918.htm" data-click="onClick" data-block="LIST" data-element="5"> <p>【学堂广场】首届灵魂书法展</p> </a>
         </div>
         <p class="last_send_time fr">2016-08-04 14:50:32</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">首届&middot;学堂广场灵魂书法大赛完美落幕，小伙伴们大展身手，送来了一幅又一幅精美的作品！还想露一手的，就把作品贴上来吧！！！【学堂广场】首届灵魂摄影展 正在展出&lt;&lt;&lt;&lt;&lt;&lt;</p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/4.htm" target="_blank"><p>投票</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂活动小队长♂</a></p>
          <p class="popular"><span></span>414人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifycourse">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em class="popular_tag"><span></span></em>
          <em>分享</em>
          <a target="_blank" class="ptitle" href="post/2218.htm" data-click="onClick" data-block="LIST" data-element="6"> <p>【学堂广场】首届灵魂摄影展</p> </a>
         </div>
         <p class="last_send_time fr">2016-08-17 12:14:48</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">果然是高手在民间！！！小伙伴们的摄影技术都是杠杠滴！！！满满都是意境！张张都很走心！你们，都是摄影师！！！手痒的，不服的，想做摄影师的，把你们的作品都在这里贴出来吧！Ps.【学堂广场】首届灵魂书法展 </p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/1.htm" target="_blank"><p>精华</p></a>
          <a href="tag/2.htm" target="_blank"><p>推荐</p></a>
          <a href="tag/4.htm" target="_blank"><p>投票</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂活动小队长♂</a></p>
          <p class="popular"><span></span>345人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifynews">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em>资讯</em>
          <a target="_blank" class="ptitle" href="post/1358.htm" data-click="onClick" data-block="LIST" data-element="7"> <p>【喜大普奔】学堂在线个人主页全新上线啦！</p> </a>
         </div>
         <p class="last_send_time fr">2016-06-28 16:00:57</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">咦，睡了一觉而已，怎么个人主页突然之间就变了(⊙o⊙)……一脸懵逼的小伙伴请速速点击“我的主页”看个究竟~是的，如你所见，学堂在线全新个人主页酷炫登场啦！总是抱怨无法结对学习的小伙伴，现在可以肆意添加</p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/1.htm" target="_blank"><p>精华</p></a>
          <a href="tag/2.htm" target="_blank"><p>推荐</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂小菌菌</a></p>
          <p class="popular"><span></span>15人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifygossip">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em>灌水</em>
          <a target="_blank" class="ptitle" href="post/2163.htm" data-click="onClick" data-block="LIST" data-element="8"> <p>【有图有真相】晒晒学堂说减肥那期活动的礼物~</p> </a>
         </div>
         <p class="last_send_time fr">2016-08-13 20:47:11</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">拆开礼物的过程很惊喜！ 首先，很大一个箱子，真的很大 里面有一个红色抱枕和精美的礼物盒 当~当~当~当~当~当~很多好吃的零食哦，唱起了动人滴歌谣~ 饭！饭！饭</p>
        </div>
        <div class="pref">
         <div class="ptag hide">
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">QEDX</a></p>
          <p class="popular"><span></span>13人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifyactivity">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em class="popular_tag"><span></span></em>
          <em>活动</em>
          <a target="_blank" class="ptitle" href="post/2062.htm" data-click="onClick" data-block="LIST" data-element="9"> <p>学生时代的你，是撩妹（汉）高手么？</p> </a>
         </div>
         <p class="last_send_time fr">2016-08-09 14:18:08</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">是时候表现一下你撩妹（汉）高手的一面了！^_^别看有些人现在是Single dog~其实人家以前也是撩妹（汉）技能爆表的老司机呢！说吧骚年：学生时代的你都是如何撩妹（汉）的？</p>
        </div>
        <div class="pref">
         <div class="ptag">
          <a href="tag/1.htm" target="_blank"><p>精华</p></a>
          <a href="tag/2.htm" target="_blank"><p>推荐</p></a>
          <a href="tag/4.htm" target="_blank"><p>投票</p></a>
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂小菌菌</a></p>
          <p class="popular"><span></span>192人参与</p>
         </div>
        </div>
       </div>
       <div class="pb_position b classifynews">
        <div class="pb_position_header cf">
         <div class="pb_position_header_left fl">
          <em>资讯</em>
          <a target="_blank" class="ptitle" href="post/1749.htm" data-click="onClick" data-block="LIST" data-element="10"> <p>12岁少年手握4门结课证书，他不是天才，因为你也可以</p> </a>
         </div>
         <p class="last_send_time fr">2016-07-26 14:54:16</p>
        </div>
        <div class="pcontentwrap">
         <p class="pcontent">12岁时你在做什么？上小学？玩游戏？跑各种兴趣班？而他已经在学堂在线平台上学完了4门MOOC，正在学习8门MOOC。他叫王旭佳，今年12岁，来自海淀区实验小学，7月份小学毕业，9月份到首都师范大学附属</p>
        </div>
        <div class="pref">
         <div class="ptag hide">
         </div>
         <div class="pinfo">
          <p class="author"><span></span><a href="http://bad_redirect">学堂新闻</a></p>
          <p class="popular"><span></span>38人参与</p>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="right fl" id="asideFixed">
      <h1>推荐活动</h1>
      <div class="forum_recommend_position">
       <a target="_blank" href="post/2423.htm" data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="1"><img src="../../storage.xuetangx.com/public_assets/xuetangx/zizhukec307 172.png" /></a>
      </div>
      <div class="forum_recommend_position">
       <a target="_blank" href="post/866.htm" data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="2"><img src="../../storage.xuetangx.com/public_assets/xuetangx/365 172 wishes.jpg" /></a>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="hide" id="js_yxs_forumindex"></div>
@endsection
