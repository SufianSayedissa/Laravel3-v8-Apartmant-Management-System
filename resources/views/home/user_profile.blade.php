@extends('layouts.home')
@section('title','Profile')
@section('content')

    <div class="container pt-5 mb-5">
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <span>User panel</span>
                    <ul>
                        <li><a href="{{route('myprofile')}}">My Account</a></li>
                        <li><a href="#">My Requests</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="col-md-8">

                    <h2 class="section-title-underline mb-5">
                        <span>User Profile</span>
                    </h2>
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
