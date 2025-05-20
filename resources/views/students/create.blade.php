@extends('layouts.app')
@section('content')
<div class="container pt-4 container-fluid">
    <form class="form">
        <div class="row mb-3">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-2 pt-1">
                <label for="" class="">Stud No</label>
            </div>  
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" placeholder="First Name" class="form-control">
            </div>
            <div class="col">
                <input type="text" placeholder="Middle Name" class="form-control">
            </div>
            <div class="col">
                <input type="text" placeholder="Last Name" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" placeholder="Address" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">
                <input type="date" placeholder="Date of Birth" class="form-control">
            </div>
        </div>

        <button class="btn btn-info float-right">Submit</button>
    </form>
</div>
@endsection