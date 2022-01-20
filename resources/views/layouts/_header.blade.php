@php
    use App\Http\Controllers\HomeController;
    $setting=HomeController::getsetting();
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="top-bar" style="background-color:white;color: red;">
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

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarCollapse" style="background:black;height: 70px;">
                <div class="navbar-nav mr-auto" style="font-family: 'Arial Rounded MT Bold';font-weight: bolder;font-size: 40px;justify-content: space-between;">


                    <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
                    <a href="{{route('aboutus')}}" class="nav-item nav-link">About Us</a>
                    <a href="{{route('contactus')}}" class="nav-item nav-link">Contact Us</a>
                    <a href="{{route('refernces')}}" class="nav-item nav-link">References</a>
                    <a href="{{route('FaQ')}}" class="nav-item nav-link">FAQ</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            @foreach($parentCategories as $rs)
                            <a href="" class="dropdown-item">{{$rs->title}}</a>

                            @endforeach
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
                            <div class="dropdown-menu">
                                <a href="{{route('myaccount')}}" ><span><i class="fa fa-user"></i>  </span> &nbsp;&nbsp; My Account</a>
                                <a class="dropdown-item" href="{{route('user_profile')}}" role="tab"><i class="fas fa-user"></i>Profile</a>
                                <a class="dropdown-item" href="{{route('user_product')}}" role="tab"><i class="fab fa-product-hunt"></i>My Places</a>
                                <a class="dropdown-item"  href="{{route('user_review')}}" role="tab"><i class="fa fa-hourglass-start"></i>Reviews</a>
                                <a class="dropdown-item" href="{{route('all_message')}}" role="tab"><i class="fa fa-envelope"></i>Messages</a>
                                <a class="dropdown-item" href="{{route('wishlist')}}"><i class="fa fa-heart"></i>Wishlist</a>
                                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>

                            </div>
                            @endauth
                            @guest
                                    <a href="/login" class="nav-item nav-link">Login</a> |
                                    <a href="/register" class="nav-item nav-link">Register</a>


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
                    <a href="{{route('home')}}" >
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
