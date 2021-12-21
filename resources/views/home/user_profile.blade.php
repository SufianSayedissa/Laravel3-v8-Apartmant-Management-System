@extends('layouts.home')
@section('title','Profile')
@section('content')

    <div class="container pt-5 mb-5">
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-2 mb-lg-0 mb-4">

                </div>
                <div class="col-lg-10 ml-auto align-self-center">

                    <h2 class="section-title-underline mb-5">
                        <span>User Profile</span>
                    </h2>
                    @include('profile.show')
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 order-1 order-lg-2 mb-4 mb-lg-0">

                </div>
                <div class="col-lg-2 mr-auto ">
                    <h2 class="section-title-underline mb-5">
                        <span>User panel</span>
                    </h2>
                    <ul>
                        <li><a href="{{route('myprofile')}}">My Account</a></li>
                        <li><a href="#">My Requests</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
