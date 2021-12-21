<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="site-logo">
                    <a href="{{route('home')}}" class="d-block">
                        <img src="{{asset('assets')}}/images/logo.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
                <p><a href="#">Learn More</a></p>
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Our Services</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Math</a></li>
                    <li><a href="#">Science &amp; Engineering</a></li>
                    <li><a href="#">Arts &amp; Humanities</a></li>
                    <li><a href="#">Economics &amp; Finance</a></li>
                    <li><a href="#">Business Administration</a></li>
                    <li><a href="#">Computer Science</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Contact</span></h3>
                <ul class="list-unstyled">
                    <li><strong>Company : </strong>{{$setting->company}}</li>
                    <li><strong>Address : </strong>{{$setting->address}}</li>
                    <li><strong>Phone :  </strong>{{$setting->phone}}</li>
                    <li><strong>Fax : </strong>{{$setting->fax}}</li>
                    <li><strong>Email : </strong>{{$setting->email}}</li>
                    <li>
                        <div class="ml-auto">
                            <div class="social-wrap">
                                @if($setting->facebook !=null)<a href="{{$setting->facebook}}"target="_blank"><span class="icon-facebook"></span></a>@endif
                                @if($setting->twitter !=null)<a href="{{$setting->twitter}}"target="_blank"><span class="icon-twitter"></span></a>@endif
                                @if($setting->instagram !=null)<a href="{{$setting->instagram}}"target="_blank"><span class="icon-instagram"></span></a>@endif

                                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                        class="icon-menu h3"></span></a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                    {{$setting->company}}
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-ui.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.countdown.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('assets')}}/js/aos.js"></script>
<script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.sticky.js"></script>
<script src="{{asset('assets')}}/js/jquery.mb.YTPlayer.min.js"></script>




<script src="{{asset('assets')}}/js/main.js"></script>
