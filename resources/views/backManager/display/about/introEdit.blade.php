@extends('backManager/display/about/aboutFrame')

        <!--展示->关于内容-->
@section('aboutDisplay')
        <!-- main container -->

<div id="pad-wrapper">

        <script type="text/javascript">
            function formSubmit()
            {
                document.getElementById("myForm").submit();
            }
        </script>
        {!! Form::open(['url'=>'/manager/display/about/introEditOk'.'/'.$intro->id,'id'=>'myForm']) !!}
    <!--<form method="post" id="myForm" action="{ //url('/manager/display/about/editOk')."/".$intro->id}}">-->
        {!! csrf_field() !!}
        <div class="row-fluid filter-block">
            <div class="pull-right">
                <a href="{{url('/manager/display/about/')}}" class="btn-flat success new-product">
                    <i class="icon-reply"></i>
                    返回
                </a>
                <a onclick="formSubmit()" class="btn-flat success new-product">
                    <i class="icon-ok"></i>
                    完成
                </a>

            </div>
        </div>
        @if ($intro!=null)
            <div class="aboutViewContent">
                <div class="aboutTitle">
                    {!! $intro->id !!}
                    <input type="text" name="Title" value="{!! $intro->Title !!}">  </input>
                    <input type="text" name="updateMember"value="{!! $intro->updateMember !!}">
                </div>
                <script id="container" name="iContent" type="text/plain">
                    <div class="aboutContent">
                        <span>{!! $intro->iContent !!}</span>
                    </div>
                </script>
                <!-- 实例化编辑器 -->
                <script type="text/javascript">
                    var ue = UE.getEditor('container');
                </script>
                <div>

                    {!! $intro->updateTime !!}

                    <input type="hidden" name="updateTime" value="{{Carbon\Carbon::now()}}">
                </div>
            </div>
        @endif
        {!! Form::close() !!}

</div>
@endsection