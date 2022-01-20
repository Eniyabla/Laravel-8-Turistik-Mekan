@foreach($children as $pc)
    @if(count($pc->children))
        <li class="has-dropdown">
            <a href="#" class="menu-link">{{$pc->title}}
                <span class="arrow"></span>
            </a>
            <ul class="submenu">
                @include('layouts.drop1', ['children' => $pc->children])
            </ul>
    @else
        <li><a href="{{route('categoryplaces',['id'=>$pc->id])}}" class="menu-link">{{$pc->title}}</a></li>

    @endif
@endforeach
