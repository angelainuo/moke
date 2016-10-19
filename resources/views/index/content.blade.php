@extends('index.mooc')
@section('content')

<div class="forum_postdetailpage">

<section id="loginData" class="hide" data-authenticated=false
        data-pagecount=4 data-currentpage=1 data-href="2423.htm"  > </section>
<section class="pagename hide" data-page="POSTDETAIL"></section>

<div class="forum_postdetail">
    <div class="wrap cf">
        <div class="left wholepart fl">
          @foreach($list as $post)
            <div class="postdetail_header">
                <h1><a href=""   id="backToPostCollect" data-click="onClick" data-block="INNERNAV" data-element="1">讨论区</a><span></span>讨论详情</h1>
                    <div class="posttitle">{{ $post->title }}</div>
                    <div class="postref cf">
                        <img class="touxiang_img" src="../../../storage.xuetangx.com/xuetangx/users/info/avatar/avatar-370631-20160809113232.png"  >

                        <div class="author"><a href="http://bad_redirect" >学堂活动小队长♂</a></div>
                        <div class="last_send_time fr">2016-08-30 12:45:50</div>
                    </div>
                    <div class="postdetail_content" data-innerclick="innerClick" data-block="CONTENT" data-description="PRIMARYINNERNAV">
                      <p>{{ $post->content }}</p>
                    </div>
            </div>
            @endforeach
                <div class="postdetail_contentpart scanimg cf">
                    <div class="postdetail_content" data-innerclick="innerClick" data-block="CONTENT" data-description="PRIMARYINNERNAV">
						<p></p>
                    </div>
                    <div class="postdetail_toolbar fr"
                         data-init='{"post": "2423", "reply_to": "370631", "object_type": "post"}'>
                         <div class="fl sbtn">
                                <div class="share-box">
                                    <a data-block="ACTIONS" data-description="TOSHARE#WECHAT" data-click="onClick" title="分享到微信" class="weixin" target="_blank">B</a>
                                    <a data-block="ACTIONS" data-description="TOSHARE#WEIBO" data-click="onClick" title="分享到新浪微博" class="sina" target="_blank">r</a>
                                    <a data-block="ACTIONS" data-description="TOSHARE#QQ" data-click="onClick" title="分享到QQ空间" class="zone" target="_blank">E</a>
                                    <a data-block="ACTIONS" data-description="TOSHARE#DOUBAN" data-click="onClick" title="分享到豆瓣" class="dou" target="_blank">D</a>
                                </div>
                            </div>
                        <a class="share_btn" href="javascript:" data-content="交学友，看资讯，晒笔记，来学堂在线广场，You are what you MOOC～" data-click="onClick" data-block="ACTIONS" data-description="TOSHARE"><span class="share_font"></span></a>
                        <a class="comment_btn" title="回复" href="#commentRedirectPosition" data-click="onClick" data-block="ACTIONS" data-description="TOCOMMENT"><span
                                class="comment_font"></span>（<span>68</span>）</a>
                        <a class="like_btn" href="javascript:"><span
                                class="like_font"></span>&nbsp;(<span
                                class="likeCount">25</span>)</a>

                        <a class="complain_btn" href="javascript:" data-click="onClick" data-block="ACTIONS" data-description="TOREPORT"><span class="complain_font"></span></a>
                    </div>
                </div>
                <div class="replypart scanimg">

                        <h2>回复：</h2>

                            <div class="reply cf" id=1 data-element="1" data-length="limit">
                                <div class="reply_position cf">
                                    <div class="reply_position_header cf">
                                        <h3 class="fl">
                                        <span class="stick"></span><a>Axier小哀</a>
                                        </h3>
                                        <div class="floor_time fr"><span class="floor">1楼</span>

                                            <span class="last_send_time">2016-09-01 13:51:50</span>

                                        </div>
                                    </div>
                                    <div class="replycontent  cf">
                                        <div class="replycontenttext" data-innerclick="innerClick" data-block="CONTENT" data-description="REPLYINNERNAV"><p>赞一个●━●</p></div>
                                        <div class="daizhu cf ">
                                                <div class="rinfo fr"
                                                     data-init='{"post": "2423", "comment_id": "1796815", "reply_to": "3736117", "reference": "1796815", "object_type": "comment"}' >
                                                </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                </div>

            <div id="commentRedirectPosition">
                    <div class="postdetail_textarea_unlogin">
                        <div class="textarea_bar">
                            <h2>请先<a id="loginFirst">登录</a></h2>
                        </div>
                        <div class="input_post_textarea">
                            <p>说点什么吧～</p>
                        </div>
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
点击&nbsp;<u><a href="67.htm"   target="_blank">新手入门</a>&nbsp;</u>了解广场各板块发帖规则
</br></p>
            </div>

            <div class="bulletin_board_time fr">
                <p>2015-03-31</p>
            </div>
        </div>
    </div>

</div>

    </div>
</div>
</div>
<div class="hide" id="js_yxs_postdetail"></div>
@endsection
