<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-home"></i></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                @if(Auth::user()->profile_photo_path)
                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="..." class="img-circle profile_img">
                    @endif
            </div>
            <div class="profile_info">
               @auth
                    <h5>Welcome<br>{{Auth::user()->name}} </h5>
                    <a href="{{route('logout')}}">Logout</a>
                @endauth
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('admin_menu')}}"><i class="fa fa-list"></i> Menu</a>
                    </li>
                    <li><a href="{{route('admin_content')}}"><i class="fa fa-newspaper-o"></i> Content</a>
                    </li>
                    <li><a href="{{route('admin_message')}}"><i class="fa fa-envelope "></i> Contact Messages</a>
                    </li>
                    <li><a href="{{route('admin_requests')}}"><i class="fa fa-wrench"></i>Requests</a>
                    </li>
                    <li><a href="{{route('admin_review')}}"><i class="fa fa-commenting"></i>Reviews</a>
                    </li>
                    <li><a href="{{route('admin_faq')}}"><i class="fa fa-question"></i>FAQ</a>
                    </li>
                    <li><a href="{{route('admin_users')}}"><i class="fa fa-user"></i>Users</a>
                    </li>
                    <li><a href="{{route('admin_setting')}}"><i class="fa fa-cog "></i>Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
