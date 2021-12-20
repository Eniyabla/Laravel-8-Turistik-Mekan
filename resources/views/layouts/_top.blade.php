@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp

<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                @if(!Empty($setting->email)){{$setting->email}}@endif
            </div>
            <div class="col-sm-6">
                <i class="fa fa-phone-alt"></i>
                +012-345-6789
            </div>
        </div>
    </div>
</div>
