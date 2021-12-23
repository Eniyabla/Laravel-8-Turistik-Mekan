<li class="has-children">
    <a href="#0">Beanies</a>
    <ul class="is-hidden">
        @foreach($children as $subc)
        <li class="go-back"><a href="#0">Accessories</a></li>
        <li class="see-all"><a href="http://codyhouse.co/?p=748">All Benies</a></li>
        <li><a href="http://codyhouse.co/?p=748">{{$subc->title}}</a></li>
        @endforeach
    </ul>
</li>
