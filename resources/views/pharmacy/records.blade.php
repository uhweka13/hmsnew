@extends('layouts.pharmacy_app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
              @include('include.message')
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="admin-index">Home</a></li>
                  <li class="breadcrumb-item active">Pharmacy Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">

<div class="container-fluid">
  <div class="row">
  <div class="col-12">
      
      <div class="card">
      <div class="card-header">
          <h3 class="card-title">Records</h3>
          <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
          </div>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
      
        <table class="table table-hover">
            <thead>
                <tr>
                <th>Card No</th>
                <th>Names</th>
                <th>D.O.B</th>
                <th>Phone Number</th>
                <th>Location</th>
                <th>Test</th>
                <th>Result</th>
                <th>Amount Paid</th>
                <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                <td>check</td>
                <td>check</td>
                <td>check</td>
                <td>check</td>
                <td>check</td>
                <td>check</td>
                <td>check</td>
                <td>check</td>
                <td>check</td>
            </tbody>
          </table>

       
         </div>
     
      </div>
      
    </div>
  </div>
  
</div>

</section>
@endsection
