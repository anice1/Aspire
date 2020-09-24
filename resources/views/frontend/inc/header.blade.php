<!-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script> -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    <div class="navbar navbar-expand-md header-menu-one bg-light">
        <div class="nav-bar-header-one">
            <div class="header-logo">
                <a href="index.html">
                    <img src="{{asset('img/logo.png')}}" alt="logo">
                </a>
            </div>
            <div class="toggle-button sidebar-toggle">
                <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="d-md-none mobile-nav-bar">
            <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                <i class="far fa-arrow-alt-circle-down"></i>
            </button>
            <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
            <ul class="navbar-nav">
                <!-- Search is not needed in the this page but the ul is left for mobile responsiveness  -->

                <!-- <li class="navbar-item header-search-bar">
                    <div class="input-group stylish-input-group">
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="flaticon-search" aria-hidden="true"></span>
                            </button>
                        </span>  
                        <input type="text" class="form-control" placeholder="Find Something . . .">
                    </div>
                </li> -->
            </ul>
            
            <ul class="navbar-nav">
                <li class="navbar-item dropdown header-admin">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <div class="admin-title">
                            <h5 class="item-title">{{ auth()->user()->username}}</h5>
                            <span>
                                @role('teacher')Teacher @endrole
                                @role('admin')Admin @endrole
                                @role('student')Student @endrole
                                @role('school')School Admin @endrole
                            </span>
                        </div>
                        <div class="admin-img">
                            @if(Auth::user()->hasRole('school'))
                            <img src="{{asset('/storage'.auth()->user()->school->profile_image)}}" alt="Admin" style="max-width: 50px;">
                            @endif
                            @if(Auth::user()->hasRole('teacher'))
                            <img src="{{asset('/storage'.auth()->user()->teacher->profile_image)}}" alt="Admin" style="max-width: 50px;">
                            @endif
                            @if(Auth::user()->hasRole('student'))
                            <img src="{{asset('/storage'.auth()->user()->student->profile_image)}}" alt="Admin" style="max-width:50px">
                            @endif
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">   
                            <h6 class="item-title">{{ auth()->user()->username}}</h6>
                        </div>
                        <div class="item-content">
                            <ul class="settings-list">
                                <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>                                
                                <li><a href="messaging.html"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('myform').submit();">
                                    <i class="flaticon-turn-off"></i>{{ __('Logout') }}</a>
                                    <form id="myform" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="navbar-item dropdown header-message">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="far fa-envelope"></i>
                        <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                        <span @if(Auth::user()->unreadNotifications->count() <= 0) style='display:none' @endif> {{Auth::user()->unreadNotifications->count()}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title">{{Auth::user()->unreadNotifications->count()}} @if(Auth::user()->unreadNotifications->count()>0)Messages @else Message @endif</h6>
                        </div>
                        <div class="item-content">
                            @foreach(Auth::user()->unreadNotifications as $notification)
                            <div class="media" style='background: #f5f5f5; margin: 4px 0; padding: 0px'>
                                <div class="item-img bg-skyblue author-online">
                                @if(Auth::user()->id != $notification->data['messagedBy']['id'])
                                    <img src="{{asset('/storage'.App\User::find($notification->data['messagedBy']['id'])->school->profile_image)}}" alt="Admin" style="max-width: 50px;">
                                @endif
                                </div>
                                <div class="media-body space-sm">
                                    <div class="item-title">
                                        <a href="#message">
                                            <span class="item-name">{{$notification->data['messagedBy']['username']}}</span>
                                            <span class="item-time">{{$notification->created_at->diffForHumans()}}</span>
                                        </a>
                                    </div>
                                    <p>Posted a Notice</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="navbar-item dropdown header-notification">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                        <span>4</span>
                       
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title"></h6>
                        </div>
                        <div class="item-content">
                            <div class="media">
                                <div class="item-icon bg-skyblue">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="media-body space-sm">
                                        <div class="post-title">
                                       </div> 
                                    <span></span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon bg-orange">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <div class="post-title">Director Metting</div>
                                    <span>20 Mins ago</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon bg-violet-blue">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <div class="post-title">Update Password</div>
                                    <span>45 Mins ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Header Menu Area End Here -->
