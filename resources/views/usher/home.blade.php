<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="icon" type="image" href="{{asset('images/fav-icon.png')}}">

@include('layouts.includes.website.style')

@include('layouts.includes.messages.style')
<!-- overlayScrollbars -->
    <title>Milga</title>
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
               <img src="{{asset('images/logo.png')}}">
            </div><!--col-lg-3-->
            <div class="col-lg-3 col-6 mobile">
              <img src="{{asset('images/logo2.png')}}">
            </div><!--col-lg-3-->

            <div class="col-lg-6 col-md-6">

            </div><!--col-lg-6-->
            <div class="col-lg-3 col-md-3 web">
               <img src="{{asset('images/logo2.png')}}">
            </div><!--col-lg-3-->

        </div><!--row-->
    </div><!--container-->
</header>

<!-- Main content -->
<section class="content" style="    margin-top: 166px;">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-6" style="margin-top: 16px;">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header" style="background-color: #df0e19;">
                        <h3 class="card-title">Search About Doctor Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('registrations.search')}}"  style="    background-color: #f8f9fa;">
                        @csrf
                        <div class="card-body">
                            <div class="form-group col-12" style="float: left;">
                                <label for="code_doctor">Code Doctor</label>
                                <input type="text" class="form-control" id="code_doctor" name="code_doctor"
                                       placeholder="Enter Code Doctor" value="" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" style="background-color: #df0e19;">Search</button>
                        </div>

                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@include('layouts.includes.messages.scripts')
</body>
</html>

