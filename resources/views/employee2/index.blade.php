@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Employee Management') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="col-6 m-auto">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">ADD EMPLOYEE</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('employee2.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label"><strong>First name</strong></label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter first name"
                                name="emp_fname">
                        </div>
                        @error('emp_fname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="col-md-6">
                            <label for="lastName" class="form-label"><strong>Last name</strong></label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter last name"
                                name="emp_lname">
                        </div>
                        @error('emp_lname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="address" class="form-label"><strong>Address</strong></label>
                            <input type="text" class="form-control" id="address" placeholder="Enter address"
                                name="emp_address">
                        </div>
                        @error('emp_address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="col-md-6">
                            <label for="phone" class="form-label"><strong>Phone</strong></label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number"
                                name="emp_phone">
                        </div>
                        @error('emp_phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $items)
            <tr>
                <td>{{$items->id}}</td>
                <td>{{$items->emp_fname}}</td>
                <td>{{$items->emp_lname}}</td>
                <td>{{$items->emp_address}}</td>
                <td>{{$items->emp_phone}}</td>
                <td>
                    <a href="{{ route('employee2.edit', $items->id) }}" class="btn btn-primary btn-sm">
                        Update
                    </a>
                    <form action="{{ route('employee2.delete', $items->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection