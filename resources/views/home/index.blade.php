@extends('layouts.home')
@section('title',$setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)



@section('content')

    @include('home._slider')

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-4 mb-5">
                    <h2 class="section-title-underline mb-5">
                        <span>Why Academics Works</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

                    <div class="feature-1 border">
                        <div class="icon-wrapper bg-primary">
                            <span class="flaticon-mortarboard text-white"></span>
                        </div>
                        <div class="feature-1-content">
                            <h2>Personalize Learning</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-1 border">
                        <div class="icon-wrapper bg-primary">
                            <span class="flaticon-school-material text-white"></span>
                        </div>
                        <div class="feature-1-content">
                            <h2>Trusted Courses</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-1 border">
                        <div class="icon-wrapper bg-primary">
                            <span class="flaticon-library text-white"></span>
                        </div>
                        <div class="feature-1-content">
                            <h2>Tools for Students</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <a href="{{route('announcements')}}"target="_blank">See All Announcements</a>
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

    <!--Comments -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <h2 class="section-title-underline">
                        <span>Comments</span>
                    </h2>
                </div>
            </div>
            <div class="owl-slide owl-carousel">

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{asset('assets')}}/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{asset('assets')}}/images/person_4.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{asset('assets')}}/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{asset('assets')}}/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{asset('assets')}}/images/person_4.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection

