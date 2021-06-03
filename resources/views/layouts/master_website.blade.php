<!doctype html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--IE compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Milga</title>

    @include('layouts.includes.website.style')
    @include('layouts.includes.messages.style')


</head>

<body>

@yield('content')

<footer>
    <img class="img-footer" src="{{asset('images/IMG_9109.png')}}">
    <div class="top-footer">
        <div class="container">
            <div class="text">
                <img src="{{asset('images/logo2.png')}}">
                
            </div>
            <hr>
        </div><!--container-->

    </div><!--top-footer-->
    <div class="end-footer">
        <div class="container">
            <div class="copy-right">
                <p>Copyright © 2021 Eva Pharma, Inc. all rights are save.</p>
                <img class="logo-footer" src="{{asset('images/logo.png')}}">
            </div>
        </div><!--container-->

    </div><!--top-footer-->
</footer>

@include('layouts.includes.website.scripts')
@include('layouts.includes.messages.scripts')

</body>
</html>
