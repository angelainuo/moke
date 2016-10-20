@extends('index.mooc')
@section('content')

	<div class="dashboard_page dashboard_message_page">
		<div class="page_content wrap dashboard_other_prefile">
			<div class="other_prefile cf" id="otherInformation">
				<div data-reactid=".0"><nav class="dashboard_nav other_dashboard fl" data-reactid=".0.0">
					<div class="a_wrapper" data-reactid=".0.0.0">
						<img class="avatar" width="180" height="180" data-reactid=".0.0.0.0" src="./geren_files/40"><a class="a_cover hide" href="" data-reactid=".0.0.0.1">个人资料</a></div></nav>
						<section class="dashboard_content fl" data-reactid=".0.1">
							<div class="other_infor" data-reactid=".0.1.0"><h2 class="name" data-reactid=".0.1.0.0">{{ session('user')->nickName }}</h2><p class="sign" data-reactid=".0.1.0.1"></p>
								<ul class="info_list cf" data-reactid=".0.1.0.2">
									<li data-reactid=".0.1.0.2.0"><em class="profile-icons profile-icons-gender-man" data-reactid=".0.1.0.2.0.0"></em><span data-reactid=".0.1.0.2.0.1">男</span></li>
									<li class="edit-link" data-reactid=".0.1.0.2.5"><a href="{{ URL('/xiugai') }}" data-reactid=".0.1.0.2.5.0">编辑资料</a></li>
								</ul>
								<div class="hide" data-reactid=".0.1.0.3"></div>
							</div>
						</section>
					</div>
				</div>
		</div>
		<div class="wrap cf">
			<nav class="prefile_dashboard_nav other_dashboard fl" id="myPrefilePage">
				<div class="nav_info wrapper">
					<ul class="d_nav">
						<li class="on"><a href=""><span class="d_icon">7</span>首　　页</a></li>
	                    <li><a href="" data-click="onClick" data-block="LEFTNAV" data-element="COURSES"><span class="d_icon">9</span>我的课程</a></li>
											<li><a href="" data-click="onClick" data-block="LEFTNAV" data-element="DISCUSSION"><span class="d_icon">O</span>我的讨论</a></li>
	                </ul>
	            </div>

</nav>
			<section class="dashboard_content fl">
				<div id="otherCourse"><div class="dashboard_infor_box" data-reactid=".1"><nav class="other_nav" data-reactid=".1.0"><h2 data-reactid=".1.0.0"><span data-reactid=".1.0.0.0">我的课程</span><a href="http://www.xuetangx.com/dashboard/course/" style="display:block;" data-reactid=".1.0.0.1">查看全部</a></h2><ul class="content_cate cf" data-reactid=".1.0.1">
					<li class="on" data-state="studying" data-url="/api/web/courses/startcourses/" data-not-data="您还没有正在学习的课程，&lt;a href=&quot;/courses/&quot;&gt;去选课&lt;/a&gt;" data-reactid=".1.0.1.0"><a href="javascript:" data-reactid=".1.0.1.0.0"><span data-reactid=".1.0.1.0.0.0">正在学习</span><span data-reactid=".1.0.1.0.0.1">(1)</span></a>
					</li><li class="" data-state="credential" data-url="/api/web/courses/startcourses/" data-not-data="您还没有获得证书的课程" data-reactid=".1.0.1.1"><a href="javascript:" data-reactid=".1.0.1.1.0"><span data-reactid=".1.0.1.1.0.0">获得证书</span><span data-reactid=".1.0.1.1.0.1"></span></a></li></ul></nav><div class="course_info_list" data-reactid=".1.1">
						<ul class="cf" data-reactid=".1.1.0"><li data-reactid=".1.1.0.0"><a href="http://www.xuetangx.com/courses/course-v1:TsinghuaX+20220332X+2016_T1/about" data-reactid=".1.1.0.0.0">
							<div class="course_pic" data-reactid=".1.1.0.0.0.0"><img src="./geren_files/asset-v1-TsinghuaX+20220332X+2016_T1+type@asset+block@1-13042P95201.jpg" width="178" height="113" alt="日语与日本文化" data-reactid=".1.1.0.0.0.0.1"></div>
							<p class="course_name" data-reactid=".1.1.0.0.0.1">日语与日本文化</p><div class="cf course_info" data-reactid=".1.1.0.0.0.2"><p class="fl" data-reactid=".1.1.0.0.0.2.0"><span class="icon" data-reactid=".1.1.0.0.0.2.0.0">$</span><span data-reactid=".1.1.0.0.0.2.0.1">1 个月前开课</span></p><p class="fr" data-reactid=".1.1.0.0.0.2.1"><span class="icon" data-reactid=".1.1.0.0.0.2.1.0">g</span><span data-reactid=".1.1.0.0.0.2.1.1">3.2万</span><span data-reactid=".1.1.0.0.0.2.1.2">人</span></p></div></a></li></ul></div></div></div>

				<div id="otherTalk"><div class="dashboard_infor_box" data-reactid=".3"><nav class="other_nav" data-reactid=".3.0"><h2 data-reactid=".3.0.0">
					<span data-reactid=".3.0.0.0">我的讨论</span><a href="http://www.xuetangx.com/dashboard/discussion/" style="display:none;" data-reactid=".3.0.0.1">查看全部</a></h2><ul class="content_cate cf" data-reactid=".3.0.1">
						<li class="on" data-state="sponsor" data-url="/api/web/comments/" data-not-data="您还没有发布过讨论，&lt;a href=&quot;/community/&quot;&gt;去发言&lt;/a&gt;" data-reactid=".3.0.1.0"><a href="javascript:" data-reactid=".3.0.1.0.0"><span data-reactid=".3.0.1.0.0.0">我发布的</span><span data-reactid=".3.0.1.0.0.1"></span></a>
						</li>
						<li class="" data-state="participant" data-url="/api/web/comments/" data-not-data="您还没有参与过讨论，&lt;a href=&quot;/community/&quot;&gt;去看看有什么新鲜事&lt;/a&gt;" data-reactid=".3.0.1.1"><a href="javascript:" data-reactid=".3.0.1.1.0"><span data-reactid=".3.0.1.1.0.0">我参与的</span><span data-reactid=".3.0.1.1.0.1"></span></a></li>
					</ul></nav><div class="prefile-not-text" data-reactid=".3.1"><span data-reactid=".3.1.0">您还没有发布过讨论，<a href="">去发言</a></span><span class="hide" data-reactid=".3.1.1"></span></div></div></div>
			</section>
		</div>
	</div>
	<!-- <div id="js_dashboard_other_prefile_page" class="hide"
	data-userid="621709" #用户id
	data-follower="/pages2/jsonData/dashboard/cantact.json" #请求粉丝
	data-following="/pages2/jsonData/dashboard/cantact.json" #请求关注
	data-comments="/pages2/jsonData/dashboard/mytalk.json" #请求参与发布
	data-send-msg="/pages2/jsonData/dashboard/privatemsg.json" #请求发送信息
	data-follow-action="/pages2/jsonData/dashboard/cantact.json" #请求加关注操作
	data-start-courses="/pages2/jsonData/dashboard/prefilecourses.json"  #请求课程列表
	data-user-info="/pages2/jsonData/dashboard/userinfo.json" #请求他人基本信息
	data-follower-number="5" #关注的人数量
	data-following-number="3" #粉丝的人数量
	data-comment-sponsor="6" #他发布的数量
	data-comment-participant="16" #他参与的数量
	data-course-studying="9" #正在学习的数量
	data-course-credential="13" #获得证书的数量
	data-left-bar="/dashboard/leftbar/" #左侧学校信息
	></div> -->
	<div id="js_dashboard_other_prefile_page" class="hide" data-userid="5879245" data-follower="/api/web/follower/" data-following="/api/web/following/" data-comments="/api/web/comments/" data-send-msg="/api/web/slip/" data-follow-action="/api/web/follow_action/" data-start-courses="/api/web/courses/startcourses/" data-user-info="/api/web/user/profile" data-follower-number="0" data-following-number="2" data-course-studying="1" data-course-credential="0" data-comment-sponsor="0" data-comment-participant="0" data-left-bar="/dashboard/leftbar/"></div>












@endsection
    <script charset="utf-8" src="./geren_files/v.js.下载"></script>
		<script src="./geren_files/hm.js.下载" async="" defer=""></script>
		<script src="./geren_files/push.js.下载"></script>
		<script id="requirejs" src="./geren_files/require.2d213b58c463.js.下载"></script>
    <script src="./geren_files/appCommon.2ee048cac1c3.js.下载"></script>


    <script>
    var api_url = {
        courses: "/api/web/courses/mycourses",
        progress: "/api/web/courses/status",
        unfollow: "/api/web/course/{id}/follow",
        exit: "/api/web/course/{id}/enroll",
        leftnav: "/dashboard/leftbar/",
        recommend: "/api/web/courses/recommend?num=6",
    };
    </script>
	<script>
		var dashboardPrefileGetAttr = function(attribute){
			return document.getElementById('js_dashboard_other_prefile_page').getAttribute(attribute);
		}
		var dashboardPrefileDataObj = {//他人主页定义数据
			"startcourses":{
				title:'我的课程',
				limit:4,
				navlist:[
					{
						title:'正在学习',
						type:'studying',
						number:dashboardPrefileGetAttr('data-course-studying'),
						getUrl:dashboardPrefileGetAttr('data-start-courses'),
						notData:'您还没有正在学习的课程，<a href="/courses/">去选课</a>'
					},
					{
						title:'获得证书',
						type:'credential',
						number:dashboardPrefileGetAttr('data-course-credential'),
						getUrl:dashboardPrefileGetAttr('data-start-courses'),
						notData:'您还没有获得证书的课程'
					}
				],
				alllink:'/dashboard/course/'
			},
			"contact":{
				title:'我的人脉',
				limit:5,
				navlist:[
					{
						title:'我的关注',
						type:'no_show_list',
						number:dashboardPrefileGetAttr('data-following-number'),
						getUrl:dashboardPrefileGetAttr('data-following'),
						notData:'您还没有关注任何人，<a href="/community/">去找找感兴趣的同学</a>'
					},
					{
						title:'我的粉丝',
						type:'no_show_list',
						number:dashboardPrefileGetAttr('data-follower-number'),
						getUrl:dashboardPrefileGetAttr('data-follower'),
						notData:'还没有人关注您，<a href="/community/">去让大家认识下你吧</a>'
					}
				],
				alllink:'/dashboard/relation/'
			},
			"talk":{
				title:'我的讨论',
				limit:5,
				navlist:[
					{
						title:'我发布的',
						type:'sponsor',
						number:dashboardPrefileGetAttr('data-comment-sponsor'),
						getUrl:dashboardPrefileGetAttr('data-comments'),
						notData:'您还没有发布过讨论，<a href="/community/">去发言</a>'
					},
					{
						title:'我参与的',
						type:'participant',
						number:dashboardPrefileGetAttr('data-comment-participant'),
						getUrl:dashboardPrefileGetAttr('data-comments'),
						notData:'您还没有参与过讨论，<a href="/community/">去看看有什么新鲜事</a>'
					}
				],
				alllink:'/dashboard/discussion/'
			}
		}
	</script>
    <script src="{{ URL::asset('geren/dashboard.2cb40dba3386.js') }}"></script>

    <script src="{{ URL::asset('geren/analyticshost.20a224755bf9.js') }}"></script>
    <script>
      (function(){
        var bp = document.createElement('script');
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
      })();
    </script>
