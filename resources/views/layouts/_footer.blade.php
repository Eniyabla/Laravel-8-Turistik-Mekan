@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
<!-- Footer Start -->
<div class="raw">

    <div class="col-md-12" style="text-align: center;">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info" style="text-align: left;">
                                <strong>Address: </strong> @if(!Empty($setting->address)){{$setting->address}}@endif<br>
                                <strong>Phone: </strong>@if(!Empty($setting->phone)){{$setting->phone}}@endif<br>
                                <strong>Fax: </strong>@if(!Empty($setting->fax)){{$setting->fax}}@endif<br>
                                <strong>Email: </strong>@if(!Empty($setting->email)){{$setting->email}}@endif<br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    @if(!Empty($setting->facebook))<a href="{{$setting->facebook}}"><i class="fab fa-facebook"></i></a>@endif
                                    @if(!Empty($setting->linkedin))<a href="{{$setting->linkedin}}"><i class="fab fa-linkedin"></i></a>@endif
                                    @if(!Empty($setting->twitter))<a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>@endif
                                    @if(!Empty($setting->instagram))<a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>@endif
                                    @if(!Empty($setting->youtube))<a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>@endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('contactus')}}">Contact Us</a></li>
                                <li><a href="{{route('refernces')}}">References</a></li>
                            </ul>
                        </div>
                    </div>


                </div>


            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom" style="height: 50px" >
            <div class="container">
                <div class="row">
                    <div class="col-md-8 copyright">
                        <p>Copyright &copy;  @if(!Empty($setting->company))<a href="{{$setting->company}}">{{$setting->company}}</a>@endif. All Rights Reserved</p>
                    </div>

                    <div class="col-md-4 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
