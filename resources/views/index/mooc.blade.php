<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta charset=utf-8"utf-8">
	<meta name="google-site-verification" content="e8WA0xc4_f57hKZBCIhOBrVMQhWVTgCLDry1AY_Ga-w" />
	<meta name="keywords" content="学堂在线, MOOC, 慕课, XuetangX, 清华大学, 北京大学, 在线教育, 大规模开放式在线课程, 在线学习," />
	<meta name="description" content="学堂在线是免费公开的MOOC（大规模开放在线课程）平台，是国家教育部MOOC研究中心官方合作平台，致力于通过来自国内外一流名校开设的免费网络学习课程，为公众提供系统的高等教育，让每一个中国人都有机会享受优质教育资源。通过和清华大学在线教育研究中心、以及国内外知名大学的紧密合作，学堂在线将不断增加课程的种类和丰富程度。" />
	<meta name="renderer" content="webkit"/>
    <meta property="qc:admins" content="27433770036055416706375" />
    <meta name="apple-itunes-app" content="app-id=911639256, app-argument=https://itunes.apple.com/cn/app/xue-tang-zai-xian-guan-fang/id911639256?mt=8">
    <meta http-equiv="X-UA-Compatible" content="edge" />


		<meta name="viewport" content="width=1104" />



	<title>学堂在线-最大的中文慕课(MOOC)平台</title>


	<link rel="icon" type="image/x-icon" href="/static/images/favicon.a3220c63183d.ico" />
	<link href="{{ URL::asset('css/reset.a5f0fbe62f3b.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/index.c598dddc2602.css') }}" rel="stylesheet" type="text/css"/>

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
					<a href="index.htm"  data-click="onClick" data-block="GLOBLNAV" data-element="1">
					<img src="xuetang.png" title="学堂在线" />
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
				<form class="header_container_search fl cf" id="header_search" method="get" action="https://www.xuetangx.com/courses/search" data-block="GLOBLNAV" data-description="TOSEARCH">
					<input class="fl" type="search" name="query" placeholder="课程、老师、学校" autocomplete="off">
                    <button class="header_container_submit fl"></button>
                    <div class="search_header_suggestion" style="display: none;"></div>
				</form>
				<div id="header_login_register" class="fl cf">
					<img class="ajax_loading" src="static/images/alert/loading.06c954eb64c3.gif"  />
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



    <script id="requirejs" src="static/js/lib/require.2d213b58c463.js"  ></script>
    <script src="static/xuetangx/js/appCommon.2ee048cac1c3.js"  ></script>
     <script src="static/js/appSrc/index.1644602d699c.js" ></script>
    <script src="static/js/appSrc/analyticshost.20a224755bf9.js"  ></script>
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
