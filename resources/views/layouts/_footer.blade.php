@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
<!-- Footer Start -->
<div class="raw">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="text-align: center;">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <strong>Address: </strong> @if(!Empty($setting->address)){{$setting->address}}@endif<br>
                                <strong>Phone: </strong>@if(!Empty($setting->phone)){{$setting->phone}}@endif<br>
                                <strong>Fax: </strong>@if(!Empty($setting->fax)){{$setting->fax}}@endif<br>
                                <strong>Email: </strong>@if(!Empty($setting->email)){{$setting->email}}@endif<br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    @if(!Empty($setting->facebook))<a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>@endif
                                    @if(!Empty($setting->linkedin))<a href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a>@endif
                                    @if(!Empty($setting->twitter))<a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>@endif
                                    @if(!Empty($setting->instagram))<a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a>@endif
                                    @if(!Empty($setting->youtube))<a href="{{$setting->youtube}}"><i class="fa fa-youtube"></i></a>@endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="row payment align-items-center">
                    <div class="col-md-5">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="{{ asset('assets/home')}}/img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1">

    </div>

</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
