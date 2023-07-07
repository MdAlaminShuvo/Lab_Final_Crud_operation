@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 10 Crud (Create, Read, Update and Delete) </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/student/create')}}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>
                                                <a href="{{ url('/student/'.$item->id)}}" class="btn btn-primary btn-sm" title="View Student">
                                                    View
                                                </a>
                                                <a href="{{ url('/student/'.$item->id . '/edit')}}" class="btn btn-info btn-sm" title="Edit Student">
                                                    Edit
                                                </a>
                                                <form action="{{ url('/student/'.$item->id)}}" method="post" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>