@auth
    <div class="col-md-2">
        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="dashboard-na" data-toggle="" href="{{route('myaccount')}}" role="tab"><i class="fas fa-tachometer-alt"></i>Dashboard</a>

            <a class="nav-link" href="{{route('user_profile')}}" role="tab"><i class="fas fa-user"></i>Profile</a>
            <a class="nav-link" href="{{route('user_product')}}" role="tab"><i class="fab fa-product-hunt"></i>My Places</a>
            <a class="nav-link"  href="{{route('user_review')}}" role="tab"><i class="fas fa-hourglass-start"></i>Reviews</a>
            <a class="nav-link" href="{{route('all_message')}}" role="tab"><i class="fas fa-envelope"></i>Messages</a>
            <a class="nav-link" href="{{route('wishlist')}}"><i class="fas fa-heart"></i>Wishlist</a>
            <a class="nav-link" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a>

            @php
                 $role=Auth::user()->roles->pluck('name');
            @endphp
            @if($role->contains('admin'))
                <a class="nav-link" href="{{route('admin_home')}}"><i class="fas fa-tasks"></i>Admin Panel</a>
            @endif

        </div>
    </div>
@endauth
