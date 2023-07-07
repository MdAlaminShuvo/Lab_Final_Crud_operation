@extends('students.layout')
@section('content')

<div class="card" style='margin:20px;'>
    <div class="card-header">
        Create New Students
    </div>
    <div class="card-body">
        <form action="{{url('/student')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input id="mobile" class="form-control" type="text" name="mobile">
            </div>
            <div class="form-group" style="margin-top:20px;">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
    </div>
</div>
  
@stop