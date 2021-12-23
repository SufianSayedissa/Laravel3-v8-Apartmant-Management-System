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
        <div class="row mb-5">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <img src="{{asset('assets')}}/images/unitC.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span>Why {{$setting->title}}</span>
                </h2>
                {!!$setting->aboutus!!}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="{{asset('assets')}}/images/unitB.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                <h2 class="section-title-underline mb-5">
                    <span>References</span>
                </h2>
                {!!$setting->references!!}
            </div>
        </div>
    </div>
</div>
@endsection
