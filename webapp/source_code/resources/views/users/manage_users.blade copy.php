@extends('layouts.master')
@section('title') AAFLAWFIRM - Dashboard  @endsection
@section('content')
@include('layouts.dashboard_header')
{{-- ////////////////////////////////////////////////////////////////// --}}
<div>
    <h3>Manage Users</h3>
    <hr class="my-0">
</div>
<a href="{{ url('/register_user') }}"><button type="button" class="btn btn-outline-primary"><span class="btn-label"><i class="fa fa-user-plus"></i></span> Register New User</button></a>


            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-borderless table-striped">
                <thead>
               <tr style="background-color: #0073cf">

                   <th style="color: white" class="exportable">S/NO</th>
                   <th style="color: white" class="exportable">NAME</th>
                   <th style="color: white" class="exportable">EMAIL</th>
                   <th style="color: white" class="exportable">ROLE</th>
                   <th style="color: white">ACTION</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($role_users as $a => $role_user)
                <tr>
                    <td><a href="{{ url('view_user_details/'.$role_user->user_id) }}">{{$a + 1}}</a></td>
                    <td><a href="{{ url('view_user_details/'.$role_user->user_id) }}">{{$role_user->name}}</a></td>
                  <td>{{$role_user->email}}</td>
                  <td>{{$role_user->role_display_name}}</td>
                  <td>

                   {{--<a href="{{ url('view_user_details/'.$role_user->user_id) }}"><button type="button" class="btn btn-warning btn-sm btn-flat"><span class="btn-label"><i class="fa fa-info-circle"></i></span> Info</button></a>--}}

                   <a href="{{ url('edit_user/'.$role_user->user_id) }}"><button type="button" class="btn  btn-success btn-sm btn-flat"><span class="btn-label"><i class="fa fa-edit"></i></span> Edit</button></a>

                   <a href="{{ url('/reset_credentials/'.$role_user->user_id) }}"><button type="button" class="btn btn-primary btn-flat"><span class="btn-label"></span> Reset Password</button></a>

                 <button type="button" class="btn btn-danger btn-sm btn-flat" onclick="deleteuser(this.id)" id="{{$role_user->user_id}}"><span class="btn-label"><i class="fa fa-trash"></i></span> Delete</button>


                  </td>
                </tr>
                 @endforeach

                </tbody>

              </table>
            </div>
            <!-- /.box-body -->


    <script>
 function deleteuser(e) {
   //alert(e);
   // var id = $(e.currentTarget).attr("id");
   // alert= $id,
   // var userId = $(e.currentTarget).data("id");
  swal({
    title: "Are you sure?",
    text: "You want to delete this User!",   type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
  },
       function(){
       window.location.href = "{{ url('/delete_user') }}" + '/' + e;

    // $("#myform").submit();
  });
}

</script>
@section('datatableissuesfixed')
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#example1').removeAttr('width').DataTable( {

        scrollCollapse: true,
        paging:         true,
        ordering:       true,
        searching:    true,
        columnDefs: [
            { width: 8, targets: 0 },
            { width: 120, targets: 1 },
            { width: 140, targets: 2 },
            { width: 140, targets: 3 },
            { width: 400, targets: 4 },
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


    } );
} );
</script>
@endsection
{{-- ////////////////////////////////////////////////////////////////// --}}
@include('layouts.dashboard_footer')
@endsection
