<div class="col-md-3">
    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
        <a class="nav-link" id="orders-nav" data-toggle="pill" href="{{route('userprofile')}}" role="tab"><i class="fa profile-pic"></i>Profile</a>
        <a class="nav-link" id="payment-nav" data-toggle="pill" href="{{route('user_product')}}" role="tab"><i class="fa product-description"></i>My Places</a>
        <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-envelope"></i>Reviews</a>
        <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-envelope"></i>messages</a>
        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>
    </div>
</div>
