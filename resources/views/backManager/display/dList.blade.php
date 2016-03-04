<style>
    .dList{
        float: left;
        padding: 50px;
        width:230px;
    }
    .dList:hover{
        background-color: #eae8e8;
        font-size:25px;
    }

    .dList1{

    }
    .dList1:hover{
        text-decoration: none;

    }
    .active{
        background-color: #eae8e8;
    }
</style>



<!-- upper main stats -->
<div id="main-stats">
    <div class="row-fluid stats-row">
        @section('about')
            <a href="{{url('/manager/display/about')}}" class="dList1"  >
                <div class="dList stat">

                    <div class="data">
                        <span class="number">关于</span>
                        users
                    </div>

                </div>
            </a>
        @show
        @section('news')
                <a href="{{url('/manager/display/news')}}" class="dList1">
                    <div class="dList stat">

                        <div class="data">
                            <span class="number">信息</span>
                            users
                        </div>

                    </div>
                </a>
        @show
        @section('exhibition')
             <a href="{{url('/manager/display/exhibition')}}" class="dList1"  >
                 <div class="dList stat">

                    <div class="data">
                            <span class="number">展览</span>
                            users
                    </div>

                 </div>
             </a>
        @show

        @section('contact')
            <a href="{{url('/manager/display/contact')}}" class="dList1"  >
                <div class="dList stat">

                    <div class="data">
                            <span class="number">联系</span>
                            users
                    </div>

                </div>
            </a>
        @show
    </div>
</div>
<!-- end upper main stats -->