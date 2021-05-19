<!doctype html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--IE compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <title>Milga</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}" />
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
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
                    <form action="{{route('registrations.store')}}" method ="POST" >
                        @csrf
                        <h3>Reserve your Spot</h3>
                        <div class="row reserve" >
                            <div class="col-lg-6 col-12">
                                <label>First Name <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Enter first name" required name="first_name" value="{{old('first_name')}}">
                            </div><!--col-12-->
                            <div class="col-lg-6 col-12">
                                <label>Last Name <span>*</span> </label>
                                <input type="text" class="form-control" placeholder="Enter last name" required name="last_name" value="{{old('last_name')}}">
                            </div><!--col-12-->

                            <div class="col-lg-6 col-12">
                                <label>Email <span>*</span> </label>
                                <input type="email" class="form-control" placeholder="Enter email address" required name="email" value="{{old('email')}}">
                            </div><!--col-12-->
                            <div class="col-lg-6 col-12">
                                <label>Mobile Number  <span>*</span> </label>
                                <input  class="form-control" placeholder="Enter mobile number" type="tel" required  id="phone" name="phone"  value="{{old('phone')}}">
                            </div><!--col-12-->
                            <div class="col-lg-6 col-12">
                                <label>Choose the venue <span>*</span> </label>
                                <select name="venue" required>
                                    <option value=""></option>
                                    <option value="30.7.2021 in Nile Ritz – Cairo" @if (old('venue') == '30.7.2021 in Nile Ritz – Cairo') selected @endif>30.7.2021 in Nile Ritz – Cairo</option>
                                    <option value="6.8.2021 in Sunrise – Alex" @if (old('venue') == '6.8.2021 in Sunrise – Alex') selected @endif>6.8.2021 in Sunrise – Alex</option>
                                </select>
                            </div><!--col-12-->
                            <div class="col-lg-6 col-12">
                                <label>Choose the Governorates <span>*</span> </label>
                                <select name="governorate" required>
                                    <option value=""></option>
                                    <option value="Matruh" @if (old('governorate') == 'Matruh') selected @endif>Matruh</option>
                                    <option value="Alexandria" @if (old('governorate') == 'Alexandria') selected @endif>Alexandria</option>
                                    <option value="Beheira" @if (old('governorate') == 'Beheira') selected @endif>Beheira</option>
                                    <option value="Kafr El Sheikh" @if (old('governorate') == 'Kafr El Sheikh') selected @endif>Kafr El Sheikh</option>
                                    <option value="Dakahlia" @if (old('governorate') == 'Dakahlia') selected @endif>Dakahlia</option>
                                    <option value="Damietta" @if (old('governorate') == 'Damietta') selected @endif>Damietta</option>
                                    <option value="Port Said" @if (old('governorate') == 'Port Said') selected @endif>Port Said</option>
                                    <option value="North Sinai" @if (old('governorate') == 'North Sinai') selected @endif>North Sinai</option>
                                    <option value="Gharbia" @if (old('governorate') == 'Gharbia') selected @endif>Gharbia</option>
                                    <option value="Monufia" @if (old('governorate') == 'Monufia') selected @endif>Monufia</option>
                                    <option value="Qalyubia" @if (old('governorate') == 'Qalyubia') selected @endif>Qalyubia</option>
                                    <option value="Sharqia" @if (old('governorate') == 'Sharqia') selected @endif>Sharqia</option>
                                    <option value="Ismailia" @if (old('governorate') == 'Ismailia') selected @endif>Ismailia</option>
                                    <option value="Giza" @if (old('governorate') == 'Giza') selected @endif>Giza</option>
                                    <option value="Faiyum" @if (old('governorate') == 'Faiyum') selected @endif>Faiyum</option>
                                    <option value="Cairo" @if (old('governorate') == 'Cairo') selected @endif>Cairo</option>
                                    <option value="Suez" @if (old('governorate') == 'Suez') selected @endif>Suez</option>
                                    <option value="South Sinai" @if (old('governorate') == 'South Sinai') selected @endif>South Sinai</option>
                                    <option value="Beni Suef" @if (old('governorate') == 'Beni Suef') selected @endif>Beni Suef</option>
                                    <option value="Minya" @if (old('governorate') == 'Minya') selected @endif>Minya</option>
                                    <option value="New Valley" @if (old('governorate') == 'New Valley') selected @endif>New Valley</option>
                                    <option value="Asyut" @if (old('governorate') == 'Asyut') selected @endif>Asyut</option>
                                    <option value="Red Sea" @if (old('governorate') == 'Red Sea') selected @endif>Red Sea</option>
                                    <option value="Sohag" @if (old('governorate') == 'Sohag') selected @endif>Sohag</option>
                                    <option value="Qena" @if (old('governorate') == 'Qena') selected @endif>Qena</option>
                                    <option value="Aswan" @if (old('governorate') == 'Aswan') selected @endif>Aswan</option>
                                    <option value="Luxor" @if (old('governorate') == 'Luxor') selected @endif>Luxor</option>
                                </select>
                            </div><!--col-12-->
                            <div class=" col-12">
                                <div class="send">
                                    <button type="submit">Submit <img src="{{asset('images/arrow.png')}}"></button>

                                </div>
                            </div><!--col-12-->
                        </div><!--row-->
                    </form>
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

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/intlTelInput.js')}}"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "build/js/utils.js",
    });
</script>
@include('layouts.includes.messages.scripts')
</body>
</html>
