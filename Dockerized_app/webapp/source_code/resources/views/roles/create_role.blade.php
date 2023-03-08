@extends('layouts.master')
@section('title')
    Manage Roles
@endsection
@section('content')
    @include('layouts.dashboard_header')
    {{-- ////////////////////////////////////////////////////////////////// --}}
    <style>
        label input {
            display: none;
            /* Hide the default checkbox */
        }

        /* Style the artificial checkbox */
        label span {
            height: 10px;
            width: 10px;
            border: 1px solid grey;
            display: inline-block;
            position: relative;
        }

        /* Style its checked state...with a ticked icon */
        [type=checkbox]:checked+span:before {
            content: '\2714';
            position: absolute;
            top: -5px;
            left: 0;
        }
    </style>

    <section class="content">
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Role</h3>

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="box-body">

                            <form method='POST' action='{!! url('store_role') !!}' enctype="multipart/form-data">
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

                                <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
                                    <label for="display_name">Display Name</label>
                                    <input id="display_name" name="display_name" type="text" class="form-control"
                                        value="{{ old('display_name') }}" required>
                                    @if ($errors->has('display_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('display_name') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Description</label>

                                    <textarea id="description" name="description" type="text" class="form-control" value="{{ old('description') }}"
                                        required></textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>






                                <div class="form-check">

                                    @foreach ($permission as $value)
                                        <label>
                                            <input type="checkbox" name="permission[]" value="{{ $value->id }}">
                                            <span></span>
                                            {{ $value->display_name }}
                                        </label><br>
                                    @endforeach
                                </div>

                                <button type="submit" class="btn bg-blue">Submit</button>

    </section>
    </div>
    </div>
    </div>


    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <script type="text/javascript">
        var $inputs = $('select.company_id');
        $('#role_id').change(function() {
            $inputs.prop('disabled', $(this).val() != '2');
            $inputs.prop('required', $(this).val() === '2');
            $inputs.prop('reset', $(this).val() === '2');
        });
    </script>

    @include('layouts.dashboard_footer')
@endsection
