@extends('layouts.home')
@section('title','About Us - '.$setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)



@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title-underline mb-5"><span>Reach Us</span></h2>
                {!!$setting->contact!!}
            </div>
            <div class="col-md-6">
                <h2 class="section-title-underline mb-5"><span>Contact Form</span></h2>
                @include('home.message')
                <div class="site-section">
                    <form action="{{route('sendmessage')}}" method="post">
                        @csrf
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label>Full Name</label>
                                <input type="text" id="name" name="name" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Message</label>
                                <textarea  name="message" id="message" cols="30" rows="10" class="input"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
