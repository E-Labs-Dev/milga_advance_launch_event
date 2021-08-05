@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="content">
        <div class="banner-survey">
            <img src="images/survey-banner.png">
        </div>
        <!--banner-survey-->
        {{ Form::open(['route' => 'survey.store', 'method' => 'POST']) }}
        <div class="survey">
            <div class="container">
                <div class="survey-content">
                    <h4>Survey Questions</h4>

                    <div class="progress-steps row">
                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Full Name</h3>
                                    <div class="content-step">
                                        <input name="question_1" placeholder="Enter Full Name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Title</h3>
                                    <div class="content-step">
                                        <input name="question_2" placeholder="Enter Title">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Email</h3>
                                    <div class="content-step">
                                        <input name="question_3" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Mobile number</h3>
                                    <div class="content-step">
                                        <input name="question_4" placeholder="Enter Mobile number">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Specialty</h3>
                                    <div class="content-step">
                                        <input name="question_5" placeholder="Enter Specialty">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Department</h3>
                                    <div class="content-step">
                                        <input name="question_6" placeholder="Enter Department">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Full Address</h3>
                                    <div class="content-step">
                                        <input name="question_7" placeholder="Enter Full Address">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>City, Country</h3>
                                    <div class="content-step">
                                        <input name="question_8" placeholder="Enter City, Country">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Hospital/Organization</h3>
                                    <div class="content-step">
                                        <input name="question_9" placeholder="Enter Hospital/Organization">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="done col-12 col-lg-6">
                            <div class="step">
                                <div class="text">
                                    <h3>Hospital Address</h3>
                                    <div class="content-step">
                                        <input name="question_10" placeholder="Enter Hospital Address">
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <ul class="progress-steps">
                        <li>
                            <div class="step">
                                <div class="text">
                                    <h3>On a scale from 1 to 10, To what extent do you believe in the role of Benfotiamine
                                        in delaying diabetic complications? </h3>
                                    <div class="content-step flex-radio">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio_question_11" value="1">
                                            <label class="custom-control-label" for="customRadio_question_11">1</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio2_question_11" value="2">
                                            <label class="custom-control-label" for="customRadio2_question_11">2</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio3_question_11" value="3">
                                            <label class="custom-control-label" for="customRadio3_question_11">3</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio4_question_11" value="4">
                                            <label class="custom-control-label" for="customRadio4_question_11">4</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio5_question_11" value="5">
                                            <label class="custom-control-label" for="customRadio5_question_11">5</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio6_question_11" value="6">
                                            <label class="custom-control-label" for="customRadio6_question_11">6</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio7_question_11" value="7">
                                            <label class="custom-control-label" for="customRadio7_question_11">7</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio8_question_11" value="8">
                                            <label class="custom-control-label" for="customRadio8_question_11">8</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio9_question_11" value="9">
                                            <label class="custom-control-label" for="customRadio9_question_11">9</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_11" class="custom-control-input"
                                                id="customRadio10_question_11" value="10">
                                            <label class="custom-control-label" for="customRadio10_question_11">10</label>
                                        </div>
                                    </div>

                                </div>
                                <!--text-->
                            </div>
                            <!--step-->

                        </li>


                        <li>
                            <div class="step">
                                <div class="text">
                                    <h3>On a scale from 1 to 10, To what extent do would you recommend Milga Advance over
                                        injectable vitamin B complex?</h3>
                                    <div class="content-step flex-radio">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio_question_12" value="1">
                                            <label class="custom-control-label" for="customRadio_question_12">1</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio2_question_12" value="2">
                                            <label class="custom-control-label" for="customRadio2_question_12">2</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio3_question_12" value="3">
                                            <label class="custom-control-label" for="customRadio3_question_12">3</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio4_question_12" value="4">
                                            <label class="custom-control-label" for="customRadio4_question_12">4</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio5_question_12" value="5">
                                            <label class="custom-control-label" for="customRadio5_question_12">5</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio6_question_12" value="6">
                                            <label class="custom-control-label" for="customRadio6_question_12">6</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio7_question_12" value="7">
                                            <label class="custom-control-label" for="customRadio7_question_12">7</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio8_question_12" value="8">
                                            <label class="custom-control-label" for="customRadio8_question_12">8</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio9_question_12" value="9">
                                            <label class="custom-control-label" for="customRadio9_question_12">9</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_12" class="custom-control-input"
                                                id="customRadio10_question_12" value="10">
                                            <label class="custom-control-label" for="customRadio10_question_12">10</label>
                                        </div>
                                    </div>

                                </div>
                                <!--text-->
                            </div>
                            <!--step-->

                        </li>


                        <li>
                            <div class="step">
                                <div class="text">
                                    <h3>On a scale from 1 to 10, To what extent were you satisfied by the whole event?</h3>
                                    <div class="content-step flex-radio">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio_question_13" value="1">
                                            <label class="custom-control-label" for="customRadio_question_13">1</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio2_question_13" value="2">
                                            <label class="custom-control-label" for="customRadio2_question_13">2</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio3_question_13" value="3">
                                            <label class="custom-control-label" for="customRadio3_question_13">3</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio4_question_13" value="4">
                                            <label class="custom-control-label" for="customRadio4_question_13">4</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio5_question_13" value="5">
                                            <label class="custom-control-label" for="customRadio5_question_13">5</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio6_question_13" value="6">
                                            <label class="custom-control-label" for="customRadio6_question_13">6</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio7_question_13" value="7">
                                            <label class="custom-control-label" for="customRadio7_question_13">7</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio8_question_13" value="8">
                                            <label class="custom-control-label" for="customRadio8_question_13">8</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio9_question_13" value="9">
                                            <label class="custom-control-label" for="customRadio9_question_13">9</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_13" class="custom-control-input"
                                                id="customRadio10_question_13" value="10">
                                            <label class="custom-control-label" for="customRadio10_question_13">10</label>
                                        </div>
                                    </div>

                                </div>
                                <!--text-->
                            </div>
                            <!--step-->

                        </li>


                        <li>
                            <div class="step">
                                <div class="text">
                                    <h3>On a scale from 1 to 10, To what extent were you satisfied by the sepakers
                                        presentations today?</h3>
                                    <div class="content-step flex-radio">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio_question_14" value="1">
                                            <label class="custom-control-label" for="customRadio_question_14">1</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio2_question_14" value="2">
                                            <label class="custom-control-label" for="customRadio2_question_14">2</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio3_question_14" value="3">
                                            <label class="custom-control-label" for="customRadio3_question_14">3</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio4_question_14" value="4">
                                            <label class="custom-control-label" for="customRadio4_question_14">4</label>
                                        </div>


                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio5_question_14" value="5">
                                            <label class="custom-control-label" for="customRadio5_question_14">5</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio6_question_14" value="6">
                                            <label class="custom-control-label" for="customRadio6_question_14">6</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio7_question_14" value="7">
                                            <label class="custom-control-label" for="customRadio7_question_14">7</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio8_question_14" value="8">
                                            <label class="custom-control-label" for="customRadio8_question_14">8</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio9_question_14" value="9">
                                            <label class="custom-control-label" for="customRadio9_question_14">9</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="question_14" class="custom-control-input"
                                                id="customRadio10_question_14" value="10">
                                            <label class="custom-control-label" for="customRadio10_question_14">10</label>
                                        </div>
                                    </div>

                                </div>
                                <!--text-->
                            </div>
                            <!--step-->

                        </li>

                    </ul>
                    <div class="btn-start2">
                        <button type="submit">Submit <span><img src="images/arrow.png"></span></button>
                    </div>
                    <!--btn-start-->
                </div>
            </div>
            <!--container-->
        </div>
        <!--survey-->
        {{ Form::close() }}

    </section>
    <!--content-->


@endsection
