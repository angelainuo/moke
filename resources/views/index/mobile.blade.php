@extends("index.mooc")
@section("content")
<div class="app_download">
	<div class="top">
		<div class="top_inner wrap pt40 pb40">
			<div  class="ewm">
				<img src="image/3.png"/>
				<p>扫码下载</p>
			</div>
			<div class="download_link">
				<a target="_blank"   data-click="onClick" data-element="1" data-block="DOWNLOAD" >iPhone版下载</a> | <a target="_blank"   data-click="onClick" data-element="2" data-block="DOWNLOAD">iPad版下载</a> | <a target="_blank"   data-click="onClick" data-element="3" data-block="DOWNLOAD">Android版下载</a>
			</div>


			<img src="image/1.png"/>

		</div>
	</div>



	<div class="bottom wrap pt50 pb100">
		<img src="image/2.png"/>
	</div>
</div>







@endsection
