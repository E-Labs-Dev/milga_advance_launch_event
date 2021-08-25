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
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="icon" type="image" href="{{ asset('images/fav-icon.png') }}">
    @include('layouts.includes.website.style')

    @include('layouts.includes.messages.style')
    <!-- overlayScrollbars -->
    <title>Milga</title>

    <style>
        @media print {
            @page {
                size: 105mm 148mm !important;
                margin: 0px 5vw !important;
            }

            header,
            .action-div-show,
            .view-page-content {
                display: none !important;
            }

            .main-page-content {
                display: flex !important;
            }
        }

        .view-page-content {
            margin-top: 160px;
        }

        .action-div-show {
            display: flex;
            justify-content: center;

            /* position: fixed;
            bottom: 20%; */
            width: 100%;
            margin-bottom: 20px;
        }

        .action-div-show a {
            padding: 10px 0px;
            background-color: #df0e19;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
            color: #fff !important;
            text-decoration: unset;
            width: 140px;
            text-align: center;
        }

        .main-page-content {
            height: 100vh;
            width: 100%;

            position: fixed;
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            font-size: 30px;
            font-weight: bold;
            color: #305b80;
            font-family: sans-serif;
            margin-top: -70px;
        }

        .information-div {
            padding: 0px 5vw;
        }

    </style>

    <script>
        function print_page() {
            window.print();

            let button = document.getElementById('submit-button-id');

            if (button.innerText == 0) {
                button.click();
            }
        }
    </script>

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <img src="{{ asset('images/logo.png') }}">
                </div>
                <!--col-lg-3-->
                <div class="col-lg-3 col-6 mobile">
                    <img src="{{ asset('images/logo2.png') }}">
                </div>
                <!--col-lg-3-->

                <div class="col-lg-6 col-md-6">

                </div>
                <!--col-lg-6-->
                <div class="col-lg-3 col-md-3 web">
                    <img src="{{ asset('images/logo2.png') }}">
                </div>
                <!--col-lg-3-->

            </div>
            <!--row-->
        </div>
        <!--container-->
    </header>

    <div class="main-page-content" id="main-page-content">
        <div class="information-div">
            <p id="dr_name">Dr. {{ $registration->first_name }} {{ $registration->last_name }}</p>
            <p class="mt-4">ID: {{ $registration->user_code }}</p>
        </div>

    </div>




    <!-- Main content -->



    <section class="content view-page-content">

        <div class="action-div-show">
            <a class="mr-3" onclick="print_page()">Print</a>
            <a href="{{ route('usher.home') }}">Go Back</a>
        </div>


        <div class="container-fluid">
            {{-- <div style="margin: 9px 25%;">
                <a href="{{ route('usher.home') }}" class="btn-info" style="padding: 11px;">Go Back</a>
            </div> --}}
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
                        <form method="POST" action="{{ route('registrations.attend') }}"
                            style="    background-color: #f8f9fa;">
                            @csrf
                            <input type="hidden" name="userCode" value="{{ $registration->user_code }}">
                            <div class="card-body">
                                <div class="form-group col-12" style="float: left;">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="Enter first name" value="{{ $registration->first_name }}"
                                        disabled>

                                </div>
                                <div class="form-group col-12" style="float: left;">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Enter last name" value="{{ $registration->last_name }}"
                                        disabled>

                                </div>
                                <div class="form-group col-12" style="float: left;">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email" value="{{ $registration->email }}" disabled>

                                </div>
                                <div class="form-group col-12" style="float: left;">
                                    <label for="phone" class="col-12" style="padding: 0;">Phone</label>
                                    <input type="tel" class="form-control col-12" name="phone"
                                        value="{{ $registration->phone }}" disabled>
                                </div>

                                <div class="form-group col-12" style="float: left;">
                                    <label for="governorate" class="col-12" style="padding: 0;">Governorate</label>
                                    <input type="text" class="form-control col-12" name="governorate" id="governorate"
                                        value="{{ $registration->governorate }}" disabled>
                                </div>
                                <div class="form-group col-12" style="float: left;">
                                    <label for="venue" class="col-12" style="padding: 0;">Venue</label>
                                    <input type="text" class="form-control col-12" name="venue" id="venue"
                                        value="{{ $registration->venue }}" disabled>
                                </div>

                                <div class="form-group col-12" style="float: left;">
                                    <label for="medical_representative" class="col-12" style="padding: 0;">Medical
                                        representative</label>
                                    <input type="text" class="form-control col-12" name="medical_representative"
                                        id="medical_representative"
                                        value="{{ $registration->medical_representative }}" disabled>
                                </div>

                            </div>

                             @if ($registration->is_attend == 0)
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #df0e19;"
                                    id="submit-button-id">
                                    Attended
                                </button>
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

    <script>
        const dr_name = document.getElementById('dr_name').innerText;

        if (dr_name.length > 15) {
            const main_page_content = document.getElementById("main-page-content");
            main_page_content.style.fontSize = "25px";

            if (dr_name.length > 20) {
                main_page_content.style.fontSize = "23px";
            }

            if (dr_name.length > 25) {
                main_page_content.style.fontSize = "20px";
            }
        }
    </script>

    <!-- /.content -->
    @include('layouts.includes.messages.scripts')
</body>

</html>
