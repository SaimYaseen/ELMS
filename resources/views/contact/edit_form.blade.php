@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Contact</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('update3') }}" method="get">
            @csrf
            <input type=""name="id" value="{{$alldata->id}}" hidden>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$alldata->name}}" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$alldata->email}}">
            </div>
            <div class="form-group">
                <label for="position">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{$alldata->subject}}">
            </div>
            <div class="form-group">
                <label for="department">Message</label>
                <input type="text" name="message" rows='6' id="message" class="form-control" value="{{$alldata->message}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
