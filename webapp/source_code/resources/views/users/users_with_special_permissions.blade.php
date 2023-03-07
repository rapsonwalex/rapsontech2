@extends('layouts.master')
@section('title')
    Special Permissions
@endsection
@section('content')
    @include('layouts.dashboard_header')
    {{-- ////////////////////////////////////////////////////////////////// --}}


    <div class="content">
        <h3 class="content-heading"> All Users with Special Permissions</h3>

        <hr>
        <!-- Dynamic Table Full -->

        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table id="example1" class="table table-bordered table-striped table-vcenter js-dataTable-full table-responsive">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S/NO</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">NAME</th>
                        <th class="text-center" style="width: 15%;">EMAIL</th>
                        <th class="text-center" style="width: 15%;">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $a => $user)
                        <tr>
                            <td class="text-center">{{ $a + 1 }}</td>
                            <td class="font-w600">
                                {{ $user->name }}
                            </td>
                            <td class="font-w600">{{ $user->email }}</td>

                            <td class="text-center">


                                <a href="{{ url('assign_permissions_to_user/' . $user->id) }}" target="_blank"><button
                                        type="button" class="btn btn-sm btn-flat"
                                        style="background-color: #a353c8 ; color: white"><span class="btn-label"><i
                                                class="fa fa-key"></i></span> view
                                        Special Permissions</button></a>
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
                        width: 200,
                        targets: 2
                    },
                    {
                        width: 240,
                        targets: 3
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
