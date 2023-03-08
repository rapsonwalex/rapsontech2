@extends('layouts.master')
@section('title')
    Register New User
@endsection
@section('content')
    @include('layouts.dashboard_header')


    <!-- Page Content -->
    <div class="content">
        <h3 class="content-heading">Register New User</h3>
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
                                    <form method='POST' action='{!! url('store_user') !!}' enctype="multipart/form-data">
                                        <input type='hidden' name='_token' value='{{ Session::token() }}'>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">Name</label>
                                            <input id="name" name="name" type="text" class="form-control"
                                                value="{{ old('name') }}" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                value="{{ old('email') }}" required>
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
                                                value="{{ old('phone_number1') }}">
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
                                                    <textarea rows="4" cols="100" placeholder="Message" class="form-control" id="address1" name="address1"
                                                        required data-validation-required-message="Please enter your address" maxlength="999" style="resize:none"
                                                        value="{{ old('address1') }}"> </textarea>

                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="name">Password</label>
                                            <input id="password" name="password" type="password" minlength="8"
                                                class="form-control quantity">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div
                                            class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="name">Retype Password</label>
                                            <input id="password_confirmation" name="password_confirmation" type="password"
                                                minlength="8" class="form-control quantity">
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                                            <label>Role</label>
                                            <select name='role_id' id='role_id' class='form-control' required>
                                                <option value="" disabled selected>Select a Role</option>
                                                @foreach ($roles as $key => $value)
                                                    @if (Request::old('role_id') == $key)
                                                        <option value="{{ $key }}" selected>{{ $value }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <button class='btn btn-primary' type='submit'>Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('layouts.dashboard_footer')
    @endsection
