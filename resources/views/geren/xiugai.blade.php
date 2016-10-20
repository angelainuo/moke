@extends('index.mooc')
@section('content')

    <div class="dashboard_page dashboard_account_page">
        <div class="page_content wrap cf">
            <nav class="dashboard_nav fl privatemsg_dashboard_nav">
                <div class="nav_info wrapper">
                    <ul class="d_nav">
                        <li style="border-top:0" class="on"><a href="">个人资料</a></li>
                        <li><a href="">账号安全</a></li>
                        <li><a href="">邀请好友</a></li>
                    </ul>
                </div>
            </nav>
            <section class="dashboard_content fl">
                <div class="content_wrap">
                    <div class="content_loading"><div class="loading_inner"></div></div>
                    <div id="tab_content" class="tab_content">
<div class="per_tab">
	<div class="cf">
		<div class="row_label fl">个人头像</div>
		<div class="row_content avatar_wrap fl">
			<img id="user_avatar" class="user_avatar" src="./xiugai_files/40" alt="我好喜欢妳">
			<button class="update_btn avatar_btn">更改头像</button>
		</div>
	</div>
	<div class="cf">
		<div class="row_label fl">基本资料</div>
		<div class="row_content fl">
			<div class="basic_view">
				<div class="info_item">
					<div class="item_label">真实姓名</div>
					<div class="item_value"></div>
				</div>
				<div class="info_item">
					<div class="item_label">性别</div>
					<div class="item_value">
					男
					</div>
				</div>
				<div class="info_item">
					<div class="item_label">生日</div>
					<div class="item_value"></div>
				</div>
				<div class="info_item">
					<div class="item_label">所在地</div>
					<div class="item_value">

					</div>
				</div>
				<div class="info_item">
					<div class="item_label">职业</div>
					<div class="item_value"></div>
				</div>
				<div class="info_item">
					<div class="item_label">最高学历</div>
					<div class="item_value">

					</div>
				</div>
				<div class="info_item">
					<div class="item_label">自我介绍</div>
					<div class="item_value">

					</div>
				</div>
				<div class="info_item">
					<div class="item_label">兴趣领域</div>
					<div class="item_value">

					</div>
				</div>
				<div class="info_item">
					<button class="update_btn" data-click="onClick" data-block="ACCOUNTINFO#PROFILE" data-element="TOMODIFYPROFILE">修改信息</button>
				</div>
			</div>

		</div>
	</div>

</div>

</div>
                </div>
            </section>
        </div>
    </div>
    <div id="js_dashboard_account_page" class="hide"></div>

@endsection
