@extends('backManager/display/about/aboutFrame')
@section('memAdd')
    <link rel="stylesheet" href="{{asset('css/compiled/new-user.css')}}" type="text/css" media="screen" />
    <script type="text/javascript">
        function formSubmit()
        {
            document.getElementById("myForm").submit();
        }
    </script>

            <!-- main container -->




    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>创建新成员</h3>
            </div>

            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">
                        {!! Form::open(['url'=>'/manager/display/about/member/create','id'=>'myForm']) !!}
                                <!--<form method="post" id="myForm" action="{ //url('/manager/display/about/editOk')."/".$intro->id}}">-->
                        {!! csrf_field() !!}
                        <form class="new_user_form inline-input" />
                            <div class="span12 field-box">
                                <label>姓名:</label>
                                <input class="span9" type="text" />
                            </div>
                            <div class="span12 field-box">
                                    <label>性别:</label>
                                    <div class="ui-select span5">
                                        <select>
                                            <option value="AK" />男
                                            <option value="HI" />女
                                        </select>
                                    </div>
                                </div>
                            <div class="span12 field-box">
                                <label>年龄:</label>
                                <input class="span9" type="text" />
                            </div>
                            <div class="span12 field-box">
                                <label>专业:</label>
                                <input class="span9" type="text" />
                            </div>
                            <div class="span12 field-box">
                                <label>班级:</label>
                                <input class="span9" type="text" />
                            </div>
                            <div class="span12 field-box">
                                <label>Website:</label>
                                <input class="span9" type="text" />
                            </div>
                            <div class="span12 field-box">
                                    <label>Address:</label>
                                    <div class="address-fields">
                                        <input class="span12" type="text" placeholder="Street address" />
                                        <input class="span12 small" type="text" placeholder="City" />
                                        <input class="span12 small" type="text" placeholder="State" />
                                        <input class="span12 small last" type="text" placeholder="Postal Code" />
                                    </div>
                                </div>
                            <div class="span12 field-box textarea">
                                <label>Notes:</label>
                                <textarea class="span9"></textarea>
                                <span class="charactersleft">90 characters remaining. Field limited to 100 characters</span>
                            </div>
                            <div class="span11 field-box actions">
                                <input onclick="formSubmit()" type="button" class="btn-glow primary" value="创建" />
                                <span>OR</span>
                                <input type="reset" value="重置" class="reset" />
                            </div>
                        </form>
                        {!! Form::close() !!}
                    </div>
                </div>
                    <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="btn-group toggle-inputs hidden-tablet">
                        <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                        <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                    </div>
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        Click above to see difference between inline and normal inputs on a form
                    </div>
                    <h6>Sidebar text for instructions</h6>
                    <p>Add multiple users at once</p>
                    <p>Choose one of the following file types:</p>
                    <ul>
                        <li><a href="#">Upload a vCard file</a></li>
                        <li><a href="#">Import from a CSV file</a></li>
                        <li><a href="#">Import from an Excel file</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- end main container -->


    <!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>

    <script type="text/javascript">
        $(function () {

            // toggle form between inline and normal inputs
            var $buttons = $(".toggle-inputs button");
            var $form = $("form.new_user_form");

            $buttons.click(function () {
                var mode = $(this).data("input");
                $buttons.removeClass("active");
                $(this).addClass("active");

                if (mode === "inline") {
                    $form.addClass("inline-input");
                } else {
                    $form.removeClass("inline-input");
                }
            });
        });
    </script>


@endsection
