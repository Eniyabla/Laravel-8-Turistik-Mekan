@auth
    <div class="col-md-3">
    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
        <a class="nav-link" href="{{route('userprofile')}}" role="tab"><i class="fas fa-user"></i>Profile</a>
        <a class="nav-link" href="{{route('user_product')}}" role="tab"><i class="fab fa-product-hunt"></i>My Places</a>
        <a class="nav-link"  href="{{route('user_review')}}" role="tab"><i class="fa fa-hourglass-start"></i>Reviews</a>
        <a class="nav-link" href="#address-tab" role="tab"><i class="fa fa-envelope"></i>Sent messages</a>
        <a class="nav-link" href="#address-tab" role="tab"><i class="fa fa-envelope"></i>Receiced messages</a>
        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i>Logout</a>
        @php
        $role=Auth::user()->roles->pluck('name');
        @endphp
        @if($role->contains('admin'))
            <a class="nav-link" href="{{route('admin_home')}}"><i class="dashboard"></i>Admin Panel</a>
        @endif
    </div>
    </div>
@endauth
