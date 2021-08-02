
@extends('layouts.master_website')
@section('style')
    <style>
        label[class=error] {
            color: red;
        }
        #error-msg-registration{
            color: red;
        }
        #error_msg_login{
             color: red;
        }
    </style>
@endsection
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
                        neuropathy patients</p>
                </div><!--col-lg-6-->
                <div class="col-lg-6">
                    <div class="main-div web-reserve">
                        <div >
                            <img class="img-cal" src="{{asset('images/cal.png')}}">
                            <p> <span class="red-color">30<sup>th</sup>July</span ><span class="dates-span">5:30 pm to 10:00 p.m</span></p>
                            <p class="block-span"><span class="red-color dates-span2">6<sup>th</sup>August</span> <span >6:00 pm to 10:00 p.m</span></p>
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
                        <p> <span class="red-color">30<sup>th</sup>July</span>5:30 pm to 10:00 pm</p>
                        <p class="block-span"><span class="red-color">6<sup>th</sup>August</span>6:00 pm to 10:00 pm</p>
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

                    <div class="border-content">
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
                                {{ Form::open(['route' => 'registrations.store','method'=>'POST','name'=>'registration_form'])}}
                                <div class="row reserve" >

                                    <div class="col-lg-6 col-12 div-field">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter first name"  required name="first_name" >
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Last Name <span>*</span> </label>
                                        <input type="text" class="form-control" placeholder="Enter last name" required name="last_name" >
                                    </div><!--col-12-->

                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Email <span>*</span> </label>
                                        <input type="email" class="form-control" placeholder="Enter email address" required name="email" >
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field">
                                        <label>whatsApp Number  <span>*</span> </label>
                                        <input  class="form-control" placeholder="Enter mobile number"  id="phone-registration"  type="tel" required  >
                                        <input type="hidden" name="phone" id="full_phone">
                                        <span id="error-msg-registration" class="hide"></span>
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field">
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
                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Choose the Venue <span>*</span> </label>
                                        <select name="venue" required>
                                            <option value=""></option>
                                            <option value="Cairo" >30.7.2021 in Nile Ritz – Cairo</option>
                                            <option value="Alex">6.8.2021 in Sunrise – Alex</option>
                                        </select>
                                    </div><!--col-12-->

                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Medical Representative <span>*</span> </label>
                                        <select name="medical_representative" required>
                                            <option value=""></option>
                                            <option value="Abanoub Gergis Nader">Abanoub Gergis Nader</option>
                                            <option value="Abanoub Magdy Ibrahim">Abanoub Magdy Ibrahim</option>
                                            <option value="Abanoub Melad">Abanoub Melad</option>
                                            <option value="Abanoub Nashaat">Abanoub Nashaat</option>
                                            <option value="AHMED ELNAGGAR">AHMED ELNAGGAR</option>
                                            <option value="Ahmed Hussien">Ahmed Hussien</option>
                                            <option value="Ahmed khaled Ali">Ahmed khaled Ali</option>
                                            <option value="Ahmed Mohamed Amin Keshta">Ahmed Mohamed Amin Keshta</option>
                                            <option value="Ahmed mohamed Hosafy">Ahmed mohamed Hosafy</option>
                                            <option value="Ahmed Shawaf">Ahmed Shawaf</option>
                                            <option value="Ahmed Sobhy Mohamed">Ahmed Sobhy Mohamed</option>
                                            <option value="Akram Ishaak">Akram Ishaak</option>
                                            <option value="Amal negm">Amal negm</option>
                                            <option value="Amr Saad Shehab">Amr Saad Shehab</option>
                                            <option value="Amr Sayed">Amr Sayed</option>
                                            <option value="Andew Samier Mikhail">Andew Samier Mikhail</option>
                                            <option value="Andrew Magdy Ragheb Botrous">Andrew Magdy Ragheb Botrous
                                            </option>
                                            <option value="Antoine Medhat">Antoine Medhat</option>
                                            <option value="Antonios Nabil">Antonios Nabil</option>
                                            <option value="Asmaa Nabil">Asmaa Nabil</option>
                                            <option value="Aya Abo Al Yazed">Aya Abo Al Yazed</option>
                                            <option value="Ayman Samir Gad">Ayman Samir Gad</option>
                                            <option value="Baher Benyamin">Baher Benyamin</option>
                                            <option value="Beshoy Botros">Beshoy Botros</option>
                                            <option value="Beshoy Osama">Beshoy Osama</option>
                                            <option value="Bishoy Magdy">Bishoy Magdy</option>
                                            <option value="Clara Akram Gamal">Clara Akram Gamal</option>
                                            <option value="Dr. Ahmed Helal">Dr. Ahmed Helal</option>
                                            <option value="Dr. Hadeer Ahmed">Dr. Hadeer Ahmed</option>
                                            <option value="Dr. Mary Farouk">Dr. Mary Farouk</option>
                                            <option value="Dr. Wafaa Abdelwahab">Dr. Wafaa Abdelwahab</option>
                                            <option value="Fadi Ngaui">Fadi Ngaui</option>
                                            <option value="Fady Fekry">Fady Fekry</option>
                                            <option value="Fady Khairy">Fady Khairy</option>
                                            <option value="Fatma Hamdy">Fatma Hamdy</option>
                                            <option value="Gamal Abd ELNasser">Gamal Abd ELNasser</option>
                                            <option value="Gamal Deif">Gamal Deif</option>
                                            <option value="Hamdy Elkharashi">Hamdy Elkharashi</option>
                                            <option value="Kerolos George">Kerolos George</option>
                                            <option value="khaled mamdouh zakaria">khaled mamdouh zakaria</option>
                                            <option value="Khaled Naguib">Khaled Naguib</option>
                                            <option value="Kirollos Sleem Sedarous">Kirollos Sleem Sedarous</option>
                                            <option value="Madlen Ayad">Madlen Ayad</option>
                                            <option value="Maged Saad">Maged Saad</option>
                                            <option value="Mahmoud Hassan">Mahmoud Hassan</option>
                                            <option value="Mamdouh Mories">Mamdouh Mories</option>
                                            <option value="Marco Nagy Ibrahim">Marco Nagy Ibrahim</option>
                                            <option value="Mariam Ibrahim Nessim">Mariam Ibrahim Nessim</option>
                                            <option value="Mariana Samir">Mariana Samir</option>
                                            <option value="Marianne Mansour Gad">Marianne Mansour Gad</option>
                                            <option value="Marina George">Marina George</option>
                                            <option value="Marina Ibrahim">Marina Ibrahim</option>
                                            <option value="Mario Maged">Mario Maged</option>
                                            <option value="Mario Mehany">Mario Mehany</option>
                                            <option value="Mario Mehany Fares">Mario Mehany Fares</option>
                                            <option value="Mark Kamal Moussa">Mark Kamal Moussa</option>
                                            <option value="Mark Shawky Botros">Mark Shawky Botros</option>
                                            <option value="Mary Loqa">Mary Loqa</option>
                                            <option value="Mary Magdy kamel">Mary Magdy kamel</option>
                                            <option value="Mena Fekry Foad">Mena Fekry Foad</option>
                                            <option value="Michael Adel Assad">Michael Adel Assad</option>
                                            <option value="Michael Adly">Michael Adly</option>
                                            <option value="Michael George">Michael George</option>
                                            <option value="Michael Talaat">Michael Talaat</option>
                                            <option value="Michael Tharwat">Michael Tharwat</option>
                                            <option value="Mina Adel Rassmy">Mina Adel Rassmy</option>
                                            <option value="Mina Hany Hanna Nessim">Mina Hany Hanna Nessim</option>
                                            <option value="Mina Magdy Rezk">Mina Magdy Rezk</option>
                                            <option value="Mina Makram Moawad">Mina Makram Moawad</option>
                                            <option value="Mina Raouf">Mina Raouf</option>
                                            <option value="Mina Sedra">Mina Sedra</option>
                                            <option value="Miry William Gouda">Miry William Gouda</option>
                                            <option value="Mohamed Abd ELAziz">Mohamed Abd ELAziz</option>
                                            <option value="Mohamed Elzgheby">Mohamed Elzgheby</option>
                                            <option value="Mohamed Hossam">Mohamed Hossam</option>
                                            <option value="Mohamed Magdy Alshiaty">Mohamed Magdy Alshiaty</option>
                                            <option value="Mohamed Salah">Mohamed Salah</option>
                                            <option value="Mohamed Tarek Elfarahaty">Mohamed Tarek Elfarahaty</option>
                                            <option value="Mohammed Sarhan">Mohammed Sarhan</option>
                                            <option value="Mostafa Ahmed AbdelAziz">Mostafa Ahmed AbdelAziz</option>
                                            <option value="Muhannad AlBestawy">Muhannad AlBestawy</option>
                                            <option value="Nabih El-temamy">Nabih El-temamy</option>
                                            <option value="Nada Abdou Khalil">Nada Abdou Khalil</option>
                                            <option value="Nada Elsharidey">Nada Elsharidey</option>
                                            <option value="Nada Hossam">Nada Hossam</option>
                                            <option value="Nancy Shoukry">Nancy Shoukry</option>
                                            <option value="Nanis Munir">Nanis Munir</option>
                                            <option value="Omar Ahmed Serag El-Din">Omar Ahmed Serag El-Din</option>
                                            <option value="Paula Girgis Abskharoun Beskales">Paula Girgis Abskharoun
                                                Beskales</option>
                                            <option value="Peter Gamal">Peter Gamal</option>
                                            <option value="Peter Louis">Peter Louis</option>
                                            <option value="Philip Salah Nageh">Philip Salah Nageh</option>
                                            <option value="Saher Ashraf">Saher Ashraf</option>
                                            <option value="Salma Refat">Salma Refat</option>
                                            <option value="Samar Shehata">Samar Shehata</option>
                                            <option value="Samer Abdalla Mohamed Ali Yassien">Samer Abdalla Mohamed Ali
                                                Yassien</option>
                                            <option value="Samuel Nady Tetos">Samuel Nady Tetos</option>
                                            <option value="Sara El Zokm">Sara El Zokm</option>
                                            <option value="Sarah Gerges">Sarah Gerges</option>
                                            <option value="Sarah Safwat">Sarah Safwat</option>
                                            <option value="Shady Englizy">Shady Englizy</option>
                                            <option value="Sherif Emad khalil">Sherif Emad khalil</option>
                                            <option value="Yasser El Feky  ">Yasser El Feky </option>
                                            <option value="Yasser Elhofy">Yasser Elhofy</option>
                                            <option value="Youhana Zakaria">Youhana Zakaria</option>
                                            <option value="Youssef locus">Youssef locus</option>
                                        </select>
                                    </div>

                                    <div class=" col-12">
                                        <div class="send">
                                            <button type="submit" id="registration_form">Submit <img src="{{asset('images/arrow.png')}}"></button>
                                        </div>
                                    </div><!--col-12-->


                                </div><!--row-->
                                {{Form::close()}}
                            </div><!--end tab1-->

                            {{--login section--}}
                            <div class="tab-pane container fade" id="login">

                                {{ Form::open(['route' => 'user.login','method'=>'POST','name'=>'login_form'])}}
                                <div class="row reserve login-div" >
                                    <div class="col-lg-6 col-12">
                                        <label>whatsApp Number </label>
                                        <input class="form-control" placeholder="Enter mobile number" id="phone-login"  type="tel" required >
                                        <input type="hidden" name="number_phone" id="full_phone_login">
                                        <span id="error_msg_login" class="hide"></span>
                                    </div><!--col-12-->
                                    <div class=" col-12">
                                        <div class="send">
                                            <button type="submit" id="login_form" >login <img src="{{asset('images/arrow.png')}}"></button>
                                        </div>
                                    </div><!--col-12-->
                                </div><!--row-->
                                {{Form::close()}}
                            </div><!--end tab2-->
                        </div>

                    </div>
                </div><!--col-10-->
            </div> <!--row-->
        </div><!--container-->


    </div><!--registration-div-->
</section><!--content-->

@endsection('content')
