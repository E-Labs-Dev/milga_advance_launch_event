@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

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

                      <span class="month-name">August  </span>

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
                                            <li></li>
                                            <li class="border"></li>
                                            <li>
                                                The agenda of this event will be announced very soon! 
                                            </li>

                                        </ul>
                                    </div><!--line-div-->


                                </div><!--end tab1-->
                                <div class="tab-pane container fade" id="agenda2">
                                     <div class="line-div">
                                        <ul>
                                            <li></li>
                                            <li class="border"></li>
                                            <li>
                                                The agenda of this event will be announced very soon! 
                                            </li>

                                        </ul>
                                    </div><!--line-div-->
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
                    <p style="text-align:center">The speakers of this event will be announced very soon! </p>
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
                        <!--<h3 class="title-score"><span><img src="{{asset('images/puzzle.png')}}"></span>Game Score</h3>-->
                        <br>
                        <p>Can't wait to play? Stay tuned for a lot of the entertaining games that will be live during the event time.</p>
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
                            @if(count($games) > 1)
                               @foreach($games as $key => $game)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>
                                        <p><span><img src="{{asset('images/man.png')}}"></span>{{$game->first_name}} {{$game->last_name}}</p>
                                    </td>
                                    <td>{{$game->created_at}}</td>
                                    <td>{{$game->score}}</td>
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

                    </div><!--col-10-->
                </div> <!--row-->
            </div><!--container-->


        </div><!--registration-div-->
    </section><!--content-->

@endsection
