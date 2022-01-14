<div class="nav-item dropdown">
                        <div class="dropdown-menu">
    @foreach($children as $pc)
        @if(count($pc->children))
          <a href="">{{$pc->title}}</a>
            @include('layouts.menu',['children'=>$pc->children])
            
        @else
            <a href="{{route('categoryplaces',['id'=>$pc->id])}}">{{$pc->title}}</a>
        @endif
@endforeach>
</div>
</div>
