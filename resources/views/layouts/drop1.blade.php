

<li class="has-children">
    <a href="#0">{{$pc->title}}</a>
    <ul class="is-hidden">
        <li class="go-back"><a href="#0">Bottoms</a></li>
        <li class="see-all"><a href="http://codyhouse.co/?p=748">All Jeans</a></li>
        @foreach($children as $subc)
            <li><a href="{{route('categoryplaces',['id'=>$pc->title])}}">{{$pc->title}}</a></li>
        @endforeach
    </ul>
</li>
