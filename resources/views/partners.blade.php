

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
	<!-- <link rel="stylesheet" type="text/css" href="static/xuetangx/reset.a5f0fbe62f3b.css" >

    <link rel="stylesheet" type="text/css" href="static/css/index.c598dddc2602.css" > -->



	<!--[if lt IE 9]>
	<script type="text/javascript" src="static/js/html5shiv.0ce8f355891c.js" ></script>
	<![endif]-->
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











<div id="banner">
	<ul class="cf">
    <li data-img="/tsh_banner.2167ad1abec9.jpg">
			<div class="txt txt_on">
        <h3>清华大学</h3>
        <p>"自强不息 厚德载物"</p>
        <a href="courses-org=29-1.htm"  title="清华大学">浏览课程</a>
			</div>
		</li>
    <li data-img="/banner-pku.bacf62e6a403.jpg">
			<div class="txt txt_on">
        <h3>北京大学</h3>
        <p>"爱国、进步、民主、科学"</p>
        <a href="courses-org=31-1.htm"  title="北京大学">浏览课程</a>
			</div>
		</li>
    <li data-img="/banner-ucb.332f1b4d12e3.jpg">
			<div class="txt txt_on">
        <h3>加州大学伯克利分校</h3>
        <p>"Fiat Lux 让此地闪耀"</p>
        <a href="courses-org=33-1.htm"  title="加州大学伯克利分校">浏览课程</a>
			</div>
		</li>
	</ul>
</div>
<article class="hz_school_w">
	<section class="wrap hz_school">
		<h2>合作院校</h2>
		<ul class="cf">
			<li>
                <a href="courses-org=29-1.htm"  title="清华大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/tsh.cefcd8351cee.png"  alt="清华大学慕课" title="清华大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>清华大学</h3>
                        <p>196门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=49-1.htm"  title="清华慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/NTHU.e8d14689270f.png"  alt="清华慕课" title="清华慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>台湾清华大学</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=51-1.htm"  title="台湾交大慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/NCTU.33a1c152f2e1.png"  alt="台湾交大慕课" title="台湾交大慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>台湾交通大学</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=39-1.htm"  title="斯坦福大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/stanford.c972f61328fa.png"  alt="斯坦福大学慕课" title="斯坦福大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>斯坦福大学</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=40-1.htm"  title="西安交大慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/XJTU.6b39f2a5819e.png"  alt="西安交大慕课" title="西安交大慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>西安交通大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=48-1.htm"  title="中南财经政法大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/ZUEL.3d24aa098859.png"  alt="中南财经政法大学慕课" title="中南财经政法大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>中南财经政法大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=53-1.htm"  title="复旦大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/FDU.5e804915501a.png"  alt="复旦大学慕课" title="复旦大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>复旦大学</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=57-1.htm"  title="北理工慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/BIT.2efac31c125a.png"  alt="北理工慕课" title="北理工慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>北京理工大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=42-1.htm"  title="中国科技大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/ustcX.9d03f42860cf.png"  alt="中国科技大学慕课" title="中国科技大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>中国科学技术大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=50-1.htm"  title="吉林大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/JLUx.0d84fa038c20.png"  alt="吉林大学慕课" title="吉林大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>吉林大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=92-1.htm"  title="中国农业大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/CAU.2d148f460a4a.png"  alt="中国农业大学慕课" title="中国农业大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>中国农业大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=59-1.htm"  title="华南理工大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/SCUT.e326d7398ca7.png"  alt="华南理工大学慕课" title="华南理工大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>华南理工大学</h3>
                        <p>0门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=56-1.htm"  title="哈尔滨工业大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/HIT.e26ada5e4d19.png"  alt="哈尔滨工业大学慕课" title="哈尔滨工业大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>哈尔滨工业大学</h3>
                        <p>10门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=98-1.htm"  title="山东大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/SDUx.5651e0550c5a.png"  alt="山东大学慕课" title="山东大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>山东大学</h3>
                        <p>7门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=108-1.htm"  title="苏州大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/SCU.fe98c0f7cc3d.png"  alt="苏州大学慕课" title="苏州大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>苏州大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=114-1.htm"  title="东南大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/SEU.dad8f95987ba.png"  alt="东南大学慕课" title="东南大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>东南大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=118-1.htm"  title="台湾云林科技大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/YunTech.20b300430be2.png"  alt="台湾云林科技大学慕课" title="台湾云林科技大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>台湾云林科技大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=181.htm"  title="武汉大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/WHU.bd8d04c0ce9a.png"  alt="武汉大学慕课" title="武汉大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>武汉大学</h3>
                        <p>0门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=335.htm"  title="华中科技大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/HUST.e23bdf422f3f.png"  alt="华中科技大学慕课" title="华中科技大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>华中科技大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=338.htm"  title="同济大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/TJU.abbc7b8f9530.png"  alt="同济大学慕课" title="同济大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>同济大学</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=337.htm"  title="南开大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/NU.ee38baaf413a.png"  alt="南开大学慕课" title="南开大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>南开大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=334.htm"  title="北京工业大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/BJUT.5b354e61c1dd.png"  alt="北京工业大学慕课" title="北京工业大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>北京工业大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=341.htm"  title="南京理工大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/NJUST.91ba3c55c630.png"  alt="南京理工大学慕课" title="南京理工大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>南京理工大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=344.htm"  title="西北工业大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/NWPU.e5558ef24c27.png"  alt="西北工业大学慕课" title="西北工业大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>西北工业大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=378.htm"  title="台北艺术大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/TNUA.f1953c29405f.png"  alt="台北艺术大学慕课" title="台北艺术大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>台北艺术大学</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=409.htm"  title="国防科技大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/NUDT.58aa7e1b65ff.png"  alt="国防科技大学慕课" title="国防科技大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>国防科技大学</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=229.htm"  title="台湾静宜大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/PU.0497d0af32c0.png"  alt="台湾静宜大学慕课" title="台湾静宜大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>台湾静宜大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=192.htm"  title="台湾正修科技大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/CSU.71c7919947b1.png"  alt="台湾正修科技大学慕课" title="台湾正修科技大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>正修科技大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=46.htm"  title="南京大学" target="_blank">
					<div class="img">
                        <span><img src="school_card/NJU.1eacc66226b4.png"  alt="南京大学" title="南京大学" /></span>
					</div>
					<div class="text_con">
                        <h3>南京大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
		</ul>
	</section>


</article>
<article class="hz_school_w zj_list">
	<section class="wrap hz_school">
		<h2>edX合作院校和伙伴</h2>
		<ul class="cf">
			<li>
                <a href="courses-org=29-1.htm"  title="清华大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/tsinghua.df743d72ba6e.png"  alt="清华大学慕课" title="清华大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>清华大学</h3>
                        <p>196门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=31-1.htm"  title="北京大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/peking.e339795452b8.png"  alt="北京大学慕课" title="北京大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>北京大学</h3>
                        <p>25门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=6-1.htm"  title="哈佛大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/harvard.f40c6ac2c128.png"  alt="哈佛大学慕课" title="哈佛大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>哈佛大学</h3>
                        <p>66门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=30-1.htm"  title="麻省理工学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/MIT.794d1828ea80.png"  alt="麻省理工学院慕课" title="麻省理工学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>麻省理工学院</h3>
                        <p>68门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=33-1.htm"  title="加州伯克利慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UCB.365fa08f20e8.png"  alt="加州伯克利慕课" title="加州伯克利慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>加州大学伯克利分校</h3>
                        <p>33门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=4-1.htm"  title="乔治城大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/georgetwon.d784aec9eba1.png"  alt="乔治城大学慕课" title="乔治城大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>乔治城大学</h3>
                        <p>8门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=13-1.htm"  title="代尔夫特理工大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/TUDelft.89edf05da285.png"  alt="代尔夫特理工大学慕课" title="代尔夫特理工大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>荷兰代尔夫特理工大学</h3>
                        <p>25门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=1-1.htm"  title="加州理工学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/Caltech.b66d3f58504f.png"  alt="加州理工学院慕课" title="加州理工学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>加州理工学院</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=8-1.htm"  title="威尔斯利学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/Wellesley.e7bd7efe7302.png"  alt="威尔斯利学院慕课" title="威尔斯利学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>韦尔斯利大学</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=16-1.htm"  title="康奈尔大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/Cornell.0985fea5101e.png"  alt="康奈尔大学慕课" title="康奈尔大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>康奈尔大学</h3>
                        <p>8门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=37-1.htm"  title="香港大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/HKUx.e80cf3bb7217.png"  alt="香港大学慕课" title="香港大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>香港大学</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=38-1.htm"  title="香港科技大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/HKUSTx.989f779b98d3.png"  alt="香港科技大学慕课" title="香港科技大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>香港科技大学</h3>
                        <p>9门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=155-1.htm"  title="香港理工大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/HKPolyUx.7d3070cb5f31.png"  alt="香港理工大学慕课" title="香港理工大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>香港理工大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=25-1.htm"  title="德州大学系统慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UTAustinX.abc6a14e8479.png"  alt="德州大学系统慕课" title="德州大学系统慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>德克萨斯大学奥斯汀分校</h3>
                        <p>18门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=2-1.htm"  title="卡罗林斯卡学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/KIx.84d39e92a45e.png"  alt="卡罗林斯卡学院慕课" title="卡罗林斯卡学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>瑞典卡罗林斯卡学院</h3>
                        <p>6门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=17-1.htm"  title="昆士兰大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UQx.ad4b47f33bd9.png"  alt="昆士兰大学慕课" title="昆士兰大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>昆士兰大学</h3>
                        <p>8门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=10-1.htm"  title="莱斯大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/RiceX.4ffd010b88af.png"  alt="莱斯大学慕课" title="莱斯大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>莱斯大学</h3>
                        <p>19门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=12-1.htm"  title="波士顿大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/BUx.059ad8254488.png"  alt="波士顿大学慕课" title="波士顿大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>波士顿大学</h3>
                        <p>13门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=9-1.htm"  title="首尔国立大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/SNUx.d0f525ccfd27.png"  alt="首尔国立大学慕课" title="首尔国立大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>首尔国立大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=20-1.htm"  title="印度理工孟买分校慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/IITBombayX.7c6b7c3ca567.png"  alt="印度理工孟买分校慕课" title="印度理工孟买分校慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>印度理工学院孟买分校</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=11-1.htm"  title="澳洲国立大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/ANUx.2d32e6a421a2.png"  alt="澳洲国立大学慕课" title="澳洲国立大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>澳洲国立大学</h3>
                        <p>8门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=62-1.htm"  title="多伦多大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/TorontoX.43aaca542804.png"  alt="多伦多大学慕课" title="多伦多大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>多伦多大学</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=34-1.htm"  title="东京大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UTokyoX.cc0162442747.png"  alt="东京大学慕课" title="东京大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>东京大学</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=7-1.htm"  title="麦吉尔大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/McGillX.f88b133277b1.png"  alt="麦吉尔大学慕课" title="麦吉尔大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>麦吉尔大学</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=15-1.htm"  title="华盛顿大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UWashingtonX.c460d0a6c254.png"  alt="华盛顿大学慕课" title="华盛顿大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>华盛顿大学</h3>
                        <p>6门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=26-1.htm"  title="瑞士洛桑理工大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/EPFLx.7f0b07a75b43.png"  alt="瑞士洛桑理工大学慕课" title="瑞士洛桑理工大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>瑞士洛桑联邦理工学院</h3>
                        <p>11门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=21-1.htm"  title="伯克利音乐学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/BerkleeX.54691d416cdb.png"  alt="伯克利音乐学院慕课" title="伯克利音乐学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>伯克利音乐学院</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=18-1.htm"  title="鲁汶大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/LouvainX.e490239a4def.png"  alt="鲁汶大学慕课" title="鲁汶大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>鲁汶大学</h3>
                        <p>6门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=5-1.htm"  title="美国戴维森学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/DavidsonX.cb70fb1ea164.png"  alt="美国戴维森学院慕课" title="美国戴维森学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>美国戴维森学院</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=24-1.htm"  title="京都大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/KyotoUx.0fa7da3c3427.png"  alt="京都大学慕课" title="京都大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>京都大学</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=19-1.htm"  title="苏黎世联邦理工大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/ETHx.e6a46d0cd5f9.png"  alt="苏黎世联邦理工大学慕课" title="苏黎世联邦理工大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>苏黎士联邦理工大学</h3>
                        <p>5门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=22-1.htm"  title="Linux基金会慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/LinuxFoundationX.a189c1d40ec7.png"  alt="Linux基金会慕课" title="Linux基金会慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>Linux基金会</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=23-1.htm"  title="赠与的智慧基金会慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/LBGx.6badbf0b0c1e.png"  alt="赠与的智慧基金会慕课" title="赠与的智慧基金会慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>Learning By Giving基金会</h3>
                        <p>1门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=63-1.htm"  title="哥伦比亚大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/ColumbiaX.b84898f8b1bf.png"  alt="哥伦比亚大学慕课" title="哥伦比亚大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>哥伦比亚大学</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=64-1.htm"  title="库伯联盟学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/CooperX.6ea3caa5dd51.png"  alt="库伯联盟学院慕课" title="库伯联盟学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>库伯联盟学院</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=65-1.htm"  title="达特茅斯学院慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/DartmouthX.94a4ade12a17.png"  alt="达特茅斯学院慕课" title="达特茅斯学院慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>达特茅斯学院</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=68-1.htm"  title="泛美开发银行慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/IDBx.8806ca211d86.png"  alt="泛美开发银行慕课" title="泛美开发银行慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>泛美开发银行</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=69-1.htm"  title="国际货币基金组织慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/IMFx.c8b7249a0ce2.png"  alt="国际货币基金组织慕课" title="国际货币基金组织慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>国际货币基金组织</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=71-1.htm"  title="圣玛格丽特主教学校慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/MargaretX.e3d3b26863e8.png"  alt="圣玛格丽特主教学校慕课" title="圣玛格丽特主教学校慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>圣玛格丽特主教学校</h3>
                        <p>3门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=70-1.htm"  title="开放教育协会慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/OECx.c1dc1e061ca0.png"  alt="开放教育协会慕课" title="开放教育协会慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>开放教育协会</h3>
                        <p>6门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=72-1.htm"  title="慕尼黑工业大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/TUMx.50a1ab29b52c.png"  alt="慕尼黑工业大学慕课" title="慕尼黑工业大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>慕尼黑工业大学</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=74-1.htm"  title="不列颠哥伦比亚大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UBCx.e1749f0f1b13.png"  alt="不列颠哥伦比亚大学慕课" title="不列颠哥伦比亚大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>英属哥伦比亚大学</h3>
                        <p>17门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=75-1.htm"  title="芝加哥大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/UChicagoX.2ad3ef101939.png"  alt="芝加哥大学慕课" title="芝加哥大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>芝加哥大学</h3>
                        <p>2门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			<li>
                <a href="courses-org=77-1.htm"  title="瓦赫宁根大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/WageningenX.54c14990dc90.png"  alt="瓦赫宁根大学慕课" title="瓦赫宁根大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>瓦赫宁根大学</h3>
                        <p>4门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
		</ul>
	</section>
</article>

 <div class="hide" id="js_xy_consociation_school"></div>










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
        bp.src = '../push.zhanzhang.baidu.com/push.js'/*tpa=https://push.zhanzhang.baidu.com/push.js*/;
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
      })();
    </script>
</body>
</html>
