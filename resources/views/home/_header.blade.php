<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container col-md-12">
        <div class="d-flex ">

            <div class="col-md-10 float-left " >
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active">
                            <a href="{{route('home')}}"><img src="{{asset('assets')}}/images/logo.png" height="80"width="80" alt="Image" class="img-fluid"></a>
                        </li>

                        <li class="active">
                            <a href="{{route('home')}}" class="nav-link text-left">Home</a>
                        </li>
                        @foreach($menus as $rs)
                            <li class="has-children">
                                {{--{{route(strtolower($rs->title))--}}
                                <a href="#" class="nav-link text-left">{{$rs->title}}</a>
                                <ul class="dropdown" aria-expanded="true">
                                    @foreach($rs->children as $rs)
                                        <li><a href="{{route($rs->title)}}">{{$rs->title}}</a></li>
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

                        <li class="active">
                            <div class="form-search" style="align-content: center">
                                <form action="{{route('getcontent')}}" method="post">
                                    @csrf
                                    <button type="submit"style="  float: left; width: 20%;padding: 6px;background: #51be78;color: white;
                                font-size: 10px;border: 1px solid grey;border-left: none;cursor: pointer;" >
                                        <i class="fa fa-search" ></i></button>
                                    @livewire('search')
                                </form>
                                @livewireScripts
                            </div>
                        </li>
                    </ul>                                                                                                                                                                                                                                                                                          </ul>
                </nav>

            </div>
            <div class="col-md-2">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="font-size: 13px;background: #51be78;">
                            {{Auth::user()->name}}
                        </button>
                        @endauth
                        @guest
                            <div style="padding: 1px 10px">
                                <a href="/login"style="font-size: 15px">Login</a>/
                                <a href="/register"style="font-size: 15px"> Register</a>
                            </div>
                        @endguest

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('userprofile')}}">My Account</a>
                            <a class="dropdown-item" href="{{route('myreviews')}}">My Reviews</a>
                            <a class="dropdown-item" href="{{route('user_requests')}}">My Requests</a>
                            <a class="dropdown-item" href="{{route('user_payments')}}">My Payments</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>


                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>

            </div>

        </div>
    </div>

</header>
