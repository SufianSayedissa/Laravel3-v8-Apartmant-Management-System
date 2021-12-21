<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="{{route('home')}}" class="d-block">
                    <img src="{{asset('assets')}}/images/logo.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active">
                            <a href="{{route('home')}}" class="nav-link text-left">Home</a>
                        </li>
                        @foreach($menus as $rs)
                        <li class="has-children">
                            <a href="{{route(strtolower($rs->title))}}" class="nav-link text-left">{{$rs->title}}</a>
                            <ul class="dropdown">
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
                            <a href="{{route('fag')}}" class="nav-link text-left">FAG</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="nav-link text-left">Contact</a>
                        </li>
                    </ul>                                                                                                                                                                                                                                                                                          </ul>
                </nav>
            </div>
            </div>
        </div>
    </div>

</header>
