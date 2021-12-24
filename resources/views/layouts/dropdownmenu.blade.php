
@php
    $parentCat=App\Http\Controllers\HomeController::categorylist()
@endphp

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/home/menu')}}/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('assets/home/menu')}}/css/style.css"> <!-- Resource style -->
    <script src="{{ asset('assets/home/menu')}}/js/modernizr.js"></script> <!-- Modernizr -->

</head>
<body>
<header>
    <div class="cd-dropdown-wrapper" >
        <a class="cd-dropdown-trigger" href="#0"><span><i class="fa fa-list-alt" aria-hidden="true">  </i>    </span></a>
        <nav class="cd-dropdown" style="height: 400px;">
            <h2>Title</h2>
            <a href="#0" class="cd-close">Close</a>
            <ul class="cd-dropdown-content">
                <li>
                    <form class="cd-search">
                        <input type="search" placeholder="Search...">
                    </form>
                </li>
                @foreach($parentCat as $pc)
                  <li class="has-children">
                    <a href="#">{{$pc->title}}</a>
                    @if(count($pc->children))
                          <ul class="cd-secondary-dropdown is-hidden">
                                   @include('layouts.categorytree',['children'=>$pc->children])
                          </ul>
                     @endif
                 @endforeach
            </ul>
        </nav> <!-- .cd-dropdown -->
    </div> <!-- .cd-dropdown-wrapper -->
</header>


<script src="{{ asset('assets/home/menu')}}/js/jquery-2.1.1.js"></script>
<script src="{{ asset('assets/home/menu')}}/js/jquery.menu-aim.js"></script> <!-- menu aim -->
<script src="{{ asset('assets/home/menu')}}/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
