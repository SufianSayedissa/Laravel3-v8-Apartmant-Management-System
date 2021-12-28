<div class="hero-slide owl-carousel site-blocks-cover">
    @php
        $i =0;
    @endphp
    @foreach($slider as $rs)
        @php
            $i =+1;
        @endphp
         <div class="intro-section @if($i==1)active @endif" style="background-image: url({{Storage::url($rs->image)}});">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                             <a href="<a href="{{route('contentdetail',['id'=>$rs->id])}}" target="_blank"><h1>{{$rs->title}}</h1></a>
                    </div>
                 </div>
             </div>
         </div>
    @endforeach
</div>

