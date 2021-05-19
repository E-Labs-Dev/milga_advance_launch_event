<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="{{asset('images/fav-icon.png')}}">

    <title>Milga Advance | Dashboard</title>

    @include('layouts.includes.style')
    @include('layouts.includes.messages.style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <h1>Welcome Back</h1>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="http://brandMark-corp.com">BrandMark-corp</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

@include('layouts.includes.scripts')
@include('layouts.includes.messages.scripts')
</body>
</html>
