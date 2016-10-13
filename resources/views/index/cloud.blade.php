@extends("index.mooc")
@section("content")

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

      <a class="reg_btn"   target="_blank">申请试用</a>
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

@endsection
