@extends('admin._layout')
@section('content')
<div class="card-body">
  <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped table-responsive">
          <thead>
            <a href="{{route('add1')}}" class="btn btn-primary" >Add</a><br><br>
              <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>EmployeeID</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Department</th>
                  <th>LoanAmount</th>
                  <th>Repayment</th>
                  <th>Date</th>
                  <th>REPAPM</th>
                  <th>Salary</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
              @foreach($application as $app)
              <tr>
                  <td>{{$app->id}}</td>
                  <td>{{$app->name}}</td>
                  <td>{{$app->employeeID}}</td>
                  <td>{{$app->phone}}</td>
                  <td>{{$app->email}}</td>
                  <td>{{$app->position}}</td>
                  <td>{{$app->department}}</td>
                  <td>{{$app->loanAmount}}</td>
                  <td>{{$app->repayment}}</td>
                  <td>{{$app->date}}</td>
                  <td>{{$app->repayment_amount_per_month}}</td>
                  <td>{{$app->salary}}</td>
                  <td>{{$app->status}}</td>
                  <th><a href="{{url('Loan_application/edit1/'.$app->id)}}"  class="btn btn-success">Edit</a></th>
                  <th><a href="{{url('Loan_application/delete1/' .$app->id)}}"  class="btn btn-danger">Delete</a></th>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>

<script>
  $(document).ready(function () {
      $('#example1').DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>



    {{-- <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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
    </script> --}}
    <!-- <h1>This is car page</h1> -->
@endsection
