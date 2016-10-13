
@extends("index.mooc")
@section("content")
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
			@foreach($list as $collage)
			<li>
                <a href="courses-org=29-1.htm"  title="清华大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/tsh.cefcd8351cee.png"  alt="清华大学慕课" title="清华大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>{{ $collage->name }}</h3>
                        <p>196门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			@endforeach
		</ul>
	</section>


</article>
<article class="hz_school_w zj_list">
	<section class="wrap hz_school">
		<h2>edX合作院校和伙伴</h2>
		<ul class="cf">
			@foreach($list as $collage)
			<li>
                <a href="courses-org=29-1.htm"  title="清华大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/tsinghua.df743d72ba6e.png"  alt="清华大学慕课" title="清华大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>{{ $collage->name }}</h3>
                        <p>196门课程</p>
						<p><span>立刻学习</span></p>
					</div>
				</a>
			</li>
			@endforeach
		</ul>
	</section>
</article>

 <div class="hide" id="js_xy_consociation_school"></div>
@endsection
