@extends('admin.master')
@section('title', 'TUR-MEK | Admin Home Page')
@section('content')

    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->

        <!-- *************************************************************** -->
        <div class="card-group">
            <div class="card border-right">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 font-weight-medium">{{$messagesunr}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a href="
                             user_message_new">New Messages</a></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{$reviewsnew}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a href="
                         user_new_review">New Reviews</a>
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{$reviewsinactive}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a href="
                         user_inactive_review">Inactive Reviews</a>
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 font-weight-medium">{{$productsn}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a href="
                         user_product_new">New Products</a></h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-group" >
            <div class="card border-right">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 font-weight-medium">{{$messagesr}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:green;" href="
                             user_message_read">Read Messages</a></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{$users}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:green;" href="
                         wishlist">Users</a>
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{$reviewsactive}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:green;" href="
                         user_active_review">Active Reviews</a>
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 font-weight-medium">{{$products}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:green;" href="
                         user_product_active">Active Products</a></h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-group">
            <div class="card border-right">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="align-items-center">
                                <h4 class="text-dark mb-1 font-weight-medium">{{$messagesall}}</h4>
                                <h6 class="text-muted font-weight-normal mb-2 w-100 text-truncate"> <a class="nav-link" href="
                             all_message" role="tab">All Messages</a></h6>

                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{$likedproducts}}</h4>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:blue;" href="
                         likedproducts">Liked products</a>
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="align-items-center">
                                <h4 class="text-dark mb-1 font-weight-medium">{{$reviewsall}}</h4>
                                <h6 class="text-muted font-weight-normal mb-2 w-100 text-truncate"> <a class="nav-link" href="
                             user_review" role="tab">All Reviews</a></h6>

                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div class="align-items-center">
                            <h4 class="text-dark mb-1 font-weight-medium">{{$productsall}}</h4>
                            <h6 class="text-muted font-weight-normal mb-2 w-100 text-truncate"> <a class="nav-link" href="
                         user_product" role="tab">All Products</a></h6>

                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End First Cards -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->

        <!-- *************************************************************** -->
        <!-- End Sales Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Location and Earnings Charts Section -->
        <!-- *************************************************************** -->

        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->


@endsection
