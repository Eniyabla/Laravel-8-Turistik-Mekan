<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/home')}}/css/menu.css" rel="stylesheet">
</head>

@php
    use App\Http\Controllers\HomeController;
    $setting=HomeController::getsetting();
    $parentCat = \App\Http\Controllers\HomeController::categoryList()
@endphp
<header>
    <nav class="navbar">

        <label for="input-hamburger" class="hamburger "></label>
        <input type="checkbox" id="input-hamburger" hidden>
        <ul class="menu">
            <li><a href="{{route('home')}}" class="menu-link">Home</a></li>
            <li><a href="" class="menu-link">Products</a></li>
            <li><a href="{{route('aboutus')}}" class="menu-link">About Us</a></li>
            <li><a href="{{route('contactus')}}" class="menu-link">Contact Us</a></li>
            <li><a href="{{route('refernces')}}" class="menu-link">References</a></li>
            <li class="has-dropdown">
                <a href="#" class="menu-link">Categories
                    <span class="arrow"></span>
                </a>
                <ul class="submenu">
                    @foreach($parentCat as $pc)
                        @if(count($pc->children))
                            <li class="has-dropdown">
                                <a href="#" class="menu-link">{{$pc->title}}
                                    <span class="arrow"></span>
                                </a>
                                <ul class="submenu">
                                    @include('layouts.drop1', ['children' => $pc->children])
                                </ul>
                            </li>
                        @else
                            <li><a href="#" class="menu-link">{{$pc->title}}</a></li>
                        @endif
                    @endforeach
                </ul>

            </li>
            @auth
            <li class="has-dropdown">
                <a href="#" class="menu-link">
                    {{Auth::user()->name}}
                    <!--img src="{{Auth::user()->profile_photo_url}}" alt="user" style="margin: 0;padding: 0;"  class="rounded-circle"
                        height="20px" width="20"-->
                    <span class="arrow"></span>
                </a>
                <ul class="submenu">
                    <li><a href="{{route('myaccount')}}" class="menu-link"><span><i class="fa fa-user"></i> </span>&nbsp; Account</a></li>
                    <li><a href="{{route('user_profile')}}" class="menu-link"><span><i class="fas fa-user"></i>  </span>&nbsp; Profile</a></li>
                    <li><a href="{{route('user_product')}}" class="menu-link"><i class="fab fa-product-hunt"></i>&nbsp; Products</a></li>
                    <li><a href="{{route('all_message')}}" class="menu-link"><i class="fa fa-envelope"></i>&nbsp;Messages</a></li>
                    <li><a href="{{route('user_review')}}" class="menu-link"><i class="fas fa-hourglass-start"></i>&nbsp;Reviews</a></li>
                    <li><a href="#" class="{{route('wishlist')}}"><i class="fa fa-heart"></i>&nbsp;Wishlist</a></li>
                    <li><a href="{{route('logout')}}" class="menu-link"><i class="fas fa-sign-out-alt"></i>&nbsp;logout</a></li>

                </ul>
            </li>
            @endauth
            @guest
                <li><a href="/login"class="menu-link">Login</a> </li>
                <li><a href="/register"class="menu-link">Register</a> </li>
            @endguest
        </ul>
    </nav>
    <script>
        const hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            this.classList.toggle("close");
        });

    </script>

</header>




