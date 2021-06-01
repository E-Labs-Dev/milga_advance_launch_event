
@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="content">
        <div class="registration-div agenda profile" >
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12">
                        <h2 class="title-left">Profile Info</h2>
                    </div>
                    <div class=" col-lg-7 col-12 padding-score">
                        <div class="media  p-3">
                            <div class="image-round">
                                <img src="{{asset('images/man2.png')}}"  >
                            </div>
                            <div class="media-body">
                                <h4>{{$registration->first_name}} {{$registration->last_name}}</h4>
                                <p><span>Registration ID: </span>{{$registration->user_code}}</p>
                            </div>
                            <div class="gr-div">
                                <img class="qr" src="{{asset($registration->original_path)}}">
                            </div>

                        </div>


                    </div><!--col-7-->
                    <div class="col-10">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input type="text" value="{{$registration->email}}" disabled class="form-control">
                                    </div><!--form-group-->
                                </div><!--col-lg-6-->
                                <div class="col-lg-6 col-12">
                                    <label>Phone Number</label>
                                    <div class="form-group">
                                        <input type="text" value="{{$registration->phone}}" disabled class="form-control">
                                    </div><!--form-group-->
                                </div><!--col-lg-6-->
                                <div class="col-lg-6 col-12">
                                    <label>The Venue</label>
                                    <div class="form-group">
                                        <input type="text" value="{{$registration->venue}}" disabled class="form-control">
                                    </div><!--form-group-->
                                </div><!--col-lg-6-->
                                <div class="col-lg-6 col-12">
                                    <label>Governorate</label>
                                    <div class="form-group">
                                        <input type="text" value="{{$registration->governorate}}" disabled class="form-control">
                                    </div><!--form-group-->
                                </div><!--col-lg-6-->
                            </div><!--row-->
                        </form>
                    </div><!--col-10-->
                </div> <!--row-->
            </div><!--container-->


        </div><!--profile-->
        <div class="registration-div agenda games" >
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12">
                        <h2 class="title-left">Games Score</h2>
                    </div>
                    <div class="col-10 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="score-div">
                                    <div class="icon"><img src="{{asset('images/puzzle.png')}}"></div><!--icon-->
                                    <div class="text-game">
                                        <h3>Puzzle Game</h3>
                                        <h4 class="bg-level">Level 7</h4>
                                        <p class="score-p">Score : 250</p>
                                        <hr>
                                        <h5>Highest Score</h5>
                                        <p class="last-p"><span><img src="{{asset('images/score1.png')}}"></span>350</p>
                                    </div><!--text-game-->
                                </div><!--score-div-->
                            </div><!--col-lg-4-->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="score-div">
                                    <div class="icon"><img src="{{asset('images/chess-board.png')}}"></div><!--icon-->
                                    <div class="text-game">
                                        <h3>Chess Board</h3>
                                        <h4 class="bg-level">Level 2</h4>
                                        <p class="score-p">Score : 120</p>
                                        <hr>
                                        <h5>Highest Score</h5>
                                        <p class="last-p"><span><img src="{{asset('images/score2.png')}}"></span>230</p>
                                    </div><!--text-game-->
                                </div><!--score-div-->
                            </div><!--col-lg-4-->
                            <div class="col-lg-4 col-lg-4 col-sm-6 col-12">
                                <div class="score-div">
                                    <div class="icon"><img src="{{asset('images/joystick.png')}}"></div><!--icon-->
                                    <div class="text-game">
                                        <h3>Joy Stick</h3>
                                        <h4 class="bg-level">Level 4</h4>
                                        <p class="score-p">Score : 94</p>
                                        <hr>
                                        <h5>Highest Score</h5>
                                        <p class="last-p"><span><img src="{{asset('images/score3.png')}}"></span>150</p>
                                    </div><!--text-game-->
                                </div><!--score-div-->
                            </div><!--col-lg-4-->
                        </div><!--row-->

                    </div><!--col-10-->

                </div> <!--row-->
            </div><!--container-->


        </div><!--profile-->




    </section><!--content-->
@endsection
