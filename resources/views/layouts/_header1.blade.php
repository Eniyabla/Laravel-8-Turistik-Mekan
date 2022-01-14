<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/menu/css')}}/style.css">
</head>
<body>
@php
    use App\Http\Controllers\HomeController;
    $setting=HomeController::getsetting();
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
<div id="container">
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('FaQ')}}">FAQ</a></li>
            <li><a href="{{route('refernces')}}">References</a></li>
            <li><a href="{{route('aboutus')}}" >About Us</a></li>
            <li><a href="{{route('contactus')}}" >Contact Us</a></li>
            <li><a href="" >Categories</a>
                @php
                    $parentCat=App\Http\Controllers\HomeController::categorylist()
                @endphp
                <ul>
                    @foreach($parentCat as $pc)
                        <li> <a href="">{{$pc->title}}</a>
                            @if(count($pc->children))
                                @include('layouts.menu',['children'=>$pc->children])

                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
            @auth
                <li style="right: 0">
                    <a href="#" class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown">
                    <!--img src="{{Auth::user()->profile_photo_url}}" alt="user"  class="rounded-circle"width="40"-->
                        {{Auth::user()->name}}
                    </a>

                    <ul>
                        <li><a href="{{route('myaccount')}}"><span><i class="fa fa-user"></i>  </span> &nbsp;&nbsp; My Account</a></li>
                        <li><a href="/login"><span><i class="fa fa-user-plus"></i>  </span> &nbsp;&nbsp; Login</a></li>
                        <li><a href="/register"><span><i class="fa fa-sign-in-alt"></i>  </span> &nbsp;&nbsp; Register</a></li>
                        <li><a href="{{route('logout')}}"><span><i class="fa fa-sign-out-alt"></i>  </span> &nbsp;&nbsp; Logout</a></li>
                    </ul>
                </li>
            @endauth
            @guest
                <li>
                    <a style="color: white;font-family: 'Arial Rounded MT Bold';font-weight: bolder;" href="/login" class="" data-toggle="">Login</a>
                </li>
                <li><a style="color: white;font-family: 'Arial Rounded MT Bold';font-weight: bolder;" href="/register" class="" data-toggle="">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
</div>
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="logo">
                    <a href="{{route('home')}}" >
                        <h2 style="font-family: 'Segoe UI Black';font-size: 30px;" ><span style="color:red;">TUR</span><span style="color:black;">MEK</span></h2>
                    </a>
                </div>
            </div>

            <div class="col-md-8">


                <div class="search">
                    <form action="{{route('getplace')}}" method="post">
                        @csrf
                        @livewire('search')
                        <button><i class="fa fa-search"></i></button>
                    </form>
                    @livewireScripts
                </div>


            </div>

            <div class="col-md-2">
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

</body>
</html>
