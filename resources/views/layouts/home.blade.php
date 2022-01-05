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
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/font-awesome/css/font-awesome.min.css">

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
</div>

<!-- Search -->
    <div class="py-2 bg-light">
        <div class="container">
            <div class="site-logo">
                <a href="{{route('home')}}" class="d-block">
                    <img src="{{asset('assets')}}/images/logo.png" height="150"width="230" alt="Image" class="img-fluid">
                </a>
            </div>
<div class="form-search">
    <form action="{{route('getcontent')}}" method="post">
        @csrf
        @livewire('search')
        <button type="submit" ><i class="fa fa-search"></i></button>
    </form>
    @livewireScripts
</div>
        </div>
    </div>
<!-- End Of Search -->

@include('home._header')
@yield('css')
@yield('headerjs')

@section('content')
    @show

@include('home._footer')
@yield('footerjs')

</body>
</html>
