@extends("index.mooc")
@section("content")
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
           <a href="{{ URL('/courses') }}"  title="" data-click="onClick" data-element="1">全部</a>
           @foreach($data as $type)
           <a href='{{ URL("course/$type->id") }}'  title="" data-click="onClick" data-element="{{ $type->id }}">{{ $type->tname }}</a>
           @endforeach
           </div>
         </div>
         <div class="win_in_block cf">
          <h2>学校</h2>
          <div class="fllist" data-block="FILTER#ORG">
           <a href=""   class="current" data-click="onClick" title="" data-element="1">全部</a>
           @foreach($college as $age)
           <a href='{{ URL("course/$age->id") }}'   title="" data-click="onClick" data-element="{{ $age->id }}">{{ $age->cname }}</a>
           @endforeach
          </div>
         </div>
         <div class="win_in_block cf">
          <h2>模式</h2>
          <div class="fllist" data-block="FILTER#MODE">
           <a href=""   class="current" title="" data-click="onClick" data-element="1">全部</a>
           <a href=""   title="随堂模式" data-click="onClick" data-element="2">随堂模式</a>
           <a href=""   title="自主模式" data-click="onClick" data-element="3">自主模式</a>
          </div>
         </div>
         <div class="win_in_block cf">
          <h2>权威</h2>
          <div class="fllist" data-block="FILTER#CERTIFICATE">
           <a href=""   class="current" title="" data-click="onClick" data-element="1">全部</a>
           <a href=""   title="" data-click="onClick" data-element="2">签字认证</a>
           <a href=""   title="" data-click="onClick" data-element="3">认证开放</a>
          </div>
         </div>
         <div class="win_in_block cf">
          <h2>状态</h2>
          <div class="fllist" data-block="FILTER#PROCESS">
           <a href=""   class="current" title="" data-click="onClick" data-element="1">全部</a>
           <a href=""   title="" data-click="onClick" data-element="2">即将开课</a>
           <a href=""   title="" data-click="onClick" data-element="3">已开课</a>
           <a href=""   title="" data-click="onClick" data-element="4">已结课</a>
          </div>
         </div>
        </div>
       </section>
      </div>


			<section>
      <div class="courses_list_mode">
       <div class="list_mode_wrap wrap">
        <ul class="list_style" id="list_style" data-block="RESULT">
					@foreach($list as $class)
         <li data-element="1">
          <div class="list_inner cf">
           <div class="img fl">
            <a href=""   alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE"> <img class="course-cover" src='{{ URL::asset("image/college/$class->image") }}'   alt="点击查看" title="点击查看" /> </a>
           </div>
           <div class="fl list_inner_right cf">
            <div class="coursename">
             <a href='{{ URL::asset("class/$class->iid") }}' alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">{{ $class->className }}</h2></a>
             <div class="coursename_ref">
              <span class="fenlei"> <a href='{{ URL::asset("course/$class->tid") }}' target="_blank" data-click="onClick" data-description="CATEGORY">{{ $class->tname }}</a> </span>
             </div>
             <div class="cf teacher">
              <div class="fl">
               <img src='{{ URL::asset("image/college/$class->image") }}' alt="清华大学教务处" title="清华大学教务处" />
              </div>
              <div class="fl name">
               <p><span>{{  $class->teacher }}</span><span>{{ $class->cname }}</span><span></span> </p>
              </div>
             </div>
             <div class="txt_all">
              <p class="txt"><span class="courseintro">简介</span>{{ $class->info }}</p>
              <p class="ctxt"><span class="coursechapter">章节</span>{{ $class->content }}</p>
             </div>
             <p class="ref_info cf">
                <span class="ri-tag fl">{{ ($class->model == 0)? '随堂模式' : '自主模式'  }}</span>
                 <span class="ri-tag fl" data-start="2013-10-28 00:00:00+00:00" data-end="" data-enrollment-start="2013-05-31 16:00:00+00:00" data-enrollment-end=""><b class="list-icon">{{ ($class->auth == 1)? '认证开放' : '签字认证'  }}</b></span>
                  <span class="ri-tag fl">已更新至第16章</span> </p>
            </div>
           </div>
          </div>
				</li>
				@endforeach

			 </li>
        </ul>
       </div>
      </div>
      <div id="list_pager" class="pager">
      </div>
     </section>
    </div>
   </article>
   <section id="loginData" class="hide" data-currentpage="1" data-pagecount="89.7" data-href="courses-credential=0&amp;page_type=0&amp;cid=0&amp;process=0&amp;org=0&amp;course_mode=0.htm">
   </section>
   <div class="hide" id="js_xsy_new_course_search"></div>
@endsection
