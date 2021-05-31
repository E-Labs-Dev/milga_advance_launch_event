@extends('layouts.master_website')

@section('content')
    <header class="header2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <img src="{{asset('images/logo2.png')}}">
                </div><!--col-lg-3-->
                <div class="col-lg-3 col-6 mobile mobile-head2">
                   <a href=""> <p><span class="img-user"><img src="{{asset('images/man.png')}}"></span><span class="name-user">Hagar ElKamash</span></p></a>
                </div><!--col-lg-3-->

                <div class="col-lg-6 col-md-6">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#agenda">Agenda <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#speakers">Speakers’ Biography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#games">Digital Magazine</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="#">Survey</a>
                                </li>
                            </ul>

                        </div>
                    </nav>

                </div><!--col-lg-6-->
                <div class="col-lg-3 col-md-3 web">
                    <p><span class="img-user"><img src="{{asset('images/man.png')}}"></span><span class="name-user">Hagar ElKamash</span></p>
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
                                <video   controls  id="myVideo">
                                    <source src="{{asset('VID-20210308-WA0042.mp4')}}" type="video/mp4">
                                </video>

                            </div><!--second-layer-->
                        </div><!--video-->
                    </div><!--col-10-->
                </div> <!--row-->

            </div><!--container-->
        </div><!--div-video-->

        <div class="program-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Scientific Program</h4>
                        <p>Feel Free to Contact Us for the Event Conference Info</p>
                    </div><!--col-lg-6-->
                    <div class="col-lg-6">
                        <img src="{{asset('images/IMG_9109.png')}}">
                    </div><!--col-lg-6-->

                </div>
            </div>
        </div><!--program-div-->
        <div class="registration-div agenda"  id="agenda">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12">
                        <h2 class="title-left">Our Agenda</h2>
                    </div>
                    <div class="col-10">
                        <form>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#agenda1">
                  <span>
                    30<sup>th</sup>
                    <span class="month-name">July  </span>
                    <span class="day-name">Day 1</span>
                  </span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#agenda2">
                  <span>
                    6<sup>th</sup>
{{--                    <span class="month-name">August  </span>--}}
                    <span class="day-name">Day 2</span>
                  </span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane  active" id="agenda1">
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone2.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone2.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Break
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone2.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
                                    <div class="line-div">
                                        <ul>
                                            <li>2:30 pm–2:45 pm</li>
                                            <li class="border"></li>
                                            <li>
                                                Hematology Services, Yemen
                                                <span><img src="{{asset('images/microphone.png')}}"><small>by</small>Abdulqader Hebshi (Yemen)</span>
                                            </li>

                                        </ul>
                                    </div><!--line-div-->

                                </div><!--end tab1-->
                                <div class="tab-pane container fade" id="agenda2">
                                    August
                                </div><!--end tab2-->
                            </div>


                        </form>
                    </div><!--col-10-->
                </div> <!--row-->
            </div><!--container-->


        </div><!--registration-div-->


        <div class="speakers" id="speakers">
            <div class="container">
                <h4>Meet Our Conference Speakers</h4>
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="div-box">
                                    <img class="image-border" src="{{asset('images/image-border.png')}}">
                                    <img class="main-image" src="{{asset('images/speaker.png')}}">
                                </div><!--div-box-->
                                <div class="text-box">
                                    <h3>Prof. Nada Tarawah, MD</h3>
                                    <p>President, Middle East and North
                                        Africa Hematology League</p>
                                </div><!--text-box-->
                            </div><!--col-lg-4-->
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="div-box">
                                    <img class="image-border" src="{{asset('images/image-border.png')}}">
                                    <img class="main-image" src="{{asset('images/speaker.png')}}">
                                </div><!--div-box-->
                                <div class="text-box">
                                    <h3>Prof. Nada Tarawah, MD</h3>
                                    <p>President, Middle East and North
                                        Africa Hematology League</p>
                                </div><!--text-box-->
                            </div><!--col-lg-4-->
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="div-box">
                                    <img class="image-border" src="{{asset('images/image-border.png')}}">
                                    <img class="main-image" src="{{asset('images/speaker.png')}}">
                                </div><!--div-box-->
                                <div class="text-box">
                                    <h3>Prof. Nada Tarawah, MD</h3>
                                    <p>President, Middle East and North
                                        Africa Hematology League</p>
                                </div><!--text-box-->
                            </div><!--col-lg-4-->
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="div-box">
                                    <img class="image-border" src="{{asset('images/image-border.png')}}">
                                    <img class="main-image" src="{{asset('images/speaker.png')}}">
                                </div><!--div-box-->
                                <div class="text-box">
                                    <h3>Prof. Nada Tarawah, MD</h3>
                                    <p>President, Middle East and North
                                        Africa Hematology League</p>
                                </div><!--text-box-->
                            </div><!--col-lg-4-->
                        </div><!--row-->
                    </div><!--col-lg-10-->


                </div>
            </div>
        </div><!--speakers-->

        <div class="registration-div agenda score" id="games" >
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12">
                        <h2 class="title-left">Games Score</h2>
                    </div>
                    <div class="col-10 padding-score">
                        <h3 class="title-score"><span><img src="{{asset('images/puzzle.png')}}"></span>Game Name</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th >#</th>
                                <th>Name</th>
                                <th>Level</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <p><span><img src="{{asset('images/1.png')}}"></span> Ahmed Hassan</p>
                                </td>
                                <td>15</td>
                                <td>215</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <p><span><img src="{{asset('images/2.png')}}"></span> Sara Hassan </p>
                                </td>
                                <td>11</td>
                                <td>205</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <p><span><img src="{{asset('images/3.png')}}"></span>  Amir Kelany</p>
                                </td>
                                <td>9</td>
                                <td>190</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <p><span><img src="{{asset('images/4.png')}}"></span> Salma Dief </p>
                                </td>
                                <td>7</td>
                                <td>183</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <p><span><img src="{{asset('images/5.png')}}"></span> Hoda Abdlaah </p>
                                </td>
                                <td>8</td>
                                <td>175</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <p><span><img src="{{asset('images/6.png')}}"></span> Salah jahen </p>
                                </td>
                                <td>6</td>
                                <td>140</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>
                                    <p><span><img src="{{asset('images/7.png')}}"></span> Sayed Wahba </p>
                                </td>
                                <td>5</td>
                                <td>132</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    <p><span><img src="{{asset('images/8.png')}}"></span> Eman Assy  </p>
                                </td>
                                <td>2</td>
                                <td>98</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    <p><span><img src="{{asset('images/9.png')}}"></span> Salem Raya </p>
                                </td>
                                <td>1</td>
                                <td>43</td>
                            </tr>

                            </tbody>
                        </table>

                    </div><!--col-10-->
                </div> <!--row-->
            </div><!--container-->


        </div><!--registration-div-->
    </section><!--content-->

@endsection
