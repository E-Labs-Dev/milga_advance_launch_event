@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="banner">
        <img class="image-banner" src="{{ asset('images/banner.png') }}">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Advanced <span>Solution</span></h3>
                        <p class="text-p">Offering higher efficacy through an innovative medication for
                            neurophaty Patients</p>
                    </div>
                    <!--col-lg-6-->


                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--overlay-->
    </section>

    <section class="content">
        <div class="div-video">
            <img class="abs-image" src="{{ asset('images/img.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Milga Advance</h2>
                    </div>
                    <!--col-12-->
                </div>
                <!--row-->
                <div class="row" style="justify-content: center;">
                    <div class="col-10">
                        <div class="video">
                            <div class="first-layer" id="layer1">
                                <img class="main-layer" src="{{ asset('images/image-video.png') }}">
                                <div class="overlay"><img src="{{ asset('images/play.png') }}" onclick="showVideo()">
                                </div>
                                <!--overlay-->
                            </div>
                            <!--first-layer-->
                            <div class="second-layer" style="display: none;" id="layer2">
                                <video controls id="myVideo">
                                    <source src="{{ asset('VID-20210308-WA0042.mp4') }}" type="video/mp4">
                                </video>

                            </div>
                            <!--second-layer-->
                        </div>
                        <!--video-->
                    </div>
                    <!--col-10-->
                </div>
                <!--row-->

            </div>
            <!--container-->
        </div>
        <!--div-video-->

        <div class="program-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Scientific Program</h4>
                        <p>Feel Free to Contact Us for the Event Conference Info</p>
                    </div>
                    <!--col-lg-6-->
                    <div class="col-lg-6">
                        <img src="{{ asset('images/IMG_9109.png') }}">
                    </div>
                    <!--col-lg-6-->

                </div>
            </div>
        </div>
        <!--program-div-->
        <div class="registration-div agenda" id="agenda">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12">
                        <h2 class="title-left">Our Agenda</h2>
                    </div>


                    @if (getCurrentUser()->venue == 'Cairo')

                        <div class="col-10">
                            <form class="border-content">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#agenda1">
                                            <span>
                                                30<sup>th</sup>
                                                <span class="month-name">July </span>
                                                <span class="day-name">Day 1</span>
                                            </span>

                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane  active" id="agenda1">
                                        <div class="line-div">
                                            <ul>
                                                <li>5:30 pm – 6:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Registration
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="line-div">
                                            <ul>
                                                <li>6:30 pm – 7:00 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    We are EVA Pharma (EVA Pharma Vision & Mission)
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Dr. Riad Armanious, EVA Pharma CEO
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>7:00 pm – 7:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Hyperglycemine in dibetic complications
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Professor Khaled El Hadidy
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>7:30 pm – 8:00 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Role of Benfotiamine in diabetic complications
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Professor Peter Kempler
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="line-div">
                                            <ul>
                                                <li>8:00 pm – 8:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Coffe Break
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>8:30 pm – 9:00 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Announcement of first clinical trial results comparing Oral Benfotiamine
                                                    Vs
                                                    IM Thiamine
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone2.png') }}">
                                                        By Abanoub Effat, Clinical trial author
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>9:00 pm – 9:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Milga Advance .. The Advabced solution
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Kirollos Magdy, Product Manager
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>9:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Dinner
                                                </li>
                                            </ul>
                                        </div>
                                        <!--line-div-->


                                    </div>
                                    <!--end tab1-->

                                    <!--end tab2-->
                                </div>


                            </form>
                        </div>
                    @else
                        <div class="col-10">
                            <form class="border-content">
                                <ul class="nav nav-tabs">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#agenda2">
                                            <span>
                                                6<sup>th</sup>

                                                <span class="month-name">August </span>

                                                <span class="day-name">Day 2</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!--end tab1-->
                                    <div class="tab-pane  active" id="agenda2">
                                        <div class="line-div">
                                            <ul>
                                                <li>5:30 pm – 6:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Registration
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="line-div">
                                            <ul>
                                                <li>6:30 pm – 7:00 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    We are EVA Pharma (EVA Pharma Vision & Mission)
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Dr. Riad Armanious, EVA Pharma CEO
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>7:00 pm – 7:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Hyperglycemine in dibetic complications
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Professor Khaled El Hadidy
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>7:30 pm – 8:00 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Role of Benfotiamine in diabetic complications
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Professor Peter Kempler
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="line-div">
                                            <ul>
                                                <li>8:00 pm – 8:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Coffe Break
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>8:30 pm – 9:00 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Announcement of first clinical trial results comparing Oral Benfotiamine
                                                    Vs
                                                    IM Thiamine
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone2.png') }}">
                                                        By Abanoub Effat, Clinical trial author
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>9:00 pm – 9:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Milga Advance .. The Advabced solution
                                                    <span>
                                                        <img class="main-layer"
                                                            src="{{ asset('images/microphone.png') }}">
                                                        By Kirollos Magdy, Product Manager
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li>9:30 pm</li>
                                                <li class="border"></li>
                                                <li>
                                                    Dinner
                                                </li>
                                            </ul>
                                        </div>
                                        <!--line-div-->
                                    </div>
                                    <!--end tab2-->
                                </div>


                            </form>
                        </div>
                    @endif

                    <!--col-10-->
                </div>
                <!--row-->
            </div>
            <!--container-->


        </div>
        <!--registration-div-->


        <div class="speakers" id="speakers">
            <div class="container">
                <h4>Meet Our Conference Speakers</h4>
                <!-- <div class="row" style="justify-content: center;">
                                                                <p style="text-align:center">The speakers of this event will be announced very soon! </p>
                                                            </div> -->

                <div class="row">
                    {{-- @foreach (range(1, 5) as $y) --}}
                    {{-- <div class="col-12 col-md-4 col-lg-3 col-xl speaker-main-div">
                            <img src="{{ asset("images/speakers/{$y}.png") }}">
                            <p class="speaker-title">Prof. Sara Tarawah, {{ $y }}</p>
                            <p class="speaker-desc">
                                President, Middle East and North
                                Africa Hematology League
                            </p>
                        </div> --}}



                    <div class="col-12 col-md-4 col-lg-3 col-xl speaker-main-div">
                        <img src="{{ asset('images/speakers/1.png') }}">
                        <p class="speaker-title">Prof. Peter Kempler</p>
                        <p class="speaker-desc">
                            President of the Hungarian Diabetes Association
                        </p>
                    </div>

                    <div class="col-12 col-md-4 col-lg-3 col-xl speaker-main-div">
                        <img src="{{ asset('images/speakers/2.png') }}">
                        <p class="speaker-title">Prof. Hisham El Hefnawy</p>
                        <p class="speaker-desc">
                            Professor of Diabetes & Endocrinology
                        </p>
                    </div>

                    <div class="col-12 col-md-4 col-lg-3 col-xl speaker-main-div">
                        <img src="{{ asset('images/speakers/3.png') }}">
                        <p class="speaker-title">Prof. Ibrahim El Ebrashy</p>
                        <p class="speaker-desc">
                            Professor of Internal Medicine, Cairo University
                        </p>
                    </div>

                    <div class="col-12 col-md-4 col-lg-3 col-xl speaker-main-div">
                        <img src="{{ asset('images/speakers/4.png') }}">
                        <p class="speaker-title">Prof. Khaled El Hadidy</p>
                        <p class="speaker-desc">
                            Professor of Internal Medicine & Diabetes
                        </p>
                    </div>

                    <div class="col-12 col-md-4 col-lg-3 col-xl speaker-main-div">
                        <img src="{{ asset('images/speakers/5.png') }}">
                        <p class="speaker-title">Prof. Fawzy El Mesallamy</p>
                        <p class="speaker-desc">
                            Professor of Diabetes & Endocrinology - Zagazig University
                        </p>
                    </div>



                    {{-- @endforeach --}}

                </div>

            </div>
        </div>
        <!--speakers-->

        <div class="registration-div agenda score" id="games">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12">
                        <h2 class="title-left">Games Score</h2>
                    </div>
                    <div class="col-10 padding-score">
                        <!--<h3 class="title-score"><span><img src="{{ asset('images/puzzle.png') }}"></span>Game Score</h3>-->
                        <br>
                        <p>Can't wait to play? Stay tuned for a lot of the entertaining games that will be live during
                            the event time.</p>
                        <!--<table class="table table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th >#</th>
                                                                            <th>Name</th>
                                                                            <th>Time</th>
                                                                            <th>Score</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @if (count($games) > 1)
                                                                    @foreach ($games as $key => $game)
                                                                        <tr>
                                                                            <td>{{ $key + 1 }}</td>
                                                                                <td>
                                                                                    <p><span><img src="{{ asset('images/man.png') }}"></span>{{ $game->first_name }} {{ $game->last_name }}</p>
                                                                                </td>
                                                                                <td>{{ $game->created_at }}</td>
                                                                                <td>{{ $game->score }}</td>
                                                                            </tr>
                                                                           @endforeach
                    @else
                                                                    <tr>

                                                                        <td> no </td>
                                                                        <td> one </td>
                                                                        <td> play </td>
                                                                        <td> yet</td>

                                                                    </tr>

                                            @endif
                                                                    </tbody>
                                                                </table>
                                            -->

                    </div>
                    <!--col-10-->
                </div>
                <!--row-->
            </div>
            <!--container-->


        </div>
        <!--registration-div-->
    </section>
    <!--content-->

@endsection
