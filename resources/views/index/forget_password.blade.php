@extends("index.mooc")
@section("content")
<section class="retrieve_pwd_container" id="js_xy_select_retrievePwd">
    <div class="wrap" id="retrieveFotPwd">
				<!-- 输入账号和验证码 -->
				<div class="retrieve_pwd_tip purple_container">
					<div class="retrieve_pwd_title cf">
						<em class="fl">l</em>
						<h3 class="fl"><span class="retrieve_title">找回密码</span></h3>
					</div>
					<div class="mretrieve_pwd_title cf">
						<h3 class="fl"><span class="retrieve_title">找回密码</span></h3>
					</div>
					<div class="retrieve_main">
						<form class="ui form pt20 pb50" action="" method="post" id="retrieveSumbit" data-url="/retrieve_password">
							<p class="retrieve_text">请输入您要找回密码的账号</p>
							<div class="field input_box">
								<label>g</label>
								<input type="text" name="retrieve_name" placeholder="登录邮箱 / 手机号 / 用户名" data-placeholder="登录邮箱 / 手机号 / 用户名" data-rule="required" autocomplete="off"/>
								<div class="form_message">
									<span class="error hide required">请输入您的账号</span>
								</div>
							</div>
							<div class="field input_box">
								<div class="fr code_img">
									<img id="header_code_img" src="validate_image/-123432.gif"  alt="验证码" >
									<!--<p><a ng-click="changeCode()" href="">看不清，换一张</a></p>-->
								</div>
								<label>m</label>
								<input type="text" name="code" placeholder="填写验证码" data-placeholder="填写验证码" data-rule="required" autocomplete="off"/>
								<div class="form_message">
									<span class="error required hide">请输入验证码</span>
								</div>
							</div>
							<div class="btn">
								<button class="ui button purple retrievebtn">下一步</button>
								<div class="error_message">
									<p></p>
								</div>
							</div>
						</form>
					</div>
				</div>
    </div>
</section>
<div id="js_xy_select_retrievePwd"></div>

@endsection
