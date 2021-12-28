<!--  UST MENU-->
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="d-flex align-items-center">

            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active">
                            <a href="{{route('home')}}" class="nav-link text-left">Home</a>
                        </li>
                        @foreach($menus as $rs)
                        <li class="has-children">
                            {{--{{route(strtolower($rs->title))--}}
                            <a href="#" class="nav-link text-left">{{$rs->title}}</a>
                            <ul class="dropdown" aria-expanded="true">
                                @foreach($rs->children as $rs)
                                <li><a href="#">{{$rs->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                        <li>
                            <a href="{{route('aboutus')}}" class="nav-link text-left">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('faq')}}" class="nav-link text-left">FAQ</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="nav-link text-left">Contact</a>
                        </li>
                    </ul>                                                                                                                                                                                                                                                                                          </ul>
                </nav>

            </div>
            <div class="ml-auto">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </button>
                        @endauth
                        @guest
                            <a href="/login" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                            <a href="/register" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
                        @endguest
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('userprofile')}}">My Account</a>
                            <a class="dropdown-item" href="#">My Requests</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>


                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>

            </div>

        </div>
    </div>

</header>
