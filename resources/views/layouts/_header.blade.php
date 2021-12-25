@php
    use App\Http\Controllers\HomeController;
    $setting=HomeController::getsetting();
@endphp
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                @if(!Empty($setting->email)){{$setting->email}}@endif
            </div>
            <div class="col-sm-6">
                <i class="fa fa-phone-alt"></i>
                @if(!Empty($setting->phone)){{$setting->phone}}@endif
            </div>
        </div>
    </div>
</div>
<!-- Top bar End -->
<div class="nav">
    <div class="container-fluid"style="background:#000;">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background: #d51111 ;height: 50px;">
                <div class="navbar-nav mr-auto" style="font-family: 'Arial Rounded MT Bold';font-weight: bolder;font-size: 40px;">
                    <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
                    <a href="product-list.html" class="nav-item nav-link">Products</a>
                    <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                    <a href="{{route('aboutus')}}" class="nav-item nav-link">About Us</a>
                    <a href="{{route('contactus')}}" class="nav-item nav-link">Contact Us</a>
                    <a href="{{route('refernces')}}" class="nav-item nav-link">References</a>
                    <a href="{{route('FaQ')}}" class="nav-item nav-link">FAQ</a>
                    <a href="{{route('myaccount')}}" class="nav-item nav-link">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                            <a href="login.html" class="dropdown-item">Login &amp; Register</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto" style="">
                      @auth
                      <img src="{{Auth::user()->profile_photo_url}}" alt="user"  class="rounded-circle"
                                    width="40">
                     <div class="nav-item dropdown">

                        <a href="#" class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown">

                         {{Auth::user()->name}}

                     </a>
                        <div class="dropdown-menu" style="background-color: #ef2e2e">
                            <a href="{{route('myaccount')}}" class="dropdown-item"><span><i class="fa fa-user"></i>  </span> &nbsp;&nbsp; My Account</a>
                            <a href="" class="dropdown-item"><span><i class="fa fa-heart"></i>  </span> &nbsp;&nbsp;Whislist</a>
                            <a href="/register" class="dropdown-item"><span><i class="fa fa-user-plus"></i>  </span>&nbsp;&nbsp;Create Account</a>
                            <a href="/login" class="dropdown-item"><span><i class="fa fa-sign-in-alt"></i>  </span>&nbsp;&nbsp;Login</a>
                            <a href="{{route('logout')}}" class="dropdown-item"><span><i class="fa fa-sign-out-alt"></i>  </span>&nbsp;&nbsp; Logout</a>

                        </div>
                        @endauth
                        @guest
                            <div style="margin-left: -100px;background: #d51111 ;color: white">
                                <a style="color: white;font-family: 'Arial Rounded MT Bold';font-weight: bolder;" href="/login" class="" data-toggle="">Login</a> |
                                <a style="color: white;font-family: 'Arial Rounded MT Bold';font-weight: bolder;" href="/register" class="" data-toggle="">Join</a>

                            </div>
                        @endguest

                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.html" >
                        <h2 style="font-family: 'Segoe UI Black';font-size: 30px;" ><span style="color:red;">TUR</span><span style="color:black;">MEK</span></h2>
                    </a>
                </div>
            </div>

            <div class="col-md-6">


            <div class="search">
                <form action="{{route('getplace')}}" method="post">
                     @csrf
                     @livewire('search')
                    <button><i class="fa fa-search"></i></button>
                </form>
                   @livewireScripts
            </div>


            </div>

            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
