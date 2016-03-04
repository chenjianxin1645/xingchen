@extends('backManager/auth/htmlFrame')
@section('reg')

    <link href="{{asset('css/reg.css')}}" rel="stylesheet" type="text/css" media="all"/>


    <!-- js files -->

@endsection
@section('body')
    <div class="reg">
        <form action="{{url('auth/register')}}" method="post" name="form1" id="form1">
            {!! csrf_field() !!}
            <input type="submit" class="reg_but" value="提交" >
            <dl>
                <dt class="f14 b">帐户基本信息</dt>
                <dd><span class="title">登录账号：</span><input class="reg_input" name="t_UserName" id="t_UserName" onblur="checkusername(this.value);" type="text" /><span id="t_UserNameTip" class="onshow"></span></dd>
                <dd><span class="title">昵称：</span><input class="reg_input" name="iptNickName" id="iptNickName" onblur="checkNickName(this.value)" type="text" /><span id="iptNickNameTip" class="onshow"></span></dd>
                <dd><span class="title">性别：</span><input type="radio" id="Sex_Man" name="rb_Sex" value="0" checked="CHECKED" /><label for="Sex_Man"> 帅哥</label>
                    <input type="radio" id="Sex_Woman" name="rb_Sex" value="0" /><label for="Sex_Woman"> 美女</label>　
                    <input name="" type="checkbox" value="" /> 不公开
                </dd>
            </dl>
            <dl>
                <dt class="f14 b">帐户安全设置</dt>
                <dd><span class="title">登录密码：</span><input class="reg_input" onblur="return checkpasswd(this);" id="t_UserPass" name="t_UserPass" type="password"/><span id="t_UserPassTip" class="onshow"></span></dd>
                <dd><span class="title">确认登录密码：</span><input onblur="checkdoublepassword();" class="reg_input" type="password" id="t_RePass" name="t_RePass"/><span id="t_RePassTip" class="onshow"></span></dd>
                <dd><span class="title">真实姓名：</span><input name="iptName" id="iptName" class="reg_input" type="text" onblur="return isCnn(this)" /><span id="iptNameTip" class="onshow"></span></dd>
                <dd><span class="title">身份证号：</span><input class="reg_input" name='iptCard' type='text' id='iptCard' onblur="return checktheform();" /><span id="iptCardTip" class="onshow"></span></dd>
                <dd><span class="title">邮箱地址：</span><input class="reg_input" name="t_Email" type="text" id="t_Email" onblur="checkemail(this.value)" /><span id="t_EmailTip" class="onshow"></span></dd>
                <dd><span class="title">验证码：</span><input id="t_CheckCode" class="reg_input_pic" name="t_CheckCode" type="text" maxlength="4" />
                    <img class="img" src="images/eee.jpg" width="60" height="30" /><span id="t_CheckCodeTip" class="reg_m onError in_pic_s">刷新</span></dd>
            </dl>

        </form>
        <div class="bottom">
            <h3>如果你已有账户，可以直接<a href="{{url('manager/auth/login')}}" >登录</a></h3>
        </div>
    </div>


@endsection