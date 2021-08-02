<header class="header2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
              <a href="<?php echo url('/').'/agenda' ?>">  <img class="main-logo" src="{{asset('images/logo2.png')}}"></a>
            </div><!--col-lg-3-->
            <div class="col-lg-3 col-6 mobile mobile-head2">
                <p class="profile-link">
                <a href="{{route('profile')}}">
                <span class="img-user"><img src="{{asset('images/man.png')}}"></span>
                </a>
                <a href="{{route('profile')}}" >
                <span class="name-user">{{ getCurrentUser()->full_name }}</span>
                </a>
                </p>
            </div><!--col-lg-3-->

            <div class="col-lg-6 col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto" id="ulnav">
                            <li class="nav-item active">
                                <a class="nav-link" onclick="hideDiv()" href="<?php echo url('/').'/agenda/#agenda' ?>">Agenda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "  onclick="hideDiv2()" href="<?php echo url('/').'/agenda/#speakers' ?>">Speakers & Chairmen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="hideDiv3()" href="<?php echo url('/').'/agenda/#games' ?>">Game Scores</a>
                            </li>
                            @if (getCurrentUser()->is_attend == '1' )

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('survey')}}">Survey</a>
                            </li>

                            @endif

                        </ul>

                    </div>
                </nav>

            </div><!--col-lg-6-->
            <div class="col-lg-3 col-md-3 web">

                 <p class="profile-link">
                <a href="{{route('profile')}}">
                <span class="img-user"><img src="{{asset('images/man.png')}}"></span>
                </a>
                <a href="{{route('profile')}}" >
                <span class="name-user">{{ getCurrentUser()->full_name }}</span>
                </a>
                </p>
            </div><!--col-lg-3-->

        </div><!--row-->
    </div><!--container-->
</header>
