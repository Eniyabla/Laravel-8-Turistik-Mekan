<div>
<link href="{{ asset('assets/home/rate')}}/style.css" rel="stylesheet">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

<form class="review-form" wire:submit.prevent="store">
    @csrf

<div class="row form">

    <div class="col-md-12">
        <input type="text" wire:model="subject" placeholder="Subject">
        @error ('subject')<span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="col-md-12">
        <textarea wire:model="review"  placeholder=" Your Review"></textarea>
        @error ('review')<span class="text-danger">{{$message}}</span> @enderror

    </div>
    <div class="rate col-md-12" >
        <input type="radio" id="star5" wire:model="rate"  value="5" /><label for="star5" ></label>
        <input type="radio" id="star4" wire:model="rate"  value="4" /><label for="star4"></label>
        <input type="radio" id="star3" wire:model="rate" value="3" /><label for="star3" ></label>
        <input type="radio" id="star2" wire:model="rate" value="2" /><label for="star2"></label>
        <input type="radio" id="star1" wire:model="rate" value="1" /><label for="star1"></label>
        @error ('rate')<span class="text-danger">{{$message}}</span> @enderror
    </div>


@auth
    <div class="col-md-12">
        <button>Submit Review</button>
     </div>
    @else
        <div class="col-md-12">
        <button href="{{route('login')}}">Please login to submit your Review</button>
        </div>
    @endauth
   </div>
</form>
</div>


