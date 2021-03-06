@extends('backManager/commonpart/htmlFrame')
@section('title','person')
@section('selectcss')
<!-- this page specific styles -->
<link rel="stylesheet" href="{{asset('css/compiled/personal-info.css')}}" type="text/css" media="screen" />
 @endsection
@section('body')
 <!-- main container .wide-content is used for this layout without sidebar :)  -->
<div class="content wide-content">
    <div class="container-fluid">
        <div class="settings-wrapper" id="pad-wrapper">
            <!-- avatar column -->
            <div class="span3 avatar-box">
                <div class="personal-image">
                    <img src="../img/personal-info.png" class="avatar img-circle" />
                    <p>Upload a different photo...</p>
                    <input type="file" />
                </div>
            </div>
            <!-- edit form column -->
            <div class="span7 personal-info">
                <div class="alert alert-info">
                    <i class="icon-lightbulb"></i>
                    This page shows an example of an alternative layout with the main navbar on the top
                    <br /> using <strong>.content.wide-content</strong> for this main container
                </div>
                <h5 class="personal-title">Personal info</h5>

                <form />
                <div class="field-box">
                    <label>First name:</label>
                    <input class="span5 inline-input" type="text" value="Alejandra" />
                </div>
                <div class="field-box">
                    <label>Last name:</label>
                    <input class="span5 inline-input" type="text" value="Galvan" />
                </div>
                <div class="field-box">
                    <label>Company:</label>
                    <input class="span5 inline-input" type="text" value="Design Co." />
                </div>
                <div class="field-box">
                    <label>Email:</label>
                    <input class="span5 inline-input" type="text" value="alejandra@design.com" />
                </div>
                <div class="field-box">
                    <label>Time Zone:</label>
                    <div class="ui-select">
                        <select id="user_time_zone" name="user[time_zone]">
                            <option value="Hawaii" />(GMT-10:00) Hawaii
                            <option value="Alaska" />(GMT-09:00) Alaska
                            <option value="Pacific Time (US &amp; Canada)" />(GMT-08:00) Pacific Time (US &amp; Canada)
                            <option value="Arizona" />(GMT-07:00) Arizona
                            <option value="Mountain Time (US &amp; Canada)" />(GMT-07:00) Mountain Time (US &amp; Canada)
                            <option value="Central Time (US &amp; Canada)" selected="selected" />(GMT-06:00) Central Time (US &amp; Canada)
                            <option value="Eastern Time (US &amp; Canada)" />(GMT-05:00) Eastern Time (US &amp; Canada)
                            <option value="Indiana (East)" />(GMT-05:00) Indiana (East)
                        </select>
                    </div>
                </div>
                <div class="field-box">
                    <label>Username:</label>
                    <input class="span5 inline-input" type="text" value="alegalvan" />
                </div>
                <div class="field-box">
                    <label>Password:</label>
                    <input class="span5 inline-input" type="password" value="blablablabla" />
                </div>
                <div class="field-box">
                    <label>Confirm password:</label>
                    <input class="span5 inline-input" type="password" value="blablablabla" />
                </div>
                <div class="span6 field-box actions">
                    <input type="button" class="btn-glow primary" value="Save Changes" />
                    <span>OR</span>
                    <input type="reset" value="Cancel" class="reset" />
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end main container -->
<!-- scripts -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
@endsection