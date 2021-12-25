
@if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<form class="review.form" wire:submit.preview="store">
    @csrf

    <div class="rating">

        <input type="radio" name="rating" id="r1">
        <label for="r1"></label>

        <input type="radio" name="rating" id="r2">
        <label for="r2"></label>

        <input type="radio" name="rating" id="r3">
        <label for="r3"></label>

        <input type="radio" name="rating" id="r4">
        <label for="r4"></label>

        <input type="radio" name="rating" id="r5">
        <label for="r5"></label>

    </div>
<div class="row form">


    <div class="col-sm-12">
        <input type="text" wire:model="subject" placeholder="Subject">
        @error ('subject')<span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="col-sm-12">
        <textarea wire:model="review" id="summernote1" placeholder=" Your Review"></textarea>
        @error ('review')<span class="text-danger">{{$message}}</span> @enderror

    </div>

    @auth
    <div class="col-sm-12">
        <input type="submit" class="btn btn-success" value="Submit Review">
     </div>
    @else
        <div class="col-sm-12">
            <a href="/login" class="btn-primary" >Please login to submit your Review</a>
        </div>
    @endauth
   </div>
</form>


