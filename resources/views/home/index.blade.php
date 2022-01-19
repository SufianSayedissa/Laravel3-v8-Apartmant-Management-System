@extends('layouts.home')
@section('title',$setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)


@section('content')

    @include('home._slider')

    <div class="site-section">
    </div>

<!-- News -->
    <div class="site-section">
        <div class="container">
         <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title-underline mb-3">
                        <span>News</span></h2>
                    <a href="{{route('newscontent')}}"target="_blank">See All News</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-slide-3 owl-carousel">

                        @foreach($news as $rs)
                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank"><img src="{{Storage::url($rs->image)}}"style="height: 300px; width: 800px" alt="Image" class="img-fluid"></a>
                                <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank">
                                <div class="category"><h3>{{$rs->title}}</h3></div></a>

                                @php
                                $averageview = \App\Http\Controllers\HomeController::averageview($rs->id);
                                $counterview = \App\Http\Controllers\HomeController::counterview($rs->id);

                                    @endphp
                                <div class="rating text-center mb-3">
                                    <i class="star star-1 @if($averageview<1)  @endif"></i>
                                    <i class="star star-2 @if($averageview<2)  @endif"></i>
                                    <i class="star star-3 @if($averageview<3)  @endif"></i>
                                    <i class="star star-4 @if($averageview<4)  @endif"></i>
                                    <i class="star star-5 @if($averageview<5)  @endif"></i>
                                    <i>({{$counterview}}) Review(s)</i>
                                    <br>
                                    <i>Rate(s) ({{$averageview}} /5)</i>
                                </div>
                            </figure>
                            <div class="course-1-content pb-4">
                                <h2>{{$rs->keywords}}</h2>

                                <p class="desc mb-4">{{$rs->description}}</p>
                                <p><a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank" class="btn btn-primary rounded-0 px-4">Read More</a></p>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of News -->

    <!--Announcements -->
    <div class="news-updates">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 mb-5">
                        <h2 class="section-title-underline mb-3">
                            <span>Announcements</span></h2>
                        <a href="{{route('announcementscontent')}}"target="_blank">See All Announcements</a>
                    </div>
                    <div class="row">
                        @foreach( $lastannouncements as $rs)
                        <div class="col-lg-6">
                            <div class="post-entry-big">
                                <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank" class="img-link">
                                    <img src="{{Storage::url($rs->image)}}" style="width: 620px;height: 413px" alt="Image" class="img-fluid">
                                </a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <p>{{$rs->updated_at}}</p>
                                        <h6>{{$rs->description}}</h6>
                                    </div>
                                    <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank" class="img-link mr-4">
                                        <h4 class="post-heading">{{$rs->title}}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-6">
                            @foreach($dailyannouncements as $rs)
                            <div class="post-entry-big horizontal d-flex mb-4">
                                <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank" class="img-link mr-4">
                                    <img src="{{Storage::url($rs->image)}}" style="width:80px;height:80px"alt="Image" class="img-fluid">
                                </a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <p>{{$rs->updated_at}}</p>
                                        <h6>{{$rs->description}}</h6>
                                    </div>
                                    <a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank" class="img-link mr-4">
                                    <h4 class="post-heading">{{$rs->title}}</h4>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Of Announcements -->



@endsection

