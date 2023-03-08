   <style>
       a,
       a:hover,
       a:focus,
       a:active {
           text-decoration: none;
           color: inherit;
       }
   </style>
   <section class="vh-120" style="background-color: #3a3f48;">
       <div class="container-fluid">
           <div class="row flex-nowrap">
               <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                   <div
                       class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                       {{-- <a href="/"
                           class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                           <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                       </a> --}}
                       <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                           id="menu">
                           @permission('can-view-dashboard')
                               <li class="nav-item">
                                   <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-tachometer"></i> <span
                                           class="ms-1 d-none d-sm-inline">Dashboard</span>

                                   </a>
                               </li>
                           @endpermission

                           @permission('can-view-posts')
                               <li class="nav-item">
                                   <a href="{{ url('all_blog_posts_admin') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-book"></i> <span class="ms-1 d-none d-sm-inline">Blog Posts</span>

                                   </a>
                               </li>
                           @endpermission

                           @permission('can-create-edit-posts')
                               <li class="nav-item">
                                   <a href="{{ url('create_new_article') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-edit"></i> <span class="ms-1 d-none d-sm-inline">Create New
                                           Post</span>

                                   </a>
                               </li>
                           @endpermission

                           @permission('can-create-edit-posts')
                               <li class="nav-item">
                                   <a href="{{ url('unpublished_posts') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-eye"></i> <span class="ms-1 d-none d-sm-inline">Unpublished Posts
                                       </span>

                                   </a>
                               </li>
                           @endpermission

                           @permission('can-view-user-details')
                               <li class="nav-item">
                                   <a href="{{ route('manage_users') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-users"></i> <span class="ms-1 d-none d-sm-inline">Users</span>

                                   </a>
                               </li>
                           @endpermission

                           @permission('can-view-settings')
                               <li class="nav-item">
                                   <a href="{{ url('manage_roles') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-archive"></i> <span class="ms-1 d-none d-sm-inline">
                                           Roles</span>
                                   </a>
                               </li>

                               <li class="nav-item">
                                   <a href="{{ url('manage_permissions') }}" class="nav-link align-middle px-0">
                                       <i class="fa fa-key"></i> <span class="ms-1 d-none d-sm-inline">Permissions</span>
                                   </a>
                               </li>
                           @endpermission

                           <li class="nav-item">
                               <a href="{{ url('view_user_details/' . Auth::user()->id) }}"
                                   class="nav-link align-middle px-0">
                                   {{-- {{ url('view_role/'.$admin_details->role_id) }} --}}
                                   <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline">My Profile</span>

                               </a>
                           </li>

                           <li>
                               <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"
                                   class="nav-link px-0 align-middle">
                                   <i class="fa fa-sign-out"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
                               </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                   style="display: none;">
                                   @csrf
                               </form>

                           </li>
                       </ul>
                       <hr>
                   </div>
               </div>
               <div class="col py-3" style="background-color: #ffffff;">
                   <script src="{{ asset('asset_justica/justica_html/js/jquery.min.js') }}"></script>
