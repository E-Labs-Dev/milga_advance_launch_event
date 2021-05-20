<!doctype html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--IE compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <title>Milga</title>
    @include('layouts.includes.website.style')
    @include('layouts.includes.messages.style')
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
                <ul class="counter">
                    <li id="done"> <h3>Launching Soon</h3></li>
                    <li id="days" class="bg"><span>days</span></li>
                    <li id="hours" class="bg"></li>
                    <li id="mins" class="bg"></li>
                    <li> <h2 id="end" ></h2></li>
                </ul>

            </div><!--col-lg-6-->
            <div class="col-lg-3 col-md-3 web">
                <img src="{{asset('images/logo2.png')}}">
            </div><!--col-lg-3-->

        </div><!--row-->
    </div><!--container-->
</header>

<section class="banner">
    <img class="image-banner" src="{{asset('images/banner.png')}}">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Advanced <span>Solution</span></h3>
                    <p>Offering higher efficacy through an innovative medication for
                        neurophaty Patients</p>
                </div><!--col-lg-6-->
                <div class="col-lg-6">
                    <div class="main-div">
                        <div   ><span><img src="images/cal.png"></span>30 July 6:10 pm</div>
                        <a href="#reserve">Reserve Your Spot <span><img src="images/arrow.png"></span></a>
                    </div><!--main-div-->
                </div><!--col-lg-6-->

            </div><!--row-->
        </div><!--container-->
    </div><!--overlay-->
</section>

<section class="content">
    <div class="div-video">
        <img class="abs-image" src="{{asset('images/img.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Milga Advance</h2>
                </div><!--col-12-->
            </div> <!--row-->
            <div class="row" style="justify-content: center;">
                <div class="col-10">
                    <div class="video">
                        <div class="first-layer" id="layer1">
                            <img class="main-layer" src="{{asset('images/image-video.png')}}" >
                            <div class="overlay"><img src="{{asset('images/play.png')}}" onclick="showVideo()"></div><!--overlay-->
                        </div><!--first-layer-->
                        <div class="second-layer" style="display: none;" id="layer2">
                            <video   controls id="myVideo">
                                <source src="{{asset('VID-20210308-WA0042.mp4')}}" type="video/mp4">
                                ]                  </video>

                        </div><!--second-layer-->
                    </div><!--video-->
                </div><!--col-10-->
            </div> <!--row-->

        </div><!--container-->
    </div><!--div-video-->


    <div class="registration-div"  id="reserve" >
        <img class="image-regist" src="{{asset('images/image-regist.png')}}">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-10">
                    <h2>registration</h2>

                    @include('website.registration_form')

                </div><!--col-10-->
            </div> <!--row-->
        </div><!--container-->


    </div><!--registration-div-->
</section><!--content-->


<footer>
    <img class="img-footer" src="{{asset('images/IMG_9109.png')}}">
    <div class="top-footer">
        <div class="container">
            <div class="text">
                <img src="{{asset('images/logo2.png')}}">
                <span>SA2103230903 </span>   <span>Exp: 21/03/2022</span>  <span> APR/2021/RESP/4/I</span>
            </div>
            <hr>
        </div><!--container-->

    </div><!--top-footer-->
    <div class="end-footer">
        <div class="container">
            <div class="copy-right">
                <p>Copyright © 2021 Eva Cosmetics, Inc. all rights are save.</p>
                <img class="logo-footer" src="{{asset('images/logo.png')}}">
            </div>
        </div><!--container-->

    </div><!--top-footer-->
</footer>

@include('layouts.includes.website.scripts')
@include('layouts.includes.messages.scripts')
</body>
</html>
