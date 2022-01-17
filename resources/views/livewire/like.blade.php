
<div class="product-price d-flex justify-content-between ">

    @php
        $likes=\App\Http\Controllers\HomeController::likes($product_id);
        $comments=\App\Http\Controllers\HomeController::countreviews($product_id);
        $check=\App\Http\Controllers\HomeController::check($product_id)
    @endphp
    @auth
        <a   class="btn" href=""><i class="far fa-comments"></i>{{ $comments }}</a>
        @if($check)
            <a  class="btn" wire:click="likeproduct({{ $product_id }})"><i class="fas fa-thumbs-up"></i>{{$likes}}</a>

        @else
            <a class="btn"  wire:click="likeproduct({{ $product_id }})"><i class="far fa-thumbs-up"></i>{{$likes}}</a>
        @endif
    @else
        <a   class="btn" href=""><i class="far fa-comments"></i>{{ $comments }}</a>
        @if($check)
            <a  class="btn" href="{{route('login')}}"><i class="fas fa-thumbs-up"></i>{{$likes}}</a>

        @else
            <a class="btn" href="{{route('login')}}"><i class="far fa-thumbs-up"></i>{{$likes}}</a>
        @endif
    @endauth
</div>

