@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    @include('layouts.dashboard_header')


    <!-- Page Content -->
    <div class="content">
        <h3 class="content-heading">Edit User</h3>


        <a href="{{ url('view_user_details/' . $admin_details->user_id) }}" class="btn btn-secondary btn-xs"
            data-toggle="tooltip" data-placement="bottom" title="View User Info"
            style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-info"></i></a>
        <a href="{{ url('/reset_credentials/' . $admin_details->user_id) }}" class="btn btn-secondary btn-xs"
            data-toggle="tooltip" data-placement="bottom" title="Reset user password"
            style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-undo"></i></a>
        <hr>


        <div class="block block-rounded">
            <div class="block-content">
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="box box-success">

                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="box-body">

                                    <form action="{{ url('/save_updated_user_record/' . $admin_details->user_id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        {{ method_field('PATCH') }}
                                        <input type='hidden' name='_token' value='{{ Session::token() }}'>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">Name</label>
                                            <input id="name" name="name" type="text" class="form-control"
                                                value="{{ $admin_details->name }}" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                value="{{ $admin_details->email }}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('phone_number1') ? ' has-error' : '' }}">
                                            <label for="name">Phone Number</label>
                                            <input id="phone_number1" name="phone_number1" type="text" minlength="3"
                                                maxlength="15" class="form-control quantity"
                                                value="{{ $admin_details->phone_number1 }}">
                                            @if ($errors->has('phone_number1'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone_number1') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        {{-- <div class="row">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <label class="control-label">Address</label>
                                          <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="address1" name="address1" required data-validation-required-message="Please enter your address" maxlength="999" style="resize:none"> {{$admin_details->address1}}</textarea>

                                       </div>
                                    </div>
                                 </div> --}}

                                        @permission('can-edit-user-records')
                                            <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                                                <label>Role</label>
                                                <select name='role_id' id='role_id' class='form-control'>
                                                    <option value="" selected>Assign/Deassign a Role</option>
                                                    @foreach ($roles as $key => $value)
                                                        @if ($admin_details->role_id == $key)
                                                            <option value="{{ $key }}" selected>{{ $value }}
                                                            </option>
                                                        @elseif (Request::old('role_id') == $key)
                                                            <option value="{{ $key }}" selected>{{ $value }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>



                                            <input id="old_role_id" name="old_role_id" type="hidden" class="form-control"
                                                value="{{ $admin_details->role_id }}" required>
                                        @endpermission

                                        <button class='btn btn-primary' type='submit'>Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('layouts.dashboard_footer')
    @endsection
