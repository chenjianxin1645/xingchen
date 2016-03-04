<!-- sidebar -->
<div id="sidebar-nav">
    <ul id="dashboard-menu">
        <li class="@yield('activehome')">
            <a href="{{url('/manager/home')}}">
                @section('homeselect')
                @show
                <i class="icon-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="@yield('activedisplay')">
            <a href="{{url('/manager/display')}}">
                @section('displayselect')
                @show
                <i class="icon-signal"></i>
                <span>display</span>
            </a>
        </li>
        <li class="@yield('activediscuss')">
            <a href="{{url('/manager/discuss')}}">
                @section('discussselect')
                @show
                <i class="icon-group"></i>
                <span>discuss</span>
            </a>
        </li>
        <li class="@yield('activeuser')">
            <a href="{{url('/manager/user')}}">
            @section('userselect')
                @show
                <i class="icon-edit"></i>
                <span>user</span>
            </a>
        </li>
        <li class="@yield('activevideo')">
            <a href="{{url('/manager/video')}}">
                @section('videoselect')
                @show
                <i class="icon-picture"></i>
                <span>video</span>
            </a>
        </li>
        <li class="@yield('activetalk')">
            <a href="{{url('/manager/talk')}}">
                @section('talkselect')
                @show
                <i class="icon-group"></i>
                <span>talk</span>
            </a>
        </li>
    </ul>
</div>
<!-- end sidebar -->