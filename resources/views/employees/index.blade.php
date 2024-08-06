@extends('admin._layout')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <a href="{{route('add')}}" class="btn btn-primary" >Add</a><br><br>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($employees as $emp)
                  <tr>
                    <td>{{$emp->id}}</td>
                    <th>{{$emp->name}}</th>
                    <th>{{$emp->email}}</th>
                    <th>{{$emp->password}}</th>
                    {{-- <th><a href="" class="btn btn-primary">Edit</a></th> --}}
                    <th><a href="{{url('employees/delete/' .$emp->id)}}"  class="btn btn-danger">Delete</a></th>
                    <th><a href="{{url('employees/edit/'.$emp->id)}}"  class="btn btn-success">Edit</a></th>
                    
                    

                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- <h1>This is car page</h1> -->
@endsection