@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Loan Application</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('update') }}" method="get">
            @csrf
            <input type=""name="id" value="{{$alldata->id}}" hidden>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$alldata->name}}">
            </div>
            <div class="form-group">
                <label for="employeeID">EmployeeID</label>
                <input type="text" name="employeeID" id="employeeID" class="form-control" value="{{$alldata->employeeID}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{$alldata->phone}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$alldata->email}}">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" value="{{$alldata->position}}">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" id="department" class="form-control" value="{{$alldata->department}}">
            </div>
            <div class="form-group">
                <label for="loanAmount">LoanAmount</label>
                <input type="text" name="loanAmount" id="loanAmount" class="form-control" value="{{$alldata->loanAmount}}">
            </div>
            <div class="form-group">
                <label for="repayment">Repayment</label>
                <input type="text" name="repayment" id="repayment" class="form-control"value="{{$alldata->repayment}}">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" id="date" class="form-control"value="{{$alldata->date}}">
            </div>
            <div class="form-group">
                <label for="repayment_amount_per_month">REPAPM</label>
                <input type="text" name="repayment_amount_per_month" id="repayment_amount_per_month" class="form-control"value="{{$alldata->repayment_amount_per_month}}">
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control"value="{{$alldata->salary}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control"value="{{$alldata->status}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
