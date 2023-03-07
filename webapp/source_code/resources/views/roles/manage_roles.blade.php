@extends('layouts.master')
@section('title')
    Manage Roles
@endsection
@section('content')
    @include('layouts.dashboard_header')
    {{-- ////////////////////////////////////////////////////////////////// --}}


    <div class="content">
        <h3 class="content-heading"> Manage Roles</h3>

        <hr>
        <a href="{{ url('/create_role') }}">
            <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-plus"></i>Add New Role
            </button></a>
        <a href="{{ url('/users_with_special_permissions') }}">
            <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-eye"></i>Users with Special Permissions
            </button></a>
        <!-- Dynamic Table Full -->

        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table id="example1"
                class="table table-bordered table-striped table-vcenter js-dataTable-full table-responsive">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S/NO</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">NAME</th>
                        <th class="text-center" style="width: 15%;">DISPLAY NAME</th>
                        <th class="text-center" style="width: 15%;">DESCRIPTION</th>
                        <th class="text-center" style="width: 15%;">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $a => $role)
                        <tr>
                            <td class="text-center">{{ $a + 1 }}</td>
                            <td class="font-w600">
                                <a href="{{ url('view_role/' . $role->id) }}">
                                    {{ $role->name }}</a>
                            </td>
                            <td class="font-w600">{{ $role->display_name }}</td>
                            <td class="font-w600"> {{ $role->description }}</td>
                            <td class="text-center">

                                <a href="{{ url('view_role/' . $role->id) }}" class="btn btn-secondary btn-xs"
                                    data-toggle="tooltip" data-placement="bottom" title="View User Info"
                                    style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-info"></i></a>

                                <a href="{{ url('edit_role/' . $role->id) }}" class="btn btn-secondary btn-xs"
                                    data-toggle="tooltip" data-placement="bottom" title="Edit user"
                                    style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>
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
