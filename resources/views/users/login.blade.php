@extends('frame')
@section('title','login')
    
@section('login')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('body')
	
    <div class="login">
		<h2>星尘工作室</h2>
		@if (count($errors) > 0)
			<div>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="login-top">
			<h1>登录</h1>
			<form action="{{url('auth/login')}}" method="post">
				{!! csrf_field() !!}
				<input type="text" value="用户名" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}">
				<input type="password" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">

				<div class="forgot">
					<label class="rememberme">
						<input type="checkbox" name="remember" value="1"/>记住密码
					</label>
					<a href="{{url('auth/password/findback')}}" id="forget-password" class="forget-password">Forgot Password?</a>

					<input type="submit" value="登录" >
				</div>
			</form>
		</div>
		<div class="login-bottom">
			<h3>在这里 &nbsp;<a href="{{url('auth/register')}}" id="reg">注册</a>&nbsp 用户</h3>
		</div>
	</div>
    
    
    
@endsection