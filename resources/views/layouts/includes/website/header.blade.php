<header class="header2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
<<<<<<< HEAD
              <a href="{{route('agenda')}}">  <img src="{{asset('images/logo2.png')}}"></a>
=======
              <a href="{{route('home')}}">  <img class="main-logo" src="{{asset('images/logo2.png')}}"></a>
>>>>>>> dalia/dashboardAndWebsiteBugs
            </div><!--col-lg-3-->
            <div class="col-lg-3 col-6 mobile mobile-head2">
               <a href="{{route('profile')}}"  class="profile-link"> <p><span class="img-user"><img src="{{asset('images/man.png')}}"></span><span class="name-user">{{ getCurrentUser()->full_name }}</span></p></a>
            </div><!--col-lg-3-->

            <div class="col-lg-6 col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo url('/').'/agenda/#agenda' ?>">Agenda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?php echo url('/').'/agenda/#speakers' ?>">Speakers’ Biography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url('/').'/agenda/#games' ?>">Digital Magazine</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="#">Survey</a>
                            </li>
                        </ul>

                    </div>
                </nav>

            </div><!--col-lg-6-->
            <div class="col-lg-3 col-md-3 web">
                <a href="{{route('profile')}}"  class="profile-link"> <p><span class="img-user"><img src="{{asset('images/man.png')}}"></span><span class="name-user">{{ getCurrentUser()->full_name }}</span></p></a>
            </div><!--col-lg-3-->

        </div><!--row-->
    </div><!--container-->
</header>
