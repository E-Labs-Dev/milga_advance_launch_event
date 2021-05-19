<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    @include('layouts.includes.messages.style')
    <!-- overlayScrollbars -->
    <title>Milga</title>
</head>
<body>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-6" style="margin-top: 16px;">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header" style="background-color: #df0e19;">
                        <h3 class="card-title">User Information</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('registrations.attend')}}">
                        @csrf
                        <input type="hidden" name="userCode" value="{{$registration->user_code}}">
                        <div class="card-body">
                            <div class="form-group col-12" style="float: left;">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="{{ $registration->first_name }}" disabled>

                            </div>
                            <div class="form-group col-12" style="float: left;">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="{{$registration->last_name}}" disabled>

                            </div>
                            <div class="form-group col-12" style="float: left;">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$registration->email}}" disabled>

                            </div>
                            <div class="form-group col-12" style="float: left;">
                                <label for="phone" class="col-12">Phone</label>
                                <input type="tel" class="form-control col-12"  name="phone"  value="{{$registration->phone}}" disabled>
                            </div>

                            <div class="form-group col-12" style="float: left;">
                                <label for="governorate" class="col-12">Governorate</label>
                                <input type="text" class="form-control col-12" name="governorate" id="governorate" value="{{$registration->governorate}}" disabled>
                            </div>
                            <div class="form-group col-12" style="float: left;">
                                <label for="venue" class="col-12">Venue</label>
                                <input type="text" class="form-control col-12" name="venue" id="venue" value="{{$registration->venue}}" disabled>
                            </div>

                        </div>

                        @if ($registration->is_attend == 0)
                        <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #df0e19;">Attend</button>
                            </div>
                        @endif

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

