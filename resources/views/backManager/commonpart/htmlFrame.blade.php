<!DOCTYPE HTML>
<html>
<head>
    <title>admin-@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('backManager/commonpart/commoncss')
    @section('selectcss')
    @show
    <!-- open sans font
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
    --> @show
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
@include('backManager/commonpart/navbar')
@include('backManager/commonpart/slidebar')
@section('body')
@show
        <!--
<div style="display:none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'>

    </script>
</div>-->
</body>
</html>