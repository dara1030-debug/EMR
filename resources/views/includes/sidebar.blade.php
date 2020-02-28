<?php $auth = Auth::user(); ?>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <div id="main">
            <span class="open-slide d-none d-sm-block"style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
            {{ config('app.name', 'EMR') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/doctors">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-xl-none d-block d-sm-none" href="#">Active Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-xl-none d-md-none d-lg-none " href="#">Help</a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <img src="/img/Picture1.png" alt="Avatar" class="avatar">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name . " " . Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>

    <!--sidebar content-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>            
        <div class="prof">
            <img src="/img/Picture1.png" alt="Avatar" class="profile"><br>
            <h4 style="color:white">Anne Hayathi Albiso</h4>
            <p class="title" style="color:gray">Admin</p>
        </div>
        <div class="row">
            <div class="col text-left">
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                <a href="#"><i class="fa fa-user"></i> Profile</a> {{--User Profile Must Be Redirected to Users View (show)--}}
                <a href="{{ route('help') }}"><i class="fa fa-question"></i> Help</a>
            </div>
        </div>
    </div>
    <!--end of side bar content-->
    
    <!--Active Users-->
    <div class="d-none d-sm-block d-sm-none d-md-block">
    <button class="open-button" onclick="openForm()"> <i class="fa fa-check"></i>Active Users</button>
    <div class="chat-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <img src="/img/Picture1.png" alt="Avatar" class="avatar2"> Anne Albiso <br><br>
            <img src="/img/p1.png" alt="Avatar" class="avatar2"> Isnaina Abdulazis<br>
        
            <!--<label for="msg"><b>Message</b></label>
                -->

            <!-- <button type="submit" class="btn">Send</button>-->
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
    </div>
    
    <!--End for Active Users-->
</nav>
