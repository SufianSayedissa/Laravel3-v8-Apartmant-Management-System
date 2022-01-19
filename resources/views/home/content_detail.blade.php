@extends('layouts.home')
@section('title',$data->title)
@section('description')
    {{$data->description}}
@endsection

@section('keywords',$data->keywords)



@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">
    <div class="container">
        <div class="site-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="hero-slide mx-auto owl-carousel site-blocks-cover">
                            <img src="{{Storage::url($data->image)}}" alt="Image" class="img-fluid">
                          @foreach($datalist as $rs)
                        <p>
                            <img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid">
                        </p>
                          @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 ml-auto align-self-center">
                        <h2 class="section-title-underline mb-5">
                            <span>{{$data->title}}</span>
                        </h2>
                        <div>
                            @php
                               $averageview = \App\Http\Controllers\HomeController::averageview($data->id);
                                $counterview = \App\Http\Controllers\HomeController::counterview($data->id);

                             @endphp
                            <div class="rating text-center mb-3">
                            <i class="star star-1 @if($averageview<1)  @endif"></i>
                            <i class="star star-2 @if($averageview<2)  @endif"></i>
                            <i class="star star-3 @if($averageview<3)  @endif"></i>
                            <i class="star star-4 @if($averageview<4)  @endif"></i>
                            <i class="star star-5 @if($averageview<5)  @endif"></i>
                             </div>
                            <a href="#">{{$counterview}} Review(s)- Rate(s) {{$averageview}}/5</a>
                        </div>
                        <p class="mb-5"><strong class="text-black d-block">Published Time:</strong>{{$data->updated_at}}</p>
                        <p class="mb-5"><strong class="text-black d-block">Details:</strong></p>
                        <p> {!!$data->details!!}</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fadeIn">
            <div class="col-md-6">
                <h2 class="section-title-underline mb-5"><span>Reviews</span></h2>
                    @foreach($reviews as $rs)
                        <div class="single">
                            <div class="reviewing-head">
                                <div><i class="fa fa-user-o"> </i> {{$rs->user?->name}}</div>
                                <div>Date: {{$rs->created_at}}</div>
                                <div>Rate: {{$rs->rate}}/5</div>
                                <div>Comment: {{$rs->comment}}</div>
                                <div class="stars" >
                                    <i class="star star-1 @if($rs->rate<1)    @endif"></i>
                                    <i class="star star-2 @if($rs->rate<2)    @endif"></i>
                                    <i class="star star-3 @if($rs->rate<3)    @endif"></i>
                                    <i class="star star-4 @if($rs->rate<4)    @endif"></i>
                                    <i class="star star-5 @if($rs->rate<5)    @endif"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        <div class="col-md-6">
            <h2 class="section-title-underline mb-5"><span>Write A Review</span></h2>
                @livewire('review',['id'=>$data->id])

        </div>
        </div>
    </div>
</div>
@endsection
