@foreach($children as $subc)
        @if(count($subc->children))
            <li class="has-children">{{$subc->title}}
                <ul class="is-hidden">
                    @include('layouts.categorytree',['children'=>$subc->children])
                </ul>
            </li>
        @else
                <li><a href="{{route('categoryplaces',['id'=>$subc->title])}}">{{$subc->title}}</a></li>
        @endif
@endforeach
</li>
