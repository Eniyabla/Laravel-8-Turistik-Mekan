@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<style>
    .menu-area{background: #d46a07}
    .dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
    .mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link{color:#fff;font-size:16px;text-transform:capitalize;padding:16px 15px;font-family:'Roboto',sans-serif;display: block !important;}
    .mainmenu .active a,.mainmenu .active a:focus,.mainmenu .active a:hover,.mainmenu li a:hover,.mainmenu li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover{color: #fff;background: #d46a07;outline: 0;}
    /==========Sub Menu=v==========/
    .mainmenu .collapse ul > li:hover > a{background: #d46a07;}
    .mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #d46a07;}
    .mainmenu .collapse ul ul ul > li:hover > a{background: #d46a07;}

    .mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#2b2e4a;}
    .mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#2b2e4a}
    .mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#2b2e4a}

    /***********Drop-down menu work on hover***********/
    .mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
    @media only screen and (min-width: 767px) {
        .mainmenu .collapse ul li:hover> ul{display:block}
        .mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
        /***/
        .mainmenu .collapse ul ul li{position:relative}
        .mainmenu .collapse ul ul li:hover> ul{display:block}
        .mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
        /***/
        .mainmenu .collapse ul ul ul li{position:relative}
        .mainmenu .collapse ul ul ul li:hover ul{display:block}
        .mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

    }
    @media only screen and (max-width: 767px) {
        .navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
        .navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
    }
</style>
<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($parentCategories as $rs)
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$rs->title}}</a>

                                        @if(count($rs->children))
                                            @include('layouts.categorytree', ['children' => $rs->children])
                                        @endif

                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


@section('footerjs')

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    (function($){
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

            return false;
        });
    })(jQuery)
</script>
@endsection
