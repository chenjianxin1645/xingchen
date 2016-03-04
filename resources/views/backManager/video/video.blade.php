@extends('backManager/commonpart/htmlFrame')
@section('title','video')
@section('selectcss')
        <!-- this page specific styles -->
<link rel="stylesheet" href="{{asset('css/compiled/gallery.css')}}" type="text/css" media="screen" />
@endsection
@section('body')
@section('videohome','active')
@section('videoselect')
    <div class="pointer">
        <div class="arrow"></div>
        <div class="arrow_border"></div>
    </div>
    @endsection
 <!-- main container -->
<div class="content">
    <!-- settings changer -->
    <div class="skins-nav">
        <a href="#" class="skin first_nav selected">
            <span class="icon"></span><span class="text">Default</span>
        </a>
        <a href="#" class="skin second_nav" data-file="{{asset('css/skins/dark.css')}}">
            <span class="icon"></span><span class="text">Dark skin</span>
        </a>
    </div>

    <div class="container-fluid">
        <div id="pad-wrapper" class="gallery">
            <div class="row-fluid header">
                <h3>Gallery</h3>
            </div>
            <!-- gallery wrapper -->
            <div class="gallery-wrapper">
                <div class="row gallery-row">
                    <!-- single image -->
                    <div class="span3 img-container">
                        <div class="img-box">
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                            <img src="../img/gallery3.jpg" />
                            <p class="title">
                                Beach pic title
                            </p>
                        </div>
                    </div>
                    <!-- single image -->
                    <div class="span3 img-container">
                        <div class="img-box">
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                            <img src="../img/gallery2.jpg" />
                            <p class="title">
                                Beach pic title 2
                            </p>
                        </div>
                    </div>
                    <!-- single image -->
                    <div class="span3 img-container">
                        <div class="img-box">
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                            <img src="../img/gallery1.jpg" />
                            <p class="title">
                                Beach pic title 3
                            </p>
                        </div>
                    </div>
                    <!-- single image -->
                    <div class="span3 img-container">
                        <div class="img-box">
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                            <img src="../img/gallery3.jpg" />
                            <p class="title">
                                Beach pic title
                            </p>
                        </div>
                    </div>
                    <!-- single image -->
                    <div class="span3 img-container">
                        <div class="img-box">
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                            <img src="../img/gallery2.jpg" />
                            <p class="title">
                                Beach pic title 2
                            </p>
                        </div>
                    </div>

                    <!-- new image button -->
                    <div class="span3 new-img">
                        <img src="../img/new-gallery-img.png" />
                    </div>


                    <!-- edit image pop up -->
                    <div class="popup">
                        <div class="pointer">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <i class="close-pop table-delete"></i>
                        <h5>Edit Image</h5>
                        <div class="thumb">
                            <img src="../img/gallery-preview.jpg" />
                        </div>
                        <div class="title">
                            <input type="text" class="inline-input" placeholder="Title" />
                            <div class="ui-select">
                                <select>
                                    <option />Category
                                    <option />Mountains
                                    <option />Lake and rivers
                                </select>
                            </div>
                        </div>
                        <div class="description">
                            <h6>Description</h6>
                            <textarea></textarea>
                            <input type="submit" value="Save" class="btn-glow primary" />
                        </div>
                    </div>

                </div>
            </div>
            <!-- end gallery wrapper -->

            <!-- blank state -->
            <div class="no-gallery">
                <div class="row-fluid header">
                    <h3>Gallery Blank State</h3>
                </div>
                <div class="center">
                    <img src="../img/no-img-gallery.png" />
                    <h6>You don't have any images</h6>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a class="btn-glow primary">Add new image</a>
                </div>
            </div>
            <!-- end blank state -->
        </div>
    </div>
</div>
<!-- end main container -->
<!-- this page scripts -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
@endsection