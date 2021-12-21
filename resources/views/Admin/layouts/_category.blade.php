@php
$pc=App\Http\Controllers\HomeController::categorylist()
@endphp

    @foreach($pc as $p)
      <li class="nav-item has-submenu">
        <a class="nav-link" href="#">{{$p->title}}
        @if(count($p->children))
           @include('admin.layouts._category',['children'=>$p->children])
        @endif
        </a>
      </li>
