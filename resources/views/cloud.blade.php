

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
	<link href="{{ URL::asset('js/html5shiv.0ce8f355891c.js') }}" rel="stylesheet" type="text/js"/>
	<link href="{{ URL::asset('css/reset.a5f0fbe62f3b.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('css/cloud.20151125.css') }}" rel="stylesheet" type="text/css"/>
	<!-- <link rel="icon" type="image/x-icon" href="/static/images/favicon.a3220c63183d.ico" />
	<link rel="stylesheet" type="text/css" href="static/xuetangx/reset.a5f0fbe62f3b.css" >

    <link rel="stylesheet" type="text/css" href="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/cloud.20151125.css" > -->



	<!--[if lt IE 9]>
	<script type="text/javascript" src="static/js/html5shiv.0ce8f355891c.js" ></script>
	<![endif]-->
</head>

<body class="index lang_en">








<header
		class="header_index header_not_index"
	id="header_bootstrap">

	<div id="py_header_data" class="hide"
	data-ajax="/header_ajax"
	data-blurajax="/check_register_params_v2"
	data-loginsubmit="/v2/login_ajax"
	data-registersubmit="/unify_create_account"
    data-phonecode="/phone/validate"
    data-server-time="2016-09-28 02:01:56Z"
	data-code=""
	></div>

	<div class="header_container" id="header_container">
		<div class="wrap cf">
			<div class="fl">
				<h1 class="fl">
					<a href="index.htm"  data-click="onClick" data-block="GLOBLNAV" data-element="1">
					<img src="" title="学堂在线" />
					</a>
				</h1>
				<ul class="cf fl header_container_nav">
					<li>
							<a title="课程" data-click="onClick" data-block="GLOBLNAV" data-element="2">
								<form action="/1" method="post">
								<input type="hidden" name="_token" value='<?php echo csrf_token() ?>'>
								<input type='hidden' name='_method' value='post'>
								<input type="submit" value="课程" style="background-color:transparent ">
							</form>
						</a>
					</li>
					<li>
							<a title="院校" data-click="onClick" data-block="GLOBLNAV" data-element="2">
								<form action="/2" method="post">
								<input type="hidden" name="_token" value='<?php echo csrf_token() ?>'>
								<input type='hidden' name='_method' value='post'>
								<input type="submit" value="院校" style="background-color:transparent ">
							</form>
						</a>
					</li>
					<li>
							<a title="课程" data-click="onClick" data-block="GLOBLNAV" data-element="2">
								<form action="/1" method="post">
								<input type="hidden" name="_token" value='<?php echo csrf_token() ?>'>
								<input type='hidden' name='_method' value='post'>
								<input type="submit" value="课程" style="background-color:transparent ">
							</form>
						</a>
					</li>
					<li>
							<a title="课程" data-click="onClick" data-block="GLOBLNAV" data-element="2">
								<form action="/4" method="post">
								<input type="hidden" name="_token" value='<?php echo csrf_token() ?>'>
								<input type='hidden' name='_method' value='post'>
								<input type="submit" value="学堂云" style="background-color:transparent ">
							</form>
						</a>
					</li>
					<li>
							<a title="课程" data-click="onClick" data-block="GLOBLNAV" data-element="2">
								<form action="/1" method="post">
								<input type="hidden" name="_token" value='<?php echo csrf_token() ?>'>
								<input type='hidden' name='_method' value='post'>
								<input type="submit" value="课程" style="background-color:transparent ">
							</form>
						</a>
					</li>
					<li>
							<a title="课程" data-click="onClick" data-block="GLOBLNAV" data-element="2">
								<form action="/6" method="post">
								<input type="hidden" name="_token" value='<?php echo csrf_token() ?>'>
								<input type='hidden' name='_method' value='post'>
								<input type="submit" value="APP下载" style="background-color:transparent ">
							</form>
						</a>
					</li>
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










<div class="xty_content">
  <!-- 会向上动的banner背景 -->
  <div class="banner" id="banner"></div>
  <!-- 会向上动的banner背景 END -->

  <!-- 占据banner行的学堂云图片 -->
  <div class="banner_row">
    <div class="xty_img"></div>
 </div>
  <!-- 占据banner行的学堂云图片 END -->

  <div class="cont_wrap">
   <!-- 中部定宽1100的内容部分 -->
    <div class="cont">

      <!-- 我们的优势 -->
      <div class="advantage container">
       <h3 class="title">我们的优势</h3>

        <div class="advs row">

          <!-- 课程 -->
         <div class="col-sm-8">
            <div class="itm">
             <div class="pic">
               <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/kc.png"  alt="课程">
              </div>
              <div class="desc">
                <h4>学堂系列课程</h4>
               <p>最顶尖的国内外<br>优质课程学校间共享</p>
             </div>
            </div>
          </div>
          <!-- 课程 END -->

         <!-- 平台 -->
         <div class="col-sm-8">
            <div class="itm">
             <div class="pic">
               <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/pt.png"  alt="平台">
              </div>
              <div class="desc">
                <h4>学堂云平台</h4>
                <p>最尖端的大数据分析技术<br>与开放式框架</p>
              </div>
            </div>
          </div>
          <!-- 平台 END -->

         <!-- 服务 -->
         <div class="col-sm-8">
            <div class="itm">
             <div class="pic">
               <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/fw.png"  alt="服务">
              </div>
              <div class="desc">
                <h4>教学支持服务</h4>
               <p>最前沿的混合式教学案例<br>分享信息与教学全过程配套服务</p>
              </div>
            </div>
          </div>
          <!-- 服务 END -->

       </div>

      </div>
      <!-- 我们的优势 END -->

      <!-- 会动的 我们的亮点 -->
      <div class="bright_wrap container">

       <!-- 校园平台 -->
       <div class="xypt itm" id="xypt">
          <div class="title" data-role="title">
           <h3>校园平台</h3>
           <p>翻转教学、混合式教学<br>实践平台</p>
         </div>

          <div class="slide_pic pic1" data-role="pic1">
           <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/slide/1.png"  alt="清华">
         </div>
          <div class="slide_pic pic2" data-role="pic2">
           <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/slide/2.png"  alt="复旦">
         </div>
          <div class="slide_pic pic3" data-role="pic3">
           <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/slide/3.png"  alt="东南大学">
         </div>
        </div>
        <!-- 校园平台 END -->

       <!-- 大数据服务 -->
        <div class="dsjfw itm" id="dsjfw">
          <div class="title" data-role="title">
           <h3>大数据服务</h3>
            <p>专业、实时的教学数据分析</p>
         </div>

          <div class="slide_pic pic4"  data-role="pic1">
            <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/slide/4.png"  alt="大数据服务">
          </div>
          <div class="slide_pic pic5"  data-role="pic2">
            <img src="../storage.xuetangx.com/public_assets/xuetangx/event/cloud/slide/5.png"  alt="大数据服务">
          </div>
        </div>
        <!-- 大数据服务 END -->

      </div>
      <!-- 会动的 我们的亮点 END -->

      <a class="reg_btn" "  target="_blank">申请试用</a>
      <div class="reg_btn_desc">
        注：仅接受学校 / 机构 / 公司的 <strong>相关负责人</strong> 或 <strong>老师</strong> 申请；<br>
        <strong>不接受学生申请</strong>；下列已合作院校不能再申请。
      </div>

    </div>
    <!-- 中部定宽1100的内容部分 END -->
  </div>

  <!-- 合作院校 -->
  <div class="partner">
    <h3 class="title">合作伙伴</h3>
    <div class="container">
      <nav>
        <div class="nav-wrap">
          <ul>
            <li><a href="javascript:void(0)" class="current">高校</a></li>
            <li><a href="javascript:void(0)">公司·机构</a></li>
            <li><a href="javascript:void(0)">中小学</a></li>
            <li><a href="javascript:void(0)">联盟</a></li>
          </ul>
        </div>
      </nav>
      <div class="block">
        <label>高校</label>
        <ul class="list row"></ul>
      </div>
      <div class="block">
        <label>公司·机构</label>
        <ul class="list row"></ul>
      </div>
      <div class="block">
        <label>中小学</label>
        <ul class="list row"></ul>
      </div>
      <div class="block">
        <label>联盟</label>
        <ul class="list row"></ul>
      </div>
    </div>
  </div>
  <!-- 合作院校 END -->

</div>










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

    <script> require(['../storage.xuetangx.com/public_assets/xuetangx/event/cloud/xty.20151125.js'</script>


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
