@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students in BSIT 3A') }}</h1>
                    <p class="m-0">{{('Account Details')}}</p>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Account Details3</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                  </thead>
                    <tr>
                        <td>2022314994</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>The wise man build this house upon the rock</td>
                    </tr>
                    <tr>
                        <td>2022314995</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>The wise man build this house upon the rock</td>
                    </tr>
                    <tr>
                        <td>2022314996</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>The wise man build this house upon the rock</td>
                    </tr>
                    <tr>
                        <td>2022314997</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>The wise man build this house upon the rock</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection