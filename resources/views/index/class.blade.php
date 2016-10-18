@extends("index.mooc")
@section("content")

<div class="courseabout_element">
    @foreach($list as $class)
        <div class="wrap">
            <section class="courseabout_detail" id="xt_september_newedition_courseabout">
                <h3 class="courseabout_title" id="title1">{{ $class->className }}</h3>
                <div class="cf video_info_show">
                    <div class="video_box" id="video" data-ccid="01E783A7A371A16C9C33DC5901307461" data-poster=""><!--视频接收ccid-->
                        <!-- <span class="video_play" id="courseVideoPlay"><div class="video_bg"></div><img src="http://static.hdslb.com/miniloader.swf"/></span> -->
                        <!-- <embed src="" widht=400px; height=300px; autostart=true/false loop=true/false></embed> -->
                        <embed height="320" width="550" quality="high" allowfullscreen="true" type="application/x-shockwave-flash" src="http://static.hdslb.com/miniloader.swf" flashvars="aid=1358908&page=1"></embed>
                    </div>


                    <div class="course_info" id="course_data">
                        <div class="course_intro">
                            <h4 class="title">课程描述</h4>
                            <p class="text">{{ $class->info }}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="course_about_element">
        <article class="course_about cf wrap" id="courseCorrelation">
            <div class="fl about_main">
                <div class="course_about_nav cf" id="courseAboutNav">
                        <nav>
                            <ul class="cf">
                                <li class=""><a href="javascript:">课程内容</a></li>
                                <li><a href="javascript:">授课教师</a></li>
                            </ul>
                        </nav>
                </div>
                <section id="courseIntro">
                    <h3><span class="strip"></span><span>课程简介</span></h3>
                    <p><p>{{ $class->content }}</p></p>
                </section>

                <section id="professor">
                    <h3><span class="strip"></span><span>授课教师</span></h3>
                    <ul class="teacher_info">
                        <li class="cf">
                            <div class="pic"><img src='{{ URL::asset("image/college/$class->image") }} '  alt=""></div>
                            <div class="teacher_text">
                                <h5><span class="name">{{ $class->teacher }}</span><span>  </span></h5>
                                <p class="limit">{{ $class->teacher }}</p>
                                <!-- <div class="show_all"><a href="javascript:">[查看全部]</a></div> -->
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
            @endforeach
            <!-- 新增热门话题 -->
            <aside class="fr hottopic_aside" id="hottopic_template" data-url="">
                <h3><span class="strip"></span><span>热门话题</span></h3>
                <ul class="hottopic_list" id="hottopic_content">
                </ul>
            </aside>
            <aside class="fr about_aside" id="course_ref_template" data-url="/course_recommends/TsinghuaX/TSINGHUA101/_">
                <h3><span class="strip"></span><span>相关课程</span></h3>
                <ul class="recommend_list" id="courseref_content">
                </ul>
            </aside>
        </article>
    </div>
    <div class="course_about_ceiling" id="courseAboutCeiling">
        <div class="wrap">
            <nav>
                <ul class="cf">
                    <li class="current"><a href="javascript:">课程内容</a></li>
                    <li><a href="javascript:">授课教师</a></li>
                    <li><a href="javascript:">精华笔记</a></li>
                    <li><a href="javascript:">常见问题</a></li>
                </ul>
            </nav>
        </div>
    </div>

<textarea id="video_code" style="display:none;">
	<iframe width="560" height="315" src="../../../../259"   scrolling="no" frameborder="0" allowfullscreen=""></iframe>
</textarea>

@endsection
