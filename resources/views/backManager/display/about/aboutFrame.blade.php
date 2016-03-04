@extends('backManager/display/display')

@section('aboutStyle')
    <link rel="stylesheet" href="{{asset('css/mystyle/backManager/display/about.css')}}" type="text/css" media="screen" />
    @include('UEditor::head')

    @endsection
            <!--展示->关于导航-->
@section('about')
    <a href="{{url('/manager/display/about')}}" class="dList1 " >
        <div class="dList stat active">

            <div class="data">
                <span class="number">关于</span>
                users
            </div>

        </div>
    </a>
    @endsection
            <!--展示->关于内容-->
    @section('content')
            <!-- main container -->

    <div class="content">

        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">Default</span>
            </a>
            <a href="#" class="skin second_nav" data-file="css/skins/dark.css">
                <span class="icon"></span><span class="text">Dark skin</span>
            </a>
        </div>

        <div class="container-fluid">
            @include('backManager/display/dList')

            @section('aboutDisplay')
            @show

            @section('memAdd')
            @show
        </div>
    </div>
    <!-- end main container -->
@endsection