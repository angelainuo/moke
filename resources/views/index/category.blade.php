@extends("index.mooc")
@section("content")

    <div class="g-mobile-nav" id="g-mobile-nav-js">
        <div id="g-mobile-nav">
          <ul>
            <li><a href="../courses-1.htm"  >课程</a></li>
            <li><a href="index-1.htm"  >广场</a></li>
            <li><a href="../mobile-1.htm"  >App下载</a></li>
            <li><a   >雨课堂</a></li>
            <li><a class="js-mobile-login" href="../mobile_login-1.htm"  >登录</a></li>
            <li><a href="../mobile_register-1.htm"  >注册</a></li>
          </ul>
        </div>
        <div class="cf mobile-nav-container">
            <div class="fl logo">
                <a href="../index-1.htm"  ><img src="../../storage.xuetangx.com/xuetangx/site/common/mobile_logo.png"   /></a>
            </div>
            <a class="fr" id="g-mobile-nav-toggle" href="javascript:"><img src="../../storage.xuetangx.com/xuetangx/site/common/mobile_nav_switch2.png"   /></a>
            <a class="fr js-mobile-login" href="../mobile_login-1.htm"  >登录</a>
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









<section class="pagename hide" data-page="POSTCOLLECT"></section>
<div class="forum_collect">
<div class="forum_whole">
    <div class="wrap cf">
        <div class="left fl">
            <div class="post_header">
                <h1>全部帖子</h1>
                <a href=""   class="post_btn fr" data-click="onClick" data-block="LIST" data-description="TOADDPOST"><span></span><em>我要发帖</em></a>
            </div>
            <nav class="container-fluid" id="post_navibar">
                <ul class="row" id="entrance">




                            <li class="col-sm-2 current"><a class="entrance_activity" data-click="onClick" data-block="CATAGORY" data-element="1"
        href="category/activity.htm"  >活动
                            </a>
                            </li>




                            <li class="col-sm-2"><a class="entrance_course" data-click="onClick" data-block="CATAGORY" data-element="2"
                                                    href="category/course.htm"
                                                     >分享</a>
                            </li>




                            <li class="col-sm-2"><a class="entrance_note" data-click="onClick" data-block="CATAGORY" data-element="3"
                                                    href="category/note.htm"
                                                     >笔记</a>
                            </li>




                            <li class="col-sm-2"><a class="entrance_news" data-click="onClick" data-block="CATAGORY" data-element="4"
                                                    href="category/news.htm"
                                                     >资讯</a>
                            </li>




                            <li class="col-sm-2"><a class="entrance_gossip" data-click="onClick" data-block="CATAGORY" data-element="5"
                                                    href="category/gossip.htm"
                                                     >灌水</a>
                            </li>


                </ul>
            </nav>
            <div class="post_body">


                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="1" class="ptitle" href="post/2803.htm"   target="_blank">
                                <p>【励志贴】新学期，先定一个小目标</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">王老板说：“......先定一个能达到的小目标，比方说我先挣它一个亿。”嗯，小队长确实很认同王老板的想法，一个亿的确只是一个小目标（喂！幺幺零嘛！这里有人装X。。。） 可是谈钱多庸俗啊，知识、才华、健</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂活动小队长♂</a></p>

                                    <p class="last_send_time"><span></span>2016-09-21 14:44:46</p>

                                    <p class="popular"><span></span>215</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="2" class="ptitle" href="post/2423.htm"   target="_blank">
                                <p>【新学期の大福利】玩转自主模式  赢取学堂好礼</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">新学期！新玩儿法！学堂在线全新“自主模式课程”火热上线！课程内容全程开放，学习进度自己做主！学霸们再也不用苦苦等待课程更新了！一口气学完不瞌睡！学渣们再也不用着急急忙忙交作业了！无压力学习睡得香！还有</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href="'"   target="_blank"><p>推荐</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂活动小队长♂</a></p>

                                    <p class="last_send_time"><span></span>2016-08-30 12:45:50</p>

                                    <p class="popular"><span></span>120</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="3" class="ptitle" href=""   target="_blank">
                                <p>【灵魂系列】首届·学堂广场灵魂摄影大赛（已截止）</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">-------------------------------------------【作品展示&amp;奖项公布】----------------------------------------------</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>精华</p></a>
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂活动小队长♂</a></p>

                                    <p class="last_send_time"><span></span>2016-08-04 16:12:55</p>

                                    <p class="popular"><span></span>211</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="4" class="ptitle" href="post/1376-1.htm"   target="_blank">
                                <p>【学堂暑期大学】夏日学霸大作战（结果已公布）</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">——————————————【 最终结果 】————————————————————————不好意思让大家久等啦！终于到了激动人心发奖环节！恭喜以下获奖的小伙伴！【说明与须知】请以上获奖者于近期及时查</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>精华</p></a>
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂活动小队长♂</a></p>

                                    <p class="last_send_time"><span></span>2016-07-01 11:42:49</p>

                                    <p class="popular"><span></span>306</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="5" class="ptitle" href="post/156.htm"   target="_blank">
                                <p>【不吐不快】学堂广场“装修计划”（第一期）</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">作为一个初到帝都打拼的有志青年，学堂君这一年多来勤奋工作，辛勤劳动。为了尽快让漂泊在外的各位“居有定所”，学堂君拿出几乎所有的积蓄，为大家建起了今天的学堂广场。能和大家天天在一起，心里别提有多高兴了！</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>精华</p></a>
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href="'))window.location='http://www.xuetangx.com/dashboard/anabell_x110.jpg'"  >学堂course</a></p>

                                    <p class="last_send_time"><span></span>2015-04-21 11:52:01</p>

                                    <p class="popular"><span></span>148</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="6" class="ptitle" href="post/82.htm"   target="_blank">
                                <p>【入驻报到】Mother Ship Calling You HOME</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">在外漂泊已久的小伙伴们：学堂在线大本营终于在千呼万唤中完工了！Y(^o^)Y~这里是你们的港湾，这里是你们的主场，在这里，你是真正的主角！现在，学堂在线向你们发出最诚挚的呼唤：欢迎你们回家！ 回家第一</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂course</a></p>

                                    <p class="last_send_time"><span></span>2015-03-30 09:53:59</p>

                                    <p class="popular"><span></span>689</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="7" class="ptitle" href="post/2786.htm"   target="_blank">
                                <p>【说吧骚年】你所向往的生活是怎样的？</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">“一棹春风一叶舟，一纶茧缕一轻钩。花满渚，酒盈瓯，万顷波中得自由。”这种美好生活，我虽不能至，然而心向往之啊。你呢骚年：你所向往的生活是怎样的？</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>精华</p></a>
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                    <a href=""   target="_blank"><p>投票</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂小菌菌</a></p>

                                    <p class="last_send_time"><span></span>2016-09-19 14:08:45</p>

                                    <p class="popular"><span></span>267</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="8" class="ptitle" href="post/2785-1.htm"   target="_blank">
                                <p>【说吧骚年】你都有些什么样的好习惯？</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">今日事今日毕从没发过拖延症，乘坐公共交通我常常让座；怒气来时我就深呼吸，聪明又可爱的我有一堆好习惯等着被夸呢~你呢骚年：你都有些什么样的好习惯？</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>精华</p></a>
                                    <a href=""   target="_blank"><p>推荐</p></a>
                                    <a href=""   target="_blank"><p>投票</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂小菌菌</a></p>

                                    <p class="last_send_time"><span></span>2016-09-19 14:07:28</p>

                                    <p class="popular"><span></span>101</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="9" class="ptitle" href=""   target="_blank">
                                <p>【中秋快乐】写祝福 晒贺卡 拿福利</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">中秋佳节，月圆，人团圆扫描上方二维码，生成你的祝福贺卡送给你最挚爱，最思念的人在此回复贺卡截图，小队长将挑选最走心的10份祝福送上学堂在线限量笔记本1本祝各位中秋快乐！！！</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                    <a href=""   target="_blank"><p>投票</p></a>
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂活动小队长♂</a></p>

                                    <p class="last_send_time"><span></span>2016-09-13 16:38:43</p>

                                    <p class="popular"><span></span>157</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pother post_body_classifyactivity">
                        <div class="pb_position b classifyactivity">
                            <a data-click="onClick" data-block="LIST" data-element="10" class="ptitle" href=""   target="_blank">
                                <p>【结果公布】开学送大礼活动排行榜</p>
                            </a>

                            <div class="pcontentwrap">
                                <p class="pcontent">感谢大家参与学堂在线开学有礼活动！我们的活动结果已经出来，恭喜以下用户获得kindle一台，工作人员将通过手机号在近日联系以下微信昵称的朋友，安排kindle的发放。排行榜已经去掉了刷票的用户，我们不</p>
                            </div>

                            <div class="pref cf">
                                <div class="ptag fl">
                                </div>
                                <div class="pinfo fr">
                                    <p class="author"><span></span><a href=""  >学堂活动小队长♂</a></p>

                                    <p class="last_send_time"><span></span>2016-09-12 13:39:32</p>

                                    <p class="popular"><span></span>290</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pageDirection cf">
                            <a class="prePagebtn fl end"><span></span></a>

                            <a class="nextPagebtn fl" href=""   data-click="onClick" data-block="PAGINATION" data-description="FORWARD"><span></span></a>
                    </div>
            </div>
        </div>

        <div class="right fl">
    <div class="bulletin">
        <div class="bulletin_board_tag">
            <h2>学堂公告</h2>
        </div>
        <div class="bulletin_board">
            <div class="hello">
            <span class="purple_stick"></span>
            <h3>大家好 \(0^o^0)/ !!!</h3>
            </div>


            <div class="bbc_wrap">
                <p class="bulletin_board_content" data-innerclick="innerClick" data-block="NOTICE" data-description="NOTICEINNERNAV">欢迎来到学堂在线广场！
<br>
交学友，看资讯，晒笔记...
<br>
在广场：喧闹不可怕，沉默才可怕
<br>
在广场：沉淀优质内容，分享酸甜苦辣
<br>
现在开始吧，You are what you MOOC！
<br>
<br>
<br>
点击&nbsp;<u><a href="post/67.htm"   target="_blank">新手入门</a>&nbsp;</u>了解广场各板块发帖规则
</br></p>
            </div>

            <div class="bulletin_board_time fr">
                <p>2015-03-31</p>
            </div>
        </div>
    </div>
    <div class="recommend" id="asideFixedtwo">
        <h1>推荐活动</h1>


            <div class="forum_recommend_position">
                <a href="post/2423.htm"   data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="1" target="_blank"><img src="../../storage.xuetangx.com/public_assets/xuetangx/zizhukec307 172.png"  /></a>
            </div>

            <div class="forum_recommend_position">
                <a href="post/866.htm"   data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="2" target="_blank"><img src="../../storage.xuetangx.com/public_assets/xuetangx/365 172 wishes.jpg"  /></a>
            </div>
    </div>
</div>

    </div>
</div>
</div>

<div class="hide" id="js_yxs_forumcollect"></div>
@endsection
