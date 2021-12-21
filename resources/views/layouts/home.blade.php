<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="John Doe">
    <title>@yield('title')</title>



    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">
    <link href="{{asset('assets')}}/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-right">
                    @auth
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <strong class="text-uppercase"><img src="{{asset('assets')}}/images/user.png" width="35" height="35">{{Auth::user()->name}} <i class="fa fa-caret-down"></i></strong>
                    </div>
                    @endauth
                    @guest
                    <a href="/login" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                    <a href="/register" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
                    @endguest
                    <ul class="dropdown-menu">
                        <li><a href="{{route('myprofile')}}">My Account</a></li>
                        <li><a href="#">My Requests</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('home._header')
@yield('css')
@yield('headerjs')

@section('content')
    content area
    @show

@include('home._footer')
@yield('footerjs')

</body>
</html>
