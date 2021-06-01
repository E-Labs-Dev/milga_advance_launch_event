
@extends('layouts.master_website')

@section('content')

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
                <a href="{{route('home')}}"> <img src="{{asset('images/logo.png')}}"> </a>
            </div><!--col-lg-3-->
            <div class="col-lg-3 col-6 mobile">
                <a href="{{route('home')}}">   <img src="{{asset('images/logo2.png')}}"> </a>
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
                <a href="{{route('home')}}">  <img src="{{asset('images/logo2.png')}}"> </a>
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
                    <p class="text-p">Offering higher efficacy through an innovative medication for
                        neurophaty Patients</p>
                </div><!--col-lg-6-->
                <div class="col-lg-6">
                    <div class="main-div web-reserve">
                        <div >
                            <img class="img-cal" src="{{asset('images/cal.png')}}">
                            <p> <span class="red-color">30<sup>th</sup>July</span>6:00 pm to 10:00 p.m</p>
                            <p class="block-span"><span class="red-color">6<sup>th</sup>August</span>6:00 pm to 10:00 p.m</p>
                        </div>
                        <a href="#reserve">Reserve Your Spot <span><img src="{{asset('images/arrow.png')}}"></span></a>
                    </div><!--main-div-->
                </div><!--col-lg-6-->

            </div><!--row-->
        </div><!--container-->
    </div><!--overlay-->
</section>
<div class="mobile-reserve">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-12 col-md-6 col-12">
                <div class="main-div">
                    <div>
                        <img class="img-cal" src="{{asset('images/cal.png')}}">
                        <p> <span class="red-color">30<sup>th</sup>July</span>6:00 pm to 10:00 p.m</p>
                        <p class="block-span"><span class="red-color">6<sup>th</sup>August</span>6:00 pm to 10:00 p.m</p>
                    </div>
                    <a  href="#reserve">Reserve Your Spot <span><img src="{{asset('images/arrow2.png')}}"></span></a>
                </div><!--main-div-->
            </div><!--col-lg-12-->
        </div>

    </div><!--container-->

</div>
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
                            <video   controls  id="myVideo">
                                <source src="{{asset('VID-20210308-WA0042.mp4')}}" type="video/mp4">
                            </video>

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
                    <h2>Reserve your Spot</h2>
                    {{ Form::open() }}
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#regitration">Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#login">login</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            {{--regitration section--}}

                            <div class="tab-pane container active" id="regitration">
                                <div class="row reserve" >
                                    <div class="col-lg-6 col-12">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter first name"  required name="first_name" >
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12">
                                        <label>Last Name <span>*</span> </label>
                                        <input type="text" class="form-control" placeholder="Enter last name" required name="last_name" >
                                    </div><!--col-12-->

                                    <div class="col-lg-6 col-12">
                                        <label>Email <span>*</span> </label>
                                        <input type="email" class="form-control" placeholder="Enter email address" required name="email" >
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12">
                                        <label>Mobile Number  <span>*</span> </label>
                                        <input  class="form-control" placeholder="Enter mobile number"  id="phone-registration"  type="tel" required  >
                                        <input type="hidden" name="full_phone" id="full_phone">
                                        <span id="error-msg-registration" class="hide"></span>
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12">
                                        <label>Choose the Governorate <span>*</span> </label>
                                        <select name="governorate" required>
                                            <option value=""></option>
                                            <option value="Matruh">Matruh</option>
                                            <option value="Alexandria">Alexandria</option>
                                            <option value="Beheira" >Beheira</option>
                                            <option value="Kafr El Sheikh" >Kafr El Sheikh</option>
                                            <option value="Dakahlia" >Dakahlia</option>
                                            <option value="Damietta" >Damietta</option>
                                            <option value="Port Said">Port Said</option>
                                            <option value="North Sinai" >North Sinai</option>
                                            <option value="Gharbia">Gharbia</option>
                                            <option value="Monufia">Monufia</option>
                                            <option value="Qalyubia">Qalyubia</option>
                                            <option value="Sharqia">Sharqia</option>
                                            <option value="Ismailia">Ismailia</option>
                                            <option value="Giza">Giza</option>
                                            <option value="Faiyum">Faiyum</option>
                                            <option value="Cairo">Cairo</option>
                                            <option value="Suez">Suez</option>
                                            <option value="South Sinai" >South Sinai</option>
                                            <option value="Beni Suef">Beni Suef</option>
                                            <option value="Minya">Minya</option>
                                            <option value="New Valley">New Valley</option>
                                            <option value="Asyut">Asyut</option>
                                            <option value="Red Sea">Red Sea</option>
                                            <option value="Sohag">Sohag</option>
                                            <option value="Qena">Qena</option>
                                            <option value="Aswan">Aswan</option>
                                            <option value="Luxor">Luxor</option>
                                        </select>
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12">
                                        <label>Choose the venue <span>*</span> </label>
                                        <select name="venue" required>
                                            <option value=""></option>
                                            <option value="30.7.2021 in Nile Ritz – Cairo" >30.7.2021 in Nile Ritz – Cairo</option>
                                            <option value="6.8.2021 in Sunrise – Alex">6.8.2021 in Sunrise – Alex</option>
                                        </select>
                                    </div><!--col-12-->
                                    <div class=" col-12">
                                        <div class="send">
                                            <button type="button" id="registration_form">Submit <img src="{{asset('images/arrow.png')}}"></button>
                                        </div>
                                    </div><!--col-12-->


                                </div><!--row-->

                            </div><!--end tab1-->

                            {{--login section--}}
                            <div class="tab-pane container fade" id="login">
                                <div class="row reserve login-div" >
                                    <div class="col-lg-6 col-12">
                                        <label>Phone Number </label>
                                        <input class="form-control" placeholder="Enter mobile number" id="phone-login"  type="tel" required >
                                        <input type="hidden" name="full_phone_login" id="full_phone_login">
                                        <span id="error_msg_login" class="hide"></span>
                                    </div><!--col-12-->
                                    <div class=" col-12">
                                        <div class="send">
                                            <button type="button" id="login_form">login <img src="{{asset('images/arrow.png')}}"></button>
                                        </div>
                                    </div><!--col-12-->
                                </div><!--row-->
                            </div><!--end tab2-->
                        </div>
                    {{ Form::close() }}
                </div><!--col-10-->
            </div> <!--row-->
        </div><!--container-->


    </div><!--registration-div-->
</section><!--content-->

@endsection('content')
