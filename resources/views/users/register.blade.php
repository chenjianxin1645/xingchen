@extends('frame')
@section('title','register')
@section('reg')
    
    <link href="{{asset('css/reg.css')}}" rel="stylesheet" type="text/css" media="all"/>
    
    
        <!-- js files -->
        
@endsection
@section('body')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="reg">
        <form method="POST" action="{{url('auth/register')}}">
            {!! csrf_field() !!}

            <div>
                Name
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Password
                <input type="password" name="password">
            </div>

            <div>
                Confirm Password
                <input type="password" name="password_confirmation">
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    <div class="bottom">
        <h3>如果你已有账户，可以直接<a href="{{url('auth/login')}}" >登录</a></h3>
    </div>  
    </div>
 
    
@endsection