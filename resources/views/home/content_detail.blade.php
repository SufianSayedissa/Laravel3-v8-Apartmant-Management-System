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
                            <i class="fa fa-star @if($averageview<1) -o  empty @endif"></i>
                            <i class="fa fa-star @if($averageview<2)  -o  empty @endif"></i>
                            <i class="fa fa-star @if($averageview<3) -o  empty @endif"></i>
                            <i class="fa fa-star @if($averageview<4) -o  empty @endif"></i>
                            <i class="fa fa-star @if($averageview<5) -o  empty @endif"></i>
                             </div>
                            <a href="#">{{$counterview}}Review(s)-{{$averageview}}</a>
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
                                <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user?->name}}</a></div>
                                <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->created_at}}</a></div>
                                <div class="stars" >
                                    <i class="fa fa-star @if($rs->rate<1) -o  empty @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<2) -o  empty @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<3) -o  empty @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<4) -o  empty @endif"></i>
                                    <i class="fa fa-star @if($rs->rate<5) -o  empty @endif"></i>
                                </div>
                            </div>
                            <div class="reviewing-body">
                                <p>{{$rs->comment}}</p>
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
