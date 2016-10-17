

<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta charset=utf-8"utf-8">
	<meta name="google-site-verification" content="e8WA0xc4_f57hKZBCIhOBrVMQhWVTgCLDry1AY_Ga-w" />
    <meta name="keywords" content="学堂在线, MOOC，慕课，XuetangX, 清华大学，北京大学, 在线教育, 大规模开放式在线课程, 在线学习,"/>
    <meta name="description" content="学堂在线是免费公开的慕课（MOOC）平台，是国家教育部MOOC研究中心官方合作平台，致力于通过来自国内外一流名校开设的免费网络学习课程，为公众提供系统的高等教育，让每一个中国人都有机会享受优质教育资源。通过和清华大学在线教育研究中心、以及国内外知名大学的紧密合作，学堂在线将不断增加课程的种类和丰富程度。慕课，MOOC，中文。" />
	<meta name="renderer" content="webkit"/>
    <meta property="qc:admins" content="27433770036055416706375" />
    <meta name="apple-itunes-app" content="app-id=911639256, app-argument=https://itunes.apple.com/cn/app/xue-tang-zai-xian-guan-fang/id911639256?mt=8">
    <meta http-equiv="X-UA-Compatible" content="edge" />


		<meta name="viewport" content="width=1104" />



    <title>学堂在线-最大的中文慕课(MOOC)平台</title>

		<link href="{{ URL::asset('js/html5shiv.0ce8f355891c.js') }}" rel="stylesheet" type="text/js"/>
		<link href="{{ URL::asset('css/reset.a5f0fbe62f3b.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ URL::asset('css/index.c598dddc2602.css') }}" rel="stylesheet" type="text/css"/>
	<!-- <link rel="icon" type="image/x-icon" href="/static/images/favicon.a3220c63183d.ico" />
	<link rel="stylesheet" type="text/css" href="static/xuetangx/reset.a5f0fbe62f3b.css"  ">

    <link rel="stylesheet" type="text/css" href="static/css/index.c598dddc2602.css"  "> -->



	<!--[if lt IE 9]>
	<script type="text/javascript" src="static/js/html5shiv.0ce8f355891c.js"  "></script>
	<![endif]-->
</head>

<body class="search_page lang_en">








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
					<a href="index.htm"  " data-click="onClick" data-block="GLOBLNAV" data-element="1">
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
					<img class="ajax_loading" src="static/images/alert/loading.06c954eb64c3.gif"  " />
				</div>
            </div>
		</div>
	</div>
</header>










<section class="pagename hide" data-page="SEARCHPAGE_LIST"></section>
<div  class="search_page">
	<article>
		<div class="wrap">
			<div class="search_wrap">
				<section class="win">
					<div class="win_in">
						<div class="win_in_block cf">
							<h2>分类</h2>
                            <div class="fllist" data-block="FILTER#SUBJECT">
                                    <a href="courses-credential=0&page_type=0&process=0&org=0&course_mode=0.htm"  " class="current" title="" data-click="onClick" data-element="1">全部</a>
                                        <a href="courses-credential=0&page_type=0&cid=117&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="2">计算机</a>
                                        <a href="courses-credential=0&page_type=0&cid=118&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="3">经管·会计</a>
                                        <a href="courses-credential=0&page_type=0&cid=119&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="4">创业</a>
                                        <a href="courses-credential=0&page_type=0&cid=120&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="5">电子</a>
                                        <a href="courses-credential=0&page_type=0&cid=121&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="6">工程</a>
                                        <a href="courses-credential=0&page_type=0&cid=122&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="7">环境·地球</a>
                                        <a href="courses-credential=0&page_type=0&cid=123&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="8">医学·健康</a>
                                        <a href="courses-credential=0&page_type=0&cid=124&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="9">生命科学</a>
                                        <a href="courses-credential=0&page_type=0&cid=125&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="10">数学</a>
                                        <a href="courses-credential=0&page_type=0&cid=126&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="11">物理</a>
                                        <a href="courses-credential=0&page_type=0&cid=127&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="12">化学</a>
                                        <a href="courses-credential=0&page_type=0&cid=128&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="13">社科·法律</a>
                                        <a href="courses-credential=0&page_type=0&cid=129&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="14">文学</a>
                                        <a href="courses-credential=0&page_type=0&cid=130&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="15">历史</a>
                                        <a href="courses-credential=0&page_type=0&cid=131&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="16">哲学</a>
                                        <a "  " title="" data-click="onClick" data-element="17">艺术·设计</a>
                                        <a href="courses-credential=0&page_type=0&cid=133&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="18">外语</a>
                                        <a href="courses-credential=0&page_type=0&cid=134&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="19">教育</a>
                                        <a href="courses-credential=0&page_type=0&cid=135&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="20">其他</a>
                                        <a href="courses-credential=0&page_type=0&cid=201&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="21">大学先修课</a>
                                        <a href="courses-credential=0&page_type=0&cid=2550&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="22">公共管理</a>
                                        <a href="courses-credential=0&page_type=0&cid=2783&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="23">建筑</a>
                                        <a href="courses-credential=0&page_type=0&cid=2952&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="24">职场</a>
							</div>
						</div>
						<div class="win_in_block cf">
							<h2>学校</h2>
							<div class="fllist" data-block="FILTER#ORG">
                                <a href="courses-credential=0&page_type=0&cid=0&process=0&course_mode=0.htm"  " class="current" data-click="onClick" title="" data-element="1">全部</a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=29&course_mode=0.htm"  " title="" data-click="onClick" data-element="2">清华大学 </a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=51&course_mode=0.htm"  " title="" data-click="onClick" data-element="3">台湾交通大学 </a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=30&course_mode=0.htm"  " title="" data-click="onClick" data-element="4">MIT </a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=10&course_mode=0.htm"  " title="" data-click="onClick" data-element="5">Rice </a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=33&course_mode=0.htm"  " title="" data-click="onClick" data-element="6">UC Berkeley </a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=8&course_mode=0.htm"  " title="" data-click="onClick" data-element="7">Wellesley </a>
                                  <a href="courses-credential=0&page_type=0&cid=0&process=0&org=-1&course_mode=0.htm"  " title="" data-click="onClick" data-element="8">其它</a>
							</div>
						</div>
						<div class="win_in_block cf">
							<h2>模式</h2>
                            <div class="fllist" data-block="FILTER#MODE">
                                <a href="courses-credential=0&page_type=0&cid=0&process=0&org=0.htm"  " class="current" title="" data-click="onClick" data-element="1">全部</a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=0&course_mode=2.htm"  " title="随堂模式" data-click="onClick" data-element="2">随堂模式</a>
                                    <a href="courses-credential=0&page_type=0&cid=0&process=0&org=0&course_mode=1.htm"  " title="自主模式" data-click="onClick" data-element="3">自主模式</a>
							</div>
                          </div>

						<div class="win_in_block cf">
							<h2>权威</h2>
                            <div class="fllist" data-block="FILTER#CERTIFICATE">
                                    <a href="courses-page_type=0&cid=0&process=0&org=0&course_mode=0.htm"  " class="current" title="" data-click="onClick" data-element="1">全部</a>
                                        <a href="courses-credential=1&page_type=0&cid=0&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="2">签字认证</a>
                                        <a href="courses-credential=2&page_type=0&cid=0&process=0&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="3">认证开放</a>
							</div>
                        </div>
						<div class="win_in_block cf">
							<h2>状态</h2>
                            <div class="fllist" data-block="FILTER#PROCESS">
                                 <a href="courses-credential=0&page_type=0&cid=0&org=0&course_mode=0.htm"  " class="current" title="" data-click="onClick" data-element="1">全部</a>
                                   <a href="courses-credential=0&page_type=0&cid=0&process=1&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="2">即将开课</a>
                                   <a href="courses-credential=0&page_type=0&cid=0&process=2&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="3">已开课</a>
                                   <a href="courses-credential=0&page_type=0&cid=0&process=3&org=0&course_mode=0.htm"  " title="" data-click="onClick" data-element="4">已结课</a>
                          </div>
                        </div>
					</div>
				</section>
              </div>
			<section>
				<div class="mode_switch cf">
					<ul class="fr" data-block="LAYOUT">
            <li class="listmode currentlm" data-click="onClick" data-element="1"><a href="courses-credential=0&page_type=0&cid=0&process=0&org=0&course_mode=0.htm"  "></a></li>
            <li class="blockmode" data-click="onClick" data-element="2"><a href="courses-credential=0&page_type=1&cid=0&process=0&org=0&course_mode=0.htm"  "></a></li>
					</ul>
				</div>
				<div class="courses_list_mode">
                  <div class="list_mode_wrap wrap">
						<ul class="list_style" id="list_style" data-block="RESULT">
                            <li data-element="1">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/TsinghuaX/TSINGHUA101/_/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="c4x/TsinghuaX/TSINGHUA101/asset/images_course_image.jpg"  " alt="点击查看" title="点击查看" />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/TsinghuaX/TSINGHUA101/_/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">清华院系概览</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=134.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">教育学科</a>
        </span>
        <span class="fenlei">
          <a href="courses-cid=135.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">其他学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="c4x/TsinghuaX/TSINGHUA101/asset/xb.jpg"  " alt="清华大学教务处" title="清华大学教务处"/>
        </div>
        <div class="fl name">
          <p><span>清华大学教务处</span><span></span><span></span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>了解，比想象更美好。建筑、电子、经管、工物……清华的不同院系在这些名字背后有着怎样的特点？本课程将带你走进清华的各个院系，帮助你了解这些院系的特点、培养目标、研究成果、学生生活、就业去向等诸多方面。无需走进教室，就可领略清华大学74个院系不一样的风采。</p>
        <p class="ctxt"><span class="coursechapter">章节</span>生命学院 美术学院 医学院 法学院 经管学院 钱学森力学班 工程物理系 计算机系 热能系 机械系 机械工程（实验班） 交叉信息研究院 软件学院 精密仪器系 自动化系 汽车工程系</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2013-10-28 00:00:00+00:00" data-end=""
          data-enrollment-start="2013-05-31 16:00:00+00:00" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>20.4万人</span>
              <span class="ri-tag fl"><b class="list-icon">7</b>已更新至第16章</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="2">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/TsinghuaX/TSINGHUA102/_/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="c4x/TsinghuaX/TSINGHUA102/asset/images_course_image.jpg"  " alt="点击查看" title="点击查看" />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/TsinghuaX/TSINGHUA102/_/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">清华风物</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=134.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">教育学科</a>
        </span>
        <span class="fenlei">
          <a href="courses-cid=135.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">其他学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="c4x/TsinghuaX/TSINGHUA102/asset/qinchuan.jpg"  " alt="覃川" title="覃川"/>
        </div>
        <div class="fl name">
          <p><span>覃川副研究员</span><span>清华大学</span><span>新闻中心</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>《清华风物》旨在选取清华大学百年办学历程中所积淀下来的具有代表性的景观、建筑、纪念物及人物、团体、精神承载物等，秉持纵跨世纪、横贯东西的“大历史观”，以新颖的视角和人、景、事、情的浑然融合，艺术化地激活沉默的记忆，用影像铭刻和传承大学文化。在广泛传播清华校史校情的同时，旨在激发青年学生、教师、校友和广大社会同好的爱校爱国热情，实现“让历史告诉未来”的价值塑造功能。另一方面，也多维度地展示清华的校园风貌、精神文化和办学理念，树立良好的大学形象，推动大学文化的传承与创新。修习本课程，不但能了解清华园中富有教育意义和文化内涵的各类风物，也为学生深入探讨近现代国情和高度教育发展史、感受中国文化的魅力提供了独特的视角和体验。</p>
        <p class="ctxt"><span class="coursechapter">章节</span>1.清华园 2.工字厅 3.二校门 4.大礼堂 5.图书馆老馆 6.水木清华 7.古月堂 8.校训 9.闻亭和闻一多像 10.西南联大碑 11.科学馆 12.西体育馆 13.蒋南翔像 14.马约翰像 15.话剧 16.清华英烈碑 17.以身许国图 18. 清华学堂 19. 校友纪念物 20. 叶企孙像</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2015-04-26 00:00:00+00:00" data-end=""
          data-enrollment-start="2015-03-31 16:00:00+00:00" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>18.3万人</span>
              <span class="ri-tag fl"><b class="list-icon">7</b>已更新至第20章</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="3">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-TsinghuaX+20220332X+2016_T1/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-TsinghuaX+20220332X+2016_T1+type@asset+block@1-13042P95201.jpg"  " alt="点击查看" title="点击查看" />
      <img class="img-tag" src="../storage.xuetangx.com/xuetangx/site/common/signcertificate_tag.png"  " />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-TsinghuaX+20220332X+2016_T1/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">日语与日本文化</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=128.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">社科·法律学科</a>
        </span>
        <span class="fenlei">
          <a href="courses-cid=133.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">外语学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-TsinghuaX+20220332X+2016_T1+type@asset+block@fengfeng.jpg"  " alt="冯峰" title="冯峰"/>
        </div>
        <div class="fl name">
          <p><span>冯峰教授</span><span>清华大学</span><span>外文系</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>在中国近代史发展的进程中，日本超过世界上任何一个国家，成为了对中国影响最大的国家。日本文化对中国青少年的性格形成乃至文化认同感、价值观塑造方面所起到的影响不容小觑。从日本社会生活现象中学习并反观中国社会。重新认识日本国和日本人，从中日两国现代交往的种种矛盾现象中看清楚“岛国根性”与“大陆农耕民族”最根本的差异所在。对于一个国家的了解、与其交流或者认知，掌握这个国家、民族的文化甚至比单纯掌握这个国家的语言更为重要。在日语基础的学习过程中，比以往课堂教学更多地揉入对日本社会生活中的文化现象予以介绍和分析。语言部分预计学习指定教材的1-9课，学习日语的语音；基本句式；用言的词尾变化；助词、助动词的使用等。完成本课程后可以达到掌握日语自学基础。课程共计12个单元。本门课程线上与线下学生所用时间预计分别占20%和80%。日本文化和日语基础将由不同教师担任。</p>
        <p class="ctxt"><span class="coursechapter">章节</span>第一章 导引课</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2016-09-22 04:00:00+00:00" data-end=""
          data-enrollment-start="2015-12-29 16:00:00+00:00" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>2.9万人</span>
              <span class="ri-tag fl"><b class="list-icon">7</b>已更新至第1章</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="4">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/TsinghuaX/THESIS2014_1X/_2014_/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="c4x/TsinghuaX/THESIS2014_1X/asset/images_course_image.jpg"  " alt="点击查看" title="点击查看" />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/TsinghuaX/THESIS2014_1X/_2014_/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">清华大学研究生学位论文答辩(2014)</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=134.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">教育学科</a>
        </span>
        <span class="fenlei">
          <a href="courses-cid=135.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">其他学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="c4x/TsinghuaX/THESIS2014_1X/asset/xb.jpg"  " alt="清华大学研究生院" title="清华大学研究生院"/>
        </div>
        <div class="fl name">
          <p><span>清华大学研究生院</span><span></span><span></span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>学位论文答辩环节是研究生培养的重要环节，为了充分发挥该环节的育人作用，搭建学术交流的平台，进一步保障和提高研究生培养质量，清华大学研究生院从2014年春季学期申请学位的博士、硕士研究生中选取了部分具有代表性的学位论文答辩进行录像，并首次将答辩视频上传学堂在线，以使更多的人能够分享这些资源，搭建更为广阔的学术交流平台。
本学期将会有来自经管学院、五道口金融学院、化学系、马克思主义学院、建筑学院、人文学院、交叉信息研究院、航天航空学院、计算机系、工程物理系、自动化系、物理系、新闻学院等不同院系的二十余名博士、硕士研究生的学位论文答辩视频，涵盖十余个学科。
如果这些视频能对您的学术研究有所帮助和启发，则是我们十分期待并愿意看到的事。</p>
        <p class="ctxt"><span class="coursechapter">章节</span>第1周 经管学院 第2周 化学系、金融学院、马院 第3周 工物系、自动化系、建筑学院 第4周 建筑学院、航院、自动化系、计算机系、信研院 第5周 环境学院、人文学院、物理系</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2014-06-10 01:00:00+00:00" data-end="2015-01-09 16:00:00+00:00"
          data-enrollment-start="2014-06-04 16:00:00+00:00" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>2.1万人</span>
              <span class="ri-tag fl"><b class="list-icon">V</b>2小时/周</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="5">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-ACCA+FA1-MA1_X+2016_T2/about-1.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-ACCA+FA1-MA1_X+2016_T2+type@asset+block@ACCA_FA1-MA1_X.png"  " alt="点击查看" title="点击查看" />
      <img class="img-tag" src="../storage.xuetangx.com/xuetangx/site/common/signcertificate_tag.png"  " />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-ACCA+FA1-MA1_X+2016_T2/about-1.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">初级财务和管理会计</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=118.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">经管·会计学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-ACCA+FA1-MA1_X+2016_T2+type@asset+block@barry_walsh-110x110.png"  " alt=" Barry Walsh" title=" Barry Walsh"/>
        </div>
        <div class="fl name">
          <p><span> Barry Walsh特聘专家</span><span>ACCA</span><span>New Ventures</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>

	财务及管理会计初级课程（FA1/MA1）， 财务与管理会计初级课程对未来的商业领导者、会计师和企业家来说是理想的入门课程。快来注册，开启学习之旅。您会学到：




			商业交易、银行系统和复式记账法




			工资和分类账目




			对账和编制试算表




			成本和管理会计的本质及目的




			怎样记录成本并将成本分类




			怎样使用电子表格




	注意：本课程通过“仅加课”模式注册报名，可以阅读全部学习资料、观看视频、参加考核，但不提供免费结课证明。认证模式服务费为499元，如通过考核可以获得电子证书和纸质证书。

</p>
        <p class="ctxt"><span class="coursechapter">章节</span>课程定位Course orientation FA1 Week 1 FA1 Week 2 FA1 Week 3 FA1 Week 4 FA1 Week 5 Module closing section模块结束章节 MA1 Week 1 MA1 Week 2 MA1 Week 3 MA1 Week 4 MA1 Week 5 模块结束章节Module closing section 教师素材Tutor Materials 课程结束章节Course closing section</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2016-09-19 00:00:00+00:00" data-end="2016-12-31 00:00:00+00:00"
          data-enrollment-start="2016-08-07 16:00:00+00:00" data-enrollment-end="2016-12-31 00:00:00+00:00"><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>1.9万人</span>
              <span class="ri-tag fl"><b class="list-icon">7</b>已更新至第3章</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="6">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-TsinghuaX+90640012X+2016_T2/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-TsinghuaX+90640012X+2016_T2+type@asset+block@images_course_image.png"  " alt="点击查看" title="点击查看" />
      <img class="img-tag" src="../storage.xuetangx.com/xuetangx/site/common/signcertificate_tag.png"  " />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-TsinghuaX+90640012X+2016_T2/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">生活英语进阶</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=133.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">外语学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-TsinghuaX+90640012X+2016_T2+type@asset+block@杨芳.jpg"  " alt="杨芳" title="杨芳"/>
        </div>
        <div class="fl name">
          <p><span>杨芳副教授</span><span>清华大学</span><span>外国语言文学系</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>语言作为一种载体，渗透在不同学科的学术研究中。掌握学科专业词汇，并且流畅自如地介绍领域学术研究，对于学术研究者来说是必备的一种能力。本课程邀请了来自清华大学不同专业的博士研究生，带领大家一起走进不同学科的英语世界。本课程精心挑选了8个研究主题，涵盖了文、史、理、工学科大类，分别是：幸福论、3D打印、清华园中的老先生、无线充电技术、故宫建筑解析、艺术史、生活理财等话题，对应了心理学、机械、人文、电子、能源、建筑、美术、金融等大学常见学科。每个单元由主题研究介绍、小组主题研讨、学术词汇讲解、情景对话、专业词汇讲解以及学术写作技巧等模块构成。主题研究介绍部分为来自不同专业的博士研究生为大家讲解各学科最新、最时髦的研究动态，内容生动有趣；小组主题研讨部分模拟国际学术报告场景，针对主题研究作进一步探讨；情景对话部分在真实生活场景中对主题研究进行演绎，贴近生活；词汇讲解部分分为学术词汇和专业词汇，丰富大家的词汇库；为了提高研究者的科技论文写作能力，我们还设置了学术写作模块，由老师为大家精心讲解学术写作常用方法和技巧。让我们一起感受不同学科中英语的魅力吧！</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2016-12-01 00:00:00+00:00" data-end=""
          data-enrollment-start="2015-10-31 16:00:00+00:00" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>1.8万人</span>
              <span class="ri-tag fl"><b class="list-icon">V</b>4小时/周</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="7">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-TsinghuaX+THESIS2015X+2015_T1/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-TsinghuaX+THESIS2015X+2015_T1+type@asset+block@images_course_image.jpg"  " alt="点击查看" title="点击查看" />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-TsinghuaX+THESIS2015X+2015_T1/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">清华大学研究生学位论文答辩(2015)</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=134.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">教育学科</a>
        </span>
        <span class="fenlei">
          <a href="courses-cid=135.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">其他学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-TsinghuaX+THESIS2015X+2015_T1+type@asset+block@grad.jpg"  " alt="清华大学研究生院" title="清华大学研究生院"/>
        </div>
        <div class="fl name">
          <p><span>清华大学研究生院</span><span></span><span></span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>学位论文答辩环节是研究生培养的重要环节，为了充分发挥该环节的育人作用，搭建学术交流的平台，进一步保障和提高研究生培养质量，清华大学研究生院从2014年开始，从申请学位的博士、硕士研究生中选取了部分具有代表性的学位论文答辩进行录像，并首次将答辩视频上传学堂在线，获得了社会各界的认可和积极反响。2015年，清华大学将继续这一形式，遴选不同专业的博士、硕士研究生的学位论文答辩视频，继续以MOOC形式共享呈现给大家，以使更多的人能够分享这些资源，搭建更为广阔的学术交流平台。如果这些视频能对您的学术研究有所帮助和启发，则是我们十分期待并愿意看到的事。</p>
        <p class="ctxt"><span class="coursechapter">章节</span>第1周 化工系、热能系、航院、土木系 第2周 机械系、自动化系、交叉信息学院 第3周 水利系、微纳电子系、工物系、材料学院、医学院、法学院</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2015-06-26 10:00:00+00:00" data-end=""
          data-enrollment-start="" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>1.6万人</span>
              <span class="ri-tag fl"><b class="list-icon">7</b>已更新至第3章</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="8">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-TsinghuaX+30640014X+2016_T2/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-TsinghuaX+30640014X+2016_T2+type@asset+block@生活英语听说_2016秋_.jpg"  " alt="点击查看" title="点击查看" />
      <img class="img-tag" src="../storage.xuetangx.com/xuetangx/site/common/signcertificate_tag.png"  " />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-TsinghuaX+30640014X+2016_T2/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">生活英语听说（2016秋）</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=133.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">外语学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-TsinghuaX+30640014X+2016_T2+type@asset+block@zhangwenxia.jpg"  " alt="张文霞" title="张文霞"/>
        </div>
        <div class="fl name">
          <p><span>张文霞教授</span><span>清华大学</span><span>外国语言文学系</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>
	语言最重要的功能就是交流。在交流中我们要知道如何开始一个对方感兴趣的话题，回答别人的提问，自然、流畅地完成一个对话。本课程选取了8个主题，由50多位来自美国、英国、加拿大、澳大利亚、哥伦比亚、中国的老师及各个年龄段的学生，在真实的场景中，用最地道的表达和最纯正的英语，带你谈论日常生活、学习的方方面面。


	本课程分为八个单元，每个单元有一个主题，分别是：


	1、个人信息的介绍与交换


	2、我们的家人和朋友


	3、饮食与用餐


	4、英语学习的目的和方法


	5、假日活动和难忘的经历


	6、兴趣爱好


	7、情感表达


	8、保持健康


	每个主题由十余组对话和小组讨论，外籍老师的中西方文化差异介绍，中国老师的重点词汇、句型讲解，听力理解练习和口语测试构成。通过学习和练习，你将可以和讲英语的朋友们自如地交谈、讨论与主题相关的任何问题。本课程的学习方法有很多。英语学习者可以在反复地听和跟读对话的过程中，不断积累语言素材，和你身边的朋友或同课程的学习者进行对话练习；英语教师可以选用本课程中适合的主题，组织学生进行听说训练，组织高效课堂。也许你不能理解每段对话的全部内容，只需听懂大意，随着课程的进展，你听懂的内容会越来越多。让我们一起实现一次英语听说的飞跃吧。


	本门课程在制作过程中得到了香港伟新教育基金和Google公司的资助，特此鸣谢。
</p>
        <p class="ctxt"><span class="coursechapter">章节</span>调查问卷 Unit 1 You Say, I Say Unit 2 The People in Your Life Unit 3 Eating in and Eating out Unit 4 Why Do You Want to Learn English Unit 5 Good Times and Bad Times Unit 6 Hobbies Unit 7 Feeling Unit 8 Staying Healthy 期末复习题 期末考试</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">+</b>随堂模式</span>
          <span class="ri-tag fl" data-start="2016-09-12 00:00:00+00:00" data-end="2017-01-05 04:00:00+00:00"
          data-enrollment-start="2016-07-18 00:00:00+00:00" data-enrollment-end=""><b class="list-icon">$</b></span>
            <span class="ri-tag fl"><b class="list-icon">g</b>1.6万人</span>
              <span class="ri-tag fl"><b class="list-icon">7</b>已更新至第4章</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="9">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-NTHU+MOOC_00_005+sp/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-NTHU+MOOC_00_005+sp+type@asset+block@images_course_image.jpg"  " alt="点击查看" title="点击查看" />
      <img class="img-tag" src="../storage.xuetangx.com/xuetangx/site/common/signcertificate_tag.png"  " />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-NTHU+MOOC_00_005+sp/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">财务管理（自主模式）</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=118.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">经管·会计学科</a>
        </span>
        <span class="fenlei">
          <a href="courses-cid=119.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">创业学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-NTHU+MOOC_00_005+sp+type@asset+block@林哲群20151217老師.jpg"  " alt="林哲群" title="林哲群"/>
        </div>
        <div class="fl name">
          <p><span>林哲群教授</span><span>台湾清华大学</span><span>计量财务金融学系</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>
	本课程由最基础的财务报表、比率分析开始，让学生明了最实用的财务知识，进而引领学生了解公司的内部治理与投资决策，并结合当下时事培养学生对金融议题的敏感度。
</p>
        <p class="ctxt"><span class="coursechapter">章节</span>(一) 财务报表Ⅰ (二) 财务报表Ⅱ (三) 财务规划及营运资金管理 (四) 公司评价 期中考 (五) 投资策略 (六) 企业并购 (七) 财务专题Ⅰ (八) 财务专题Ⅱ 期末考</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">8</b>自主课程</span>
          <span class="ri-tag fl"><b class="list-icon">$</b>可随时加入</span>
          <span class="ri-tag fl"><b class="list-icon">g</b>1.4万人</span>
          <span class="ri-tag fl"><b class="list-icon">7</b>课件全部开放</span>
        </p>
    </div>
  </div>
</div>

                            </li>
                            <li data-element="10">



<div class="list_inner cf">
  <div class="img fl">
    <a href="courses/course-v1-HIT+13SC20301820+sp/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE">
      <img class="course-cover" src="asset-v1-HIT+13SC20301820+2015_T2+type@asset+block@thumbnail.jpg"  " alt="点击查看" title="点击查看" />
      <img class="img-tag" src="../storage.xuetangx.com/xuetangx/site/common/signcertificate_tag.png"  " />
    </a>
  </div>
  <div class="fl list_inner_right cf">
    <div class="coursename">
      <a href="courses/course-v1-HIT+13SC20301820+sp/about.htm"  " alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">会计信息系统（自主模式）</h2></a>
      <div class="coursename_ref">
        <span class="fenlei">
          <a href="courses-cid=118.htm"  " target="_blank" data-click="onClick" data-description="CATEGORY">经管·会计学科</a>
        </span>
      </div>
      <div class="cf teacher">
        <div class="fl">
          <img src="asset-v1-HIT+13SC20301820+sp+type@asset+block@aiwenguo110.png"  " alt="艾文国" title="艾文国"/>
        </div>
        <div class="fl name">
          <p><span>艾文国教授</span><span>哈尔滨工业大学</span><span>管理学院</span>
          </p>
        </div>
      </div>
      <div class="txt_all">
        <p class="txt"><span class="courseintro">简介</span>“会计信息系统”是会计学专业必修的核心课程。课程使学生掌握会计信息系统的基本理论：会计软件的研发方法与流程、系统设计思想、系统结构和应具备的基本功能，以及数据存储设计，输入输出设计等。掌握会计信息系统的系统划分，各系统的分析、设计以及系统之间的关联。会计信息系统的基本理论、方法和设计思想不会因信息平台的更新而变化。无论网络结构如何变化，是局域网，还是广域网，移动平台、大数据、云计算等等，都不会改变会计信息系统的基本理论、方法和设计思想,会计信息系统的数据储存结构、处理流程、基本功能和内部机理都不会发生变化。课程重点是要求学生掌握会计信息系统的基本原理和方法，包括：账套与基础数据管理、凭证管理、出纳管理、账簿管理、报表管理、系统运行管理与系统实施，深入理解系统的设计思想和方法。为将来参加实际工作奠定坚实的理论基础。</p>
        <p class="ctxt"><span class="coursechapter">章节</span>《会计信息系统》课程导学 第一章：会计信息系统概论（7学时） 第1.1节：会计信息系统的概念（重点） 第1.2节：国内外会计信息化综述 第1.3节：会计信息系统的开发方法与开发工具 第1.4节：会计信息系统组成与处理流程（重点） 第二章：账套与基础数据管理（5学时） 第2.1节：账套管理（重点） 第2.2节：会计科目数据管理（重点） 第2.3节：部门与币种数据管理 第2.4节：往来数据管理（重点） 第2.5节：项目数据管理（重点） 第三章：凭证管理（10学时） 第3.1节：凭证管理功能（重点） 第3.2节：凭证生成（重点） 第3.3节：凭证查询与汇总 第3.4节：凭证审核与记账（重点） 第3.5节：期末转账功能 第3.6节：自定义转账（不考核） 第3.7节：对应结转 第3.8节：主营业务成本结转 第3.9节：汇兑损益结转 第3.10节：期间损益结转 第四章：出纳管理（4学时） 第4.1节：出纳管理功能（重点） 第4.2节：出纳账表（重点） 第4.3节：银行对账 第五章：账簿管理（8学时） 第5.1节：科目总账与余额表（重点） 第5.2节：科目明细账（重点） 第5.3节：部门账表 第5.4节：往来账表（重点） 第5.5节：项目账表 第六章：报表管理（7学时） 第6.1节：报表管理功能（重点） 第6.2节：报表管理基本概念（不考核） 第6.3节：表样格式定义 第6.4节：表样公式定义（重点） 第6.5节：报表数据处理 第6.6节：XBRL财务报告（不考核） 第七章：系统运行管理与系统实施（5学时） 第7.1节：系统功能授权管理（重点） 第7.2节：系统数据授权管理 第7.3节：权限验证与运行日志 第7.4节：系统数据管理（重点） 第7.5节：系统实施（重点） 课程期末考核（每题1分共50分）</p>
      </div>
        <p class="ref_info cf">
          <span class="ri-tag fl"><b class="list-icon">8</b>自主课程</span>
          <span class="ri-tag fl"><b class="list-icon">$</b>可随时加入</span>
          <span class="ri-tag fl"><b class="list-icon">g</b>1.4万人</span>
          <span class="ri-tag fl"><b class="list-icon">7</b>课件全部开放</span>
        </p>
    </div>
  </div>
</div>

                            </li>
						</ul>
					</div>
				</div>
				<div id="list_pager" class="pager">
                </div>
              </section>
		</div>
      </article>

<section id="loginData" class="hide"
         data-currentpage = "1"
         data-pagecount = "89.7"
         data-href="courses-credential=0&page_type=0&cid=0&process=0&org=0&course_mode=0.htm"  "
		>
</section>
<div class="hide" id="js_xsy_new_course_search"></div>










<footer id="footer_bootstrap">
    <div class="copyright wrap">
        <div class="cf">
            <div class="text fl">
                <p>Copyright  2013-2016 北京慕华信息科技有限公司</p>
                <p><a "  " title="京ICP证140571号" target="_blank">京ICP证140571号</a> | 京公网安备 11010802017721</p>
            </div>
            <div class="edx_logo cf fr">
                <a "  " target="_blank"><img src="static/images/edx_logo.262fca70a49b.png"  /></a>
            </div>
        </div>
    </div>
</footer>



    <script id="requirejs" src="{{ asset('static/js/lib/require.2d213b58c463.js') }}" ></script>
    <script src="{{　asset('static/xuetangx/js/appCommon.2ee048cac1c3.js') }}"></script>
     <script src="{{ asset('static/xuetangx/js/index.aae84f7c949c.js') }}" ></script>
    <script src="{{ asset('static/js/appSrc/analyticshost.20a224755bf9.js') }}"   ></script>
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
