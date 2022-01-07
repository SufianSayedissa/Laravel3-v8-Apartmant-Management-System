<!--        FOOTER     -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p class="mb-4"><img src="{{asset('assets')}}/images/logo.png" height="100"width="130" alt="Image" ></p>
                <p>“Renkli ve mutlu bir yaşama ilk adım” sloganıyla hayata geçirilen Yılmaz Residence.</p>
                <p><a href="#">Learn More</a></p>
            </div>

            <div class="col-lg-6">
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

                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                    {{$setting->company}} Company
                </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF FOOTER     -->

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
