
@extends("index.mooc")
@section("content")
<article class="hz_school_w">
	<section class="wrap hz_school">
		<h2>合作院校</h2>
		<ul class="cf">
			@foreach($list as $collage)
			<li>
                <a href='{{ URL("course/$college->id") }}'  title="清华大学慕课" target="_blank">
					<div class="img">
                        <span><img src="school_card/tsh.cefcd8351cee.png"  alt="清华大学慕课" title="清华大学慕课" /></span>
					</div>
					<div class="text_con">
                        <h3>{{ $collage->cname }}</h3>

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
                        <h3>{{ $collage->cname }}</h3>
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
