@extends('layouts.home')
@section('title','Profile')
@section('content')

    <div class="container pt-5 mb-5">
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    @include('home.usermenu')
                </div>
                <div class="col-md-8">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
