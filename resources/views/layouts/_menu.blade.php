@php
    $parentCat=App\Http\Controllers\HomeController::categorylist()
@endphp

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav {
        width: 100%;
        position: absolute;
        height: 400px;
        top: 0;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 2px 2px 2px rgba(255, 111, 97, 0.7);
    }

    ul{
        top: 10px;
        position: relative;
        list-style-type: none;
        left: -15px;
    }

    ul li a{
        display: flex;
        align-items: center;
        font-family: arial;
        font-size: 1.15em;
        text-decoration: none;
        text-transform: capitalize;
        color: black;
        transition: .3s ease;
        /*border-radius: 0 20px;*/
        cursor: pointer;
        padding-left:30px;

    }
    ul li a:hover {
        background-color: rgba(255, 111, 97, 0.7);
        color: white;
    }
    ul ul {
        position: absolute;
        left: 175px;
        width: 200px;
        top: 0;
        display:none;
        background-color:white;
        border-radius: 5px;
        box-shadow: 2px 2px 10px rgba(0,0,0,1);
        z-index: 1;
    }
    ul span {
        position: absolute;
        right: 20px;
        font-size: 1.5em;
    }
    .abd{
        margin-right: 30px;
    }
    ul .dropdown {
        position: relative;
    }
    ul .dropdown:hover ul{
        display: initial;
    }

</style>

<div class="col-md-2 abd" >
    <nav class="a">
        <ul class="b">
            @foreach($parentCat as $pc)
                <li class="dropdown"><span></span>
                    <a class=""  href="">
                        {{$pc->title}}
                    </a>
                    <hr>
                    @if(count($pc->children))
                        @include('layouts.categorytree',['children'=>$pc->children])
                    @endif
                </li>

            @endforeach

        </ul>

    </nav>
</div>

