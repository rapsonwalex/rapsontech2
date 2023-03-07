@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    @include('layouts.dashboard_header')
    {{-- ////////////////////////////////////////////////////////////////// --}}

    <h3>Dashboard</h3>
    <hr class="my-0">
    <br>
    <div class="row">
        @permission('can-view-posts')
            <div class="col-lg-3 col-md-6 mb30">
                <a href="{{ url('/all_blog_posts_admin') }}">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-book bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>Blog Posts </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endpermission
        @permission('can-create-edit-posts')
            <div class="col-lg-3 col-md-6 mb30">
                <a href="{{ url('/create_new_article') }}">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-edit bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>Create New Post </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endpermission
        @permission('can-create-edit-posts')
            <div class="col-lg-3 col-md-6 mb30">
                <a href="{{ url('/unpublished_posts') }}">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-eye bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>Unpublished Posts </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endpermission

        @permission('can-view-user-details')
            <div class="col-lg-3 col-md-6 mb30">
                <a href="{{ url('/manage_users') }}">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-users bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>Users </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endpermission
    </div>
    <div class="row">
        @permission('can-view-settings')
            <div class="col-lg-3 col-md-6 mb30">
                <a href="{{ url('/manage_roles') }}">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-archive bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>Roles </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb30">
                <a href="{{ url('/manage_permissions') }}">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-key bg-color text-light"></i>
                        <div class="fb-text">
                            <h4>Permissions </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endpermission
    </div>


    {{-- ////////////////////////////////////////////////////////////////// --}}
    @include('layouts.dashboard_footer')
@endsection
