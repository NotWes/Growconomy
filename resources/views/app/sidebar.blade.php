<aside class="sidebar sidebar--hidden">
                <div class="scrollbar-inner">
                    @if(Auth::check())
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="https://www.growtopiagame.com/resources/assets/upload/1_grow_icon_1513191167.jpg" alt="">
                            <div>
                                <div class="user__name">{{ Auth::user()->name }}</div>
                                <div class="user__email">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ env('APP_URL') }}/user/{{ Auth::user()->name }}">View Profile</a>
                            <a class="dropdown-item" href="{{ env('APP_URL') }}/profile/edit">Edit Profile</a>
                            <a class="dropdown-item" href="{{ env('APP_URL') }}/logout">Logout</a>
                        </div>
                    </div>
                    @else
                    
                        
                            <a href="{{ env('APP_URL') }}/login"><button style="width: 191px;" type="button" class="btn btn-primary">Log in</button></a><br>
                            <a href="{{ env('APP_URL') }}/register"><button style="width: 191px; margin-top: 5px;" type="button" class="btn btn-success">Register</button>
                        

                        
                    
                    @endif

                    <ul class="navigation">
                        <li class="@@indexactive"><a href="{{ env('APP_URL') }}/"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="@@indexactive"><a href="{{ env('APP_URL') }}/staff"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i> Staff</a></li>
                        <li class="@@indexactive"><a href="{{ env('APP_URL') }}/about"><i class="zmdi zmdi-help zmdi-hc-fw"></i> About Us</a></li>
                    </ul>
                </div>
            </aside>