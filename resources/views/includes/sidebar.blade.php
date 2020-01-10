<?php $auth = Auth::user(); ?>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <div id="main">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                  </div>
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    {{ config('app.name', 'EMR') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        
                        
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
            <a href="#"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="#"><i class="fa fa-cogs"></i> Services</a>
            <a href="#"><i class="fa fa-user"></i> Account</a>
            <a href="#"><i class="fa fa-phone"></i> Contact</a>
          </div>
          <!--end of side bar content-->
          
          <!--Active Users-->
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
            <!--End for Active Users-->

            <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }
            
          
          
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            // document.getElementById("main").style.marginLeft = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }
            
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                document.body.style.backgroundColor = "white";
            }
            </script>
            </nav>
    </div>
    <!-- /#wrapper -->