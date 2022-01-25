 <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" style="" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a style="color:black;" class="sidebar-link" href="{{route('admin_home')}}"
                                ><i i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Home</span></a>
                        </li>

                        <li class="sidebar-item" > <a class="sidebar-link" style="color:black;" href="{{route('admin_category')}}" ><i  class="fas fa-list-alt"></i><span
                                    class="hide-menu">Category</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"  style="color:black;" href="{{route('admin_product')}}"
                                aria-expanded="false"><i class="fab fa-product-hunt"></i><span
                                    class="hide-menu">Products</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" style="color:black;" href="{{route('admin_user')}}"
                                                     aria-expanded="true"><i class="fa fa-users"></i><span
                                    class="hide-menu">Users</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" style="color:black;" href="{{route('admin_faq')}}"
                                aria-expanded="true"><i class="fa fa-question-circle"></i><span
                                    class="hide-menu">FaQ</span></a></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{route('admin_setting')}}" ><i data-feather="settings" class="feather-icon"></i><span
                                    class="hide-menu">Settings</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"  href="{{route('admin_message')}}"
                                                     aria-expanded="false"><i class="far fa-envelope"></i><span
                                    class="hide-menu">Messages</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"  href="{{route('admin_review')}}"
                                                     aria-expanded="false"><i class="far fa-comment"></i><span
                                    class="hide-menu">Reviews</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('logout')}}"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>

                    </ul>
                <!-- End Sidebar navigation -->
                </nav>
            </div>
        </aside>
            <!-- End Sidebar scroll-->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
          <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome {{Auth::user()->name}}!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        
