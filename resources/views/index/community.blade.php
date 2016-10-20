@extends("index.mooc")
@section("content")

<section class="pagename hide" data-page="HOMEPOST"></section>
<div class="forum_detail">
<div class="forum_poster_position">
    <section class="po wrap cf">
        <div class="container-fulid">
            <div class="row">
                <div class="left col-md-8 col-sm-10">
                    <div class="poster_position1">
                        <a href="post/2423.htm"   id="bannerOne" target="_blank" data-click="onClick" data-block="BANNER" data-element="1">
                            <img src="../../storage.xuetangx.com/public_assets/xuetangx/bbs/365x365.png"   alt="" title="玩转自主模式 赢取学堂好礼"/>

                            <div class="poster_position1_cover">
                                <div class="poster_position1_title">
                                    <span class="ppt1 ppt">玩转自主模式 赢取学堂好礼</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="middle col-md-9 col-sm-14">
                    <div class="poster_position2">
                        <a href="post/2785-1.htm"   id="bannerTwo" target="_blank" data-click="onClick" data-block="BANNER" data-element="2">
                            <img src="../../storage.xuetangx.com/public_assets/xuetangx/bbs/cover/haoxiguanjiushiwa.gif"   alt="" title="你都有些什么样的好习惯？"/>

                            <div class="poster_position2_cover">
                                <div class="poster_position2_title">
                                    <span class="ppt2 ppt">你都有些什么样的好习惯？</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="poster_position3">
                        <a href="post/2786.htm"   id="bannerThree" target="_blank" data-click="onClick" data-block="BANNER" data-element="3">
                            <img src="../../storage.xuetangx.com/public_assets/xuetangx/bbs/cover/xiangwangdehaoshenghaa.gif"  alt="" title="你所向往的生活是怎样的？"/>

                            <div class="poster_position3_cover">
                                <div class="poster_position3_title">
                                    <span class="ppt3 ppt">你所向往的生活是怎样的？</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="right col-md-7 col-sm-24">
                    <div class="bulletin_board_tag">
                      @foreach($list as $tell)
                        <h2>学堂公告</h2>
                    </div>
                    <div class="bulletin_board">
                        <div class="hello">
                            <span class="purple_stick"></span>
                            <h3>{{ $tell->title }}</h3>
                        </div>

                        <div class="bbc_wrap">
                            <p class="bulletin_board_content" data-innerclick="innerClick" data-block="NOTICE" data-description="NOTICENAV">{{ $tell->content }}
                              <br />

                              点击&nbsp;<u><a href="post/67.htm"  target="_blank">新手入门</a>&nbsp;</u>了解广场各板块发帖规则
                            </br></p>
                        </div>
                        @endforeach
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
                <a href="{{ URL('./community') }}"    target="_blank" class="view_whole">活动</a>
                <a href="{{ URL('./community') }}"    target="_blank" class="view_whole">分享</a>
                <a href="{{ URL('./community') }}"    target="_blank" class="view_whole">笔记</a>
                <a href="{{ URL('./community') }}"    target="_blank" class="view_whole">资讯</a>
                <a href="{{ URL('./community') }}"    target="_blank" class="view_whole">灌水</a>
                @if(session('user'))
                <a href="{{ URL('./add') }}"  class="post_btn fr" id="postBtn" target="_blank" data-click="onClick" data-block="LIST" data-description="TOADDPOST"><span></span><em>我要发帖</em></a>
                @else
                @endif

            </div>
            <div class="post_body">

                @foreach($post as $post)
                    <div class="pb_position b classifyactivity">
                        <div class="pb_position_header cf">
                            <div class="pb_position_header_left fl">
                                <em class="popular_tag"><span></span></em>

                                <em>活动</em>
                                <a target="_blank" class="ptitle" href='{{ URL("/content/$post->id") }}' data-click="onClick" data-block="LIST" data-element="1">
                                    <p>{{ $post->title }}</p>
                                </a>
                            </div>
                            <p class="last_send_time fr">2016-07-01 11:42:49</p>

                        </div>

                        <div class="pcontentwrap">
                            <p class="pcontent">{{ $post->content }}</p>
                        </div>

                    </div>
                    @endforeach

            </div>
        </div>
        <div class="right fl" id="asideFixed" >
            <h1>推荐活动</h1>


                <div class="forum_recommend_position">
                    <a target="_blank" href="post/2423.htm"   data-click="onClick" data-block="RECOMMENDACTIVITY#ACTIVITY" data-element="1"><img src=""  /></a>
                </div>
        </div>
    </div>
</div>
</div>

<div class="hide" id="js_yxs_forumindex"></div>

@endsection
