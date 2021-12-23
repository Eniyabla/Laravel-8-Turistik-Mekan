
@foreach($children as $subc1)
    @if(count($subc1->children))
        @foreach($subc1 as $subc2)
            @if(count($subc2->children))
                @foreach($subc2 as $subc3)
                    @if(count($subc3->children))

                        <ul class="is-hidden">
                            <li class="go-back"><a href="#0">Accessories</a></li>
                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Caps &amp; Hats</a></li>
                            <li><a href="http://codyhouse.co/?p=748">Beanies</a></li>
                    @else

                            <li><a href="http://codyhouse.co/?p=748">{{$subc3->title}}</a></li>

                    @endif
                        </ul>
                @endforeach

            @else
            @endif

        @endforeach

    @else
        <li><a href="http://codyhouse.co/?p=748">{{$subc1->title}}</a></li>
    @endif

@endforeach
