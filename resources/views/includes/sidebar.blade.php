<?php $auth = Auth::user(); ?>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        
                    </a>
                </li>
                <li>
                    <div class="user-pic">
                        <img height="200" width="200"class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                          alt="User picture">
                      </div>
                      <div class="profile-usertitle">
                        <div class="user-name">
                            <h3>{{ $auth->first_name }} {{ $auth->last_name }}</h3>
                        </div>
                        <div class="user-role">
                            {{ $auth->role->name }}
                        </div>
                    </div>
                </li>
                <hr class="style2">
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    </div>
    <!-- /#wrapper -->