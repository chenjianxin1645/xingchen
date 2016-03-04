@extends('backManager/display/about/aboutFrame')

<!--展示->关于内容-->
@section('aboutDisplay')
        <!-- main container -->

    <div id="pad-wrapper">

            <div class="TeamIntro">
                <!--简介标题-->
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>Introduction</h4>
                    </div>
                </div>
                <!--简介内容-->
                @section('introEdit')
                <!--简介编辑按钮-->
                    <div class="row-fluid filter-block">
                        <div class="pull-right">
                            <a href="{{url('/manager/display/about/introEdit')."/".$intro->id}}" class="btn-flat success new-product">
                                <i class="icon-edit"></i>编辑
                            </a>
                        </div>
                    </div>
                    @if ($intro!=null)
                        <div class="aboutViewContent">

                           <div id="aaa">

                            <div class="aboutTitle">

                                <H3>{!! $intro->Title !!}</H3>
                                <span>{!! $intro->updateMember !!}</span>
                            </div>
                            <div class="aboutContent">

                                <span>{!! $intro->iContent!!}</span>
                                <span>{!! $intro->updateTime!!}</span>
                            </div>
                            <!--var_dump($intro->Title-->
                           </div>
        `
                        </div>
                    @else
                    @endif
                @show
            </div>
            <div class="TeamMem">
                <!--团队成员标题-->
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>团队列表</h4>
                    </div>
                </div>

                    <!--编辑按钮-->
                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <a href="{{url('/manager/display/about/member/create')}}" class="btn-flat success new-product">
                            <i class="icon-edit"></i>
                            添加
                        </a>
                    </div>
                </div>
                    <!--成员列表-->
                <div class="aboutViewContent">
                    <div id="aaa">
                        <div class="aboutTitle">

                        </div>
                        <div class="aboutContent">

                        </div>
                            <!--var_dump($intro->Title-->
                    </div>
                        `
                </div>
                <!---->
                <!---->

            </div>
    </div>
@endsection