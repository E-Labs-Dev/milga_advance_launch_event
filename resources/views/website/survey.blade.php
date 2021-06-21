@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="content">
        <div class="banner-survey">
            <img src="images/survey-banner.png">
        </div><!--banner-survey-->
        {{ Form::open(['route' => 'survey.store','method'=>'POST'])}}
        <div class="survey">
            <div class="container">
                <div class="survey-content">
                    <h4>Survey Questions</h4>
                    <ul class="progress-steps">
                        <li class="done">
                            <div class="step">
                                <div class="text">
                                    <h3>Are you willing to join our Virtual call?</h3>
                                    <div class="content-step">
                                        <textarea name="question_1"
                                                  placeholder="(Please specify timing in case you want us to contact at a specific time)"></textarea>
                                    </div>
                                </div><!--text-->
                            </div><!--step-->
                        </li>
                        <li class="done">
                            <div class="step">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ?</h3>
                                    <div class="content-step">
                                        <textarea name="question_2"
                                                  placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
                                    </div>
                                </div><!--text-->
                            </div><!--step-->
                        </li>
                        <li class="done">
                            <div class="step">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam?</h3>
                                    <div class="content-step">
                                        <select name="question_3">
                                            <option value="1">Please Choose...</option>
                                            <option value="2">Please Choose...</option>
                                            <option value="3">Please Choose...</option>
                                            <option value="4">Please Choose...</option>
                                        </select>
                                    </div>
                                </div><!--text-->
                            </div><!--step-->

                        </li>

                        <li>
                            <div class="step">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit? </h3>
                                    <div class="content-step flex-radio">
                                        <div class="custom-control custom-radio">
                                            <input type="radio"  name="question_4" class="custom-control-input" id="customRadio"
                                                   name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio">Lorem ipsum</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio"  name="question_4" class="custom-control-input" id="customRadio2"
                                                   name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio2">Lorem ipsum</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio"  name="question_4" class="custom-control-input" id="customRadio3"
                                                   name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio3">Lorem ipsum</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio"   name="question_4" class="custom-control-input" id="customRadio4"
                                                   name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio4">Lorem ipsum</label>
                                        </div>
                                    </div>

                                </div><!--text-->
                            </div><!--step-->

                        </li>
                        <li>
                            <div class="step">
                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ?</h3>
                                    <div class="content-step">
                                        <textarea   name="question_5"
                                            placeholder="(Please specify timing in case you want us to contact at a specific time)"></textarea>
                                    </div>
                                </div><!--text-->
                            </div><!--step-->
                        </li>
                        <li>
                            <div class="step">

                                <div class="text">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ? </h3>
                                    <div class="content-step flex-button">
                                        <input type="checkbox" class="btn-dark" name="question_6"> Lorem ipsum
                                        <input type="checkbox" class="btn-dark" name="question_6"> Lorem ipsum
                                        <input type="checkbox" class="btn-dark" name="question_6"> Lorem ipsum
                                        <input type="checkbox" class="btn-dark" name="question_6"> Lorem ipsum
                                        <input type="checkbox" class="btn-dark" name="question_6"> Lorem ipsum
                                    </div>
                                </div><!--text-->
                            </div><!--step-->

                        </li>

                    </ul>
                    <div class="btn-start2">
                        <button type="submit">Submit <span><img src="images/arrow.png"></span></button>
                    </div><!--btn-start-->
                </div>
            </div><!--container-->
        </div><!--survey-->
        {{Form::close()}}

    </section><!--content-->


@endsection
