@extends("index.mooc")
@section("content")



<section id="loginData" class="hide" data-authenticated = true></section>
<section class="pagename hide" data-page="EDITPOST"></section>

<div class="forum_edit">
<div class="forum_sendpost">
    <div class="wrap cf">
        <div class="left fl">
            <div class="send_post_header">
                <h1><a href="/community/category" class="sendposttitle">讨论区</a><span></span>发布新帖子</h1>
            </div>
            <div class="send_post_body">
                <form id="completedpost" action="/community/post/create" method="post">
                    <h2>帖子分类</h2>
                        <div class="select_post_class">
                        <div class="select_class" id="selectClass" data-click="onClick" data-block="FORM" data-element="1">
                            <div class="default_class fl gossip" id="defaultClass">
                                <h3>灌水</h3>
                            </div>
                            <div class="btn_down fr" id="btnDown">
                                <span></span>
                            </div>
                        </div>
                        <div class="select_list hide" id="selectList">
                            <ul class="list_inner">
                                        <li data-value="3" class="course">分享</li>
                                        <li data-value="8" class="note">笔记</li>
                                        <li data-value="6" class="gossip">灌水</li>
                            </ul>
                        </div>
                    </div>
                    <h2>标题</h2><span class="err_tip_title hide">不能为空</span>
                    <section id="editor">
                        <div id='edit' style="margin-top: 30px;">
                            <img class="fr-fir" src="img/old_clock.jpg" alt="Old Clock" width="300"/>

                            <h1>Click and edit</h1>

                            <p>
                        </div>
                    </section>
                    <div class="input_post_title">
                        <input class="title_blank" id="titleBlank" name="title" placeholder="字数25以内" type="text" data-click="onClick" data-block="FORM" data-element="2"/>
                    </div>
                    <h2>内容</h2><span class="err_tip_content hide">字数不能少于5个字</span>

                    <div class="input_post_textarea">
                      <section id="editor">
                          <div id='edit' style="margin-top: 30px;">
                              <img class="fr-fir" src="img/old_clock.jpg" alt="Old Clock" width="300"/>

                              <h1>Click and edit</h1>

                              <p>
                          </div>
                      </section>
                    </div>
                    <p  type="text">还可以输入 <span>5000</span> 个字</p>
                    <div class="gotopost">
                        <input class="btn_go_post" id="btnGoPost" type="submit" value="发布" data-click="onClick" data-block="FORM" data-description="TOPUBLISH"/>
                    </div>
                    <input type="hidden" id="hideContent" name="content" value="" />
                    <input type="hidden" id="hideInputClassify" name="category" value="6" />
                    <input type="hidden" name="csrfmiddlewaretoken" value="mZkc4lvEpprzr9zQVUwYG45aQko86p8Z">
                </form>
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
点击&nbsp;<u><a href="http://www.xuetangx.com/community/post/67" target="_blank">新手入门</a>&nbsp;</u>了解广场各板块发帖规则
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
                <a href="" data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="1" target="_blank"><img src=""/></a>
            </div>

            <div class="forum_recommend_position">
                <a href="" data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="2" target="_blank"><img src=""/></a>
            </div>
    </div>
</div>

    </div>
</div>
</div>
<div class="hide" id="js_yxs_forumedit"></div>
@endsection
