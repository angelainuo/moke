@extends("index.mooc")
@section("content")
  <section class="pagename hide" data-page="SEARCHPAGE_LIST"></section>
  <div class="search_page">
   <article>
    <div class="wrap">
     <div class="search_wrap">
      <section class="win">
       <div class="win_in">
        <div class="win_in_block cf">
         <h2>分类</h2>
         <div class="fllist" data-block="FILTER#SUBJECT">
          <a href="" class="current" title="" data-click="onClick" data-element="1">全部</a>

          @foreach($data as $type)
          <a href="" title="" data-click="onClick" data-element="{{ $type->id }}">{{ $type->type }}</a>
          @endforeach
          </div>
        </div>
        <div class="win_in_block cf">
         <h2>学校</h2>
         <div class="fllist" data-block="FILTER#ORG">
          <a href=""   class="current" data-click="onClick" title="" data-element="1">全部</a>
          @foreach($collage as $collage)
          <a href=""   title="" data-click="onClick" data-element="{{ $collage->id }}">{{ $collage->name }}</a>
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
      <div class="mode_switch cf">
       <ul class="fr" data-block="LAYOUT">
        <li class="listmode currentlm" data-click="onClick" data-element="1"><a href="courses-credential=0&amp;page_type=0&amp;cid=0&amp;process=0&amp;org=0&amp;course_mode=0.htm"  ></a></li>
        <li class="blockmode" data-click="onClick" data-element="2"><a href="courses-credential=0&amp;page_type=1&amp;cid=0&amp;process=0&amp;org=0&amp;course_mode=0.htm"  ></a></li>
       </ul>
      </div>
      <div class="courses_list_mode">
       <div class="list_mode_wrap wrap">
        <ul class="list_style" id="list_style" data-block="RESULT">
					@foreach($list as $class)
         <li data-element="1">
          <div class="list_inner cf">
           <div class="img fl">
            <a href="courses/TsinghuaX/TSINGHUA101/_/about.htm"   alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="IMAGE"> <img class="course-cover" src="c4x/TsinghuaX/TSINGHUA101/asset/images_course_image.jpg"   alt="点击查看" title="点击查看" /> </a>
           </div>
           <div class="fl list_inner_right cf">
            <div class="coursename">
             <a href="" alt="点击查看" title="点击查看" target="_blank" data-click="onClick" data-description="TITLE"><h2 class="coursetitle">{{ $class->cname }}</h2></a>
             <div class="coursename_ref">
              <span class="fenlei"> <a href="courses-cid=135.htm" target="_blank" data-click="onClick" data-description="CATEGORY">{{ $class->type }}</a> </span>
             </div>
             <div class="cf teacher">
              <div class="fl">
               <img src="c4x/TsinghuaX/TSINGHUA101/asset/xb.jpg" alt="清华大学教务处" title="清华大学教务处" />
              </div>
              <div class="fl name">
               <p><span>{{  $class->teacher }}</span><span>{{ $class->name }}</span><span>{{ $class->other }}</span> </p>
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
