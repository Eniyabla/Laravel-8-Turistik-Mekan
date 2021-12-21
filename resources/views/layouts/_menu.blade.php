@php
    $parentCat=App\Http\Controllers\HomeController::categorylist()
@endphp

<nav class="navbar bg-light">
    <ul class="navbar flex-column" style="margin-top: 5px;">
        @foreach($parentCat as $pc)
            <li class="nav-item">
                <a class="nav-link" href="#">{{$pc->title}}
                    @if(count($pc->children))
                        @include('layouts._menu',['children'=>$pc->children])
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
</nav>

