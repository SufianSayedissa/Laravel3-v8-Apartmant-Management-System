@extends('layouts.home')
@section('title','Announcements')

@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">
     <div class="container">
         <div class="site-section">
             <h2 class="section-title-underline mb-5">
                 <span>All Announcements</span>
             </h2>
             <div class="container">
                 <div class="row">
                    @foreach($announcements as $rs)
                     <div class="col-lg-4 col-md-6 mb-4">
                         <div class="course-1-item">
                             <figure class="thumnail">
                                 <a href="course-single.html">
                                     <img src="{{Storage::url($rs->image)}}" style="height:300px;width: 800px"alt="Image" class="img-fluid">
                                 </a>
                                 <div class="price">{{$rs->updated_at}}</div>
                                 <div class="category"><h3>{{$rs->title}}</h3></div>
                             </figure>
                             <div class="course-1-content pb-4">
                                 <h2>{{$rs->keywords}}</h2>
                                 <p class="desc mb-4">{{$rs->description}}</p>
                                 <p><a href="#" class="btn btn-primary rounded-0 px-4">Read More</a></p>
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
</div>
@endsection
