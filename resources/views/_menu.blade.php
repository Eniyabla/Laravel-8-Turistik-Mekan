@php
    $parentCat=\App\Http\Controllers\HomeController::categorylist();
@endphp
<div class="col-md-2">
    <nav class="navbar bg-light">
        <ul class="navbar-nav" style="margin-top: 5px;">
            @foreach($parentCat as $pc)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{$pc->title}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>
<!--
              //if(count($pc->children))
                    /*include('categorytree',['children'=>$pc->children])*/
                //endif
                -->
