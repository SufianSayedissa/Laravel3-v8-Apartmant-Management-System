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
                {!!$setting->contact!!}
            </div>
            <div class="col-md-6">
                Form
            </div>





        </div>
    </div>
</div>
@endsection
