@extends("index.mo")
@section("content")
<div class="homepage">
	<div id="all" class="all">
			<div class="screen">
				<ul>

					<li>
						<img src="{{ URL::asset('image/lunbo/1.png') }}">
					</li>
					<li>
						<img src="{{ URL::asset('image/lunbo/2.png') }}">
					</li>
					<li>
						<img src="{{ URL::asset('image/lunbo/3.png') }}">
					</li>
					<li>
						<img src="{{ URL::asset('image/lunbo/4.png') }}">
					</li>
					</ul>
				</div>
				<ol>
				</ol>
			</div>
			<div class="pb_80">
	<section class="wrap index_title">
		<h2></h2>
	</section>
	<section class="wrap index_classify_list" id="index_classify_list">
		<ul class="cf">

			<li class="computer">
			    <div class="title">
			    	<a class="title_a" href="{{ URL::asset('./course/1') }}"   title="计算机" target="_blank" data-click="onClick" data-element="1" data-block="CATEGORIES">
			    		<img src="{{ URL::asset('image/shouye/jisuanji.png') }}"   alt="计算机" title="计算机" />
			    		<p>计算机</p>
			    	</a>
			    </div>
			</li>
			<li class="literature">
			    <div class="title">
			    	<a class="title_a" href="{{ URL::asset('./course/2') }}"   title="经管·会计" target="_blank" data-click="onClick" data-element="2" data-block="CATEGORIES">
			    		<img src="{{ URL::asset('image/shouye/kuaiji.png') }}"   alt="经管·会计" title="经管·会计" />
			    		<p>经管·会计</p>
			    	</a>
			    </div>
			</li>
			<li class="chemistry">
			    <div class="title">
			    	<a class="title_a" href="{{ URL::asset('./course/3') }}"   title="大学先修课" target="_blank" data-click="onClick" data-element="3" data-block="CATEGORIES">
			    		<img src="{{ URL::asset('image/shouye/xianxiu.png') }}"   alt="大学先修课" title="大学先修课" />
			    		<p>大学先修课</p>
			    	</a>
			    </div>
			</li>
			<li class="math">
			    <div class="title">
			    	<a class="title_a" href="{{ URL::asset('./course/12') }}"   title="社科·法律" target="_blank" data-click="onClick" data-element="4" data-block="CATEGORIES">
			    		<img src="{{ URL::asset('image/shouye/falv.png') }}"   alt="社科·法律" title="社科·法律" />
			    		<p>社科·法律</p>
			    	</a>
			    </div>
			</li>
			<li class="infospread">
			    <div class="title">
			    	<a class="title_a" href="{{ URL::asset('./course/23') }}"   title="创业" target="_blank" data-click="onClick" data-element="5" data-block="CATEGORIES">
			    		<img src="{{ URL::asset('image/shouye/chuangye.png') }}"   alt="创业" title="创业" />
			    		<p>创业</p>
			    	</a>
			    </div>
			</li>
			<li class="more">
			    <div class="title">
			    	<a class="title_a" href="{{ URL::asset('./courses') }}"   title="全部分类" target="_blank" data-click="onClick" data-element="6" data-block="CATEGORIES">
						<img src="{{ URL::asset('image/shouye/quanbu.png') }}"/>
			    		<p>全部分类</p>
			    	</a>
			    </div>
			</li>
		</ul>
	</section>
</div>

<div class="bg_hui pb_80 rec_courses" id="rec_courses">
	<div class="rec_courses_title wrap bg_hui">
	<h2><span>推荐课程</span></h2>
	</div>
	<div class="rec_courses_wrap wrap bg_hui">
		<ul class="cf">
			<li>
				<a href="courses/MITx/6_00_2x/2014_T2/about.htm"   title="计算思维和数据科学导论" target="_blank" data-block="RECOMMENDED#COURSE" data-element="1" data-click="onClick">
					<div class="normal">
						<img class="scrollLoading" data-url="/c4x/MITx/6_00_2x/asset/images_course_image.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="计算思维和数据科学导论" title="计算思维和数据科学导论" />
						<div class="rec_cover">
						</div>
					</div>
					<h3>计算思维和数据科学导论</h3>
            <div class="rec_courses_ref cf" data-enrollment-start="2015-06-07 16:00:00+00:00" data-enrollment-end="" data-start="2016-10-13 16:00:00+00:00" data-end="">
              <span class="rec_courses_time fl"></span>
              <span class="rec_courses_num fr">12452人</span>
            </div>
				</a>
			</li>
		</ul>
	</div>
</div>





			<div class="community wrap pb_80" id="community">
	<div class="community-title">
		<h2><span>广场</span></h2>
	</div>
	<div class="community_wrap">
		<div class="community_left fl">
				<div class="community_position cf">
					<div class="cheader_left fl">
						<em>活动</em>
						<a class="ctitle" href="community/post/2423-1.htm"   target="_blank" data-click="onClick" data-element="1" data-block="COMMUNITY"><p>【新学期の大福利】玩转自主模式 赢取学堂好礼</p></a>
					</div>
					<p class="cheader_right fr cf"><span class="last_send_time fr">2016-08-30 04:45:50+00:00</span><span class="hotnum fr">120</span></p>
				</div>
			<div class="community_viewall">
				<a href="community/index.htm"   target="_blank" data-click="onClick" data-description="TOMORE" data-block="MORE"><em>查看全部帖子</em></a>
			</div>
		</div>
		<div class="community_right cf fl">
			<ul class="fl">
	            <li class="longleft mt0">
                <a href="community/post/1936.htm"   title="" target="_blank">
	                    <div class="normal">
                        <img sec="" class="layer scrollLoading" alt="" title="" />
	                        <div class="cover">
	                            <img src="" class="blur scrollLoading">
	                            <div class="mask">
                                <p>现阶段你最想去哪里旅行？</p>
	                            </div>
	                        </div>
	                    </div>
	                </a>
	            </li>
	            <li>
                <a href="community/post/1272.htm"   title="" target="_blank">
	                    <div class="normal">
                        <img  src="" class="layer scrollLoading" alt="" title="" />
	                        <div class="cover">
	                            <img src="" class="blur scrollLoading">
	                            <div class="mask">
                                <p>你对哪个专业的人有着莫名好感？</p>
	                            </div>
	                        </div>
	                    </div>
	                </a>
	            </li>
	            <li class="">
                <a href="community/post/1254.htm"   title="" target="_blank">
	                    <div class="normal">
                        <img src="" class="layer scrollLoading" alt="" title="" />
	                        <div class="cover">
	                            <img src="" class="blur scrollLoading">
	                            <div class="mask">
                                <p>朋友圈里哪种秀最让你不爽？</p>
	                            </div>
	                        </div>
	                    </div>
	                </a>
	            </li>
        </ul>
		</div>
	</div>
</div>

			<div class="bg_hui cooperation pb_80" id="cooperation">
	<div class="cooperation-title bg_hui">
		<h2><span>合作伙伴</span></h2>
	</div>
	<div class="cooperation_wrap wrap bg_hui">
		<div class="cooperation_left fl">
      <a href="courses-org=29.htm"  " target="_blank">
        <img src="../storage.xuetangx.com/public_assets/xuetangx/homepageparter/Tsinghua1.png"  ">
      </a>
		</div>
		<div class="cooperation_right cf fl">
			<ul class="cf">
				<li>
					<a  href="" title="edX国际MOOC平台" target="_blank">
						<div class="normal">
							<img class="scrollLoading"  />
							<h3>edX国际MOOC平台</h3>
						</div>
					</a>
				</li>
				<li>
					<a href="partners.htm"   title="更多院校" target="_blank">
						<div class="normal">
							<img class="scrollLoading" src=""/>
							<h3>更多院校</h3>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

	<svg class="hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
			<filter id="blur">
				<feGaussianBlur stdDeviation="5" />
			</filter>
		</defs>
	</svg>
	<div id="yxs_homepage" class="hide"></div>
</div>


@endsection
