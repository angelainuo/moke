<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta charset=utf-8"utf-8">
	<meta name="google-site-verification" content="e8WA0xc4_f57hKZBCIhOBrVMQhWVTgCLDry1AY_Ga-w" />
	<meta name="keywords" content="学堂在线, MOOC, 慕课, XuetangX, 清华大学, 北京大学, 在线教育, 大规模开放式在线课程, 在线学习," />
	<meta name="description" content="学堂在线是免费公开的MOOC（大规模开放在线课程）平台，是国家教育部MOOC研究中心官方合作平台，致力于通过来自国内外一流名校开设的免费网络学习课程，为公众提供系统的高等教育，让每一个中国人都有机会享受优质教育资源。通过和清华大学在线教育研究中心、以及国内外知名大学的紧密合作，学堂在线将不断增加课程的种类和丰富程度。" />
	<meta name="renderer" content="webkit"/>
    <meta property="qc:admins" content="27433770036055416706375" />
    <meta name="apple-itunes-app" content="app-id=911639256">
    <meta http-equiv="X-UA-Compatible" content="edge" />


		<meta name="viewport" content="width=1104" />



	<title>学堂在线-最大的中文慕课(MOOC)平台</title>


	<link rel="icon" type="image/x-icon" href="/static/images/favicon.a3220c63183d.ico" />
	<link href="{{ URL::asset('css/reset.a5f0fbe62f3b.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/index.c598dddc2602.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/forumproject.381f0489b532.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/courseabout.58dd313e99a6.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/index.aadc42de2b12.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/dashboard.ded75b0da000.css') }}" rel="stylesheet" type="text/css"/>

	<style>
		.top_inner, .top {
			background: #f6f3f3;
			position: relative;
		}
		.ewm {
			position: absolute;
			bottom: 140px;
			right: 163px;
		}
		.ewm p {
			text-align: center;
			color: #999;
			margin-top: 5px;
			font-size: 14px;
		}
		.download_link {
			position: absolute;
			bottom: 54px;
			right: 64px;
			font-size: 14px;
		}
		.download_link a {
			padding: 0 .5em;
		}
		.download_link a:hover {
			color: #8040ff;
		}
	</style>

</head>

<body class="school_list_page lang_en">
<header
		class="header_index header_not_index"
	id="header_bootstrap">

	<div id="py_header_data" class="hide"
	data-ajax="/header_ajax"
	data-blurajax="/check_register_params_v2"
	data-loginsubmit="/v2/login_ajax"
	data-registersubmit="/unify_create_account"
    data-phonecode="/phone/validate"
    data-server-time="2016-09-28 02:01:08Z"
	data-code=""
	></div>

	<div class="header_container" id="header_container">
		<div class="wrap cf">
			<div class="fl">
				<h1 class="fl">
					<a href="{{ URL('/') }}"  data-click="onClick" data-block="GLOBLNAV" data-element="1">
					<img src="{{ URL::asset('xuetang.png') }}" title="学堂在线" />
					</a>
				</h1>
				<ul class="cf fl header_container_nav">
					<li><a href="{{ URL('/courses') }}"  title="课程" data-click="onClick" data-block="GLOBLNAV" data-element="3">课程</a></li>
					<li><a href="{{ URL('/partners') }}"  title="院校" data-click="onClick" data-block="GLOBLNAV" data-element="3">院校</a></li>
					<li><a href="{{ URL('/community') }}"  title="院校" data-click="onClick" data-block="GLOBLNAV" data-element="3">广场</a></li>
					<li><a href="{{ URL('/cloud') }}"  title="院校" data-click="onClick" data-block="GLOBLNAV" data-element="3">学堂云</a></li>
					<li><a href="http://ykt.io/"  title="院校" data-click="onClick" data-block="GLOBLNAV" data-element="3">雨课堂</a></li>
					<li><a href="{{ URL('/mobile') }}"  title="院校" data-click="onClick" data-block="GLOBLNAV" data-element="3">APP下载</a></li>

					</ul>
            </div>
			<div class="fr header_container cf">
				<div id="header_login_register" class="fl cf">
					@if(session('user'))
					<a href="{{ URL('/geren/') }}">{{ session('user')->nickName }}</a>
					<span>|</span>
					<a href="{{ URL('/demo12') }}">退出</a>
					@else
							<li class="openlogin"><a href="http://www.jq22.com/" onclick="return false;">登录</a></li>

							<li class="reg"><a href="" onclick="return false;">注册</a></li>

					@endif
				</div>
            </div>
		</div>
	</div>
</header>
@yield("content")
<footer id="footer_bootstrap">
    <div class="copyright wrap">
        <div class="cf">
            <div class="text fl">
                <p>Copyright  2013-2016 北京慕华信息科技有限公司</p>
                <p><a "  title="京ICP证140571号" target="_blank">京ICP证140571号</a> | 京公网安备 11010802017721</p>
            </div>
            <div class="edx_logo cf fr">
                <a "  target="_blank"><img src="static/images/edx_logo.262fca70a49b.png" /></a>
            </div>
        </div>
    </div>
</footer>



    <script id="requirejs" src="{{ URL::asset('static/js/lib/require.2d213b58c463.js') }}"  ></script>
    <script src="{{ URL::asset('static/xuetangx/js/appCommon.2ee048cac1c3.js') }}"  ></script>
    <script src="{{ URL::asset('static/js/appSrc/index.1644602d699c.js') }}" ></script>
    <script src="{{ URL::asset('static/js/appSrc/analyticshost.20a224755bf9.js') }}"  ></script>
		<script src="{{ URL::asset('static/js/forumproject.2b2187422a79.js') }}"  ></script>
		<script src="{{ URL::asset('static/js/ueditor.all.min.3f392eb32a88.js') }}"  ></script>
		<script src="{{ URL::asset('static/js/ueditor.config.cd70a5f5226d.js') }}"  ></script>
		<script src="{{ URL::asset('js/courseabout.5caa91378d71.js') }}"  ></script>
		<script src="{{ URL::asset('js/hm.js') }}"  ></script>
		<script src="{{ URL::asset('js/push.js') }}"  ></script>

    <script>
      (function(){
        var bp = document.createElement('script');
        bp.src = '../push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
      })();
    </script>
</body>
</html>
Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Status Help
