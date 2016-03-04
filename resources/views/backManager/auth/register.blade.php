@extends('backManager/auth/htmlFrame')
@section('reg')

	<link href="{{asset('css/reg.css')}}" rel="stylesheet" type="text/css" media="all"/>


	<!-- js files -->

@endsection
@section('body')
	<div class="reg">
		<form action="{{url('manager/auth/register')}}" method="post" name="form1" id="form1">
			{!! csrf_field() !!}
			<?php print_r($errors->first()) ;

			?>
			<input type="submit" class="reg_but" onclick="getTime()" value="提交" >
			<dl>
				<dt class="f14 b">帐户基本信息</dt>
				<dd><span class="title">管理员名：</span><input class="reg_input" value="{{ old('adminname') }}" name="adminname" id="t_UserName" onblur="checkusername(this.value);" type="text" /><span id="t_UserNameTip" class="onshow"></span></dd>
				<input type="hidden" id="rtime" name="registerTime" >
				<input type="hidden" id="ltime" name="lostLoginTime">
			</dl>
			<dl>
				<dt class="f14 b">帐户安全设置</dt>
				<dd><span class="title">登录密码：</span><input class="reg_input" value="{{ old('password') }}" onblur="return checkpasswd(this);" id="t_UserPass" name="password" type="password"/><span id="t_UserPassTip" class="onshow"></span></dd>
				<dd><span class="title">确认登录密码：</span><input onblur="checkdoublepassword();" class="reg_input" type="password" id="t_RePass" name="password_confirmation"/><span id="t_RePassTip" class="onshow"></span></dd>
				<dd><span class="title">真实姓名：</span><input name="realName" id="iptName" value="{{ old('realName') }}" class="reg_input" type="text" onblur="return isCnn(this)" /><span id="iptNameTip" class="onshow"></span></dd>
				<dd><span class="title">身份证号：</span><input class="reg_input" name='idCard' value="{{ old('idCard') }}" type='text' id='iptCard' onblur="return checktheform();" /><span id="iptCardTip" class="onshow"></span></dd>
				<dd><span class="title">邮箱地址：</span><input class="reg_input" name="email" value="{{ old('email') }}"  type="text" id="t_Email" onblur="checkemail(this.value)" /><span id="t_EmailTip" class="onshow"></span></dd>
				<dd><span class="title">验证码：</span><input id="t_CheckCode" class="reg_input_pic" name="CheckCode" type="text" maxlength="5" />
					<img class="img" src="{{ url('manager/mews')}}" onclick="this.src='{{ url('manager/mews') }}?r='+Math.random();" width="70" height="30" alt=""/></dd>

			</dl>

		</form>
		<div class="bottom">
			<h3>如果你已有账户，可以直接<a href="{{url('manager/auth/login')}}" >登录</a></h3>
		</div>
	</div>


@endsection