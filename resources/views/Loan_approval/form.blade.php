@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add New Loan Approval</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('store2') }}" method="get">
            @csrf
            <div class="form-group">
                <label for="name">Application_id</label>
                <input type="text" name="application_id" id="name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="name">Approver	</label>
                <input type="text" name="approver" id="name" class="form-control">
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
