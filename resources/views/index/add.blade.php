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
                <form id="completedpost" action="{{ URL('/tiezi') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="uid" value="{{ session('user')->id }}">
                    <h2>标题</h2><span class="err_tip_title hide">不能为空</span>

                    <div class="input_post_title">
                        <input class="title_blank" id="titleBlank" name="title" placeholder="字数25以内" type="text" data-click="onClick" data-block="FORM" data-element="2"/>
                    </div>
                    <h2>内容</h2><span class="err_tip_content hide">字数不能少于5个字</span>

                    <div class="input_post_title">
                        <input class="title_blank" id="titleBlank" name="content" placeholder="字数1000以内" type="text" data-click="onClick" data-block="FORM" data-element="2"/>
                    </div>
                    <div class="gotopost">
                        <input class="btn_go_post" id="btnGoPost" type="submit" value="发布" data-click="onClick" data-block="FORM" data-description="TOPUBLISH"/>
                    </div>

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
