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

                        <div class="author"><a href="http://bad_redirect" >{{ $post->nickName }}</a></div>
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
                          @foreach($data as $reply)
                            <div class="reply cf" id=1 data-element="1" data-length="limit">
                                <div class="reply_position cf">
                                    <div class="reply_position_header cf">
                                        <h3 class="fl">
                                        <span class="stick"></span><a>{{ $reply->nickName }}</a>
                                        </h3>

                                    </div>
                                    <div class="replycontent  cf">
                                        <div class="replycontenttext" data-innerclick="innerClick" data-block="CONTENT" data-description="REPLYINNERNAV"><p>{{  $reply->contents }}</p></div>
                                        <div class="daizhu cf ">
                                                <div class="rinfo fr"
                                                     data-init='{"post": "2423", "comment_id": "1796815", "reply_to": "3736117", "reference": "1796815", "object_type": "comment"}' >
                                                </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                                </div>

            <div id="commentRedirectPosition">
              @if(session('user'))
              <div class="postdetail_textarea_unlogin">
                  <div class="textarea_bar">
                      <h2>回复：</h2>
                  </div>
                  <div class="input_post_textarea">
                    <form action="{{ URL('/huifu') }}" method="post">
                      <input type="hidden" name="pid" value="{{ $post->id }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="uid" value="{{ session('user')->id }}">
                      <textarea name="contents" style="width:650px;height:100px"></textarea>
                      <input type="submit" value="提交">提交</input>
                    </form>
                  </div>
              </div>
							@else
					        <li class="openlogin"><a href="http://www.jq22.com" onclick="return false;">登录</a></li>

					        <li class="reg"><a href="" onclick="return false;">注册</a></li>

							@endif

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
