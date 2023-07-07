@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">
        Edit Students Details
    </div>
    <div class="card-header">

        <form action="{{ url('student/' .$students->id )}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ $students->name }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" class="form-control" type="text" name="address" value="{{ $students->address }}">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input id="mobile" class="form-control" type="text" name="mobile" value="{{ $students->mobile }}">
            </div>
            <div class="form-group" style="margin-top:20px;">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>

    </div>
</div>

@stop