        @extends('layouts.master')
        @section('title')
            User Info
        @endsection
        @section('content')
            @include('layouts.dashboard_header')
            {{-- ////////////////////////////////////////////////////////////////// --}}

            <style>
                /* body{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-top:20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        background:#DCDCDC;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } */
                /* .card-box {
                                                                                                                                                                                                                                                                                                                                                                                                                                    padding: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    border-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    margin-bottom: 30px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                } */

                .file-man-box {
                    padding: 20px;
                    border: 1px solid #e3eaef;
                    border-radius: 5px;
                    position: relative;
                    margin-bottom: 20px
                }

                .file-man-box .file-close {
                    color: #f1556c;
                    position: absolute;
                    line-height: 24px;
                    font-size: 24px;
                    right: 10px;
                    top: 10px;
                    visibility: hidden
                }

                .file-man-box .file-img-box {
                    line-height: 120px;
                    text-align: center
                }

                .file-man-box .file-img-box img {
                    height: 64px
                }

                .file-man-box .file-download {
                    font-size: 32px;
                    color: #98a6ad;
                    position: absolute;
                    right: 10px
                }

                .file-man-box .file-download:hover {
                    color: #313a46
                }

                .file-man-box .file-man-title {
                    padding-right: 25px
                }

                .file-man-box:hover {
                    -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
                    box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02)
                }

                .file-man-box:hover .file-close {
                    visibility: visible
                }

                .text-overflow {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    display: block;
                    width: 100%;
                    overflow: hidden;
                }

                h5 {
                    font-size: 15px;
                }
            </style>


            <!-- Page Content -->
            <div class="content">
                <h3 class="content-heading">User Info</h3>



                @if ($admin_details->end_record == 0)
                    <a href="{{ url('edit_user/' . $admin_details->user_id) }}" class="btn btn-secondary btn-xs"
                        data-toggle="tooltip" data-placement="bottom" title="Edit user"
                        style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>
                @endif

                <a href="{{ url('/reset_credentials/' . $admin_details->user_id) }}" class="btn btn-secondary btn-xs"
                    data-toggle="tooltip" data-placement="bottom" title="Reset user password"
                    style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-undo"></i></a>

                @permission('can-view-settings')
                    <a href="{{ url('/assign_permissions_to_user/' . $admin_details->user_id) }}"
                        class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                        title="Assign permissions to user" style="display:inline;padding:2px 5px 3px 5px;"><i
                            class="fa fa-eye"></i></a>
                @endpermission

                @permission('can-delete-user')
                    <span id="display_status_button{{ $admin_details->user_id }}">
                        @if ($admin_details->end_record == 0)
                            <a onclick="deleteuser(this.id)" id="{{ $admin_details->user_id }}" class="btn btn-secondary btn-xs"
                                data-toggle="tooltip" data-placement="bottom" title="Deactivate user account"
                                style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-user-times"
                                    style="color: rgb(255, 255, 255)"></i></a>
                            <input type="hidden" name="" value="1" id="user_status{{ $admin_details->user_id }}">
                        @else
                            <a onclick="deleteuser(this.id)" value="0" id="{{ $admin_details->user_id }}"
                                class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="bottom"
                                title="Reactivate user account" style="display:inline;padding:2px 5px 3px 5px;"><i
                                    class="fa fa-user-plus" style="color: rgb(255, 255, 255)"></i></a>

                            <input type="hidden" name="" value="0" id="user_status{{ $admin_details->user_id }}">
                        @endif
                    </span>
                @endpermission

                <hr>
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-6">
                            <div class="block block-rounded block-link-shadow">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ $admin_details->name }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ $admin_details->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ $admin_details->phone_number1 }}</p>
                                            </div>
                                        </div>
                                        {{-- <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Address</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ $admin_details->address1 }}</p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                {{-- ////////////////////////////////////////////////////// --}}
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-6">
                            <div class="block block-rounded">
                                <div class="block-content">

                                    @permission('can-view-user-details')
                                        <!-- Course Info -->
                                        <div class="block block-rounded">
                                            <div class="block-content">
                                                <table class="table table-borderless table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span id="display_status{{ $admin_details->user_id }}">
                                                                    @if ($admin_details->end_record == 0)
                                                                        <i class="fa fa-unlock" style="color: green;"> Active
                                                                        </i>
                                                                    @else
                                                                        <i class="fa fa-lock" style="color: red;"> Disabled </i>
                                                                    @endif
                                                                </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-fw fa-lock mr-10"></i>

                                                                <a
                                                                    href="{{ url('view_role/' . $admin_details->role_id) }}">{{ $admin_details->role_display_name }}</a>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-fw fa-key mr-10"></i>
                                                                @if (!empty($userPermissions))
                                                                    @foreach ($userPermissions as $s)
                                                                        <label
                                                                            class="badge badge-primary">{{ $s->display_name }}</label>
                                                                    @endforeach
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Course Info -->
                                    @endpermission
                                </div>

                            </div>
                        </div>
                        <!-- END Lessons -->

                    </div>
                    <!-- END Page Content -->
                    <script>
                        function deleteuser(e) {
                            swal({
                                    title: "Are you sure?",
                                    text: "You want update this Record!",
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
                                paging: false,
                                ordering: false,
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
