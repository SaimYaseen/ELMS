@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add New Loan Application</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('store') }}" method="get">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="employeeID">EmployeeID</label>
                <input type="text" name="employeeID" id="employeeID" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" id="department" class="form-control">
            </div>
            <div class="form-group">
                <label for="loanAmount">LoanAmount</label>
                <input type="text" name="loanAmount" id="loanAmount" class="form-control">
            </div>
            <div class="form-group">
                <label for="repayment">Repayment</label>
                <input type="text" name="repayment" id="repayment" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="repayment_amount_per_month">REPAPM</label>
                <input type="text" name="repayment_amount_per_month" id="repayment_amount_per_month" class="form-control">
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
