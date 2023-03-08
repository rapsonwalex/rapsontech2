@extends('layouts.master')
@section('title')
    Manage Users
@endsection
@section('content')
    @include('layouts.dashboard_header')
    {{-- ////////////////////////////////////////////////////////////////// --}}


    <div class="content">
        <h3 class="content-heading">Manage Users</h3>

        <hr>
        <a href="{{ url('/register_user') }}">
            <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-user-plus"></i>Register New User
            </button></a>
        <!-- Dynamic Table Full -->

        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table id="example1" class="table table-bordered table-striped table-vcenter js-dataTable-full table-responsive">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S/NO</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">NAME</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">EMAIL</th>
                        <th class="text-center" style="width: 15%;">ROLE</th>
                        <th class="text-center" style="width: 15%;">STATUS</th>
                        <th class="text-center" style="width: 15%;">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($role_users as $a => $role_user)
                        <tr>
                            <td class="text-center">{{ $a + 1 }}</td>

                            <td class="font-w600">
                                @if ($role_user->end_record == 0)
                                    <a
                                        href="{{ url('view_user_details/' . $role_user->user_id) }}">{{ $role_user->name }}</a>
                                @else
                                    {{ $role_user->name }}
                                @endif

                            </td>

                            <td class="font-w600">{{ $role_user->email }}</td>
                            <td class="font-w600">
                                @if ($role_user->end_record == 0)
                                    <a href="{{ url('view_role/' . $role_user->role_id) }}"><span
                                            class="badge badge-info">{{ $role_user->role_display_name }}</span></a>
                                @else
                                    {{ $role_user->role_display_name }}
                                @endif

                            </td>

                            <td class="d-none d-sm-table-cell">

                                {{-- @if ($role_user->end_record == 0)
                                      <i class="fa fa-check" style="color: green;"> Active </i>
                                      @else
                                      <i class="fa fa-times" style="color: red;"> Disabled </i>
                                      @endif --}}
                                <span id="display_status{{ $role_user->user_id }}">
                                    @if ($role_user->end_record == 0)
                                        <i class="fa fa-unlock" style="color: green;"> Active </i>
                                    @else
                                        <i class="fa fa-lock" style="color: red;"> Disabled </i>
                                    @endif
                                </span>

                            </td>
                            <td class="text-center">

                                @permission('can-view-user-details')
                                    <a href="{{ url('view_user_details/' . $role_user->user_id) }}"
                                        class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                        title="View User Info" style="display:inline;padding:2px 5px 3px 5px;"><i
                                            class="fa fa-info"></i></a>
                                @endpermission

                                @permission('can-edit-user-records')
                                    @if ($role_user->end_record == 0)
                                        <a href="{{ url('edit_user/' . $role_user->user_id) }}"
                                            class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                            title="Edit user" style="display:inline;padding:2px 5px 3px 5px;"><i
                                                class="fa fa-edit"></i></a>
                                    @endif
                                @endpermission

                                @permission('can-reset-user-password')
                                    <a href="{{ url('/reset_credentials/' . $role_user->user_id) }}"
                                        class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                        title="Reset user password" style="display:inline;padding:2px 5px 3px 5px;"><i
                                            class="fa fa-undo"></i></a>
                                @endpermission

                                @permission('can-reset-user-password')
                                    <a href="{{ url('/assign_permissions_to_user/' . $role_user->user_id) }}"
                                        class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                        title="Assign permissions to user" style="display:inline;padding:2px 5px 3px 5px;"><i
                                            class="fa fa-eye"></i></a>
                                @endpermission

                                @permission('can-delete-user')
                                    <span id="display_status_button{{ $role_user->user_id }}">
                                        @if ($role_user->end_record == 0)
                                            <a onclick="deleteuser(this.id)" id="{{ $role_user->user_id }}"
                                                class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                                title="Deactivate user account"
                                                style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-user-times"
                                                    style="color: rgb(255, 255, 255)"></i></a>
                                            <input type="hidden" name="" value="1"
                                                id="user_status{{ $role_user->user_id }}">
                                        @else
                                            <a onclick="deleteuser(this.id)" value="0" id="{{ $role_user->user_id }}"
                                                class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                                title="Reactivate user account"
                                                style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-user-plus"
                                                    style="color: rgb(255, 255, 255)"></i></a>

                                            <input type="hidden" name="" value="0"
                                                id="user_status{{ $role_user->user_id }}">
                                        @endif

                                    </span>
                                @endpermission

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
    </div>
    <!-- END Page Content -->

    {{-- </main> --}}
    <!-- END Main Container -->

    <script>
        function deleteuser(e) {
            swal({
                    title: "Are you sure?",
                    text: "You want to update this Record!",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Continue!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                },
                function(isConfirm) {
                    if (isConfirm) {
                        var user_status = document.getElementById("user_status" + e).value;
                        $.ajax({
                            type: 'get',
                            data: {
                                user_status: user_status
                            },
                            url: "{{ url('/delete_user') }}" + '/' + e,
                            error: function(jqXHR, status, err) {
                                swal({
                                    type: "error",
                                    title: "Not Successful!",
                                    text: "please check your internet connection and refresh the page.",
                                    showConfirmButton: true
                                });
                            },
                            success: function(response) {
                                $("#display_status" + e).html(response['user_status']);
                                $("#display_status_button" + e).html(response['user_status_button']);
                                swal("Disabled!", "This user account has been Disabled.", "success");
                                swal({
                                    type: response['type101'],
                                    title: response['title101'],
                                    timer: response['timer101'],
                                    text: response['feedback101'],
                                });
                            },
                        });
                        swal.close();
                    } else {
                        swal("Cancelled", "You can take a second look at it again :)", "error");
                        document.getElementById(val).checked = false;
                    }
                });
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example1').removeAttr('width').DataTable({

                scrollCollapse: true,
                paging: true,
                ordering: true,
                searching: true,
                columnDefs: [{
                        width: 8,
                        targets: 0
                    },
                    {
                        width: 160,
                        targets: 1
                    },
                    {
                        width: 160,
                        targets: 2
                    },
                    {
                        width: 140,
                        targets: 3
                    },
                    {
                        width: 140,
                        targets: 4
                    },
                    {
                        width: 200,
                        targets: 5
                    },
                ],

                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        text: 'Save as Excel',
                        exportOptions: {
                            columns: ':visible.exportable'
                        }
                    },

                ]


            });
        });
    </script>
    @include('layouts.dashboard_footer')
@endsection
