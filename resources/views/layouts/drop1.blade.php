@foreach($children as $subc)
        @if(count($subc->children))
              @foreach($subc as $sub)
                 @if(count($sub->children))
                    <li class="has-children">{{$sub->title}}
                        <ul class="is-hidden">
                            <li><a href="{{route('categoryplaces',['id'=>$subc->title])}}">{{$sub->title}}</a></li>
                        </ul>
                    </li>
                @else
                        <li><a href="{{route('categoryplaces',['id'=>$subc->title])}}">{{$sub->title}}</a></li>
                 @endif    
              @foreach
        @else
                <li><a href="{{route('categoryplaces',['id'=>$subc->title])}}">{{$subc->title}}</a></li>
        @endif
@endforeach
</li>
