<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hau kardes">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets')}}/admin/build/css/custom.min.css" rel="stylesheet">
</head>
@yield('ccs')
@yield('javascript')

<body class="nav-md">
<div class="container body">
    <div class="main_container">
@include('admin._sidebar')
@include('admin._header')
@yield('content')
@include('admin._footer')
@yield('footer')
</body>
</html>
