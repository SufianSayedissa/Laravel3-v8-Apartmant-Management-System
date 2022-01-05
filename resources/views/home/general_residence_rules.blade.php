@extends('layouts.home')
@section('title','Residence General Rules - '.$setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)



@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">
    <div class="container">
        @foreach($data as $rs)
        <div class="row mb-5">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank"><img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid" height="400"width="400"></a>
            </div>
            <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span><a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank">{{$rs->title}}</a></span>
                </h2>
                <p class="mb-5">{!!$rs->details!!}</p>
                <p><a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank" class="btn btn-primary rounded-0 px-4">Read More</a></p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
