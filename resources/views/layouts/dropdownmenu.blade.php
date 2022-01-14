
@php
    $parentCat=App\Http\Controllers\HomeController::categorylist()
@endphp
<link href="{{ asset('assets/home/menu')}}/css/style.css" rel="stylesheet">
<section class="app">
    <aside class="sidebar">
        <header>
            Menu
        </header>
        <nav class="sidebar-nav">
            <ul>
                @foreach($parentCat as $pc)
                    <li> <a href="#"><span>{{$pc->title}}</span></a></li>
                    @if(count($pc->children))
                           @include('layouts.menu',['children'=>$pc->children])
                     @endif
                 @endforeach
            </ul>
        </nav>
    </aside>
</section>

