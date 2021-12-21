@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
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
                        <li class="has-children">
                            <a href="{{route('news')}}" class="nav-link text-left">News</a>
                            <ul class="dropdown">
                                <li><a href="teachers.html">Our Teachers</a></li>
                                <li><a href="about.html">Our School</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="{{route('announcements')}}" class="nav-link text-left">Announcements</a>
                            <ul class="dropdown">
                                <li><a href="teachers.html">Our Teachers</a></li>
                                <li><a href="about.html">Our School</a></li>
                            </ul>
                        </li>
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
